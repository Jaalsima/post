<x-layouts.layout>
    <x-slot name="title">
        lista de Posts
    </x-slot>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Posts
                    </th>

                    <th scope="col" class="px-6 py-3">
                        Acción
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                    <tr class="bg-white dark:bg-gray-300">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a href="{{ route('posts.show', $post) }}">
                                {{ $post->title }}</a>
                        </th>
                        <td class="px-6 py-4">
                            <button><a href="{{ route('posts.edit', $post) }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a></button>
                            <form action="{{ route('posts.destroy', $post) }}" method="post"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Eliminar">
                            </form>
                        </td>

                    </tr>
                @empty
                    <h2>Aún no hay Posts.</h2>
                    </tr>
                @endforelse
            </tbody>
            {{ $posts->links() }}
        </table>
    </div>
</x-layouts.layout>
