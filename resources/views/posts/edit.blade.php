<x-layouts.layout>
    <x-slot name="title">
        Editar Post
    </x-slot>
    <h1>Formulario de Edición de Posts</h1>
    <form action="{{ route('posts.update', $post) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="title">Título</label><br>
            <input type="text" name="title" class="form-control" id="title" value="{{ $post->title }}"
                placeholder="Título">
        </div>
        <div class="form-group">
            <label for="content">Contenido</label><br>
            <textarea name="content" id="content" class="form-control" rows="5">{{ $post->content }}</textarea>
        </div>
        <div class="form-group">
            <input type="submit" class="form-control" value="Actualizar">
        </div>
</x-layouts.layout>
