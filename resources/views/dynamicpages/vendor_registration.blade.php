@include('shared/header')
<link rel="stylesheet" type="text/css" href="{{ url('css/vendor-panel/superadmin.css') }}">

<!------- body start-------->
<hr class="line_hr" />
<div class="container-fluid" id="vendortabs">

    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="pills-signin-tab" data-toggle="pill" href="#pills-signin" role="tab"
                aria-controls="pills-signin" aria-selected="true">Sign Up</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-signup-tab" data-toggle="pill" href="#pills-signup" role="tab" aria-controls="pills-signup"
                aria-selected="false">Sign In</a>
        </li>

    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-signin" role="tabpanel" aria-labelledby="pills-signin-tab">
            <div class="container-fluid" id="formvendor-signup">

                <form class="form-horizontal" method="post" id="vendor_sign_up_form">

                    <div class="form-group row regfeild">
                        <label for="inputEmail3" class="vendorregco">Company Name : </label>
                        <div class="col-sm-5">
                            <input type="text" name="company_name" class="vendorformreg" placeholder="Enter Company Name">
                        </div>
                    </div>
                    <!------------------form-group row ------------------------->
                    <div class="form-group row regfeild">
                        <label for="inputEmail3" class="vendorregco">Logo : </label>
                        <div class="col-sm-2">

                            <div class="upload-btn-wrapper">
                                <button class="btn uploadbutton">Upload</button>
                                <input type="file" name="logo_upload_file" />
                            </div>

                        </div>
                    </div>
                    <!------------------form-group row ------------------------->
                    <div class="form-group row regfeild">
                        <label for="inputEmail3" class="vendorregco">Phone Number : </label>
                        <div class="col-sm-2">
                            <select class="vendorformsel" disabled>
                                <option selected>+678</option>
                            </select>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" name="primary_phone_no" class="vendorformphone" placeholder="999999999">
                        </div>
                    </div>
                    <!------------------form-group row ------------------------->
                    <div class="form-group row regfeild">
                        <label for="inputEmail3" class="vendorregco">Alternate Contact Number 1 : </label>
                        <div class="col-sm-2">
                            <select class="vendorformsel" disabled>
                                <option selected>+678</option>
                            </select>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" name="secondary_phone_no" class="vendorformphone" placeholder="999999999">
                        </div>
                    </div>
                    <!------------------form-group row ------------------------->
                    <div class="form-group row regfeild">
                        <label for="inputEmail3" class="vendorregco">Alternate Contact Number 2 : </label>
                        <div class="col-sm-2">
                            <select class="vendorformsel" disabled>
                                <option selected>+678</option>
                            </select>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" name="alternate_phone_no" class="vendorformphone" placeholder="999999999">
                        </div>
                    </div>
                    <!------------------form-group row ------------------------->

                    <div class="form-group row regfeild">
                        <label for="inputEmail3" class="vendorregco">Email : </label>
                        <div class="col-sm-5">
                            <input type="email" name="email" class="vendorformreg" placeholder="Enter Email">
                        </div>
                    </div>
                    <!------------------form-group row ------------------------->

                    <div class="form-group row regfeild">
                        <label for="inputEmail3" class="vendorregco">Country : </label>
                        <div class="col-sm-5">
                            <select id="inputForCountry" class="vendorfullsel" name="country_id">
                                <option value="1" selected>Saudi</option>
                            </select>
                        </div>
                    </div>
                    <!------------------form-group row ------------------------->

                    <div class="form-group row regfeild">
                        <label for="inputEmail3" class="vendorregco">City : </label>
                        <div class="col-sm-5">
                            <select id="inputForCities" class="vendorfullsel" name="city_id">
                                <option value="" selected>--- Select city ---</option>
                            </select>
                        </div>
                    </div>
                    <!------------------form-group row ------------------------->

                    <div class="form-group row regfeild">
                        <label for="inputEmail3" class="vendorregco">Address Line 1 : </label>
                        <div class="col-sm-5">
                            <input type="text" name="address_line_1" class="vendorformreg" placeholder="Enter address Line">
                        </div>
                    </div>
                    <!------------------form-group row ------------------------->

                    <div class="form-group row regfeild">
                        <label for="inputEmail3" class="vendorregco">Address Line 2 : </label>
                        <div class="col-sm-5">
                            <input type="text" name="address_line_2" class="vendorformreg" placeholder="Enter Address Line 2">
                        </div>
                    </div>
                    <!------------------form-group row ------------------------->

                    <div class="form-group row regfeild">
                        <label for="inputEmail3" class="vendorregco">Add in Google Map : </label>
                        <div class="col-sm-5">
                            <input type="text" name="google_map_link" class="vendorformreg" placeholder="Enter Google map link here">
                        </div>
                    </div>
                    <!------------------form-group row ------------------------->

                    <div class="form-group row regfeild">
                        <label for="inputEmail3" class="vendorregco">Note : </label>
                        <div class="col-sm-5">
                            <textarea class="form-control" name="note" id="vendorfromtxtarea" rows="3" placeholder="Enter here..."></textarea>
                        </div>
                    </div>
                    <!------------------form-group row ------------------------->
                    <div class="form-group row regfeild">
                        <label for="inputEmail3" class="vendorregco">License Number : </label>
                        <div class="col-sm-5">
                            <input type="text" name="license_no" class="vendorformreg" placeholder="Enter License Number">
                        </div>
                    </div>

                    <div class="form-group row regfeild">
                        <label for="inputEmail3" class="vendorregco">ID Name : </label>
                        <div class="col-sm-5">
                            <input type="text" name="id_name" class="vendorformreg" placeholder="Enter ID Type">
                        </div>
                    </div>
                    <!------------------form-group row ------------------------->
                    <div class="form-group row regfeild">
                        <label for="inputEmail3" class="vendorregco">License Photo : </label>

                        <div class="col-sm-2">

                            <div class="upload-btn-wrapper">
                                <button class="btn uploadbutton">Upload</button>
                                <input type="file" name="license_upload_file" name="myfile" />
                            </div>

                        </div>
                    </div>
                    <!------------------form-group row ------------------------->
                    <div class="form-group row regfeild">
                        <label for="inputEmail3" class="vendorregco">Photo of National ID / Passport : </label>

                        <div class="col-sm-2">

                            <div class="upload-btn-wrapper">
                                <button class="btn uploadbutton">Upload</button>
                                <input type="file" name="id_upload_file" name="myfile" />
                            </div>

                        </div>
                    </div>
                    <!------------------form-group row ------------------------->

                    <div class="form-group row regfeild">
                        <label for="inputEmail3" class="vendorregco">Password : </label>
                        <div class="col-sm-5">
                            <input type="text" name="password" id="vendorPassword" class="vendorformreg" placeholder="*************">
                        </div>
                    </div>
                    <!------------------form-group row ------------------------->

                    <div class="form-group row regfeild">
                        <label for="inputEmail3" class="vendorregco">Confirm Password : </label>
                        <div class="col-sm-5">
                            <input type="text" name="password_confirmation" id="conf_vendorPassword" class="vendorformreg"
                                placeholder="**************">
                        </div>
                    </div>
                    <!------------------form-group row ------------------------->
                    <div class="form-group row regfeild">
                        <label for="inputEmail3" class="vendorregco">Facebook Link : </label>
                        <div class="col-sm-5">
                            <input type="text" name="fb_link" class="vendorformreg" placeholder="Enter Facebook Link">
                        </div>
                    </div>
                    <!------------------form-group row ------------------------->

                    <div class="form-group row regfeild">
                        <label for="inputEmail3" class="vendorregco">Twitter Link : </label>
                        <div class="col-sm-5">
                            <input type="text" name="twitter_link" class="vendorformreg" placeholder="Enter Twitter Link">
                        </div>
                    </div>
                    <!------------------form-group row ------------------------->

                    <div class="linehr"></div>

                    <div class="form-group">

                        <label class="control-label col-sm-3 bankhead" for="head"><b>Bank info</b></label>

                    </div>

                    <div class="form-group row regfeild">
                        <label for="inputEmail3" class="vendorregco">Bank Account Name : </label>
                        <div class="col-sm-5">
                            <input type="text" name="account_name" class="vendorformreg" placeholder="Enter Bank Account Name">
                        </div>
                    </div>
                    <!------------------form-group row ------------------------->
                    <div class="form-group row regfeild">
                        <label for="inputEmail3" class="vendorregco">Bank Name : </label>
                        <div class="col-sm-5">
                            <input type="text" name="bank_name" class="vendorformreg" placeholder="Enter Bank Name">
                        </div>
                    </div>
                    <!------------------form-group row ------------------------->

                    <div class="form-group row regfeild">
                        <label for="inputEmail3" class="vendorregco">IBAN Number : </label>
                        <div class="col-sm-5">
                            <input type="text" name="iban_name" class="vendorformreg" placeholder="Enter IBAN Number">
                        </div>
                    </div>
                    <!------------------form-group row ------------------------->

                    <div class="form-group row regfeild">
                        <label for="inputEmail3" class="vendorregco">Account Number : </label>
                        <div class="col-sm-5">
                            <input type="text" name="account_number" class="vendorformreg" placeholder="Enter Account Number">
                        </div>
                    </div>
                    <!------------------form-group row ------------------------->
                    <!-- <div class="form-group">

                        <label class="control-label col-sm-6 textalign_vendor" for="pwd">Payment Option:</label>

                        <div class="col-sm-8 checkalign">

                            <div class="checkbox">

                                <label><input type="checkbox" name="payment_option" value="1"> <b style="font-size:15px">Online
                                        Payment</b></label>

                                <label> </label>

                                <label> </label>

                                <label> </label>

                                <label> </label>

                                <label><input type="checkbox" name="payment_option" value="2"> <b style="font-size:15px">
                                        Cash</b></label>

                                <div id="payment_option-error" class="error-class"></div>
                            </div>
                        </div>
                    </div> -->
                    <div class="form-group row regfeild">
                        <label for="inputEmail3" class="vendorregco">Account Number : </label>
                        <div class="optcheckterms">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="payment_method" value="online" id="checkboxOnline">
                                <label class="form-check-label" id="vendorchkon" for="checkboxOnline">Online Payment</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="payment_method" value="cash" id="checkboxCash">
                                <label class="form-check-label" id="vendorchkcash" for="checkboxCash">Cash</label>
                            </div>
                            <!---------------optcheckbox------------------>
                        </div>
                    </div>
                    <!------------------form-group row ------------------------->
                    <div class="form-group">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6 checkterms">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="terms_conditions" id="checkboxTerms"
                                    value="option1">
                                <label class="form-check-label" for="checkboxTerms"><span class="vendorterms">I
                                        agreed to Monasabatna </b></span><a href="#">Term & Conditions </a><b><span
                                            class="vendorterms">and </span></b><a href="#">Privacy Policies</a></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-10 textalign">
                            <button type="submit" id="myModal" name="submit" value="submit" class="btn btn-default signme-venuereg">Sign
                                Up</button>
                        </div>
                    </div>
                </form>
            </div>
            <!--------------------------container-fluid formvendor-signup -------------------->
        </div>
        <!---------------------tab-pane-fade ----------------------------->
        <div class="tab-pane fade" id="pills-signup" role="tabpanel" aria-labelledby="pills-signup-tab">
            <div class="container-fluid" id="formvendor-signin">
                <form class="form-horizontal" method="post" id="vendor_sign_in_form">
                    @csrf
                    <div class="form-group row regfeild">
                        <label for="inputEmail3" class="vendorregco">Email : </label>
                        <div class="col-sm-5">
                            <input type="email" name="email" class="vendorformreg" placeholder="example@myhost.com">
                        </div>
                    </div>
                    <!------------------form-group row ------------------------->
                    <div class="form-group row regfeild">
                        <label for="inputEmail3" class="vendorregco">Password : </label>
                        <div class="col-sm-5">
                            <input type="password" name="password" class="vendorformreg" placeholder="************">
                        </div>
                    </div>
                    <!------------------form-group row ------------------------->
                    <div class="form-group">

                        <div class="col-sm-offset-3 col-sm-10 textalign">

                            <button type="submit" name="submit" value="submit" class="btn btn-default signme-venuereg">Sign
                                In</button>
                            <span class="forgotlink">
                                <a href="http://18.218.133.17/register"> Forgot Password?</a>
                            </span>

                        </div>

                    </div>
                    <!----------------form-group for button --------------------->
                </form>
            </div>
            <!---------------container-fluid --------------------------->
        </div>
        <!---------------------tab-pane-fade ----------------------------->

    </div>
    <!-----------------tab-content ----------------------->

</div>
<!----------------container-fluid ------------------------------>
<div class="row"> </div>
@include('shared/footer')
<!------- body end-------->
<script type="text/javascript" src={{ url('js/signup.js') }} charset="utf-8"></script>