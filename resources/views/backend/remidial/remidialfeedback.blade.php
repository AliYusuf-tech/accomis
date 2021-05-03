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
                {{-- Flash message end --}}
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
                @can('cbo_role')
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Remedial Feedback</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                    class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <form role="form" action="{{ route('add_remidial') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>State</label>
                                        <select name="state" class="form-control select2 dynamic" style="width: 100%;"
                                            id="state" data-dependent="lga" required>
                                            <option selected="selected">Select State</option>
                                            @foreach ($states as $state)
                                                <option value="{{ $state->name }}">{{ $state->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>LGA</label>
                                        <select name="lga" class="form-control select2" style="width: 100%;" id="lga">
                                            <option selected="selected" style="display: none">Select Lga</option>
                                            {{-- @foreach ($states as $state)
                            <option value="{{ $state->name }}" i>{{ $state->name }}</option>
                        @endforeach --}}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Ward</label>
                                        <input type="text" name="ward" class="form-control" placeholder="">

                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Date Visit</label>
                                        <input type="date" name="date_visit" class="form-control" placeholder="" required>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Tracker Type</label>
                                    <div class="form-group clearfix">
                                        <div class="icheck-primary d-inline">
                                            <input type="radio" id="radioPrimary2" name="tracker_type"
                                                value="Focus Group Discussion" required>
                                            <label for="radioPrimary2">
                                                Focus Group Discussion
                                            </label>

                                        </div>

                                    </div>
                                    <div class="form-group clearfix">
                                        <div class="icheck-danger d-inline">
                                            <input type="radio" id="radiodanger3" name="tracker_type" value="Client Exit"
                                                required>
                                            <label for="radiodanger3">
                                                Client Exit
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Key Findings/Identified Issues</label>
                                        <select name="key_findings" id="" class="form-control">
                                            <option value="LLIN Not Available">LLIN Not Available</option>
                                            <option value="No Medical Personnel">No Medical Personnel</option>
                                            <option value="No Road Network">No Road Network</option>
                                            <option value="Poor Logistics">Poor Logistics</option>

                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Root Cause</label>
                                        <input type="text" name="root_cause" class="form-control" placeholder="" required>

                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Action Taken Immediately</label>
                                        <input type="text" name="taken_action" class="form-control" placeholder="" required>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Resolved</label>
                                        <select name="resolved_value" id="" class="form-control" required>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Follow Up Action</label>
                                        <input type="text" name="follow_action" class="form-control" placeholder=""
                                            required>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Responsibility</label>
                                        <input type="text" name="responsibility" class="form-control" placeholder=""
                                            required>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Timeline</label>
                                        <input type="date" name="timeline" class="form-control" placeholder="" required>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Attach Signed Copy</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile"
                                                    name="signed_doc" required>
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
                    </form>
                    <div class="card-footer">
                        <!-- Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
                        the plugin. -->
                    </div>
                </div>
                <!-- /.card -->
                @endcan
                @can('admin_role')
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">CBO Feedback View</h3>

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
                                    <th>Date</th>
                                    <th>Attachment</th>
                                    <th>Feedback Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($rems) > 0)

                                    @foreach ($rems as $rem)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $rem->date_visit }}</td>
                                            <td><a href="#"><i class="fa fa-file-download"></i></a></td>
                                            <td><span class="badge bg-warning">Pending</span></td>
                                            <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i
                                                        class="fa fa-eye"></i></a></td>
                                        </tr>
                                    @endforeach
                                @endif
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
                                        <th>Date</th>
                                        <th>Attachment</th>
                                        <th>CBO</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($rems) > 0)

                                        @foreach ($rems as $rem)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $rem->date_visit }}</td>
                                                <td><a href="#"><i class="fa fa-file-download"></i></a></td>
                                                <td><span class="badge bg-warning">Pending</span></td>
                                                <td>{{ $rem->cbo }}</td>
                                                <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i
                                                            class="fa fa-eye"></i></a></td>
                                            </tr>
                                        @endforeach
                                    @endif

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
                @endcan
        </section>
        <!-- /.content -->
    </div>
@endsection
@section('js');
    <script>
        $(document).ready(function() {

        });

    </script>
@endsection
