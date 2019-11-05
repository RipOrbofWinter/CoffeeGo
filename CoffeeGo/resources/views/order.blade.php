@extends('layouts.app')

@section('header')
  <title> Bestellen </title>
<!-- Bootstrap core CSS -->

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
          {!! Form::number('tablenumber', 'value', ['min' => '1', 'max' => '4', 'style' => 'width: 134px;']); !!}
          <br>
          {!! Form::label('Menu :') !!}
          <!-- {!! Form::radio('menu', 'koffie', true); !!}
          {!! Form::label('Koffie  ') !!}
          {!! Form::radio('menu', 'cappuccino '); !!}
          {!! Form::label('Cappuccino  ') !!}
          {!! Form::radio('menu', 'espresso '); !!} -->
          {!! Form::radio('menu', 'water', true); !!}
          {!! Form::label('Water  ') !!}
          {!! Form::radio('menu', 'water '); !!}
          {!! Form::label('Water  ') !!}
          {!! Form::radio('menu', 'water '); !!}
          {!! Form::label('Water  ') !!}
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
