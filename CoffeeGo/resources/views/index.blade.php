@extends('layouts.app')

@section('header')
    <title>CoffeeGo</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/carousel/">
    
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
@endsection
@section('content')
  <body >

<main role="main">
  <div class="container marketing">
        <div class="row">
            <br>
            <br>
            <br>
            <br>
        </div>
    <div class="row">
      <div class="col-lg-4">
        <img src="{{ asset('/img/logocoffeego2.png') }}"  height="335" width="350">
        <h2>CoffeeGo</h2>
        <p>CoffeeGo maakt je leven een stuk makkelijker</p>
      </div>
      <div class="col-lg-4">
        <img src="{{ asset('/img/koffiesmaak.jpg') }}" height="335" width="350" style="object-fit: cover;">
        <h2>Heerlijke smaak</h2>
        <p>Onze koffie gebruikt zeldzame bonen waardoor het een lekkere smaak heeft.</p>
      </div>
      <div class="col-lg-4">
        <img src="{{ asset('/img/bestelkoffie.jpg') }}" height="335" width="350" style="object-fit: cover;">
        <h2>Bestel koffie nu</h2>
        <p><a class="btn btn-secondary" href="/order" role="button">Bestel nu &raquo;</a></p>
      </div>
    </div>
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">CoffeeGo <span class="text-muted">Hoe werkt het?</span></h2>
        <p class="lead">CoffeeGo is een robot die koffie kan bezorgen.
            Je hoeft alleen je naam, leeftijd en tafel nummer in te vullen in de bestel page
            en CoffeeGo doet de rest van het werk. </p>
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
        <p class="lead">We zijn in een groep van vijf lang gaan nadenken over hoe we de perfecte robot konden maken.
            Er is gekeken naar een aantal mogelijke opties waardoor we de perfecte koffiezet robot hebben gebouwd.
            Gelijk na het drukken van een knop gaat de robot in werking en binnen drie minuten staat de koffie bij uw tafel.</p>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="{{ asset('/img/kopje.jpg') }}">
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div>


</main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>
