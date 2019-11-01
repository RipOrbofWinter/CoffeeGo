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
  float:left;
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

.streep{
  margin-top:-20px;
  height:6px;
  width:87%;
  border:none;
  background:#97552f;
}

.content{
  float:left;
  border:#97552f 6px solid;
  margin-left:6%;
  width:42%;
}

.button{
  float:right;
  margin-right:50px;
  margin-top:-120px;
  font-size:50px;
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
  border:#97552f 6px solid;
  text-align:center;
  background:#97552f;
}

.text{
  height:233px;
  float:left;
  margin-left:6%;
  margin-top:16px;
  width:42%;
  border:#97552f 6px solid;
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
</style>

</head>

<body>

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

<div class = "Header">
  <h1 class = "kop">Koffie Bestellen</h1>
  <hr class = "streep">
</div>

  <div class = "content">
    <form class = "input">
      <ul>
          <li>Naam :<br>
              echo Form::radio('category_id', '1'); //  '1' === '1' - comparing passed value and old session value
            <input type = "text" id = "ResultName"></li><br>
          <li>Leeftijd :<br>
            <input type = "number" id = "ResultAge"></li><br>
          <li>Tafel nummer :<br>
            <input type = "number" id = "ResultAge"></li><br>
          <div>
            <input type = "submit" value = "Submit" class = "button" >
          </div>
      </ul>
    </form>
  </div>

  <div class = "images">
    <img src = "{{ asset('/img/Coffee.png') }}" style = "width :100%; height:100%; " ></a>
  </div>

  <div class = "text">
    <img src = "{{ asset('/img/Coffee2.png') }}" style = "width :100%; height:100%; " ></a>
  </div>
  <footer class = "footer">
    <p class="float-right" style = "float:right; margin-right:3%;"><a href="#" style = "text-decoration:none; color:rgb(243, 204, 137);">Back to top</a></p>
    <p >&copy; 2017-2019 Company, Inc. &middot; <a href="#" style = "text-decoration:none;color:rgb(243, 204, 137);">Privacy</a> &middot; <a href="#" style = "color:rgb(243, 204, 137);text-decoration:none;">Terms</a></p>
    <p>Maurits, Tim, Ivo, Thomas, Berkay</p>
    <img src="{{ asset('/img/Facebook.png') }}" height="50" width="50"> <img src="{{ asset('/img/instagram.png') }}" height="40" width="40"> <img src="{{ asset('/img/twitter.png') }}" height="50" width="50">

  </footer>
</body>

</html>
