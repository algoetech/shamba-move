
@section('styles')

@endsection
<x-front>
    @include('frontend.includes.nav')

    <!-- banner image -->
    <div class="fixed top-0 w-full">
        <span id="overlay"
            class="w-full absolute h-[920px] bg-gradient-to-tr from-black/80 via-vendor-compliment-primary/60 to-vendor-compliment-primary">
        </span>

        <img class="w-full" id="banner"
            src="{{ asset('assets/images/villages-farm.jpg') }}" alt="Farmer">
    </div>
    <section class="md:container sm:hidden mx-auto md:grid grid-cols-12 gap-4 relative z-100 lg:mt-[100px]  text-white">
        <div
            class="w-full px-4 py-3 sm:w-full md:w-full col-span-full lg:col-start-1 lg:col-end-8 shadow-soft-lg bg-black/[0.09] border-l-2 border-vendor-secondary-alpha">
            <span class="flex flex-col">
                @if ($posts && count($posts) > 0)
                    <div id="default-carousel" class="relative w-full" data-carousel="slide">
                        <!-- Carousel wrapper -->
                        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                            @foreach ($posts as $post)
                                <!-- Carousel item -->
                                <div class="hidden duration-700 ease-in-out delta post @if (!$loop->first) {{ __('z-10') }} @endif"
                                    data-carousel-item="@if ($loop->first) {{ __('active') }} @endif">
                                    <div class="absolute block w-full p-6 bg-transparent rounded-lg">
                                        <h2 class="text-4xl font-bold text-white capitalize tai-font">
                                            {{ $post->title }}</h2>
                                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400 lora">{!! Str::limit($post->content, 320, '...') !!}
                                        </p>
                                        <p class="mt-4 text-2xl font-bold text-rose-700">
                                            By <span class="font-semibold underline tai-font underline-offset-8">{{ $post->user->name }}</span>
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Slider indicators -->
                        <div
                            class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2 rtl:space-x-reverse">
                            @foreach ($posts as $index => $post)
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="true"
                                    aria-label="Slide {{ $index + 1 }}"
                                    data-carousel-slide-to="{{ $index }}"></button>
                            @endforeach
                        </div>
                        <!-- Slider controls -->
                        <button type="button"
                            class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer start-0 group focus:outline-none"
                            data-carousel-prev>
                            <span
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M5 1 1 5l4 4" />
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button"
                            class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer end-0 group focus:outline-none"
                            data-carousel-next>
                            <span
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>
                @else
                    <h2 class="text-white">Maonyesho ya SabaSaba</h2>
                    <p href="#" class="pb-3 text-sm text-rose-200">
                        By <a href="#" class="font-semibold hover:text-vendor-secondary-alpha">David Grzyb</a>,
                        Published on
                        April 25th, 2020
                    </p>
                    <p class="text-lg text-white">
                        As a global advocate for the plant science industry,
                        CropLife International champions innovative technologies that enable farmers to sustainably
                        increase
                        productivity while managing the critical challenges facing our climate and the environment.
                    </p>
                    <div class="grid items-end grid-cols-12 gap-4 text-left ">
                        <div class="col-span-4 col-start-8 text-center">
                            <a href="#"
                                class="w-full group py-[12px] shadow-soft-xl rounded-2 transition-all delay-200 duration-350 ease-soft-out bg-gradient-to-tr from-vendor-secondary-beta to-vendor-secondary-alpha hover:from-vendor-primary hover:to-vendor-compliment-primary/50">
                                READ MORE
                                <i
                                    class="mx-2 transition-none duration-350 delay-300 fas fa-arrow-right group-hover:ml-4 ease-[cubic-bezier(.79,.17,.13,.73)]"></i>
                        </a>
                        </div>
                    </div>
                @endif

            </span>
        </div>
        <div
            class="flex-col hidden w-full px-4 py-3 text-right md:flex lg:col-start-9 lg:col-end-12 text-vendor-secondary-beta">
            <x-full-logo class="w-full"></x-full-logo>
        </div>
    </section>

    <!-- section header here -->
    <section class="container relative w-full p-0 mt-20 align-middle rounded-2 z-100 ">
        <h1 class="pt-20 pb-10 font-bold text-center text-7xl text-vendor-secondary-beta tai-font">{{ $title }}
        </h1>
    </section>


    {{-- section --}}
    <section class="relative w-full p-0 pt-10 mt-20 align-middle bg-white rounded-0 z-100">

        <div class="container w-full my-3 text-justify lora">
            {!! $cate->description !!}
        </div>

        <h2 class="container w-full pt-8 text-center border-b hover:border-b-4 border-vendor-secondary-alpha tai-font">Relative Posts</h2>
       <div class="container grid grid-cols-12 gap-3 p-2">

        @foreach ($cate->posts as $post)

            <div class="relative h-auto row-auto p-3 shadow-soft-lg xl:col-span-4 lg:col-span-4 md:col-span-6 sm-max:col-span-full sm:col-span-full rounded-2">
                <h3 class="w-full text-center">{{$post->title}}</h3>
                <div class="relative w-full overflow-hidden min-h-[200px] max-h-[210px]">
                    <img src="{{url($post->image)}}" alt="{{$post->title}}" class="absolute w-full min-h-[200px] max-h-[210px]">


                </div>
                <small class="px-3 py-2 text-red-600 text-start tai-font text-[24px]">
                    By {{$post->user->name}}.
                </small>

                <span class="py-3 lora">
                    {!!Str::limit($post->content, 450, '...') !!}
                </span>

                <div class="sticky bottom-0 flex justify-end mt-3 ">
                    <a href="{{route('readpost', ['slug'=>$post->slug])}}" class="p-3 px-4 rounded-1 shadow-soft-md bg-vendor-tertiary-beta">
                        <div class="mr-2 fas fa-link"></div>
                        Read More
                    </a>
                </div>
            </div>
        @endforeach
       </div>
    </section>




    @include('layouts.footer')

    <script type="module">
        $(document).ready(function() {
            function setOverlayHeight() {
                $('#overlay').height($('#banner').height());
            }
            // Set the height when the document is ready
            setOverlayHeight();
            // Set the height on window resize
            $(window).resize(function() {
                setOverlayHeight();
            });

            // const carousel = new Carousel(carouselElement, items, options, instanceOptions);

            const carousel = new Carousel(document.getElementById('default-carousel'), {
                interval: 10000, // Optional: interval time in milliseconds
                pause: 'hover' // Optional: pause the carousel on hover
            });
            console.log("aman");
        });
    </script>
</x-front>
