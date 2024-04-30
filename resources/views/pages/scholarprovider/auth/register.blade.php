@extends('layout.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Example Register')
@section('content')

<div class="register-box">
    <div class="register-logo">
      <a href="../../index2.html"><b>Scholarship Provider</b>Login</a>
    </div>
  
    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg">Register Now!</p>
  
        <form action="{{ route('scholarprovider.create')}}" method="post">
            @csrf


            @if (Session::get('success'))
            <div class="alert alert-success">
              {{Session::get('success')}}
            </div>
          @endif

            @if (Session::get('fail'))
            <div class="alert alert-danger">
              {{Session::get('fail')}}
            </div>
            @endif
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Provider Name" name="pname" value= "{{old('pname')}}">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
            
          </div>
          <p class="text-danger">@error('pname') {{$message}} @enderror </p>
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name="email" value= "{{old('email')}}">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
           
          </div>
          <p class="text-danger">@error('email') {{$message}} @enderror </p>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password" value= "{{old('password')}}">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            
          </div>

          <p class="text-danger">@error('password') {{$message}} @enderror </p>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Retype password" name="cpassword" value= "{{old('cpassword')}}">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            
          </div>
          <p class="text-danger">@error('cpassword') {{$message}} @enderror </p>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                  <p> By signing up you are agree to terms and conditions. </p>
              </div>

              <a href="{{route ('scholarprovider.login')}}">Sign In</a>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
    </div>
</div>
@endsection