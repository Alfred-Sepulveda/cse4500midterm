@extends('adminlte::page')

@section('title', 'User Added')

@section('content_header')
    <h1>Users</h1>
@stop

@section('content')
  <h2>{{ $todos->id; }}</h2>
  <div><p>{{ $todos->name; }}</p></div>
  <div><p>{{ $todos->email; }}</p></div>
  <div><p>{{ $todos->phonenumber; }}</p></div>
  <div><p>{{ $todos->support; }}</p></div>
@stop
