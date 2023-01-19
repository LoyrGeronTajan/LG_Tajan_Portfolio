@extends('layouts.header')

@section('title', 'Test | Datatabales')

@section('content')
  <div class="container py-5">
    <div class="table-responsive">
      <table class="table table-hover text-center" id="dataTables">
        <thead>
          <tr class="text-uppercase">
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Position</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($dataTables as $row )
            
          @endforeach
          <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->address }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->position }}</td>
            <td class="btn-group">
              <a href="" class="btn btn-sm btn-outline-primary">
                <i class="fa-regular fa-eye"></i>                
              </a>
              <a href="" class="btn btn-sm btn-outline-warning">
                <i class="fa-regular fa-pen-to-square"></i>           
              </a>
              <a href="" class="btn btn-sm btn-outline-danger">
                <i class="fa-solid fa-trash"></i>             
              </a>
            </td>

          </tr>
        </tbody>
      </table>
    </div>
  </div>

@endsection