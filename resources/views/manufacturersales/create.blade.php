@extends('adminlte::page')

@section('title', 'Manufacturers Sales Contact')

@section('content_header')
    <h1>Add Manufacturers Sales Contact</h1>
@stop

@section('content')
<form method="post" action="{{ route('manufacturersales.store') }}" >
    @csrf
    <x-adminlte-input name="CompanyName" label="Company Name" />
    <x-adminlte-input name="ContactName" label="Contact Name" />
    <x-adminlte-input name="Address" label="Address" />
    <x-adminlte-input name="PhoneNumber" label="Phone Number" />
    <x-adminlte-input name="Email" label="Email" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop
