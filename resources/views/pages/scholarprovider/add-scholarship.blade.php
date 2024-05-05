
@extends('layout.app-layout')
@section('pageTitle', isset($pageTitle)? $pageTitle : 'Scholara | Applied Scholarship')
@section('content')


@include('pages.scholarprovider.layout.scholarprovider-sidebarnav')



<div class="card-body">
    <div class="form-group">
        <label>Scholarship Name</label>
        <input type="text" class="form-control" placeholder="Enter ...">
      </div>
      <div class="form-group">
        <label>Description</label>
        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
      </div>

      <div class="form-group">
        <label>Eligibilty</label>
        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
      </div>

      <div class="form-group">
        <label>Requirement</label>
        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
      </div>

      
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">I want to provide requirement forms for this scholarship</label>
    </div>

    <div class="form-group">
        <label>Provided Website Link (If the checkbox is checked) </label>
        <input type="text" class="form-control" placeholder="Enter ...">

      </div>
<hr>
<label>Requirements</label>

    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Essay</label>
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Income Tax Return</label>
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Photo ID</label>
      </div>

      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Letter of Approval</label>
      </div>

      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Other Requirements Stated in Requirement</label>
      </div>



    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Add Scholarship</button>
      </div>
  </div>