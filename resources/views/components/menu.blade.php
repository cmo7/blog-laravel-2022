<!-- Menu -->
<nav id="menu">
    @auth
        <h2>Hola {{auth()->user()->name}}</h2>
    @endauth
    @guest
        <h2>Menu</h2>
    @endguest
    <form action="/" method="get">
        <input type="search" name="search" id="search" placeholder="buscar">
        <input type="submit" value="Buscar" class="button primary small">
    </form>
    @auth
        <form action="/logout" method="post">
            @csrf
            <input class="button primary small" type="submit" value="Salir">
        </form>
        <ul>
            <li><a href="/new-post">Nuevo Post</a></li>
            <li><a href="/new-category">Crear Categoría</a></li>
        </ul>
    @endauth
    @guest
        <ul>
            <li><a href="/signup">Registro</a></li>
            <li><a href="/login">Acceso</a></li>
        </ul>
    @endguest
</nav>
