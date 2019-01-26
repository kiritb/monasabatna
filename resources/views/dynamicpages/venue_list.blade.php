@include('shared/header')
<link rel="stylesheet" type="text/css" href="{{ url('css/venues.css') }}">
<!------- form start-------->

@include('shared/city-date')

<!------- form start-------->
<!------maps button and headding --------------->
<div class="venueheadbtn">
    <center>
        <h3 class="venuehead"> {{ $data['paginate']['total'] }} Search Results </h3>
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
                        <div class="list">
                            <div class="list-heading">Filter</div>
                            <div class="list-body">
                                <div class="form-group">
                                    <div class="form-check venue_filters">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Express Deals
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Venue with Conference Halls
                                        </label>
                                    </div>
                                </div>

                                <!---- Price - formgroup ------->

                                @if (isset($data["filters"]["price_range"]) && count($data["filters"]["price_range"]) >
                                0)
                                @include('ui_utils/filter-checks', ['filters' => $data["filters"]["price_range"],
                                'type_title'
                                => 'Price'], ['prefix' => 'SAR'])
                                @else
                                <div>No data!!</div>
                                @endif

                                <!---- Seating Capacity - formgroup ------->

                                @if (isset($data["filters"]["seating_capacity"]) &&
                                count($data["filters"]["seating_capacity"])
                                >
                                0)
                                @include('ui_utils/filter-checks', ['filters' => $data["filters"]["seating_capacity"],
                                'type_title'
                                => 'Seating Capacity'])
                                @else
                                <div>No data!!</div>
                                @endif

                                <!---- Venue Type - formgroup ------->

                                @if (isset($data["filters"]["vennue_types"]) && count($data["filters"]["vennue_types"])
                                >
                                0)
                                @include('ui_utils/filter-checks', ['filters' => $data["filters"]["vennue_types"],
                                'type_title'
                                => 'Venue Type'])
                                @else
                                <div>No data!!</div>
                                @endif

                                <!---- Event Type - formgroup ------->

                                @if (isset($data["filters"]["event_types"]) && count($data["filters"]["event_types"])
                                >
                                0)
                                @include('ui_utils/filter-checks', ['filters' => $data["filters"]["event_types"],
                                'type_title'
                                => 'Event Type'])
                                @else
                                <div>No data!!</div>
                                @endif

                                <!---- Services Types - formgroup ------->

                                @if (isset($data["filters"]["services_types"]) &&
                                count($data["filters"]["services_types"])
                                >
                                0)
                                @include('ui_utils/filter-checks', ['filters' => $data["filters"]["services_types"],
                                'type_title'
                                => 'Service Types'])
                                @else
                                <div>No data!!</div>
                                @endif

                                <!---- Facility / Amenities - formgroup ------->

                                @if (isset($data["filters"]["ammenties_types"]) &&
                                count($data["filters"]["ammenties_types"])
                                >
                                0)
                                @include('ui_utils/filter-checks', ['filters' => $data["filters"]["ammenties_types"],
                                'type_title'
                                => 'Facility / Amenities'])
                                @else
                                <div>No data!!</div>
                                @endif

                                <!---- Room Type - formgroup ------->

                                @if (isset($data["filters"]["room_types"]) &&
                                count($data["filters"]["room_types"])
                                >
                                0)
                                @include('ui_utils/filter-checks', ['filters' => $data["filters"]["room_types"],
                                'type_title'
                                => 'Room Type'])
                                @else
                                <div>No data!!</div>
                                @endif

                                <!---- Reset Filters ------->

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
                                        <div class="wish-head"><b><a href="{{ url('/vennues/'.$vennueLists['vennueId']) }}">{{
                                                    $vennueLists["vennueName"] }}</a></b></div>
                                        <div class="spacer_boxtwo"></div>

                                        <div class="wish-text">

                                            @include('ui_utils.stars', ['stars' => $vennueLists["rating"]])

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

                <!-- Venue list pagination -->
                <div class="venuespagin">
                    <ul class="pagination">
                        <li class="page-item {{ ($data['paginate']['prev_page_url'])?'':'disabled' }}"><a class="page-link"
                                href="{{ $data['paginate']['prev_page_url'] }}">Previous</a></li>
                        @php $totalpages = $data["paginate"]["last_page"]; @endphp

                        @foreach(range(1,$totalpages) as $i)
                        @if($totalpages >0)
                        <li class="page-item {{ ($data['paginate']['current_page']==$i)?'active':'' }}"><a class="page-link"
                                href="{{ $data['paginate']['path'] }}?page={{ $i }}">{{
                                $i }}</a></li>
                        @endif
                        @php $totalpages--; @endphp
                        @endforeach
                        <li class="page-item {{ ($data['paginate']['next_page_url'])?'':'disabled' }}"><a class="page-link"
                                href="{{ $data['paginate']['next_page_url'] }}">Next</a></li>
                    </ul>
                </div>

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

<div class="row"> </div>

@include('shared/footer')
<script src="{{ url('js/city-date.js') }}" type="text/javascript" charset="utf-8"></script>