<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Desa')</title>
    {{-- CSS Eksternal --}}
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    {{-- CDN Talwind Css --}}
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- CDN Animate.css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    {{-- CDN Slider --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css" />

</head>

<body class="relative bg-[#EAEAEA] overflow-x-hidden text-gray-900">

    <!-- Header -->
    <div class="max-w-max">
        @include('partials.header')
    </div>

    <!-- Main Content -->
    <div class="md:mx-auto max-w-max">
        @yield('content')
    </div>


    <!-- Footer -->
    <div class="max-w-[225vh] bg-[#252A34]">
        @include('partials.footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
