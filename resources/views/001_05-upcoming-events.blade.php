@include('header')
   <body>
    
      <!------- body start--------> 
<div class="container-fluid">
<div class="row">
<h1 class="upcoming-head">Event Organiser Name</h1>
<div class="arabic-logosec">
<img src="svg/images/arabic-logo.jpg" class="img-responsive">
</div>
</div>
  
  	<!-- thumb navigation carousel -->
    <div class="col-md-12 col-sm-12 col-xs-12" id="slider-thumbs">

  
  
    <!-- main slider carousel -->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12" id="slider">
            
                <div class="col-md-12 col-sm-12" id="carousel-bounding-box">
                    <div id="myCarousel" class="carousel slide">
                        <!-- main slider carousel items -->
                        <div class="carousel-inner">
                            <div class="active item" data-slide-number="0">
                                <img src="svg/images/banner-inner1.jpg" class="img-responsive">
                            </div>
                            <div class="item" data-slide-number="1">
                              <img src="svg/images/theme-banner1.jpg" class="img-responsive">
                            </div>
                            <div class="item" data-slide-number="2">
                                <img src="svg/images/theme-banner2.jpg" class="img-responsive">
                            </div>
                            <div class="item" data-slide-number="3">
                                <img src="svg/images/theme-banner3.jpg" class="img-responsive">
                            </div>
                            <div class="item" data-slide-number="4">
                                <img src="svg/images/theme-banner4.jpg" class="img-responsive">
                            </div>
                            <div class="item" data-slide-number="5">
                                <img src="svg/images/theme-banner3.jpg" class="img-responsive">
                            </div>
                            <div class="item" data-slide-number="6">
                                <img src="svg/images/theme-banner4.jpg" class="img-responsive">
                            </div>
                            <div class="item" data-slide-number="7">
                                <img src="svg/images/theme-banner2.jpg" class="img-responsive">
                            </div>
                        </div>
                        <!-- main slider carousel nav controls --> <a class="carousel-control left" id="detail-banner-left" href="#myCarousel" data-slide="prev"><</a>

                        <a class="carousel-control right" id="detail-banner-right" href="#myCarousel" data-slide="next">></a>
                    </div>
                </div>

        </div>
    </div>
    <!--/main slider carousel-->
        
            <!-- thumb navigation carousel items -->
			<div class="col-md-12 col-sm-12 col-xs-12 bg-upcoming">

          <ul class="list-inline" id="inner_thumb">
          <li> <a id="carousel-selector-0" class="selected">
            <img src="svg/images/carousel-unique.jpg" class="img-responsive">
          </a></li>
          <li> <a id="carousel-selector-1">
            <img src="svg/images/carousel-twelve.jpg" class="img-responsive">
          </a></li>
          <li> <a id="carousel-selector-2">
            <img src="svg/images/carousel-thirteen.jpg" class="img-responsive">
          </a></li>
          <li> <a id="carousel-selector-3">
            <img src="svg/images/carousel-fourteen.jpg" class="img-responsive">
          </a></li>
                <li> <a id="carousel-selector-4">
            <img src="svg/images/carousel-fifteen.jpg" class="img-responsive">
          </a></li>
          <li> <a id="carousel-selector-5">
            <img src="svg/images/carousel-sixteen.jpg" class="img-responsive">
          </a></li>
          <li> <a id="carousel-selector-6">
            <img src="svg/images/carousel-seventeen.jpg" class="img-responsive">
          </a></li>
          <li> <a id="carousel-selector-7">
            <img src="svg/images/carousel-eighteen.jpg" class="img-responsive">
          </a></li>
		  <li> <a id="carousel-selector-7">
            <img src="svg/images/carousel-nineteen.jpg" class="img-responsive">
          </a></li>
		  <li> <a id="carousel-selector-7">
            <img src="svg/images/carousel-twenty.jpg" class="img-responsive">
          </a></li>
		  <li> <a id="carousel-selector-7">
            <img src="svg/images/carousel-twentyone.jpg" class="img-responsive">
          </a></li>
            </ul>
			</div>

    </div>
