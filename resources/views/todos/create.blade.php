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
    <x-adminlte-select name="support" label="Services">
    <x-adminlte-options :options="['Desktop Repair'=>'Desktop Repair','Laptop Repair'=>'Laptop Repair','Phone Repair'=>'Phone Repair']"
        empty-option="Select Repair Service"/>
    <x-adminlte-input name="progress" type="number" min=0 max=100 label="Progress" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop
