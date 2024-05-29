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
