@include('header')

<!------- form start-------->
<form class="form-vertical">
    <div class="container-fluid" id="commonpack-bg">
        <div class="row" id="set-bg">
            <div class="col-md-12 col-sm-12 themeform-top">

                <div class="col-md-3 col-sm-3 col-xs-3 form-group packform" id="citypack">
                    <label class="venuelab">City</label>
                    <input type="text" name='datepicker' class="form-control venuemainfrm" placeholder="Jeddah">

                </div>
                <div class="col-md-3 col-sm-3 col-xs-3 form-group packform" id="citypack">
                    <label class="venuelabone">Venue Name</label>
                    <input type="text" name='datepicker' class="form-control venuemainone" placeholder="Jeddah">

                </div>
                <div class="col-md-3 col-sm-3 col-xs-3 form-group packform" id="datapack">
                    <label class="venuelabtwo">Date From</label>
                    <input type="text" class="form-control venuedatefr" placeholder="16 May, 2018">
                    <span class="far fa-calendar-alt date-element-venuedtpick"></span>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-3 form-group packform" id="labpack">
                    <label class="venuelabone">Date To</label>
                    <input type="text" class="form-control venuedateto" placeholder="20 May,2018" name="contact">
                    <span class="far fa-calendar-alt date-element-venuedtpick"></span>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-3 form-group packform" id="labpackone">
                    <a href="#" class="searchvenue">Search</a>
                </div>

            </div>
        </div>
    </div>

</form>
<!------- form start-------->
<!------maps button and headding --------------->
<div class="venueheadbtn">
    <center>
        <h3 class="venuehead"> 121 Search Results </h3>
    </center>
    <a href="#" class="showmapbtn"> Show in Maps </a>
