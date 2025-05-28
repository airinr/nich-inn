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
      animation: fadeInUp 0.8s ease-out both;
    }

    .fade-delay-1 {
      animation-delay: 0.3s;
    }

    .fade-delay-2 {
      animation-delay: 0.6s;
    }

    .fade-delay-3 {
      animation-delay: 0.9s;
    }
  </style>
</head>

<body class="bg-white text-gray-900 font-sans mx-4">

  <!-- Navigation -->
  <nav class="sticky top-0 z-50 bg-white flex justify-around gap-4 p-2 rounded-xl mx-auto mb-6 text-xs fade-in fade-delay-1">
    <div class="flex items-center">
      <img src="assets/img/logo.png" alt="Logo" class="w-10 h-10 rounded-full object-cover">
      <p class="mx-0 font-bold">NICH INN</p>
    </div>

    <div class="flex justify-center">
      <button class="bg-white px-6 py-3 rounded-full hover:bg-indigo-900 hover:text-white transition hover:cursor-pointer">Home</button>
      <button class="bg-white px-6 py-3 rounded-full hover:bg-indigo-900 hover:text-white transition hover:cursor-pointer">Find A Hotel</button>
      <button class="bg-white px-6 py-3 rounded-full hover:bg-indigo-900 hover:text-white transition hover:cursor-pointer">About Us</button>
    </div>

    <button class="bg-indigo-900 text-white px-6 py-3 rounded-full hover:cursor-pointer">Profile</button>
  </nav>

  <!-- Hero Image -->
  <div class="max-w-5xl mx-auto px-4 fade-in fade-delay-2">
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
  <section class="bg-indigo-900 text-white px-6 py-10 rounded-3xl max-w-5xl mx-auto mt-10 flex flex-col md:flex-row gap-8 fade-in fade-delay-3">
    <!-- Left Side -->
    <div class="relative flex-1 flex flex-col items-start pt-24">
      <div class="absolute -top-17 flex gap-4 mb-2">
        <img src="assets/img/hotel-1.png" alt="thumb1" class="w-20 h-20 rounded-full object-cover">
        <img src="assets/img/hotel-2.png" alt="thumb2" class="w-20 h-20 rounded-full object-cover">
        <img src="assets/img/hotel-3.png" alt="thumb3" class="w-20 h-20 rounded-full object-cover">
      </div>
      <button class="bg-white text-indigo-900 font-semibold px-6 py-2 rounded-full mt-0 hover:bg-indigo-900 hover:text-white transition hover:border">Find Hotel</button>
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
