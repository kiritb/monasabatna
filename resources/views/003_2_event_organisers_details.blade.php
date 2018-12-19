@include('header')
<body>
      <!------- body start--------> 
      <!------- form start-------->
      <div class="container-fluid" id="set-bg">
         <div class="form-vertical">
            <div class="form-group" id="center-done">
               <br>
               <br>
               <div class="col-sm-3">
                  <label class="control-label col-sm-1" for="cityname">City:</label>
                  <input type="text" class="form-control" placeholder="City" name="contact">
               </div>
               <div class="col-sm-3">
                  <label class="control-label col-lg-6 col-md-9 col-sm-12" for="cityname">Date from:</label>
                  <select class = "form-control">
                     <option>+966</option>
                     <option>+967</option>
                     <option>+968</option>
                     <option>+954</option>
                     <option>+969</option>
                  </select>
               </div>
               <div class="col-sm-3">
                  <label class="control-label col-lg-6 col-md-9 col-sm-12" for="cityname">Date to:</label>
                  <select class = "form-control">
                     <option>+966</option>
                     <option>+967</option>
                     <option>+968</option>
                     <option>+954</option>
                     <option>+969</option>
                  </select>
               </div>
               <br>
               <div class="col-sm-1">
                  <button type="submit" class="btn btn-danger" >Sign Up</button>   
               </div>
            </div>
         </div>
      </div>
      <!------- form start-------->
      <!------- Banner start-------->
      <div class="container-fluid">
<div class="row">
<h3 id="event-two-head"><div class="col-lg-6 col-md-6 col-xs-6">
              <span class="star-head">Party Zone</span>
			  </div>
			  <div class="col-lg-6 col-md-6 col-xs-6">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
            </div></h1>
<div class="arabic-logosec">
<img src="svg/images/arabic-logo.jpg" class="img-responsive">
</div>
</div>
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
       <!---     <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
			   <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol> --->
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
               <div class="item active">
                  <img src="svg/images/theme-banner5.jpg" alt="Los Angeles" style="width:100%">
               </div>
               <div class="item">
                  <img src="svg/images/theme-banner2.jpg" alt="Chicago" style="width:100%">
               </div>
               <div class="item">
                  <img src="svg/images/theme-banner3.jpg" alt="New york" style="width:100%">
               </div>
			   <div class="item">
                  <img src="svg/images/theme-banner4.jpg" alt="New york" style="width:100%">
               </div>
				<div class="item">
                  <img src="svg/images/theme-banner1.jpg" alt="New york" style="width:100%">
               </div>
			   	<div class="item">
                  <img src="svg/images/theme-banner6.jpg" alt="New york" style="width:100%">
               </div>
            </div>
            <!-- Left and right controls -->
            <a class="carousel-control left" id="detail-banner-left" href="#myCarousel" data-slide="prev"><</a>

                        <a class="carousel-control right" id="detail-banner-right" href="#myCarousel" data-slide="next">></a>
         </div>
      </div>
      <!------- Banner end-------->
	  <div class="container">
	  <div class="col-md-12 col-sm-12 col-xs-12">
	  <div class="row arrange-supplier">
	  
	  <h6><i class="fa fa-map-marker" style="font-size:20px;" aria-hidden="true"></i>Address:<b>123 XYZ Road,Saudi Arabia </b><a href="">Show in map</a>
	  <br>Travel free upto 10 kms. SAR 50 for 11 kms.</h6>
		
	  <h6><i class="material-icons" style="font-size:20px">collections_bookmark</i>Customer Service Number:<b>+85-9876543210 </b></h6>
	
	  <h6><i class="material-icons" style="font-size:20px;">filter_b_and_w</i><h6>License Number:<b>123 XYZ Road,Saudi Arabia </b></h6>
	
	  </div>
	  </div>
	  </div>
	  <div class="container">
	  <div class="row">
	  <a href="#"><button style="font-size:20px"><i class="fa fa-facebook"></i>Facebook</button></a>
	  <a href="#"><button style="font-size:20px"><i class="fa fa-twitter"></i>Twitter</button></a>
	  </div>
	  </div>
	  <!------- Address end-------->
	  
	  <div class="container-fluid center">
		<h4 class="event_h_four">15 Event themes offered</h4>
		


