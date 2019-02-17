@include('header')


<!------- body start-------->
<div class="maindivider"> </div>
<!----
      <nav class="twoprofile">
    <div class="float-right">
        <a href class="profilehead"><img src="svg/images/photohead.png" style="margin-top:12px;"><span class="badge" id="headbadge">2</span></a>
        <div class="headdropdown"><form>
                  <select name="cars">
                     <option value="volvo">Volvo</option>
                     <option value="saab">Saab</option>
                     <option value="fiat">Fiat</option>
                     <option value="audi">Audi</option>
                  </select>
                  </form></div>
    </div>
</nav>
------>
<div class="container-fluid" id="customerdetails">
    <!------- collapse navbar start-------->
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                aria-controls="pills-home" aria-selected="true"><b>My Bookings</b></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                aria-controls="pills-profile" aria-selected="false"><b>Booking History</b></a>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

            <div id="customerprofile">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                            aria-controls="nav-home" aria-selected="true">Venue</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                            aria-controls="nav-profile" aria-selected="false">Suppliers</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
                            aria-controls="nav-contact" aria-selected="false">Event Organisers<span class="badge"> 2</span></a>
                        <a class="nav-item nav-link" id="nav-events-tab" data-toggle="tab" href="#nav-events" role="tab"
                            aria-controls="nav-events" aria-selected="false">Events</a>
                    </div>
                </nav>

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                        <div class="customerlinegreen"></div>
                        <div class="container-fluid" id="customer-profile-bg">
                            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <img src="svg/images/customer-profile11.jpg" alt="Mountains" style="width:300px; height:300px; margin-left:-62px; margin-top:0px">
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 cust-prof-onlinepy">
                                    <div class="row custprofhead">
                                        <h3 class="cust-head"><b>La Fontaine La Plage Resort</b></h3>
                                        <h4 class="go-right" style="float:right">Booking Number : MTNA0789456<br>
                                            Booking Date : July 8, 2018
                                        </h4>
                                    </div>
                                    <address>
                                        <div class="icons-cust"><i class="fas fa-map-marker-alt" style="font-size:22px; color:#6cc0b9"></i></div>
                                        <div class="margincst">Address:<b> 123 XYZRoad, Saudi Arabia </b><a href="#">
                                                Show in map</a></div>
                                    </address>
                                    <datetime>
                                        <div class="icons-custone"><i class="fas fa-clipboard-list" style='font-size:19px; color:#6cc0b9'></i></div>
                                        <div class="margincst">From:<b> July 16,2018<span class="spaceone">11:30 AM</span></b>&nbsp;<a
                                                href="#">Change </a> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; To:<b>July
                                                16,2018<span class="spaceone"> 11:30 AM</span></b>&nbsp;<a href="#">Change
                                            </a></div>
                                    </datetime>

                                    <div>
                                        <div class="icons-custone"><i class="far fa-clock" style='font-size:17px; color:#6cc0b9'></i></div>
                                        <div class="margincst"> 5 Days 4 Nights</div>
                                    </div>

                                    <div class="custpack"> <span class="color-change"><b>Services :</span> Catering,
                                        Lighting and Sound</b></div>

                                    <div class="custpack"> <span class="color-change"><b>Total Price :</span> SAR.756</b></div>


                                    <div class="custpack"><a href="#" class="remunderline"><b>Paid Amount : SAR 151.2</b></a></div>

                                    <div class="custpack"><a href="#" class="remunderline"><b>Pending Amount : SAR
                                                604.8</b></a><span class="dynamic_red"> (To be paid at venue. 16
                                            May,2018 before 11.30 AM)</span></div>

                                    <div class="redbold"><b>2 days, 20 hours, 28 min, 18 sec remaining for payment </b></div>

                                    <div class="blackbold"><b>Please give the code <span class="custonline-color">'MS1234'</span>
                                            at venue while making the remaining payment.</b></div>
                                    <a href="#" style="float:right" class="btnonlinepy" id="myalertcust">Cancel Booking</a>

                                </div>
                            </div>
                        </div>


                    </div>
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
                            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <img src="svg/images/customer-profile11.jpg" alt="Mountains" style="width:300px; height:300px; margin-left:-62px; margin-top:0px">
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 cust-prof-onlinepy">
                                    <div class="row custprofhead">
                                        <h3 class="cust-head"><b>Party Zone</b></h3>
                                        <h4 class="go-rightevents" style="float:right">Booking Number : MTNA0789456<br>
                                            Booking Date : July 8, 2018
                                        </h4>
                                    </div>
                                    <div class="custevents"> <span class="color-change"><b>Event Name :</span> Food at
                                        its best</b></div>
                                    <address>
                                        <div class="icons-cust"><i class="fas fa-map-marker-alt" style="font-size:22px; color:#6cc0b9"></i></div>
                                        <div class="margincst">Address:<b> 123 XYZRoad, Saudi Arabia </b><a href="#">
                                                Show in map</a></div>
                                    </address>


                                    <div class="custpack"> <span class="color-change"><b>Date and Time :</span> 20 May
                                        2018, 2:30 PM</b></div>

                                    <div class="custpack"> <span class="color-change"><b>Event Type :</span> Food Event</b></div>


                                    <div class="custpack"> <span class="color-change"><b>Total People :</span> 100</b></div>

                                    <div class="custpack"> <span class="color-change"><b>Total Price :</span> SAR.4500</b></div>



                                    <a href="#" style="float:right" class="btnonlinepy" id="myalertcust">Cancel Booking</a>

                                </div>
                            </div>
                        </div>
                        <!------------end of events content ---------------------->



                    </div>
                </div>
            </div>

        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <!---- customer_profile_paying_cash ------>
            <div id="bookinghistorysection">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="bookvenue-tab" data-toggle="tab" href="#bookvenue" role="tab"
                            aria-controls="bookvenue" aria-selected="true">Venues</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="booksupp-tab" data-toggle="tab" href="#booksupp" role="tab"
                            aria-controls="booksupp" aria-selected="false">Suppliers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="bookorg-tab" data-toggle="tab" href="#bookorg" role="tab" aria-controls="bookorg"
                            aria-selected="false">Event Organisers <span class="badge"> 2</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="bookevent-tab" data-toggle="tab" href="#bookevent" role="tab"
                            aria-controls="bookevent" aria-selected="false">Events</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="bookvenue" role="tabpanel" aria-labelledby="bookvenue-tab">
                        <div class="container-fluid" id="booking-history-bg">
                            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <img src="svg/images/customer-profile11.jpg" alt="Mountains" style="width:300px; height:300px; margin-left:-62px; margin-top:0px">
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 cust-prof-onlinepy">
                                    <div class="row custprofhead">
                                        <h3 class="cust-head"><b>La Fontaine La Plage Resort</b></h3>
                                        <h4 class="go-right" style="float:right">Booking Number : MTNA0789456<br>
                                            Booking Date : July 8, 2018
                                        </h4>
                                    </div>
                                    <address>
                                        <div class="icons-cust"><i class="fas fa-map-marker-alt" style="font-size:22px; color:#6cc0b9"></i></div>
                                        <div class="margincst">Address:<b> 123 XYZRoad, Saudi Arabia </b><a href="#">
                                                Show in map</a></div>
                                    </address>
                                    <datetime>
                                        <div class="icons-custone"><i class="fas fa-clipboard-list" style='font-size:19px; color:#6cc0b9'></i></div>
                                        <div class="margincst">From:<b> July 16,2018<span class="spaceone">11:30 AM</span></b>&nbsp;<a
                                                href="#">Change </a> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; To:<b>July
                                                16,2018<span class="spaceone"> 11:30 AM</span></b>&nbsp;<a href="#">Change
                                            </a></div>
                                    </datetime>

                                    <div>
                                        <div class="icons-custone"><i class="far fa-clock" style='font-size:17px; color:#6cc0b9'></i></div>
                                        <div class="margincst"> 5 Days 4 Nights</div>
                                    </div>

                                    <div class="custpack"> <span class="color-change"><b>Services :</span> Catering,
                                        Lighting and Sound</b></div>

                                    <div class="custpack"> <span class="color-change"><b>Total Price :</span> SAR.756</b></div>

                                    <div class="custpack"><a href="#" class="remunderline"><b>Paid Amount : SAR 151.2</b></a></div>


                                    <b> <a style="float:right" class="venuepy-cash">Cancelled by you</a></b>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="booksupp" role="tabpanel" aria-labelledby="booksupp-tab">

                        <div class="container-fluid" id="booking-history-bg">
                            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <img src="svg/images/custprof-supplier.jpg" alt="Mountains" style="width:300px; height:300px; margin-left:-62px; margin-top:0px">
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 cust-prof-onlinepy">
                                    <div class="row custprofhead">
                                        <h3 class="cust-head"><b>Party Center</b></h3>
                                        <h4 class="go-supplier" style="float:right">Booking Number : MTNA0789456<br>
                                            Booking Date : July 8, 2018
                                        </h4>
                                    </div>
                                    <div class="packoffer"><b>Package: Desserts, Chocolates and Cakes </b></div>
                                    <address>
                                        <div class="icons-cust"><i class="fas fa-map-marker-alt" style="font-size:22px; color:#6cc0b9"></i></div>
                                        <div class="margincst">Address:<b> 123 XYZRoad, Saudi Arabia </b><a href="#">
                                                Show in map</a></div>
                                    </address>
                                    <datetime>
                                        <div class="icons-custone"><i class="fas fa-clipboard-list" style='font-size:19px; color:#6cc0b9'></i></div>
                                        <div class="margincst">From:<b> July 16,2018<span class="spaceone">11:30 AM</span></b>&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp; &nbsp; To:<b>July 16,2018<span class="spaceone"> 11:30
                                                    AM</span></b></div>
                                    </datetime>


                                    <div class="custpack"> <span class="color-change"><b>Item Supplied Date :</span>
                                        May 16,2018</b></div>

                                    <div class="custpack"> <span class="color-change"><b>Attached Event Organiser :</span>Event
                                        Organiser Name</b></div>

                                    <div class="custpack"> <span class="color-change"><b>Attached Venue :</span> Venue
                                        Name</b></div>

                                    <div class="custpack"> <span class="color-change"><b>Total Price :</span> SAR.432</b></div>


                                    <button style="float:right" type="submit" class="btn btn-default btncutomer">Write
                                        a Review</button>

                                </div>
                            </div>
                        </div>
                        <!------------end of events content ---------------------->
                        <div class="container-fluid" id="customer-profile-bg">
                            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <img src="svg/images/customer-profile11.jpg" alt="Mountains" style="width:300px; height:300px; margin-left:-62px; margin-top:0px">
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 cust-prof-onlinepy">
                                    <div class="row custprofhead">
                                        <h3 class="cust-head"><b>Party Center (White Feather)</b></h3>
                                        <h4 class="go-supplierone" style="float:right">Booking Number : MTNA0789456<br>
                                            Booking Date : July 8, 2018
                                        </h4>
                                    </div>
                                    <div class="packoffer"><b>Package: Desserts, Chocolates and Cakes </b></div>
                                    <address>
                                        <div class="icons-cust"><i class="fas fa-map-marker-alt" style="font-size:22px; color:#6cc0b9"></i></div>
                                        <div class="margincst">Address:<b> 123 XYZRoad, Saudi Arabia </b><a href="#">
                                                Show in map</a></div>
                                    </address>
                                    <datetime>
                                        <div class="icons-custone"><i class="fas fa-clipboard-list" style='font-size:19px; color:#6cc0b9'></i></div>
                                        <div class="margincst">From:<b> July 16,2018<span class="spaceone">11:30 AM</span></b>&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp; &nbsp; To:<b>July 16,2018<span class="spaceone"> 11:30
                                                    AM</span></b></div>
                                    </datetime>


                                    <div class="custpack"> <span class="color-change"><b>Item Supplied Date :</span>
                                        May 16,2018</b></div>

                                    <div class="custpack"> <span class="color-change"><b>Total Price :</span> SAR.432</b></div>


                                    <b> <a style="float:right" class="supp_cancelled">Cancelled by you</a></b>

                                </div>
                            </div>
                        </div>
                        <!------------------ end of event content -------------->

                    </div>
                    <div class="tab-pane fade" id="bookorg" role="tabpanel" aria-labelledby="bookorg-tab">

                        <div class="container-fluid" id="booking-history-bg">
                            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <img src="svg/images/custprof-supplier.jpg" alt="Mountains" style="width:300px; height:300px; margin-left:-62px; margin-top:0px">
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 cust-prof-onlinepy">
                                    <div class="row custprofhead">
                                        <h3 class="cust-head"><b>Party Zone</b></h3>
                                        <h4 class="go-supplier" style="float:right">Booking Number : MTNA0789456<br>
                                            Booking Date : July 8, 2018
                                        </h4>
                                    </div>
                                    <div class="packoffer"><b>Package: Flower de-rose De </b></div>
                                    <address>
                                        <div class="icons-cust"><i class="fas fa-map-marker-alt" style="font-size:22px; color:#6cc0b9"></i></div>
                                        <div class="margincst">Address:<b> 123 XYZRoad, Saudi Arabia </b><a href="#">
                                                Show in map</a></div>
                                    </address>
                                    <datetime>
                                        <div class="icons-custone"><i class="fas fa-clipboard-list" style='font-size:19px; color:#6cc0b9'></i></div>
                                        <div class="margincst">From:<b> July 16,2018<span class="spaceone">11:30 AM</span></b>&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp; &nbsp; To:<b>July 16,2018<span class="spaceone"> 11:30
                                                    AM</span></b></div>
                                    </datetime>



                                    <div class="custpack"> <span class="color-change"><b>Total Price :</span> SAR.432</b></div>


                                    <button style="float:right" type="submit" class="btn btn-default btnevents">Write a
                                        Review</button>

                                </div>
                            </div>
                        </div>
                        <!------------end of events content ---------------------->

                    </div>
                    <div class="tab-pane fade" id="bookevent" role="tabpanel" aria-labelledby="bookevent-tab">declare
                        variables</div>
                </div>
            </div>
        </div>
        <!--------- closure offour tabs ------------>
    </div>
    <!---------- closure of two tabs ------------>
</div>

<!------- collapse navbar end-------->

<!--------- tab container begin ------------------------->

<!----------------------- tab container end -------------------->





<!------------------------------ Add to express ----------------------------------->

<!------------------------------ Add to Express ----------------------------------->
</div>

</div>


@include('footer')
<!------------------------------------ login page end------------------------------------------>
<!------- body end-------->

<!------- Footer end-------->
<script>
    <!------inner page-Tabs-------->
    $(document).ready(function () {
        $("#myalertcust").click(function () {
            $("#reviewcust").modal();
        });
        $(".nav-tabs a").click(function () {
            $(this).tab('show');
        });
    });

</script>

<script>
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

</script>
<script>
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
