<footer class="page-footer">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">Blog - @yield('title')</h5>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Links</h5>
        <ul>
          <li><a href="{{ route('home') }}" class="grey-text text-lighten-3">Home</a></li>
          <li><a href="{{ route('about') }}" class="grey-text text-lighten-3">About</a></li>
          <li><a href="{{ route('contact') }}" class="grey-text text-lighten-3">Contact Us</a></li>
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