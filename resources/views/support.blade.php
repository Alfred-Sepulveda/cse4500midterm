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

        @foreach($supports AS $support)
        <tr>
          <td>{{ $support->id }}</td>
          <td>{{ $support->CompanyName }}</td>
          <td>{{ $support->Address }}</td>
          <td>{{ $support->ContactName }}</td>
          <td>{{ $support->PhoneNumber }}</td>
          <td>{{ $support->Email }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('supports.show',['support'=>$support->id]) }}">View</a></td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('supports.create') }} " class="btn btn-primary" >Add</a>
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop
