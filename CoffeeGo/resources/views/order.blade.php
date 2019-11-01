<!doctype html>
<html>

<head>

  <title> Bestellen </title>

<style>

body{
margin:0;
padding:0;
background: 0;
font-family:Helvetica;
}

.nav{
  overflow: hidden;
  background:rgb(115, 175, 115);
  border:#97552f 6px solid;
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
</style>

</head>

<body>

<div class = "nav">
  <div class = "container">

    <div class = "nav_logo">
          <img src = "pictures/logo.png" alt="" class = "logo">
    </div>

      <div class = "nav_tandwiel">
          <a href = "#"><img src = "pictures/instellingen.png" alt="" class = "tandwiel"></a>
      </div>

        <div class = "nav_links">
          <ul class = "buttons">
            <li><a href = "/"> Home</a></li>
            <li><a href = "/order"> Bestellen</a></li>
            <li style="margin-left:20px;"><a href = "#"> Menu</a></li>
          </ul> 
        </div>

  </div>
</div>

<div class = "Header">
  <h1 class = "kop">Koffie Bestellen</h1>
  <hr class = "streep">
</div>

  <div class = "content">
    <form class = "input">
      <ul>
          <li>Naam :<br>
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
    <img src = "pictures/Coffee.png" style = "width :100%; height:100%; " ></a>
  </div>

  <div class = "text">
    <img src = "pictures/Coffee2.png" style = "width :100%; height:100%; " ></a>
  </div>
</body>
 
</html>