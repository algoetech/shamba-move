<!-- Latest footer -->
<footer class="sticky w-full pt-2 mt-0 bg-black/70 z-100 lg:min-h-120">
    <div class="container grid w-full grid-flow-row grid-cols-12 p-5 mt-5 lg:mt-10 auto-rows-max">

        <div class="flex w-full lg:col-span-4 md:col-span-6 sm:col-span-12 lg:px-4 lg:pr-8">

            <span class="relative flex flex-col w-full ">
                <h4 class="text-4xl text-vendor-secondary-beta tai-font"><i class="mx-3 text-3xl fas fa-globe"></i>Our Motto.</h4>
                <hr data-content="Test" class="w-full m-0 opacity-100 tai-font hr text-vendor-secondary-beta">
                site Motto eee
            </span>
        </div>
        <div class="flex w-full lg:col-span-4 md:col-span-6 sm:col-span-12 lg:px-4">
            <span class="relative flex flex-col justify-center w-full">
                <h4 class="text-4xl text-vendor-secondary-beta tai-font"><i class="mx-3 text-3xl fas fa-globe"></i>Our SiteMap</h4>
                <hr data-content="Test" class="w-full m-0 opacity-100 tai-font hr text-vendor-secondary-beta">
                <ul class="flex-grow mt-2 md:ms-4 ms-2">
                    @isset($pages)
                        @foreach ($pages as $page)
                            @if ($loop->index < 6)
                                <li
                                    class="flex items-center px-3 py-1 space-x-3 hover:bg-gray-500/20 rounded-1 rtl:space-x-reverse">
                                    <i class="mr-2 fas fa-globe text-vendor-tertiary-alpha"></i>
                                    <span class="capitalize "><a
                                            class="hover:scale-110 hover:text-white text-vendor-secondary-alpha"
                                            href="{{ route('frontend.page', ['slug' => $page->slug]) }}">{{ $page->title }}</a></span>
                                </li>
                            @endif
                        @endforeach

                    @endisset

                </ul>
            </span>
        </div>
        <div class="flex w-full lg:col-span-4 md:col-span-6 sm:col-span-12 lg:px-4">
            <span class="relative flex flex-col justify-center w-full">
                <h4 class="text-4xl text-vendor-secondary-beta tai-font"><i class="mx-3 text-3xl fas fa-phone lg:mr-5"></i>Our Contacts
                </h4>
                <hr data-content="Test" class="w-full m-0 opacity-100 tai-font hr text-vendor-secondary-beta">
                <ul class="flex-grow mt-2">
                    <li class="flex items-center px-3 py-1 space-x-3 rounded-1 rtl:space-x-reverse">
                        <span class="text-white">
                            <i class="mx-2 fas fa-map-pin"></i>
                            2798 Njiro, Arusha Tanzania.
                        </span>

                    </li>
                </ul>
            </span>
        </div>

    </div>
    <div class="absolute bottom-0 flex w-full col-span-12 bg-vendor-compliment-primary/80 min-h-20">

        <div class="flex justify-center w-full p-5 text-white tai-font">
           2024 &copy;copyright
        </div>
    </div>
</footer>
