@extends('layouts.app')

@section('content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Client Exit Questioneers</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Client Exit</li>
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
            <h3 class="card-title">Respondant Questioneers</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                  <p>Can I Proceed With the Interview?</p>
                <div class="form-group clearfix">
                    <div class="icheck-primary d-inline">
                      <input type="radio" id="radioPrimary2" name="r1">
                      <label for="radioPrimary2">
                          YES
                      </label>

                    </div>

                  </div>
                  <div class="form-group clearfix">
                    <div class="icheck-danger d-inline">
                      <input type="radio" id="radiodanger3" name="r2">
                      <label for="radiodanger3">
                          NO
                      </label>
                    </div>

                  </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Name of Respondant</label>
                  <input type="text" name="text" class="form-control" placeholder="">

                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Child's Name (Where Applicable)</label>
                  <input type="text" name="text" class="form-control" placeholder="">

                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Respondant Category</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Select Category</option>
                    <option>Male 18-25</option>
                    <option>Male 26-45</option>
                    <option>Male 45 and Above</option>
                    <option>Female not Pregnant</option>
                    <option>Female Pregnant</option>
                    <option>Female with under 5 child/children</option>
                    <option>Female with 6-17 years child/children</option>
                    <option>Female 18-25</option>
                    <option>Female 26-45</option>
                    <option>Female 45 and Above</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label>Address(Detailed Address):</label>
                  <input type="text" name="text" class="form-control" placeholder="" >

                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label>Telephone Number</label>
                  <input type="text" name="text" class="form-control" placeholder="" >

                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Name of Health Facility where interview is conducted</label>
                  <input type="text" name="text" class="form-control" placeholder="" >

                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Occupation</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Select Category</option>
                    <option>Government/Civil Servant</option>
                    <option>Professional Worker</option>
                    <option>Self-Employed Trader</option>
                    <option>Business Man/Woman</option>
                    <option>Farmer/Agric Worker</option>
                    <option>Artisan</option>
                    <option>Religious Leader/Missionary</option>
                    <option>Youth Corp Member</option>
                    <option>Student</option>
                    <option>Other (Specify...)</option>
                  </select><br>
                  <Label>Other</Label>
                  <input type="text" name="" class="form-control" placeholder="kindly specify">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Educational Background</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Select Category</option>
                    <option>No Formal Education</option>
                    <option>Primary Education (Uncompleted)</option>
                    <option>Primary Education (Completed)</option>
                    <option>Primary Education (Uncompleted)</option>
                    <option>Primary Education (Completed)</option>
                    <option>Vocational School</option>
                    <option>University/Polytechnic Uncompleted</option>
                    <option>University/Polytechnic Completed</option>
                    <option>Post Graduate Degree</option>
                    <option>Other (Specify...)</option>
                  </select><br>
                  <Label>Other</Label>
                  <input type="text" name="" class="form-control" placeholder="kindly specify">
                </div>
              </div>
             <hr>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p style="text-align: center; font-size: large;">Question Section 1</p>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Which One you came for?</label>
                        <select multiple="" class="form-control">
                            <option>Maternal and Newborn Care</option>
                            <option>Antenatal Care</option>
                            <option>Malaria Services</option>
                            <option>Don't Know</option>
                            <option>Other (Specify)</option>
                        </select><br>
                        <Label>Other</Label>
                        <input type="text" name="" class="form-control" placeholder="Kindly Specify">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Which One you received?</label>
                        <select multiple="" class="form-control">
                            <option>Maternal and Newborn Care</option>
                            <option>Antenatal Care</option>
                            <option>Malaria Services</option>
                            <option>Don't Know</option>
                            <option>Other (Specify)</option>
                        </select><br>
                        <Label>Other</Label>
                        <input type="text" name="" class="form-control" placeholder="Kindly Specify">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Frequency of Visit within 3 Months?</label>
                        <select multiple="" class="form-control">
                            <option>Have not been to the facility in the last 3 Months</option>
                            <option>0-2 Times</option>
                            <option>0-5 Times</option>
                            <option>3-5 Times</option>
                            <option>6-10 Times</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <p style="text-align: center; font-size: large;">Question Section 2</p>
                </div>
                <div class="col-md-4">
                    <p>Did You Receive LLIN?</p>
                  <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary4" name="r1">
                        <label for="radioPrimary4">
                            YES
                        </label>

                      </div>

                    </div>
                    <div class="form-group clearfix">
                      <div class="icheck-danger d-inline">
                        <input type="radio" id="radiodanger5" name="r2">
                        <label for="radiodanger5">
                            NO
                        </label>
                      </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Where did you Receive the LLIN?</label>
                        <select multiple="" class="form-control">
                            <option>Facility (During 1st ANC Attendance)</option>
                            <option>Facility (During 9 Months Immunization)</option>
                            <option>Mass Campaign (Community)</option>
                            <option>Others</option><br>
                            <Label>Other</Label>
                            <input type="text" name="" class="form-control" placeholder="Kindly Specify">
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>(If Response is YES) Frequency</label>
                        <select multiple="" class="form-control">
                            <option>Once</option>
                            <option>Twice</option>
                            <option>Three Times</option>
                            <option>More than three times</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <p>Did You Receive IPT (3 White Tablets)?</p>
                  <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary4" name="r1">
                        <label for="radioPrimary4">
                            YES
                        </label>

                      </div>

                    </div>
                    <div class="form-group clearfix">
                      <div class="icheck-danger d-inline">
                        <input type="radio" id="radiodanger5" name="r2">
                        <label for="radiodanger5">
                            NO
                        </label>
                      </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Frequency of IPT Administration</label>
                        <select multiple="" class="form-control">
                            <option>After 13 Weeks (Quickening)</option>
                            <option>Once Every</option>
                            <option>Once Every 2 Months</option>
                            <option>Once Every 3 Months</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <p>Did You Swallow the (SP-Sulfadoxin-Pyrimethamine 3 White tabs)?</p>
                  <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary4" name="r1">
                        <label for="radioPrimary4">
                            YES
                        </label>

                      </div>

                    </div>
                    <div class="form-group clearfix">
                      <div class="icheck-danger d-inline">
                        <input type="radio" id="radiodanger5" name="r2">
                        <label for="radiodanger5">
                            NO
                        </label>
                      </div>

                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label>Services (Show Question if Prv Q is NO)  </label>
                        <select multiple="" class="form-control">
                            <option>The Health worker did not ask me to swallow the drug in his/her presence</option>
                            <option>I was asked to swallow the drug in the presence of the health worker but I declined</option>
                            <option>Others</option><br>
                            <input type="text" name="" class="form-control" placeholder="Kindly Specify">
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <label>Was your Child given Seasonal Malaria Chemoprevention (SMC)?</label>
                  <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary4" name="r1">
                        <label for="radioPrimary4">
                            YES
                        </label>
                      </div>

                    </div>
                    <div class="form-group clearfix">
                      <div class="icheck-danger d-inline">
                        <input type="radio" id="radiodanger5" name="r2">
                        <label for="radiodanger5">
                            NO
                        </label>
                      </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>If Yes to Prv Qs: How old was the child when given?</label>
                        <select multiple="" class="form-control">
                            <option>3-12 Months</option>
                            <option>13-24 Months</option>
                            <option>25-36 months</option>
                            <option>37-48 months</option>
                            <option>49-59 months</option>
                            <option>60 and Above</option>

                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <label>Were You Tested for Malaria?</label>
                  <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary4" name="r1">
                        <label for="radioPrimary4">
                            YES
                        </label>
                      </div>

                    </div>
                    <div class="form-group clearfix">
                      <div class="icheck-danger d-inline">
                        <input type="radio" id="radiodanger5" name="r2">
                        <label for="radiodanger5">
                            NO
                        </label>
                      </div>
                    </div>
                    <div class="form-group clearfix">
                        <div class="icheck-danger d-inline">
                          <input type="radio" id="radiodanger5" name="r2">
                          <label for="radiodanger5">
                              NOT SURE
                          </label>
                        </div>
                      </div>
                      <input type="text" name="" class="form-control" placeholder="Why (If No to Above)">
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>If Yes to Prv Qs:When were you tested for Malaria?</label>
                        <select multiple="" class="form-control">
                            <option>First Antenatal Visit</option>
                            <option>When I was Sick</option>
                            <option>Don't Know</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label>Were You given Arthemisinin-based-Combination Therapy</label>
                        <select multiple="" class="form-control">
                            <option>First Antenatal Visit</option>
                            <option>When I was Sick</option>
                            <option>Don't Know</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <label>Were You given Arthemisinin-based-Combination  Therapy</label>
                    <div class="form-group clearfix">
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="radioPrimary4" name="r1">
                          <label for="radioPrimary4">
                              YES
                          </label>
                        </div>

                      </div>
                      <div class="form-group clearfix">
                        <div class="icheck-danger d-inline">
                          <input type="radio" id="radiodanger5" name="r2">
                          <label for="radiodanger5">
                              NO
                          </label>
                          <input type="text" name="" class="form-control" placeholder="If No, Specify Drug Received">
                        </div>
                    </div>

                </div>

                <div class="col-md-4">
                    <label>IF Yes to Prv Q, Did You Finish the Drug?</label>
                    <div class="form-group clearfix">
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="radioPrimary4" name="r1">
                          <label for="radioPrimary4">
                              YES
                          </label>
                          <br>
                          <input type="text" name="" class="form-control" placeholder="Kindly State Type of tablet, timing accuracy and adherance, 24 or 6 tablets 3 days">
                        </div>

                      </div>
                      <div class="form-group clearfix">
                        <div class="icheck-danger d-inline">
                          <input type="radio" id="radiodanger5" name="r2">
                          <label for="radiodanger5">
                              NO
                          </label>
                          <input type="text" name="" class="form-control" placeholder="If No, Why?">
                        </div>
                    </div>


                </div>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <p style="text-align: center; font-size: large;">Question Section 4</p>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label>How satisfied are you with the service(s) you received today?</label>
                        <select multiple="" class="form-control">
                            <option>Very dissatisfied</option>
                            <option>Somewhat dissatisfied</option>
                            <option>Neither dissatisfied nor satisfied</option>
                            <option>Very Satisfied</option>
                            <option>Don't Know</option>
                        </select><br>

                    </div>
                </div>

                <div class="col-md-4">
                    <p></p>
                    <div class="form-group">
                        <label>What is responsible for your choice above?</label>
                        <select multiple="" class="form-control">
                            <option>Poor Facility Worker Attitude</option>
                            <option>Long Waiting Time</option>
                            <option>Lack of Drugs</option>
                            <option>Shortage of Manpower/Personnel</option>
                            <option>Others</option>
                        </select>
                        <input type="text" name="" class="form-control" placeholder="Kindly Specify">
                    </div>
                </div>

                <div class="col-md-6">
                    <p></p>
                    <div class="form-group">
                        <label>If Satisfied, What might have helped you to be more satisfied with the service tou received today?</label>
                        <textarea name="" id="" cols="30" rows="2" class="form-control"></textarea>
                    </div>
                </div>

                <div class="col-md-6">
                    <p></p>
                    <div class="form-group">
                        <label>If you could make at least one suggestion for improving services at this health facility, what would?</label>
                        <textarea name="" id="" cols="30" rows="2" class="form-control"></textarea>
                    </div>
                </div>

            </div>


            <button class="btn btn-primary">Submit Client Exit</button>
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
            <h3 class="card-title">Client Exit Reports</h3>

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
                <th>Health Facility</th>
                <th>Service Rating</th>
                <th>Name of Respndant</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>001</td>
                <td>10/04/2021</td>
                <td>Apo PHC</td>
                <td><span class="badge bg-warning">Very dissatisfied</span></td>
                <td>James Onuh</td>
              </tr>
              </tbody>
            <tfoot>
                <tr>
                <th>id</th>
                <th>Date</th>
                <th>Health Facility</th>
                <th>Service Rating</th>
                <th>Name of Respndant</th>
                  </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->

        </div>


          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Admin & SPO View:</h3>

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
                <th>Health Facility</th>
                <th>Service Rating</th>
                <th>Name of CBO</th>
                  </tr>
                </thead>
                <tbody>
                <tr>
                <td>001</td>
                <td>10/04/2021</td>
                <td>Apo PHC</td>
                <td><span class="badge bg-warning">Very dissatisfied</span></td>
                <td>CBO1</td>
                  </tr>

              <tfoot>
                <tr>
                    <th>id</th>
                    <th>Date</th>
                    <th>Health Facility</th>
                    <th>Service Rating</th>
                    <th>Name of CBO</th>
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
