<ul class="navbar-nav mr-auto">
    <li class="nav-item dropdown">
        <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbarDropdown" role="button">
            Opciónes
        </a>
        <div aria-labelledby="navbarDropdown" class="dropdown-menu">
            <a class="dropdown-item" href="#">
                Perfil
            </a>
            <button class="dropdown-item" data-toggle="modal" data-target="#modal1">Ajustes</button>
            <a class="dropdown-item" href="{{ url('home/Logout') }}">
                Salir
            </a>
        </div>
    </li>
</ul>
