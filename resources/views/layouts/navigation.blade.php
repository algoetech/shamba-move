<nav class="fixed z-30 w-full border-b border-gray-200 bg-gradient-vendor-secondary dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3 bg-black/30">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start">

                {{-- sidebar trigger --}}
                <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar"
                    class="p-2 text-gray-600 rounded cursor-pointer lg:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
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
                {{-- /sidebar trigger --}}

                <a href="{{url('/')}}" class="flex ml-2 md:mr-24">

                    <svg id="prefix__Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 885.33 500.56" class="mr-3 h-14">
                        <defs>
                            <style>
                                .prefix__cls-1 {
                                    fill: #ffbc2a
                                }
                            </style>
                        </defs>
                        <path class="prefix__cls-1"
                            d="M518.8 492.5c-6.7-2.3-12.7-4-18.4-6.5-12.9-5.8-26.2-10.9-38.2-18.2-16.2-9.8-32.2-20.3-44.9-34.7-19.7-22.4-31.4-47.7-27.5-78.4 2.9-23.1 12-43.7 25.4-62.3 8-11.1 17.4-21.2 25.8-32.1 12.2-15.9 25-31.4 35.8-48.2 9.8-15.4 16.9-32.4 19.2-51 2-15.9.7-31-9.5-45.7 2.4.9 3.7 1.3 5 1.9a195.8 195.8 0 0165.3 51.3c28.2 34.1 38.7 73.4 30.2 117-4.6 23.4-12.8 45.7-25.7 65.9-8.2 12.9-17.4 25.2-25.8 38-11.1 16.7-20.3 34.1-22.2 54.6a115.5 115.5 0 004.1 42.5c.3 1.7.7 3.3 1.4 5.9z"
                            transform="translate(-65 -115.4)" />
                        <path class="prefix__cls-1 animate animate-bounce"
                            d="M606.4 262.3c4.4 8.2 9 16.4 13.1 24.7 9.7 19.4 16.3 39.7 18.1 61.3 2.4 28.9-4.3 55.3-24.2 77.1a194.8 194.8 0 01-24.6 22.4c-17.3 13.4-35.2 26.2-53.1 39.4-4.2-10.7-6.4-22.1-4.9-34a103 103 0 0116.9-45.2c8.2-12.2 17.6-23.5 25.4-35.8 18.6-29.2 28.8-61.4 32.4-95.8.5-4.5.1-9 .1-13.5z"
                            transform="translate(-65 -115.4)" />
                        <path class="prefix__cls-1"
                            d="M279.1 598c3-7.9 5.5-14.2 7.7-20.6.5-1.4-.3-3.1-.5-4.7-.3-3.9-.8-7.8-.9-11.6 0-.6 1.8-1.6 2.7-1.6 10.4-.1 20.8-.1 32.1-.1 0 3.9.1 7.3 0 10.7 0 .8-.4 2.3-.8 2.3-5.9 1.1-3.7 5.8-3.8 9.1a98 98 0 00.2 13.6c.1 1.6 1.7 3 2.6 4.6.6.9 1.5 1.9 1.6 2.9.2 3.6.1 7.3.1 11.4h-26.6v-11.8c0-.7.2-1.7.6-1.9 8.3-4.4 1.3-11.6 4.2-17l-1.5-.4c-3.6 9.5-7.4 19-10.5 28.7-1.1 3.3-2.6 4.3-5.5 3.8-3.1-.6-7.2 2.2-8.9-3.5a231.8 231.8 0 00-11.6-29.6v14.4c0 .8.2 2.3.6 2.4 7.6 2.4 2.5 8.6 3.8 12.8.1.5-1.6 2.3-2.6 2.4-7.8.2-15.6.1-24.1.1 0-4.2-.1-8 0-11.8 0-.8.6-2.1 1-2.2 5.5-.8 3.5-4.9 3.6-8.1 0-4.4.1-8.7 0-13.1-.1-2.6.1-4.6-3-6.8-2-1.4-1.3-7.3-1.2-11.1 0-.7 3-1.8 4.6-1.8 8.6-.2 17.1 0 25.6-.1 3.4-.1 5 1.1 4.5 4.5-.5 3.2-1.3 6.3-1.9 9.4a6.3 6.3 0 00-.1 3c2.6 6.7 5.1 13.5 8 21.7zM532.6 613.8h-26.1v-15.4a3.1 3.1 0 01.2-1.3c4.5-9.7 4.5-9.6 3-21.8l-2.4 7.8c-2.7 9.5-5.3 19.1-8.3 28.5a5.6 5.6 0 01-3.5 3.5c-8.4 1.4-8.7 1-11.6-9-3.1-10.5-6.2-21-10.3-31.3v18.1c0 .6.1 1.6.4 1.8 8 4.1 1.6 12.4 4.7 18.9h-27v-14.7c0-.8.3-2.2.6-2.3 5.8-1.5 3.4-7.2 3.6-11.3.3-4.9.1-9.9.1-14.9-.1-3.2-.1-5.6-3-8.3-2-1.9-1.2-9.1-1-13.8 0-.8 3.3-2 5.1-2.1 8.3-.2 16.5 0 24.8-.1 3.1-.1 4.7 1.3 4.2 5.2-.5 4.3-1.3 8.5-1.9 12.7a6.4 6.4 0 00.2 2.5c2.4 8.5 4.8 16.9 7.3 25.9 6.9-14.7 9.3-29.5 5.6-46.2 11.8 0 22.3 0 32.7.1.8 0 2.3 1.4 2.2 1.9-.9 5.2 3.6 12.1-3.1 15.6-.7.4-.9 3-.9 4.6-.1 6.9-.1 13.8 0 20.7 0 3-1.1 6.8 3.1 7.2.4 0 1 2.1 1.1 3.2.2 4.4.2 8.9.2 14.3zM778.3 614.1h-26.8v-11.6a3.7 3.7 0 01.4-2c4.3-6.3 4.7-8.2 3.3-18.6-3.9 10.6-7.8 19.8-10.6 29.4-1.3 4.5-3.9 4.1-7 4.1-3.3-.1-6.5.9-8-4.2a181.4 181.4 0 00-11.3-28.4v15c0 .3.1.9.3.9 7.9 3.4 2.2 10 4.4 15.3h-27v-11.8c0-.7.3-1.8.6-1.9 5.9-1.2 3.5-5.9 3.7-9.2a78.4 78.4 0 00-.1-13.1c-.2-1.8-2.2-3.3-2.6-5.1a51 51 0 01-1.4-11.3c0-.8 3.1-2.1 4.8-2.1 8.6-.2 17.1 0 25.7-.1 3.2 0 4.7 1.1 4.2 4.3-.5 3.4-1.4 6.8-2 10.3a4.4 4.4 0 00.2 2.1c2.4 6.8 4.9 13.7 7.5 21.1 6.4-12.1 10-23.7 5.3-37.2 3.2-.2 5-.5 6.9-.5 8.4 0 16.8.1 25.1 0 2.8 0 4.4.9 4 3.9-.6 3.8 2.3 9-3.9 10.8-.4.1-.4 1.6-.4 2.5v19.9c0 .8.1 2.2.5 2.4 7.9 3.3 1.9 9.8 4.2 15.1zM872 587.6v-11c0-.9 0-2.3-.4-2.5-7.3-3.1-2.5-9.2-4.5-14.7 8.8 0 16.7-.1 24.6.1.8 0 2.4 1.6 2.2 2.1-1.1 4 3.6 9.6-3.4 12-.6.2-.8 2.1-.8 3.3-.1 5.6-.1 11.2 0 16.8.1 2.5-1.4 5.9 3.2 6.3.4 0 1 1.7 1 2.6.1 3.6 0 7.3 0 11.8-6.9 0-13.5.1-20-.1-1 0-2.3-1.7-3-2.9-5-8.4-9.8-16.8-15.9-25.1v11.5c0 .3 0 .9.2 1 8.1 3.5 1.8 10.2 4.7 15.5h-26.8V602c0-.3 0-.9.2-1 7.9-3.8 2.8-10.9 4-16.3.6-2.5.1-5.2.1-7.8 0-.9.1-2.3-.3-2.5-7.3-3-2.5-9.2-4.5-14.7 7.5 0 14.2-.1 20.9.1 1.1 0 2.4 1.9 3.1 3.1 4 6.9 7.8 14 11.8 20.9.8 1.5 1.8 2.8 2.7 4.3zM150 559.3c0 4.3.1 7.6 0 10.9 0 .8-.3 2.2-.7 2.3-6.8 2-2 7.2-4.1 11.2h12.2c-1.4-3.8 3.4-8.6-3.4-11.3-.9-.4-.7-3.8-.9-5.8s0-4.2 0-7.1c8.4 0 16.5 0 24.6.1.6 0 1.8 1.1 1.7 1.5-.9 4.2 3.6 9.8-3.2 12.6-.7.3-.9 2.5-.9 3.8-.1 5.4-.1 10.8 0 16.2.1 2.5-1.3 5.9 3.2 6.3.4 0 1 1.7 1 2.7.1 3.6 0 7.3 0 11.3h-26.4v-11.9c0-.7.3-1.8.6-1.9 6.5-1.4 2.6-6.2 4-9.9H146c.8 3.3-3.4 7.6 2.9 9.7.6.2 1 1.7 1 2.6.1 3.6.1 7.3.1 11.3h-26.6V602c0-.7.3-1.8.7-1.9 5.6-1.1 3.4-5.5 3.6-8.7a117.9 117.9 0 000-12c-.1-2.7.7-5.1-3-7.3-1.9-1.1-1.2-7.3-.9-11.2 0-.7 3.4-1.7 5.2-1.7 6.8-.1 13.6.1 21 .1zM324.3 614v-11.4c0-.8.3-2.3.6-2.4 6.1-.9 3.6-5.7 3.9-9 .3-4.2.1-8.4.1-12.5 0-2.5-.3-4.2-2.8-6.3-2.1-1.9-1.4-7.3-1.4-11.1 0-.6 3.4-1.6 5.2-1.7 8.4-.2 16.7-.1 25.1 0a25.5 25.5 0 016.2 1c7.5 2 11.1 5.7 11.4 11.8.4 6.9-2 9.8-11 13.2 1.9 1 3.5 1.8 5.1 2.7 6.7 4 8.4 13.5 2.7 18.8-3.3 3.1-7.8 6.2-11.9 6.6-10.8.9-21.6.3-33.2.3zm22.7-23.8v10.2c2.9-1.2 5.3-1.7 7.1-3.1.7-.5.7-3.6 0-4.1-1.8-1.3-4.1-1.8-7.1-3zm4.3-17.8l-2.3.1c-.8 1.4-2 2.7-2.3 4.2-.5 2.3 0 5 3.3 4.1 1.8-.4 4.4-2.2 4.4-3.4.2-1.6-1.9-3.3-3.1-5zM828.8 559.6v19.7h-13c-.3-1.8-.6-3.6-1-5.8h-11.2c1.1 2.8 1.5 6.2 3.2 7.2 2.1 1.2 5.3.6 8.3.7v9.2l-10.4.8v7.8h10.2c.3-2 .5-4 .8-6.5h13V614h-46.6v-12c0-.7.3-1.8.6-1.9 6.1-.9 3.5-5.7 3.8-9a107.3 107.3 0 00.1-12c-.1-2.6.1-4.6-2.9-6.8-2.1-1.5-1.3-7.3-1.2-11.1 0-.7 3.3-1.8 5.1-1.8 12-.2 24.1-.1 36.1-.1 1.6 0 3.1.2 5.1.3zM590 587c.5 16.1-11.9 28.9-26.6 28.9s-26.9-12.9-26.7-28.8c.3-17.6 10.6-29.2 26.6-29.2s26.6 11.6 26.7 29.1zm-34.5-.3c.6 3.5.5 6.9 1.8 9.6 1.1 2.4 4 5.7 5.8 5.5 2.3-.2 5.4-3.1 6.3-5.5 2.6-7.1 1.9-14.5-.8-21.5-.7-1.9-3.5-4.1-5.3-4.1s-4.5 2.2-5.2 4.1c-1.4 3.9-1.8 8.2-2.6 11.9zM678 582v8.7l-10 .6v7.9h9.7l1-6.6h12.9v21.3h-46.2v-12c0-.3 0-.9.2-1 7.8-4 2.9-11.2 4.1-16.9a25.6 25.6 0 000-7.8c-.1-1.1-1.2-2.1-1.9-3.1s-2.1-2.2-2.3-3.4c-1.2-10.3-1-10.5 9.3-10.5h30.9c1.9 0 3.7.2 5.9.3v19.8h-12.9c-.3-1.8-.6-3.6-1.2-7-3.4.9-9.1 1.2-9.5 2.9-2.4 9.6 6.5 4.1 10 6.8zM428.3 614.2h-22.4c.3-5.7.5-11.2.9-17.7-2.5 0-5.8-.1-9.2.1-.7.1-1.8 1.7-1.7 2.5.7 4.8 1.6 9.5 2.6 14.9h-23c-.1-5.9-.5-11.4 2.6-17.5 5.3-10.5 8.8-22 12.8-33.1 1.3-3.7 3.1-5.1 7.1-5 12.7.2 12.7 0 17.4 12.1 3.4 8.8 5.8 18 10.3 26.3 3.1 5.7 2.7 11 2.6 17.4zm-26.4-31.8c-1.2 3.4-1.9 5.5-3 8.5l6.1-.6zM235.1 614.1h-22c.3-5.7.6-11 .9-17.5-2.6 0-6.2-.1-9.8.1-.4 0-1.1 1.6-1 2.4.7 4.8 1.6 9.5 2.5 14.8h-23c-.4-6.1-.5-11.6 2.5-17.7 5.2-10.4 8.7-21.6 12.6-32.7 1.4-3.9 3.1-5.4 7.5-5.3 12.5.3 12.6 0 17.1 11.8 3.4 8.8 5.8 18 10.1 26.3a27.3 27.3 0 012.6 17.8zm-23-23.6l-3.1-8c-1.2 3.3-2 5.4-3 8zM617 589.9c1.9-5.3 4-9.2 4.6-13.2.5-3.1-1.2-6.4-1.3-9.7-.3-7.7-.1-7.7 7.4-7.8h14.8c-.3 5.6.5 10.2-2 15.7-5.4 11.7-9.3 24.1-13.3 36.3-1 3.1-2.3 4.1-5.4 4.1-13.3.1-13.3.3-17.9-12.3-3.3-9.2-6.8-18.3-9.9-27.6-1.6-4.8-2.6-9.9-4.2-16.1 8.4 0 14.9-.1 21.4.1a3.1 3.1 0 012.1 2.3c-.2 3.9-.9 7.7-1.2 11.6a13.3 13.3 0 00.5 4.9c1.1 3.6 2.5 6.9 4.4 11.7zM909.9 614.4v-11.7c0-.8.3-2.3.6-2.4 5.8-1.2 3.6-5.8 3.8-9.2a118.5 118.5 0 000-13.6c-.1-1.4-1.2-2.8-1.8-4.2-.8 1.4-1.7 2.8-2.5 4.3a8.2 8.2 0 00-.5 1.8h-13.1c0-6-.1-12 .2-18 0-.8 2.3-2 3.5-2 15.5-.1 31-.2 46.5 0 1.3 0 3.5 1.9 3.6 3 .4 5.5.2 11.1.2 17h-13a6.2 6.2 0 01-.6-.8c-.9-1.8-1.8-3.5-2.7-5.3-.7 1.9-1.8 3.7-2 5.6a128.5 128.5 0 000 13.6c.1 2.9-1.1 5.9 3.4 8 1.9.9 1 8 .8 12.2 0 .7-3.4 1.5-5.2 1.6-6.8.2-13.6.1-21.2.1zM77.6 592.8c2.4 1.4 5.6 4.1 9.2 5.2 2.9.8 7.3 1 9.1-.9 3-3.1.6-6.9-2.5-8.8-4-2.5-8.3-4.3-12.4-6.6-11.6-6.3-16-15-14.3-27.5 1.3-9.5 9-17.2 20.5-18 8.6-.6 17.5.4 26.1 1.9 7.3 1.3 3.4 8.6 4 13.3s-2.9 4.7-5.7 4.5c-5.2-.3-10.8 1.9-14.9-4.5-.8-1.2-5.2.5-7.9.9.9 3.6.8 8.7 2.9 10.6 4.4 3.8 10.1 5.6 15.2 8.6 9.9 5.9 13.8 14.7 11.7 25.9-1.6 8.8-8.3 17.3-16.2 17.6-10.2.4-20.4-.8-30.5-2.4-5.3-.8-8.9-13.5-5.2-17.2 1.9-2 5.9-1.5 10.9-2.6z"
                            transform="translate(-65 -115.4)" />
                    </svg>
                    <span
                        class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">{{config('app.name', 'ShambaMove')}}</span>
                </a>
                <form action="#" method="GET" class="hidden lg:block lg:pl-3.5">
                    <label for="topbar-search" class="sr-only">Search</label>
                    <div class="relative mt-1 lg:w-96">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" name="email" id="topbar-search"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Search">
                    </div>
                </form>
            </div>
            <div class="flex items-center">
                <div class="hidden mr-3 -mb-1 sm:block">
                    <span></span>
                </div>

                <button id="toggleSidebarMobileSearch" type="button"
                    class="p-2 text-gray-500 rounded-lg lg:hidden hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    <span class="sr-only">Search</span>

                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>



                <div class="z-50 hidden max-w-sm my-4 overflow-hidden text-base list-none bg-white divide-y divide-gray-100 rounded shadow-lg dark:bg-gray-700 dark:divide-gray-600"
                    id="apps-dropdown"
                    style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(1380px, 444px, 0px);"
                    data-popper-placement="bottom">
                    <div
                        class="block px-4 py-2 text-base font-medium text-center text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        Apps
                    </div>
                    <div class="grid grid-cols-3 gap-4 p-4">
                        <a href="#"
                            class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600">
                            <svg class="mx-auto mb-1 text-gray-500 w-7 h-7 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <div class="text-sm font-medium text-gray-900 dark:text-white">Sales</div>
                        </a>
                        <a href="#"
                            class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600">
                            <svg class="mx-auto mb-1 text-gray-500 w-7 h-7 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                                </path>
                            </svg>
                            <div class="text-sm font-medium text-gray-900 dark:text-white">Users</div>
                        </a>
                        <a href="#"
                            class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600">
                            <svg class="mx-auto mb-1 text-gray-500 w-7 h-7 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <div class="text-sm font-medium text-gray-900 dark:text-white">Inbox</div>
                        </a>
                        <a href="#"
                            class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600">
                            <svg class="mx-auto mb-1 text-gray-500 w-7 h-7 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <div class="text-sm font-medium text-gray-900 dark:text-white">Profile</div>
                        </a>
                        <a href="#"
                            class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600">
                            <svg class="mx-auto mb-1 text-gray-500 w-7 h-7 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <div class="text-sm font-medium text-gray-900 dark:text-white">Settings</div>
                        </a>
                        <a href="#"
                            class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600">
                            <svg class="mx-auto mb-1 text-gray-500 w-7 h-7 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z"></path>
                                <path fill-rule="evenodd"
                                    d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <div class="text-sm font-medium text-gray-900 dark:text-white">Products</div>
                        </a>
                        <a href="#"
                            class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600">
                            <svg class="mx-auto mb-1 text-gray-500 w-7 h-7 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <div class="text-sm font-medium text-gray-900 dark:text-white">Pricing</div>
                        </a>
                        <a href="#"
                            class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600">
                            <svg class="mx-auto mb-1 text-gray-500 w-7 h-7 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5 2a2 2 0 00-2 2v14l3.5-2 3.5 2 3.5-2 3.5 2V4a2 2 0 00-2-2H5zm2.5 3a1.5 1.5 0 100 3 1.5 1.5 0 000-3zm6.207.293a1 1 0 00-1.414 0l-6 6a1 1 0 101.414 1.414l6-6a1 1 0 000-1.414zM12.5 10a1.5 1.5 0 100 3 1.5 1.5 0 000-3z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <div class="text-sm font-medium text-gray-900 dark:text-white">Billing</div>
                        </a>
                        <a href="#"
                            class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600">
                            <svg class="mx-auto mb-1 text-gray-500 w-7 h-7 dark:text-gray-400" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                                </path>
                            </svg>
                            <div class="text-sm font-medium text-gray-900 dark:text-white">Logout</div>
                        </a>
                    </div>
                </div>
                <button id="theme-toggle" data-tooltip-target="tooltip-toggle" type="button"
                    class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-light-icon" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div id="tooltip-toggle" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip"
                    style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(1348px, 62.6667px, 0px);"
                    data-popper-placement="bottom">
                    Toggling dark mode
                    <div class="tooltip-arrow" data-popper-arrow=""
                        style="position: absolute; left: 0px; transform: translate3d(68.6667px, 0px, 0px);"></div>
                </div>

                <div class="flex items-center ml-3">
                    <div>
                        <button type="button"
                            class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                            id="user-menu-button-2" aria-expanded="false" data-dropdown-toggle="dropdown-2">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 rounded-full"
                                src="{{ Auth::user()->profile_picture?url(Auth::user()->profile_picture):asset('assets/images/boy-farm.jpg') }}"
                                alt="user photo">
                        </button>
                    </div>

                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                        id="dropdown-2"
                        style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(1468px, 440px, 0px);"
                        data-popper-placement="bottom">
                        <div class="px-4 py-3" role="none">
                            <p class="text-sm text-gray-900 dark:text-white" role="none">
                                {{Auth::user()->name}}
                            </p>
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                {{Auth::user()->email}}
                            </p>
                        </div>
                        <ul class="py-1" role="none">
                            <li>
                                <a href="{{route('dashboard')}}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">Dashboard</a>
                            </li>
                            <li>
                                <a href="{{route('profile.edit')}}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">Profile</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem"></a>
                            </li>
                            <li>
                                 <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
