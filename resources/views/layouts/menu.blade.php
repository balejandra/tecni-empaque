<li class="side-menus {{ Request::is('users*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('users.index') }}"><i class="fas fa-building"></i><span>Usuarios</span></a>
</li>

<li class="side-menus {{ Request::is('categorias*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('categorias.index') }}"><i class="fas fa-building"></i><span>Categorias</span></a>
</li>

<li class="side-menus {{ Request::is('productos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('productos.index') }}"><i class="fas fa-building"></i><span>Productos</span></a>
</li>

<li class="side-menus {{ Request::is('marcas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('marcas.index') }}"><i class="fas fa-building"></i><span>Marcas</span></a>
</li>

