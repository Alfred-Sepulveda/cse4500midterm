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

        @foreach($customers AS $customer)
        <tr>
          <td>{{ $customer->id }}</td>
          <td>{{ $customer->name }}</td>
          <td>{{ $customer->email }}</td>
          <td>{{ $customer->phonenumber }}</td>
          <td>{{ $customer->services }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('$customer.show',['customer'=>$customer->id]) }}">View</a>
          <form action="{{route('$customer.destroy', $customer->id)}}" method="post">
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
<a href="{{ route('$customers.create') }} " class="btn btn-primary" >Add</a>


@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop
