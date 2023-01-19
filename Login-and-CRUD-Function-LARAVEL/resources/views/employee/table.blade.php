@extends('layouts.header')

@section('title', 'CRUD | Employee Table' )

@section('employeeTable')
  <section>
    <div class="container mt-5">
      <div class="card">
        <h3 class="card-header text-uppercase bg-primary text-white">Employee List</h3>
        <form>
          <div class="row">
            <div class="col mx-3 mt-3">
              <a href="{{ route('employee.createEmployee') }}" class="btn btn-sm btn-outline-success">Add</a>
            </div>
            <div class="col-md-6">
                <div class="d-flex mx-3 mt-3" role="search">
                  <input class="form-control form-control-sm me-2" type="search" id="search" name="search"
                  value="{{ request('search') }}" placeholder="Search" aria-label="Search">
                  <button type="submit" class="btn btn-outline-success">Search</button>
                </div>
            </div>
          </div>
        </form>
  
        
       
      
        <div class="card-body">
          {{-- Alert --}}
          @if ($message = session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>{{ $message }}</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif
          <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTables">
              <thead>
                <tr class="text-center">
                  <th>#</th>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Email</th>
                  <th>Position</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($employee as $index => $row )
                  <tr class="text-center">
                    
                    <td>{{ $index + $employee->firstItem() }}</td> {{-- Numberings --}}
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->address }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->position }}</td>
                    <td class="btn-group">
                      <a href="{{ route('employee.show', $row->id) }}" class="btn btn-sm btn-outline-info">
                        <i class="fa-regular fa-eye"></i>
                      </a>
                   
                      <a href="{{ route('employee.editEmployee', $row->id) }}" class="btn btn-sm btn-outline-warning">
                        <i class="fa-regular fa-pen-to-square"></i>
                      </a>
                    
                   
                      {{-- Delete Function --}}
                      <form action="{{ route('employee.delete', $row->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure ?')">
                          <i class="fa-solid fa-trash"></i>
                        </button>
                      </form>
                      
                    </td>
                  </tr>
         
                @endforeach
              </tbody>
               
            </table>
          </div>
         {{ $employee->links() }}
        </div>
      </div>
    </div>
  </section>
@endsection