<div id="exTab3" class="container">	
<ul  class="nav nav-pills">
			<li class="active">
        <a  href="#1b" data-toggle="tab">About</a>
			</li>
			<li><a href="#2b" data-toggle="tab">Menu</a>
			</li>
			<li><a href="#3b" data-toggle="tab">Amenities</a>
			</li>
  		<li><a href="#4a" data-toggle="tab">Reviews</a>
			</li>
			<li><a href="#5a" data-toggle="tab">Terms & Policies</a>
			</li>
		</ul>

			<div class="tab-content clearfix">
			  <div class="tab-pane active" id="1b">
           <div class="row">
  <div class="col-lg-4 col-md-4 col-xs-6">
    <div class="event-content">
      <img src="svg/images/event-portfolio-one.jpg" alt="Mountains" style="width:300px; height:200px margin-left:10px">
	  <div class="row col-sm-12">
		<div class="col-lg-6 col-md-6 col-xs-6">
      <div class="content-option">
	  <strong>Package Name</strong>

      <p><span class="col-green">SAR:</span> 100 Days</p>
	  
	  </div>
	  </div>
	  <button class="btn active" id="btn-port" onclick="filterSelection('all')"> Book Now</button>
	  </div>
	  </div>
  </div>
  <div class="col-lg-4 col-md-4 col-xs-6">
    <div class="event-content">
      <img src="svg/images/event-portfolio-two.jpg" alt="Mountains" style="width:300px; height:200px margin-left:10px">
	  <div class="row col-sm-12">
		<div class="col-lg-6 col-md-6 col-xs-6">
      <div class="content-option">
	  <strong>Package Name</strong>

      <p><span class="col-green">SAR:</span>  100 Days
	  </p>
	  </div>
	  </div>
	  <button class="btn active" id="btn-port" onclick="filterSelection('all')"> Book Now</button>
	  </div>
	  </div>
  </div>
  <div class="col-lg-4 col-md-4 col-xs-6">
    <div class="event-content">
      <img src="svg/images/event-portfolio-three.jpg" alt="Mountains" style="width:300px; height:200px margin-left:10px">
	  <div class="row col-sm-12">
		<div class="col-lg-6 col-md-6 col-xs-6">
      <div class="content-option">
	  <strong>Package Name</strong>

      <p><span class="col-green">SAR:</span>  100 Days
	  </p>
	  </div>
	  </div>
	  <button class="btn active" id="btn-port" onclick="filterSelection('all')"> Book Now</button>
	  </div>
	  </div>
  </div>


    <div class="col-lg-4 col-md-4 col-xs-6">
    <div class="event-content">
      <img src="svg/images/event-portfolio-four.jpg" alt="Mountains" style="width:300px; height:200px margin-left:10px">
	  <div class="row col-sm-12">
		<div class="col-lg-6 col-md-6 col-xs-6">
      <div class="content-option">
	  <strong>Package Name</strong>

      <p><span class="col-green">SAR:</span>  100 Days
	  </p>
	  </div>
	  </div>
	  <button class="btn active" id="btn-port" onclick="filterSelection('all')"> Book Now</button>
	  </div>
	  </div>
  </div>
  <div class="col-lg-4 col-md-4 col-xs-6">
    <div class="event-content">
      <img src="svg/images/event-portfolio-five.jpg" alt="Mountains" style="width:300px; height:200px margin-left:10px">
	  <div class="row col-sm-12">
		<div class="col-lg-6 col-md-6 col-xs-6">
      <div class="content-option">
	  <strong>Package Name</strong>

      <p><span class="col-green">SAR:</span>  100 Days
	  </p>
	  </div>
	  </div>
	  <button class="btn active" id="btn-port" onclick="filterSelection('all')"> Book Now</button>
	  </div>
	  </div>
  </div>
  <div class="col-lg-4 col-md-4 col-xs-6">
    <div class="event-content">
      <img src="svg/images/event-portfolio-six.jpg" alt="Mountains" style="width:300px; height:200px margin-left:10px">
	  <div class="row col-sm-12">
		<div class="col-lg-6 col-md-6 col-xs-6">
      <div class="content-option">
	  <strong>Package Name</strong>

      <p><span class="col-green">SAR:</span> 100 Days
	  </p>
	  </div>
	  </div>
	  <button class="btn active" id="btn-port" onclick="filterSelection('all')"> Book Now</button>
	  </div>
	  </div>
