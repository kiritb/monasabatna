<div class="customerlinegreen"></div>
<!--------------left ------------------>
<div class="container-fluid" id="venue-list-bg">
    <div class="filtersidevenue">
        <div class="list">
            <div class="list-heading">Filter</div>
            <div class="list-body">

                <!---- Rating - formgroup ------->

                @if (isset($data["filters"]["rating"]) && count($data["filters"]["rating"]) >
                0)
                @include('ui_utils/filter-checks', ['filters' => $data["filters"]["rating"],
                'type_title'
                => 'Rating', 'name' => 'rating', 'prefix' => 'SAR'])
                @else
                <div>No data!!</div>
                @endif

                <!---- Price - formgroup ------->

                @if (isset($data["filters"]["price_range"]) && count($data["filters"]["price_range"]) >
                0)
                @include('ui_utils/filter-checks', ['filters' => $data["filters"]["price_range"],
                'type_title'
                => 'Price', 'name' => 'price_range', 'prefix' => 'SAR'])
                @else
                <div>No data!!</div>
                @endif

                <!---- Event Type - formgroup ------->

                @if (isset($data["filters"]["event_types"]) && count($data["filters"]["event_types"])
                >
                0)
                @include('ui_utils/filter-checks',[
                'filters' => $data["filters"]["event_types"],
                'type_title' => 'Event Type',
                'name' => 'event_types'
                ])
                @else
                <div>No data!!</div>
                @endif

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

            @if (isset($data["eventOrganiserslist"]) && count($data["eventOrganiserslist"]) > 0)
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
    @if(isset($data["paginate"]))
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item {{ ($data['paginate']['prev_page_url'])?'':'disabled' }}"><a class="page-link" href="{{ $data['paginate']['prev_page_url'] }}">Previous</a></li>
            @php $totalpages = $data["paginate"]["last_page"]; @endphp

            @foreach(range(1,$totalpages) as $i)
            @if($totalpages >0)
            <li class="page-item {{ ($data['paginate']['current_page']==$i)?'active':'' }}"><a class="page-link" href="{{ $data['paginate']['path'] }}?page={{ $i }}">{{
                    $i }}</a></li>
            @endif
            @php $totalpages--; @endphp
            @endforeach
            <li class="page-item {{ ($data['paginate']['next_page_url'])?'':'disabled' }}"><a class="page-link" href="{{ $data['paginate']['next_page_url'] }}">Next</a></li>
        </ul>
    </nav>
    @endif
</div>
