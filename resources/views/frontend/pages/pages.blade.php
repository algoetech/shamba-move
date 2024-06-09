<x-front>
    @include('frontend.includes.nav')

    <!-- banner image -->
    <div class="fixed top-0 w-full">
        <span id="overlay"
            class="w-full absolute h-[920px] bg-gradient-to-tr from-black/80 via-vendor-compliment-primary/60 to-vendor-compliment-primary">
        </span>

        <img class="w-full" id="banner" src="{{$page->banner?url($page->banner):asset('assets/images/villages-farm.jpg')}}" alt="Farmer">
    </div>
    <section class="md:container sm:hidden mx-auto md:grid grid-cols-12 gap-4 relative z-100 lg:mt-[100px]  text-white">
        <div
            class="w-full px-4 py-3 sm:w-full md:w-full col-span-full lg:col-start-1 lg:col-end-8 shadow-soft-lg bg-black/[0.09] border-l-2 border-vendor-secondary-alpha">
            <span class="flex flex-col">
                <h2 class="text-white">Maonyesho ya SabaSaba</h2>
                <p href="#" class="pb-3 text-sm text-rose-200">
                    By <a href="#" class="font-semibold hover:text-vendor-secondary-alpha">David Grzyb</a>, Published on
                    April 25th, 2020
                </p>
                <p class="text-lg text-white">
                    As a global advocate for the plant science industry,
                    CropLife International champions innovative technologies that enable farmers to sustainably increase
                    productivity while managing the critical challenges facing our climate and the environment.
                </p>
                <div class="grid items-end grid-cols-12 gap-4 text-left ">
                    <div class="col-span-4 col-start-8 text-center">
                        <button
                            class="w-full group py-[12px] shadow-soft-xl rounded-2 transition-all delay-200 duration-350 ease-soft-out bg-gradient-to-tr from-vendor-secondary-beta to-vendor-secondary-alpha hover:from-vendor-primary hover:to-vendor-compliment-primary/50">
                            READ MORE
                            <i class="mx-2 transition-none duration-350 delay-300 fas fa-arrow-right group-hover:ml-4 ease-[cubic-bezier(.79,.17,.13,.73)]"></i>
                        </button>
                    </div>
                </div>
            </span>
        </div>
        <div
            class="flex-col hidden w-full px-4 py-3 text-right md:flex lg:col-start-9 lg:col-end-12 text-vendor-secondary-beta">
            Arusha </br>
            <small>Temp: &nwarrow; 30&deg; </small>
            <div >
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512">

                    <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"></path>
                  </svg>
            </div>
        </div>
    </section>

    <!-- section header here -->
    <section class="container relative w-full p-0 mt-20 align-middle rounded-2 z-100 ">
        <h1 class="pt-20 pb-10 font-bold text-center text-7xl text-vendor-secondary-beta tai-font">{{$page->title}}</h1>
    </section>

    <!-- section container here -->
    <section class="sticky grid w-full p-0 bg-white pb-30 rounded-0 z-100">

        <div class="container grid w-full grid-cols-12 px-4 py-8 mx-auto">

            <div class="w-full col-start-1 col-end-13 p-3 text-justify md:col-end-8 bg-slate-200/10">
                {!! $page->content !!}
            </div>
            <div class="col-start-8 col-end-13 p-3 py-4 ml-10 bg-green-100/40 rounded-2 shadow-soft-sm">
                <h3 class="pt-5 text-4xl capitalize tai-font">Other pages.</h3>
                <ul class="p-4 border-t-2 border-vendor-secondary-beta me-10">
                    @foreach ($pages as $nopage)
                    @if (!$nopage->resource)
                    <li class="flex items-center px-3 py-2 space-x-3 hover:bg-green-500/20 rounded-1 rtl:space-x-reverse">
                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                            </svg>
                        <span class="capitalize ">
                            <a class="hover:scale-110 hover:text-vendor-secondary-alpha text-vendor-compliment-primary" href="{{route('frontend.page', ['slug' => $nopage->slug])}}">
                                {{$nopage->title}}
                            </a>
                        </span>
                    </li>
                    @endif

                    @endforeach

                </ul>
            </div>
        </div>
    </section>

    @include('layouts.footer')

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
</x-front>
