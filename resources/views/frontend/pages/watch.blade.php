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
    <section class=" sm:hidden mx-auto md:grid grid-cols-12 gap-4 relative z-100 lg:mt-[100px]  text-white">
        <div class="container grid w-full grid-cols-12 mx-auto mt-10">
            <h1 class="w-full mb-5 text-3xl font-bold">{{ $video->title }}</h1>
            <div class="video-container col-span-full">
                <video controls class="w-full h-auto min-w-[300px]">
                    <source src="{{ url($video->file) }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="mt-5">
                <p>By {{ "Admin" }}</p>
                <p>{{ $video->name }}</p>
            </div>
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
