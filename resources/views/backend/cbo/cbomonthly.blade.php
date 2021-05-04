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
            <h1>CBO Monthly Minutes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">CBOs Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
      @can('cbo_role')
      <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">CBO Minutes of Meeting</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
        <form role="form" action="{{ route('cbo.add_monthly') }}" enctype="multipart/form-data" method="POST">
             @csrf
          <div class="card-body">
            <div class="row">

            <div class="col-md-4">
                <div class="form-group">
                  <label>State</label>
                  <input type="text" name="state" class="form-control select2" style="width: 100%;" id="state" readonly>

                  <!-- <select name="state" class="form-control select2" style="width: 100%;" id="state">
                    <option selected="selected">Select State</option>
                        @foreach ($states as $state)
                            <option value="{{ $state->name }}">{{ $state->name }}</option>
                        @endforeach
                  </select> -->
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label>L.G.A</label>
                  <input type="text" name="lga" class="form-control select2" style="width: 100%;" id="lga" readonly>

                  <!-- <select name="lga" class="form-control select2" style="width: 100%;" id="lga">
                    <option selected="selected">Select LGA</option>
                    <option>Kakuri</option>
                  </select> -->
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Community Based Organization</label>
                  <input type="text" name="cbo_name" class="form-control select2" style="width: 100%;" readonly>
                  <!-- <select name="cbo_name" class="form-control select2" style="width: 100%;">
                    <option selected="selected">Select CBO</option>
                    <option>CBO 1</option>
                  </select> -->
                </div>
              </div>


              <div class="col-md-6">
                <div class="form-group">
                  <label>Date of Meeting</label>
                  <input type="date" name="meeting_date" class="form-control" placeholder="">

                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputFile">Attach Signed Copy</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="attachment" id="exampleInputFile">
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
            <textarea name="minutes" class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>



            <button type="submit" class="btn btn-primary">Submit Report</button>
            <!-- /.row -->

          </div>
          <!-- /.card-body -->
        </form>
          <div class="card-footer">

          </div>
      </div>
      @endcan
        <!-- /.card -->
  
        <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">CBO Monthly Reports</h3>

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
                  <th>CBO Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @if (count($cbos)>0)
                    @foreach ($cbos as $cbo)
                    <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $cbo->date_of_meeting }}</td>
                    <td><a href="#"><i class="fa fa-file-download"></i></a></td>
                    <td>{{$cbo->cbo_name}}</td>
                    <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></td>
                    </tr>
              @endforeach
              @endif
              <tfoot>
                  <tr>
                      <th>id</th>
                      <th>Meeting Date</th>
                      <th>Attached Report</th>
                      <th>CBO Name</th>

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
