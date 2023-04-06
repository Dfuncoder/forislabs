@props(['title', 'open', 'size' => 'max-w-md'])

<div @body-scroll="document.body.style.overflowY = {{$open}} ? 'hidden' : ''">
    <div x-show="{{$open}}" x-cloak="" class="fixed inset-0 z-50 flex justify-center items-center bg-black bg-opacity-75" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-out duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
        <div x-show="{{$open}}" @click.away="{{$open}} = false; $dispatch('body-scroll', {})" class="bg-white rounded shadow-lg relative w-full {{$size}}" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="ease-out duration-300" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
            <div class="flex items-center justify-between px-4 py-2 border-b">
                <h2 class="text-lg font-bold capitalize text-ash-800">{{$title}}</h2>
                <button class="flex items-center justify-center font-extrabold" @click="{{$open}} = false; $dispatch('body-scroll', {})">
                    <svg class="fill-current text-ash-800 hover:text-black w-3 h-3" viewBox="0 0 12.012 12.01" xmlns="http://www.w3.org/2000/svg">
                        <path d="m7.4158 6.0041 4.3-4.29a1.0041 1.0041 0 1 0-1.42-1.42l-4.29 4.3-4.29-4.3a1.0041 1.0041 0 0 0-1.42 1.42l4.3 4.29-4.3 4.29a1 1 0 0 0 0 1.42 1 1 0 0 0 1.42 0l4.29-4.3 4.29 4.3a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42z" />
                    </svg>
                </button>
            </div>
            <div class="px-4 py-2">
                {{$slot}}
            </div>
        </div>
    </div>
</div>