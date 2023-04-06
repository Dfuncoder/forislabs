<footer class="bg-ash-900 text-ash-300">
    <div class="flex flex-col md:flex-row justify-between items-center px-5 py-4">
        <div class="my-2">
            All Right Reserved © 2021 | Foris Labs
        </div>
        <ul class="flex flex-wrap justify-center uppercase text-xs md:text-sm my-2">
            <li class="px-2"><a href="{{route('contact-us')}}">Contact</a></li>
            <li class="px-2"><a href="{{route('privacy-policy')}}">Privacy Policy</a></li>
            <li class="px-2"><a href="{{route('terms')}}">Terms of Use</a></li>
        </ul>
    </div>
</footer>
<section x-cloak  x-data="{hidden: true}" @scroll.window="hidden=true" class="" @click.away="hidden = true">
    <div class="fixed w-[50px] left-0 inset-y-0 flex flex-col justify-center transition-transform duration-500 items-center h-screen" :class="{'translate-x-[-50px]': hidden, 'translate-x-0': !hidden }">
        <a class="flex items-center justify-center h-8 w-8 my-1 bg-ash-800 text-white rounded-full transition duration-500 hover:bg-orange-500 hover:text-white hover:transform hover:rotate-[360deg]"><i class="fab fa-facebook-f"></i></a>
        <a class="flex items-center justify-center h-8 w-8 my-1 bg-ash-800 text-white rounded-full transition duration-500 hover:bg-orange-500 hover:text-white hover:transform hover:rotate-[360deg]"><i class="fab fa-twitter"></i></a>
        <a class="flex items-center justify-center h-8 w-8 my-1 bg-ash-800 text-white rounded-full transition duration-500 hover:bg-orange-500 hover:text-white hover:transform hover:rotate-[360deg]"><i class="fab fa-linkedin"></i></a>
        <a class="flex items-center justify-center h-8 w-8 my-1 bg-ash-800 text-white rounded-full transition duration-500 hover:bg-orange-500 hover:text-white hover:transform hover:rotate-[360deg]"><i class="fab fa-google"></i></a>
    </div>
    <div class="fixed w-[50px] left-0 inset-y-0 flex flex-col justify-center transition-transform duration-500 items-start h-screen z-10" :class="{'translate-x-[-50px]': !hidden, 'translate-x-0': hidden }">
        <button @click="hidden = !hidden" class="flex items-center justify-start h-8 w-6 my-1 bg-ash-800/50 text-white rounded-r-full transition duration-500 hover:bg-orange-500 hover:text-white"><i class="fa fa-phone"></i></button>
    </div>
</section>