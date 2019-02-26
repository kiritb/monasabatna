@if(isset($data['code']) && $data['code'])
<div class="errorBox bg-danger text-white">No Data from API!! {{ $data['code'] }}</div>
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

            @include("shared.sorter", ['appliedParams' => $appliedParams, 'pageNumber' =>
            $suppliers["paginate"]["current_page"]])

            @if (isset($suppliers["suppliersList"]) && count($suppliers["suppliersList"]) > 0)
            @foreach ($suppliers["suppliersList"] as $suppliersList)
            <div class="row item-bg-color">
                <div class="content-eve">
                    @if(isset($suppliersList['isExpressDeal']) && $suppliersList['isExpressDeal'] == 1)
                    <div class="ribbon ribbon-top-left"><span class="orange">{{ '% Deal' }}</span></div>
                    @endif
                    <img src={{ $suppliersList['filePath'] }} alt="Mountains">
                </div>

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="content-eve-right">
                    <div class="content-optionpacklist">
                        <div class="wish-head">
                            {{ $suppliersList['supplierName'] }}
                        </div>
                        <div class="wish-text">
                            @include('ui_utils.stars', ['stars' => $suppliersList["rating"]])
                        </div>
                        <div class="wish-text">
                            @foreach($suppliersList["items"] as $item)

                            {{ $loop->first ? '' : ', ' }}
                            <span class="bold-grey">{{ $item }}</span>

                            @endforeach
                        </div>

                        <div class="wish-text">
                            <span class="bold-grey">
                                Event Covered :
                            </span>

                            @foreach($suppliersList["event_covers"] as $event_cover)

                            {{ $loop->first ? '' : ', ' }}
                            <span>{{ $event_cover }}</span>

                            @endforeach

                        </div>
                        <p class="eventwish">
                            {{ $suppliersList['supplierDescription'] }}
                        </p>
                        <div class="wish-text"><b><span class="col-green">SAR:</span> 100 / Day </b>
                        </div>

                        <a href="{{ url('/suppliers/') . "/" . $suppliersList['supplierId'] }}" class="btn active" id="btn-eventlist">
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
