@props(['value'])

<label {{ $attributes->merge(['class' => 'font-medium text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>
