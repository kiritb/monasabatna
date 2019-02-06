

@include('shared/header')
<link rel="stylesheet" type="text/css" href="{{ url('css/vendor-panel/superadmin.css') }}">
      <!------- body start--------> 
     

  <div class="container-fluid" id="dashboardcontent">
      
      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  <a class="nav-link active" id="v-pills-books-tab" data-toggle="pill" href="#v-pills-books" role="tab" aria-controls="v-pills-books" aria-selected="true">Bookings</a>
  <a class="nav-link" id="v-pills-venues-tab" data-toggle="pill" href="#v-pills-venues" role="tab" aria-controls="v-pills-venues" aria-selected="false">Venue </a>
  <a class="nav-link" id="v-pills-services-tab" data-toggle="pill" href="#v-pills-services" role="tab" aria-controls="v-pills-services" aria-selected="false">Services</a>
  <a class="nav-link" id="v-pills-policies-tab" data-toggle="pill" href="#v-pills-policies" role="tab" aria-controls="v-pills-policies" aria-selected="false">Terms & Policies</a>
  <a class="nav-link" id="v-pills-profiles-tab" data-toggle="pill" href="#v-pills-profiles" role="tab" aria-controls="v-pills-profiles" aria-selected="false">Profile</a>
  <a class="nav-link" id="v-pills-amenities-tab" data-toggle="pill" href="#v-pills-amenities" role="tab" aria-controls="v-pills-amenities" aria-selected="false">Amenities</a>
</div>
<div class="tab-content" id="v-pills-tabContent">
  <div class="tab-pane fade show active" id="v-pills-books" role="tabpanel" aria-labelledby="v-pills-books-tab">
      <!------------------------tabs start for bookings ----------------------------------->
      <div class="container-fluid" id="dashboardtabs">
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-current-tab" data-toggle="pill" href="#pills-current" role="tab" aria-controls="pills-current" aria-selected="true">Current Bookings</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-history-tab" data-toggle="pill" href="#pills-history" role="tab" aria-controls="pills-history" aria-selected="false">Booking History</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-cancel-tab" data-toggle="pill" href="#pills-cancel" role="tab" aria-controls="pills-cancel" aria-selected="false">Cancel Bookings</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="filterdash" data-toggle="modal" data-target="#exampleModalLong">Filters</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-current" role="tabpanel" aria-labelledby="pills-current-tab">
  <div class="dashboardright">
            <table class="table table-xs-12 table-sm-12 table-md-12">
               <thead class="table-color-head">
                  <tr>
                     <th scope="col">Booking ID</th>
                     <th scope="col">Room ID </th>
                     <th scope="col">Name</th>
                     <th scope="col">Email</th>
                     <th scope="col">Arrive</th>
                     <th scope="col">Depart</th>
                     <th scope="col">Venue</th>
                 
                  </tr>
               </thead>
               <tbody class="table-hover">
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>johndeo@gmail.com</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>200</td>
                   
                     <td class="bg-white-booking"><a  data-toggle="modal" data-target="#myBookingOTP" href="#"><i class="fas fa-check-circle" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a data-toggle="modal" data-target="#cancelBooking" href="#"><i class="fas fa-times-circle" style="font-size:20px;color:red"></i></a></td>
                     <td class="bg-white-booking"><a data-toggle="modal" data-target="#viewpopModal" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>johndeo@gmail.com</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>200</td>
                   
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-check-circle" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle" style="font-size:20px;color:red"></i></a></td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>johndeo@gmail.com</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>200</td>
                  
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-check-circle" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle" style="font-size:20px;color:red"></i></a></td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>johndeo@gmail.com</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>200</td>
                    
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-check-circle" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle" style="font-size:20px;color:red"></i></a></td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>johndeo@gmail.com</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>200</td>
                    
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-check-circle" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle" style="font-size:20px;color:red"></i></a></td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                     
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>johndeo@gmail.com</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>200</td>
          
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-check-circle" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle" style="font-size:20px;color:red"></i></a></td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>johndeo@gmail.com</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>200</td>
                      <td class="bg-white-booking"><a href="#"><i class="fas fa-check-circle" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle" style="font-size:20px;color:red"></i></a></td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>johndeo@gmail.com</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>200</td>
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-check-circle" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle" style="font-size:20px;color:red"></i></a></td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>johndeo@gmail.com</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>200</td>
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-check-circle" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle" style="font-size:20px;color:red"></i></a></td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>johndeo@gmail.com</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>200</td>
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-check-circle" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle" style="font-size:20px;color:red"></i></a></td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>johndeo@gmail.com</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>200</td>
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-check-circle" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle" style="font-size:20px;color:red"></i></a></td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>johndeo@gmail.com</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>200</td>
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-check-circle" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a data-toggle="modal" data-target="#exampleModal" id="myCancel" href="#"><i class="fas fa-times-circle" style="font-size:20px;color:red"></i></a></td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                  </tr>
               </tbody>
            </table>
</div><!--------------end of booking ---------------------------------->
  </div><!-------------------- tab-pane fade ------------------------->     
  <div class="modal fade" id="myBookingOTP" tabindex="-1" role="dialog" aria-labelledby="myBookingOTPLabel" aria-hidden="true">
                <div id="codedash"class="modal-dialog">
                    <div class="modal-content">
                        <form class="form-horizontal text-center" method="post" id="otp_verify_form">
                            <!-- Modal Header -->
                            <div class="modal-header text-center">
                                <h3 class="modal-title">Booking Code</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                                <h6 style="text-align:center">Please enter booking code provided by customer in order to close the booking.</h6>

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
                               
                                <input type="button" data-toggle="modal" id="AddexpressLabel" data-target="#Addexpress" class="btn btn-lg-12 custom-button" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

    <!----------- Booking code -------------->
                <!------------------------------ Payment Details ----------------------------------->
                <div class="modal fade" id="Addexpress" tabindex="-1" role="dialog" aria-labelledby="AddexpressLabel" aria-hidden="true">
               <div id="paymentdash" class="modal-dialog">
                  <div class="modal-content">
                     <!-- Modal Header -->
                     <div class="modal-header">
                        <h3 class="modal-title">Payment Details</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">×</span>
                                 </button>
                     </div>
                     <!-- Modal body -->
                     <div class="content-payment">
                        <div class="form-group row">
                        <div class="col-30">
                                <label for="fname">Payment Type : </label>
                            </div>
                            <div id="pyttype" class="col-sm-5">
                            <select class="form-control" id="exampleFormControlSelect1">
      <option>Cash</option>
      <option>Span</option>

    </select>
                            </div>
</div><!------------form-group row --------------------->
  <div class="form-group row">
  <div class="col-30">
                                <label for="fname">Payment Type : </label>
                            </div>
    <div id="pytstatus" class="col-sm-5">
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Pending</option>
      <option>Closed</option>

    </select>
    </div>
  </div><!------------form-group row --------------------->
</div><!-----------content-payment ----------------------->
                     <!-- Modal footer -->
                     <div class="modal-footer">
                               
                     <!---<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--->
                     <button data-toggle="modal" id="closeModal" data-target="#closeModallabel" type="submit" class="btn btn-primary">Save changes</button>
                           </div>
                  </div>
               </div>
            </div>
<!-------------------------------Payment Details ------------------------------------>
 <!------------------------------ Cancel Booking ----------------------------------->
            <!-- Modal with Text area -->
            <div class="modal fade" id="cancelBooking" tabindex="-1" role="dialog" aria-labelledby="CancelBooking" aria-hidden="true">
  <div id="canceldash" class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cancel Booking</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Please mention the reason of cancellation
        <div class="colcancelbook">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="cancelmodalbtn" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to close the booking.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-----------------------------cancel Booking --------------------------------------------->
<!-------------------------------------filter Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" id="filterdash" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Filters</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
                    <div class="row infolog">
                        <div class="col-20">
                            <label for="fname">Booking ID : </label>
                        </div>
                        <div class="col-25">
                            <input type="text" id="fname" name="firstname" placeholder="">
                        </div>
                    </div>
                    <!---- row infolog------------>
                    <div class="row infolog">
                        <div class="col-20">
                            <label for="lname">Room ID : </label>
                        </div>
                        <div class="col-25">
                            <select id="country" name="256">
                                <option value="301">677</option>
                                <option value="487">987</option>
                                <option value="102">345</option>
                            </select>
                        </div>
                    </div>
                    <!---- row infolog------------>
                    <div class="row infolog">
                        <div class="col-20">
                            <label for="fname">Customer Name : </label>
                        </div>
                        <div class="col-25">
                            <input type="text" id="fname" name="firstname" placeholder="">
                        </div>
                    </div>
                    <!---- row infolog------------>
                    <div class="row infolog">
                        <div class="col-20">
                            <label for="lname">Mobile : </label>
                        </div>
                        <div class="col-25">
                            <input type="text" id="fname" name="firstname" placeholder="">
                        </div>
                    </div>
                    <!---- row infolog------------>
                    <div class="row infolog">
                        <div class="col-20">
                            <label for="fname">Email : </label>
                        </div>
                        <div class="col-25">
                            <input type="text" id="fname" name="firstname" placeholder="larasun@gmail.com">
                        </div>
                    </div>
                    <!---- row infolog------------>
                    <div class="row infolog">
                        <div class="col-20">
                            <label for="lname">Arrival Date : </label>
                        </div>
                        <div class="col-25">
                            <input type="text" id="lname" name="lastname" placeholder="">
                        </div>
                        
                    </div>
                    <!---- row infolog------------>
                    <div class="row infolog">
                        <div class="col-20">
                            <label for="lname">Departure Date : </label>
                        </div>
                        <div class="col-25">
                            <input type="text" id="lname" name="lastname" placeholder="">
                        </div>
                    </div>
                    <!---- row infolog------------>
                   
                    <div class="container-fluid" id="infodivider"> </div>
                    <div class="row infolog">
                        <div class="col-20">
                            <label for="fname">Venue Capacity : </label>
                        </div>
                        <div class="col-25">
                            <input type="text" id="fname" name="firstname" placeholder="">
                        </div>
                    </div>
                    <div class="row infolog">
                        <div class="col-20">
                            <label for="fname">Expected Guest : </label>
                        </div>
                        <div class="col-25">
                            <input type="text" id="fname" name="firstname" placeholder="">
                        </div>
                    </div>
                    <!---- row infolog------------>
                    <div class="row infolog">
                        <div class="col-20">
                            <label for="lname">Services : </label>
                        </div>
                        <div class="col-25">
                            <select id="country" name="country">
                                <option value="australia">Catering</option>
                                <option value="canada">Veg</option>
                                <option value="usa">Non-veg</option>
                            </select>
                        </div>
                    </div>
                    <!---- row infolog------------>

                    <div class="row infolog">
                        <div class="col-20">
                            <label for="fname">Payment Status: </label>
                        </div>
                        <div class="col-25">
                            <input type="text" id="fname" name="firstname" placeholder="">
                        </div>
                    </div>
                    <!---- row infolog------------>
                    <div class="row infolog">
                        <div class="col-20">
                            <label for="fname">Payment Type : </label>
                        </div>
                        <div class="col-25">
                            <input type="text" id="fname" name="firstname" placeholder="">
                        </div>
                    </div>
                    <!---- row infolog------------>
                   

  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="okfilter" data-dismiss="modal">Ok</button>
       
      </div>
</div>
  </div>
