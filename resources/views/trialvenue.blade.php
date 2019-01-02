
@include('header')

      <!------- body start--------> 
      <div class="container-fluid center">
         <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
               <div class="collapse navbar-collapse" id="myNavbar">
                  <!-- <ul class="nav navbar-nav navbar-center"> -->
                  <ul class="second-nav">
                     <li class="venue-one"><a class="active-one" href="#signin"> Current Bookings </a></li>
                     <li class="venue-one"><a class="signtwo" href="#signout"> Booking History</a></li>
                     <li class="venue-one" style="float:right"><a class="signthree" id="myBtn" href="#filter">Filter</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <div class="vertical-menu">
               <a href="#" class="active">Bookings</a>
               <a href="#">Venue</a>
               <a href="#">Services</a>
               <a href="#">Terms & Policies</a>
               <a href="#">Profile</a>
            </div>
         </div>
         <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
            <table class="table table-xs-12 table-sm-12 table-md-12">
               <thead class="table-color-head">
                  <tr>
                     <th scope="col">Booking ID</th>
                     <th scope="col">Room ID</th>
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
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:#dd801c">mode_edit</i></a></td>
                     <td class="bg-white-booking"><a id="myCode" href="#"><i class="material-icons" style="font-size:20px;color:#24b3fd">account_balance_wallet</i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:green">check_circle</i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="material-icons" style="font-size:20px;color:red">cancel</i></a></td>
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>johndeo@gmail.com</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>200</td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:#dd801c">mode_edit</i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:#24b3fd">account_balance_wallet</i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:green">check_circle</i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:red">cancel</i></a></td>
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>johndeo@gmail.com</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>200</td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:#dd801c">mode_edit</i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:#24b3fd">account_balance_wallet</i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:green">check_circle</i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:red">cancel</i></a></td>
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>johndeo@gmail.com</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>200</td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:#dd801c">mode_edit</i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:#24b3fd">account_balance_wallet</i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:green">check_circle</i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:red">cancel</i></a></td>
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>johndeo@gmail.com</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>200</td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:#dd801c">mode_edit</i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:#24b3fd">account_balance_wallet</i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:green">check_circle</i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:red">cancel</i></a></td>
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>johndeo@gmail.com</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>200</td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:#dd801c">mode_edit</i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:#24b3fd">account_balance_wallet</i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:green">check_circle</i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:red">cancel</i></a></td>
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>johndeo@gmail.com</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>200</td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:#dd801c">mode_edit</i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:#24b3fd">account_balance_wallet</i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:green">check_circle</i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:red">cancel</i></a></td>
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>johndeo@gmail.com</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>200</td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:#dd801c">mode_edit</i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:#24b3fd">account_balance_wallet</i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:green">check_circle</i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:red">cancel</i></a></td>
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>johndeo@gmail.com</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>200</td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:#dd801c">mode_edit</i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:#24b3fd">account_balance_wallet</i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:green">check_circle</i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:red">cancel</i></a></td>
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>johndeo@gmail.com</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>200</td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:#dd801c">mode_edit</i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:#24b3fd">account_balance_wallet</i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:green">check_circle</i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:red">cancel</i></a></td>
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>johndeo@gmail.com</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>200</td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:#dd801c">mode_edit</i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:#24b3fd">account_balance_wallet</i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:green">check_circle</i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:red">cancel</i></a></td>
                  </tr>
                  <tr>
                     <th scope="row">MTNA04879564</th>
                     <td>201</td>
                     <td>John Deo</td>
                     <td>johndeo@gmail.com</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>28/July/2018, 12:00 PM</td>
                     <td>200</td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:#dd801c">mode_edit</i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:#24b3fd">account_balance_wallet</i>				  
                        </a>
                     </td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:green">check_circle</i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="material-icons" style="font-size:20px;color:red">cancel</i></a></td>
                  </tr>
               </tbody>
            </table>
            <div class="row"></div>
			<!------------------------------ Cancel Booking ----------------------------------->
			<div class="row"></div>
            <!-- Cancel Booking -->
            <div class="modal fade" id="myCancelbooking">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <!-- Modal Header -->
                     <div class="modal-header">
                        <center>
                        <h3 class="modal-title">Cancel Booking</h3>
                        <center>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                     </div>
                     <!-- Modal body -->
                     <div class="row">
                        <h6 style="text-align:center"> Please mention the reson of cancelation.</h6>
                        <div class="form-group">
                           <div class="col-lg-10 col-md-10 col-sm-6">
                              <center>
                              <textarea class = "form-control" id="change-text" placeholder="Type here" rows = "4"></textarea>
                              <center>
                           </div>
                        </div>
                     </div>
                     <!-- Modal footer -->
                     <div class="modal-footer">
                        <center>
                        <button type="button" class="btn btn-lg-12 custom-button-cancel" data-dismiss="modal">update</button>
                        <center>
                     </div>
                  </div>
               </div>
            </div>
		<!------------------------------ Cancel Booking ----------------------------------->	
			<!------------------------------ Payment Details ----------------------------------->
																	 <div class="modal fade" id="myPaymentdetails">
											   <div class="modal-dialog">
												  <div class="modal-content">
													 <!-- Modal Header -->
													 <div class="modal-header">
														<center>
														<h3 class="modal-title">Payment Details</h3>
														<center>
														<button type="button" class="close" data-dismiss="modal">&times;</button>
													 </div>
													 <!-- Modal body -->
													 <div class="row content-payment">
														<div class="form-group">
														   <label class="control-label col-sm-3" for="email">Payment Type:</label>
														   <div class="col-sm-6">
															  <select class = "form-control">
																 <option>Cash</option>
																 <option>+967</option>
																 <option>+968</option>
																 <option>+954</option>
																 <option>+969</option>
															  </select>
														   </div>
														</div>
														<div class="row"> </div>
														<div class="form-group">
														   <label class="control-label col-sm-3" for="email">Payment Status:</label>
														   <div class="col-sm-6">
															  <select class = "form-control" id="bg-orange">
																 <option>Pending</option>
																 <option>+967</option>
																 <option>+968</option>
																 <option>+954</option>
																 <option>+969</option>
															  </select>
														   </div>
														</div>
													 </div>
													 <!-- Modal footer -->
													 <div class="modal-footer">
														<center>
														<button type="button" class="btn btn-lg-12 custom-button-cancel" data-dismiss="modal">Confirm</button>
														<center>
													 </div>
												  </div>
											   </div>
											</div>
			<!------------------------------ Payment Details ----------------------------------->
            <!------------------------------ Booking code----------------------------------->			
			 <div class="modal fade" id="myBookingcode">
																	<div class="modal-dialog">
																	  <div class="modal-content">
																	  
																		<!-- Modal Header -->
																		<div class="modal-header">
																		  <center><h3 class="modal-title">Booking Code</h3><center>
																		  <button type="button" class="close" data-dismiss="modal">&times;</button>
																		</div>
																		
																		<!-- Modal body -->
																		<div class="modal-body">
																		  
																		  <h6 style="text-align:center"> Please enter booking code provided by customer in order to 
																		  close the booking. </h6>
																		  <center>
																		  <div class="panel panel-default panel-body custom-code">
																			_____ _____ _____ _____
																		  </div>
																		  <center>
																		</div>
																		
																		<!-- Modal footer -->
																		<div class="modal-footer">
																		  <center><button type="button" class="btn btn-lg-12 custom-button" data-dismiss="modal" id="payment_booking">submit</button><center>
																		</div>
																		
																	  </div>
																	</div>
																  </div>
																  
            <!------------------------------ Booking Code----------------------------------->			
            <!------------------------------ Filter Booking ----------------------------------->
            <div class="modal fade" id="myFilter">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <!-- Modal Header -->
                     <div class="modal-header">
                        <center>
                        <h3 class="modal-title">Filter</h3>
                        <center>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                     </div>
                     <!-- Modal body -->
                     <div class="row content-payment">
                        <div class="form-group">
                           <label class="control-label col-sm-4" for="venuename">Booking ID:</label>
                           <div class="col-sm-6">
                              <input type="text" class="form-control" id="venuename" placeholder="Enter Venue Name" name="venue">
                           </div>
                        </div>
                        <div class="row"> </div>
                        <div class="form-group">
                           <label class="control-label col-sm-4">Payment Status:</label>
                           <div class="col-sm-6">
                              <select class = "form-control">
                                 <option>205</option>
                                 <option>967</option>
                                 <option>+68</option>
                                 <option>54</option>
                                 <option>+969</option>
                              </select>
                           </div>
                        </div>
                        <div class="row"></div>
                        <div class="form-group">
                           <label class="control-label col-sm-4" for="venuename">Customer Name:</label>
                           <div class="col-sm-6">
                              <input type="text" class="form-control" id="venuename" placeholder="Enter Venue Name" name="venue">
                           </div>
                        </div>
                        <div class="row"> </div>
                        <div class="form-group">
                           <label class="control-label col-sm-4" for="venuename">Mobile:</label>
                           <div class="col-sm-6">
                              <input type="text" class="form-control" id="venuename" placeholder="Enter Venue Name" name="venue">
                           </div>
                        </div>
                        <div class="row"> </div>
                        <div class="form-group">
                           <label class="control-label col-sm-4" for="venuename">Email:</label>
                           <div class="col-sm-6">
                              <input type="text" class="form-control" id="venuename" placeholder="Enter Venue Name" name="venue">
                           </div>
                        </div>
                        <div class="row"> </div>
                        <div class="form-group">
                           <label class="control-label col-sm-4" for="venuename">Arrival Date:</label>
                           <div class="col-sm-6">
                              <input type="text" class="form-control" id="venuename" placeholder="Enter Venue Name" name="venue">
                           </div>
                        </div>
                        <div class="row"> </div>
                        <div class="form-group">
                           <label class="control-label col-sm-4" for="venuename">Departure Date:</label>
                           <div class="col-sm-6">
                              <input type="text" class="form-control" id="venuename" placeholder="Enter Venue Name" name="venue">
                           </div>
                        </div>
                        <div class="row"> </div>
                        <div class="form-group">
                           <label class="control-label col-sm-4" for="venuename">Venue Capacity:</label>
                           <div class="col-sm-6">
                              <input type="text" class="form-control" id="venuename" placeholder="Enter Venue Name" name="venue">
                           </div>
                        </div>
                        <div class="row"> </div>
                        <div class="form-group">
                           <label class="control-label col-sm-4" for="venuename">Expected Guest:</label>
                           <div class="col-sm-6">
                              <input type="text" class="form-control" id="venuename" placeholder="Enter Venue Name" name="venue">
                           </div>
                        </div>
                        <div class="row"> </div>
                        <div class="form-group">
                           <label class="control-label col-sm-4" for="email">Payment Status:</label>
                           <div class="col-sm-6">
                              <select class = "form-control">
                                 <option>Catering</option>
                                 <option>+967</option>
                                 <option>+968</option>
                                 <option>+954</option>
                                 <option>+969</option>
                              </select>
                           </div>
                        </div>
                        <div class="row"> </div>
                        <div class="form-group">
                           <label class="control-label col-sm-4" for="venuename">Payment Status:</label>
                           <div class="col-sm-6">
                              <input type="text" class="form-control" id="venuename" placeholder="Enter Venue Name" name="venue">
                           </div>
                        </div>
                        <div class="row"> </div>
                        <div class="form-group">
                           <label class="control-label col-sm-4" for="venuename">Payment Type:</label>
                           <div class="col-sm-6">
                              <input type="text" class="form-control" id="venuename" placeholder="Enter Venue Name" name="venue">
                           </div>
                        </div>
                     </div>
                     <!-- Modal footer -->
                     <div class="modal-footer">
                        <center>
                        <button type="button" class="btn btn-lg-12 custom-button-cancel" data-dismiss="modal">Ok</button>
                        <center>
                     </div>
                  </div>
               </div>
            </div>
           <!------------------------------ Filter Booking ----------------------------------->
         </div>
      </div>
      @include('footer')
      <!------- body end-------->

      <!-------modal pop-up-------->
      </script>
      <script><!------inner page-Tabs-------->
         $(document).ready(function(){
		 $("#myCancel").click(function(){
         $("#myCancelbooking").modal();
		 });
		 $("#myCode").click(function(){
         $("#myBookingcode").modal();
		 });
		 $("#myBookingcode #payment_booking").click(function(){
         $("#myPaymentdetails").modal();
		 });
         $("#myBtn").click(function(){
         $("#myFilter").modal();
         
         });
          $(".nav-tabs a").click(function(){
           $(this).tab('show');
         });
         });
      </script>
      <script><!-------home page Tabs-------->
         $(document).ready(function(){
             $(".nav-tabs a").click(function(){
                 $(this).tab('show');
             });
             $('.nav-tabs a').on('shown.bs.tab', function(event){
                 var x = $(event.target).text();         // active tab
                 var y = $(event.relatedTarget).text();  // previous tab
                 $(".act span").text(x);
                 $(".prev span").text(y);
             });
         });
      </script>
      <script><!-------banner carousel-showmanymoveone-------->
         (function(){
           $('.carousel-showmanymoveone .item').each(function(){
             var itemToClone = $(this);
         
             for (var i=1;i<6;i++) {
               itemToClone = itemToClone.next();
         
               // wrap around if at end of item collection
               if (!itemToClone.length) {
                 itemToClone = $(this).siblings(':first');
               }
         
               // grab item, clone, add marker class, add to collection
               itemToClone.children(':first-child').clone()
                 .addClass("cloneditem-"+(i))
                 .appendTo($(this));
             }
           });
         }());
               
      </script>
   </body>
</html>