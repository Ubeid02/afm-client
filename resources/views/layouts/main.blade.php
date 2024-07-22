<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/logo-afm.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="css/next-prev-card.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/hero-slide.css">
    <link rel="stylesheet" href="css/dashboard.css">

    {{-- CSS Swiper --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    
    <title>Anugerah Forklift Megantara</title>
</head>
<body class="font-karla">
    <header class="w-full">
        @include('partials.navbar')
        {{-- @include('partials.hero') --}}
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-[#323232] w-full content-center shadow-[0_-5px_10px_rgba(0,0,0,0.3)]">
        @include('partials.footer')
    </footer>

    <script src="js/navbar.js"></script>
    <script src="js/hero-slide.js"></script>
    <script src="js/dashboard.js"></script>
    <script src="js/next-prev-card.js"></script>
    <script src="js/about.js"></script>

    {{-- JavaScript Swiper --}}
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</body>
</html>