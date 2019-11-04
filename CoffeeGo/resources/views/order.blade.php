<!doctype html>
<html>

<head>

  <title> Bestellen </title>
<!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="test.css" rel="stylesheet" type="text/css">

<style>

body{
margin:0;
padding:0;
background: 0;
font-family:Helvetica;
}

.logo{
  width:95px;;
  height:80%;
  float:left;
  border-right:#97552f 6px solid;
  background:rgb(115, 175, 115);
}

.tandwiel{
  float:right;
  width:65px;;
  height:65px;
  padding:15px;
  border-left:#97552f 6px solid;
}

.container{
  margin:0 auto;
}

.buttons{
  float: right;
}

.buttons li{
  float:left;
  width:180px;
  text-align:center;
  line-height:63px;
  height:80%;
  font-size:30px;
  list-style:none;
}

.buttons li a{
  color:#2b2826;
  text-transform:uppercase;
  text-decoration:none;
  height: 100%;
  padding: 35px 12px;
}

.buttons li a:hover{
  background:#97552f;
  color:rgb(241, 236, 225);
}

.kop{
  margin-left:500px;
  margin-right:500px;
  margin-bottom:20px;
  margin-top:1px;
  font-size:65px;
  text-align:center;
  white-space: nowrap;
}

.content{
  float:left;
  margin-left:6%;
  margin-top:5px;
  width:42%;
  height:80%;
  border:black 1px solid;
}

.button{
  float:right;
  margin-top:-70px;
  font-size:40px;
  border:#97552f 8px solid;
  color:#fff;
  background:#97552f;
}

.button:hover {
  cursor:pointer;
}

.images{
  float:right;
  margin-right:6%;
  width:42%;
  height:100%;
  text-align:center;
  background:#97552f;
  margin-top:-50px;
}

.input ul{
  margin-bottom:-20px;
}

.text{
  height:233px;
  float:left;
  margin-left:6%;
  margin-top:5px;
  width:42%;
  font-size:80px;
  text-align:center;
}

.enjoy{
  margin-top:30px;
}

.input li{
font-size:20px;
}
.footer{
  margin-top:35%;
  border-top:#97552f 6px solid;
  background:rgb(48, 44, 44);
  height:100%;
  color:rgb(177, 169, 169);
}


/* maurits css */

form{
  padding: 15px;
}
</style>

</head>

<body>

<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" style="background-color:rgb(115, 175, 115) !important;">
  <!-- <nav class="navigatie"> -->
    <a class="navbar-brand" href="#" ><img src="{{ asset('/img/logocoffeego2.png') }}" height="50" width="50"></a>
    <div  >
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

<br>
<br>
<br>
<br>
<br>
<div>
  <div class = "content">
        {!! Form::open(['action' => 'OrdersController@store', 'method' => 'POST']) !!}
        {{ csrf_field() }}

          {!! Form::label('Naam :') !!}
          {!! Form::text('name', '', ['class', 'ResultName']); !!}
          <br>
          {!! Form::label('Leeftijd :') !!}
          {!! Form::number('age', 'value'); !!}
          <br>
          {!! Form::label('Tafelnummer :') !!}
          {!! Form::number('tablenumber', 'value'); !!}
          <br>
          {!! Form::label('Menu :') !!}
          {!! Form::radio('menu', 'koffie', true); !!}
          {!! Form::label('Koffie  ') !!}
          {!! Form::radio('menu', 'cappuccino '); !!}
          {!! Form::label('Cappuccino  ') !!}
          {!! Form::radio('menu', 'espresso '); !!}
          {!! Form::label('Espresso  ') !!}
          {!! Form::submit('Versturen', ['class' => 'button']); !!}
        {!! Form::close() !!}
  </div>

  <br>
  <br>
  <br>
  <br>

  <div class = "images">
    <img src = "{{ asset('/img/Coffee.png') }}" style = "width :100%; height:100%; " ></a>
  </div>

  <div class = "text">
    <img src = "{{ asset('/img/Coffee2.png') }}" style = "width :100%; height:100%; " ></a>
  </div>
</div>

  <footer class = "footer">
    <p class="float-right" style = "float:right; margin-right:3%;"><a href="#" style = "text-decoration:none; color:rgb(243, 204, 137);">Back to top</a></p>
    <p >&copy; 2017-2019 Company, Inc. &middot; <a href="#" style = "text-decoration:none;color:rgb(243, 204, 137);">Privacy</a> &middot; <a href="#" style = "color:rgb(243, 204, 137);text-decoration:none;">Terms</a></p>
    <p>Maurits, Tim, Ivo, Thomas, Berkay</p>
    <img src="{{ asset('/img/Facebook.png') }}" height="50" width="50"> <img src="{{ asset('/img/instagram.png') }}" height="40" width="40"> <img src="{{ asset('/img/twitter.png') }}" height="50" width="50">

  </footer>
</body>

</html>
