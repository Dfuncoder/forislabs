@props(['route', 'title'])

@php
$active = (request()->routeIs($route));
@endphp

<li @class(['px-3', 'py-2', 'rounded-sm', 'mb-0.5', 'last:mb-0', 'bg-ash-900'=> $active, 'hover:bg-ash-900'=> !$active]) class="">
    <a  class="block text-ash-200 transition duration-150 hover:text-ash-200 active" href="{{ route($route) }}" style="outline: currentcolor none medium;">
        <div class="flex flex-grow">
            <svg class="flex-shrink-0 h-6 w-6 mr-3" viewBox="0 0 24 24">
                <path @class(['fill-current', 'text-orange-200'=> $active, 'text-ash-400' => !$active]) d="M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12 12-5.383 12-12S18.617 0 12 0z"></path>
                <path @class(['fill-current', 'text-orange-600'=> $active, 'text-ash-600' => !$active]) d="M12 3c-4.963 0-9 4.037-9 9s4.037 9 9 9 9-4.037 9-9-4.037-9-9-9z"></path>
                <path @class(['fill-current', 'text-orange-200'=> $active, 'text-ash-400' => !$active]) d="M12 15c-1.654 0-3-1.346-3-3 0-.462.113-.894.3-1.285L6 6l4.714 3.301A2.973 2.973 0 0112 9c1.654 0 3 1.346 3 3s-1.346 3-3 3z"></path>
            </svg>
            <span class="text-sm font-medium">{{$title}}</span>
        </div>
    </a>
</li>