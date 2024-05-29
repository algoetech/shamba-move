<footer class="w-full pb-12 bg-white border-t">
    <div
        class="relative flex items-center invisible w-full md:visible md:pb-12"
        x-data="getCarouselData()"
    >
        <button
            class="absolute w-16 h-16 ml-12 text-2xl font-bold text-white bg-blue-800 rounded-full hover:bg-blue-700 hover:shadow"
            x-on:click="decrement()">
            &#8592;
        </button>
        <template x-for="image in images.slice(currentIndex, currentIndex + 6)" :key="images.indexOf(image)">
            <img class="w-1/6 hover:opacity-75" :src="image">
        </template>
        <button
            class="absolute right-0 w-16 h-16 mr-12 text-2xl font-bold text-white bg-blue-800 rounded-full hover:bg-blue-700 hover:shadow"
            x-on:click="increment()">
            &#8594;
        </button>
    </div>
    <div class="container flex flex-col items-center w-full mx-auto">
        <div class="flex flex-col py-6 text-center md:flex-row md:text-left md:justify-between">
            <a href="#" class="px-3 uppercase">About Us</a>
            <a href="#" class="px-3 uppercase">Privacy Policy</a>
            <a href="#" class="px-3 uppercase">Terms & Conditions</a>
            <a href="#" class="px-3 uppercase">Contact Us</a>
        </div>
        <div class="pb-6 uppercase">&copy; myblog.com</div>
    </div>
</footer>
