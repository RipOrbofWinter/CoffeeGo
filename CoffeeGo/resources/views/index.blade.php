<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>CoffeeGo</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="test.css" rel="stylesheet" type="text/css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .footer{
        margin-top: 50px;
        border-top:#97552f 6px solid;
        background:rgb(48, 44, 44);
        height:100%;
        color:rgb(177, 169, 169);
      }

    </style>
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body >
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" style="background-color:rgb(115, 175, 115) !important;">
  <!-- <nav class="navigatie"> -->
    <a class="navbar-brand" href="#" ><img src="{{ asset('/img/logocoffeego2.png') }}" height="50" width="50"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse" >
      <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/order">Bestel <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
                <a class="nav-link" href="#">Menu <span class="sr-only">(current)</span></a>
        </li>
        </li>
      </ul>
    </div>
  </nav>
</header>

<main role="main">


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">
        <div class="row">
            <br>
            <br>
            <br>
            <br>
        </div>
    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
       <!---- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
        <img src="{{ asset('/img/logocoffeego2.png') }}"  height="335" width="350">
        <h2>CoffeeGo</h2>
        <p>CoffeeGo maakt je leven een stuk makkelijker</p>
        <!-- <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p> -->
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
       <!---- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
        <img src="{{ asset('/img/koffiesmaak.jpg') }}" height="335" width="350">
        <h2>Heerlijke smaak</h2>
        <p>Onze koffie heeft een eerlijke smaak.</p>
        <!-- <p><a class="btn btn-secondary" href="#" role="button" style="background-color:rgb(115, 175, 115) !important;">View details &raquo;</a></p> -->
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="{{ asset('/img/bestelkoffie.jpg') }}" height="335" width="350">
        <h2>Bestel koffie nu</h2>
        <p><a class="btn btn-secondary" href="/order" role="button">Bestel nu &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">CoffeeGo <span class="text-muted">Hoe werkt het?</span></h2>
        <p class="lead">CoffeGo is een robot die koffie kan bezorgen.
            Alles wat je hoeft te doen is je gegevens en je tafel nummer in te vullen in onze bestel page
            en onze robot doet de rest van het werk. </p>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="{{ asset('/img/bezorger.jpg') }}">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Onze koffiebonen <span class="text-muted">Waar komt het vandaan?</span></h2>
        <p class="lead">We gebruiken de black ivory koffiebonen.
            Black ivory koffiebonen zijn heel zeldzaam en een van de duurste koffiebonen van de wereld omdat de koffiebonen erg schaars zijn.<br />
            De koffiebonen van Black Ivory worden namelijk opgegeten door olifanten.
            In de maag worden de enzymen in de koffie afgebroken voor een robuuste smaak.
            Vervolgens wordt de poep gebruikt om een van de meest zeldzaamste kopjes koffie ter wereld te zetten.</p>
      </div>
      <div class="col-md-5 order-md-1">

        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"  src="{{ asset('/img/koffiebonen.jpg') }}">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Razend snel</h2>
        <p class="lead">We hebben in een groep van vijf heel lang nagedacht over hoe we de perfecte robot konden maken.
            We hebben gekeken naar heel veel mogelijke opties.
            Na veel discusseren over de mogelijkheden hebben we de perfecte koffiezet robot gebouwd.
            Gelijk na het drukken van een knop gaat de robot in werking en binnen drie minuten staat de koffie bij je tafel.</p>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="{{ asset('/img/kopje.jpg') }}">
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class = "footer">
    <p class="float-right" style = "float:right; margin-right:3%;"><a href="#" style = "text-decoration:none; color:rgb(243, 204, 137);">Back to top</a></p>
    <p >&copy; 2017-2019 Company, Inc. &middot; <a href="#" style = "text-decoration:none;color:rgb(243, 204, 137);">Privacy</a> &middot; <a href="#" style = "color:rgb(243, 204, 137);text-decoration:none;">Terms</a></p>
    <p>Maurits, Tim, Ivo, Thomas, Berkay</p>
    <img src="{{ asset('/img/Facebook.png') }}" height="50" width="50"> <img src="{{ asset('/img/instagram.png') }}" height="40" width="40"> <img src="{{ asset('/img/twitter.png') }}" height="50" width="50">

  </footer>
</main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>
