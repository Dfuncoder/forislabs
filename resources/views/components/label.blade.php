@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-ash-200']) }}>
    {{ $value ?? $slot }}
</label>
