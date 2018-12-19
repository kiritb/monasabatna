
   <body>
 
      <!------- body start--------> 
      <div class="container">
         <!------- collapse navbar start-------->
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="collapse navbar-collapse" id="myNavbar">
                  <!-- <ul class="nav navbar-nav navbar-center"> -->
                  <ul class="second-nav">
                     <li class="venue-one"><a class="active-one" href="#signin"> My Bookings </a></li>
                     <li class="venue-one"><a class="signtwo" href="#signout"> Booking History</a></li>
                    
                  </ul>
               </div>
            </div>
         <!------- collapse navbar end-------->
         <label> </label>
         <!--------- tab container begin ------------------------->
         <ul class="nav nav-tabs">
            <li class="active" id="activehome"><a href="#home">Venue</a></li>
            <li><a href="#menu2">Suppliers</a></li>
            <li><a href="#menu1">Event Organisers   <span class="badge">2</span></a></li>
            <li><a href="#menu3">Events</a></li>
         </ul>
         <!----------------------- tab container end -------------------->
         <div class="tab-content">
            <div id="home" class="tab-pane fade">
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
                        <span class="color-blue">Paid Amount:SAR.151.2</span>
                        <div> <span class="color-blue"> Paid By Cash:AR.604.8</span><span class="color-red">(To be paid at venue. 16 May, 2018 before 11:30 AM)</span></div>
						<br>
						<div><span class="color-red-big">2 days, 20 hours, 28 min, 18 sec remaining for payment</span></div>
						<div> <span class="color-black">Please give the code <span class="col-green">'MS1234'</span>at venue while making the remaining payment</span></div>
                        <br>
                           <a class="cancel-venue-booking" href="#"> Cancel Booking</a>

                        
                     </div>
                  </div>
               </div>

            </div>
            <div id="menu1" class="tab-pane fade">
               <h3>Menu 1</h3>
               <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div id="menu2" class="tab-pane fade">
               <h3>Menu 2</h3>
               <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
            </div>
            <div id="menu3" class="tab-pane fade in active">
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
						<div> <span class="color-change">Event Name:</span>Food at its best</div>
						<br>
                        <address><i class="material-icons" style="font-size:23px">place</i> Address:123 XYZRoad, Saudi Arabia <a href="#">Show in map</a></address>
                       
                        <div> <span class="color-change">Date and Time:</span>20 May 2018,2:30 PM</div>
                        <br>
                        <div> <span class="color-change">Event Type:</span>Food Event</div>
                        <br>
						<div> <span class="color-change">Total People:</span>100</div>
                        <br>
						<div> <span class="color-change">Total Price:</span>SAR.4500</div>
                        <br>
                        <a class="cancel-venue-booking" href="#"> Cancel Booking</a>

                     </div>
                  </div>
               </div>

            </div>
         </div>
      </div>
      <!------------------------------------ login page end------------------------------------------>
      <!------- body end-------->

      <!------- Footer end-------->
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