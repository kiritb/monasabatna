

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
<div class="tab-content" id="pills-tabContent">
  <div >
      <div class="dashvendortop">
          <a class="addvenuedash" href="{{ url('dashboardvenueform') }}"> Add </a>
</div><!----------------add button ---------------------->
  <div class="dashboardvenuepart">
            <table class="table table-xs-12 table-sm-12 table-md-12">
               <thead class="table-color-head">
                  <tr>
                     <th scope="col">Room ID</th>
                     <th scope="col">Vennue Name </th>
                     <th scope="col">Guest Capacity </th>
                     <th scope="col">Regular Price</th>
                     <th scope="col">Express Price</th>
                     <th scope="col">AC / Non-AC</th>
                     <th scope="col">Services</th>
                     <th scope="col">Phone</th>
                     <th scope="col">Cancellation</th>
                 
                  </tr>
               </thead>
               <tbody class="table-hover">
                  <?php $slno=1;?>
                  @foreach($data['vennueLists'] as $key => $value)
                  <tr>
                     
                     <th scope="row">{{ $slno++ }}</th>
                     <td>{{ $value['vennueName'] }}</td>
                     <td>{{ $value['MaxGuestCap'] }}</td>
                     <td>{{ $value['actualPrice'] }} / Day</td>
                     <td>90 / Day</td>
                     <td>Non-AC</td>
                     <td>Catering</td>
                     <td>+616-783437843</td>
                     <td>5% </td>
                    
                     <td class="bg-white-booking"><a data-toggle="modal" data-target="#venuevendorpop" href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a data-toggle="modal" data-target="#venudeleteModal" id="myCancel" href="#"><i class="fas fa-times-circle" style="font-size:20px;color:red"></i></a></td>
                     <td class="bg-white-booking"><label class="switch">
                        <input type="checkbox" id="togBtn" style="font-size:12px">
                        <div class="slider round">
                            <span class="on"></span>
                            <span class="off"></span>
                        </div>
                        </label></td>
                     <td class="bg-white-booking"><a data-toggle="modal" data-target=".bd-example-modal-xl" id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                     <td class="bg-white-booking"><a data-toggle="modal" data-target="#venueaddexp" id="myaddexpress" href="#"><i class='fas fa-certificate' style='font-size:20px;color:#f09c18'></i></a></td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
            <!----------------------------Edit Venues ----------------------------------------->
            <div class="modal fade" id="venuevendorpop" tabindex="-1" role="dialog" aria-labelledby="venuevendorpopLabel" aria-hidden="true">

<form class="form-horizontal" method="post" id="vendor_sign_up_form">

    <div class="form-group row regfeild">
        <label for="inputEmail3" class="profileregco">Company Name : </label>
        <div class="col-sm-5">
            <input type="text" name="company_name" class="vendorformreg" value="Sony">
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
            <!----------------------------Edit Venues --------------------------------------------->
            <!------------------------------ Delete Venues ----------------------------------->
            <!-- Modal with Text area -->
            <div class="modal fade" id="venudeleteModal" tabindex="-1" role="dialog" aria-labelledby="venudeleteModalLabel" aria-hidden="true">
            <div id="canceldash" class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirm to Delete Venue</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to Delete the venue.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary yesamen" data-dismiss="modal">Yes</button>
        <button type="button" class="btn btn-primary noamen">No</button>
      </div>
    </div>
  </div>
    
</div>
<!------------------Delete Modal ------------------------->
<!-------------------------------------View venue Modal -------------------------------->
<div class="modal fade bd-example-modal-xl" id="viewvenuemodal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div id="viewvenuefm" class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title">View Venue Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
  <div class="form-row">
  <div class="form-group col-md-2">
  @include('venpanelslickslider')
      
    </div>
    <div class="form-group col-md-2">
    <label for="inputAddress2">Video : </label>
    <a class="venimgpic" href="#"><video width="265" height="178" controls>
                                <source src="svg/images/venuevideo.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                                </video> </a>
  </div>
    <div class="form-group col-md-1">
      <label for="inputEmail4">Room ID :</label>
      <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                     value="B502">
    </div>
    <div class="form-group col-md-2">
      <label for="inputPassword4">Venue Name :</label>
      <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    value="Party">
    </div>
    <div class="form-group col-md-2">
    <label for="inputAddress">Guest Capacity :</label>
    <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                     value="300">
  </div>
  <div class="form-group col-md-2">
    <label for="inputAddress2">Regular Price :</label>
    <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    value="200 / Day">
  </div>
  
  
  </div><!--------------end of row ---------------------------------->
  <div class="form-row">
  <div class="form-group col-md-2">
    <label for="inputAddress2">Express Price :</label>
    <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                     value="200 / Day">
  </div>
  <div class="form-group col-md-2">
    <label for="inputAddress2">Ac / Non Ac :</label>
    <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    value="AC">
  </div>
    <div class="form-group col-md-2">
      <label for="inputPassword4">Phone :</label>
      <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                     value="9008089765">
    </div>
    <div class="form-group col-md-2">
    <label for="inputAddress">Services : </label>
    <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                     value="Catering and Lighting">
  </div>
  <div class="form-group col-md-2">
    <label for="inputAddress2">Country : </label>
    <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                     value="India">
  </div>
  <div class="form-group col-md-3">
    <label for="inputAddress2">Cancellation Charges: </label>
    <input type="text" readonly class="form-control-customcharges" id="fname" name="firstname" value="Before 24 Hours">
    <input type="text" readonly class="form-control-customcol" id="fname" name="firstname" value="5%">

  </div>
  
  
  </div><!----------------------end of row --------------------------->
  <div class="form-row">
  <div class="form-group sttimeven">
    <label for="inputAddress2">Start Time :</label>
    <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                     value="10 : 30">
  </div>
  <div class="form-group sttimeven">
    <label for="inputAddress2">End Time :</label>
    <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    value="12 : 30">
  </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Conference Hall Provided :</label>
      <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                     value="Yes">
    </div>
    <div class="form-group col-md-2">
    <label for="inputAddress">Event Type : </label>
    <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                     value="Marriage">
  </div>
  <div class="form-group col-md-2">
    <label for="inputAddress2">Amenities : </label>
    <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                     value="Food">
  </div>
  <div class="form-group col-md-3">
    <label for="inputAddress2">          </label>
    <input type="text" readonly class="form-control-customcharges" id="fname" name="firstname" value="Before 24 Hours">
    <input type="text" readonly class="form-control-customcol" id="fname" name="firstname"
                                     value="5%">
  </div>
  </div><!----------------------end of row --------------------------->
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">Note : </label>
      <input type="text" class="form-control" id="Express deal discout is offered only for seasonal period"
      value="Express deal discount is offered only for seasonal period">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Deadline for cash payment : </label>
      <input type="text" class="form-control" id="Express deal discout is offered only for seasonal period"
      value="Check Maturity Date as per your credential">
    </div>
    <div class="form-group col-md-3 chargeven">
    <label for="inputAddress2">            </label>
    <input type="text" readonly class="form-control-customcharges" id="fname" name="firstname" value="Before 24 Hours">
    <input type="text" readonly class="form-control-customcol" id="fname" name="firstname"
                                     value="5%">
  </div>
  </div>
</form> 

</div>
  </div>
</div>
</div>
<div class="col-md-2">
    
    <h4>iOS7 Style</h4>

    <div class="switch">
    <input id="cmn-toggle-4" class="cmn-toggle cmn-toggle-round-flat" type="checkbox">
    <label for="cmn-toggle-4"></label>
    </div>

</div>
<!-----------------------View Venue pop up -------------------------------------------------------->
   <!------------------------------ venue Add to express Deals ----------------------------------->
   <div class="modal fade" id="venueaddexp" tabindex="-1" role="dialog" aria-labelledby="venueaddexpLabel" aria-hidden="true">
               <div id="paymentdash" class="modal-dialog">
                  <div class="modal-content">
                     <!-- Modal Header -->
                     <div class="modal-header">
                        <h3 class="modal-title">Add to Express Deals</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">×</span>
                                 </button>
                     </div>
                     <!-- Modal body -->
                     <div class="content-payment">
                     <div class="form-group row express">
    <label for="inputEmail3" class="vendoraddexp"> Current Price(SAR) :</label>

                        <div class="col-sm-5">
        <input type="text" name="company_name" class="vendorformexp" placeholder="100">
    </div>
    <div class="col-15">
                            <select id="country" class="selectvenexp" name="country">
                                <option value="australia" selected>Per day</option>
                                <option value="canada">Per hour</option>
                                <option value="usa">Per Person</option>
                            </select>
                        </div>                 
</div>
<!------------------form-group row ------------------------->
                     <div class="form-group row express">
    <label for="inputEmail3" class="vendoraddexp"> Express Price(SAR) :</label>
    
                        <div class="col-sm-5">
        <input type="text" name="company_name" class="vendorformexp" placeholder="80">
    </div>
    <div class="col-15">
                            <select id="country" class="selectvenexp" name="country">
                                <option value="australia" selected>Per day</option>
                                <option value="canada">Per Person</option>
                                <option value="usa">Per head</option>
                            </select>
                        </div>
                        
</div>
<!------------------form-group row ------------------------->

</div><!-----------content-payment ----------------------->
                     <!-- Modal footer -->
                     <div class="modal-footer">
                               
                     <!---<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--->
                     <button data-toggle="modal" id="closeModal" data-target="#closeModallabel" type="submit" class="btn btn-primary">Add</button>
                           </div>
                  </div>
               </div>
            </div>
<!-------------------------------Payment Details ------------------------------------>
</div><!--------------end of booking ---------------------------------->     
</div>   
  
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
     
     
  