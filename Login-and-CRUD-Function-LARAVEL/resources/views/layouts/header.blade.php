@extends('layouts.main')

@section('header')

<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('home') }}">Laravel Employee</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
              aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
              @auth
              <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                  </li>

                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                          aria-expanded="false">
                          Employee
                      </a>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{ route('employee.table') }}">Table</a></li>
                          <li><a class="dropdown-item" href="{{ route('employee.test-datatables') }}">DataTables</a>
                          </li>

                      </ul>
                  </li>
              </ul>
             @endauth
              
              {{-- 
                  @if (Route::has('login'))
                  <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                      @auth
                      <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                      @else
                      <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                      @if (Route::has('register'))
                      <a href="{{ route('register') }}"
                          class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                      @endif
                      @endauth
                  </div>
                  @endif 
              --}}
              {{-- <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
              </form> --}}
     
              @guest
              {{-- <div class="d-flex float-end">
                  <a href="{{ route('login') }}" class="btn btn-sm btn-outline-success mx-3">Login</a>
                  <a href="{{ route('register') }}" class="btn btn-sm btn-outline-primary">Register</a>
              </div> --}}
              @else
                  <div>
                      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                  aria-expanded="false">
                                  <i class="fa fa-sign-out" aria-hidden="true"></i>
                                  {{ auth()->user()->name }}
                              </a>
                              <ul class="dropdown-menu">
                                  <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                  </li>
                              </ul>
                          </li>
                      </ul>
                  </div>
              @endguest
          </div>
         
      </div>
  </nav>
</header>

@endsection