</div>
<!-----------------------filter pop up -------------------------------------------------------->
<!-------------------------------------View Modal -------------------------------->
<div class="modal fade" id="viewpopModal" tabindex="-1" role="dialog" aria-labelledby="viewpopModal" aria-hidden="true">
  <div class="modal-dialog" id="viewformdash" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">View Booking Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
      <div class="row infolog">
                            <div class="col-20">
                                <label for="fname">Booking ID : </label>
                            </div>
                            <div class="col-25">
                                <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    style="border:none" value="Aeos500">
                            </div>
                        </div>
                        <!---- row infolog------------>
                        <div class="row infolog">
                            <div class="col-20">
                                <label for="lname">Room ID : </label>
                            </div>
                            <div class="col-25">
                            <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    style="border:none" value="B502">
                            </div>
                        </div>
                        <!---- row infolog------------>
                        <div class="row infolog">
                            <div class="col-20">
                                <label for="fname">Venue Name : </label>
                            </div>
                            <div class="col-25">
                                <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    style="border:none" value="Party">
                            </div>
                        </div>
                        <!---- row infolog------------>
                        <div class="row infolog">
                            <div class="col-20">
                                <label for="fname">Customer Name : </label>
                            </div>
                            <div class="col-25">
                                <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    style="border:none" value="Shirish Sharma">
                            </div>
                        </div>
                        <!---- row infolog------------>
                        <div class="row infolog">
                            <div class="col-20">
                                <label for="fname">Mobile : </label>
                            </div>
                            <div class="col-25">
                                <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    style="border:none" value="9008065432">
                            </div>
                        </div>
                        <!---- row infolog------------>
                        <div class="row infolog">
                            <div class="col-20">
                                <label for="fname">Email : </label>
                            </div>
                            <div class="col-25">
                                <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    style="border:none" value="sagarsri@gmail.com">
                            </div>
                        </div>
                        <!---- row infolog------------>
                        <div class="row infolog">
                            <div class="col-20">
                                <label for="fname">Date From : </label>
                            </div>
                            <div class="col-25">
                                <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    style="border:none" value="22/10/2019 12:15 am">
                            </div>
                        </div>
                        <!---- row infolog------------>
                        <div class="row infolog">
                            <div class="col-20">
                                <label for="fname">Date To : </label>
                            </div>
                            <div class="col-25">
                                <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    style="border:none" value="24/10/2019 12:15 am">
                            </div>
                        </div>
                        <!---- row infolog------------>
                        <div class="row infolog">
                            <div class="col-20">
                                <label for="fname">Total Days : </label>
                            </div>
                            <div class="col-25">
                                <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    style="border:none" value="2 Days">
                            </div>
                        </div>
                        <!---- row infolog------------>
                        <div class="row infolog">
                            <div class="col-20">
                                <label for="fname">Service Chosen : </label>
                            </div>
                            <div class="col-25">
                                <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    style="border:none" value="Birthday PArty">
                            </div>
                        </div>
                        <!---- row infolog------------>
                        <div class="row infolog">
                            <div class="col-20">
                                <label for="fname">Delivery Address : </label>
                            </div>
                            <div class="col-25">
                                <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    style="border:none" value="232/B Wing, Ss CHS, sector 14, Koparkhairane, Navi Mumbai 400709">
                            </div>
                        </div>
                        <!---- row infolog------------>
                        <div class="row infolog">
                            <div class="col-20">
                                <label for="fname">Revenue(SAR) : </label>
                            </div>
                            <div class="col-25">
                                <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    style="border:none" value="SAR 100 per day">
                            </div>
                        </div>
                        <!---- row infolog------------>
                        <div class="row infolog">
                            <div class="col-20">
                                <label for="fname">Payment Status<br>(Paid/Unpaid) : </label>
                            </div>
                            <div class="col-25">
                                <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    style="border:none" value="20% paid online balance pending with auto debit permission">
                            </div>
                        </div>
                        <!---- row infolog------------>
                        <div class="row infolog">
                            <div class="col-20">
                                <label for="fname">Payment Type : </label>
                            </div>
                            <div class="col-25">
                                <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    style="border:none" value="Auto Debit">
                            </div>
                        </div>
                        <!---- row infolog------------>
                        <div class="row infolog">
                            <div class="col-20">
                                <label for="fname">Note(if Customer has written while bookings) : </label>
                            </div>
                            <div class="col-25">
                                <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    style="border:none" value="Auto Debit">
                            </div>
                        </div>
                        <!---- row infolog------------>
                        <div class="row infolog">
                            <div class="col-20">
                                <label for="fname">Expected guests(Customer given) : </label>
                            </div>
                            <div class="col-25">
                                <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    style="border:none" value="150 person">
                            </div>
                        </div>
                        <!---- row infolog------------>
                        <div class="row infolog">
                            <div class="col-20">
                                <label for="fname">Attached Iqama/Passport : </label>
                            </div>
                            <div class="col-25">
                                <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    style="border:none" value="ACER123U3">
                            </div>
                        </div>
                        <!---- row infolog------------>


  </form>
      </div>
     <!---- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="okfilter" data-dismiss="modal">Ok</button>
       
      </div>---->
</div>
  </div>
</div>
<!-----------------------View pop up -------------------------------------------------------->
<div class="tab-pane fade" id="pills-history" role="tabpanel" aria-labelledby="pills-history-tab">
<div id="historydropdown" class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Month: August
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Month: July</a>
    <a class="dropdown-item" href="#">Month: July</a>
    <a class="dropdown-item" href="#">Month: July</a>
  </div>
</div>
<div class="dashboardright">
            <table class="table table-xs-12 table-sm-12 table-md-12">
               <thead class="table-color-head">
                  <tr>
                     <th scope="col">Booking ID</th>
                     <th scope="col">Room ID </th>
                     <th scope="col">Name</th>
                     <th scope="col">Email</th>
                     <th scope="col">Arrive</th>
                     <th scope="col">Depart</th>
                     <th scope="col">Venue</th>
                 
                  </tr>
               </thead>
               <tbody class="table-hover">
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>johndeo@gmail.com</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>200</td>
                   
                     <td class="bg-white-booking"><a data-toggle="modal" data-target="#viewpopModal" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>johndeo@gmail.com</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>200</td>
                   
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>johndeo@gmail.com</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>200</td>
                  
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>johndeo@gmail.com</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>200</td>
                    
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>johndeo@gmail.com</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>200</td>
                    
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                     
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>johndeo@gmail.com</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>200</td>
          
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>johndeo@gmail.com</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>200</td>
                      
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>johndeo@gmail.com</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>200</td>
                     
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>johndeo@gmail.com</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>200</td>
                     
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>johndeo@gmail.com</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>200</td>
                     
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>johndeo@gmail.com</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>200</td>
                     
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>johndeo@gmail.com</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>200</td>
          
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                  </tr>
               </tbody>
            </table>
