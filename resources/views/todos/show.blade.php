@extends('adminlte::page')

@section('title', 'User Added')

@section('content_header')
    <h1>Users</h1>
@stop

@section('content')
  <h2>{{ $users->EmployeeID; }}</h2>
  <div><p>{{ $users->LastName; }}</p></div>
  <div><p>{{ $users->FirstName; }}</p></div>
  <div><p>{{ $users->Email; }}</p></div>
  <div><p>{{ $users->ContactNumber; }}</p></div>
  <div><p>{{ $users->HistoryServices; }}% finished</p></div>
@stop
