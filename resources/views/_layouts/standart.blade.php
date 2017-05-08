<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog - @yield('title')</title>

        <!-- Materialize -->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
        @stack('styles-libraries')

        <!--- App -->
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        @stack('styles-app')

    </head>
    <body>
    <!-- Top navigation -->
    {{-- <div class="row"> --}}
        <header class="navbar-fixed">
            <nav>
                <div class="nav-wrapper container">
                    <div class="col s12">
                        <a href="#" class="brand-logo">Sorry for late project</a>
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                            <li @if (isRoute('home')) class="active" @endif><a href="{{ route('home') }}">HOME</a></li>
                            <li @if (isRoute('about')) class="active" @endif><a href="{{ route('about') }}">ABOUT</a></li>
                            <li @if (isRoute('contact')) class="active" @endif><a href="{{ route('contact') }}">CONTACT ME</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <div class="row">
                <div class="col s12 m6 l3 grey lighten-4 z-depth-2">
                    @if (Auth::check())
                        @include('_components.sidebar.profile', [
                            'user' => Auth::user()
                        ])
                    @else
                        @include('_components.sidebar.login')
                        <div class="col s12">
                            <div class="divider"></div>
                        </div>
                        @include('_components.sidebar.register')
                    @endif
                </div>
                <div class="col s12 m6 l9">
                    @section('content')
                    @show
                </div>
            </div>
        </main>
        @include('_components.footer')

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
        @stack('scripts-libraries')
        @stack('scripts-app')
    </body>
</html>