</div><!--------------end of booking ---------------------------------->
<div class="row markdashboard">
  <span class="totalrev">Total Revenue : 12100</span>
  <span class="totalcom">Total Commision : 1552 </span>
</div>
</div>
<div class="tab-pane fade" id="pills-cancel" role="tabpanel" aria-labelledby="pills-cancel-tab">
<div class="dashboardright">
            <table class="table table-xs-12 table-sm-12 table-md-12">
               <thead class="table-color-head">
                  <tr>
                     <th scope="col">Booking ID</th>
                     <th scope="col">Room ID </th>
                     <th scope="col">Name</th>
                     <th scope="col">Phone</th>
                     <th scope="col">Cancelled Date & Time</th>
                     <th scope="col">Cancelled By </th>
                     <th scope="col">Cancelled Reason</th>
                 
                  </tr>
               </thead>
               <tbody class="table-hover">
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>90080 63462</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>cancelled by you</td>
                     <td>Personal</td>
                   
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>90080 63462</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>cancelled by you</td>
                     <td>Personal</td>
                   
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>90080 63462</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>cancelled by customer</td>
                     <td>Personal</td>
                  
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>90080 63462</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>cancelled by you</td>
                     <td>Personal</td>
                    
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>90080 63462</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>cancelled by you</td>
                     <td>Personal</td>
                    
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>90080 63462</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>cancelled by vendor</td>
                     <td>function postponded</td>
          
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>90080 63462</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>cancelled by you</td>
                     <td>function postponded</td>
                      
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>90080 63462</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>cancelled by you</td>
                     <td>Personal</td>
                     
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>90080 63462</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>cancelled by you</td>
                     <td>Personal</td>
                    
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>90080 63462</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>cancelled by you</td>
                     <td>Personal</td>
                     
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>90080 63462</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>cancelled by event organiser</td>
                     <td>Personal</td>
                  
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>90080 63462</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>cancelled by you</td>
                     <td>Personal</td>
                     
                  </tr>
               </tbody>
            </table>
</div><!--------------end of booking ---------------------------------->
</div>
</div>
</div><!--------------end of booking tabs ---------------------------->
</div><!------------------end of container-fluid ------------------------------>
  <div class="tab-pane fade" id="v-pills-venues" role="tabpanel" aria-labelledby="v-pills-venues-tab">
      <div class="dashvendortop">
          <a class="addvenuedash" href="#"> Add </a>
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
                     <th scope="col">Services</th>
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
                     <td>Catering</td>
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
                     <td>AC</td>
                     <td>lighting</td>
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
                     <td>Sound</td>
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
                     <td>Catering</td>
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
                     <td>lighting</td>
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
                     <td>Catering</td>
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
                     <td>Catering</td>
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
                     <td>Catering</td>
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
                     <td>Catering</td>
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
                     <td>Catering</td>
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
                     <td>Catering</td>
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
                     <td>Catering</td>
                     <td>+616-783437843</td>
                     <td>5% </td>
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle" style="font-size:20px;color:red"></i></a></td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class='fas fa-toggle-on' style='font-size:20px;color:#66b85d'></i></a></td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                     <td class="bg-white-booking"><a id="myaddexpress" href="#"><i class='fas fa-certificate' style='font-size:20px;color:#f09c18'></i></a></td>
                  </tr>
               </tbody>
            </table>
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
      <div class="modal-footer">
        <button type="button" class="cancelmodalbtn" data-dismiss="modal">Update</button>
        
      </div>
    </div>
  </div>
</div>
<!-------------------Delete Modal -------------------------------------->
</div><!--------------end of booking ----------------------------------> 

  </div><!-----------pills-amenities-tab ----------------------------->
        
</div><!----------------------------container-fluid-------------------------->
</div><!--------------v-pills-books -------------------------------->

      <!------- body end-------->
@include('shared/footer')
   
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
     
     
  