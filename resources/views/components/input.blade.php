@props(['disabled' => false])

<!-- <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md bg-ash-800 text-white shadow-sm border-ash-500 focus:border-orange-300 focus:ring focus:ring-orange-200 focus:ring-opacity-50']) !!}> -->
<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'w-full bg-ash-800 rounded border border-ash-300 focus:border-orange-400 focus:ring-2 focus:ring-orange-200 text-base outline-none text-ash-200 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out']) !!}>