<x-layouts.layout>
    <x-slot name="title">
        lista de Posts
    </x-slot>
    <h1>lista de Posts</h1>

    <ul>
        @forelse ($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post) }}">
                    {{ $post->title }}</a>
                <a href="{{ route('posts.edit', $post) }}">Editar</a>
                <form action="{{ route('posts.destroy', $post) }}" method="post">
                    @csrf
                    @method('delete')

                    <input type="submit" value="Eliminar">
                </form>
            </li>
        @empty
            <h2>Aún no hay Posts.</h2>
        @endforelse
    </ul>
</x-layouts.layout>
