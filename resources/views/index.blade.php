<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{asset('assets/wowjs/css/libs/animate.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/shamba.css')}}">

        <!-- wowjs -->
        <script src="{{asset('assets/wowjs/dist/wow.min.js')}}"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-white poppin ">

        <!-- Top Bar Nav -->
        <nav class="sticky z-50 w-full py-4">
            <div class="container flex flex-wrap items-center justify-between w-full mx-auto">
                <span class="ml-3 ">
                    <a href="{{route('index')}}" class="capitalize capitals text-vendor-secondary-beta">
                        <h2 class="capitalize text-vendor-secondary-beta">{{ config('app.name', 'Shamba Mov') }}</h2>

                    </a>
                </span>


                <div class="flex items-center pr-6 text-white no-underline poppin-light ">
                    <a href="{{ route('login') }}" class="transition-all delay-100 text-vendor-secondary-alpha/95 hover:text-orange-200 hover:scale-102 duration-400 ease-soft-out">
                        <i class="fas fa-user mr-[2px]"></i>
                        Member
                    </a>
                    <a href="" class="pl-4 transition-all delay-100 text-vendor-secondary-alpha/95 hover:text-orange-200 hover:scale-102 duration-400 ease-soft-out ">
                        <i class="fas fa-phone mr-[2px]"></i>
                        Contacts
                    </a>
                    <a href="" class="pl-4 transition-all delay-100 text-vendor-secondary-alpha/95 hover:text-orange-200 hover:scale-102 duration-400 ease-soft-out ">
                        <i class="fas fa-images mr-[2px]"></i>
                        Media
                    </a>

                </div>
            </div>

        </nav>

        <!-- Text Header -->
        <header class="container sticky w-full px-5 mx-auto z-110">
            <nav class="z-50 pr-5 text-right ">
                <ul class="z-50 flex flex-row justify-end text-right">
                    <li class="px-3 py-3 transition-all delay-150 border-t duration-450 ease-soft-in hover:border-t-2 hover:border-vendor-compliment-primary border-vendor-secondary-beta">
                        <a href="" class="py-4 text-slate-100 hover:text-vendor-secondary-beta">Home</a>
                    </li>
                    @foreach ($pages as $page)

                        <li class="px-3 py-3 transition-all delay-150 border-t duration-450 ease-soft-in border-vendor-secondary-beta hover:border-t-2 hover:border-vendor-compliment-primary ">
                            <a href="{{route('frontend.page', $page->slug)}}" class="py-4 text-slate-100 hover:text-vendor-secondary-beta">{{$page->title}}</a>
                        </li>

                    @endforeach

                </ul>
            </nav>
        </header>

        <!-- banner image -->

        <div class="absolute top-0 w-full">
            <span id="overlay" class="w-full absolute h-[920px] bg-gradient-to-tr from-black/80 via-vendor-compliment-primary/60 to-vendor-compliment-primary"> </span>
            <img class="w-full" id="banner" src="{{asset('assets/images/villages-farm.jpg')}}" alt="Farmer">
        </div>


        <section class="container mx-auto grid grid-cols-12 gap-4 relative z-100 lg:mt-[100px]  text-white">
            <div class="w-full px-4 py-3 lg:col-start-1 lg:col-end-8 shadow-soft-lg bg-black/[0.09] border-l-2 border-vendor-secondary-alpha">
                <span class="flex flex-col">
                    <h2 class="text-white">Maonyesho ya SabaSaba</h2>
                    <p href="#" class="pb-3 text-sm text-rose-200">
                        By <a href="#" class="font-semibold hover:text-vendor-secondary-alpha">David Grzyb</a>, Published on April 25th, 2020
                    </p>
                    <p class="text-lg text-white">
                        As a global advocate for the plant science industry,
                        CropLife International champions innovative technologies that enable farmers to sustainably increase productivity while managing the critical challenges facing our climate and the environment.
                    </p>
                    <div class="grid items-end grid-cols-12 gap-4 text-left ">

                        <div class="col-span-4 col-start-8 text-center">
                            <button class="w-full group py-[12px] shadow-soft-xl rounded-2 transition-all delay-200 duration-350 ease-soft-out bg-gradient-to-tr from-vendor-secondary-beta to-vendor-secondary-alpha hover:from-vendor-primary hover:to-vendor-compliment-primary/50">
                                READ MORE
                                <i class="mx-2 transition-none duration-350 delay-300 fas fa-arrow-right group-hover:ml-4 ease-[cubic-bezier(.79,.17,.13,.73)]"></i>
                            </button>
                        </div>
                      </div>
                </span>
            </div>
            <div class="flex-col hidden w-full px-4 py-3 text-right md:flex lg:col-start-9 lg:col-end-12 text-vendor-secondary-beta">
                Arusha </br>
                <small>Temp: &nwarrow; 30&deg; </small>
            </div>
        </section>


        <div class="container relative flex flex-wrap py-6 mx-auto mt-5 z-100 lg:mt-30">

            <!-- Posts Section -->
            <section class="flex flex-col items-center w-full px-3 md:w-2/3">

                <article class="flex flex-col my-4 shadow">
                    <!-- Article Image -->
                    <a href="#" class="hover:opacity-75">
                        <img src="https://source.unsplash.com/collection/1346951/1000x500?sig=1">
                    </a>
                    <div class="flex flex-col justify-start p-6 bg-orange-100">
                        <a href="#" class="pb-4 text-sm font-bold text-blue-700 uppercase">Technology</a>
                        <a href="#" class="pb-4 text-3xl font-bold hover:text-gray-700">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</a>
                        <p href="#" class="pb-3 text-sm">
                            By <a href="#" class="font-semibold hover:text-gray-800">David Grzyb</a>, Published on April 25th, 2020
                        </p>
                        <a href="#" class="pb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis porta dui. Ut eu iaculis massa. Sed ornare ligula lacus, quis iaculis dui porta volutpat. In sit amet posuere magna..</a>
                        <a href="#" class="text-gray-800 uppercase hover:text-black">Continue Reading <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>

                <article class="flex flex-col my-4 shadow">
                    <!-- Article Image -->
                    <a href="#" class="hover:opacity-75">
                        <img src="https://source.unsplash.com/collection/1346951/1000x500?sig=2">
                    </a>
                    <div class="flex flex-col justify-start p-6 bg-white">
                        <a href="#" class="pb-4 text-sm font-bold text-blue-700 uppercase">Automotive, Finance</a>
                        <a href="#" class="pb-4 text-3xl font-bold hover:text-gray-700">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</a>
                        <p href="#" class="pb-3 text-sm">
                            By <a href="#" class="font-semibold hover:text-gray-800">David Grzyb</a>, Published on January 12th, 2020
                        </p>
                        <a href="#" class="pb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis porta dui. Ut eu iaculis massa. Sed ornare ligula lacus, quis iaculis dui porta volutpat. In sit amet posuere magna..</a>
                        <a href="#" class="text-gray-800 uppercase hover:text-black">Continue Reading <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>

                <article class="flex flex-col my-4 shadow">
                    <!-- Article Image -->
                    <a href="#" class="hover:opacity-75">
                        <img src="https://source.unsplash.com/collection/1346951/1000x500?sig=3">
                    </a>
                    <div class="flex flex-col justify-start p-6 bg-white">
                        <a href="#" class="pb-4 text-sm font-bold text-blue-700 uppercase">Sports</a>
                        <a href="#" class="pb-4 text-3xl font-bold hover:text-gray-700">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</a>
                        <p href="#" class="pb-3 text-sm">
                            By <a href="#" class="font-semibold hover:text-gray-800">David Grzyb</a>, Published on October 22nd, 2019
                        </p>
                        <a href="#" class="pb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis porta dui. Ut eu iaculis massa. Sed ornare ligula lacus, quis iaculis dui porta volutpat. In sit amet posuere magna..</a>
                        <a href="#" class="text-gray-800 uppercase hover:text-black">Continue Reading <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>

                <!-- Pagination -->
                <div class="flex items-center py-8">
                    <a href="#" class="flex items-center justify-center w-10 h-10 text-sm font-semibold text-white bg-blue-800 hover:bg-blue-600">1</a>
                    <a href="#" class="flex items-center justify-center w-10 h-10 text-sm font-semibold text-gray-800 hover:bg-blue-600 hover:text-white">2</a>
                    <a href="#" class="flex items-center justify-center w-10 h-10 ml-3 text-sm font-semibold text-gray-800 hover:text-gray-900">Next <i class="ml-2 fas fa-arrow-right"></i></a>
                </div>

            </section>

            <!-- Sidebar Section -->
            <aside class="flex flex-col items-center w-full px-3 md:w-1/3">

                <div class="flex flex-col w-full p-6 my-4 bg-white shadow">
                    <p class="pb-5 text-xl font-semibold">About Us</p>
                    <p class="pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mattis est eu odio sagittis tristique. Vestibulum ut finibus leo. In hac habitasse platea dictumst.</p>
                    <a href="#" class="flex items-center justify-center w-full px-2 py-3 mt-4 text-sm font-bold text-white uppercase bg-blue-800 rounded hover:bg-blue-700">
                        Get to know us
                    </a>
                </div>

                <div class="flex flex-col w-full p-6 my-4 bg-white shadow">
                    <p class="pb-5 text-xl font-semibold">Instagram</p>
                    <div class="grid grid-cols-3 gap-3">
                        <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=1">
                        <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=2">
                        <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=3">
                        <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=4">
                        <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=5">
                        <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=6">
                        <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=7">
                        <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=8">
                        <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=9">
                    </div>
                    <a href="#" class="flex items-center justify-center w-full px-2 py-3 mt-6 text-sm font-bold text-white uppercase bg-blue-800 rounded hover:bg-blue-700">
                        <i class="mr-2 fab fa-instagram"></i> Follow @dgrzyb
                    </a>
                </div>

            </aside>

        </div>

        <footer class="w-full pb-12 bg-white border-t">
            <div
                class="relative flex items-center invisible w-full md:visible md:pb-12"
                x-data="getCarouselData()"
            >
                <button
                    class="absolute w-16 h-16 ml-12 text-2xl font-bold text-white bg-blue-800 rounded-full hover:bg-blue-700 hover:shadow"
                    x-on:click="decrement()">
                    &#8592;
                </button>
                <template x-for="image in images.slice(currentIndex, currentIndex + 6)" :key="images.indexOf(image)">
                    <img class="w-1/6 hover:opacity-75" :src="image">
                </template>
                <button
                    class="absolute right-0 w-16 h-16 mr-12 text-2xl font-bold text-white bg-blue-800 rounded-full hover:bg-blue-700 hover:shadow"
                    x-on:click="increment()">
                    &#8594;
                </button>
            </div>
            <div class="container flex flex-col items-center w-full mx-auto">
                <div class="flex flex-col py-6 text-center md:flex-row md:text-left md:justify-between">
                    <a href="#" class="px-3 uppercase">About Us</a>
                    <a href="#" class="px-3 uppercase">Privacy Policy</a>
                    <a href="#" class="px-3 uppercase">Terms & Conditions</a>
                    <a href="#" class="px-3 uppercase">Contact Us</a>
                </div>
                <div class="pb-6 uppercase">&copy; myblog.com</div>
            </div>
        </footer>

        <script>
            function getCarouselData() {
                return {
                    currentIndex: 0,
                    images: [
                        'https://source.unsplash.com/collection/1346951/800x800?sig=1',
                        'https://source.unsplash.com/collection/1346951/800x800?sig=2',
                        'https://source.unsplash.com/collection/1346951/800x800?sig=3',
                        'https://source.unsplash.com/collection/1346951/800x800?sig=4',
                        'https://source.unsplash.com/collection/1346951/800x800?sig=5',
                        'https://source.unsplash.com/collection/1346951/800x800?sig=6',
                        'https://source.unsplash.com/collection/1346951/800x800?sig=7',
                        'https://source.unsplash.com/collection/1346951/800x800?sig=8',
                        'https://source.unsplash.com/collection/1346951/800x800?sig=9',
                    ],
                    increment() {
                        this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex + 1;
                    },
                    decrement() {
                        this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex - 1;
                    },
                }
            }

            var ts = document.getElementById('banner');

        </script>
        <script type="module">
            $(document).ready(function () {
                function setOverlayHeight() {
                    $('#overlay').height($('#banner').height());
                }

                // Set the height when the document is ready
                setOverlayHeight();

                // Set the height on window resize
                $(window).resize(function () {
                    setOverlayHeight();
                });
            });
        </script>

    </body>
</html>
