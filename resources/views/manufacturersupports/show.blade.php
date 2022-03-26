@extends('adminlte::page')

@section('title', 'Manufacturer Support Info')

@section('content_header')
    <h1>Manufacturer Support Page</h1>
@stop

@section('content')
  <h2>{{ $manufacturersupport->CompanyName; }}</h2>
  <div><p>{{ $manufacturersupport->Address; }}</p></div>
  <div><p>{{ $manufacturersupport->ContactName; }}</p></div>
  <div><p>{{ $manufacturersupport->PhoneNumber; }}</p></div>
  <div><p>{{ $manufacturersupport->Email; }} </p></div>
@stop

