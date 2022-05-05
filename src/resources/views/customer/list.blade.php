@extends('customer.layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-11">
                <h2>Laravel 9 CRUD Example</h2>
        </div>
        <div class="col-lg-1 ">
            <a class="btn btn-success" href="{{ route('customer.create') }}">Add</a>
        </div>
    </div>
 
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Email</th>
            <th>Direccion</th>
            <th width="280px">Action</th>
        </tr>
        @php
            $i = 0;
        @endphp
        @foreach ($customers as $customer)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $customer->nombre }}</td>
                <td>{{ $customer->apellidos }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->direccion }}</td>
                <td>
                    <form action="{{ route('customer.destroy',$customer->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('customer.show',$customer->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('customer.edit',$customer->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection