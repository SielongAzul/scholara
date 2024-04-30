@extends('layout.auth-layout')
@section('pageTitle', isset($pageTitle)? $pageTitle : 'Scholara | Validator Login')
@section('content')

<div class="login-box">
    <div class="login-logo">
      <a href="#"><b>Validator</b>Login</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">There is no registration here. Ask the admin to create one.</p>
  
        <form action="{{route('validator.loginHandler')}}" method="POST">
            @csrf
            @if (Session::get('fail'))
                <div class="alert alert-danger">
                    {{Session::get('fail')}}

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">$times;</span>
                    </button>
                </div>
             @endif
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name ='login' value="{{old('login')}}"> 
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          @error('login')
                <div class="d-block text-danger" style="margin-top: -25px; margin-bottom:15px;">
                    {{ $message}}
                </div>
            @enderror
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password" value="{{old('password')}}">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          @error('password')
          <div class="d-block text-danger" style="margin-top: -25px; margin-bottom:15px;">
              {{ $message}}
          </div>
      @enderror
          <div class="row mt-4">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
  
       
    
  
        <p class="mb-1">
          <a href="#">I forgot my password</a>
        </p>
  

      </div>
      <!-- /.login-card-body -->
    </div>
  </div>

@endsection