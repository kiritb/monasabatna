@include('header')
<link rel="stylesheet" type="text/css" href="css/upcoming_event_userclick.css">
<link rel="stylesheet" type="text/css" href="css/upcomingcarousel.css">
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
                <br>
                <br>
                <div class="form-group">
                    <div class="col-md-3 col-sm-3 col-xs-3 form-group packform" id="subpack">
                        <button type="submit" class="btn btn-danger sub_theme">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>
<!------- form start-------->
<!------- Banner start-------->

<div class="container-fluid">

    <div class="bg clearfix">
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-6">
            <h3 class="event-two-head">
                <span class="star-headevent">Event Organiser Name</span>

                </h3>
        </div>
        <div class="arabic-logosec">
            <img src="svg/images/arabic-logo.jpg" class="img-responsive">
        </div>
    </div>
    @include('slickslider_thumbnail')
    <!------- Banner end-------->
    <div class="container-fluid" id="eventinfo">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 pack-bg">
            <h3 class="nameupc"> Event Name </h3>
                <div class="row arrange-supplier">

                    <i class="fas fa-map-marker-alt" style="font-size:20px; color:#6cc0b9" aria-hidden="true"></i>
                    <span class="evenspanline"> Address : <b>123 XYZ Road, Saudi Arabia </b><a class="showmap" href="">
                            Show in map</a></span>
                    <div class="spacer_boxupc"></div>
            
                </div>
                
                <div class="row arrange-supplier">
                    <i class="far fa-address-card" id="license"></i><span class="evenspanline">License Number : <b>XYX12345
                        </b></span>
                        <div class="spacer_boxupc"></div>
                 
                </div>
                <div class="row arrange-supplier">
                    <i class="far fa-calendar-alt" id="license"></i><span class="evenspanlineone">Event Date : <b>21 May, 2018
                        </b></span>
                        <div class="spacer_boxupc"></div>
         
                </div>
                <div class="row arrange-supplier">
                <i class="far fa-calendar-plus" id="license"></i><span class="evenspanlineone">Event Type : <b>Fashion
                        </b></span>
                        <div class="spacer_boxupc"></div>
                        <div class="eventstar">
                <span class="col-sar"> <b>SAR:</b></span> <b>100/Setup</b>
            </div>
                </div>
                <div class="row arrange-supplier">
                <i class="far fa-clock" id="license"></i><span class="evenspanline">Booking before : <b>12 May, 2018
                        </b></span>
                        <button class="btn active" id="bn-upclist" onclick="filterSelection('all')"><b> Add to Short List</b></button>
                        <button class="btn active" id="bn-upclistone" onclick="filterSelection('all')"><b> Book Now</b></button>
                        <div class="spacer_boxupc"></div>
            
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="eventrows">
        <div class="fbrow">
            <a class="fb-button" href="#"><i id="fbevent" class="fab fa-facebook-f"></i>Facebook</a>
            <a class="twit-button" href="#"><i id="fbevent" class="fab fa-twitter"></i>Twitter</a>
      
        </div>
    </div>
    <!------- Address end-------->

    <div class="container-fluid" id="upcomingtabs">
    <div id="customerprofile">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                    aria-controls="nav-home" aria-selected="true">About</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                    aria-controls="nav-profile" aria-selected="false">Menu</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
                    aria-controls="nav-contact" aria-selected="false">Amenities</a>
                <a class="nav-item nav-link" id="nav-events-tab" data-toggle="tab" href="#nav-events" role="tab"
                    aria-controls="nav-events" aria-selected="false">Terms & Policies</a>
            </div>
        </nav>

        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                <div class="container-fluid" id="venue-list-bg">
             
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.Lorem ipsum
                    dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                    minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.Lorem ipsum
                    dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                    minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip</p>
    

                   
                </div>
                <!------- venue-list-bg --------->


            </div>
            <!------- tab close ------->
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                Updating ....




            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <!--------------Event Organisers ------------------>
                Coding in process...
                <!------------end of events content ---------------------->


            </div>
            <div class="tab-pane fade" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab">
                <div class="customerlinegreen"></div>
                <div class="container-fluid" id="customer-profile-bg">
                    <!----- star of event page --------->
                    <div class="row custprofeven">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <img src="svg/images/customer-profile11.jpg" alt="Mountains" style="width:300px; height:300px; margin-left:-47px; margin-top:0px">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 cust-prof-onlinepy">
                            <div class="row custprofhead">
                                <h3 class="cust-head"><b>Party Zone</b></h3>
                                <h4 class="go-rightevents" style="float:right">Booking Number : MTNA0789456<br>
                                    <div class="spacer_box"></div>
                                    Booking Date : July 8, 2018
                                </h4>
                            </div>
                            <div class="custevents"> <span class="color-change"><b>Event Name :</span> Food at its best</b></div>
                            <address>
                                <div class="icons-cust"><i class="fas fa-map-marker-alt" style="font-size:22px; color:#6cc0b9"></i></div>
                                <div class="margincst">Address:<b> 123 XYZRoad, Saudi Arabia </b><a href="#"> Show in
                                        map</a></div>
                            </address>


                            <div class="custpack"> <span class="color-change"><b>Date and Time :</span> 20 May 2018,
                                2:30 PM</b></div>
                            <div class="spacer_boxthree"></div>
                            <div class="custpack"> <span class="color-change"><b>Event Type :</span> Food Event</b></div>

                            <div class="spacer_boxthree"></div>
                            <div class="custpack"> <span class="color-change"><b>Total People :</span> 100</b></div>
                            <div class="spacer_boxthree"></div>
                            <div class="custpack"> <span class="color-change"><b>Total Price :</span> SAR.4500</b></div>

                            <div class="spacer_boxthree"></div>

                            <a href="#" style="float:right" class="btnonlinepy" id="myalertcust">Cancel Booking</a>

                        </div>
                    </div>
                </div>
                <!------------end of events content ---------------------->



            </div>
        </div>
    </div>
</div>

    <!-- Portfolio Gallery Grid -->

    <!------- Information start-------->

    
    <!------- Information end-------->

    
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
