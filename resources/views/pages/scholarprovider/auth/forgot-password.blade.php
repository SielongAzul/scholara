@extends('back.layout.auth-layout')
@section('pageTitle', isset($pageTitle)? $pageTitle : 'Admin forgot their password....')
@section('content')

<div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">You forgot your password? I do to as well, worry not this page will help you to access your account again.</p>

      <form action="{{route('admin.send-password-reset-link')}}" method="post">
        @csrf
        @if (Session::get('fail'))
            <div class="alert alert-danger">
                <button>
                    <span aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">$times;</span>
                </button>
        @endif
        @if (Session::get('success'))
        <div class="alert alert-success">
            <button>
                <span aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">$times;</span>
            </button>
        @endif
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email" value="{{old('email')}}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        @error('email')
            <div class="d-block text-danger" style="margin-top:-25px; margin-bottom:15px">{{$message}}</div>
        @enderror
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Request new password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="{{route('admin.login')}}">Login</a>
      </p>
      <p class="mb-0">
    
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>

@endsection