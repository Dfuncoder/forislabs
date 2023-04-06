@props(['route'])

@php
$classes = (request()->routeIs($route))
            ?
            "text-orange-600"
            :
            "text-ash-800 hover:text-orange-600";
@endphp

<a href="{{ route($route) }}" {{ $attributes->merge(['class' => $classes. " px-3 py-2 rounded-md text-base font-medium transition-colors duration-300"]) }}>
    {{ $slot }}
</a>