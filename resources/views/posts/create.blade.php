<x-layouts.layout>
    <x-slot name="title">
        Crear Post
    </x-slot>
    <h1>Formulario de Creación de Posts</h1>
    <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Título</label><br>
            <input type="text" name="title" class="form-control" id="title" placeholder="Título">
        </div>
        <div class="form-group">
            <label for="content">Contenido</label><br>
            <textarea name="content" id="content" class="form-control" rows="5"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" class="form-control" value="Publicar">
        </div>
</x-layouts.layout>
