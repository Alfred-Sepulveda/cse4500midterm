@extends('adminlte::page')

@section('title', 'Add Users')

@section('content_header')
    <h1>Support</h1>
@stop

@section('content')
<form method="post" action="{{ route('todos.store') }}" >
    @csrf
    <x-adminlte-input name="name" label="Name" />
    <x-adminlte-input name="email" label="Email" />
    <x-adminlte-input name="phonenumber" label="Phone Number" />
    <x-adminlte-input name="support" label="Type of Support" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop
