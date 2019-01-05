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
    @include('sliderinner')
    <!------- Banner end-------->
    <div class="container-fluid" id="eventinfo">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 pack-bg">
            <h3 class="nameupc"> Event Name </h3>
                <div class="row arrange-supplier">

                    <i class="fas fa-map-marker-alt" style="font-size:20px; color:#6cc0b9" aria-hidden="true"></i>
                    <span class="evenspanline"> Address : <b>123 XYZ Road, Saudi Arabia </b><a class="showmap" href="">
                            Show in map</a></span>
                    <div class="spacer_boxtwo"></div>
                    <div class="spacer_boxtwo"></div>
                </div>
                
                <div class="row arrange-supplier">
                    <i class="far fa-address-card" id="license"></i><span class="evenspanline">License Number : <b>XYX12345
                        </b></span>
                        <div class="spacer_boxtwo"></div>
                        <div class="spacer_boxtwo"></div>
                </div>
                <div class="row arrange-supplier">
                    <i class="far fa-calendar-alt" id="license"></i><span class="evenspanline">Event Date : <b>21 May, 2018
                        </b></span>
                        <div class="spacer_boxtwo"></div>
                        <div class="spacer_boxtwo"></div>
                </div>
                <div class="row arrange-supplier">
                <i class="far fa-calendar-plus" id="license"></i><span class="evenspanline">Event Type : <b>Fashion
                        </b></span>
                        <div class="spacer_boxtwo"></div>
                        <div class="spacer_boxtwo"></div>
                </div>
                <div class="row arrange-supplier">
                <i class="far fa-clock" id="license"></i><span class="evenspanline">Booking before : <b>12 May, 2018
                        </b></span>
                        <div class="spacer_boxtwo"></div>
                        <div class="spacer_boxtwo"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="eventrows">
        <div class="fbrow">
            <a class="fb-button" href="#"><i id="fbevent" class="fab fa-facebook-f"></i>Facebook</a>
            <a class="twit-button" href="#"><i id="fbevent" class="fab fa-twitter"></i>Twitter</a>
            <a class="eventterms" href="#"> Terms & Policies</a>
        </div>
    </div>
    <!------- Address end-------->

    <div class="container-fluid" id="eventdetails">
        <h4 class="event_h_four">15 Event themes offered</h4>
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab"
                    aria-controls="nav-about" aria-selected="true">All</a>
                <a class="nav-item nav-link" id="nav-provided-tab" data-toggle="tab" href="#nav-provided" role="tab"
                    aria-controls="nav-provided" aria-selected="false">Birthday</a>
                <a class="nav-item nav-link" id="nav-requisites-tab" data-toggle="tab" href="#nav-requisites" role="tab"
                    aria-controls="nav-requisites" aria-selected="false">Wedding</a>
                
                <a class="nav-item nav-link text-wrap" id="nav-testi-tab" data-toggle="tab" href="#nav-testi" role="tab"
                    aria-controls="nav-testi" aria-selected="false">Business Meeting</a>
                
                <a class="nav-item nav-link text-wrap" id="nav-terms-tab" data-toggle="tab" href="#nav-terms" role="tab"
                    aria-controls="nav-terms" aria-selected="false">Corporate Events</a>
            </div>
        </nav>

        <div class="tab-content" id="nav-eventportfolioContent">
            <div class="tab-pane fade show active" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">

                <!-- <div class="eventgreyline"></div> -->
                <div class="eventportcontent">
                    <!---------- start of content --------------->
                    <div class="row">
                        <!--- row start ---------->
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="event-content">
                                <img src="svg/images/event-portfolio-one.jpg" class="img-responsive" alt="Mountains"
                                    style="width:100%; height:100%">
                                <div class="row portthemebtn">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="content-option">
                                            <strong><b>Theme Name</b></strong>

                                            <p><b><span class="col-green">SAR:</span> 100 / SetUp</b></p>

                                        </div>
                                    </div>
                                    
                                    <button class="btn active" id="btn-port" onclick="filterSelection('all')"> Book Now</button>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="event-content">
                                <img src="svg/images/event-portfolio-two.jpg" class="img-responsive" alt="Mountains"
                                    style="width:100%; height:100%">
                                <div class="row portthemebtn">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="content-option">
                                            <strong><b>Theme Name</b></strong>

                                            <p><b><span class="col-green">SAR:</span> 100 / SetUp</b></p>
                                            </p>
                                        </div>
                                    </div>
                                   
                                    <button class="btn active" id="btn-port" onclick="filterSelection('all')"> Book Now</button>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="event-content">
                                <img src="svg/images/event-portfolio-three.jpg" class="img-responsive" alt="Mountains"
                                    style="width:100%; height:100%">
                                <div class="row portthemebtn">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="content-option">
                                            <strong><b>Theme Name</b></strong>

                                            <p><b><span class="col-green">SAR:</span> 100 / SetUp</b></p>
                                            </p>
                                        </div>
                                    </div>
                                 
                                    <button class="btn active" id="btn-port" onclick="filterSelection('all')"> Book Now</button>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="event-content">
                                <img src="svg/images/event-portfolio-four.jpg" class="img-responsive" alt="Mountains"
                                    style="width:100%; height:100%">
                                <div class="row portthemebtn">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="content-option">
                                            <strong><b>Theme Name</b></strong>

                                            <p><b><span class="col-green">SAR:</span> 100 / SetUp</b></p>
                                            </p>
                                        </div>
                                    </div>
                                   
                                    <button class="btn active" id="btn-port" onclick="filterSelection('all')"> Book Now</button>
                                
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="event-content">
                                <img src="svg/images/event-portfolio-five.jpg" class="img-responsive" alt="Mountains"
                                    style="width:100%; height:100%">
                                <div class="row portthemebtn">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="content-option">
                                            <strong><b>Theme Name</b></strong>

                                            <p><b><span class="col-green">SAR:</span> 100 / SetUp</b></p>
                                            </p>
                                        </div>
                                    </div>
                        
                                    <button class="btn active" id="btn-port" onclick="filterSelection('all')"> Book Now</button>
                            
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="event-content">
                                <img src="svg/images/event-portfolio-six.jpg" class="img-responsive" alt="Mountains"
                                    style="width:100%; height:100%">
                                <div class="row portthemebtn">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="content-option">
                                            <strong><b>Theme Name</b></strong>

                                            <p><b><span class="col-green">SAR:</span> 100 / SetUp</b></p>
                                            </p>
                                        </div>
                                    </div>
                                    
                                    <button class="btn active" id="btn-port" onclick="filterSelection('all')"> Book Now</button>
                                    
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="event-content">
                                <img src="svg/images/event-portfolio-seven.jpg" class="img-responsive" alt="Mountains"
                                    style="width:100%; height:100%">
                                <div class="row portthemebtn">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="content-option">
                                            <strong><b>Theme Name</b></strong>

                                            <p><b><span class="col-green">SAR:</span> 100 / SetUp</b></p>
                                            </p>
                                        </div>
                                    </div>
                                  
                                    <button class="btn active" id="btn-port" onclick="filterSelection('all')"> Book Now</button>
                                
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="event-content">
                                <img src="svg/images/event-portfolio-eight.jpg" class="img-responsive" alt="Mountains"
                                    style="width:100%; height:100%">
                                <div class="row portthemebtn">
                                    <div class="col-lg-6 col-md-6 col-xs-6">
                                        <div class="content-option">
                                            <strong><b>Theme Name</b></strong>

                                            <p><b><span class="col-green">SAR:</span> 100 / SetUp</b></p>
                                            </p>
                                        </div>
                                    </div>
                             
                                    <button class="btn active" id="btn-port" onclick="filterSelection('all')"> Book Now</button>
                                
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="event-content">
                                <img src="svg/images/event-portfolio-nine.jpg" class="img-responsive" alt="Mountains"
                                    style="width:100%; height:100%">
                                <div class="row portthemebtn">
                                    <div class="col-lg-6 col-md-6 col-xs-6">
                                        <div class="content-option">
                                            <strong><b>Theme Name</b></strong>

                                            <p><b><span class="col-green">SAR:</span> 100 / SetUp</b></p>
                                            </p>
                                        </div>
                                    </div>
                                
                                    <button class="btn active" id="btn-port" onclick="filterSelection('all')"> Book Now</button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-------------end of content -------------------------->
                </div>
            </div>
            <div class="tab-pane fade" id="nav-provided" role="tabpanel" aria-labelledby="nav-provided-tab">
                <div class="packagegreyline"></div>
                <div class="packagecontent">
                    <!--------------Event Organisers ------------------>
                    <ul style="list-style-type:circle; color:6cc0b9">
                        <ol> Write the review for all the facilities </ol>
                        <ol> Write the review for all the facilities </ol>
                        <ol> Write the review for all the facilities </ol>
                        <ol> Write the review for all the facilities </ol>
                        <ol> Write the review for all the facilities </ol>
                    </ul>
                </div>
                <!------------end of events content ---------------------->
            </div>
            <div class="tab-pane fade" id="nav-requisites" role="tabpanel" aria-labelledby="nav-requisites-tab">
                <div class="packagegreyline"></div>
                <div class="packagecontent">
                    <!--------------Event Organisers ------------------>
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
                <!------------end of events content ---------------------->

            </div>
            <div class="tab-pane fade" id="nav-testi" role="tabpanel" aria-labelledby="nav-testi-tab">
                <div class="packagegreyline"></div>
                <!--------------Event Organisers ------------------>
                <div class="packagecontent">

                </div>
                <!---- package content ---------->
                <!------------end of events content ---------------------->

            </div>
            <div class="tab-pane fade" id="nav-terms" role="tabpanel" aria-labelledby="nav-terms-tab">
                <div class="packagegreyline"></div>
                <!------------end of events content ---------------------->
                <div role="tabpanel" class="tab-pane active" id="about">
                    <div class="packagecontent">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.Lorem
                            ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                            ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.Lorem
                            ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                            ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Gallery Grid -->

    <!------- Information start-------->

    <div class="container-fluid" id="starreview">
        <div class="bg-star">
            <div class="row eventcustom">
                <div class="col-lg-12 col-md-12 col-xs-6">
                    <h4 class="eve-head text-center">
                        <bold>See What our Customers are saying</bold>
                    </h4>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-6">
                    <span class="star-head">Responsiveness</span>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-6">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checkcolor"></span>
                    <span class="fa fa-star checkcolor"></span>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-6">
                    <span class="star-head">Quality</span>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-6">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checkcolor"></span>
                    <span class="fa fa-star checkcolor"></span>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-6">
                    <span class="star-head">Availability</span>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-6">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checkcolor"></span>
                    <span class="fa fa-star checkcolor"></span>
                </div>

                <div class="col-lg-6 col-md-6 col-xs-6">
                    <span class="star-head"> Value for money</span>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-6">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checkcolor"></span>
                    <span class="fa fa-star checkcolor"></span>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-6">
                    <span class="star-head"> Quality</span>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-6">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checkcolor"></span>
                    <span class="fa fa-star checkcolor"></span>
                </div>

            </div>
        </div>
    </div>
    <!------- Information end-------->

    <div class="eventgreyline"></div>
    <!-------------- Gallery start ----------------------->
    <!---------------------------- Thumbnail carousel start --------------------------------->
    @include('slickslider')
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
