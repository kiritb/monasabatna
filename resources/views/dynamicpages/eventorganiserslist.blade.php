@include('shared/header')

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
<!------maps button and headding --------------->
<!---<div class="venueheadbtn">
    <center>
        <h3 class="venuehead"> 121 Search Results </h3>
    </center>
    <a href="#" class="showmapbtn"> Show in Maps </a>
</div> -->
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

                <!------- venue-list-bg --------->
            </div>
            <!------- tab close ------->
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="customerlinegreen"></div>
                Updating ....
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="customerlinegreen"></div>
                <!--------------left ------------------>
                <div class="container-fluid" id="venue-list-bg">
                    <div class="filtersidevenue">


                        <div class="list">
                            <div class="list-heading">Filter</div>
                            <div class="list-body">
                                <h4 class="venuecliphead"> Rating</h4>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            High - Low
                                        </label>
                                        <i class="fas fa-arrow-up" style="color:#a4a4a5"></i>
                                        <i class="fas fa-arrow-down" style="color:#a4a4a5"></i>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Low - High
                                        </label>
                                        <i class="fas fa-arrow-down" style="color:#a4a4a5"></i>
                                        <i class="fas fa-arrow-up" style="color:#a4a4a5"></i>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <!--
                            <h4 class="venuecliphead"> Availability</h4>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                          1 Week
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <!--
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                           2 Week
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <!--
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                           3 Week
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


                                <h4 class="venuecliphead"> Event Type</h4>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Birthday
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Wedding
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Business Meeting
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->

                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Conference
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Corporate Event
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

                                <a class="resetvenue" href id="Reset">Reset Filters</a>
                                <div class="filterext"></div>

                            </div>

                        </div>
                        <!------- panel end -------->

                    </div>
                    <!-------filtersidvenue ---------->

                    <!--- event right ---------------------->
                    <div class="container-fluid" id="eventlist-contentright">
                        <div class="row rightevent">
                            <div class="row evenorglist">
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

                            @if (count($data["eventOrganiserslist"]) > 0)
                            @foreach ($data["eventOrganiserslist"] as $key=>$eventOrganiser)
                            <div class="row color-bg-eventlist">
                                <div class="content-eve">
                                    <img src={{ $eventOrganiser['filePath'] }} alt="Mountains" style="width:300px; height:273px">
                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="content-eve-right">
                                    <div class="content-optionblog">
                                        <div class="wish-head"><b>
                                                <a href={{ url('/events/organisers/') . "/" . $eventOrganiser['eventOrganisersId'] }}
                                                    alt="event organiser">
                                                    {{ $eventOrganiser['eventOrgainsersName'] }}
                                                </a>
                                            </b> </div>
                                        <div class="spacer_boxtwo"></div>
                                        <div class="wish-text">
                                            @include('ui_utils.stars', ['stars'=> $eventOrganiser["rating"]])
                                        </div>

                                        <div class="wish-text"><b><span class="go-green">Theme : </span>8</b></div>
                                        <div class="spacer_boxtwo"></div>
                                        <div class="wish-text"><b><span class="go-green">Event Covered : </span>
                                                @if (count($eventOrganiser["event_covers"]) > 0)
                                                @foreach ($eventOrganiser["event_covers"] as $key=>$event_cover)
                                                {{ $loop->first ? '' : ', ' }}
                                                {{ $event_cover }}
                                                @endforeach
                                                @else
                                                <div>No data!!</div>
                                                @endif
                                            </b></div>
                                        <div class="spacer_boxtwo"></div>
                                        <p class="eventwish">
                                            {{ $eventOrganiser['eventShortDescription'] }}
                                        </p>
                                        <div class="wish-text"><b><span class="col-green">SAR:</span> {{
                                                $eventOrganiser['price']['actualPrice'] }} {{
                                                $eventOrganiser['price']['pricingType'] }} </b>
                                        </div>

                                        <button class="btn active" id="btn-eventlist" onclick="#"><b> Book Now </b></button>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <div>No data!!</div>
                            @endif
                            <!-----------color-bg-eventlist ------------>
                        </div>
                    </div>
                </div>
                <div class="eventspagin">

                    <center>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item {{ ($data['paginate']['prev_page_url'])?'':'disabled' }}"><a class="page-link"
                                        href="{{ $data['paginate']['prev_page_url'] }}">Previous</a></li>
                                @php $totalpages = $data["paginate"]["last_page"]; @endphp

                                @foreach(range(1,$totalpages) as $i)
                                @if($totalpages >0)
                                <li class="page-item {{ ($data['paginate']['current_page']==$i)?'active':'' }}"><a
                                        class="page-link" href="{{ $data['paginate']['path'] }}?page={{ $i }}">{{
                                        $i }}</a></li>
                                @endif
                                @php $totalpages--; @endphp
                                @endforeach
                                <li class="page-item {{ ($data['paginate']['next_page_url'])?'':'disabled' }}"><a class="page-link"
                                        href="{{ $data['paginate']['next_page_url'] }}">Next</a></li>
                            </ul>
                        </nav>
                    </center>

                </div>




                <!------upcoming-contentright ----------->

                <!------------ container-fluid ------------------------------>
                <!------------end of events content ---------------------->
            </div>
            <div class="tab-pane fade" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab">
                <div class="customerlinegreen"></div>
                <div class="container-fluid" id="customer-profile-bg">
                    <!----- star of event page --------->
                    upcoming soon/////
                    <!------------end of events content ---------------------->



                </div>
            </div>
        </div>
    </div>
    <div class="row"> </div>
</div>
@include('shared/footer')
