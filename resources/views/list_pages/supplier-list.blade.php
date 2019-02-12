@if(!isset($data) && empty($data))
<div class="errorBox">No Data from API!!</div>
@else

@php
$suppliers= $data;
@endphp

<div class="customerlinegreen"></div>
<!--------------left ------------------>
<div class="container-fluid" id="venue-list-bg">
    <div class="col-sm-2 tab-filters">
        <div class="list">
            <!-- Filters goes here -->
            @include('shared.filters', ['filters' => $suppliers["filters"], 'type' => 'suppliers', 'url' =>
            '/suppliers'])
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
            <div class="row color-bg-eventlist">
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

                        <div class="wish-text"><b><span class="go-green">Event Covered : </span>Birthday,
                                Wedding, Business Meeting</b></div>
                        <div class="spacer_boxtwo"></div>
                        <p class="eventwish">**Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

                            **Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et



                        </p>
                        <div class="wish-text"><b><span class="col-green">SAR:</span> 100 / Day </b>
                        </div>

                        <a href="http://18.218.133.17/supplierdetails" class="btn active" id="btn-eventlist" onclick="#"><b>
                                Book Now </b></a>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <div>No data!!</div>
            @endif
            <!-----------color-bg-eventlist ------------>
        </div>
        <div class="supppagin">

            @if (isset($suppliers["paginate"]) && count($suppliers["paginate"]) > 0)
            @include('ui_utils.paginate', ['paginate' => $suppliers['paginate'], 'type' => 'suppliers'])
            @else
            <div>No pagination data!!</div>
            @endif

        </div>
    </div>
</div>
@endif
