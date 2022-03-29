@extends('adminlte::page')

@section('title', 'Users Added')

@section('content_header')
    <h1>Confirm Delete</h1>
@stop

@section('content')
<select name= "user">
    @foreach($users as $user)
    <option value="{{ $user->id}}"">{{$user->FirstName}}</option>
    @endforeach
</select>
  <td><a class="btn btn-default btn-sm" href="{{ route('users.destroy',['user'=>$user->id]) }}">Yes</a>
  <a class="btn btn-default btn-sm" href="{{ route('users.show',['user'=>$user->id]) }}">No</a></td>
@stop