</div>
<!---- maps button and heading ------------>
<!------- Tabs start-------->
<div class="container-fluid" id="customerdetails">
    <div id="customerprofile">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                    aria-controls="nav-home" aria-selected="true">Venue</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                    aria-controls="nav-profile" aria-selected="false">Suppliers</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
                    aria-controls="nav-contact" aria-selected="false">Event Organisers</a>
                <a class="nav-item nav-link" id="nav-events-tab" data-toggle="tab" href="#nav-events" role="tab"
                    aria-controls="nav-events" aria-selected="false">Packages</a>
            </div>
        </nav>

        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                <div class="customerlinegreen"></div>

                <div class="container-fluid" id="venue-list-bg">
                    <div class="filtersidevenue">


                        <div class="panel">
                            <div class="panel-heading">Filter</div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Express Deals
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Venue with Conference Halls
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <h4 class="venuecliphead"> Price</h4>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            SAR 80 - 150
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            SAR 151 - 200
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            SAR 201 - 250
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <h4 class="venuecliphead"> Venue Capacity</h4>
                                <div class="form-group">
                                    <div class="text-num">
                                        <input class="venuetxt" type="text" />
                                        <input class="venuetxt" type="text" />
                                        <label class="venuemin">Min.</label>

                                        <label class="venuemax">Max.</label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <h4 class="venuecliphead"> Venue Type</h4>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Open Space
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Closed Space
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Meeting Rooms
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Auditorium
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Restaurant
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Resort
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Lounge
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Celebration Hall
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Hotels
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <h4 class="venuecliphead"> Event Type</h4>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Business
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Personal
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Other
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <h4 class="venuecliphead"> Offers</h4>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Food
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Lighting
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Sound
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Decoration
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <h4 class="venuecliphead"> Facility / Amenities</h4>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Wi-Fi
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Parking
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Bar
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Spa
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Smoking Zone
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Restaurant
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Room Service
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Fitness Center
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <h4 class="venuecliphead"> Room Type</h4>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Air Conditioning
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Non - Air Conditioning
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <a class="resetvenue" href id="Reset">Reset Filters</a>
                                <div class="filterext"></div>

                            </div>

                        </div>
                        <!------- panel end -------->

                    </div>
                    <!-------filtersidvenue ---------->


                    <!---------- wishlist -------------------------------->
                    <div class="wishlistfive">

                        <!----------------------- tab container end -------------------->
                        <div class="row col-lg-10 col-md-10 col-sm-10 col-xs-10">
                            <div class="row venueslist">
                                <div class="venulistsortleft"> </div>
                                <div class="content-eve-top">
                                    <div class="form-group">

                                        <select class="form-control sortvenues">
                                            <option>Sort by: <b>Star Rating</option>
                                            <option>Price high to low</option>
                                            <option>Price low to high</option>
                                            <option>Ratio high to low</option>
                                            <option>Ratio low to high</option>
                                        </select>

                                    </div>
                                </div>
                            </div>
                            @if (count($data["vennueLists"]) > 0)
                            @foreach ($data["vennueLists"] as $vennueLists)
                            <div class="row color-bg-venuelist">
                                <div class="content-eve">
                                    <img src={{ $vennueLists["filePath"] }} alt="Mountains" style="width:300px; height:273px">
                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="content-eve-right">
                                    <div class="content-optionblog">
                                        <div class="wish-head"><b> {{ $vennueLists["vennueName"] }} </b></div>
                                        <div class="spacer_boxtwo"></div>

                                        <div class="wish-text">

                                            @php $rating = $vennueLists["rating"]; @endphp

                                            @foreach(range(1,5) as $i)
                                            <span class="fa-stack" style="width:1em">
                                                <i class="far fa-star fa-stack-1x"></i>

                                                @if($rating >0)
                                                @if($rating >0.5)
                                                <i class="fas fa-star fa-stack-1x orange"></i>
                                                @else
                                                <i class="fas fa-star-half fa-stack-1x orange"></i>
                                                @endif
                                                @endif
                                                @php $rating--; @endphp
                                            </span>
                                            @endforeach

                                        </div>

                                        <div class="spacer_boxtwo"></div>
                                        <div class="wish-text">
                                            <a href={{ $vennueLists["googleMapLink"] }} target="_blank">
                                                <i class='fas fa-map-marker-alt' style='font-size:25px;color:#6cc0b9'></i>
                                                {{ $vennueLists["AddressLine_1"] }}
                                                {{ $vennueLists["AddressLine_2"] }},
                                                {{ $vennueLists["cityName"] }}
                                            </a>
                                        </div>
                                        <div class="spacer_boxtwo"></div>
                                        <div class="wish-text"><b><span class="go-green">Amenities:</span>
                                                @foreach($vennueLists["ammenties"] as $ammenties)

                                                {{ $loop->first ? '' : ', ' }}
                                                <span class="nice">{{ $ammenties }}</span>

                                                @endforeach
                                            </b></div>
                                        <div class="spacer_boxtwo"></div>

                                        <p class="blogvenue">{{ $vennueLists["vennueShortDescription"] }}</p>
                                        <div class="wish-text"><b><span class="col-green">SAR:</span> {{
                                                $vennueLists["actualPrice"] }} {{ $vennueLists["pricingType"] }}</b>
                                            <b><i class="fas fa-users" id="fasvenue" style="font-size:20px;color:#6cc0b9"></i>
                                                100-200</b></div>
                                        <button class="btn active" id="bn-venuelist" onclick="filterSelection('all')"><b>
                                                Book Now</b></button>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <div>No data!!</div>
                            @endif
                        </div>

                    </div>
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
<!------- tabs end-------->
<div class="venuespagin">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
</div>

<!---------- end of container ------------->


<!------- Information end-------->
<!-------------------- tab container begin ------------------------->

<!---------------------------- Thumbnail carousel start --------------------------------->

<div class="row"> </div>


@include('footer')

<!------- body end-------->

<script type="text/javascript">
    $(document).ready(function () {
        $("#datepicker").datepicker();
        $('.fa-calendar').click(function () {
            $("#datepicker").focus();
        });

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

    $(function () {
        $('a[data-toggle="tab"]').on('click', function (e) {
            window.localStorage.setItem('activeTab', $(e.target).attr('href'));
        });
        var activeTab = window.localStorage.getItem('activeTab');
        if (activeTab) {
            $('#myDetailTab a[href="' + activeTab + '"]').tab('show');
            window.localStorage.removeItem("activeTab");
        }
    });

</script>
