<x-layouts.layout>
    <x-slot name="title">
        Crear Post
    </x-slot>

    <div class="container">
        <h1 class="form-t">Formulario de Creación de Posts</h1>
        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div>
                <label for="title" class="form-l">Título</label><br>
                <input type="text" name="title" id="title" placeholder="Título del Post" class="form-i" autofocus>
                @error('title')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="content" class="form-l">Contenido</label><br>
                <textarea name="content" id="content" rows="5" placeholder="Contenido del Post" class="form-ta"></textarea>
                @error('content')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>


            <input type="submit" value="Publicar" class="form-b">
        </form>
    </div>

</x-layouts.layout>
