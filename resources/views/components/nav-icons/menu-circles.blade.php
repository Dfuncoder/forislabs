@props(['route', 'title'])

@php
$active = (request()->routeIs($route));
@endphp

<li @class(['px-3', 'py-2' , 'rounded-sm' , 'mb-0.5' , 'last:mb-0' , 'bg-ash-900'=> $active, 'hover:bg-ash-900'=> !$active]) class="">
    <a class="block text-ash-200 transition duration-150 hover:text-ash-200 active" href="{{ route($route) }}" style="outline: currentcolor none medium;">
        <div class="flex flex-grow">
            <svg class="flex-shrink-0 h-6 w-6 mr-3" viewBox="0 0 24 24">
                <circle @class(['fill-current', 'text-orange-200'=> $active, 'text-ash-400' => !$active]) cx="18.5" cy="5.5" r="4.5"></circle>
                <circle @class(['fill-current', 'text-orange-600'=> $active, 'text-ash-600' => !$active]) cx="5.5" cy="5.5" r="4.5"></circle>
                <circle @class(['fill-current', 'text-orange-600'=> $active, 'text-ash-600' => !$active]) cx="18.5" cy="18.5" r="4.5"></circle>
                <circle @class(['fill-current', 'text-orange-200'=> $active, 'text-ash-400' => !$active]) cx="5.5" cy="18.5" r="4.5"></circle>
            </svg>
            <span class="text-sm font-medium">{{$title}}</span>
        </div>
    </a>
</li>