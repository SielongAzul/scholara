
@extends('layout.app-layout')
@section('pageTitle', isset($pageTitle)? $pageTitle : 'Scholara | Add Validator')
@section('content')


@include('pages.admin.layout.admin-sidebarnav')


<div class="card card-success">
    <div class="card-header">
      <h3 class="card-title">Add Validator Account</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">

        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="name" class="form-control" id="entername" placeholder="Enter Name for Validator Account">
          </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>

      
        </div>

      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-success">Add Validator Account</button>
      </div>
    </form>
  </div>

  @endsection