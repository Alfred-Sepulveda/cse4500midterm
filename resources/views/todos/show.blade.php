@extends('adminlte::page')

@section('title', 'User Added')

@section('content_header')
    <h1>Users</h1>
@stop

@section('content')
  <h2>{{ $todo->id; }}</h2>
  <div><p>{{ $todo->name; }}</p></div>
  <div><p>{{ $todo->email; }}</p></div>
  <div><p>{{ $todo->phonenumber; }}</p></div>
  <div><p>{{ $todo->support; }}</p></div>
@stop
