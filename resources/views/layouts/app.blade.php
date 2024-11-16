<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Desa')</title>
    {{-- CDN Talwind Css --}}
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- CDN Animate.css --}}
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  
</head>
<body class="relative bg-white overflow-x-hidden text-gray-900">

    <!-- Header -->
    @include('partials.header')

    <!-- Main Content -->
    <div class="mx-auto w-full  mt-10">
        @yield('content')
    </div>
     
    
    <!-- Footer -->
    @include('partials.footer')

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>