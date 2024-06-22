
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


    <!-- section header here -->
    <section class="container relative w-full p-0 mt-10 align-middle rounded-2 z-100 ">
        <h1 class="pt-20 pb-10 font-bold text-center text-7xl text-vendor-secondary-beta tai-font">{{ $title }}
        </h1>
    </section>


    {{-- section --}}
    <section class="relative w-full p-0 pt-5 pb-10 mt-10 align-middle rounded-0 z-100">

        {{-- <div class="container w-full my-3 text-justify lora">
            {!! $cate->description !!}
        </div> --}}

        <h2 class="container w-full pt-2 text-center text-white border-b hover:border-b-4 border-vendor-secondary-alpha tai-font">Relative Posts</h2>
       <div class="container grid grid-cols-12 gap-3 p-2">

        @foreach ($posts as $post)

            <div class="relative w-full h-auto row-auto p-3 overflow-hidden group shadow-soft-lg xl:col-span-4 lg:col-span-4 bg-vendor-white md:col-span-6 sm-max:col-span-full sm:col-span-full">
                {{-- <h3 class="w-full text-center">{{$post->title}}</h3> --}}
                <div class="relative w-full overflow-hidden min-h-[400px] max-h-auto">
                    <img src="{{url($post->image)}}" alt="{{$post->title}}" class="absolute w-full min-h-[200px] max-h-auto">


                </div>

                <div class="absolute top-0 flex-col justify-center mt-3 w-[90%] hidden group-hover:flex">
                    <small class="px-2 py-1 text-red-600 text-start tai-font text-[24px]">
                        By {{$post->user->name}}.
                    </small>
                    <a href="{{route('readpost', ['slug'=>$post->slug])}}" class="p-2 px-3 text-white max-w-[200px] rounded-1 shadow-soft-md bg-vendor-secondary-beta">
                        <div class="mr-2 fas fa-link"></div>
                        Visit this
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
