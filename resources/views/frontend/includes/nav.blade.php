<!-- Top Bar Nav -->
{{-- <div class="fixed top-0 z-50 w-full"> --}}
<nav class="sticky z-50 w-full py-4">
    <div class="container flex flex-wrap items-center justify-between w-full mx-auto">
        <span class="ml-3 ">
            <a href="{{route('index')}}" class="capitalize capitals text-vendor-secondary-beta">
                <h2 class="capitalize text-vendor-secondary-beta">{{ config('app.name', 'Shamba Mov') }}</h2>

            </a>
        </span>


        <div class="flex items-center pr-6 text-white no-underline poppin-light ">
            <a href="{{ Auth::user()?route('dashboard'):route('login') }}" class="transition-all delay-100 text-vendor-secondary-alpha/95 hover:text-orange-200 hover:scale-102 duration-400 ease-soft-out">
                <i class="fas fa-user mr-[2px]"></i>
                {{ Auth::user()?__(Auth::user()->name):trans('Member') }}
            </a>
            <a href="" class="pl-4 transition-all delay-100 text-vendor-secondary-alpha/95 hover:text-orange-200 hover:scale-102 duration-400 ease-soft-out ">
                <i class="fas fa-phone mr-[2px]"></i>
                Contacts
            </a>
            <a href="" class="flex flex-row justify-center transition-all delay-100 justify text-vendor-secondary-alpha/95 hover:text-orange-200 hover:scale-102 duration-400 ease-soft-out ">
                <i class="fas fa-images mr-[2px]"></i>

                <span class="md:flex sm:hidden">Media</span>
            </a>

        </div>
    </div>

</nav>

<!-- Text Header -->
<header class="container sticky w-full px-5 mx-auto z-110">
    <nav class="z-50 pr-5 text-right ">
        <ul class="z-50 flex flex-row justify-end text-right">
            <li class="px-3 py-3 transition-all delay-150 border-t duration-450 ease-soft-in hover:border-t-2 hover:border-vendor-compliment-primary border-vendor-secondary-beta">
                <a href="{{url('/')}}" class="py-4 text-slate-100 hover:text-vendor-secondary-beta">Home</a>
            </li>
            <li class="relative px-3 py-3 transition-all delay-150 border-t group duration-450 ease-soft-in border-vendor-secondary-beta hover:border-t-2 hover:border-vendor-compliment-primary ">
                <a href="#" class="py-4 text-slate-100 hover:text-vendor-secondary-beta">Posts</a>
                {{-- <hr data-content="Test" class="w-full m-0 text-transparent opacity-100 group-hover:after:from-transparent group-hover:after:via-vendor-secondary-beta group-hover:after:to-transparent text-start tai-font hr group-hover:text-vendor-secondary-beta"> --}}
            </li>
            @foreach ($pages as $spage)
                @if ($spage->resource)
                    <li class="relative px-3 py-3 transition-all delay-150 border-t group duration-450 ease-soft-in border-vendor-secondary-beta hover:border-t-2 hover:border-vendor-compliment-primary ">
                        <a href="{{route('frontend.page', $spage->slug)}}" class="py-4 text-slate-100 hover:text-vendor-secondary-beta">{{$spage->title}}</a>
                        {{-- <hr data-content="Test" class="w-full m-0 text-transparent opacity-100 group-hover:after:from-transparent group-hover:after:via-vendor-secondary-beta group-hover:after:to-transparent text-start tai-font hr group-hover:text-vendor-secondary-beta"> --}}
                    </li>
                @endif
            @endforeach

        </ul>
    </nav>
</header>
{{-- </div> --}}
