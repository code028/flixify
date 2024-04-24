@props(['active' => false])

@php
    $baseClass = ($active)
        ? 'bg-gray-100'
        : '';

@endphp

<a {{ $attributes->merge(['class' => $baseClass]) }}>
   {{ $slot }}
</a>
