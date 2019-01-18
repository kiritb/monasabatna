@include('shared/header')

<!------- body start-------->

<div class="container-fluid">
    <div class="row bg-custsignup">
        <div class="main_custsignup">
            <div class="col-md-4 col-sm-4 col-xs-4 form_custsignup">
                <form class="form-horizontal" method="post" id="sign_up_form">
                    @csrf
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label class="control-label formcust-head"><b>User Registration</b></label>
                        </div>
                    </div>

                    <div class="form-group custom-signup">
                        <div class="col-sm-12">
                            <label class="control-label" for="personname">First Name</label>

                            <input type="text" class="form-control csignin" placeholder="" name="first_name">
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-sm-12">

                            <label class="control-label" for="personname">Father Name</label>

                            <input type="text" class="form-control csignin" placeholder="" name="fathers_name">

                        </div>

                    </div>

                    <div class="form-group">

                        <div class="col-sm-12">

                            <label class="control-label" for="personname">Family Name</label>

                            <input type="text" class="form-control csignin" placeholder="" name="family_name">

                        </div>

                    </div>

                    <div class="form-group">

                        <div class="col-sm-12">

                            <label class="control-label" for="personname">Email ID</label>

                            <input type="text" class="form-control csignin" placeholder="" name="email">

                        </div>

                    </div>

                    <div class="form-group">

                        <div class="col-sm-12">
                            <label class="control-label formcust-signup" for="personname">Phone Number</label>
                            <div class="d-flex phone-inputs">
                                <input type="text" class="form-control csignin" id="countryCode_custsignup" placeholder="254"
                                    name="countryCode">
                                <input type="text" class="form-control csignin" id="phone_custsignup" placeholder="Enter Phone"
                                    name="phone">
                            </div>
                            <div id="countryCode-error" class="error-class"></div>
                            <div id="phone-error" class="error-class"></div>
                        </div>

                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label class="control-label" for="personname">Password</label>
                            <input type="text" class="form-control csignin" id="password" placeholder="" name="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label class="control-label" for="personname">Re-type
                                Password</label>
                            <input type="text" class="form-control csignin" placeholder="" name="password_confirmation">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label id="checkterms">
                                <span class="small-custup">
                                    <input type="checkbox" name="terms_and_conditions">
                                    <span class="checkterms">I Agree to Monasabatna <a href="#">Term & Conditions</a>
                                        and <a href="#">Privacy Policies</a></span>
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 signup-custom">
                            <input type="submit" id="myOTP" class="btn btn-primary btn-lg btn-block signuplink" value="Register">
                            <label class="control-label signin-link">
                                <span class="small-custupreg">Already have an account?
                                    <a href="{{ url('/') }}/customer_signin"> Sign In</a>
                                </span>
                            </label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-8 img_custsignup">
                <img src="svg/images/custsignup-img.jpg" class="img-responsive">
            </div>
            <!------------------------------ Booking code----------------------------------->
            <div class="modal fade" id="myBookingOTP" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form class="form-horizontal text-center" method="post" id="otp_verify_form">
                            <!-- Modal Header -->
                            <div class="modal-header text-center">
                                <h3 class="modal-title">OTP</h3>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                                <h6 style="text-align:center">Please enter OTP sent to your phone number.</h6>

                                <div class="panel panel-default panel-body custom-code">
                                    <div class="otpholder"></div>
                                    <div id="divOuter">
                                        <div id="divInner">
                                            <input name="otp" id="partitioned" type="text" maxlength="4" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <input type="submit" id="payment_booking" class="btn btn-lg-12 custom-button" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------- row -------------->
</div>

@include('shared/footer')
<!------- body end-------->
<script type="text/javascript" src="js/signup.js" charset="utf-8"></script>
