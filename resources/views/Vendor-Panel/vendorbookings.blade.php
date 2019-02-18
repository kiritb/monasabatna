

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
  <div class="col-md-8 searchaddon"><!--------------search addon ---------------------->
  <div class="search-container">
  <form class="navbar-form" role="search">
    <div class="input-group add-on">
      <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
      <div class="input-group-btn">
      <button type="submit"><i class="fa fa-search"></i></button>
      </div>
    </div>
  </form>
  </div>
</div><!--------------search addon ---------------------->
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
                     <td class="bg-white-booking"><a data-toggle="modal" data-target="#viewbookingsmodal" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
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
<!-------------------------------------filter Modal ------------------------>
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
<!-----------------------filter pop up --------------------------------------------------------><!-------------------------------------View Bookings Modal -------------------------------->
<div class="modal fade" id="viewbookingsmodal" tabindex="-1" role="dialog" aria-

labelledby="mybookingsviewmodalLabel" aria-hidden="true">
  <div id="viewvenuebk" class="modal-dialog modal-xl">
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
  <div class="form-group col-md-1">
      <label for="inputEmail4">Room ID :</label>
      <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                     value="B502">
    </div><!-------------form-group -------------------->
    <div class="form-group col-md-2">
      <label for="inputEmail4">Booking ID :</label>
      <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                     value="B502">
    </div><!-------------form-group -------------------->
    
    <div class="form-group col-md-2">
      <label for="inputPassword4">Venue Name :</label>
      <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    value="Party">
    </div>
    <div class="form-group col-md-2">
    <label for="inputAddress">Customer Name :</label>
    <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                     value="Shirish Sharma">
  </div>
  <div class="form-group col-md-2">
    <label for="inputAddress2">Mobile:</label>
    <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    value="9008065432">
  </div>
  
  <div class="form-group col-md-2">
    <label for="inputAddress2">Email :</label>
    <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    value="sundarma@gmail.com">
  </div>
  
  </div><!--------------end of row ---------------------------------->
  <div class="form-row">
  <div class="form-group col-md-2">
    <label for="inputAddress2">Date From :</label>
    <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    value="22/10/2019 12:15 am">
  </div>
    <div class="form-group col-md-2">
      <label for="inputPassword4">Date To :</label>
      <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                     value="24/10/2019 12:15 am">
    </div>
    <div class="form-group col-md-2">
    <label for="inputAddress">Total Days : </label>
    <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                     value="2 Days">
  </div>
  <div class="form-group col-md-2">
    <label for="inputAddress2">Service Chosen : </label>
    <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                     value="Birthday Party">
  </div>
  <div class="form-group col-md-2">
    <label for="inputAddress2">Delivery Address : </label>
    <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                     value="India">
  </div>
  
  
  </div><!----------------------end of row --------------------------->
  <div class="form-row">
  <div class="form-group sttimeven">
    <label for="inputAddress2">Revenue (SAR) :</label>
    <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                     value="SAR 100 per day">
  </div>
  <div class="form-group sttimeven">
    <label for="inputAddress2">Payment Status (Paid/Unpaid) :</label>
    <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    value="20% paid online balance pending with auto debit permission">
  </div>
    <div class="form-group col-md-2">
      <label for="inputPassword4">Payment Type :</label>
      <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                     value="Auto Debit">
    </div>
       <div class="form-group col-md-3">
    <label for="inputAddress2">Attached Iqama / Passport : </label>
    <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                     value="150 person">
  </div>
  </div><!----------------------end of row --------------------------->
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Note(if customer has written while Booking) : </label>
      <input type="text" class="form-control" id="Express deal discout is offered only for seasonal period"
      value="Auto Transaction">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Expected guests (Customer given) : </label>
      <input type="text" class="form-control" id="Express deal discout is offered only for seasonal period"
      value="thousand guest">
    </div>
    
  </div>
</form> 

</div>
  </div>
</div>
</div>
<!-----------------------View Bookings pop up -------------------------------------------------------->

<div class="tab-pane fade" id="pills-history" role="tabpanel" aria-labelledby="pills-history-tab">
<div id="historydropdown" class="dropdown">
<input id="myMonthPicker" type="text" placeholder="Pick a month"/>

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
</div>
 
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
     
    <script><!------Month Picker-------->

$(document).ready(function()
{   
    $("#myMonthPicker").datepicker({
        dateFormat: 'MM yy',
        viewMode: "months",
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        
        onClose: function(dateText, inst) {
            var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
            var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
            $(this).datepicker('setDate', new Date(year, month));
            $(this).datepicker('refresh');
           $(this).val($.datepicker.formatDate('MM yy', new Date(year, month)));
        }
    });
    $("#bounddatepicker").datepicker({
    maxValue: "14/02/2019"
  });
    // $("#myMonthPicker").focus(function () {
    //     $(".ui-datepicker-calendar").hide();
    //     $("#ui-datepicker-div").position({
    //         my: "center top",
    //         at: "center bottom",
    //         of: $(this)
    //     });
    // });
});
</script> 