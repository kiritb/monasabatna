

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
                     <th scope="col">Guest Capacity </th>
                     <th scope="col">Regular Price</th>
                     <th scope="col">Express Price</th>
                     <th scope="col">AC / Non-AC</th>
                     <th scope="col">Services / Amenities</th>
                     <th scope="col">Phone</th>
                     <th scope="col">Cancellation</th>
                 
                  </tr>
               </thead>
               <tbody class="table-hover">
                  <tr>
                     <th scope="row">201</th>
                     <td>300</td>
                     <td>100 / Day</td>
                     <td>90 / Day</td>
                     <td>Non-AC</td>
                     <td><a data-toggle="modal" data-target="#viewtableModal" class="viewamensertable" href="#">View </a></td>
                     <td>+616-783437843</td>
                     <td>5% </td>
                     <td class="bg-white-booking"><a data-toggle="modal" data-target="#venueeditpopModal" href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
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
                  <tr>
                  <th scope="row">201</th>
                     <td>300</td>
                     <td>100 / Day</td>
                     <td>90 / Day</td>
                     <td>AC</td>
                     <td><a  data-toggle="modal" data-target="#viewtableModal" class="viewamensertable" href="#">View </a></td>
                     <td>+616-783437843</td>
                     <td>5% </td>
                   
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle" style="font-size:20px;color:red"></i></a></td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class='fas fa-toggle-on' style='font-size:20px;color:#66b85d'></i></a></td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                     <td class="bg-white-booking"><a id="myaddexpress" href="#"><i class='fas fa-certificate' style='font-size:20px;color:#f09c18'></i></a></td>
                  </tr>
                  <tr>
                  <th scope="row">201</th>
                     <td>300</td>
                     <td>100 / Day</td>
                     <td>90 / Day</td>
                     <td>Non-AC</td>
                     <td><a  data-toggle="modal" data-target="#viewtableModal" class="viewamensertable" href="#">View </a></td>
                     <td>+616-783437843</td>
                     <td>5% </td>
                  
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle" style="font-size:20px;color:red"></i></a></td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class='fas fa-toggle-on' style='font-size:20px;color:#66b85d'></i></a></td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                     <td class="bg-white-booking"><a id="myaddexpress" href="#"><i class='fas fa-certificate' style='font-size:20px;color:#f09c18'></i></a></td>
                  </tr>
                  <tr>
                  <th scope="row">201</th>
                     <td>300</td>
                     <td>100 / Day</td>
                     <td>90 / Day</td>
                     <td>Non-AC</td>
                     <td><a  data-toggle="modal" data-target="#viewtableModal" class="viewamensertable" href="#">View </a></td>
                     <td>+616-783437843</td>
                     <td>5% </td>
                    
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle" style="font-size:20px;color:red"></i></a></td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class='fas fa-toggle-on' style='font-size:20px;color:#66b85d'></i></a></td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                     <td class="bg-white-booking"><a id="myaddexpress" href="#"><i class='fas fa-certificate' style='font-size:20px;color:#f09c18'></i></a></td>
                  </tr>
                  <tr>
                  <th scope="row">201</th>
                     <td>300</td>
                     <td>100 / Day</td>
                     <td>90 / Day</td>
                     <td>Non-AC</td>
                     <td><a  data-toggle="modal" data-target="#viewtableModal" class="viewamensertable" href="#">View </a></td>
                     <td>+616-783437843</td>
                     <td>5% </td>
                    
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle" style="font-size:20px;color:red"></i></a></td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class='fas fa-toggle-on' style='font-size:20px;color:#66b85d'></i></a></td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                     <td class="bg-white-booking"><a id="myaddexpress" href="#"><i class='fas fa-certificate' style='font-size:20px;color:#f09c18'></i></a></td>
                     
                  </tr>
                  <tr>
                  <th scope="row">201</th>
                     <td>300</td>
                     <td>100 / Day</td>
                     <td>90 / Day</td>
                     <td>Non-AC</td>
                     <td><a  data-toggle="modal" data-target="#viewtableModal" class="viewamensertable" href="#">View </a></td>
                     <td>+616-783437843</td>
                     <td>5% </td>
          
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle" style="font-size:20px;color:red"></i></a></td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class='fas fa-toggle-on' style='font-size:20px;color:#66b85d'></i></a></td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                     <td class="bg-white-booking"><a id="myaddexpress" href="#"><i class='fas fa-certificate' style='font-size:20px;color:#f09c18'></i></a></td>
                  </tr>
                  <tr>
                  <th scope="row">201</th>
                     <td>300</td>
                     <td>100 / Day</td>
                     <td>90 / Day</td>
                     <td>Non-AC</td>
                     <td><a  data-toggle="modal" data-target="#viewtableModal" class="viewamensertable" href="#">View </a></td>
                     <td>+616-783437843</td>
                     <td>5% </td>
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle" style="font-size:20px;color:red"></i></a></td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class='fas fa-toggle-on' style='font-size:20px;color:#66b85d'></i></a></td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                     <td class="bg-white-booking"><a id="myaddexpress" href="#"><i class='fas fa-certificate' style='font-size:20px;color:#f09c18'></i></a></td>
                  </tr>
                  <tr>
                  <th scope="row">201</th>
                     <td>300</td>
                     <td>100 / Day</td>
                     <td>90 / Day</td>
                     <td>Non-AC</td>
                     <td><a  data-toggle="modal" data-target="#viewtableModal" class="viewamensertable" href="#">View </a></td>
                     <td>+616-783437843</td>
                     <td>5% </td>
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle" style="font-size:20px;color:red"></i></a></td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class='fas fa-toggle-on' style='font-size:20px;color:#66b85d'></i></a></td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                     <td class="bg-white-booking"><a id="myaddexpress" href="#"><i class='fas fa-certificate' style='font-size:20px;color:#f09c18'></i></a></td>
                  </tr>
                  <tr>
                  <th scope="row">201</th>
                     <td>300</td>
                     <td>100 / Day</td>
                     <td>90 / Day</td>
                     <td>Non-AC</td>
                     <td><a  data-toggle="modal" data-target="#viewtableModal" class="viewamensertable" href="#">View </a></td>
                     <td>+616-783437843</td>
                     <td>5% </td>
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle" style="font-size:20px;color:red"></i></a></td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class='fas fa-toggle-on' style='font-size:20px;color:#66b85d'></i></a></td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                     <td class="bg-white-booking"><a id="myaddexpress" href="#"><i class='fas fa-certificate' style='font-size:20px;color:#f09c18'></i></a></td>
                  </tr>
                  <tr>
                  <th scope="row">201</th>
                     <td>300</td>
                     <td>100 / Day</td>
                     <td>90 / Day</td>
                     <td>Non-AC</td>
                     <td><a  data-toggle="modal" data-target="#viewtableModal" class="viewamensertable" href="#">View </a></td>
                     <td>+616-783437843</td>
                     <td>5% </td>
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle" style="font-size:20px;color:red"></i></a></td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class='fas fa-toggle-on' style='font-size:20px;color:#66b85d'></i></a></td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                     <td class="bg-white-booking"><a id="myaddexpress" href="#"><i class='fas fa-certificate' style='font-size:20px;color:#f09c18'></i></a></td>
                  </tr>
                  <tr>
                  <th scope="row">201</th>
                     <td>300</td>
                     <td>100 / Day</td>
                     <td>90 / Day</td>
                     <td>Non-AC</td>
                     <td><a  data-toggle="modal" data-target="#viewtableModal" class="viewamensertable" href="#">View </a></td>
                     <td>+616-783437843</td>
                     <td>5% </td>
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle" style="font-size:20px;color:red"></i></a></td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class='fas fa-toggle-on' style='font-size:20px;color:#66b85d'></i></a></td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                     <td class="bg-white-booking"><a id="myaddexpress" href="#"><i class='fas fa-certificate' style='font-size:20px;color:#f09c18'></i></a></td>
                  </tr>
                  <tr>
                  <th scope="row">201</th>
                     <td>300</td>
                     <td>100 / Day</td>
                     <td>90 / Day</td>
                     <td>Non-AC</td>
                     <td><a  data-toggle="modal" data-target="#viewtableModal" class="viewamensertable" href="#">View </a></td>
                     <td>+616-783437843</td>
                     <td>5% </td>
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle" style="font-size:20px;color:red"></i></a></td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class='fas fa-toggle-on' style='font-size:12px;color:#66b85d'></i></a></td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                     <td class="bg-white-booking"><a id="myaddexpress" href="#"><i class='fas fa-certificate' style='font-size:20px;color:#f09c18'></i></a></td>
                  </tr>
               </tbody>
            </table>
           
