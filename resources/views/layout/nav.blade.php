<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kodepos</title>
    <link rel="icon" type="image/png" href="{{ asset('/asset/img/logo.png') }}" />
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
  </head>
  <body>
    <header class="header">
      <nav class="navbar">
        <div class="navbar__logo">
          <a href="/">
            <img src="{{ asset('/asset/img/carikodepos.png') }}" alt="Kode Pos" />
          </a>
        </div>
        <ul class="navbar__links">
          <li><a href="/">Cari Kodepos</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/privasi">Privasi</a></li>
          <li><a href="/kontak">Kontak</a></li>
          <li><a href="/home">test</a></li>
        </ul>
        <div class="navbar__social">
          <a href="https://www.facebook.com/Jokowi" target="_blank">
            <i class="fab fa-facebook"></i>
          </a>
          <a href="https://www.instagram.com/jokowi/" target="_blank">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="https://twitter.com/jokowi" target="_blank">
            <i class="fab fa-twitter"></i>
          </a>
        </div>
        <div class="navbar__toggle">
          <i class="fas fa-bars"></i>
        </div>
      </nav>
    </header>

    <main id="content" role="main" class="main commerce-landing">
      @yield('content')
    </main>

    <footer class="footer">
      <ul class="footer__links">
        <li><a href="#">Size Guide</a></li>
        <li><a href="#">Returns Policy</a></li>
        <li><a href="#">Cookie &amp; privacy policy</a></li>
      </ul>
      <div class="footer__social">
        <a href="https://www.facebook.com/Jokowi" target="_blank">
          <i class="fab fa-facebook"></i>
        </a>
        <a href="https://www.instagram.com/jokowi/" target="_blank">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="https://twitter.com/jokowi" target="_blank">
          <i class="fab fa-twitter"></i>
        </a>
      </div>
    </footer>
    <script src="{{ asset('/js/app.js') }}"></script>
  </body>
</html>