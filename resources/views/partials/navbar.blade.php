<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
    <div class="container">
    
        <a class="navbar-brand" href="/" style="color:#000">
        <img src="https://scontent.fclo1-2.fna.fbcdn.net/v/t1.0-9/69698473_2564498650281049_4301956483395878912_n.jpg?_nc_cat=102&ccb=3&_nc_sid=09cbfe&_nc_eui2=AeH1lVCip2zNOHR7uqXdYDxbj695HAkGrhOPr3kcCQauE9JqN2Wzw-7O_KAVc6b_Pkj82K5djNJZxO3la5lGkMzp&_nc_ohc=FKhYc0DECnkAX_I3uFW&_nc_ht=scontent.fclo1-2.fna&oh=d1dd8c6c924e6508e3ceebb51e3087ca&oe=60564356" height="50px"  width ="50px" /> 
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{  Request::is('catalog/create') ? 'active' : ''}}">
                <a class="nav-link" href="{{url('rutinas')}}">
                    Rutinas
                </a>
            </li>
        </ul>

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
