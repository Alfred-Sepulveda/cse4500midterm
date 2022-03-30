@extends('adminlte::page')

@section('title', 'customer Added')

@section('content_header')
    <h1>customer</h1>
@stop

@section('content')
  <h2>{{ $customer->name; }}</h2>
  <div><p>{{ $customer->email; }} </p></div>
  <div><p>{{ $customer->phonenumber; }} </p></div>
  <div><p>{{ $customer->services; }} </p></div>
@stop
