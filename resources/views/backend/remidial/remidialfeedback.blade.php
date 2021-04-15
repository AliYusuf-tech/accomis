@extends('layouts.app')

@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Remidial Feedback</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Remidial Feedback Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Remedial Feedback</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>State</label>
                  <input type="text" name="name" class="form-control" placeholder="" readonly>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label>LGA</label>
                  <input type="text" name="text" class="form-control" placeholder="" readonly>

                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Ward</label>
                  <input type="text" name="text" class="form-control" placeholder="" readonly>

                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>CBO</label>
                  <input type="text" name="text" class="form-control" placeholder="" readonly>

                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Date Visit</label>
                  <input type="date" name="date" class="form-control" placeholder="">

                </div>
              </div>
              <div class="col-md-4">
                  <label>Tracker Type</label>
                <div class="form-group clearfix">
                    <div class="icheck-primary d-inline">
                      <input type="radio" id="radioPrimary2" name="r1">
                      <label for="radioPrimary2">
                        Focus Group Discussion
                      </label>

                    </div>

                  </div>
                  <div class="form-group clearfix">
                    <div class="icheck-danger d-inline">
                      <input type="radio" id="radiodanger3" name="r2">
                      <label for="radiodanger3">
                          Client Exit
                      </label>
                    </div>

                  </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Key Findings/Identified Issues</label>
                  <select name="" id="" class="form-control">
                    <option value="">LLIN Not Available</option>
                    <option value="">No Medical Personnel</option>
                    <option value="">No Road Network</option>
                    <option value="">Poor Logistics</option>

                  </select>

                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Root Cause</label>
                  <input type="text" name="text" class="form-control" placeholder="">

                </div>
              </div>
              <div class="col-md-8">
                <div class="form-group">
                  <label>Action Taken Immediately</label>
                  <input type="text" name="text" class="form-control" placeholder="">

                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Resolved</label>
                  <select name="" id="" class="form-control">
                    <option value="">Yes</option>
                    <option value="">No</option>
                  </select>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label>Follow Up Action</label>
                  <input type="text" name="text" class="form-control" placeholder="">

                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Responsibility</label>
                  <input type="text" name="text" class="form-control" placeholder="">

                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Timeline</label>
                  <input type="date" name="text" class="form-control" placeholder="">

                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputFile">Attach Signed Copy</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
              </div>
            </div>

            <button class="btn btn-primary" type="submit" name="remedial">Submit Remedial Report</button>
            <!-- /.row -->

          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <!-- Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
            the plugin. -->
          </div>
        </div>
        <!-- /.card -->

        <!-- SELECT2 EXAMPLE -->
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">CBO Feedback View</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>id</th>
                <th>Date</th>
                <th>Attachment</th>
                <th>Feedback Status</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>001</td>
                <td>10/04/2021</td>
                <td><a href="#"><i class="fa fa-file-download"></i></a></td>
                <td><span class="badge bg-warning">Pending</span></td>
                <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></td>
              </tr>
              <tr>
                <td>002</td>
                <td>10/04/2021</td>
                <td><a href="#"><i class="fa fa-file-download"></i></a></td>
                <td><span class="badge bg-success">Resolved</span></td>
                <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></td>
              </tr>
              <tr>
                <td>002</td>
                <td>10/04/2021</td>
                <td><a href="#"><i class="fa fa-file-download"></i></a></td>
                <td><span class="badge bg-warning">Pending</span></td>
                <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></td>
              </tr>
            <tfoot>
                <tr>
                  <th>id</th>
                  <th>Date</th>
                  <th>Attachment</th>
                  <th>Feedback Status</th>
                  <th>Action</th>
                  </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">SPO/Admin Feedback View</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>id</th>
                  <th>Date</th>
                  <th>Attachment</th>
                  <th>CBO</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>001</td>
                  <td>10/04/2021</td>
                  <td><a href="#"><i class="fa fa-file-download"></i></a></td>
                  <td>CBO 1</td>
                  <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></td>
                </tr>
                <tr>
                  <td>002</td>
                  <td>10/04/2021</td>
                  <td><a href="#"><i class="fa fa-file-download"></i></a></td>
                  <td>CBO 3</td>
                  <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></td>
                </tr>
              <tfoot>
                  <tr>
                    <th>id</th>
                    <th>Date</th>
                    <th>Attachment</th>
                    <th>CBO</th>
                    <th>Action</th>
                    </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
        </div>


      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


@endsection
