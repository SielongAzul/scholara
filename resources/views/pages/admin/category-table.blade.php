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

            <a class="btn btn-primary" href="{{route('admin.add_scholarship_category')}}"> Add Scholarship Category</a>
       
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>Category Type</th>
                <th>Description</th>
                <th>Date Added</th>
                <th>Date Updated</th>
                <th>Options</th>
              </tr>
              </thead>
              <tbody>
             
              <tr>
                <td>Merit-based scholarships</td>
                <td><p class="width">Merit-based scholarships are rewards for academic excellence, talent, leadership, or other achievements. They're given based on a student's accomplishments rather than financial need. These scholarships can cover tuition, fees, and sometimes living expenses, and are awarded by educational institutions, organizations, or governments.</p></td>
                <td>May 02, 2024</td>
                <td> -- </td>
                <td class="d-flex"> <button type="button" class="btn btn-primary btn-sm">View Detail</button> <button type="button" class="btn btn-danger btn-sm">Delete</button></td>
              </tr>

              <tr>
                <td>Need-based scholarships</td>
                <td><p class="width">
                    Need-based scholarships are funds given to students who need financial assistance to pursue their education.</p></td>
                <td>May 02, 2024</td>
                <td> -- </td>
                <td class="d-flex"> <button type="button" class="btn btn-primary btn-sm">View Detail</button> <button type="button" class="btn btn-danger btn-sm">Delete</button></td>
              </tr>
              <tr>
                <td>Government Scholarships</td>
                <td><p class="width">Government scholarships are financial aid programs offered by the government to support students' education.</p></td>
                <td>May 02, 2024</td>
                <td> -- </td>
                <td class="d-flex"> <button type="button" class="btn btn-primary btn-sm">View Detail</button> <button type="button" class="btn btn-danger btn-sm">Delete</button></td>
              </tr>

              <tr>
                <td>School Scholarship</td>
                <td><p class="width">
                    A school scholarship is a financial award given to students by their educational institution to support their studies.</p></td>
                <td>May 02, 2024</td>
                <td> -- </td>
                <td class="d-flex"> <button type="button" class="btn btn-primary btn-sm">View Detail</button> <button type="button" class="btn btn-danger btn-sm">Delete</button></td>
              </tr>

              <tr>
                <td>Foundation and Corporation</td>
                <td><p class="width">Foundation and corporation scholarships are financial aids provided by private organizations or companies to support students in their education.</p></td>
                <td>May 02, 2024</td>
                <td> -- </td>
                <td class="d-flex"> <button type="button" class="btn btn-primary btn-sm">View Detail</button> <button type="button" class="btn btn-danger btn-sm">Delete</button></td>
              </tr>

              <tr>
                <td>Skill Based Scholarship</td>
                <td><p class="width">
                    Skill-based scholarships are awarded to students based on their specific talents, abilities, or expertise in certain areas, rather than solely on academic achievement or financial need.</p></td>
                <td>May 02, 2024</td>
                <td> -- </td>
                <td class="d-flex"> <button type="button" class="btn btn-primary btn-sm">View Detail</button> <button type="button" class="btn btn-danger btn-sm">Delete</button></td>
              </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>

@endsection


