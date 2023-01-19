@extends('layouts.main')

@section('title', 'CRUD | Edit Employee')

@section('employeeEdit')
  <div class="container mt-5">
    <div class="card">
      <h3 class="card-header text-uppercase bg-primary text-white">Edit Employee</h3>
      <div class="card-body">
        <form action="{{ route('employee.update', $edit->id) }}" method="POST">
          @method('PUT')
          @csrf
          
          <div class="mb-3">
            <input type="text" name="name" id="" class="form-control" required placeholder="Name" value="{{ $edit->name }}">
              
          </div>

          <div class="mb-3">
            <input type="text" name="address" id="" class="form-control" required placeholder="Address" value="{{ $edit->address }}">
              
          </div>

          <div class="mb-3">
            <input type="email" name="email" id="" class="form-control" required placeholder="Email Address" value="{{ $edit->email }}">
            
          </div>

          <div class="mb-3">
            <input type="text" name="position" id="" class="form-control" required placeholder="Position" value="{{ $edit->position }}">
             
          </div>

          <div class="mb-3 float-end">
            <button type="submit" class="btn btn-sm btn-success">Submit</button>
            <a href="{{ route('employee.table') }}" class="btn btn-sm btn-outline-primary">Back to Table List</a>
          </div>
          
        </form>
      </div>
    </div>
  </div>
@endsection