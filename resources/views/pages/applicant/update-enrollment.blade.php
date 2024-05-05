@extends('layout.app-layout')
@section('pageTitle', isset($pageTitle)? $pageTitle : 'Scholara | Applied Scholarship')
@section('content')


@include('pages.applicant.layout.applicant-sidebarnav')


<section class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Application For</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="inputName">Project Name</label>
              <input type="text" id="inputName" class="form-control" disabled value="Sample Scholarship">
            </div>
            <div class="form-group">
                <label for="inputName">Scholarship Provider</label>
                <input type="text" id="inputName" class="form-control" disabled value="Scholarship Provider # 1">
              </div>
            
            <div class="form-group">
              <label for="inputDescription">Elegiblity</label>
              <textarea id="inputDescription" disabled class="form-control" rows="4">Pass requirements</textarea>
            </div>
           

            <div class="form-group">
                <label for="inputDescription">Requirements</label>
                <textarea id="inputDescription" disabled class="form-control" rows="4">Essay, Letter of Parents, Photo ID 2x2, Income Tax Return for Parents, Grade Copy</textarea>
              </div>
             
           
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <div class="col-md-6">
        <div class="card card-secondary">
          <div class="card-header">
            <h3 class="card-title">Grants</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="form-group">
                <label for="inputName">Full Scholarship</label>
                <input type="text" id="inputName" class="form-control" disabled value="Scholarship Provider # 1">
              </div>
              
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Requirements</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body p-0">
            <table class="table">
              <thead>
                <tr>
                  <th>File Name</th>
                  <th>File Size</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <td>photo_id.png</td>
                  <td>49.8005 kb</td>
                  <td class="text-right py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                      <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                      <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    </div>
                  </td>
                </tr><tr>
                  <td>essay.pdf</td>
                  <td>28.4883 kb</td>
                  <td class="text-right py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                      <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                      <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    </div>
                  </td>
                </tr><tr>
                  <td>parent-letter.pdf</td>
                  <td>57.9003 kb</td>
                  <td class="text-right py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                      <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                      <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    </div>
                  </td>
                </tr><tr>
                  <td>incometaxtreturn-copy.pdf</td>
                  <td>50.5190 kb</td>
                  <td class="text-right py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                      <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                      <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    </div>
                  </td>
                </tr><tr>
                  <td>grade-copy.pdf</td>
                  <td>44.9715 kb</td>
                  <td class="text-right py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                      <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                      <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    </div>
                  </td>

              </tr></tbody>
            </table>
          </div>
          
          <!-- /.card-body -->
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Upload requirements</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text">Upload</span>
              </div>
            </div>
          </div>
        <!-- /.card -->
      </div>
    </div>


    <div>

        <div class="form-group">
            <label>Application Status</label>
            <button class="btn btn-success"> Approved</button>
        
        </div>

        <div class="form-group">
            <label>Did you Enrolled?</label>
            <select class="form-control">
              <option>Yes</option>
              <option>No</option>
      
            </select>
          </div>
      </div>
    <div class="row">
      <div class="col-12">
        <a href="#" class="btn btn-secondary">Cancel</a>
        <input type="submit" value="Save Changes" class="btn btn-success float-right">
      </div>
    </div>
  </section>


