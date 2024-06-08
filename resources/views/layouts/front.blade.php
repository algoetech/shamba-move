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
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/quill/2.0.2/quill.bubble.min.css" integrity="sha512-/7xGl11n/6f/vbRmITKPWT3I0xFG9hExxOoBjabIQDyXi9lGai/OM8QYUBZp/asaRfIw3Ie/i61i50HjDRXnGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/quill/2.0.2/quill.core.min.css" integrity="sha512-rvP2ghMACNMJ0HoDaJdeQ0eVwDCLyQCbHCmoBBaCKGF/GkA+NExPuXQdnK4h40sQFyIvfVsiwh4bO3lJdkL01Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/quill/2.0.2/quill.snow.min.css" integrity="sha512-UmV2ARg2MsY8TysMjhJvXSQHYgiYSVPS5ULXZCsTP3RgiMmBJhf8qP93vEyJgYuGt3u9V6wem73b11/Y8GVcOg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}

        <!-- wowjs -->
        <script src="{{asset('assets/wowjs/dist/wow.min.js')}}"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/quill/2.0.2/quill.core.js" integrity="sha512-uPt5Ro44E08ZJ4sXUROiw+xLSXECXFCj2fAwd1aarSjrotmjuZiMPV6I7s2wOxU8/Z9M0njcwFq4dHGPJcLQFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/quill/2.0.2/quill.core.min.js" integrity="sha512-aDz65p6BL6tDCij/afEmGS72H2ZYsFmPvBz9/F6zO1L7SJ2TlGDyb4HOS6jXhX0j13kLtNrtc33n1Ry3338TKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    </head>
    <body class="antialiased text-gray-900 poppin">
        
        {{ $slot }}
    </body>
</html>
