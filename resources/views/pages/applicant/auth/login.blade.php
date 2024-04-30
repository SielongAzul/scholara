@extends('layout.app-layout')
@section('pageTitle', isset($pageTitle)? $pageTitle : 'Applicant Login')
@section('content')

<div class="login-box">
    <div class="login-logo">
      <a href="#"><b>Applicant</b>Login</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to access to Provider Dashboard.</p>
  
        <form action="{{route('applicant.loginHandler')}}" method="POST">
          @csrf
          
   

          @if (Session::get('fail'))
          <div class="alert alert-danger">
            {{Session::get('fail')}}
          </div>
          @endif

          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name ='email'  value= "{{old('email')}}"> 
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <p class="text-danger">@error('email') {{$message}} @enderror </p>
          
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password"  value= "{{old('password')}}" >
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <p class="text-danger">@error('password') {{$message}} @enderror </p>
  
 
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
  
       
    
  
        <p class="mb-1">
          <a href="">I forgot my password</a>
        </p>
        <p class="mb-1">

          <a href="{{route ('applicant.register')}}">Sign up</a>
    
         
        </p>

      </div>
      <!-- /.login-card-body -->
    </div>
  </div>

@endsection