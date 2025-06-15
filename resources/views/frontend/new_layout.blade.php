<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Happy Mango Tours')</title>
    <meta name="description" content="@yield('description', 'Unforgettable journeys, breathtaking destinations, and personalized experiences await you!')">
    <meta name="keywords" content="@yield('keywords', 'tours, travel, sri lanka, happy mango tours')">

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="{{ asset('new_frontend/output.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('new_frontend/CSS/styles.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

    @yield('additional_css')
</head>
<body>
    <div class="w-screen min-h-screen flex justify-center items-center flex-col text-white">
        @include('frontend.components.new_header')

        @yield('content')

        @include('frontend.components.new_footer')
    </div>

    @yield('additional_js')
</body>
</html>
