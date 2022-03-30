@extends('adminlte::page')

@section('title', 'Add Users')

@section('content_header')
    <h1>Add Users</h1>
@stop

@section('content')
<form method="post" action="{{ route('users.store') }}" >
    @csrf
    <x-adminlte-input name="LastName" label="Last Name" />
    <x-adminlte-input name="FirstName" label="First Name" />
    <x-adminlte-input name="Email" label="Email" />
    <x-adminlte-input name="ContactNumber" label="Contact Number" />
    <x-adminlte-select name="HistoyServices" label="Services Previously Done if any">
    <x-adminlte-options :options="['Desktop Repair'=>'Desktop Repair', 'Laptop Repair'=>'Laptop Repair','Phone Repair'=>'Phone Repair']"
        empty-option="Select a Repair Service"/>
    </x-adminlte-select>
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop
