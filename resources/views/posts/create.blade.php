<x-layouts.layout>
    <x-slot name="title">
        Crear Post
    </x-slot>

    <div class="container">
        <h1 class="form-t">Crear Post</h1>
        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div>
                <input type="text" name="title" id="title" placeholder="Título" class="form-i" autofocus>
                @error('title')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <textarea name="content" id="content" rows="5" placeholder="Contenido" class="form-ta"></textarea>
                @error('content')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>


            <input type="submit" value="Publicar" class="form-b">
        </form>
    </div>

</x-layouts.layout>
