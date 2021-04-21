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
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                    class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Name of Respondant</label>
                                    <input type="text" name="res_name" class="form-control" placeholder="">

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Child's Name (Where Applicable)</label>
                                    <input type="text" name="child_name" class="form-control" placeholder="">

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Respondant Category</label>
                                    <select class="form-control select2" style="width: 100%;" name="res_category">
                                        <option selected="selected" style="display: none">Select Category</option>
                                        <option value="Male 18-25">Male 18-25</option>
                                        <option value="Male 26-45">Male 26-45</option>
                                        <option value="Male 45 and Above">Male 45 and Above</option>
                                        <option value="Female not Pregnant">Female not Pregnant</option>
                                        <option value="Female Pregnant">Female Pregnant</option>
                                        <option value="Female with under 5 child/children">Female with under 5
                                            child/children</option>
                                        <option value="Female with 6-17 years child/children">Female with 6-17 years
                                            child/children</option>
                                        <option value="Female 18-25">Female 18-25</option>
                                        <option value="Female 26-45">Female 26-45</option>
                                        <option value="Female 45 and Above">Female 45 and Above</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Address(Detailed Address):</label>
                                    <input type="text" name="address" class="form-control" placeholder="">

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Telephone Number</label>
                                    <input type="text" name="phone_no" class="form-control" placeholder="">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name of Health Facility where interview is conducted</label>
                                    <input type="text" name="in_health_facility_name" class="form-control" placeholder="">

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group" id="occupation">
                                    <label>Occupation</label>
                                    <select class="form-control select2" style="width: 100%;" name="occupation">
                                        <option selected="selected" style="display: none">Select Category</option>
                                        <option value="Government/Civil Servant">Government/Civil Servant</option>
                                        <option value="Professional Worker">Professional Worker</option>
                                        <option value="Self-Employed Trader">Self-Employed Trader</option>
                                        <option value="Business Man/Woman">Business Man/Woman</option>
                                        <option value="Farmer/Agric Worker">Farmer/Agric Worker</option>
                                        <option value="Artisan">Artisan</option>
                                        <option value="Religious Leader/Missionary">Religious Leader/Missionary</option>
                                        <option value="Youth Corp Member">Youth Corp Member</option>
                                        <option value="Student">Student</option>
                                        <option value="" class="other_occupation1">Other (Specify...)</option>
                                    </select><br>
                                    <div class="other_occupation2">
                                        <Label>Other</Label>
                                        <input type="text" name="occupation2" class="form-control field1"
                                            placeholder="kindly specify">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group" id="education">
                                    <label>Educational Background</label>
                                    <select class="form-control select2" style="width: 100%;" name="educational_bg">
                                        <option selected="selected" style="display: none">Select Category</option>
                                        <option value="No Formal Education">No Formal Education</option>
                                        <option value="Primary Education (Uncompleted)">Primary Education (Uncompleted)
                                        </option>
                                        <option value="Primary Education (Completed)">Primary Education (Completed)</option>
                                        <option value="Vocational School">Vocational School</option>
                                        <option value="University/Polytechnic Uncompleted">University/Polytechnic
                                            Uncompleted</option>
                                        <option value="University/Polytechnic Completed">University/Polytechnic Completed
                                        </option>
                                        <option value="Post Graduate Degree">Post Graduate Degree</option>
                                        <option value="">Other (Specify...)</option>
                                    </select><br>
                                    <div class="other_education2">
                                        <Label>Other</Label>
                                        <input type="text" name="educational_bg2" class="form-control field2"
                                            placeholder="kindly specify">
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p style="text-align: center; font-size: large;">Question Section 1</p>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group" id="what_did_you_come_for">
                                    <label>Which One you came for?</label>
                                    <select multiple="" class="form-control" name="what_did_you_come_for" required>
                                        <option value="Maternal and Newborn Care">Maternal and Newborn Care</option>
                                        <option value="Antenatal Care">Antenatal Care</option>
                                        <option value="Malaria Services">Malaria Services</option>
                                        <option value="Don't Know">Don't Know</option>
                                        <option value="" class="other_reasons1">Other (Specify)</option>
                                    </select><br>
                                    <div class="other_reasons2">
                                        <Label>Other</Label>
                                        <input type="text" name="what_did_you_come_for2" class="form-control field3"
                                            placeholder="Kindly Specify">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group" id="what_treatment_did_you_recieve">
                                    <label>Which One you received?</label>
                                    <select multiple="" class="form-control" name="what_treatment_did_you_recieve">
                                        <option value="Maternal and Newborn Care">Maternal and Newborn Care</option>
                                        <option value="Antenatal Care">Antenatal Care</option>
                                        <option value="Malaria Services">Malaria Services</option>
                                        <option value="Don't Know">Don't Know</option>
                                        <option value="" class="other_treatment1">Other (Specify)</option>
                                    </select><br>
                                    <div class="other_treatment2">
                                        <Label>Other</Label>
                                        <input type="text" name="what_treatment_did_you_recieve2" class="form-control field4"
                                            placeholder="Kindly Specify">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Frequency of Visit within 3 Months?</label>
                                    <select multiple="" class="form-control">
                                        <option value="Have not been to the facility in the last 3 Months">Have not been to
                                            the facility in the last 3 Months</option>
                                        <option value="0-2 Times">0-2 Times</option>
                                        <option value="0-5 Times">0-5 Times</option>
                                        <option value="3-5 Times">3-5 Times</option>
                                        <option value="6-10 Times">6-10 Times</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <p style="text-align: center; font-size: large;">Question Section 2</p>
                            </div>
                            <div class="col-md-4" id="llin_recieve">
                                <p>Did You Receive LLIN?</p>
                                <div class="form-group clearfix" id="recieve_llin">
                                    <div class="icheck-primary d-inline">
                                        <input type="radio" id="radioPrimary4" class="llin_recieve_yes" name="recieve_llin"
                                            value="yes">
                                        <label for="radioPrimary4">
                                            YES
                                        </label>

                                    </div>

                                </div>
                                <div class="form-group clearfix">
                                    <div class="icheck-danger d-inline">
                                        <input type="radio" id="radiodanger5" class="llin_recieve_no" id="llin_recieve_no"
                                            name="recieve_llin" value="no">
                                        <label for="radiodanger5">
                                            NO
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 llin_true">
                                <div class="form-group">
                                    <label>Where did you Receive the LLIN?</label>
                                    <select multiple="" class="form-control" name="llin_recieve_location">
                                        <option value="Facility (During 1st ANC Attendance)">Facility (During 1st ANC
                                            Attendance)</option>
                                        <option value="Facility (During 9 Months Immunization)">Facility (During 9 Months
                                            Immunization)</option>
                                        <option value="Mass Campaign (Community)">Mass Campaign (Community)</option>
                                        <option value="" class="llin_others1">Others</option><br>

                                        <p class="llin_others2">
                                            <Label>Other</Label>
                                            <input type="text" name="llin_recieve_location2"
                                                class="form-control field5" placeholder="Kindly Specify">
                                        </p>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 llin_true">
                                <div class="form-group">
                                    <label>(If Response is YES) Frequency</label>
                                    <select multiple="" class="form-control" name="llin_frequency">
                                        <option value="Once">Once</option>
                                        <option value="Twice">Twice</option>
                                        <option value="Three Times">Three Times</option>
                                        <option value="More than three times">More than three times</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <p>Did You Receive IPT (3 White Tablets)?</p>
                                <div class="form-group clearfix">
                                    <div class="icheck-primary d-inline">
                                        <input type="radio" id="ipt1" class="ipt_recieve_yes" name="recieve_ipt"
                                            value="yes">
                                        <label for="ipt1">
                                            YES
                                        </label>

                                    </div>

                                </div>
                                <div class="form-group clearfix">
                                    <div class="icheck-danger d-inline">
                                        <input type="radio" id="ipt2" class="ipt_recieve_no" name="recieve_ipt" value="no">
                                        <label for="ipt2">
                                            NO
                                        </label>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-4 ipt_true">
                                <div class="form-group">
                                    <label>Frequency of IPT Administration</label>
                                    <select multiple="" class="form-control">
                                        <option value="After 13 Weeks (Quickening)">After 13 Weeks (Quickening)</option>
                                        <option value="Once Every Month">Once Every</option>
                                        <option value="Once Every 2 Months">Once Every 2 Months</option>
                                        <option value="Once Every 3 Months">Once Every 3 Months</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4 ">
                                <p>Did You Swallow the (SP-Sulfadoxin-Pyrimethamine 3 White tabs)?</p>
                                <div class="form-group clearfix">
                                    <div class="icheck-primary d-inline">
                                        <input type="radio" id="swallow1" class="sp_swallow_yes"
                                            name="swallow_sp_sulfadoxin" value="yes">
                                        <label for="swallow1">
                                            YES
                                        </label>

                                    </div>

                                </div>
                                <div class="form-group clearfix">
                                    <div class="icheck-danger d-inline">
                                        <input type="radio" id="swallow2" class="sp_swallow_no"
                                            name="swallow_sp_sulfadoxin" value="no">
                                        <label for="swallow2">
                                            NO
                                        </label>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-8 swallow_false">
                                <div class="form-group">
                                    <label>Reasons (Show Question if Prv Q is NO) </label>
                                    <select multiple="" class="form-control" name="services">
                                        <option
                                            value="The Health worker did not ask me to swallow the drug in his/her presence">
                                            The Health worker did not ask me to swallow the drug in his/her presence
                                        </option>
                                        <option
                                            value="I was asked to swallow the drug in the presence of the health worker but I declined">
                                            I was asked to swallow the drug in the presence of the health worker but I
                                            declined</option>
                                        <option value="" class="other_services1">Others</option><br>
                                    </select>

                                    <p class="other_services">
                                        <input type="text" name="services2" class="form-control field6"
                                            placeholder="Kindly Specify">
                                    </p>

                                </div>
                            </div>

                            <div class="col-md-4">
                                <label>Was your Child given Seasonal Malaria Chemoprevention (SMC)?</label>
                                <div class="form-group clearfix">
                                    <div class="icheck-primary d-inline">
                                        <input type="radio" id="smc1" class="smc1" value="yes" name="smc">
                                        <label for="smc1">
                                            YES
                                        </label>
                                    </div>

                                </div>
                                <div class="form-group clearfix">
                                    <div class="icheck-danger d-inline">
                                        <input type="radio" id="smc2" class="smc2" value="no" name="smc">
                                        <label for="smc2">
                                            NO
                                        </label>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-4 malaria_true">
                                <div class="form-group">
                                    <label>If Yes to Prv Qs: How old was the child when given?</label>
                                    <select multiple="" class="form-control">
                                        <option value="3-12 Months">3-12 Months</option>
                                        <option value="13-24 Months">13-24 Months</option>
                                        <option value="25-36 months">25-36 months</option>
                                        <option value="37-48 months">37-48 months</option>
                                        <option value="49-59 months">49-59 months</option>
                                        <option value="60 and Above">60 and Above</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>Were You Tested for Malaria?</label>
                                <div class="form-group clearfix">
                                    <div class="icheck-primary d-inline">
                                        <input type="radio" id="malaria_test1" class="malaria_test_yes" value="yes" name="malaria_test">
                                        <label for="malaria_test1">
                                            YES
                                        </label>
                                    </div>

                                </div>
                                <div class="form-group clearfix">
                                    <div class="icheck-danger d-inline">
                                        <input type="radio" id="malaria_test2" class="malaria_test_no" value="no" name="malaria_test">
                                        <label for="malaria_test2">
                                            NO
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <div class="icheck-danger d-inline">
                                        <input type="radio" id="malaria_test3" value="not sure" class="malaria_test_not_sure" name="malaria_test">
                                        <label for="malaria_test3">
                                            NOT SURE
                                        </label>
                                    </div>
                                </div>
                                <p class="malaria_test_no_input">
                                <input type="text" name="malaria_reason" class="form-control field7"
                                    placeholder="Why (If No to Above)">
                                </p>
                            </div>
                            <div class="col-md-4 malaria_false">
                                <div class="form-group">
                                    <label>If Yes to Prv Qs:When were you tested for Malaria?</label>
                                    <select multiple="" class="form-control" name="malaria_test_period">
                                        <option value="First Antenatal Visit">First Antenatal Visit</option>
                                        <option value="When I was Sick">When I was Sick</option>
                                        <option value="Don't Know">Don't Know</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label>Were You given Arthemisinin-based-Combination Therapy</label>
                                <div class="form-group clearfix">
                                    <div class="icheck-primary d-inline">
                                        <input type="radio" id="arthemisinin_based1" class="arthemisinin_yes"
                                            name="arthemisinin_based_therapy" value="yes">
                                        <label for="arthemisinin_based1">
                                            YES
                                        </label>
                                    </div>

                                </div>
                                <div class="form-group clearfix">
                                    <div class="icheck-danger d-inline">
                                        <input type="radio" id="arthemisinin_based2" class="arthemisinin_no"
                                            name="arthemisinin_based_therapy" value="no">
                                        <label for="arthemisinin_based2">
                                            NO
                                        </label>
                                        <p class="arthemisinin_therapy_false">
                                        <input type="text" class="form-control field200" name="arthemisinin_therapy_false" class="form-control"
                                            placeholder="If No, Specify Drug Received">
                                        </p>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-4 arthemisinin_therapy_true">
                                <label>IF Yes to Prv Q, Did You Finish the Drug?</label>
                                <div class="form-group clearfix">
                                    <div class="icheck-primary d-inline">
                                        <input type="radio" id="arthemisinin_therapy3" class="arthemisinin_drug_finish_yes"
                                            name="arthemisinin_drug_finish" value="yes">
                                        <label for="arthemisinin_therapy3">
                                            YES
                                        </label>
                                        <br>
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <div class="icheck-danger d-inline">
                                        <input type="radio" id="arthemisinin_therapy4" class="arthemisinin_drug_finish_no"
                                            name="arthemisinin_drug_finish" value="no">
                                        <label for="arthemisinin_therapy4">
                                            NO
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 arthemisinin_therapy_show">
                                <label>Please Fill The Field Below</label>
                                <div class="form-group clearfix">
                                    <input type="text" name="arthemisinin_drug_finish_yes" class="form-control arthemisinin_therapy_show_yes field8"
                                        placeholder="Kindly State Type of tablet, timing accuracy and adherance, 24 or 6 tablets 3 days">
                                    <br>
                                    <input type="text" name="arthemisinin_drug_finish_no" class="form-control arthemisinin_therapy_show_no field9"
                                        placeholder="If No, Why?">

                                </div>
                            </div>


                            <div class="col-md-12">
                                <p style="text-align: center; font-size: large;">Question Section 4</p>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group satisfaction_level">
                                    <label>How satisfied are you with the service(s) you received today?</label>
                                    <select multiple="" class="form-control" name="satisfaction_level">
                                        <option value="Very dissatisfied">Very dissatisfied</option>
                                        <option value="Somewhat dissatisfied">Somewhat dissatisfied</option>
                                        <option value="Neither dissatisfied nor satisfied">Neither dissatisfied nor
                                            satisfied</option>
                                        <option value="Very Satisfied">Very Satisfied</option>
                                        <option value="Don't Know">Don't Know</option>
                                    </select><br>

                                </div>
                            </div>

                            <div class="col-md-4">
                                <p></p>
                                <div class="form-group choice_cause">
                                    <label>What is responsible for your choice above?</label>
                                    <select multiple="" class="form-control" name="insatisfaction_cause">
                                        <option value="Poor Facility Worker Attitude">Poor Facility Worker Attitude</option>
                                        <option value="Long Waiting Time">Long Waiting Time</option>
                                        <option value="Lack of Drugs">Lack of Drugs</option>
                                        <option value="Shortage of Manpower/Personnel">Shortage of Manpower/Personnel
                                        </option>
                                        <option value="" class="in-satisfaction_cause_others1">Others</option>
                                    </select>
                                    <p class="other_causes">
                                    <input type="text" name="insatisfaction_cause_others2" class="form-control field10"
                                        placeholder="Kindly Specify">
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <p></p>
                                <div class="form-group">
                                    <label>If Satisfied, What might have helped you to be more satisfied with the service
                                        you received today?</label>
                                    <textarea name="customer_help" id="" cols="30" rows="2" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <p></p>
                                <div class="form-group">
                                    <label>If you could make at least one suggestion for improving services at this health
                                        facility, what would?</label>
                                    <textarea name="customer_help_improve" id="" cols="30" rows="2"
                                        class="form-control"></textarea>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <p></p>
                            <div class="form-group">
                                <button class="btn btn-primary">Submit Client Exit</button>
                            </div>
                        </div>

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
@section('js')
    <script src="dist/js/dependentform.js"></script>
@endsection