</div>
<div class="container" id="cust-upcoming-text">
						
							
                           <h5><b>Event Name</b></h5>
							
                        <address><i class="material-icons bg-icon-upcoming" style="font-size:23px">place</i> Address:<b>123 XYZRoad, Saudi Arabia </b><a href="#">Show in map</a></address>
						<div><i class="material-icons bg-icon-upcoming" style="font-size:23px;">recent_actors</i>License Number:<b>XYZ1234</b></div><br>
                        <datetime><i class='fas fa-calendar-alt' style='font-size:23px'></i> Event Date:<b>21May,2018</b></datetime>
                        <div class="row">
						<div class="col-lg-10 col-md-10 col-sm-6 col-xs-6">
						<i class="material-icons bg-icon-upcoming" style="font-size:23px;">folder_special</i>recent_actors</i>Event Type:<b>Fashion</b>
						</div>
						
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 right">
						<span class="col-green">SAR:</span>100 / Day
						
						</div>
						</div>
						<div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6"><i class='far fa-clock' style='font-size:20px'></i> Booking before:<b>12May,2004</b></div>
                        
			<div class="col-md-6 col-sm-6 col-xs-6">
            <ul class="nav navbar-nav navbar-right">
               <button type="button" class="btn btn-default btn-xs" id="signone">My Bookings</button>
               <button type="button" class="btn btn-default btn-xs" id="signtwo">Booking History</button> 
            </ul>
			</div>
			</div>
                        </div>
                 <div class="container">
<div class="row">
	  <a href="#"><img src="svg/images/facebook.jpg"></a>
	  <a href="#"><img src="svg/images/twitter.jpg"></a>
	  </div>
				</div> 
					 <!--------- tab container begin ------------------------->
		<div class="container">
		<div class="row">
         <ul class="nav nav-tabs" id="venue-details-tab">
            <li class="active venuedetails" id="activehome"><a href="#home">Venue</a></li>
            <li class="venuedetails"><a href="#menu2">Suppliers</a></li>
            <li class="venuedetails"><a href="#menu1">Event Organisers</a></li>
            <li class="venuedetails"><a href="#menu3">Events</a></li>
         </ul>
         <!----------------------- tab container end -------------------->
         <div class="tab-content"  id="customer-profile-bg">
            <div id="home" class="tab-pane fade in active">
               <br>
               <div class="container">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p><p>incididunt ut labore
					et dolore magna aliqua. Ut enim ad minim</p> <p>veniam, quis nostrud exercitation ullamco
					laboris nisi ut aliquip.Lorem ipsum dolor</p> <p>sit amet, consectetur 
					adipiscing elit, sed do eiusmod tempor </p><p>incididunt ut labore et dolore magna aliqua. Ut enim 
					ad minim veniam, quis nostrud </p>
					exercitation ullamco laboris nisi ut aliquip 

					
               </div>
               <br>
               <br>
            </div>
            <div id="menu1" class="tab-pane fade">
               <h3>Menu 1</h3>
               <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div id="menu2" class="tab-pane fade">
               <h3>Menu 2</h3>
               <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
            </div>
            <div id="menu3" class="tab-pane fade">
               <h3>Menu 3</h3>
               <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            </div>
         </div>
      </div>
	  </div>
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
                	  <div class="flex-venue-details"><a class="thumbnail"><img src="svg/images/venue-detail-carousel-one.jpg" alt="Image" class="img-responsive" /></a>
					   <h5 ><b> Hotel XYZ</b> </h5></div>
                	  <div class="flex-venue-details"><a class="thumbnail"><img src="svg/images/venue-detail-carousel-two.jpg" alt="Image" class="img-responsive" /></a>
					  <h5><b> Hotel XYZ</b> </h5> </div>
                	  <div class="flex-venue-details"><a class="thumbnail"><img src="svg/images/venue-detail-carousel-three.jpg" alt="Image" class="img-responsive" /></a>
					  <h5><b> Hotel XYZ</b> </h5> </div>
                	  <div class="flex-venue-details"><a class="thumbnail"><img src="svg/images/venue-detail-carousel-four.jpg" alt="Image" class="img-responsive" /></a>
					  <h5><b> Hotel XYZ</b> </h5> </div>
					<div class="flex-venue-details"><a class="thumbnail"><img src="svg/images/venue-detail-carousel-five.jpg" alt="Image" class="img-responsive" /></a>
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
	<!------------------------------------------ Thumbnail carousel end ---------------------------------------------------->

      <!------- body end-------->
      <!------- footer start-------->
	  <script>// thumbnail carousel 
	
	
    $('.myvendor').carousel({
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
$('#myCarousel').carousel({
    interval: 4000
});

// handles the carousel thumbnails
$('[id^=carousel-selector-]').click( function(){
  var id_selector = $(this).attr("id");
  var id = id_selector.substr(id_selector.length -1);
  id = parseInt(id);
  $('#myCarousel').carousel(id);
  $('[id^=carousel-selector-]').removeClass('selected');
  $(this).addClass('selected');
});

// when the carousel slides, auto update
$('#myCarousel').on('slid', function (e) {
  var id = $('.item.active').data('slide-number');
  id = parseInt(id);
  $('[id^=carousel-selector-]').removeClass('selected');
  $('[id=carousel-selector-'+id+']').addClass('selected');
});
</script>
      <script>      <!-------modal pop-up-------->
         $(document).ready(function(){
         $("#myBtn").click(function(){
         $("#myModal").modal();
         
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