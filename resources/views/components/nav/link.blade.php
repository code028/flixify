@props(['active' => false])

@php
    $baseClass = ($active)
        ? 'px-1 border-b-2'
        : '';

@endphp

<a {{ $attributes->merge(['class' => $baseClass]) }}>
   {{ $slot }}
</a>
