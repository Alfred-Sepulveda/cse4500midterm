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
          <th style="width: 10px">#</th><th>Task</th><th>Progress</th><th style="width: 40px">Action</th>
        </tr>
      </thead>
      <tbody>

        @foreach($users AS $user)
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->LastName }}</td>
          <td>{{ $user->FirstName }}</td>
          <td>{{ $user->Email }}</td>
          <td>{{ $user->ContactNumber }}</td>
          <td>{{ $user->HistoryServices }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('users.show',['user'=>$user->id]) }}">View</a></td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('users.create') }} " class="btn btn-primary" >Add</a>
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop
