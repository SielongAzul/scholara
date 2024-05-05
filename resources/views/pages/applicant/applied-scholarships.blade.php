@extends('layout.app-layout')
@section('pageTitle', isset($pageTitle)? $pageTitle : 'Scholara | Applied Scholarship')
@section('content')


@include('pages.applicant.layout.applicant-sidebarnav')
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Applied Scholarship List Table</h3>
        
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>Scholarship Name</th>
                <th>Scholarip Provider</th>
                <th>Date Submitted</th>
                <th>Application Status</th>
                <th>Date Accepted</th>
                <th>Enrollment Status</th>

                <th>Date Updated</th>
                <th>Options</th>
              </tr>
              </thead>
              <tbody>
             
              <tr>
                <td>Sample Scholarship 1 </td>
                <td>Sample Provider </td>
                <td>May 2, 2024 </td>
                <td> <button type="button" class="btn btn-block btn-success">Accepted</button></td>
                <td>May 18, 2024 </td>
                <td> <button type="button" class="btn btn-block btn-success">I Enrolled</button></td>
                <td>May 3, 2024</td>
                <td class="d-flex"><a href="{{route('applicant.update_enrollment')}}" class="btn btn-warning btn-sm">Update Enrollement Status</a> <a href="{{route('applicant.submission_edit')}}" class ='btn btn-secondary'> Edit Submission</a> <button type="button" class="btn btn-primary btn-sm">View Detail</button> <button type="button" class="btn btn-danger btn-sm">Delete Application</button></td>
              </tr>

              <tr>
                <td>Sample Scholarship 1 </td>
                <td>Sample Provider </td>
                <td>May 2, 2024 </td>
                <td> <button type="button" class="btn btn-block btn-danger">Rejected</button></td>
                <td>May 18, 2024 </td>
                <td> <button type="button" class="btn btn-block btn-danger">Did not Enrolled</button></td>
                <td>May 3, 2024</td>
                <td class="d-flex"><button type="button" class="btn btn-warning disabled btn-sm">Update Enrollement Status</button> <a href="{{route('applicant.submission_edit')}}" class ='btn btn-secondary'> Edit Submission</a> <button type="button" class="btn btn-primary btn-sm">View Detail</button> <button type="button" class="btn btn-danger btn-sm">Delete Application</button></td>
              </tr>
              <tr>
                <td>Sample Scholarship 1 </td>
                <td>Sample Provider </td>
                <td>May 2, 2024 </td>
                <td> <button type="button" class="btn btn-block btn-warning">Pending</button></td>
                <td>May 18, 2024 </td>
                <td> <button type="button" class="btn btn-block btn-warning">Currently Applying</button></td>
                <td>May 3, 2024</td>
                <td class="d-flex"><button type="button" class="btn btn-warning disabled btn-sm">Update Enrollement Status</button> <a href="{{route('applicant.submission_edit')}}" class ='btn btn-secondary'> Edit Submission</a>  <button type="button" class="btn btn-primary btn-sm">View Detail</button> <button type="button" class="btn btn-danger btn-sm">Delete Application</button></td>
              </tr>
              <tr>
                <td>Sample Scholarship 1 </td>
                <td>Sample Provider </td>
                <td>May 2, 2024 </td>
                <td> <button type="button" class="btn btn-block btn-success">Accepted</button></td>
                <td>May 18, 2024 </td>
                <td> <button type="button" class="btn btn-block btn-danger">Did not enrolled</button></td>
                <td>May 3, 2024</td>
                <td class="d-flex"><a href="{{route('applicant.update_enrollment')}}" class="btn btn-warning btn-sm">Update Enrollement Status</a> <a href="{{route('applicant.submission_edit')}}" class ='btn btn-secondary'> Edit Submission</a>  <button type="button" class="btn btn-primary btn-sm">View Detail</button> <button type="button" class="btn btn-danger btn-sm">Delete Application</button></td>
              </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>

@endsection


