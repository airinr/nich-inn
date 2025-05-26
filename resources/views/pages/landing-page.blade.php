<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel Landing Page</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-white text-gray-900 font-sans mx-4">

    <!-- Header -->
    <header class="text-center py-6">
        <h1 class="text-3xl font-bold">NICH INN</h1>
    </header>

    <!-- Navigation -->
    <nav class="flex justify-around gap-4 bg-indigo-100 p-1 rounded-xl mx-auto mb-6 text-xs">
        <div class="w-10 h-10 bg-black rounded-full"></div>

        <button class="bg-white px-6 py-1 rounded-full hover:bg-indigo-900 hover:text-white transition">Home</button>
        <button class="bg-white px-6 py-1 rounded-full hover:bg-indigo-900 hover:text-white transition">Find A Hotel</button>
        <button class="bg-white px-6 py-1 rounded-full hover:bg-indigo-900 hover:text-white transition">About Us</button>
        <button class="bg-white px-6 py-1 rounded-full hover:bg-indigo-900 hover:text-white transition">Profile</button>
    </nav>


    <!-- Hero Image -->
    <div class="max-w-5xl mx-auto px-4">
        <img src="assets/img/landing-1.png" alt="Hotel" class="rounded-3xl w-full mb-6 h-70">

        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold leading-tight">Stay in Style,<br />Sleep in Comfort</h2>
            </div>
            <div class="mt-4 md:mt-0 md:ml-4 max-w-md">
                <div class="w-110 h-3 bg-indigo-900 rounded-full mb-2"></div>
                <p class="text-sm">More than a place to stay — it’s where your urban journey begins, and comfort never ends.</p>
            </div>
        </div>
    </div>

    <!-- Info Section -->
    <section class="bg-indigo-900 text-white px-6 py-10 rounded-3xl max-w-5xl mx-auto mt-10 flex flex-col md:flex-row gap-8">
        <!-- Left Side -->
        <div class="relative flex-1 flex flex-col items-start pt-24 ">
            <div class="absolute -top-17 flex gap-4 mb-2">
                <img src="assets/img/hotel-1.png" alt="thumb1" class="w-20 h-20 rounded-full object-cover">
                <img src="assets/img/hotel-2.png" alt="thumb2" class="w-20 h-20 rounded-full object-cover">
                <img src="assets/img/hotel-3.png" alt="thumb3" class="w-20 h-20 rounded-full object-cover">
            </div>
            <button class="bg-white text-indigo-900 font-semibold px-6 py-2 rounded-full mt-0 hover:bg-indigo-900 hover:text-white transition hover:border hover:border1">Find Hotel</button>
        </div>

        <!-- Right Side -->
        <div class="flex-1 flex flex-col items-end relative">
            <p class="text-right text-lg font-semibold mb-10">
                Experience refined<br />
                elegance where every<br />
                detail is crafted to exceed<br />
                your expectations.
            </p>
            <img src="assets/img/hotel-4.png" alt="Room" class="absolute -bottom-27 rounded-[50px] w-95 max-w-md">
        </div>
    </section>

</body>

</html>