@extends('layouts.app')

@section('header')
  <title> Bestellen </title>
<!-- Bootstrap core CSS -->
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
  position: relative;
}

.button{
  float:right;
  font-size:40px;
  border:#97552f 8px solid;
  color:#fff;
  background:#97552f;
  position: absolute;
  top: 43px;
  right: 10px;
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

    object-fit: cover;
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
  margin-top: 35%;
  border-top:#97552f 6px solid;
  background:rgb(48, 44, 44);
  height:176px;
  color:rgb(177, 169, 169);
}


/* maurits css */

form{
  padding: 15px;
}

    /*Responsive css ivo*/

@media (min-width: 0px) and (max-width: 1200px) {
    .button {
        font-size: 25px;

    }
}

@media (min-width: 0px) and (max-width: 1000px) {
    .content{
        float:left;
        margin-left:20%;
        width:60%;
    }

    .images, .text{
        width: 60%;
        float:left;
        margin-left:20%;
        margin-top: 50px;
    }

    .footer {
        margin-top: 110%;

    }
}

@media (min-width: 0px) and (max-width: 700px) {
    .content {
        width: 90%;
        margin-left: 5%;
    }
    .images{
        height: 300px;
        width: 70%;
        margin-left: 15%;
    }

    .text
    {
        height: 200px;
        width: 70%;
        margin-left: 15%;
    }

    .footer{
        margin-top: 125%;
    }
}

@media (min-width: 0px) and (max-width: 540px) {
    .footer{
        margin-top: 180%;
    }

    .content {
        padding-bottom: 50px;
    }

    .button{
        float: left;
        position: relative;
        margin-top: -40px;
        margin-left: 34%;
    }
}

@media (min-width: 0px) and (max-width: 390px) {
    .images, .text {
        width: 100%;
        margin-left: 0;
    }

    .footer {
        margin-top: 210%;
    }
}

@media (min-width: 0px) and (max-width: 359px) {
    .footer {
        margin-top: 245%;
    }
}

</style>

@endsection

@section('content')

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
          {!! Form::number('tablenumber', 'value', ['min' => '1', 'max' => '10', 'style' => 'width: 134px;']); !!}
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
@endsection
