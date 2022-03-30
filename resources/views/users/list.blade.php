@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <h1>Users</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>Name</th><th>Email</th><th>Contact Number</th><th>History of Services</th>
      </thead>
      <tbody>

        @foreach($users AS $user)
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->phonenumber }}</td>
          <td>{{ $user->services }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('users.show',['user'=>$user->id]) }}">View</a>
          <form action="{{route('users.destroy', $user->id)}}" method="post">
                @csrf
                @method('delete')
                <div class="buttons are-rounded are-small">
                    <input type="submit" class="button is-danger is-rounded "value="Delete" />
                </div>
          </form>
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
