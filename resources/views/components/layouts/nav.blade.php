<div>
    <div style="height: 5px; background-color: white;">
    </div>
    <nav class="nav">
        <ul>
            <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : 'inactive' }}">Inicio</a>
            </li>
            <li><a href="{{ route('posts.index') }}"
                    class="{{ request()->routeIs(['posts.index', 'posts.show', 'posts.edit']) ? 'active' : 'inactive' }}">Posts</a>
            </li>
            <li><a href="{{ route('posts.create') }}"
                    class="{{ request()->routeIs('posts.create') ? 'active' : 'inactive' }}">Crear
                    Post</a></li>
        </ul>
    </nav>
    <div style="height: 50px; background-color: white;">
        <h2 style="text-align: center; padding-top: 8px;;">EL BLOG DE CODERMAN</h2>
    </div>
</div>
