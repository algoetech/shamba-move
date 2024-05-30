<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Fonts -->
        <link rel="stylesheet" href="{{asset('assets/wowjs/css/libs/animate.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/shamba.css')}}">

        <!-- wowjs -->
        <script src="{{asset('assets/wowjs/dist/wow.min.js')}}"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased text-gray-900 poppin">
        <div class="flex z-100 sticky flex-col items-center min-h-screen pt-6 sm:justify-center sm:pt-0">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 text-gray-500 fill-current" />
                </a>
            </div>

            <div class="w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-md dark:bg-gray-800 sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
         <!-- banner image -->
    <div class="absolute top-0 w-full">
        <span id="overlay"
            class="w-full absolute h-[920px] bg-gradient-to-tr from-black/80 via-vendor-compliment-primary/60 to-vendor-compliment-primary">
        </span>
        <img class="w-full" id="banner" src="{{asset('assets/images/villages-farm.jpg')}}" alt="Farmer">
    </div>
    </body>
</html>
