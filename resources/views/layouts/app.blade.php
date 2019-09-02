<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <title class="">{{ config('app.name', 'Laravel') }}</title>
</head>

<body>

    <header class="container-fluid p-1">
        <div class="row col-12 justify-content-between">
                <a class="justify-content-xl-start" href="{{ url('/') }}"><img width=150 height=150 src="{{ asset('img/logo/Volleyball_NB2.png') }}" alt="background image"></a>

                    <a class="navbar navbar-brand ml-5 align-content-center" href="{{ url('/') }}">
                        <h1 class="font-weight-bold text-white "> {{ config('app.name', 'Laravel') }} </h1>
                    </a>
        </div>

                <div id="app p-5">
                    <div class="container-fluid">
                        <div class="row d-flex flex-row-reverse">
                            <nav class="navbar navbar-expand-md navbar-dark w-100">
                                <a class="navbar-brand text-hide" href="{{ url('/') }}">
                                    {{ config('app.name', 'Laravel') }}
                                </a>
                                <div class="container font-weight-bold">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>

                                    <div class="align-content-between" id="navbarSupportedContent">
                                        <!-- Left Side Of Navbar -->
                                        <ul class="navbar-nav mr-auto">

                                        </ul>

                                        <!-- Right Side Of Navbar -->
                                        <ul class="navbar-nav ml-auto">
                                            <!-- Authentication Links -->
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
                                                    href="{{ route('articles') }}">{{ __('Photos et vidéos') }}</a>
                                            </li>

                                            @guest
                                            <li class="nav-item m-4">
                                                <a class="nav-link font-weight-bold btn btn-light text-dark m-auto"
                                                    href="{{ route('login') }}"><i class="fas fa-user-lock"></i>{{ __('Administrateur') }}</a>
                                            </li>
                                            @if (Route::has('register'))
                                                {{-- <li class="nav-item m-4">
                                                <a class="nav-link font-weight-bold btn btn-light text-dark m-auto"
                                                    href="{{ route('register') }}">{{ __('Créer un compte') }}</a> --}}
                                            </li>
                                            @endif
                                            @else
                                            <li class="nav-item dropdown m-4">


                                                <a id="navbarDropdown" class="nav-link font-weight-bold btn btn-light text-dark"
                                                    href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" v-pre>
                                                    Bonjour, {{ Auth::user()->prenom }} <span class="caret"></span>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-right font-weight-bold text-dark"
                                                    aria-labelledby="navbarDropdown">

                                                    <a class="dropdown-item" href="{{ route('posts.index') }}"> Articles </a>

                                                    <a class="dropdown-item" href="{{ route('pages.index') }}"> Licences </a>



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
                                </div>
                            </nav>

                        </div>
                    </div>


    </header>
    <main class="container-fluid py-4">
        @yield('content')
    </main>
    </div>

    <aside class="container">
<?php
// @$request->session()->forget('key');

?>
    </aside>


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

                        <span><i class="fas fa-user-lock"></i></span>
            </section>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>
