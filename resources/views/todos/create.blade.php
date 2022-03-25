@extends('adminlte::page')

@section('title', 'Add Users')

@section('content_header')
    <h1>Users</h1>
@stop

@section('content')
<form method="post" action="{{ route('users.store') }}" >
    @csrf
    <x-adminlte-input name="LastName" label="Last Name" />
    <x-adminlte-input name="FirstName" label="Last Name" />
    <x-adminlte-input name="Email" label="Email" />
    <x-adminlte-input name="ContactNumber" label="Contact Number" />
    <x-adminlte-input name="HistoryServices" label="Services" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop
