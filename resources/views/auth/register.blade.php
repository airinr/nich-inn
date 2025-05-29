<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hotel Landing Page</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <style>
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .fade-in {
      animation: fadeInUp 0.4s ease-out both;
    }

    .fade-delay-1 {
      animation-delay: 0.2s;
    }
  </style>
</head>

<body class="bg-gradient-to-r from-indigo-900/75 to-blue-600/75 text-gray-900 font-sans mx-4">
    <div class="h-screen flex flex-col justify-center items-center">
        <div class="bg-white/70 w-fit mx-auto my-auto p-1 rounded-lg shadow-2xl fade-in dafe-delay-1"> <!-- Pembungkus Tengah -->
            <div class="flex flex-row w-auto max-w-4xl rounded-lg overflow-hidden">
                <!-- Ilustrasi Kiri -->
                <div class="hidden md:flex w-1/2 items-center justify-center p-10">
                    <img src="assets/img/logo.png" alt="Illustration" class="max-h-96 object-contain"/>
                </div>

                {{-- Garis Vertikal --}}
                <div class="hidden md:flex justify-center">
                    <div class="w-px h-[80%] bg-gray-500 my-auto"></div>
                </div>

                <!-- Form Login -->
                <div class="w-full md:w-1/2 p-10">
                <h2 class="text-2xl font-bold text-gray-700 mb-6">Welcome</h2>
                <form method="POST" action="{{ route('register') }}">
                  @csrf
                    <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="email">Name</label>
                    <input
                        type="text"
                        name="name"
                        id="name"
                        placeholder="riski boy pratama"
                        class="w-full px-4 py-2 border border-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-indigo-900"
                    />
                    </div>
                    <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="email">Email</label>
                    <input
                        type="text"
                        name="email"
                        id="email"
                        placeholder="example@gmail.com"
                        class="w-full px-4 py-2 border border-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-indigo-900"
                    />
                    </div>
                    <div class="mb-6">
                    <label class="block text-gray-700 mb-2" for="password">Password</label>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        placeholder="********"
                        class="w-full px-4 py-2 border border-gray-500 rounded focus:outline-none focus:ring-2 focus:ring-indigo-900"
                    />
                    </div>
                    <div class="mb-6">
                    <label class="block text-gray-700 mb-2" for="password">Confirm Password</label>
                    <input
                        type="password"
                        name="password_confirmation"
                        id="password_confirmation"
                        placeholder="********"
                        class="w-full px-4 py-2 border border-gray-500 rounded focus:outline-none focus:ring-2 focus:ring-indigo-900"
                    />
                    </div>
                    <button
                    type="submit"
                    class="w-full bg-gradient-to-r from-blue-500 to-indigo-900 text-white py-2 rounded hover:opacity-90 transition duration-300">
                    Register
                    </button>
                </form>

                <a href="{{ route('auth.google.redirect') }}"
                    class="flex items-center justify-center w-full gap-2 border border-gray-400 px-4 py-2 mt-5 rounded text-sm bg-white hover:bg-gray-100 shadow">
                    <img src="https://www.svgrepo.com/show/355037/google.svg" class="h-5 w-5" />
                    Register with Google
                </a>


                <div class="mt-4 text-center">
                    <a href="{{ route('login') }}" class="text-sm text-gray-600">Already have account?</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
