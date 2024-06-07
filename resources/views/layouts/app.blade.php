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
    <style>
        .ql-editor {
            width: 100%;
        }
    </style>
    @yield('style')

    <!-- Scripts -->

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased poppin">

    @if (session('message'))
        <script type="module">
            Swal.fire({
                text: '{{ session('message') }}',
                icon: 'error',
                timer: 10000,
                timerProgressBar: true,
                toast: true,
                position: 'center',
                color: '#333',
                showConfirmButton: true,
                customClass: {
                    container: 'bg-slate-300',
                    htmlContainer: 'bg-slate-50'
                },
            });
        </script>
    @endif
    @if (session('status'))
        <script type="module">
            Swal.fire({
                text: '{{ session('status') }}',
                icon: 'success',
                timer: 5000,
                timerProgressBar: true,
                toast: true,
                position: 'top-right',
                color: '#333',
                showConfirmButton: false,
            });
        </script>
    @endif
    @if (session('error'))
        <script type="module">
            Swal.fire({
                text: '{{ session('error') }}',
                icon: 'error',
                timer: 5000,
                timerProgressBar: true,
                toast: true,
                position: 'top-right',
                color: '#333',
                showConfirmButton: false,
            });
        </script>
    @endif
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')

        <div class="flex pt-16 overflow-hidden">

            @include('layouts.aside')

            <!-- Page Content -->

            <div class="fixed inset-0 z-10 hidden bg-gray-900 dark:bg-gray-900/90 " id="sidebarBackdrop"></div>

            <main id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">

                <div class="grid grid-cols-1 px-4 pt-6 xl:grid-cols-3 xl:gap-4 dark:bg-gray-900">
                    <div class="mb-4 col-span-full xl:mb-2">
                        <nav class="flex mb-5" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                                <li class="inline-flex items-center">
                                    <a href="#"
                                        class="inline-flex items-center text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-primary-500">
                                        <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                            </path>
                                        </svg>
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <a href="#"
                                            class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-primary-500"> {{ $title ?? 'Home' }}</a>
                                    </div>
                                </li>

                            </ol>
                        </nav>
                        <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                            {{ $title ?? 'Home' }}

                        </h1>
                    </div>

                {{ $slot }}
                </div>

            </main>

        </div>
    </div>

    <script type="module">
        var quill = new Quill('#editor', {
            theme: 'snow',
            modules: {
                toolbar: [
                    ['bold', 'italic', 'underline', 'strike'],
                    [{ 'header': []}],
                    [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                    ['link', 'image', 'video'],
                    ['blockquote', 'code-block'],
                    [{ 'font': [] }],
                    [{ 'direction': 'rtl' }],
                    [{ 'size': [] }, 'clean'],
                    [{ 'script': 'sub' }, { 'script': 'super' }],
                    [{ 'indent': '-1' }, { 'indent': '+1' }],
                    [{ 'direction': 'rtl' }],
                    [{ 'align': [] },{ 'color': [] }, { 'background': [] }],

                ]
            }
        });

        @isset($javascript)
            {{$javascript}}
        @endisset
        


    </script>
    <script src="{{asset('assets/js/admin/main.js')}}"></script>

    @isset($scripts)
        {{$scripts}}
    @endisset

</body>

</html>
