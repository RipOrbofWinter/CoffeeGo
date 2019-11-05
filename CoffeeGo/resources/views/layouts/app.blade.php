<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('/css/style.css') }} " rel="stylesheet" type="text/css">
    @yield('header')

</head>
<body>
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" style="background-color:rgb(115, 175, 115) !important;">
  <!-- <nav class="navigatie"> -->
    <a class="navbar-brand" href="#" ><img src="{{ asset('/img/logocoffeego2.png') }}" height="50" width="50"></a>
    <div>
      <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/order">Bestel <span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>
</header>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class = "footer">
    <p class="float-right" style = "float:right; margin-right:3%;"><a href="#" style = "text-decoration:none; color:rgb(243, 204, 137);">Back to top</a></p>
    <p >&copy; 2017-2019 CoffeeGo, Inc. &middot; <a href="#" style = "text-decoration:none;color:rgb(243, 204, 137);">Privacy</a> &middot; <a href="#" style = "color:rgb(243, 204, 137);text-decoration:none;">Terms</a></p>
    <p>Maurits, Tim, Ivo, Thomas, Berkay</p>
    <img src="{{ asset('/img/Facebook.png') }}" height="50" width="50"> <img src="{{ asset('/img/instagram.png') }}" height="40" width="40"> <img src="{{ asset('/img/twitter.png') }}" height="50" width="50">

  </footer>

    </div>
</body>
</html>
