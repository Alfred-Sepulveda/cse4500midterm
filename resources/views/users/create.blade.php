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
    <x-adminlte-select name="HistoryServices" label="Services">
    <x-adminlte-options :options="['desktop'=>'Desktop Repair','laptop'=>'Laptop Repair','phone'=>'Phone Repair']"
        empty-option="Select Repair Service"/>
    </x-adminlte-select>
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop
