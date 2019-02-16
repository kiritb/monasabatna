

@include('shared/headercustom')
<link rel="stylesheet" type="text/css" href="{{ url('css/vendor-panel/superadmin.css') }}">
      <!------- body start--------> 
      <div id="greydivider"></div>
      <div class="container-fluid" id="globevendorpanel">
      @include('vendor-panel/vendorheaderbar')
<div class="tab-content" id="pills-tabContent">
<div class="tab-pane fade show active" id="pills-vendorpan" role="tabpanel" aria-labelledby="pills-vendorpan-tab">
<div class="container-fluid" id="dashboardcontent">
      
      @include('vendor-panel/vendorvenuesidebar')
<div class="tab-content" id="v-pills-tabContent">
 
  <div>
  <div class="container-fluid" id="formprofile-signup">

<form class="form-horizontal" method="post" id="vendor_sign_up_form">

    <div class="form-group row regfeild">
        <label for="inputEmail3" class="profileregco">Company Name : </label>
        <div class="col-sm-5">
            <input type="text" name="company_name" class="vendorformreg" placeholder="Enter Company Name">
        </div>
    </div>
    <!------------------form-group row ------------------------->
    <div class="form-group row regfeild">
        <label for="inputEmail3" class="profileregco">Logo : </label>
        <div class="col-sm-2 profilewrap">

            <div class="upload-btn-wrapper">
                <button class="btn uploadbutton">Upload</button>
                <input type="file" name="logo_upload_file" />
            </div>

        </div>
    </div>
    <!------------------form-group row ------------------------->
    <div class="form-group row regfeild">
        <label for="inputEmail3" class="profileregco">Phone Number : </label>
        <div class="col-sm-2">
            <select id="inputState" class="profileformsel" disabled>
                <option selected>+678</option>
            </select>
        </div>
        <div class="col-sm-5">
            <input type="text" name="primary_phone_no" class="profileformphone" placeholder="999999999">
        </div>
    </div>
    <!------------------form-group row ------------------------->
    <div class="form-group row regfeild">
        <label for="inputEmail3" class="profileregco">Alternate Contact Number 1 : </label>
        <div class="col-sm-2">
            <select id="inputState" class="profileformsel" disabled>
                <option selected>+678</option>
            </select>
        </div>
        <div class="col-sm-5">
            <input type="text" name="secondary_phone_no" class="profileformphone" placeholder="999999999">
        </div>
    </div>
    <!------------------form-group row ------------------------->
    <div class="form-group row regfeild">
        <label for="inputEmail3" class="profileregco">Alternate Contact Number 2 : </label>
        <div class="col-sm-2">
            <select id="inputState" class="profileformsel" disabled>
                <option selected>+678</option>
            </select>
        </div>
        <div class="col-sm-5">
            <input type="text" name="alternate_phone_no" class="profileformphone" placeholder="999999999">
        </div>
    </div>
    <!------------------form-group row ------------------------->

    <div class="form-group row regfeild">
        <label for="inputEmail3" class="profileregco">Email : </label>
        <div class="col-sm-5">
            <input type="email" name="email" class="vendorformreg" placeholder="Enter Email">
        </div>
    </div>
    <!------------------form-group row ------------------------->

    <div class="form-group row regfeild">
        <label for="inputEmail3" class="profileregco">Country : </label>
        <div class="col-sm-5">
            <select id="inputForCountry" class="vendorfullsel" name="country_id">
                <option value="1" selected>Saudi</option>
            </select>
        </div>
    </div>
    <!------------------form-group row ------------------------->

    <div class="form-group row regfeild">
        <label for="inputEmail3" class="profileregco">City : </label>
        <div class="col-sm-5">
            <select id="inputForCities" class="vendorfullsel" name="city_id">
                <option value="" selected>--- Select city ---</option>
            </select>
        </div>
    </div>
    <!------------------form-group row ------------------------->

    <div class="form-group row regfeild">
        <label for="inputEmail3" class="profileregco">Address Line 1 : </label>
        <div class="col-sm-5">
            <input type="text" name="address_line_1" class="vendorformreg" placeholder="Enter address Line">
        </div>
    </div>
    <!------------------form-group row ------------------------->

    <div class="form-group row regfeild">
        <label for="inputEmail3" class="profileregco">Address Line 2 : </label>
        <div class="col-sm-5">
            <input type="text" name="address_line_2" class="vendorformreg" placeholder="Enter Address Line 2">
        </div>
    </div>
    <!------------------form-group row ------------------------->

    <div class="form-group row regfeild">
        <label for="inputEmail3" class="profileregco">Add in Google Map : </label>
        <div class="col-sm-5">
            <input type="text" name="google_map_link" class="vendorformreg" placeholder="Enter Google map link here">
        </div>
    </div>
    <!------------------form-group row ------------------------->

    <div class="form-group row regfeild">
        <label for="inputEmail3" class="profileregco">Note : </label>
        <div class="col-sm-5">
            <textarea class="form-control" name="note" id="vendorfromtxtarea" rows="3" placeholder="Enter here..."></textarea>
        </div>
    </div>
    <!------------------form-group row ------------------------->
    <div class="form-group row regfeild">
        <label for="inputEmail3" class="profileregco">License Number : </label>
        <div class="col-sm-5">
            <input type="text" name="license_no" class="vendorformreg" placeholder="Enter License Number">
        </div>
    </div>

    <div class="form-group row regfeild">
        <label for="inputEmail3" class="profileregco">ID Name : </label>
        <div class="col-sm-5">
            <input type="text" name="id_name" class="vendorformreg" placeholder="Enter ID Type">
        </div>
    </div>
    <!------------------form-group row ------------------------->
    <div class="form-group row regfeild">
        <label for="inputEmail3" class="profileregco">License Photo : </label>

        <div class="col-sm-2 profilewrap">

            <div class="upload-btn-wrapper">
                <button class="btn uploadbutton">Upload</button>
                <input type="file" name="license_upload_file" name="myfile" />
            </div>

        </div>
    </div>
    <!------------------form-group row ------------------------->
    <div class="form-group row regfeild">
        <label for="inputEmail3" class="profileregco">Photo of National ID / Passport : </label>

        <div class="col-sm-2 profilewrap">

            <div class="upload-btn-wrapper">
                <button class="btn uploadbutton">Upload</button>
                <input type="file" name="id_upload_file" name="myfile" />
            </div>

        </div>
    </div>
    <!------------------form-group row ------------------------->

    <div class="form-group row regfeild">
        <label for="inputEmail3" class="profileregco">Password : </label>
        <div class="col-sm-5">
            <input type="text" name="password" id="vendorPassword" class="vendorformreg" placeholder="*************">
        </div>
    </div>
    <!------------------form-group row ------------------------->

    <div class="form-group row regfeild">
        <label for="inputEmail3" class="profileregco">Confirm Password : </label>
        <div class="col-sm-5">
            <input type="text" name="password_confirmation" id="conf_vendorPassword" class="vendorformreg"
                placeholder="**************">
        </div>
    </div>
    <!------------------form-group row ------------------------->
    <div class="form-group row regfeild">
        <label for="inputEmail3" class="profileregco">Facebook Link : </label>
        <div class="col-sm-5">
            <input type="text" name="fb_link" class="vendorformreg" placeholder="Enter Facebook Link">
        </div>
    </div>
    <!------------------form-group row ------------------------->

    <div class="form-group row regfeild">
        <label for="inputEmail3" class="profileregco">Twitter Link : </label>
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
        <label for="inputEmail3" class="profileregco">Bank Account Name : </label>
        <div class="col-sm-5">
            <input type="text" name="account_name" class="vendorformreg" placeholder="Enter Bank Account Name">
        </div>
    </div>
    <!------------------form-group row ------------------------->
    <div class="form-group row regfeild">
        <label for="inputEmail3" class="profileregco">Bank Name : </label>
        <div class="col-sm-5">
            <input type="text" name="bank_name" class="vendorformreg" placeholder="Enter Bank Name">
        </div>
    </div>
    <!------------------form-group row ------------------------->

    <div class="form-group row regfeild">
        <label for="inputEmail3" class="profileregco">IBAN Number : </label>
        <div class="col-sm-5">
            <input type="text" name="iban_name" class="vendorformreg" placeholder="Enter IBAN Number">
        </div>
    </div>
    <!------------------form-group row ------------------------->

    <div class="form-group row regfeild">
        <label for="inputEmail3" class="profileregco">Account Number : </label>
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
        <label for="inputEmail3" class="profileregco">Account Number : </label>
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
        <div class="col-sm-6 profileterms">
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
            <button type="submit" id="myModal" name="submit" value="submit" class="btn btn-default signme-profilereg">Sign
                Up</button>
        </div>
    </div>
</form>
</div>
<!--------------------------container-fluid Profile registration -------------------->   


  </div><!-----------------v-pills-profiles ------------------------------->
  
</div><!-------------------------globevendorpanel--------------------------->
  
      <!------- body end-------->
@include('shared/footer')
        <script type="text/javascript">
        $('MySlicker slicker').slick({
        rtl: true,
        slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  fade: false,
  infinite: true,
  speed: 300,
  adaptiveHeight:true
});
        </script>
      <script><!------inner page-Tabs-------->
         $(document).ready(function(){
         
         $("#Add-Express #Remove-Express-Deal").click(function(){
         $("#Remove-Express-Modal").modal();
         });
         $("#myaddexpress").click(function(){
         $("#Add-Express").modal();
         });
          $(".nav-tabs a").click(function(){
           $(this).tab('show');
         });
         });
      </script>
     
     
  