<x-layouts.layout>
    <x-slot name="title">
        Editar Post
    </x-slot>
    <div class="container">
        <h1 class="form-t">Editar Post</h1>
        <form action="{{ route('posts.update', $post) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div>
                <input type="text" name="title" id="title" value="{{ $post->title }}" class="form-i"
                    placeholder="Título" autofocus>
                @error('title')
                    <div style="color: red; border: 1px dotted red; background-color: pink;">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <textarea name="content" id="content" rows="5" class="form-ta">{{ $post->content }}</textarea>
                @error('content')
                    <div style="color: red; border: 1px dotted red; background-color: pink;">{{ $message }}</div>|
                @enderror
            </div>
            <div>
                <input type="submit" value="Actualizar" class="form-b">
            </div>
        </form>
    </div>
</x-layouts.layout>
