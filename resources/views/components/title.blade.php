@props(['color'])

@php
$classes = match($color) {
    'light' => "text-gray-200",
    'dark' => "text-gray-900",
    'orange' => "text-orange-500",
};

@endphp
<div class="text-center">
    <h1 {{ $attributes->merge(['class' => $classes. ' sm:text-2xl text-xl font-extrabold relative inline-block mb-8 uppercase']) }}>
        {{ $slot }}
    </h1>
</div>