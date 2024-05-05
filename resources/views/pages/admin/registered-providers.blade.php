@extends('layout.app-layout')
@section('pageTitle', isset($pageTitle)? $pageTitle : 'Scholara | Admin Home')
@section('content')


@include('pages.admin.layout.admin-sidebarnav')
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header d-flex justify-content-between">
            <h3 class="card-title">Scholarship Category Table</h3>
          
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>Primary Key</th>
                <th>Scholarship Provider Name</th>
                <th>Date Registered</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Status</th>
                <th>Options</th>
              </tr>
              </thead>
              <tbody>
             
              <tr>
                <td>1</td>
                <td><p class="width">Scholarship Provider Sample</p></td>
                <td>May 02, 2024</td>
                <td> test@email.com </td>
                <td> N/A </td>
                <td> Offline </td>
                <td class="d-flex"> <button type="button" class="btn btn-primary btn-sm">View Profile</button> <button type="button" class="btn btn-success btn-sm">Update User</button> <button type="button" class="btn btn-danger btn-sm">Delete</button></td>
              </tr>

              <tr>
                <td>1</td>
                <td><p class="width">Scholarship Provider Sample</p></td>
                <td>May 02, 2024</td>
                <td> test@email.com </td>
                <td> N/A </td>
                <td> Offline </td>
                <td class="d-flex"> <button type="button" class="btn btn-primary btn-sm">View Profile</button> <button type="button" class="btn btn-success btn-sm">Update User</button> <button type="button" class="btn btn-danger btn-sm">Delete</button></td>
              </tr>

              <tr>
                <td>1</td>
                <td><p class="width">Scholarship Provider Sample</p></td>
                <td>May 02, 2024</td>
                <td> test@email.com </td>
                <td> N/A </td>
                <td> Offline </td>
                <td class="d-flex"> <button type="button" class="btn btn-primary btn-sm">View Profile</button> <button type="button" class="btn btn-success btn-sm">Update User</button> <button type="button" class="btn btn-danger btn-sm">Delete</button></td>
              </tr>

              <tr>
                <td>1</td>
                <td><p class="width">Scholarship Provider Sample</p></td>
                <td>May 02, 2024</td>
                <td> test@email.com </td>
                <td> N/A </td>
                <td> Offline </td>
                <td class="d-flex"> <button type="button" class="btn btn-primary btn-sm">View Profile</button> <button type="button" class="btn btn-success btn-sm">Update User</button> <button type="button" class="btn btn-danger btn-sm">Delete</button></td>
              </tr>

              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>

@endsection


