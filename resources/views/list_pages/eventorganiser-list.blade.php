@if(isset($data['code']) && $data['code'])
<div class="errorBox bg-danger text-white">No Data from API!! {{ $data['code'] }}</div>
@else

@php
$eventorgs= $data;
$appliedParams= $data['appliedParams'];
@endphp

<!--------------left ------------------>
<div class="venue-list-bg">
    <div class="col-sm-2 tab-filters">
        <div class="list">
            <!---- filters rendered here ------->
            @include('shared.filters', ['filters' => $eventorgs["filters"], 'pageType' => $appliedParams['pageType']])
        </div>
        <!------- panel end -------->

    </div>
    <!-------filtersidvenue ---------->

    <!--- event right ---------------------->
    <div class="col-sm-10 tab-data">

        @include("shared.sorter", ['appliedParams' => $appliedParams, 'pageNumber' =>
        $eventorgs["paginate"]["current_page"]])

        <div class="container-fluid">
            @if (isset($eventorgs["eventOrganiserslist"]) && count($eventorgs["eventOrganiserslist"]) > 0)
            @foreach ($eventorgs["eventOrganiserslist"] as $key=>$eventOrganiser)
            <div class="row item-bg-color">
                <div class="content-eve">
                    @if(isset($eventOrganiser['isExpressDeal']) && $eventOrganiser['isExpressDeal'] == 1)
                    <div class="ribbon ribbon-top-left"><span class="orange">{{ '% Deal' }}</span></div>
                    @endif
                    <img src={{ $eventOrganiser['filePath'] }} alt="Mountains">
                </div>

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="content-eve-right">
                    <div class="content-optionblog">
                        <div class="wish-head">
                            {{ $eventOrganiser['eventOrgainsersName'] }}
                        </div>
                        <div class="wish-text">
                            @include('ui_utils.stars', ['stars'=> $eventOrganiser["rating"]])
                        </div>

                        <div class="wish-text"><b><span class="bold-grey">Theme : </span>8</b></div>
                        <div class="wish-text"><b><span class="bold-grey">Event Covered : </span>
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
                        <p class="eventwish">
                            {{ $eventOrganiser['eventShortDescription'] }}
                        </p>
                        <div class="wish-text"><b><span class="col-green">SAR:</span>
                                {{
                                $eventOrganiser['price']['minPrice']['actualPrice'] . "-" .
                                $eventOrganiser['price']['maxPrice']['actualPrice'] }} </b>
                        </div>

                        <a href={{ url('/events/organisers/') . "/" . $eventOrganiser['eventOrganisersId'] }} alt="event organiser"
                            class="btn active" id="btn-eventlist">
                            Book Now
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <div>No data!!</div>
            @endif
        </div>
        <div class="eventspagin">
            @if (isset($eventorgs["paginate"]) && count($eventorgs["paginate"]) > 0)
            @include('ui_utils.paginate', ['paginate' => $eventorgs['paginate'], 'pageType' =>
            $appliedParams['pageType']])
            @else
            <div>No pagination data!!</div>
            @endif

        </div>
    </div>

</div>

@endif
