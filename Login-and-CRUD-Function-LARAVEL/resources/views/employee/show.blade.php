@extends('layouts.main')

@section('title', 'CRUD | View Employee')

@section('employeeShow')
  <div class="container mt-5">
    <div class="card">
      <h3 class="card-header text-uppercase bg-primary text-white">View Employee</h3>
      <div class="card-body">
        <form action="#" method="POST">
          @csrf
          <div class="mb-3">
            <p>Name: {{ $show->name }}</p>
            
              
          </div>

          <div class="mb-3">
            <p>Address: {{ $show->address }}</p>
            
              
          </div>

          <div class="mb-3">
            <p>Email Address: {{ $show->email }}</p>
            
            
          </div>

          <div class="mb-3">
            <p>Position: {{ $show->position }}</p>
            
             
          </div>

          <div class="mb-3 float-end">
            {{-- <button type="submit" class="btn btn-sm btn-success">Submit</button> --}}
            <a href="{{ route('employee.editEmployee', $show->id) }}" class="btn btn-sm btn-success">Edit</a>
            <a href="{{ route('employee.table') }}" class="btn btn-sm btn-outline-primary">Back to Table List</a>
          </div>
          
        </form>
      </div>
    </div>
  </div>
@endsection