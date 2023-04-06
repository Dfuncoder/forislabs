@props(['route', 'title'])

@php
$active = (request()->routeIs($route));
@endphp

<li @class(['px-3', 'py-2' , 'rounded-sm' , 'mb-0.5' , 'last:mb-0' , 'bg-ash-900'=> $active, 'hover:bg-ash-900'=> !$active]) class="">
    <a class="block text-ash-200 transition duration-150 hover:text-ash-200 active" href="{{ route($route) }}" style="outline: currentcolor none medium;">
        <div class="flex flex-grow">
            <svg class="flex-shrink-0 h-6 w-6 mr-3" viewBox="0 0 24 24">
                <path @class(['fill-current', 'text-orange-600'=> $active, 'text-ash-600' => !$active]) d="M8 1v2H3v19h18V3h-5V1h7v23H1V1z"></path>
                <path @class(['fill-current', 'text-orange-600'=> $active, 'text-ash-600' => !$active]) d="M1 1h22v23H1z"></path>
                <path @class(['fill-current', 'text-orange-200'=> $active, 'text-ash-400' => !$active]) d="M15 10.586L16.414 12 11 17.414 7.586 14 9 12.586l2 2zM5 0h14v4H5z"></path>
            </svg>
            <span class="text-sm font-medium">{{$title}}</span>
        </div>
    </a>
</li>