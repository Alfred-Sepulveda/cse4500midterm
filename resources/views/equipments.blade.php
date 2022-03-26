@extends('adminlte::page')

@section('title', 'Inventory')

@section('content_header')
    <h1>Equipment Inventory</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>Hardware Specs</th><th>Invoice Number</th><th>Price</th><th>Date of Purchase</th>
        </tr>
      </thead>
      <tbody>

        @foreach($equipments AS $equipment)
        <tr>
          <td>{{ $equipment->id }}</td>
          <td>{{ $equipment->HardwareSpecs }}</td>
          <td>{{ $equipment->PurchaseInvoice }}</td>
          <td>{{ $equipment->Price }}</td>
          <td>{{ $equipment->PurchaseDate }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('equipments.show',['equipment'=>$equipment->id]) }}">View</a></td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('equipments.create') }} " class="btn btn-primary" >Add</a>
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop
