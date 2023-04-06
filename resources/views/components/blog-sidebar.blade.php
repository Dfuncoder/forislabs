@props(['posts'])
<!-- sidebar -->
<div class="ml-2 md:ml-4 mr-2">
    <div class="mb-4">
        <div class="relative border rounded-sm overflow-hidden">
            <form action="">
                <input class="w-full relative px-4 py-3 font-light text-gray-900 border-0" type="text" name="s" id="" placeholder="Search...">
                <button type="submit" class="bg-transparent border-0 absolute right-0 px-4 py-3 top-0">
                    <span class="block w-5">
                        <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M495 466.2L377.2 348.4c29.2-35.6 46.8-81.2 46.8-130.9C424 103.5 331.5 11 217.5 11 103.4 11 11 103.5 11 217.5S103.4 424 217.5 424c49.7 0 95.2-17.5 130.8-46.7L466.1 495c8 8 20.9 8 28.9 0 8-7.9 8-20.9 0-28.8zm-277.5-83.3C126.2 382.9 52 308.7 52 217.5S126.2 52 217.5 52C308.7 52 383 126.3 383 217.5s-74.3 165.4-165.5 165.4z" />
                        </svg>
                    </span>
                </button>
            </form>
        </div>
    </div>
    <div class="mt-10">
        <h2 class="font-bold text-xl mb-5 text-gray-900">Categories</h2>
        <ul>
            <li class="flex"><a href="" class="text-gray-900 py-2 block flex-1">Travel Tips</a><span class="text-gray-700 font-thin p-2">2</span></li>
            <li class="flex"><a href="" class="text-gray-900 py-2 block flex-1">Shark Life</a><span class="text-gray-700 font-thin p-2">10</span></li>
            <li class="flex"><a href="" class="text-gray-900 py-2 block flex-1">Inspiration</a><span class="text-gray-700 font-thin p-2">7</span></li>
            <li class="flex"><a href="" class="text-gray-900 py-2 block flex-1">Travel Gear</a><span class="text-gray-700 font-thin p-2">4</span></li>
        </ul>
    </div>
    <div class="mt-10">
        <h2 class="text-xl mb-5 text-gray-900 font-bold">Older Posts</h2>
        <ul>
            @foreach($posts as $post)
            <li class="mb-3">
                <a href="/blog/{{ $post->slug }}" class="flex group">
                    <div class="w-1/3">
                        <img class="rounded" src="{{$post->image_url}}" alt="">
                    </div>
                    <div class="w-2/3 p-2">
                        <h3 class="text-gray-900 group-hover:text-orange-500 font-bold text-sm mb-2">{{$post->title}}</h3>
                        <span class="text-xs text-gray-800 font-thin block mb-5">{{ $post->created_at->format('F j, Y') }}</span>
                    </div>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
    <div class="mt-10 bg-gray-100 rounded-sm p-5">
        <div class="pb-6">
            <div class="w-10 mx-auto mt-6 text-gray-900">
                <svg class="fill-current" viewBox="-1 0 512 512" xmlns="http://www.w3.org/2000/svg">
                    <path d="M505.668 246.465c-.89-.906-54.297-54.309-55.668-55.68V55c0-30.328-24.672-55-55-55H115C84.672 0 60 24.672 60 55v135.785C.379 250.406 0 248.301 0 257v210c0 24.813 20.188 45 45 45h420c24.813 0 45-20.188 45-45V257c0-3.855-1.54-7.71-4.332-10.535zm-35.992 6.426L450 262.73v-29.516zM115 30h280c13.785 0 25 11.215 25 25v222.73l-120 60V197c0-8.285-6.715-15-15-15H135c-8.285 0-15 6.715-15 15v95.73l-30-15V55c0-13.785 11.215-25 25-25zm155 257.973l-66.68-44.453a15.004 15.004 0 00-15.027-.938L150 261.73V212h120zm-120 7.297l43.922-21.961L270 324.027v28.703l-15 7.5-105-52.5zm-90-32.54l-19.676-9.84L60 233.216zM465 482H45c-8.27 0-15-6.73-15-15V281.27l218.293 109.148a15.008 15.008 0 0013.414 0L480 281.27V467c0 8.27-6.73 15-15 15zm0 0" />
                    <path d="M195 91h120c8.285 0 15-6.715 15-15s-6.715-15-15-15H195c-8.285 0-15 6.715-15 15s6.715 15 15 15zm0 0M135 151h240c8.285 0 15-6.715 15-15s-6.715-15-15-15H135c-8.285 0-15 6.715-15 15s6.715 15 15 15zm0 0M375 181h-30c-8.285 0-15 6.715-15 15s6.715 15 15 15h30c8.285 0 15-6.715 15-15s-6.715-15-15-15zm0 0M375 241h-30c-8.285 0-15 6.715-15 15s6.715 15 15 15h30c8.285 0 15-6.715 15-15s-6.715-15-15-15zm0 0" />
                </svg>
            </div>
            <h2 class="font-light text-xl mb-2 text-center pt-5 text-gray-900">Subscribe to our newsletter</h2>
            <span class="block text-center text-gray-900 font-thin tracking-wider leading-loose text-xs italic">Get the news right in your inbox!</span>
            <form action="">
                <input required type="text" id="name" placeholder="Full Name" name="name" class="w-full bg-white border border-ash-300 focus:border-orange-400 focus:ring-2 focus:ring-orange-200 text-base outline-none text-ash-700 p-3 my-2 leading-8">
                <input required type="email" id="name" placeholder="Email Address" name="email" class="w-full bg-white border border-ash-300 focus:border-orange-400 focus:ring-2 focus:ring-orange-200 text-base outline-none text-ash-700 p-3 my-2 leading-8">
                <div class="my-2 text-gray-900 font-thin tracking-wider leading-loose text-xs italic">
                    <span class="inline-block pr-1">
                        <input type="checkbox" name="" id="privacy-check" class="bg-white border-ash-300 text-orange-500 shadow-sm focus:border-orange-300 focus:ring focus:ring-orange-200 focus:ring-opacity-50">
                    </span>
                    <label for="privacy-check">By checking this you agree to our <a href="" class="text-orange-500">Privacy Policy</a>.</label>
                </div>
                <button type="submit" class="w-full rounded-sm bg-ash-800 hover:bg-ash-600 text-white tracking-widest text-sm uppercase font-medium py-3 mt-5">Subscribe</button>
            </form>
        </div>
    </div>
</div>