<!doctype html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog - @yield('title')</title>
    {{-- Materialize --}}
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    @stack('styles-libraries')
    {{-- App --}}
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    @stack('styles-app')
  </head>
  <body>
    {{-- Top navigation --}}
    <header class="navbar-fixed">
      <nav>
        <div class="nav-wrapper container">
          <div class="col s12">
            <a href="{{ route('home.index') }}" class="brand-logo">Blog</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li @if (isRoute('home.index')) class="active" @endif><a href="{{ route('home.index') }}">HOME</a></li>
              <li @if (isRoute('home.about')) class="active" @endif><a href="{{ route('home.about') }}">ABOUT</a></li>
              <li @if (isRoute('home.contact')) class="active" @endif><a href="{{ route('home.contact') }}">CONTACT ME</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main>
    {{-- Left Sidebar --}}
    <div class="row">
      <aside class="col s12 m6 l3 grey lighten-4 z-depth-2">
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
      </aside>
      <div class="col s12 m6 l9">
        @yield('content')
      </div>
    </div>
    </main>
    @include('_components.footer')
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    @stack('scripts-libraries')
    @stack('scripts-app')
  </body>
</html>