<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Give us an A</title>

        <!-- Materialize -->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

        <!--- -->
        <link rel="stylesheet" type="text/css" href="/css/app.css">

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
                    @php
                        $profileName = 'Mr. Somebody';
                        $profileEmail = 'mr.somebody@someemail.com';
                        $profilePic = 'http://lorempixel.com/300/300/people/';

                    @endphp
                    <div class="col s12">
                        <div class="row">
                            <h3 class="center-align grey-text">Profile</h3>
                            <div class="col s12 center-align">
                                <img class="circle responsive-img" src="{{$profilePic}}">
                            </div>
                            <div class="col s12 card-panel white">
                                <p><span class="grey-text text-darken-1 text-bold">Name: </span><span class="truncate">{{$profileName}}</span></p>
                                <p><span class="grey-text text-darken-1 text-bold">Email: </span><span class="truncate">{{$profileEmail}}</span></p>
                            </div>
                            <div class="col s12 center-align">
                                <form action="#" class="col s12" id="logout-form">
                                    <div class="col s12 center-align">
                                        <button class="btn waves-effect waves-light" type="submit" name="action">Logout<i class="material-icons right">lock_outline</i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="col s12">
                        <h3 class="center-align grey-text">Login</h3>
                        <form action="#" class="col s12" id="login-form">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="email" id="login_email" class="validate" name="email">
                                    <label for="login_email">Email</label>
                                </div>
                                <div class="input-field col s12">
                                    <input type="password" id="login_password" class="validate" name="password">
                                    <label for="login_password">Password</label>
                                </div>
                                <div class="col s12 center-align">
                                    <button class="btn waves-effect waves-light" type="submit" name="action">Login<i class="material-icons right">lock_open</i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col s12">
                        <div class="divider"></div>
                    </div>
                    <div class="col s12">
                        <h3 class="center-align grey-text">Register</h3>
                        <form action="#" class="col s12" id="register-form">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" id="register_name" class="validate" name="name">
                                    <label for="register_name">Name</label>
                                </div>
                                <div class="input-field col s12">
                                    <input type="email" id="register_email" class="validate" name="email">
                                    <label for="register_email">Email</label>
                                </div>
                                <div class="input-field col s12">
                                    <input type="password" id="register_password" class="validate" name="password">
                                    <label for="register_password">Password</label>
                                </div>
                                <div class="input-field col s12">
                                    <input type="password" id="register_repeat-password" class="validate" name="repeat-password">
                                    <label for="register_repeat-password">Repeat Password</label>
                                </div>
                                <div class="col s12 center-align">
                                    <button class="btn waves-effect waves-light" type="submit" name="action">Register<i class="material-icons right">add</i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    @endif
                </div>
                <div class="col s12 m6 l9">
                    @for ($i = 0; $i < 10; $i++)
                        <div class="card horizontal col s12 m12 l6">
                            <div class="card-image">
                                <img src="http://lorempixel.com/300/190/nature/{{$i}}">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p>I am a very simple card. I am good at containing small bits of information.</p>
                                </div>
                                <div class="card-action">
                                    <a href="#">More...</a>
                                </div>
                            </div>
                        </div>
                    @endfor
                    @php
                        $page = 12;
                        $max_pages = 12;

                        // TODO put in Paging util class
                        // getPageNumbers($currentPage, $maxPages, $maxShownNumbers)
                        // return [ 'startNum' => $i, 'endNum' => $max_i ]
                        $MAX_SHOWN = 9;
                        $OFFSET = floor($MAX_SHOWN / 2);
                        $MIDDLE = $OFFSET + 1;

                        $i = $page < $MIDDLE ? 1 :
                             (($page > $max_pages - $OFFSET) ? ($max_pages - 2 * $OFFSET) :
                             ($page - $OFFSET));

                        $max_i = ($max_pages <= $MAX_SHOWN || $page + $OFFSET > $max_pages) ? $max_pages :
                                 ($page < $MIDDLE ? $MAX_SHOWN : $page + $OFFSET);

                    @endphp
                    <div class="center-align">
                        <ul class="pagination">
                            <li class="@if ($page == 1) disabled @else waves-effect @endif"><a href="#!"><i class="material-icons">first_page</i></a></li>
                            <li class="@if ($page == 1) disabled @else waves-effect @endif"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                            @for (; $i <= $max_i; $i++)
                                <li class="@if ($i == $page) active @else waves-effect @endif"><a href="#!">{{ $i }}</a></li>
                            @endfor
                            <li class="@if ($page == $max_pages) disabled @else waves-effect @endif"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                            <li class="@if ($page == $max_pages) disabled @else waves-effect @endif"><a href="#!"><i class="material-icons">last_page</i></a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </main>
        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Home</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">About</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2016-2017 Created by Borislav Rangelov &amp; Alexandra Valkova as an University Project <a class="grey-text text-lighten-4 right valign-wrapper" href="https://github.com/bobi95/laravel-project"><img style="margin-right: 0.5em" src="/images/GitHub-Mark-32px.png"> Source</a>
            </div>
          </div>
        </footer>

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    </body>
</html>
