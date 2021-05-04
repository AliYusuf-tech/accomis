@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
            {{-- Flash message --}}
                <div id="alert">
                @include('partials.flash')
                </div>
        {{-- Flash message end--}}
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>SPO Monthly Minutes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">SPO Minutes Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        @can('spo_role')
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">SPO Minutes of Meeting</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
            <form role="form" action="{{ route('spo.add_monthly') }}" enctype="multipart/form-data" method="POST">
             @csrf
          <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                <div class="form-group">
                  <label>State</label>
                  <select name="state" class="form-control select2" style="width: 100%;" id="state">
                    <option selected="selected">Select State</option>
                        @foreach ($states as $state)
                            <option value="{{ $state->name }}">{{ $state->name }}</option>
                        @endforeach
                  </select>
                </div>
              </div>


              <div class="col-md-4">
                <div class="form-group">
                  <label>Date of Meeting</label>
                  <input type="date" name="meeting_date" class="form-control" placeholder="">

                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputFile">Attach Signed Copy</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="attachment">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
              </div>


            </div>
            <label>Minutes of Meeting</label>
            <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px;
            font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="minutes"></textarea>



            <button class="btn btn-primary">Submit Report</button>
            <!-- /.row -->

          </div>
            </form>
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
            <h3 class="card-title">SPO Monthly Reports</h3>

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
                <th>Meeting Date</th>
                <th>Attachment</th>
                <th>Status</th>
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
                <td><span class="badge bg-success">Approved</span></td>
                <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></td>
              </tr>
              <tr>
                <td>002</td>
                <td>10/04/2021</td>
                <td><a href="#"><i class="fa fa-file-download"></i></a></td>
                <td><span class="badge bg-danger">Quaried</span></td>
                <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></td>
              </tr>
            <tfoot>
                <tr>
                    <th>id</th>
                    <th>Meeting Date</th>
                    <th>Attachment</th>
                    <th>Status</th>

                    <th>Action</th>
                  </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
          @endcan
        </div>


          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">SPOs Monthly Reports</h3>

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
                  <th>Meeting Date</th>
                  <th>Attached Report</th>
                  <th>SPO State</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>001</td>
                  <td>10/04/2021</td>
                  <td><a href="#"><i class="fa fa-file-download"></i></a></td>
                  <td>Kaduna</td>
                  <td><a href="#" data-toggle="modal" data-target="#exampleModalAdmin"><i class="fa fa-eye"></i></a></td>
                </tr>
                <tr>
                  <td>002</td>
                  <td>10/04/2021</td>
                  <td><a href="#"><i class="fa fa-file-download"></i></a></td>
                  <td>Osun</td>
                  <td><a href="#" data-toggle="modal" data-target="#exampleModalAdmin"><i class="fa fa-eye"></i></a></td>
                </tr>
                <tr>
                  <td>002</td>
                  <td>10/04/2021</td>
                  <td><a href="#"><i class="fa fa-file-download"></i></a></td>
                  <td>Delta</td>
                  <td><a href="#" data-toggle="modal" data-target="#exampleModalAdmin"><i class="fa fa-eye"></i></a></td>
                </tr>
              <tfoot>
                  <tr>
                      <th>id</th>
                      <th>Meeting Date</th>
                      <th>Attached Report</th>
                      <th>SPO State</th>

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
