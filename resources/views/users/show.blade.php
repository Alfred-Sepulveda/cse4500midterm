@extends('adminlte::page')

@section('title', 'Users Added')

@section('content_header')
    <h1>User</h1>
@stop

@section('content')
  <h2>{{ $user->name; }}</h2>
  <div><p>{{ $user->email; }} </p></div>
  <div><p>{{ $user->phonenumber; }} </p></div>
  <div><p>{{ $user->services; }} </p></div>
@stop
