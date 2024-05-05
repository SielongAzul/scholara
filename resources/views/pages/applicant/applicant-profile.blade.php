@extends('layout.app-layout')
@section('pageTitle', isset($pageTitle)? $pageTitle : 'Scholara | Applied Scholarship')
@section('content')


@include('pages.applicant.layout.applicant-sidebarnav')
<div class="card card-primary card-outline">
    <div class="card-body box-profile">
      <div class="text-center">
        <img class="profile-user-img img-fluid img-circle" src="/back/dist/img/user4-128x128.jpg" alt="User profile picture">
      </div>

      <h3 class="profile-username text-center">Nina Mcintire</h3>

    </div>
    <!-- /.card-body -->
  </div>


  <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Graduated at</strong>

                <p class="text-muted">
                  Tondo, High School  SY 2021-2022
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">Malibu, California</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Achievements</strong>

                <p class="text-muted">
                    <span class="tag tag-danger">Championship in Chess in 2021 </span>
                </p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">Blank </span>
                  <span class="tag tag-success">Coding</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">PHP</span>
                  <span class="tag tag-primary">Node.js</span>
                </p>

                <strong><i class="fas fa-pencil-alt mr-1"></i> GWA</strong>

                <p class="text-muted">3.00</p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
              </div>
              <!-- /.card-body -->
            </div>

            <a class="btn btn-primary" href="{{route('applicant.applicant_edit')}}"> Update Account </a>
            <a class="btn btn-primary" href="{{route('applicant.applicant_account_edit')}}"> Update Profile </a>
