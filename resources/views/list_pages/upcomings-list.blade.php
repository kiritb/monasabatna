@if(!isset($data) && empty($data))
<div class="errorBox">No Data from API!!</div>
@else

@php
$upcominevents= $data;
$appliedParams= $data['appliedParams'];
@endphp

<div class="container-fluid" id="upc-userclick-content">
    <div class="col-sm-2 tab-filters">
        <div class="panel">
            @include('shared.filters', ['filters' => $upcominevents["filters"], 'pageType' =>
            $appliedParams['pageType']])
        </div>
        <!------- panel end -------->
    </div>
    <!-------filtersidvenue ---------->

    <div class="col-sm-10 tab-data" id="upcoming-contentright">

        @if (count($upcominevents["upcomingEvents"]) > 0)
        @foreach ($upcominevents["upcomingEvents"] as $uEvents)

        <div class="row item-bg-color">
            <div class="content-eve">
                <a href="{{ url('/events/upcoming') . '/' . $uEvents['eventId'] }}" alt="upcoming events">
                    @if(isset($uEvents['isExpressDeal']) && $uEvents['isExpressDeal']==1) <div
                        class="
                    ribbon ribbon-top-left"><span class="orange">{{ '% Deal' }}</span>
                    </div>
                    @endif
                    <img src="{{ $uEvents['filePath'] }}" alt="Mountains">
                </a>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="content-eve-right">
                <div class="content-optionblog">
                    <a href="{{ url('/events/upcoming') . '/' . $uEvents['eventId'] }}" alt="upcoming events">
                        <div class="upcbox-head">
                            <h5>Event Organiser Name</h5>
                            <h6>{{ $uEvents['eventName'] }} </h6>
                        </div>
                    </a>
                    <div class="wish-text"> <i class='fas fa-map-marker-alt'
                            style='font-size:23px;color:#6cc0b9'></i><span class="upctext">Address :
                            {{ $uEvents['AddressLine_1'] }}, {{ $uEvents['AddressLine_2'] }}</span><a
                            class="highlight_line" href="{{ $uEvents['googleMapLink'] }}" target="_blank">show in map
                        </a></div>
                    <div class="wish-text"> <i class="far fa-clock" style='font-size:23px;color:#6cc0b9'></i><span
                            class="upctext">Start
                            Time : <b>{{ date('h:i A', strtotime($uEvents['vennueStartTime'])) }}</b></span>
                        <span class="upctext">End
                            Time : <b>{{ date('h:i A', strtotime($uEvents['eventEndTime'])) }}</b></span></div>
                    <div class="wish-text"><b><span class="bold-grey">Event Type :
                            </span>{{ $uEvents['eventType'] }}</b></div>
                    <p class="blogvenue">{{ $uEvents['eventShortDescription'] }}</p>
                    <div class="wish-text"><b><span class="col-green">SAR :</span> {{ $uEvents['actualPrice'] }}
                            {{
                            $uEvents['pricingType']
                            }}</b>
                    </div>
                    <button class="btn active" id="bn-venuelist" onclick="filterSelection('all')"><b> Book
                            Now</b></button>
                </div>
            </div>
        </div>

        @endforeach
        @else
        <div>No data!!</div>
        @endif

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
@endif