<!------------------------------ view button Venues ----------------------------------->
            <div class="modal fade" id="viewtableModal" tabindex="-1" role="dialog" aria-labelledby="viewtableModalLabel" aria-hidden="true">
            <div id="canceldash" class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">View Amenities and Services</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="amentabhead">Amenities</div>
      <table class="tabvenuemodal">
  <tr>
    <td>AC</td>
  </tr>
  <tr>
    <td>Parking</td>
  </tr>
   <tr>
    <td>Play Area</td>
  </tr>
</table>
<div class="spacertable"></div>
<div class="servtabhead">Services</div>
      <table class="tabvenuemodal">
  <tr>
  </tr>
  <tr>
    <td colspan="4">Sound System </td>
   <td>Music</td>
    <td>Dance</td>
   <td>DJ</td>
  </tr>
  <tr>
    <td colspan="4">Food   SAR 100 / Person</td>
      <td>Veg</td>
    <td>Non-Veg</td>
   <td>Pasteries</td>
  </tr>
   <tr>
    <td td colspan="4">Decoration</td>
       <td>Floral</td>
    <td>Golden</td>
   <td>Lace cloth</td>
  </tr>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary yesamen" data-dismiss="modal">ok</button>
      </div>

        </div>
        </div>
        </div>

<!------------------view button Modal ------------------------->
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
  @include('slick-laxmi')
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
<!-------------------------------------Edit venue Modal -------------------------------->
<div class="modal fade bd-example-modal-xl" id="venueeditpopModal" tabindex="-1" role="dialog" aria-labelledby="venueeditpopModalLabel" aria-hidden="true">
  <div id="venuedit" class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title">View Venue Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="form-horizontal" method="post" id="vendor_sign_up_form">
  <div class="form">
  <div class="form-group row regfeild">
    <label for="inputEmail3" class="vendorregco">Venue Name : </label>
    <div class="col-sm-5">
        <input type="text" name="company_name" class="vendorformreg" placeholder=" " value="Shikant">
    </div>
</div>
<!------------------form-group row ------------------------->
<div class="form-group row regfeild">
    <label for="inputEmail3" class="vendorregco">Guest Capacity : </label>
    <div class="col-sm-5">
        <input type="text" name="company_name" class="vendorformreg" placeholder="200" value="1000">
    </div>
</div>
<!------------------form-group row ------------------------->
<div class="form-group row regfeild">
    <label for="inputEmail3" class="vendorregco">Cost: </label>
    <div class="col-sm-5">
        <input type="text" name="company_name" class="vendorformreg" placeholder="200" value="100 SAR / person">
    </div>
</div>
<!------------------form-group row ------------------------->
<div class="form-group row regfeild">
    <label for="inputEmail3" class="vendorregco">Cost Type : </label>
    <div class="col-sm-5">
        <input type="text" name="company_name" class="vendorformreg" placeholder="200" value="200">
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
        <input type="text" name="company_name" class="dashvenuform" placeholder="MM:HH" value="12:30 am">
    </div>
</div>
<!------------------form-group row ------------------------->
<div class="form-group row regfeild">
    <label for="inputEmail3" class="vendorregco">End Time : </label>
    <div class="col-sm-5">
        <input type="text" name="company_name" class="dashvenuform" placeholder="MM:HH" value="14:30">
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
<label for="inputEmail3" class="vendorregco">Services : </label>
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Food <span class="venaccord">SAR 100 / Person</span>
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
       Non Vegetarian<br>
       Vegetarian<br>
       Sweets and Deserts<br>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Sound System <span class="venaccordsn">SAR 100 / Person</span>
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        Only Music<br>
        DJ Dance<br>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Parking <span class="venaccordpk">SAR 100 / Person</span>
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Two Wheeler<br>
        Four Wheeler<br>
        Van
      </div>
    </div>
  </div>
</div>

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

                            <div class="upload-btn-wrapper ven">
                                <button class="btn upload">Browse</button>
                                <input type="file" name="license_upload_file" name="myfile" />
                            </div>
</div>
</div>
<!------------------form-group row ------------------------->

<!------------------form-group row ------------------------->
<div class="form-group row regfeild">
    <label for="inputEmail3" class="vendorregco">Video : </label>
    <div class="col-sm-5">
        <input type="text" name="company_name" class="vendorformvid" placeholder="Paste video link here" value="https://www.youtube.com/watch?v=Db9JdS9zmEk">
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
                            <select id="cancelvenueedit" class="selectvenfm" name="country">
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
                            <select id="cancelvenueedito" class="selectvenfm" name="country">
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
                            <select id="cancelvenueedito" class="selectvenfm" name="country">
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
    <label for="inputEmail3" class="vendorregco">Deadline for Payment Cash : </label>
    <div class="col-sm-5">
        <select id="inputForCities" class="vendorfullsel" name="city_id">
            <option value="" selected>--- Time Taken ---</option>
            <option value="">--- 2days---</option>
            <option value="">--- 4days---</option>
        </select>
    </div>
</div>
<!------------------form-group row ------------------------->
<div class="form-group row regfeild">
    <label for="inputEmail3" class="vendorregco">Note : </label>
    <div class="col-sm-5">
    <textarea class="form-control" id="venueeditnote" rows="3" value="specify your subscription charges"></textarea>
    </div>
</div>
<!------------------form-group row ------------------------->
<div class="modal-footer">
        <button type="button" id="venuesubmit" class="btn btn-secondary yesamen" data-dismiss="modal">Submit</button>
       
      </div>
</div><!-----------------form-row ----------------------------------->
</form> 

</div>
  </div>
</div>
</div>

<!-----------------------Edit Venue pop up -------------------------------------------------------->

  
      <!------- body end-------->
@include('shared/footer')
<script src="{{ url('js/vendorpanel/main.js') }}" type="text/javascript" charset="utf-8"></script>
     
     
  