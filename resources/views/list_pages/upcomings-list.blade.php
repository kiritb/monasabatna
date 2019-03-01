@if(isset($data['code']) && $data['code'])
<div class="errorBox bg-danger text-white">No Data from API!! {{ $data['code'] }}</div>
@else

@php
$upcominevents= $data;
$appliedParams= $data['appliedParams'];
@endphp

<div class="row">
    <div class="col-sm-12">
        <div class="listhead">
            <span id="totalResults"></span>
            Upcoming Events
        </div>

        <div class="col-sm-2 tab-filters">
            <div class="panel">
                @include('shared.filters', ['filters' => $upcominevents["filters"], 'pageType' =>
                $appliedParams['pageType']])
            </div>
            <!------- panel end -------->
        </div>

        <div class="col-sm-10 tab-data" id="upcoming-contentright">

            @include("shared.sorter", ['appliedParams' => $appliedParams, 'pageNumber' =>
            $upcominevents["paginate"]["current_page"]])

            <div class="container-fluid">
                @if (count($upcominevents["upcomingEvents"]) > 0)
                @foreach ($upcominevents["upcomingEvents"] as $uEvents)

                <div class="row item-bg-color">
                    <div class="content-eve">
                        @if(isset($uEvents['isExpressDeal']) && $uEvents['isExpressDeal']==1)
                        <div class="ribbon ribbon-top-left">
                            <span class="orange">{{ '% Deal' }}</span>
                        </div>
                        @endif
                        <img src="{{ $uEvents['filePath'] }}" alt="Mountains">
                    </div>

                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="content-eve-right">
                        <div class="content-optionblog">
                            <div class="upcbox-head">
                                <h5>Event Organiser Name</h5>
                                <h6>{{ $uEvents['eventName'] }} </h6>
                            </div>
                            <div class="wish-text"> <i class='fas fa-map-marker-alt' style='font-size:23px;color:#6cc0b9'></i><span
                                    class="upctext">Address :
                                    {{ $uEvents['AddressLine_1'] }}, {{ $uEvents['AddressLine_2'] }}</span><a class="highlight_line"
                                    href="{{ $uEvents['googleMapLink'] }}" target="_blank">show in map
                                </a></div>
                            <div class="wish-text"> <i class="far fa-clock" style='font-size:23px;color:#6cc0b9'></i><span
                                    class="upctext">Start
                                    Time : <b>{{ date('h:i A', strtotime($uEvents['vennueStartTime'])) }}</b></span>
                                <span class="upctext">End
                                    Time : <b>{{ date('h:i A', strtotime($uEvents['eventEndTime'])) }}</b></span></div>
                            <div class="wish-text"><b><span class="bold-grey">Event Type :
                                    </span>{{ $uEvents['eventType'] }}</b></div>
                            <p class="blogvenue">{{ $uEvents['eventShortDescription'] }}</p>
                            <div class="wish-text"><b><span class="col-green">SAR :</span> {{ $uEvents['actualPrice']
                                    }}
                                    {{
                                    $uEvents['pricingType']
                                    }}</b>
                            </div>
                            <a href="{{ url('/events/upcoming') . '/' . $uEvents['eventId'] }}" class="btn active" id="bn-venuelist"
                                alt="upcoming events">
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

            <div class="upcpagin">

                @if (isset($upcominevents["paginate"]) && count($upcominevents["paginate"]) > 0)
                @include('ui_utils.paginate', ['paginate' => $upcominevents['paginate'], 'pageType' =>
                $appliedParams['pageType']])
                @else
                <div>No pagination data!!</div>
                @endif

            </div>

        </div>
        <!------upcoming-contentright ----------->
    </div>
</div>
@endif
