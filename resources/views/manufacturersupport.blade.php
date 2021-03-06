@extends('adminlte::page')

@section('title', 'Company')

@section('content_header')
    <h1>Company Support Page </h1>
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

        @foreach($manufacturer_supports AS $manufacturersupport)
        <tr>
          <td>{{ $manufacturersupport->id }}</td>
          <td>{{ $manufacturersupport->CompanyName }}</td>
          <td>{{ $manufacturersupport->Address }}</td>
          <td>{{ $manufacturersupport->ContactName }}</td>
          <td>{{ $manufacturersupport->PhoneNumber }}</td>
          <td>{{ $manufacturersupport->Email }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('manufacturersupports.show',['manufacturersupport'=>$manufacturersupport->id]) }}">View</a></td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('manufacturersupports.create') }} " class="btn btn-primary" >Add</a>
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop
