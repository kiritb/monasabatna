

@include('shared/header')
<link rel="stylesheet" type="text/css" href="{{ url('css/vendor-panel/superadmin.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/infoguestlogin.css') }}">
      <!------- body start--------> 
      <div id="greydivider"></div>
      <div class="container-fluid" id="globevendorpanel">
     @include('vendor-panel/vendorheaderbar')

  <div class="container-fluid" id="dashboardcontent">
      
     @include('vendor-panel/vendorvenuesidebar')
<div class="tab-content" id="v-pills-tabContent">
 
  <div class="tab-pane fade show active" id="v-pills-venues" role="tabpanel" aria-labelledby="v-pills-venues-tab">
      <div class="dashformtop">
          Add Venue Details
</div><!----------------add button ---------------------->
  <div class="venueform">
  
  <form class="form-horizontal" method="post" id="vendor_sign_up_form">
  <div class="form-group row regfeild">
    <label for="inputEmail3" class="vendorregco">Venue Name : </label>
    <div class="col-sm-5">
        <input type="text" name="company_name" class="vendorformreg" placeholder="Venue Name ">
    </div>
</div>
<!------------------form-group row ------------------------->
<div class="form-group row regfeild">
    <label for="inputEmail3" class="vendorregco">Guest Capacity : </label>
    <div class="col-sm-5">
        <input type="text" name="company_name" class="vendorformreg" placeholder="Enter Guest Capacity">
    </div>
</div>
<!------------------form-group row ------------------------->
<div class="form-group row regfeild">
    <label for="inputEmail3" class="vendorregco">Cost: </label>
    <div class="col-sm-5">
        <input type="text" name="company_name" class="vendorformreg" placeholder="Enter the cost">
    </div>
</div>
<!------------------form-group row ------------------------->
<div class="form-group row regfeild">
    <label for="inputEmail3" class="vendorregco">Cost Type : </label>
    <div class="col-sm-5">
        <input type="text" name="company_name" class="vendorformreg" placeholder="Enter cost type">
    </div>
</div>
<!------------------form-group row ------------------------->
<div class="form-group row regfeild">
    <label for="inputEmail3" class="vendorregco">Country : </label>
    <div class="col-sm-5">
        <select id="inputForCountry" class="vendorfullsel" name="country_id">
            <option value="1" selected>Dubai</option>
            <option value="1">India</option>
            <option value="1">Ireland</option>
            <option value="1">Australia</option>
        </select>
    </div>
</div>
<!------------------form-group row ------------------------->
<div class="form-group row regfeild">
    <label for="inputEmail3" class="vendorregco">Start Time : </label>
    <div class="col-sm-5">
        <input type="text" name="company_name" class="dashvenuform" placeholder="MM:HH">
    </div>
</div>
<!------------------form-group row ------------------------->
<div class="form-group row regfeild">
    <label for="inputEmail3" class="vendorregco">End Time : </label>
    <div class="col-sm-5">
        <input type="text" name="company_name" class="dashvenuform" placeholder="MM:HH">
    </div>
</div>
<!------------------form-group row ------------------------->

<div class="form-group row regfeild">
    <label for="inputEmail3" class="vendorregco">AC : </label>
    <div class="marginspacevenue">
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Yes</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">No</label>
</div>
</div><!------------marginspacevenue----------------------------->
</div>
<!------------------form-group row ------------------------->
<div class="form-group row regfeild">
    <label for="inputEmail3" class="vendorregco">Conference Hall Provided : </label>
    <div class="marginspacevenue">
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Yes</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">No</label>
</div>
</div><!------------marginspacevenue----------------------------->
</div>
<!------------------form-group row ------------------------->
<div class="form-group row regfeild">
    <label for="inputEmail3" class="vendorregco">Event Type : </label>
    <div class="marginspacevenue">
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">Business</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">Marriage</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">Personal</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">Birthday</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">Other</label>
</div>
</div><!------------marginspacevenue----------------------------->

</div>
<!------------------form-group row ------------------------->
<div class="form-group row regfeild">
    <label for="inputEmail3" class="vendorregco">Services : </label>
    <div class="col-sm-5">
        <select id="inputForCountry" class="vendorfullsel" name="country_id">
            <option value="1" selected>Catering</option>
            <option value="1">Lighting</option>
            <option value="1">Music</option>
            <option value="1">Floral Decoration</option>
        </select>
    </div>
</div>
<!------------------form-group row ------------------------->
<!----
<div class="form-group row regfeild">
    <label for="inputEmail3" class="vendorregco">Services : </label>
    <div class="col-15">
                            <select id="country" class="selectvenfm" name="country">
                                <option value="australia" selected>Catering</option>
                                <option value="canada">Lighting</option>
                                <option value="usa">Sound</option>
                            </select>
                        </div>
                        <div class="col-sm-5">
        <input type="text" name="company_name" class="vendorformser" placeholder="100">
    </div>
                        
</div>---->

<!------------------form-group row ------------------------->
<!----
<div class="form-group row regfeild">
    <label for="inputEmail3" class="vendorregco"> Services :</label>
    <div class="col-15">
                            <select id="country" class="selectvenfm" name="country">
                                <option value="australia" selected>Lighting</option>
                                <option value="canada">Sound</option>
                                <option value="usa">Catering</option>
                            </select>
                        </div>
                        <div class="col-sm-5">
        <input type="text" name="company_name" class="vendorformser" placeholder="Price">
    </div>
                        
</div>
----->
<!------------------form-group row ------------------------->
<!------
<div class="form-group row regfeild">
    <label for="inputEmail3" class="vendorregco">Services :</label>
    <div class="col-15">
                            <select id="country" class="selectvenfm" name="country">
                                <option value="australia" selected>Sound</option>
                                <option value="canada">Lighting</option>
                                <option value="usa">Sound</option>
                            </select>
                        </div>
                        <div class="col-sm-5">
        <input type="text" name="company_name" class="vendorformser" placeholder="Price">
    </div>
    <div class="upload-add">
                                <button class="btn addformser">Add</button>
                            </div>     
</div> 
------->
<!------------------form-group row -------------------------> 


<div class="form-group row regfeild">
    <label for="inputEmail3" class="vendorregco">Amenities : </label>
    <div class="marginspacevenue">
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">AC</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">Parking</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">Food</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">Life</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">Decoration Allowed</label>
</div>
</div><!------------marginspacevenue----------------------------->
<!----------<div class="upload-add">
                                <button class="btn addformchk">Add</button>
                            </div>  --------------->
</div>
<!------------------form-group row ------------------------->



<div class="form-group row regfeild">
    <label for="inputEmail3" class="vendorregco">Photos : </label>
    
    <div class="col-sm-2">

                            <div class="upload-btn-wrapper">
                                <button class="btn upload">Browse</button>
                                <input type="file" name="license_upload_file" name="myfile" />
                            </div>
</div>
</div>
<!------------------form-group row ------------------------->
<!----
<div class="form-group row regfeild">
    <label for="inputEmail3" class="vendorregco"> </label>
    <div class="col-sm-5">
        
    </div>
    <div class="col-sm-2">

                            <div class="upload-add">
                                <button class="btn addformupload">Add</button>
                                
                            </div>
</div>
</div> ------->
<!------------------form-group row ------------------------->
<div class="form-group row regfeild">
    <label for="inputEmail3" class="vendorregco">Video : </label>
    <div class="col-sm-5">
        <input type="text" name="company_name" class="vendorformvid" placeholder="Paste video link here">
    </div>
    <span class="formor"> or </span>
    <div id="videoupd" class="upload-btn-wrapper">
                                <button class="btn upload">Browse</button>
                                <input type="file" name="license_upload_file" name="myfile" />
                            </div>
</div>
<!------------------form-group row ------------------------->
<div class="form-group row regfeild">
    <label for="inputEmail3" class="vendorregco"> Cancellation Charges :</label>
    <div class="col-15">
                            <select id="country" class="selectvenfm" name="country">
                                <option value="australia" selected>Before 24 Hrs</option>
                                <option value="canada">Before 2hours</option>
                                <option value="usa">5days</option>
                            </select>
                        </div>
                        <div class="col-sm-5">
        <input type="text" name="company_name" class="vendorformser" placeholder="8%">
    </div>
                        
</div>
<!------------------form-group row ------------------------->
<div class="form-group row regfeild">
    <label for="inputEmail3" class="vendorregco"> Cancellation Charges :</label>
    <div class="col-15">
                            <select id="country" class="selectvenfm" name="country">
                                <option value="australia" selected>Before 24 Hrs</option>
                                <option value="canada">Before 2hours</option>
                                <option value="usa">5days</option>
                            </select>
                        </div>
                        <div class="col-sm-5">
        <input type="text" name="company_name" class="vendorformser" placeholder="8%">
    </div>
                        
</div>
<!------------------form-group row ------------------------->
<div class="form-group row regfeild">
    <label for="inputEmail3" class="vendorregco"> Cancellation Charges :</label>
    <div class="col-15">
                            <select id="country" class="selectvenfm" name="country">
                                <option value="australia" selected>Before 24 Hrs</option>
                                <option value="canada">Before 2hours</option>
                                <option value="usa">5days</option>
                            </select>
                        </div>
                        <div class="col-sm-5">
        <input type="text" name="company_name" class="vendorformser" placeholder="8%">
    </div>
                        
</div>
<!------------------form-group row ------------------------->

<div class="timeselector">
<div class="form-group mb-2 timepicker">
  <!---<div class="input-group mb-2">
        <span class="input-group-addon">Deadline for cash payment</span>
        <input class="form-control" type="date" value="" id="startDate" onchange="getStartDate();">
    </div> ---->
    <div class="input-group">
        <span class="input-group-addon">Time</span>
        <input class="form-control" type="time" value="" id="datetimepicker" onchange="getStartTime(); name:"time" />
    </div>
</div>
</div><!-----------------timeselector----------------->
<!------------------form-group row ------------------------->
<div class="form-group row regfeild">
    <label for="inputEmail3" class="vendorregco">Note : </label>
    <div class="col-sm-5">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
    <div class="row sub">
        <button type="submit" value="submit" class="btn btn-default formsubmit">Submit</button>
        <button type="submit" value="cancel" class="btn btn-default formcancel">Cancel</button>
    </div>
</div>
</form>
</div><!--------------end of booking ---------------------------------->     
</div>   
  <div class="tab-pane fade" id="v-pills-services" role="tabpanel" aria-labelledby="v-pills-services-tab">php</div>
  <div class="tab-pane fade" id="v-pills-policies" role="tabpanel" aria-labelledby="v-pills-policies-tab">drupal</div>
  <div class="tab-pane fade" id="v-pills-profiles" role="tabpanel" aria-labelledby="v-pills-profiles-tab">java</div>
  <div class="tab-pane fade" id="v-pills-amenities" role="tabpanel" aria-labelledby="v-pills-amenities-tab">
  <div class="dashvendortop">
          <a  data-toggle="modal" data-target="#addAmenities" class="addvenuedash" href="#"> Add </a>
</div><!----------------add button ---------------------->
  <div class="dashboardamenpart">
            <table class="table table-xs-12 table-sm-12 table-md-12">
               <thead class="table-color-head">
                  <tr>
                     <th class="amenid" scope="col">Sr ID</th>
                     <th scope="col">Amenities </th>

                 
                  </tr>
               </thead>
               <tbody class="table-hover">
                  <tr>
                     <th class="amenid" scope="row">201</th>
                     <td>Swimming Phool</td>
                     
                     <td class="bg-white-booking"><a href="#"><i data-toggle="modal" data-target="#updateAmenities" class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i data-toggle="modal" data-target="#deleteAmenities" class="fas fa-trash-alt" style="font-size:20px;color:red"></i></a></td>
                  </tr>
                  <tr>
                     <th class="amenid" scope="row">201</th>
                     <td>Parking</td>
                     
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt" style="font-size:20px;color:red"></i></a></td>
                  </tr>
                  <tr>
                     <th class="amenid" scope="row">201</th>
                     <td>Swimming Phool</td>
                     
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt" style="font-size:20px;color:red"></i></a></td>
                  </tr>
                  <tr>
                     <th class="amenid" scope="row">201</th>
                     <td>Parking</td>
                     
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt" style="font-size:20px;color:red"></i></a></td>
                  </tr>
                  <tr>
                     <th class="amenid" scope="row">201</th>
                     <td>Play Area</td>
                     
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt" style="font-size:20px;color:red"></i></a></td>
                  </tr>
                  <tr>
                     <th class="amenid" scope="row">201</th>
                     <td>Gym</td>
                     
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt" style="font-size:20px;color:red"></i></a></td>
                  </tr>
                  <tr>
                     <th class="amenid" scope="row">201</th>
                     <td>Swimming Phool</td>
                     
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt" style="font-size:20px;color:red"></i></a></td>
                  </tr>
                  <tr>
                     <th class="amenid" scope="row">201</th>
                     <td>Swimming Phool</td>
                     
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt" style="font-size:20px;color:red"></i></a></td>
                  </tr>
                  <tr>
                     <th class="amenid" scope="row">201</th>
                     <td>Swimming Phool</td>
                     
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt" style="font-size:20px;color:red"></i></a></td>
                  </tr>
                  <tr>
                     <th class="amenid" scope="row">201</th>
                     <td>Swimming Phool</td>
                     
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt" style="font-size:20px;color:red"></i></a></td>
                  </tr>
                  <tr>
                     <th class="amenid" scope="row">201</th>
                     <td>Swimming Phool</td>
                     
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt" style="font-size:20px;color:red"></i></a></td>
                  </tr>
                  <tr>
                     <th class="amenid" scope="row">201</th>
                     <td>Swimming Phool</td>
                     
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt" style="font-size:20px;color:red"></i></a></td>
                  </tr>
               </tbody>
            </table>
            <!------------------------------ Add Amenities ----------------------------------->
            <!-- Modal with Text area -->
            <div class="modal fade" id="addAmenities" tabindex="-1" role="dialog" aria-labelledby="AddamenitiesLabel" aria-hidden="true">
  <div id="canceldash" class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Amenities</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <!------------------form-group row ------------------------->

