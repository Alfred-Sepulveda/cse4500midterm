@extends('adminlte::page')

@section('title', 'Manufacturer Sales Info')

@section('content_header')
    <h1>Manufacturer Sales Page</h1>
@stop

@section('content')
  <h2>{{ $manufacturersale->CompanyName; }}</h2>
  <div><p>{{ $manufacturersale->Address; }}</p></div>
  <div><p>{{ $manufacturersale->ContactName; }}</p></div>
  <div><p>{{ $manufacturersale->PhoneNumber; }}</p></div>
  <div><p>{{ $manufacturersale->Email; }} </p></div>
@stop