</div>


    <div class="col-lg-4 col-md-4 col-xs-6">
    <div class="event-content">
      <img src="svg/images/event-portfolio-seven.jpg" alt="Mountains" style="width:300px; height:200px margin-left:10px">
	  <div class="row col-sm-12">
		<div class="col-lg-6 col-md-6 col-xs-6">
      <div class="content-option">
	  <strong>Package Name</strong>

      <p><span class="col-green">SAR:</span>  100 Days
	  </p>
	  </div>
	  </div>
	  <button class="btn active" id="btn-port" onclick="filterSelection('all')"> Book Now</button>
	  </div>
	  </div>
  </div>
  <div class="col-lg-4 col-md-4 col-xs-6">
    <div class="event-content">
      <img src="svg/images/event-portfolio-eight.jpg" alt="Mountains" style="width:300px; height:200px margin-left:10px">
	  <div class="row col-sm-12">
		<div class="col-lg-6 col-md-6 col-xs-6">
      <div class="content-option">
	  <strong>Package Name</strong>

      <p><span class="col-green">SAR:</span>  100 Days
	  </p>
	  </div>
	  </div>
	  <button class="btn active" id="btn-port" onclick="filterSelection('all')"> Book Now</button>
	  </div>
	  </div>
  </div>
  <div class="col-lg-4 col-md-4 col-xs-6">
    <div class="event-content">
      <img src="svg/images/event-portfolio-nine.jpg" alt="Mountains" style="width:300px; height:200px margin-left:10px">
	  <div class="row col-sm-12">
		<div class="col-lg-6 col-md-6 col-xs-6">
      <div class="content-option">
	  <strong>Package Name</strong>

      <p><span class="col-green">SAR:</span> 100 Days
	  </p>
	  </div>
	  </div>
	  <button class="btn active" id="btn-port" onclick="filterSelection('all')"> Book Now</button>
	  </div>
	  </div>
  </div>
</div>
<!-- END GRID -->

				</div><!----------tab-pane ends --------------->
				<div class="tab-pane" id="2b">
          <h3>We use the class nav-pills instead of nav-tabs which automatically creates a background color for the tab</h3>
				</div>
        <div class="tab-pane" id="3b">
			<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
            <i class="fa fa-windows" style="font-size:50px"></i>
			<br>
			<label><b> Air Conditioner</b> </label>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
			<i class="fa fa-cab" style="font-size:50px"></i>
			<i class="fa fa-map-signs" style="font-size:48px"></i>
			<br>
			<label><b> Car Parking </b></label>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
			<i class='fas fa-street-view' style='font-size:50px'></i>
			<br>
			<label><b> Lift</b></label>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
			<i class="fa fa-audio-description" style="font-size:50px"></i>
			<br>
			<label><b> Sound System </b></label>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
			<i class="fa fa-microphone" style="font-size:50px"></i>
			<br>
			<label><b> Mic </b></label>
			</div>
			<div class="row"> </div>
			<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
			<i class="fa fa-video-camera" style="font-size:50px"></i>
			<br>
			      <label><b>Projector</b></label>
				  </div>
				  <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
			<i class="fa fa-paw" style="font-size:50px"></i>
			<br>
				<label><b>Decorators Allowed </b></label>
				</div>
				</div>
          <div class="tab-pane" id="4a">
          <h3>We use css to change the background color of the content to be equal to the tab</h3>
				</div>
				 <div class="tab-pane" id="5a">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna 
                  aliqua. Ut enim ad minim veniam 
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna 
                  aliqua. Ut enim ad minim veniam
               </p>
			
				</div>
			</div>
  </div>
