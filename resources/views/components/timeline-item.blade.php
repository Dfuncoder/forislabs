@props(['active' => false, 'last' => false, 'title'])
<div class="flex">
    <div class="mx-auto mr-6 md:mr-12 relative">
        <div @class(['w-6 flex items-center justify-center', 'h-0'=> $last, 'h-full'=> !$last]) >
            <div class="h-full w-1 border-orange-500 border-2 border-dashed pointer-events-none"></div>
        </div>
        <div @class([ 'absolute top-0 -mt-3 rounded-full shadow' , 'w-6 h-6 bg-orange-500 flex items-center justify-center'=> $active,
            'bg-orange-500 w-4 h-4 left-[20%]'=> !$active
            ])>
            @if($active) <div class="w-4 h-4 rounded-full bg-orange-200 animate-pulse"></div> @endif
        </div>
    </div>
    <div class="relative bg-white text-ash-800 col-start-6 col-end-10 p-4 rounded-tr-lg rounded-bl-lg mb-4 mr-auto shadow-md">
        <div class="absolute top-[-9px] -left-2 border-t-[14px] border-t-transparent border-b-[14px] border-b-transparent border-r-[14px] border-r-white rotate-[135deg]"></div>
        <h3 class="font-bold text-lg mb-1">{{$title}}</h3>
        <p class="leading-tight text-justify">
            {{$slot}}
        </p>
    </div>
</div>