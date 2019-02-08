<div class="customerlinegreen"></div>
<!--------------left ------------------>
<div class="container-fluid" id="venue-list-bg">
    <div class="col-sm-2 tab-filters">
        <div class="list">
            <div class="list-heading">Filter</div>
            <div class="list-body">

                <!---- Price Range - formgroup ------->

                @if (isset($data["filters"]["price_range"]) && count($data["filters"]["price_range"]) >
                0)
                @include('ui_utils/filter-checks', [
                'filters' => $data["filters"]["price_range"],
                'type_title'=> 'Price Range',
                'name' => 'price_range'
                ])
                @else
                <div>No data!!</div>
                @endif

                <!---- Rating - formgroup ------->

                @if (isset($data["filters"]["rating"]) && count($data["filters"]["rating"]) >
                0)
                @include('ui_utils/filter-checks', [
                'filters' => $data["filters"]["rating"],
                'type_title'=> 'Rating',
                'name' => 'rating'
                ])
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

                <!---- Supplier Type - formgroup ------->

                @if (isset($data["filters"]["supplier_types"]) && count($data["filters"]["supplier_types"])
                >
                0)
                @include('ui_utils/filter-checks',[
                'filters' => $data["filters"]["supplier_types"],
                'type_title' => 'Supplier Type',
                'name' => 'supplier_types'
                ])
                @else
                <div>No data!!</div>
                @endif

                <!---- Items - formgroup ------->

                @if (isset($data["filters"]["items"]) && count($data["filters"]["items"])
                >
                0)
                @include('ui_utils/filter-checks',[
                'filters' => $data["filters"]["items"],
                'type_title' => 'Items',
                'name' => 'items'
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
            @if (isset($data['suppliersList']) && count($data['suppliersList']) > 0)
            @foreach ($data['suppliersList'] as $key=>$suppliersList)
            <div class="row color-bg-eventlist">
                <div class="content-eve">
                    <img src={{ $suppliersList['filePath'] }} alt="Mountains" style="width:300px; height:273px">
                </div>

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="content-eve-right">
                    <div class="content-optionpacklist">
                        <div class="wish-head"><b>{{ $suppliersList['pacakgeName'] }}</b></div>
                        <div class="spacer_boxtwo"></div>
                        <div class="wish-text">
                            @include('ui_utils.stars', ['stars'=> $suppliersList["rating"]])
                        </div>
                        <div class="spacer_boxtwo"></div>

                        <div class="wish-text"><b><span class="go-green">Event Type :
                                </span>{{ $suppliersList['eventType'] }}</b></div>
                        <div class="spacer_boxtwo"></div>
                        <p class="eventwish">
                            {{ $suppliersList['packageDescription'] }}
                        </p>
                        <div class="wish-text"><b><span class="col-green">SAR:</span>
                                {{ $suppliersList['actualPrice'].' '.$suppliersList['pricingType'] }} </b>
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

            @if(isset($data["paginate"]))
            <nav aria-label="Page navigation example">
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
                    <li class="page-item {{ ($data['paginate']['next_page_url'])?'':'disabled' }}"><a class="page-link"
                            href="{{ $data['paginate']['next_page_url'] }}">Next</a></li>
                </ul>
            </nav>
            @endif

        </div>
    </div>
</div>