</div>
<!-- Portfolio Gallery Grid -->

 <!------- Information start-------->
      <br>
      <div class="container">
	  <div class="bg-star">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-612">
              <h4 class="eve-head"> <bold> <center> See What our Customers are saying</bold> <center></h4>
            </div>
			<div class="col-lg-6 col-md-6 col-xs-6">
              <span class="star-head">Responsiveness</span>
			  </div>
			  <div class="col-lg-6 col-md-6 col-xs-6">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
            </div>
			<div class="col-lg-6 col-md-6 col-xs-6">
             <span class="star-head">Quality</span>
			  </div>
			  <div class="col-lg-6 col-md-6 col-xs-6">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
            </div>
		 <div class="col-lg-6 col-md-6 col-xs-6">
             <span class="star-head">Availability</span>
			  </div>
			  <div class="col-lg-6 col-md-6 col-xs-6">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
            </div>
         
		 <div class="col-lg-6 col-md-6 col-xs-6">
             <span class="star-head"> Value for money</span>
			  </div>
			  <div class="col-lg-6 col-md-6 col-xs-6">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
            </div>
         <div class="col-lg-6 col-md-6 col-xs-6">
             <span class="star-head"> Quality</span>
			  </div>
			  <div class="col-lg-6 col-md-6 col-xs-6">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
            </div>
    
		</div>
      </div>
	  </div>
      <!------- Information end--------> 	

   
      <!-------------- Gallery start ----------------------->        
  	<!---------------------------- Thumbnail carousel start --------------------------------->  
<div class="container-fluid">

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		
    	    
                <div id="myvenuedetail" class="carousel slide">
                 
