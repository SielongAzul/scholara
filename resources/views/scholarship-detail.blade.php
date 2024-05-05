

@extends('layout.web-layout-updates')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Scholarship Listings')


@section('webpage2')


    @extends('layout.app-navbar')


<div class="scholarship-header container ms-auto">
    <div class="row">
      <div class="scholarship-header col-lg-8">
        <div class="row">
          <div class="col-auto">
          <img src="https://via.placeholder.com/150" width="150px" height="150px"> 
        </div>
        <div class="col">
        <h2 class="mb-0">Scholarship Name</h2>
        <p>Provided by : Provider Name</p>
        <a class="ms-auto btn btn-danger" href="">Return to Listings</a>
      </div>
      </div>
        <p><i class="fa-solid fa-certificate"></i> Scholarship Type: Skill Based Scholarship</p>
        <p><i class="fa-solid fa-certificate"></i> Scholarship Grants: Full</p>
        <p><i class="fa-solid fa-certificate"></i> Date Approved: January 27, 2024</p>
        <p><i class="fa-solid fa-certificate"></i> Deadline:May 31st, 2024</p>
        <p><i class="fa-solid fa-certificate"></i> Program Level: Bachelor</p>
        <p><i class="fa-solid fa-certificate"></i> Monetary Value:  0   </p>
      </div>

      <div class="scholarship-header col-lg-4">
        <h2>Scholarship Provider Information</h2>
        <hr />
        <p><i class="fa-regular fa-envelope"></i> Website: akosibastie.com</p>
        <p><i class="fa-solid fa-location-dot"></i> Address: 1327 Arlegui St. Quiapo Manila</p>
        <p><i class="fa-solid fa-phone"></i> Contact Number: 09xxxxxxx</p>
        <p><i class="fa-regular fa-envelope"></i> Email:akosibastie@yahoo.com</p>
        <div>
          <h5>Social Media</h5>
          <a href="#"><i class="fa-brands fa-facebook"></i></a>
          <a href="#"><i class="fa-brands fa-square-x-twitter"></i></a>
        </div>
      </div>
    </div>
  </div>

  <div class="container scholarship-details-bodys">
    <h5 class="pt-3">Scholarship Description</h5>
    <p>
      Applicants must meet each of the following conditions in order to apply
      for the scholarship: An offer to study a Masters program with Sydney
      Business School, University of Wollongong Commencing studies in the
      trimester of which they are applying for the scholarship Have a Bachelor
      degree or Graduate Certificate with an Australian equivalent weighted
      average mark of at least 70% Address the following three (3) selection
      criteria in 500 words or less: Motivation for studying your selected
      program at Sydney Business School, University of Wollongong Outline how
      you believe this degree will help you achieve your career goals and
      personal aspirations Describe the value you believe you will bring to
      your fellow students
    </p>
    <hr />
    <div class="container">
      <h5>Elegibility</h5>
      <ul class="ms-auto pb-5">
        <li>To be a filipino</li>

      </ul>
    </div>
    <hr>

    <div class="container">
      <h5>Requirements</h5>
      <ul class="ms-auto pb-5">
        <li>Completed Scholarship Application Form (Downloadable at MIT website)</li>
        <li>Two 2x2 ID pictures</li>
        <li>Photocopy of Certificate of Matriculation (CM) for currently enrolled MIT students</li>
        <li>High School Report card for Freshmen</li>
        <li>Photocopy of Final Grade Report since 1st Year.</li>
        <li>Photocopy of Latest Income Tax Return of Parents or Affidavit of Not Filing Income Tax Return</li>
        <li>Certificate of Good Moral from Office of the Prefect</li>
        <li>Certificate of Good Health</li>
        <li>Certification supporting leadership experience, awards received, and community involvement.</li>
        <li>Two letters of recommendation (one academic and one non-academic)</li>
        <li>A Brief essay stating the reasons why the applicant should be awarded a Scholarship Grant.</li>
      </ul>
    </div>
    <button class="btn btn-primary"> Save</button>
    <a class="ms-auto btn btn-danger" href="">Apply Scholarship</a>
    <a class="ms-auto btn btn-danger" href="">Check Website</a>
    <a class="ms-auto btn btn-danger" href="">Return to Listings</a>
  </div>

  @endsection
