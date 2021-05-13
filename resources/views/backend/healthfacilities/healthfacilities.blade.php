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
                {{-- Flash message --}}
                <div id="alert">
                    @include('partials.flash')
                </div>
                {{-- Flash message end --}}
                <!-- SELECT2 EXAMPLE -->
                <form method="POST" action="/healthfacility/excel" id="form1">
                    @csrf
                    <input type="button" class="input btn btn-primary" onclick="$('#form1').submit();" value="parse excel">
                </form>
                <br>
                <br>
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Add Health Facility</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                    class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <form action="/healthfacilities" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>State</label>
                                        <select class="form-control select2 dynamic" name="state" style="width: 100%;" id="state_id">
                                            <option style="display: none" value="">Select State</option>
                                            @foreach ($states as $state)
                                            <option id="{{ $state->id }}" value="{{ $state->name }}">
                                                {{ $state->name }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>L.G.A</label>
                                        <select class="form-control select2 dynamic2" name="lga" style="width: 100%;" id="lga">
                                            <option style="display: none" selected="selected">Select LGA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Ward</label>
                                        <select class="form-control select2" name="ward" style="width: 100%;" id="ward">
                                            <option style="display: none" selected="selected">Select Ward</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Facility:</label>
                                        <input class="form-control" name="facility" placeholder="">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>CBO</label>
                                        <select class="form-control select2 dynamic4" name="cbo_name" style="width: 100%;" id="cbo1">
                                            <option style="display: none" value="">select CBO</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>CBO Email</label>
                                        <input type="email" name="cbo_email" class="form-control" id="cbo_email" placeholder="" readonly>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>SPO</label>
                                        <input type="text" name="spo_name" class="form-control" id="spo_name" placeholder="" readonly>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>SPO Email</label>
                                        <input type="email" name="spo_email" class="form-control" id="spo_email" placeholder="" readonly>

                                    </div>
                                </div>

                            </div>


                            <button class="btn btn-primary">Add Health Facility</button>
                            <!-- /.row -->
                        </form>

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
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                    class="fas fa-times"></i></button>
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
                                @if (count($health_facilities) > 0)

                                @foreach ($health_facilities as $health_facility)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $health_facility->Facility }}</td>
                                        <td>{{ $health_facility->LGA }}</td>
                                        <td>{{ $health_facility->CBO }}</td>
                                        <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i
                                                    class="fa fa-eye"></i></a></td>
                                    </tr>
                                @endforeach
                            @endif
                                <tr>
                                    <td>002</td>
                                    <td>CBO 2
                                    </td>
                                    <td>nphc a</td>
                                    <td>Jigawa State</td>
                                    <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i
                                                class="fa fa-eye"></i></a></td>
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
@section('js')
    <script src="dist/js/healthfacility.js"></script>
    <script>
        $(document).ready(function() {
            $('#example1').DataTable();
        });
    </script>
@endsection
