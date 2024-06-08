<x-front>
    @include('frontend.includes.nav')

    <!-- banner image -->
    <div class="fixed top-0 w-full">
        <span id="overlay"
            class="w-full absolute h-[920px] bg-gradient-to-tr from-black/80 via-vendor-compliment-primary/60 to-vendor-compliment-primary">
        </span>
        <img class="w-full" id="banner" src="{{asset('assets/images/villages-farm.jpg')}}" alt="Farmer">
    </div>
    <section class="container mx-auto grid grid-cols-12 gap-4 relative z-100 lg:mt-[100px]  text-white">
        <div
            class="w-full px-4 py-3 lg:col-start-1 lg:col-end-8 shadow-soft-lg bg-black/[0.09] border-l-2 border-vendor-secondary-alpha">
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

    <!-- section intro here -->
    <section class="w-full container p-0 rounded-2 bg-white lg:mt-[300px] z-100 sticky">
        <div class="grid w-full grid-cols-12 px-4 py-8 mx-auto bg-vendor-secondary-beta/30">
            <div class="w-full col-start-1 col-end-13 bg-slate-300">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Placeat incidunt sit odio sint laborum odit, voluptates libero excepturi sed perferendis, quas nihil qui voluptatum, facere velit impedit harum est ullam!
            </div>
        </div>
    </section>

    <!-- Latest Post -->
    <section class="">
        {{-- @foreach ($role->users as $item)
            {{$item->name}}
        @endforeach --}}
    </section>

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
