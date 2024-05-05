@extends('layout.app-layout')
@section('pageTitle', isset($pageTitle)? $pageTitle : 'Scholara | Applied Scholarship')
@section('content')


@include('pages.applicant.layout.applicant-sidebarnav')


<section class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">General</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="inputName">Name</label>
              <input type="text" id="inputName" class="form-control" value="AdminLTE">
            </div>

            <div class="form-group">
                <label for="inputName">Graduated at </label>
                <input type="text" id="inputName" class="form-control" value="Tondo High School">
              </div>
              <div class="form-group">
                <label for="inputName">School Year</label>
                <input type="text" id="inputName" class="form-control" value="2021-2022">
              </div>
            <div class="form-group">
              <label for="inputDescription">Achievements</label>
              <textarea id="inputDescription" class="form-control" rows="4">Championship at Chess 2021</textarea>
            </div>
            <div class="form-group">
                <label for="inputDescription">GWA</label>
                <textarea id="inputDescription" class="form-control" rows="4">3.00</textarea>
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