<x-layouts.layout>
    <x-slot name="title">
        Detalle {{ $post->title }}
    </x-slot>
    <h1>{{ $post->title }}</h1>
    <p>
        {{ $post->content }}
    </p>
</x-layouts.layout>
