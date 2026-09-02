@props(['tag' => 'h2'])

<{{ $tag }} {{ $attributes->merge(['class' => 'c-title']) }}>
{!! $slot !!}
</{{ $tag }}>
