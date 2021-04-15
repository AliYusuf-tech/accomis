@extends('layouts.app')

@section('content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Health Facilities</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">HFs Page</li>
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
            <h3 class="card-title">Add Health Facility</h3>

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
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Select State</option>
                    <option>Kaduna</option>
                  </select>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label>L.G.A</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Select LGA</option>
                    <option>Kakuri</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Ward</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Select Ward</option>
                    <option>Sabo</option>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Facility:</label>
                  <input class="form-control" placeholder="">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>CBO</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option value="">select CBO</option>
                    <option value="">CBO 1</option>
                  </select>

                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>CBO Email</label>
                  <input type="email" name="email" class="form-control" placeholder="" readonly>

                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>SPO</label>
                  <input type="text" name="email" class="form-control" placeholder="" readonly>

                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>SPO Email</label>
                  <input type="email" name="email" class="form-control" placeholder="" readonly>

                </div>
              </div>

            </div>


            <button class="btn btn-primary">Add Health Facility</button>
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
            <h3 class="card-title">Health Facilities</h3>

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
                <th>Health Facility</th>
                <th>LGA</th>
                <th>CBO</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>001</td>
                <td>CBO 1
                </td>
                <td>PHC</td>
                <td>Kadun State</td>
                <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></td>
              </tr>
              <tr>
                <td>002</td>
                <td>CBO 2
                </td>
                <td>nphc a</td>
                <td>Jigawa State</td>
                <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></td>
              </tr>
            <tfoot>
              <tr>
                <th>id</th>
                <th>Health Facility</th>
                <th>LGA</th>
                <th>CBO</th>
                <th>Action</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->

        </div>
        <!-- /.card -->

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection
