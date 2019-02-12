@if(!isset($data) && empty($data))
<div class="errorBox">No Data from API!!</div>
@else

@php
$packageEvents= $data;
@endphp

<div class="customerlinegreen"></div>
<!--------------left ------------------>
<div class="container-fluid" id="venue-list-bg">
    <div class="col-sm-2 tab-filters">
        <div class="list">
            @include('shared.filters', ['filters' => $packageEvents["filters"], 'type' => 'packageEvents', 'url' =>
            '/packages/eventorganisers'])
        </div>
        <!------- panel end -------->

    </div>
    <!-------filtersidvenue ---------->

    <!--- event right ---------------------->
    <div class="col-sm-10 tab-data" id="eventlist-contentright">
        <div class="container rightevent">
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

            @if (isset($packageEvents["eventOrganiserslist"]) && count($packageEvents["eventOrganiserslist"]) > 0)
            @foreach ($packageEvents["eventOrganiserslist"] as $key=>$eventOrganiser)
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
                                @if (isset($eventOrganiser["event_covers"]) && count($eventOrganiser["event_covers"]) >
                                0)
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
                            @if(isset($eventOrganiser['eventShortDescription']))
                            {{ $eventOrganiser['eventShortDescription'] }}
                            @endif
                        </p>
                        <div class="wish-text"><b>
                                <span class="col-green">SAR:</span>
                                @if(isset($eventOrganiser['price']))
                                {{ $eventOrganiser['price']['actualPrice'] }}
                                {{ $eventOrganiser['price']['pricingType'] }}
                                @endif
                            </b>
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

    @if (isset($packageEvents["paginate"]) && count($packageEvents["paginate"]) > 0)
    @include('ui_utils.paginate', ['paginate' => $packageEvents['paginate'], 'type' => 'packageEvents'])
    @else
    <div>No pagination data!!</div>
    @endif

</div>
@endif
