@extends('adminlte::page')

@section('title', 'Users Added')

@section('content_header')
    <h1>Confirm Delete</h1>
@stop

@section('content')
  <h2>{{ $user->LastName; }}{{ $user->FirstName; }}</h2>
  <div><p>{{ $user->Email; }} </p></div>
  <div><p>{{ $user->ContactNumber; }} </p></div>
  <div><p>{{ $user->HistoryServices; }} </p></div>
  <h2>Would you like to delete?</h2>
  <td><a class="btn btn-default btn-sm" href="{{ route('users.destroy',['user'=>$user->id]) }}">Yes</a>
  <a class="btn btn-default btn-sm" href="{{ route('users.show',['user'=>$user->id]) }}">No</a></td>
@stop
