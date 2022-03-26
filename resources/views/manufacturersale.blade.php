@extends('adminlte::page')

@section('title', 'Add Company')

@section('content_header')
    <h1>Company</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>CompanyName</th><th>Address</th><th>ContactName</th><th>PhoneNumber</th><th>Email</th>
        </tr>
      </thead>
      <tbody>

        @foreach($manufacturer_sales AS $manufacturersale)
        <tr>
          <td>{{ $manufacturersale->id }}</td>
          <td>{{ $manufacturersale->CompanyName }}</td>
          <td>{{ $manufacturersale->Address }}</td>
          <td>{{ $manufacturersale->ContactName }}</td>
          <td>{{ $manufacturersale->PhoneNumber }}</td>
          <td>{{ $manufacturersale->Email }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('manufacturersales.show',['manufacturersale'=>$manufacturersale->id]) }}">View</a></td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('manufacturersales.create') }} " class="btn btn-primary" >Create</a>
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop
