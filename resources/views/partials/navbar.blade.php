<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
    <div class="container">
    
        <a class="navbar-brand" href="/" style="color:#000">
        Equipo Superior
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @if( !Auth::check() )
            <ul class="navbar-nav navbar-right">
                <li class="nav-item">
                    <form action="{{ url('/login') }}"  method="GET" style="display:inline">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                Inicio Sesión
                        </button>
                    </form>
                </li>
            </ul>
        @endif
      
        @if( Auth::check() )
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ Request::is('catalog') && ! Request::is('catalog/create')? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/admin/studentList')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Estudiantes
                        </a>
                    </li>
                    <li class="nav-item {{  Request::is('catalog/create') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('admin/newClient')}}">
                            <span>&#10010</span> Nuevo Estudiante
                        </a>
                    </li>
                </ul>

                <ul class="navbar-nav navbar-right">
                    <li class="nav-item">
                        <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                Cerrar sesión
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        @endif
    </div>
</nav>
