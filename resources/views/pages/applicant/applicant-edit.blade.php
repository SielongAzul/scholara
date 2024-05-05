@extends('layout.app-layout')
@section('pageTitle', isset($pageTitle)? $pageTitle : 'Scholara | Applied Scholarship')
@section('content')


@include('pages.applicant.layout.applicant-sidebarnav')



<section class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Change Account</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="inputName">Email</label>
              <input type="email" id="inputName" class="form-control" value="applicanttest@email.com">
            </div>

            <div class="form-group">
                <label for="inputName">OldPassword</label>
                <input type="password" id="inputName" class="form-control" value="12345">
              </div>
              <div class="form-group">
                <label for="inputName">NewPassword</label>
                <input type="password" id="inputName" class="form-control" >
              </div>
              <div class="form-group">
                <label for="inputName">Confirm Password</label>
                <input type="password" id="inputName" class="form-control" >
              </div>
 
          
       
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Update Profile" class="btn btn-success float-right">
        </div>
          
         
      
    </div>
    
    </div>
  </section>