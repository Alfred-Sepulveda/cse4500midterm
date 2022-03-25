@extends('adminlte::page')

@section('title', 'Users Added')

@section('content_header')
    <h1>Added Users</h1>
@stop

@section('content')
  <h2>{{ $user->LastName; FirstName; }}</h2>
  <div><p>{{ $user->Email; }} </p></div>
  <div><p>{{ $user->ContactNumber; }} </p></div>
  <div><p>{{ $user->HistoryServices; }} % finished</p></div>
@stop
