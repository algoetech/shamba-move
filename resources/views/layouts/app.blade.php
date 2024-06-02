<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'Algo-e Tech') }}</title>

    <link rel="stylesheet" href="{{asset('assets/css/shamba.css')}}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @yield('style')

    <!-- Scripts -->

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased poppin">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')

        <div class="flex pt-16 overflow-hidden">

            @include('layouts.aside')

            <!-- Page Content -->

            <div class="fixed inset-0 z-10 hidden bg-gray-900 dark:bg-gray-900/90 " id="sidebarBackdrop"></div>

            <main id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
                {{ $slot }}

            </main>

        </div>
    </div>

    <script src="{{asset('assets/js/admin/main.js')}}"></script>
    @isset($scripts)
        {{$scripts}}
    @endisset

</body>

</html>
