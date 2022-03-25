@extends('adminlte::page')

@section('title', 'Add Users')

@section('content_header')
    <h1>Add Users</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>Hardware Specs</th><th>Invoice Number</th><th>Price</th><th>Date of Purchase</th><th style="width: 40px">Action</th>
        </tr>
      </thead>
      <tbody>

        
        <tr>
          <td>{{ $equipment->id }}</td>
          <td>{{ $equipment->HardwareSpecs }}</td>
          <td>{{ $equipment->PurchaseInvoice }}</td>
          <td>{{ $equipment->Price }}</td>
          <td>{{ $equipment->PurchaseDate }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('equipments.show',['equipment'=>$equipment->id]) }}">View</a></td>
        </tr>
        

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
