<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\User;
use Exception;

class GoogleController extends Controller
{
    public function redirect()
    {
        // Method 1: Configure Socialite to ignore SSL
        config(['socialite.services.google.guzzle' => [
            'verify' => false
        ]]);
        
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        try {
            // Method 2: Alternative approach with custom HTTP client
            $http = new \GuzzleHttp\Client(['verify' => false]);
            Socialite::driver('google')->setHttpClient($http);
            
            $googleUser = Socialite::driver('google')->user();

            // Debug: What Google is sending
            logger()->info('Google User Data:', [
                'id' => $googleUser->id,
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'avatar' => $googleUser->avatar,
            ]);

            // Fix: Your current $user query is missing ->first()
            $user = User::where('email', $googleUser->email)->first();

            if (!$user) {
                $userData = [
                    'google_id' => $googleUser->id,
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'password' => bcrypt(Str::random(16)),
                ];
                
                // Debug: Data being inserted
                logger()->info('Creating user with:', $userData);
                
                $user = User::create($userData);
            }

            // Debug: Final user object
            logger()->info('Logged in user:', $user->toArray());
            
            Auth::login($user);
            
            return redirect()->route('pages.landing-page');
        } catch (Exception $e) {
            logger()->error('Google Auth Error: '.$e->getMessage());
            return redirect()->route('login')->with('error', 'Google login failed');
        }
    }
}