<div class="form-group row regfeild">
    <label for="inputEmail3" class="vendoramenco">Amenities : </label>
    <div class="col-sm-8">
        <input type="text" name="password" id="vendorPassword" class="vendorformamen" placeholder="Enter here">
    </div>
    
</div>
<!------------------form-group row ------------------------->

      </div>
      <div class="modal-footer">
        <button type="button" class="cancelmodalbtn" data-dismiss="modal">Add</button>
        
      </div>
    </div>
  </div>
</div>
<!-------------------Add Modal -------------------------------------->
<!------------------------------ Update Amenities ----------------------------------->
            <!-- Modal with Text area -->
            <div class="modal fade" id="updateAmenities" tabindex="-1" role="dialog" aria-labelledby="updateAmenitiesLabel" aria-hidden="true">
  <div id="canceldash" class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Amenities</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <!------------------form-group row ------------------------->

<div class="form-group row regfeild">
    <label for="inputEmail3" class="vendoramenco">Amenities : </label>
    <div class="col-sm-8">
        <input type="text" name="password" id="vendorPassword" class="vendorformamen" placeholder="Enter here">
    </div>
    
</div>
<!------------------form-group row ------------------------->

      </div>
      <div class="modal-footer">
        <button type="button" class="cancelmodalbtn" data-dismiss="modal">Update</button>
        
      </div>
    </div>
  </div>
</div>
<!-------------------Update Modal -------------------------------------->
<!------------------------------ Delete Amenities ----------------------------------->
            <!-- Modal with Text area -->
            <div class="modal fade" id="deleteAmenities" tabindex="-1" role="dialog" aria-labelledby="deleteAmenitiesLabel" aria-hidden="true">
            <div id="canceldash" class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete Amenities</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to Delete.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary yesamen" data-dismiss="modal">Yes</button>
        <button type="button" class="btn btn-primary noamen">No</button>
      </div>
    </div>
  </div>
    
</div>
<!------------------form-group row ------------------------->

      </div>
      
    </div>
  </div>
</div>
<!-------------------Delete Modal -------------------------------------->
</div><!--------------end of booking ----------------------------------> 

  </div><!-----------pills-amenities-tab ----------------------------->
            
</div><!----------------------------container-fluid-------------------------->
</div><!--------------v-pills-books -------------------------------->
<div class="row"></div>
<div class="row"></div>
      <!------- body end-------->
@include('shared/footer')
<script type="text/javascript">
$('.label.ui.dropdown')
  .dropdown();
$('.no.label.ui.dropdown')
  .dropdown({
  useLabels: false
});
$('.ui.button').on('click', function () {
  $('.ui.dropdown')
    .dropdown('restore defaults')
})
</script>
     
     
  