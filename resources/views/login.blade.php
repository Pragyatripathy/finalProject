@extends('template')

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

<section>
    <div class="container py-5 h-100">
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
          <img src="../assets/images/12za.jpg"
            class="img-fluid" alt="energy image">
        </div>
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
          <form  method="POST">
              @csrf
             

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input name="email" type="text" id="form1Example13" class="form-control form-control-lg" placeholder="Email" />
              
            </div>
  
            <!-- Password input -->
            <div class="form-outline mb-4">
              <input name="password" type="text" id="form1Example23" class="form-control form-control-lg" placeholder="Password" /> 
            </div>
            
            <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
  
            <div class="d-flex justify-content-around align-items-center mb-4">
              
            </div>
  
            <!-- Submit button -->
            
  
            
          </form>
        </div>
      </div>
    </div>
  </section> 
    @endsection