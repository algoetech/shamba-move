<!-- Top Bar Nav -->
{{-- <div class="fixed top-0 z-50 w-full"> --}}
<div class="absolute hidden w-full overlayer-menu h-[820px] bg-black/40 z-[170]" id="menu-overlay"></div>
<nav class="sticky z-50 flex flex-row w-full py-4 ps-2">
    <button id="toggleFrontSidebarMobile" aria-expanded="true" aria-controls="frontSidebar"
        class="h-auto text-gray-600 rounded cursor-pointer max-h-[40px] p-2 bg-vendor-secondary-beta md:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
        <svg id="toggleSidebarMobileHamburger" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"></path>
        </svg>
        <svg id="toggleSidebarMobileClose" class="hidden w-6 h-6" fill="currentColor"
            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
        </svg>
    </button>
    <div class="container flex flex-wrap items-center justify-between w-full mx-auto">
        <span class="ml-3 ">
            <a href="{{route('index')}}" class="capitalize capitals text-vendor-secondary-beta">
                <h2 class="capitalize text-vendor-secondary-beta">{{ config('app.name', 'Shamba Mov') }}</h2>

            </a>
        </span>


        <div class="flex items-center pr-6 text-white no-underline poppin-light ">
            <a href="{{ Auth::user()?route('dashboard'):route('login') }}" class="flex flex-row items-center justify-center gap-2 transition-all delay-100 text-vendor-secondary-alpha/95 hover:text-orange-200 hover:scale-102 duration-400 ease-soft-out">
                <i class="fas fa-user mr-[2px]"></i>
                <span class="hidden md:flex"> {{ Auth::user()?__(Auth::user()->name):trans('Member') }}</span>
            </a>
            <a href="" class="flex flex-row items-center justify-center gap-2 pl-4 transition-all delay-100 text-vendor-secondary-alpha/95 hover:text-orange-200 hover:scale-102 duration-400 ease-soft-out ">
                <i class="fas fa-phone mr-[2px]"></i>
                <span class="hidden md:flex">Contacts</span>
            </a>
            <a href="{{route('media')}}" class="flex flex-row items-center justify-center gap-2 transition-all delay-100 ms-2 justify text-vendor-secondary-alpha/95 hover:text-orange-200 hover:scale-102 duration-400 ease-soft-out ">
                <i class="fas fa-images mr-[2px]"></i>

                <span class="hidden md:flex">Media</span>
            </a>

        </div>



    </div>

</nav>

<!-- Text Header -->
<header id="mobileMenu" class="sticky px-5 md:mx-auto w-[256px] rounded-1 md:rounded-0 bg-white md-max:h-full  md-max:right-0 md-max:top-0 md-max:fixed md:bg-transparent md:w-full md:container z-110 md-max:translate-x-[256px] transition-all duration-200 delay-75 ease-soft-in-out">

    <nav class="z-50 {{--hidden--}} pr-5 text-left md:text-right md:block md-max:pt-10 md-max:fixed" id="frontSidebar">
        <ul class="z-50 flex flex-col justify-start text-left md:text-right md:justify-end md:flex-row">
            <li class="px-3 py-3 transition-all delay-150 md:border-t duration-450 ease-soft-in md:hover:border-t-2 md:hover:border-vendor-compliment-primary md:border-vendor-secondary-beta">
                <a href="{{url('/')}}" class="py-4 md-max:text-vendor-compliment-primary text-slate-100 hover:text-vendor-secondary-beta">Home</a>
            </li>
            <li class="px-3 py-3 transition-all delay-150 md:border-t duration-450 ease-soft-in md:hover:border-t-2 md:hover:border-vendor-compliment-primary md:border-vendor-secondary-beta">
                <a href="{{route('categories')}}" class="py-4 md-max:text-vendor-compliment-primary text-slate-100 hover:text-vendor-secondary-beta">Posts</a>
                {{-- <hr data-content="Test" class="w-full m-0 text-transparent opacity-100 group-hover:after:from-transparent group-hover:after:via-vendor-secondary-beta group-hover:after:to-transparent text-start tai-font hr group-hover:text-vendor-secondary-beta"> --}}
            </li>
            @foreach ($pages as $spage)
                @if ($spage->resource)
                <li class="px-3 py-3 transition-all delay-150 md:border-t duration-450 ease-soft-in md:hover:border-t-2 md:hover:border-vendor-compliment-primary md:border-vendor-secondary-beta">
                    <a href="{{route('frontend.page', $spage->slug)}}" class="py-4 md-max:text-vendor-compliment-primary text-slate-100 hover:text-vendor-secondary-beta">{{$spage->title}}</a>
                        {{-- <hr data-content="Test" class="w-full m-0 text-transparent opacity-100 group-hover:after:from-transparent group-hover:after:via-vendor-secondary-beta group-hover:after:to-transparent text-start tai-font hr group-hover:text-vendor-secondary-beta"> --}}
                    </li>
                @endif
            @endforeach

        </ul>
    </nav>
</header>
{{-- </div> --}}
