@if(isset($data['code']) && $data['code'])
<div class="errorBox bg-danger text-white">No Data from API!! {{ $data['code'] }}</div>
@else

@php
$packageEvents= $data;
$appliedParams= $data['appliedParams'];
@endphp

<!--------------left ------------------>
<div class="venue-list-bg">
    <div class="col-sm-2 tab-filters">
        <div class="list">
            @include('shared.filters', ['filters' => $packageEvents["filters"], 'pageType' =>
            $appliedParams['pageType']])
        </div>
        <!------- panel end -------->

    </div>
    <!-------filtersidvenue ---------->

    <!--- event right ---------------------->
    <div class="col-sm-10 tab-data">

        @include("shared.sorter", ['appliedParams' => $appliedParams, 'pageNumber' =>
        $packageEvents["paginate"]["current_page"]])

        <div class="container-fluid">

            @if (isset($packageEvents["eventOrganiserslist"]) && count($packageEvents["eventOrganiserslist"]) > 0)
            @foreach ($packageEvents["eventOrganiserslist"] as $key=>$eventOrganiser)
            <div class="row item-bg-color">
                <div class="content-eve">
                    @if(isset($eventOrganiser['isExpressDeal']) && $eventOrganiser['isExpressDeal'] == 1)
                    <div class="ribbon ribbon-top-left"><span class="orange">{{ '% Deal' }}</span></div>
                    @endif
                    <img src={{ $eventOrganiser['filePath'] }} alt="Mountains" style="width:300px; height:273px">
                </div>

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="content-eve-right">
                    <div class="content-optionblog">
                        <div class="wish-head"><b>
                                {{ $eventOrganiser['pacakgeName'] }}
                            </b> </div>
                        <div class="wish-text">
                            @include('ui_utils.stars', ['stars'=> $eventOrganiser["rating"]])
                        </div>

                        <div class="wish-text"><b><span class="bold-grey">Packages : </span>8</b></div>
                        <div class="wish-text"><b><span class="bold-grey">Event Covered : </span>
                                @if (isset($eventOrganiser["event_covers"]) && count($eventOrganiser["event_covers"]) >
                                0)
                                @foreach ($eventOrganiser["event_covers"] as $key=>$event_cover)
                                {{ $loop->first ? '' : ', ' }}
                                {{ $event_cover }}
                                @endforeach
                                @else
                                <div class="noData">No data!!</div>
                                @endif
                            </b></div>
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

                        <a href={{ url('/events/organisers/packages/') . "/" . $eventOrganiser['eventOrganisersId'] }}
                            class="btn active" id="btn-eventlist" alt="event organiser">
                            <b>Book Now</b>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <div class="noData">No data!!</div>
            @endif
        </div>

        <div class="eventspagin">
            @if (isset($packageEvents["paginate"]) && count($packageEvents["paginate"]) > 0)
            @include('ui_utils.paginate', ['paginate' => $packageEvents['paginate'], 'pageType' =>
            $appliedParams['pageType']])
            @else
            <div>No pagination data!!</div>
            @endif

        </div>

    </div>

</div>
@endif
