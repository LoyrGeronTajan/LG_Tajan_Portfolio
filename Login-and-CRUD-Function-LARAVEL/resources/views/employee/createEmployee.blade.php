@extends('layouts.main')

@section('title', 'CRUD | Create Employee')

@section('employeeCreate')
  <div class="container mt-5">
    <div class="card">
      <h3 class="card-header text-uppercase bg-primary text-white">Add New Employee</h3>
      <div class="card-body">
        <form action="{{ route('employee.store') }}" method="POST">
          @csrf
          <div class="mb-3">
            <input type="text" name="name" id="" class="form-control" required placeholder="Name">
              
          </div>

          <div class="mb-3">
            <input type="text" name="address" id="" class="form-control" required placeholder="Addres">
              
          </div>

          <div class="mb-3">
            <input type="email" name="email" id="" class="form-control" required placeholder="Email">
            
          </div>

          <div class="mb-3">
            <input type="text" name="position" id="" class="form-control" required placeholder="Position">
             
          </div>

          <div class="mb-3 float-end">
            <button type="submit" class="btn btn-sm btn-success">Submit</button>
            <a href="{{ route('employee.table') }}" class="btn btn-sm btn-outline-primary">Cancel</a>
          </div>
          
        </form>
      </div>
    </div>
  </div>
@endsection