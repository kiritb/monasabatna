
   <body>
 
      <!------- body start--------> 
      <div class="container">
         <!------- collapse navbar start-------->
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="collapse navbar-collapse" id="myNavbar">
                  <!-- <ul class="nav navbar-nav navbar-center"> -->
                  <ul class="second-nav">
                     <li class="venue-one"><a class="signtwo" href="#signin"> My Bookings </a></li>
                     <li class="venue-one"><a class="active-one" href="#signout"> Booking History</a></li>
                    
                  </ul>
               </div>
            </div>
         <!------- collapse navbar end-------->
         <label> </label>
         <!--------- tab container begin ------------------------->
         <ul class="nav nav-tabs">
            <li class="active" id="activehome"><a href="#home">Venue</a></li>
            <li><a href="#menu1">Suppliers</a></li>
            <li><a href="#menu2">Event Organisers   <span class="badge">2</span></a></li>
            <li><a href="#menu3">Events</a></li>
         </ul>
         <!----------------------- tab container end -------------------->
		    <!------------------------------ Add to review ----------------------------------->
            <div class="modal fade" id="myreview">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <!-- Modal Header -->
                     <div class="modal-header">
                        <center>
                        <h3 class="modal-title">Alert</h3>
                        <center>
                     </div>
                     <!-- Modal body -->
					 <div class="row">
					 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
					 <label>Responsiveness</label>
					 </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
            </div>
			</div>
					 <div class="row">
					 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
					 <label>Quality</label>
					 </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
            </div>
			</div>
					 <div class="row">
					 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
					 <label>Availability</label>
					 </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
            </div>
			</div>
					 <div class="row">
					 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
					 <label>Value per money</label>
					 </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
            </div>
			</div>
                     <!-- Modal footer -->
                     <div class="modal-footer">
                        <button type="button" class="btn btn-lg-12 custom-button-cancel" data-dismiss="modal">Submit</button>
                     </div>
                  </div>
               </div>
            </div>
            <!------------------------------ Add to review ----------------------------------->
         <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
               <br>
               <div class="container" id="customer-profile-bg">
                  <div class="row">
                     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <img src="<?php echo base_url();?>assets/munasabatna_template/images/customer-profile11.jpg" alt="Mountains" style="width:300px; height:400px margin-left:10px">
                     </div>
                     <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 cust-prof-text">
                        <div class="row">
                           <h3 class="go-left">La Fontaine La Plage Resort</h3>
                           <h4 class="go-right">Booking Number:MTNA0789456<BR>
                              Booking Date:July8,2018
                           </h4>
                        </div>
                        <address><i class="material-icons" style="font-size:23px">place</i> Address:123 XYZRoad, Saudi Arabia <a href="#">Show in map</a></address>
                        <datetime><i class='fas fa-calendar-alt' style='font-size:18px'></i> From:July 16,2018 11:30 AM <a href="#">Change </a>          To:July 16,2018 11:30 AM <a href="#">Change </a></datetime>
                        <br><br>
                        <div><i class='far fa-clock' style='font-size:20px'></i> 5 Days 4 Nights</div>
                        <br>
                        <div> <span class="color-change">Services:</span>Catering, Lightning and Sound</div>
                        <br>
                        <div> <span class="color-change">Total Price:</span>SAR.756</div>
                        <br>
                        <a href="#"> Paid at the time of Booking:SAR.151.2</a>
                        <div class="row"> <span class="color-change"> Paid By Cash:</span>SAR.604.8
                           <button style="float:right" type="submit" id="myreviewsend" class="btn btn-default.btn-xs" >Write a Review</button>
                        </div>
                     </div>
                  </div>
               </div>
               <br>
               <br>
            </div>
            <div id="menu1" class="tab-pane fade">
                              <div class="container" id="customer-profile-bg">
                  <div class="row">
                     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <img src="<?php echo base_url();?>assets/munasabatna_template/images/customer-profile11.jpg" alt="Mountains" style="width:300px; height:400px margin-left:10px">
                     </div>
                     <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 cust-prof-text">
                        <div class="row">
                           <h3 class="go-left">La Fontaine La Plage Resort</h3>
                           <h4 class="go-right">Booking Number:MTNA0789456<BR>
                              Booking Date:July8,2018
                           </h4>
                        </div>
                        <address><i class="material-icons" style="font-size:23px">place</i> Address:123 XYZRoad, Saudi Arabia <a href="#">Show in map</a></address>
                        <datetime><i class='fas fa-calendar-alt' style='font-size:18px'></i> From:July 16,2018 11:30 AM <a href="#">Change </a>          To:July 16,2018 11:30 AM <a href="#">Change </a></datetime>
                        <br><br>
                        <div><i class='far fa-clock' style='font-size:20px'></i> 5 Days 4 Nights</div>
                        <br>
                        <div> <span class="color-change">Services:</span>Catering, Lightning and Sound</div>
                        <br>
                        <div> <span class="color-change">Total Price:</span>SAR.756</div>
                        <br>
                        <a href="#"> Paid at the time of Booking:SAR.151.2</a>
                        <div class="row"> <span class="color-change"> Paid By Cash:</span>SAR.604.8
                           <button style="float:right" type="submit" class="btn btn-default.btn-xs" >Write a Review</button>
                        </div>
                     </div>
                  </div>
               </div>
               <br>
               <div class="container" id="customer-profile-bg">
                  <div class="row">
                     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <img src="<?php echo base_url();?>assets/munasabatna_template/images/customer-profile11.jpg" alt="Mountains" style="width:300px; height:400px margin-left:10px">
                     </div>
                     <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 cust-prof-text">
                        <div class="row">
                           <h3 class="go-left">La Fontaine La Plage Resort</h3>
                           <h4 class="go-right">Booking Number:MTNA0789456<BR>
                              Booking Date:July8,2018
                           </h4>
                        </div>
                        <address><i class="material-icons" style="font-size:23px">place</i> Address:123 XYZRoad, Saudi Arabia <a href="#">Show in map</a></address>
                        <datetime><i class='fas fa-calendar-alt' style='font-size:18px'></i> From:July 16,2018 11:30 AM <a href="#">Change </a>          To:July 16,2018 11:30 AM <a href="#">Change </a></datetime>
                        <br>

                        <br>
                        <div> <span class="color-change">Services:</span>Catering, Lightning and Sound</div>
                        <br>
                        <div> <span class="color-change">Total Price:</span>SAR.756</div>
						<br>
                        <div> <span class="color-total">Paid Amount:SAR:151.2</span></div>
                        <br>
                        <a class="cancel-paying-booking" href="#"> Cancelled by you</a>
                     </div>
                  </div>
               </div>
            </div>
            <div id="menu2" class="tab-pane fade">
                                             <div class="container" id="customer-profile-bg">
                  <div class="row">
                     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <img src="<?php echo base_url();?>assets/munasabatna_template/images/customer-profile11.jpg" alt="Mountains" style="width:300px; height:400px margin-left:10px">
                     </div>
                     <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 cust-prof-text">
                        <div class="row">
						<h3 class="go-left">Party Zone </h3><br><br>
                           <h5 class="go-left"><b>Theme:Flower de-rose De</b></h5>
                           <h4 class="go-right">Booking Number:MTNA0789456<BR>
                              Booking Date:July8,2018
                           </h4>
                        </div>
                        <address><i class="material-icons" style="font-size:23px">place</i> Address:123 XYZRoad, Saudi Arabia <a href="#">Show in map</a></address>
                        <datetime><i class='fas fa-calendar-alt' style='font-size:18px'></i> From:July 16,2018 11:30 AM <a href="#">Change </a>          To:July 16,2018 11:30 AM <a href="#">Change </a></datetime>
                        <br><br>
                        <div><i class='far fa-clock' style='font-size:20px'></i> 5 Days 4 Nights</div>
                        <br>
                        <div> <span class="color-change">Services:</span>Catering, Lightning and Sound</div>
                        <br>
                        <a href="#"> Paid at the time of Booking:SAR.151.2</a>
                           <button style="float:right" type="submit" class="btn btn-default.btn-xs">Book Now</button>
                        </div>
                     </div>
                  </div>
               </div>
               <br>
			    <div class="container" id="customer-profile-bg">
                  <div class="row">
                     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <img src="<?php echo base_url();?>assets/munasabatna_template/images/customer-profile11.jpg" alt="Mountains" style="width:300px; height:400px margin-left:10px">
                     </div>
                     <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 cust-prof-text">
                        <div class="row">
						<h3 class="go-left">Party Zone </h3><br><br>
                           <h5 class="go-left"><b>Theme:Flower de-rose De</b></h5>
                           <h4 class="go-right">Booking Number:MTNA0789456<BR>
                              Booking Date:July8,2018
                           </h4>
                        </div>
                        <address><i class="material-icons" style="font-size:23px">place</i> Address:123 XYZRoad, Saudi Arabia <a href="#">Show in map</a></address>
                        <datetime><i class='fas fa-calendar-alt' style='font-size:18px'></i> From:July 16,2018 11:30 AM <a href="#">Change </a>          To:July 16,2018 11:30 AM <a href="#">Change </a></datetime>
                        <br><br>
                        <div><i class='far fa-clock' style='font-size:20px'></i> 5 Days 4 Nights</div>
                        <br>
                        <div> <span class="color-change">Services:</span>Catering, Lightning and Sound</div>
                        <br>
                        <a href="#"> Paid at the time of Booking:SAR.151.2</a>
                           <button style="float:right" type="submit" class="btn btn-default.btn-xs" >Write a Review</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="menu3" class="tab-pane fade">
               <h3>Menu 3</h3>
               <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            </div>
         </div>
      </div>
      <!------------------------------------ login page end------------------------------------------>
      <!------- body end-------->

      <!------- Footer end-------->
	  <script><!------inner page-pop up-------->
         $(document).ready(function(){
         
         $("#myreviewsend").click(function(){
         $("#myreview").modal();
         
         });
          $(".nav-tabs a").click(function(){
           $(this).tab('show');
         });
         });
      </script>
      <script>
         $(document).ready(function(){
          $(".nav-tabs a").click(function(){
           $(this).tab('show');
         });
         });
      </script>
      <script>
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
      <script>
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