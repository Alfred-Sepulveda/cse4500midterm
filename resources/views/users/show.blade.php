@extends('adminlte::page')

@section('title', 'Users Added')

@section('content_header')
    <h1>User</h1>
@stop

@section('content')
  <h2>{{ $user->LastName; }}</h2>
  <h2>{{ $user->FirstName; }}</h2>
  <div><p>{{ $user->Email; }} </p></div>
  <div><p>{{ $user->ContactNumber; }} </p></div>
  <div><p>{{ $user->HistoryServices; }} </p></div>
@stop
