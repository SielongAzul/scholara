@extends('layout.app-layout')
@section('pageTitle', isset($pageTitle)? $pageTitle : 'Scholara | Admin Home')
@section('content')


@include('pages.scholarprovider.layout.scholarprovider-sidebarnav')
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Scholarship List Table</h3>
        
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>Scholarship ID</th>
                <th>Scholarship Name</th>
                <th>Scholarip Provider</th>
                <th>Scholarip Category</th>
                <th>Date Added</th>
                <th>Deadline</th>
                <th>Status</th>
                <th>Publishing Status</th>
                <th>Validated By</th>
                <th>Date Updated</th>
                <th>Options</th>
              </tr>
              </thead>
              <tbody>
             
              <tr>
                <td>1</td>
                <td>Sample Scholarship 1 </td>
                <td>Sample Provider 1</td>
                <td>Merit Based Scholarship</td>
                <td>May 2, 2024 </td>
                <td>May 18, 2024 </td>
                <td> <button type="button" class="btn btn-block btn-success">Approved</button></td>
                <td> <button type="button" class="btn btn-block btn-success">Published</button></td>
                <td>Sample Validator </td>
                <td>May 3, 2024</td>
                <td class="d-flex"> <button type="button" class="btn btn-secondary btn-sm">Update Scholarship</button> <button type="button" class="btn btn-primary btn-sm">View Detail</button> <button type="button" class="btn btn-danger btn-sm">Delete</button></td>
              </tr>

              <tr>
                <td>2</td>
                <td>Sample Scholarship 1 </td>
                <td>Sample Provider 2</td>
                <td>School Scholarship</td>
                <td>May 2, 2024 </td>
                <td>May 18, 2024 </td>
                <td> <button type="button" class="btn btn-block btn-warning">Pending</button></td>
                <td> <button type="button" class="btn btn-block btn-warning">Hidden</button></td>
                <td> -- </td>
                <td>May 3, 2024</td>
                <td class="d-flex"> <button type="button" class="btn btn-secondary btn-sm">Update Scholarship</button> <button type="button" class="btn btn-primary btn-sm">View Detail</button> <button type="button" class="btn btn-danger btn-sm">Delete</button></td>
              </tr>
              <tr>
                <td>3</td>
                <td>Sample Scholarship 3 </td>
                <td>Sample Provider 3</td>
                <td>Need Based Scholarship</td>
                <td>May 2, 2024 </td>
                <td>May 18, 2024 </td>
                <td> <button type="button" class="btn btn-block btn-danger">Unapproved</button></td>
                <td> <button type="button" class="btn btn-block btn-warning">Hidden</button></td>
                <td>Sample Validator </td>
                <td>May 3, 2024</td>
                <td class="d-flex"> <button type="button" class="btn btn-secondary btn-sm">Update Scholarship</button> <button type="button" class="btn btn-primary btn-sm">View Detail</button> <button type="button" class="btn btn-danger btn-sm">Delete</button></td>
              </tr>
              <tr>
                <td>4</td>
                <td>Sample Scholarship 4 </td>
                <td>Sample Provider 4</td>
                <td>Need Based Scholarship</td>
                <td>May 2, 2024 </td>
                <td>May 4, 2024 </td>
                <td> <button type="button" class="btn btn-block btn-secondary">Publishing Expired</button></td>
                <td> <button type="button" class="btn btn-block btn-warning">Hidden</button></td>
                <td>Sample Validator </td>
                <td>May 2, 2024</td>
                <td class="d-flex"> <button type="button" class="btn btn-secondary btn-sm disabled">Update Status</button> <button type="button" class="btn btn-primary btn-sm">View Detail</button> <button type="button" class="btn btn-danger btn-sm">Delete</button></td>
              </tr>

              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>

@endsection


