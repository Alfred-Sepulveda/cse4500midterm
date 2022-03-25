@extends('adminlte::page')

@section('title', 'Input Equipment')

@section('content_header')
    <h1>Add Equipment</h1>
@stop

@section('content')
<form method="post" action="{{ route('equipments.store') }}" >
    @csrf
    <x-adminlte-input name="HardwareSpecs" label="Hardware Specs" />
    <x-adminlte-input name="PurchaseInvoice" label="Purchase Invoice Number" />
    <x-adminlte-input name="Price" label="Price of the Hardware" />
    <x-adminlte-input name="PurchaseDate" label="Date of Purchase" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop
