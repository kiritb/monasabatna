@include('header')

<!------- body start-------->

<div class="container-fluid">
    <div class="row bg-custsignup">
        <div class="main_custsignup">
            <div class="col-md-4 col-sm-4 col-xs-4 form_custsignup">
                <form class="form-horizontal" method="post" id="sign_up_form" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label class="control-label formcust-head"><b>User Registration</b></label>
                        </div>
                    </div>

                    <div class="form-group custom-signup">
                        <div class="col-sm-12">
                            <label class="control-label" for="personname">First Name</label>

                            <input type="text" class="form-control csignin" placeholder="" name="fname">
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-sm-12">

                            <label class="control-label" for="personname">Father Name</label>

                            <input type="text" class="form-control csignin" placeholder="" name="fathername">

                        </div>

                    </div>

                    <div class="form-group">

                        <div class="col-sm-12">

                            <label class="control-label" for="personname">Family Name</label>

                            <input type="text" class="form-control csignin" placeholder="" name="familyname">

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
                                <input type="text" class="form-control csignin" id="phone_number_country_code_custsignup"
                                    placeholder="254" name="phone_number_country_code">
                                <input type="text" class="form-control csignin" id="phone_number_custsignup"
                                    placeholder="Enter Phone" name="phone_number">
                            </div>
                            <div id="phone_number_country_code-error" class="error-class"></div>
                            <div id="phone_number-error" class="error-class"></div>
                        </div>

                    </div>
                    <div class="form-group">

                        <div class="col-sm-12">

                            <label class="control-label" for="personname">Password</label>

                            <input type="text" class="form-control csignin" placeholder="" name="pwd">

                        </div>

                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label class="control-label" for="personname">Re-type
                                Password</label>
                            <input type="text" class="form-control csignin" placeholder="" name="cpwd">
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
                            <a id="myOTP" class="btn btn-primary btn-lg btn-block signuplink" href="#"> Register</a>
                            <label class="control-label signin-link" for="personname">
                                <span class="small-custupreg">Already have an account?
                                    <a href="http://18.218.133.17/customer_signin"> Sign In</a>
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
            <div class="modal fade" id="myBookingOTP">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <center>
                                <h3 class="modal-title">OTP</h3>
                                <center>
                                    <button type="button" class="close cross" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">

                            <h6 style="text-align:center"> Please enter OTP sent to your phone number
                                . </h6>
                            <center>
                                <div class="panel panel-default panel-body custom-code">
                                    <div id="divOuter">
                                        <div id="divInner">
                                            <input id="partitioned" type="text" maxlength="4" />
                                        </div>
                                    </div>
                                </div>
                                <center>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <center><button type="button" class="btn btn-lg-12 custom-button" data-dismiss="modal" id="payment_booking">submit</button>
                                <center>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------- row -------------->
</div>

@include('footer')
<!------- body end-------->
<script type="text/javascript">
    function next(el) {
        el.setFocus();
    }

    <!------pop up------->
    $(document).ready(function () {
        $("#myCancel").click(function () {
            $("#myCancelbooking").modal();
        });
        $("#myOTP").click(function () {
            $("#myBookingOTP").modal();
        });
        $("#myBookingcode #payment_booking").click(function () {
            $("#myPaymentdetails").modal();
        });
        $("#myBtn").click(function () {
            $("#myFilter").modal();

        });
        $(".nav-tabs a").click(function () {
            $(this).tab('show');
        });
    });

</script>
