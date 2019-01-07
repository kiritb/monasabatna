    @include('header')
<!------- body start-------->
<!------- form start-------->
<form class="form-vertical">
    <div class="container-fluid" id="commonpack-bg">
        <div class="row" id="set-bg">
            <div class="col-md-12 col-sm-12 themeform-top">

                <div class="col-md-3 col-sm-3 col-xs-3 form-group packform" id="citypack">
                    <label class="themelab">City</label>
                    <input type="text" name='datepicker' class="form-control themehome" placeholder="Jeddah">

                </div>

                <div class="col-md-3 col-sm-3 col-xs-3 form-group packform" id="datapack">
                    <label class="themelab">Date From</label>
                    <input type="text" class="form-control themehome" placeholder="16 May, 2018">
                    <span class="far fa-calendar-alt date-element-theme"></span>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-3 form-group packform" id="labpack">
                    <label class="themelab">Date To</label>
                    <input type="text" class="form-control themehome" placeholder="20 May,2018" name="contact">
                    <span class="far fa-calendar-alt date-element-theme"></span>
                </div>
               
                <div class="col-md-2 col-sm-3 col-xs-3 form-group packform" id="upcuser-search">
                <a href="#" class="searchvenue">Search</a>
                </div>
                <!---<div class="form-group">
                    <div class="col-md-3 col-sm-3 col-xs-3 form-group packform" id="subpack">
                        <button type="submit" class="btn btn-danger sub_theme">Submit</button>
                    </div>
                </div> --->
            </div>
        </div>
    </div>

</form>
<!------- form start-------->
<!------- Banner start-------->
    <div class="container-fluid" id="upcheading">
    Upcoming Events
    </div>
<div class="container-fluid" id="upc-userclick-content">
<div class="filtersidevenue">
                  
                    
                  <div class="panel">
                      <div class="panel-heading">Filter</div>
                      <div class="panel-body">
                      

  <h4 class="venuecliphead"> Price</h4>
<div class="form-group">
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
    <label class="form-check-label" for="invalidCheck2">
     SAR 80 - 150
    </label>
  </div>
</div><!---- formgroup ------->
<div class="form-group">
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
    <label class="form-check-label" for="invalidCheck2">
    SAR 151 - 200
    </label>
  </div>
</div><!---- formgroup ------->
<div class="form-group">
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
    <label class="form-check-label" for="invalidCheck2">
    SAR 201 - 250
    </label>
  </div>
</div><!---- formgroup ------->

<h4 class="venueclipheadone"> Event Type</h4>
<div class="form-group">
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
    <label class="form-check-label" for="invalidCheck2">
     Birthday 
    </label>
  </div>
</div><!---- formgroup ------->
<div class="form-group">
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
    <label class="form-check-label" for="invalidCheck2">
    Wedding
    </label>
  </div>
</div><!---- formgroup ------->
<div class="form-group">
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
    <label class="form-check-label" for="invalidCheck2">
    Business Meeting
    </label>
  </div>
</div><!---- formgroup ------->
<div class="form-group">
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
    <label class="form-check-label" for="invalidCheck2">
     Conference
    </label>
  </div>
</div><!---- formgroup ------->
<div class="form-group">
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
    <label class="form-check-label" for="invalidCheck2">
    Corporate Event
    </label>
  </div>
</div><!---- formgroup ------->
<div class="form-group">
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
    <label class="form-check-label" for="invalidCheck2">
    Other
    </label>
  </div>
</div><!---- formgroup ------->
<a class="resetvenue" href id="Reset">Reset Filters</a>
<div class="filterext"></div>
                     
                      </div>
                      
                  </div><!------- panel end -------->
             
                  </div><!-------filtersidvenue ---------->
    
                    <div class="container-fluid" id="upcoming-contentright">
                    <div class="row color-bg-upclist">
                           <div class="content-eve">
                              <img src="svg/images/upcomingclick-one.jpg" alt="Mountains" style="width:300px; height:273px">
                           </div>
						   
                           <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="content-eve-right">
                              <div class="content-optionblog">
                              <div class="upcbox-head"><b>Event Organiser Name </b></div>
                              <div class="spacer_boxtwo"></div>
							  <div class="upcbox-head"><b>Event Name </b></div>
                              <div class="spacer_boxtwo"></div>
                                <div class="wish-text"> <i class='fas fa-map-marker-alt' style='font-size:23px;color:#6cc0b9'></i><span class="upctext">Address : 123 <b>XYZ Road, Saudi Arabia</b></span><a class="highlight_line" href="#">show in map </a></div>
                                <div class="spacer_boxtwo"></div>
                                <div class="wish-text"> <i class="far fa-clock" style='font-size:23px;color:#6cc0b9'></i><span class="upctext">Start Time : <b>09:00 AM</b></span> <span class="upctext">End Time : <b>09:00 PM</b></span></div>
                                <div class="spacer_boxtwo"></div>
                                <div class="wish-text"><b><span class="go-greencap">Event Type : </span>Food</b></div>
                                <div class="spacer_boxtwo"></div>
                                
                                 <p class="blogvenue">**Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 

**Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etonsectetur adipiscing elit, sed do eiusmod tempor.



                                 </p>
                                 <div class="wish-text"><b><span class="col-green">SAR :</span> 100 / SetUp</b></div>
  
                                 <button class="btn active" id="bn-venuelist" onclick="filterSelection('all')"><b> Book Now</b></button>
                                 
                              </div>
                           </div>
                        </div><!-----------color-bg-upclist ------------>
                        <div class="row color-bg-upclistone">
                           <div class="content-eve">
                              <img src="svg/images/upcomingclick-two.jpg" alt="Mountains" style="width:300px; height:273px">
                           </div>
						   
                           <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="content-eve-right">
                              <div class="content-optionblog">
                              <div class="upcbox-head"><b>Event Organiser Name </b></div>
                              <div class="spacer_boxtwo"></div>
							  <div class="upcbox-head"><b>Event Name </b></div>
                              <div class="spacer_boxtwo"></div>
                                <div class="wish-text"> <i class='fas fa-map-marker-alt' style='font-size:23px;color:#6cc0b9'></i><span class="upctext">Address : 123 <b>XYZ Road, Saudi Arabia</b></span><a class="highlight_line" href="#">show in map </a></div>
                                <div class="spacer_boxtwo"></div>
                                <div class="wish-text"> <i class="far fa-clock" style='font-size:23px;color:#6cc0b9'></i><span class="upctext">Start Time : <b>09:00 AM</b></span> <span class="upctext">End Time : <b>09:00 PM</b></span></div>
                                <div class="spacer_boxtwo"></div>
                                <div class="wish-text"><b><span class="go-greencap">Event Type : </span>Food</b></div>
                                <div class="spacer_boxtwo"></div>
                                
                                 <p class="blogvenue">**Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 

**Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etonsectetur adipiscing elit, sed do eiusmod tempor.



                                 </p>
                                 <div class="wish-text"><b><span class="col-green">SAR :</span> 100 / SetUp</b></div>
                                 
                                 <button class="btn active" id="bn-venuelist" onclick="filterSelection('all')"><b> Book Now</b></button>
                                 
                              </div>
                           </div>
                        </div><!-----------color-bg-upclist ------------>
                        <div class="row color-bg-upclistone">
                           <div class="content-eve">
                              <img src="svg/images/upcomingclick-three.jpg" alt="Mountains" style="width:300px; height:273px">
                           </div>
						   
                           <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="content-eve-right">
                              <div class="content-optionblog">
                              <div class="upcbox-head"><b>Event Organiser Name </b></div>
                              <div class="spacer_boxtwo"></div>
							  <div class="upcbox-head"><b>Event Name </b></div>
                              <div class="spacer_boxtwo"></div>
                                <div class="wish-text"> <i class='fas fa-map-marker-alt' style='font-size:23px;color:#6cc0b9'></i><span class="upctext">Address : 123 <b>XYZ Road, Saudi Arabia</b><a class="highlight_line" href="#">show in map </a></span></div>
                                <div class="spacer_boxtwo"></div>
                                <div class="wish-text"> <i class="far fa-clock" style='font-size:23px;color:#6cc0b9'></i><span class="upctext">Start Time : <b>09:00 AM</b></span> <span class="upctext">End Time : <b>09:00 PM</b></span></div>
                                <div class="spacer_boxtwo"></div>
                                <div class="wish-text"><b><span class="go-greencap">Event Type : </span>Food</b></div>
                                <div class="spacer_boxtwo"></div>
                                
                                 <p class="blogvenue">**Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 

**Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etonsectetur adipiscing elit, sed do eiusmod tempor.



                                 </p>
                                 <div class="wish-text"><b><span class="col-green">SAR :</span> 100 / SetUp</b></div>
                                 
                                 <button class="btn active" id="bn-venuelist" onclick="filterSelection('all')"><b> Book Now</b></button>
                                 
                              </div>
                           </div>
                        </div><!-----------color-bg-upclist ------------>
                        <div class="upcpagin">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
</div>

                    </div><!------upcoming-contentright ----------->
    </div><!------------ container-fluid ------------------------------>

    <!------- Banner end-------->
    
   
    <!------- Information end-------->

  
    <!-------------- Gallery start ----------------------->
    <!---------------------------- Thumbnail carousel start --------------------------------->
    
    <div class="row"></div>
    @include('footer')
    <!------------------------------------------ Thumbnail carousel end ---------------------------------------------------->
    <!------- body end-------->
    <script>
        // thumbnail carouse

        $('.myvendor').carousel({
            interval: 1000
        });
        $('.myorganiser').carousel({
            interval: 1000
        });
        $('#myvenuedetail').carousel({
            interval: 1000
        });

        $(document).ready(function () {
            $(".nav-tabs a").click(function () {
                $(this).tab('show');
            });
            $('.nav-tabs a').on('shown.bs.tab', function (event) {
                var x = $(event.target).text(); // active tab
                var y = $(event.relatedTarget).text(); // previous tab
                $(".act span").text(x);
                $(".prev span").text(y);
            });
        });

        (function () {
            $('.carousel-showmanymoveone .item').each(function () {
                var itemToClone = $(this);

                for (var i = 1; i < 6; i++) {
                    itemToClone = itemToClone.next();

                    // wrap around if at end of item collection
                    if (!itemToClone.length) {
                        itemToClone = $(this).siblings(':first');
                    }

                    // grab item, clone, add marker class, add to collection
                    itemToClone.children(':first-child').clone()
                        .addClass("cloneditem-" + (i))
                        .appendTo($(this));
                }
            });
        }());

    </script>
