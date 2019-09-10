<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" id="bootstrap-css">

    <!-- Styles -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title class=".img-responsive">{{ config('app.name', 'Laravel') }}</title>
</head>

<body>

    <div id="logo" class="container-fluid bg-white">
        <div class="row d-flex flex-wrap justify-content-between align-content-center">
            <div class="logo1 col-6 m-auto">
                <a class="logo1 p-2" href="{{ route('accueil') }}"><img width=150 height=150
                        src="{{ asset('img/logo/logo3.png') }}" alt="background image"></a>
            </div>
            <div id="logo1" class="col-6 m-auto flex-column">
                <a class="logo1 navbar navbar-brand" href="{{ url('/') }}">
                    <h1 id="title1" class="logo1 font-weight-bold text-white"> {{ config('app.name', 'Laravel') }} </h1>
                </a>
            </div>
        </div>
    </div>

    <header id="menu2">
        <div id="app">
            <div class="container-fluid">
                <div id="menu1" class="row d-flex justify-content-center p-2">

                    <nav class="navbar navbar-expand-lg navbar-light">
                        {{-- <a class="navbar-brand text-hide" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                        </a> --}}

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon justify-content-center"></span>
                        </button>
                        <div class="collapse navbar-collapse align-content-between" id="navbarSupportedContent">
                            <ul class="navbar-nav p-2">
                                <li class="nav-item m-auto p-2">
                                    <a class="link nav-link btn btn-light font-weight-bold text-dark"
                                        href="{{ route('articles') }}">{{ __('La vie du club') }}</a>
                                </li>
                                <li class="nav-item m-auto p-2">
                                    <a class="link nav-link btn btn-light font-weight-bold text-dark m-auto"
                                        href="{{ route('contact') }}">{{ __('Contact et plan') }}</a>
                                </li>
                                {{-- pas utilisé. --}}
                                {{-- <li class="link nav-item m-auto p-2">
                                                <a class="link nav-link btn btn-light text-dark"
                                                    href="{{ route('uploads') }}">{{ __('Photos et vidéos') }}</a>
                                </li> --}}
                                @guest
                                <li class="nav-item m-auto p-2">
                                    <a class="link nav-link btn btn-light font-weight-bold text-dark" href="{{ route('login') }}"><i
                                            id="nav-menu-cadenas"
                                            class="fas fa-user-lock"></i>{{ __('Administrateur') }}</a>
                                </li>



                                @if (Route::has('register'))
                                <li class="nav-item m-2">
                                    <a class="link nav-link font-weight-bold btn btn-light text-dark m-auto"
                                        href="{{ route('register') }}">{{ __('Créer un compte') }}</a>
                                </li>
                                @endif
                                @else
                                <li class="nav-item dropdown m-auto p-2">


                                    <a id="navbarDropdown"
                                        class="link nav-link font-weight-bold btn btn-light text-dark" href="#"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        v-pre><i class="fas fa-user-check"></i>
                                        Bonjour, {{ Auth::user()->prenom }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right text-dark"
                                        aria-labelledby="navbarDropdown">

                                        <a class="dropdown-item font-weight-bold" href="{{ route('posts.index') }}"> Articles </a>

                                        <a class="dropdown-item font-weight-bold" href="{{ route('pages.index') }}"> Pages </a>

                                        <a class="dropdown-item font-weight-bold" href="{{ route('licences') }}"> Licences </a>

                                        <a class="dropdown-item font-weight-bold" href="{{ route('posts.create') }}"> Créer un article</a>



                                        <a class="dropdown-item font-weight-bold" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                            {{ __('Se déconnecter') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>

                                    </div>
                                </li>
                                @endguest
                                        <form action="{{ route('search') }}" method="POST" class="form-inline m-auto">
                                                @csrf
                                    <input class="form-control font-weight-bold btn btn-light text-dark m-auto"
                                        type="search" name="search" placeholder="Rechercher" aria-label="Rechercher">
                                    <button class="link btn btn-light font-weight-bold text-dark m-auto"
                                        type="submit"><i class="fas fa-search"></i></button>
                                </form>
                            </ul>
                        </div>
                    </nav>
    </header>
    <main class="container-fluid py-4">
        @yield('content')
    </main>
    </div>
    <footer class="footer p-4">
        <div class="container-fluid mx-auto text-center">
            <a href="http://www.ufolepvolley84.fr/"><img class="logoufolep" width=300 height=150
                    src="{{ asset('img/logo/logo_ufolep_cr_21.png') }}" alt="background image"></a>

        </div>
        <div class="container text-center">
            <p class="text-dark p-3 mb-3 "> © - M.V.B - MAZAN VOLLEY-BALL - 2019 </p>
            <p class="text-dark p-3 mb-3 ">
                <a class="text-dark" href="#">- Mentions legales -</a>
            </p>
            <section class="row">
                <div class="col-12">

                    <span class=" text-dark">Nous rejoindre sur :</span>
                    <a href="https://fr-fr.facebook.com/pages/category/Sports-Club/Mazan-Volley-ball-1883689478318448/"
                        class="btn btn-facebook"><i class="fab fa-facebook-f"></i>acebook</a>

                </div>
            </section>
        </div>
    </footer>
    <!-- Scripts -->
    <script>
        window.onscroll = function () {
            myFunction()
        };

        var menu1 = document.getElementById("menu1");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pajavascript: void(0) geYOffset >= sticky) {
                menu1.classList.add("sticky")
            } else {
                menu1.classList.remove("sticky");
            }
        }

    </script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
