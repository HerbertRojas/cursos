<header class="header-section bg-info">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="site-logo">
                    <img src="img/logo.png" alt="" width="120">
                </div>
                <div class="nav-switch">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                @guest
                    <a href="#" id="login-button" class="site-btn header-btn">{{ __("Acceder") }}</a>
                    @include('layouts.partials.principal.modals.login')
                @else
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                       class="site-btn header-btn"
                    >
                        {{ __("Salir") }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endguest
                <nav class="main-menu">
                    <ul>
                        <li><a href="{{ route('bienvenido') }}">{{ __("Inicio") }}</a></li>
                        <li><a href="{{ route('cursos.index') }}">{{ __("Cursos") }}</a></li>
                        <li><a href="blog.html">News</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        {{-- @teacher --}}
                            {{-- <li><a href="{{ route('teacher.index') }}">{{ __("Profesor") }}</a></li> --}}
                        {{-- @endteacher --}}
                        @auth
                            {{-- <li><a class="brand-text" href="{{ route('student.index') }}">{{ __("Estudiante") }}</a></li> --}}
                        @endauth
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header section end -->

@push("js")
    <script>
        @if(session('error-login'))
            $("#login-modal").modal();
        @endif
        jQuery("#login-button").on("click", function (e) {
        e.preventDefault();
        $("#login-modal").modal();
        })
    </script>
@endpush
