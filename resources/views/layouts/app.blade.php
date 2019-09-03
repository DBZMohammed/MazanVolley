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

    <header class="container-fluid p-1">
        <div class="row col-12 justify-content-between">
                <a class="logo1 justify-content-xl-start p-2" href="{{ route('accueil') }}"><img width=150 height=150 src="{{ asset('img/logo/logo2.png') }}" alt="background image"></a>

                    <a class="navbar navbar-brand ml-5 align-content-center" href="{{ url('/') }}">
                        <h1 id="title1" class="font-weight-bold text-white "> {{ config('app.name', 'Laravel') }} </h1>
                    </a>
        </div>

                <div id="app p-5">
                    <div class="container-fluid">
                        <div class="row d-flex justify-content-center">

                            <nav class="navbar navbar-expand-lg navbar-light">
                                <a class="navbar-brand text-hide" href="{{ url('/') }}">
                                    {{ config('app.name', 'Laravel') }}
                                </a>

                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                  <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse align-content-between" id="navbarSupportedContent">
                                  <ul class="navbar-nav mr-auto">
                                        <li class="nav-item m-4">
                                                <a class="nav-link font-weight-bold btn btn-light text-dark m-auto"
                                                    href="{{ route('articles') }}">{{ __('La vie du club') }}</a>
                                            </li>
                                            <li class="nav-item m-4">
                                                <a class="nav-link font-weight-bold btn btn-light text-dark m-auto"
                                                    href="{{ route('infos') }}">{{ __('Infos pratiques') }}</a>
                                            </li>
                                            <li class="nav-item m-4">
                                                <a class="nav-link font-weight-bold btn btn-light text-dark m-auto"
                                                    href="{{ route('uploads') }}">{{ __('Photos et vidéos') }}</a>
                                            </li>

                                            @guest
                                            <li class="nav-item m-4">
                                                <a class="nav-link font-weight-bold btn btn-light text-dark m-auto"
                                                    href="{{ route('login') }}"><i id="nav-menu-cadenas" class="fas fa-user-lock"></i>{{ __('Administrateur') }}</a>
                                            </li>

                                            <form class="form-inline m-4">
                                                    <input class="form-control font-weight-bold btn btn-light text-dark m-auto" type="search" placeholder="Rechercher" aria-label="Rechercher">
                                                    <button class="btn btn-outline-success font-weight-bold text-dark m-auto" type="submit">Rechercher</button>
                                                  </form>

                                            @if (Route::has('register'))
                                                {{-- <li class="nav-item m-4">
                                                <a class="nav-link font-weight-bold btn btn-light text-dark m-auto"
                                                    href="{{ route('register') }}">{{ __('Créer un compte') }}</a>
                                            </li> --}}
                                            @endif
                                            @else
                                            <li class="nav-item dropdown m-4">


                                                <a id="navbarDropdown" class="nav-link font-weight-bold btn btn-light text-dark"
                                                    href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" v-pre><i class="fas fa-user-check"></i>
                                                    Bonjour,    {{ Auth::user()->prenom }} <span class="caret"></span>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-right font-weight-bold text-dark"
                                                    aria-labelledby="navbarDropdown">

                                                    <a class="dropdown-item" href="{{ route('posts.index') }}"> Articles </a>

                                                    <a class="dropdown-item" href="{{ route('pages.index') }}"> pages </a>

                                                    <a class="dropdown-item" href="{{ route('licences') }}"> licence </a>

                                                    <a class="dropdown-item" href="{{ route('uploads') }}"> uploads </a>



                                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
            <a href="http://www.ufolepvolley84.fr/"><img width=300 height=150 src="{{ asset('img/logo/logo_ufolep_cr_21.png') }}" alt="background image"></a>

        </div>
        <div class="container text-center">
            <p class="text-white p-3 mb-3 "> © - M.V.B - MAZAN VOLLEY-BALL - 2019</p>
            <p class="text-white p-3 mb-3 ">
                <a href="#">Mentions legales</a>
            </p>
            <section class="row">
                <div class="col-12">

                        <span class=" text-white">Nous rejoindre sur :</span>
                            <a href="https://fr-fr.facebook.com/pages/category/Sports-Club/Mazan-Volley-ball-1883689478318448/" class="btn btn-facebook"><i class="fab fa-facebook-f"></i>acebook</a>

                        </div>
            </section>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
