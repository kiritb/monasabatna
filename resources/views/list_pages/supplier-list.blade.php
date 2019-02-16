@if(!isset($data) && empty($data))
<div class="errorBox">No Data from API!!</div>
@else

@php
$suppliers= $data;
$appliedParams= $data['appliedParams'];
@endphp

<!--------------left ------------------>
<div id="venue-list-bg">
    <div class="col-sm-2 tab-filters">
        <div class="list">
            <!-- Filters goes here -->
            @include('shared.filters', ['filters' => $suppliers["filters"], 'pageType' => $appliedParams['pageType']])
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
            @if (isset($suppliers["suppliersList"]) && count($suppliers["suppliersList"]) > 0)
            @foreach ($suppliers["suppliersList"] as $suppliersList)
            <div class="row item-bg-color">
                <div class="content-eve">
                    <img src={{ $suppliersList['filePath'] }} alt="Mountains" style="width:300px; height:273px">
                </div>

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="content-eve-right">
                    <div class="content-optionpacklist">
                        <div class="wish-head"><b> {{ $suppliersList['supplierName'] }} </b></div>
                        <div class="spacer_boxtwo"></div>
                        <div class="wish-text">
                            @include('ui_utils.stars', ['stars' => $suppliersList["rating"]])
                        </div>
                        <div class="spacer_boxtwo"></div>

                        <div class="wish-text"><span class="go-green"><b>Event Covered : </b></span>

                            @foreach($suppliersList["event_covers"] as $event_cover)

                            {{ $loop->first ? '' : ', ' }}
                            <span class="nice">{{ $event_cover }}</span>

                            @endforeach

                        </div>
                        <div class="spacer_boxtwo"></div>
                        <p class="eventwish">
                            {{ $suppliersList['supplierDescription'] }}
                        </p>
                        <div class="wish-text"><b><span class="col-green">SAR:</span> 100 / Day </b>
                        </div>

                        <a href="{{ url('supplierdetails/'. $suppliersList['supplierId']) }}" class="btn active" id="btn-eventlist">
                            <b>Book Now</b>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <div>No data!!</div>
            @endif
        </div>
        <div class="supppagin">

            @if (isset($suppliers["paginate"]) && count($suppliers["paginate"]) > 0)
            @include('ui_utils.paginate', ['paginate' => $suppliers['paginate'], 'pageType' =>
            $appliedParams['pageType']])
            @else
            <div>No pagination data!!</div>
            @endif

        </div>
    </div>
</div>
@endif
