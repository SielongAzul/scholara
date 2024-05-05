
@extends('layout.app-layout')
@section('pageTitle', isset($pageTitle)? $pageTitle : 'Scholara | Add Validator')
@section('content')


@include('pages.admin.layout.admin-sidebarnav')


<div class="card card-success">
    <div class="card-header">
      <h3 class="card-title">Scholarship Category</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">

        <div class="form-group">
            <label for="exampleInputEmail1">Category Name</label>
            <input type="name" class="form-control" id="entername" placeholder="Enter Name for Validator Account">
          </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Category Descriptionm</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Description">
        </div>
  
      
        </div>

      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-success">Add Category</button>
      </div>
    </form>
  </div>

  @endsection