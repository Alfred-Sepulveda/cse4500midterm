@extends('adminlte::page')

@section('title', 'Equipment Added')

@section('content_header')
    <h1>Equipement</h1>
@stop

@section('content')
  <h2>{{ $equipment->HardwareSpecs; }}</h2>
  <div><p>{{ $equipment->PurchaseInvoice; }} </p></div>
  <div><p>{{ $equipment->Price; }} </p></div>
  <div><p>{{ $equipment->PurchaseDate; }} </p></div>

@stop
