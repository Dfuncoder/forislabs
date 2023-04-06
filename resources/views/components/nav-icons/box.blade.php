@props(['route', 'title'])

@php
$active = (request()->routeIs($route));
@endphp

<li @class(['px-3', 'py-2' , 'rounded-sm' , 'mb-0.5' , 'last:mb-0' , 'bg-ash-900'=> $active, 'hover:bg-ash-900'=> !$active]) class="">
    <a class="block text-ash-200 transition duration-150 hover:text-ash-200 active" href="{{ route($route) }}" style="outline: currentcolor none medium;">
        <div class="flex flex-grow">
            <svg class="flex-shrink-0 h-6 w-6 mr-3" viewBox="0 0 24 24">
                <path @class(['fill-current', 'text-orange-200'=> $active, 'text-ash-400' => !$active]) d="M13 15l11-7L11.504.136a1 1 0 00-1.019.007L0 7l13 8z"></path>
                <path @class(['fill-current', 'text-orange-600'=> $active, 'text-ash-600' => !$active]) d="M13 15L0 7v9c0 .355.189.685.496.864L13 24v-9z"></path>
                <path @class(['fill-current', 'text-orange-600'=> $active, 'text-ash-600' => !$active]) d="M13 15.047V24l10.573-7.181A.999.999 0 0024 16V8l-11 7.047z"></path>
            </svg>
            <span class="text-sm font-medium">{{$title}}</span>
        </div>
    </a>
</li>