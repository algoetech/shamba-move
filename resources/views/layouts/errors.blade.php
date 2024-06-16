@section('styles')

@endsection

<x-front>
    <section id="errobag" class="grid w-full grid-cols-12 p-5 min-h-[900px] bg-vendor-compliment-primary text-vendor-secondary-beta">
        <div class="container relative w-full mx-auto mt-10 overflow-x-hidden col-span-full">
            <div class="fixed w-[90%] ">
                <span class="flex flex-row items-center justify-center gap-4">
                    <i class="text-white md-max:text-[78px] md:text-[292px] fas @yield('fas-icon')"></i>
                    <h3 class="text-[90px]  text-white poppin">{{$exception->getStatusCode()}}!</h3>
                </span>

                <span class="mx-auto max-w-[60%] text-5xl mt-10 w-full flex flex-row justify-center text-center">Ooops!  {{$exception->getMessage() ?: 'Something went wrong'}}</span>

                <span class="relative flex flex-row w-full p-2 mt-5">

                    <a href="{{url('/')}}" class="relative p-4 px-10 mx-auto mt-5 rounded-3 shadow-soft-2xl text-vendor-compliment-primary hover:bg-white/90 bg-vendor-secondary-beta/70">
                        <span class="absolute top-0 left-0 w-full h-full animate-ping rounded-3 bg-vendor-secondary-alpha/50"></span>
                        <i class="mr-3 fas fa-house text-rose-900"></i>Home
                    </a>
                </span>

            </div>

        </div>

    </section>
</x-front>
