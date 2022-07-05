<header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
             <a href="{{route('home')}}"><img src="{{asset('assets/images/logos/logo.png')}}" alt="" class="img-fluid"></a>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto {{ Request::is('/*') ? 'active' : '' }}" href="{{route('home')}}">Inicio</a></li>
                <li><a class="nav-link scrollto {{ Request::is('nosotros*') ? 'active' : '' }}" href="{{route('nosotros')}}">Nosotros</a></li>
                <li><a class="nav-link scrollto {{ Request::is('servicios*') ? 'active' : '' }}" href="{{route('servicios')}}">Servicios</a></li>
                <li><a class="nav-link scrollto {{ Request::is('producto*') ? 'active' : '' }}" href="{{route('producto.index')}}">Productos</a></li>
                <li><a class="nav-link scrollto {{ Request::is('contacto*') ? 'active' : '' }}" href="{{route('contacto')}}">Contacto</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
