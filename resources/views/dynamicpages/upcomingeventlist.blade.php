@include('shared/header')
<!------- body start-------->
<!------- form start-------->
<link rel="stylesheet" type="text/css" href="css/upcoming_event_userclick.css">
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
                </div>
                <!---- formgroup ------->
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                        <label class="form-check-label" for="invalidCheck2">
                            SAR 151 - 200
                        </label>
                    </div>
                </div>
                <!---- formgroup ------->
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                        <label class="form-check-label" for="invalidCheck2">
                            SAR 201 - 250
                        </label>
                    </div>
                </div>
                <!---- formgroup ------->

                <h4 class="venueclipheadone"> Event Type</h4>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                        <label class="form-check-label" for="invalidCheck2">
                            Birthday
                        </label>
                    </div>
                </div>
                <!---- formgroup ------->
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                        <label class="form-check-label" for="invalidCheck2">
                            Wedding
                        </label>
                    </div>
                </div>
                <!---- formgroup ------->
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                        <label class="form-check-label" for="invalidCheck2">
                            Business Meeting
                        </label>
                    </div>
                </div>
                <!---- formgroup ------->
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                        <label class="form-check-label" for="invalidCheck2">
                            Conference
                        </label>
                    </div>
                </div>
                <!---- formgroup ------->
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                        <label class="form-check-label" for="invalidCheck2">
                            Corporate Event
                        </label>
                    </div>
                </div>
                <!---- formgroup ------->
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
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

    <div class="container-fluid" id="upcoming-contentright">

        @if (count($data["upcomingEvents"]) > 0)
        @foreach ($data["upcomingEvents"] as $uEvents)

        <div class="row color-bg-upclist">
            <div class="content-eve">
                <img src="{{ $uEvents['filePath'] }}" alt="Mountains" style="width:300px; height:273px">
            </div>

            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="content-eve-right">
                <div class="content-optionblog">
                    <div class="upcbox-head"><b>Event Organiser Name </b></div>
                    <div class="spacer_boxtwo"></div>
                    <div class="upcbox-head"><b> {{ $uEvents['eventName'] }} </b></div>
                    <div class="spacer_boxtwo"></div>
                    <div class="wish-text"> <i class='fas fa-map-marker-alt' style='font-size:23px;color:#6cc0b9'></i><span
                            class="upctext">Address : {{ $uEvents['AddressLine_1'] }}, {{ $uEvents['AddressLine_2'] }}</span><a
                            class="highlight_line" href="{{ $uEvents['googleMapLink'] }}" target="_blank">show in map
                        </a></div>
                    <div class="spacer_boxtwo"></div>
                    <div class="wish-text"> <i class="far fa-clock" style='font-size:23px;color:#6cc0b9'></i><span
                            class="upctext">Start
                            Time : <b>{{ date('h:i A', strtotime($uEvents['vennueStartTime'])) }}</b></span>
                        <span class="upctext">End
                            Time : <b>{{ date('h:i A', strtotime($uEvents['eventEndTime'])) }}</b></span></div>
                    <div class="spacer_boxtwo"></div>
                    <div class="wish-text"><b><span class="go-greencap">Event Type : </span>{{ $uEvents['eventType'] }}</b></div>
                    <div class="spacer_boxtwo"></div>

                    <p class="blogvenue">{{ $uEvents['eventShortDescription'] }}</p>
                    <div class="wish-text"><b><span class="col-green">SAR :</span> {{ $uEvents['actualPrice'] }} {{
                            $uEvents['pricingType']
                            }}</b></div>

                    <button class="btn active" id="bn-venuelist" onclick="filterSelection('all')"><b> Book Now</b></button>

                </div>
            </div>
        </div>

        @endforeach
        @else
        <div>No data!!</div>
        @endif

        <!-----------color-bg-upclist ------------>
        <div class="upcpagin">
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
                <li class="page-item {{ ($data['paginate']['next_page_url'])?'':'disabled' }}"><a class=" page-link"
                        href="{{ $data['paginate']['next_page_url'] }}">Next</a></li>
            </ul>
        </div>

    </div>
    <!------upcoming-contentright ----------->
</div>
<div class="row"></div>
@include('shared/footer')