<!---     <ol class="carousel-indicators">
                     <li data-target="#myvenuedetail" data-slide-to="0" class="active"></li>
                     <li data-target="#myvenuedetail" data-slide-to="1"></li>
                    <li data-target="#myvenuedetail" data-slide-to="2"></li>
                 </ol> ---->
                 
                <!-- Carousel items -->
                <div class="carousel-inner">
                    
                <div class="item active">
				<h5 style="margin-left:20px;"><b> Recomended supplier in Jeddah</b> </h5>
                	<div class="row-fluid">
                	  <div class="flex-venue-details"><a class="thumbnail"><img src="svg/images/event-thumbnail-one.jpg" alt="Image" class="img-responsive" /></a>
					   <h5 ><b> Hotel XYZ</b> </h5></div>
                	  <div class="flex-venue-details"><a class="thumbnail"><img src="svg/images/event-thumbnail-two.jpg" alt="Image" class="img-responsive" /></a>
					  <h5><b> Hotel XYZ</b> </h5> </div>
                	  <div class="flex-venue-details"><a class="thumbnail"><img src="svg/images/event-thumbnail-three.jpg" alt="Image" class="img-responsive" /></a>
					  <h5><b> Hotel XYZ</b> </h5> </div>
                	  <div class="flex-venue-details"><a class="thumbnail"><img src="svg/images/event-thumbnail-four.jpg" alt="Image" class="img-responsive" /></a>
					  <h5><b> Hotel XYZ</b> </h5> </div>
					<div class="flex-venue-details"><a class="thumbnail"><img src="svg/images/event-thumbnail-five.jpg" alt="Image" class="img-responsive" /></a>
					  <h5><b> Hotel XYZ</b> </h5> </div> 
                	</div><!--/row-fluid-->
                </div><!--/item-->
            
                <div class="item">
				<h5 style="margin-left:20px;"><b> Recomended supplier in Jeddah</b> </h5>
                	<div class="row-fluid">
                	  <div class="flex-venue-details"><a class="thumbnail"><img src="svg/images/venue-detail-carousel-six.jpg" alt="Image" class="img-responsive" /></a>
					  <h5 class="branding-venue-carousel"><b> Hotel XYZ</b> </h5> </div>
                	  <div class="flex-venue-details"><a class="thumbnail"><img src="svg/images/venue-detail-carousel-seven.jpg" alt="Image" class="img-responsive" /></a>
					  <h5 class="branding-venue-carousel"><b> Hotel XYZ</b> </h5> </div>
                	  <div class="flex-venue-details"><a class="thumbnail"><img src="svg/images/venue-detail-carousel-eight.jpg" alt="Image" class="img-responsive" /></a>
					  <h5 class="branding-venue-carousel"><b> Hotel XYZ</b> </h5> </div>
                	  <div class="flex-venue-details"><a class="thumbnail"><img src="svg/images/venue-detail-carousel-nine.jpg" alt="Image" class="img-responsive" /></a>
					  <h5 class="branding-venue-carousel"><b> Hotel XYZ</b> </h5> </div>
					<div class="flex-venue-details"><a class="thumbnail"><img src="svg/images/venue-detail-carousel-ten.jpg" alt="Image" class="img-responsive" /></a>
					  <h5 class="branding-venue-carousel"><b> Hotel XYZ</b> </h5> </div> 
                	</div><!--/row-fluid-->
                </div><!--/item-->
                 
                <div class="item">
				<h5 style="margin-left:20px;"><b> Recomended supplier in Jeddah</b> </h5>
                	<div class="row-fluid">
                	  <div class="flex-venue-details"><a class="thumbnail"><img src="svg/images/venue-detail-carousel-eleven.jpg" alt="Image" class="img-responsive" /></a>
					  <h5 class="branding-venue-carousel"><b> Hotel XYZ</b> </h5> </div>
                	  <div class="flex-venue-details"><a class="thumbnail"><img src="svg/images/venue-detail-carousel-twelve.jpg" alt="Image" class="img-responsive" /></a>
					  <h5 class="branding-venue-carousel"><b> Hotel XYZ</b> </h5> </div>
                	  <div class="flex-venue-details"><a class="thumbnail"><img src="svg/images/venue-detail-carousel-thirteen.jpg" alt="Image" class="img-responsive" /></a>
					  <h5 class="branding-venue-carousel"><b> Hotel XYZ</b> </h5> </div>
                	  <div class="flex-venue-details"><a class="thumbnail"><img src="svg/images/venue-detail-carousel-fourteen.jpg" alt="Image" class="img-responsive" /></a>
					  <h5 class="branding-venue-carousel"><b> Hotel XYZ</b> </h5> </div>
					<div class="flex-venue-details"><a class="thumbnail"><img src="svg/images/venue-detail-carousel-fifteen.jpg" alt="Image" class="img-responsive" /></a>
					  <h5 class="branding-venue-carousel"><b> Hotel XYZ</b> </h5> </div> 
                	</div><!--/row-fluid-->
                </div><!--/item-->
                 
                </div><!--/carousel-inner-->
                 
                <a class="left carousel-control" id="arrow-detail-left" href="#myvenuedetail" data-slide="prev">‹</a>
                <a class="right carousel-control" id="arrow-detail-right" href="#myvenuedetail" data-slide="next">›</a>
                </div><!--/myCarousel-->
                 
            <!--/well-->   
		
	</div>
</div>
@include('footer')
	<!------------------------------------------ Thumbnail carousel end ---------------------------------------------------->
      <!------- body end-------->
 <script>// thumbnail carousel 
	
	
    $('.myvendor').carousel({
		alert();
		interval: 1000
	});
	$('.myorganiser').carousel({
	    interval: 1000
	});
    $('#myvenuedetail').carousel({
	    interval: 1000
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