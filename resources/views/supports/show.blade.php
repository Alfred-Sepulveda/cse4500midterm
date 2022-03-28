@extends('adminlte::page')

@section('title', 'Support Info')

@section('content_header')
    <h1>Support Page</h1>
@stop

@section('content')
  <h2>{{ $support->CompanyName; }}</h2>
  <div><p>{{ $support->Address; }}</p></div>
  <div><p>{{ $support->ContactName; }}</p></div>
  <div><p>{{ $support->PhoneNumber; }}</p></div>
  <div><p>{{ $support->Email; }} </p></div>
@stop

