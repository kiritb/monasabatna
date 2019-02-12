@if(!isset($data) && empty($data))
<div class="errorBox">No Data from API!!</div>
@else

@php
$venues= $data;
@endphp

<div class="customerlinegreen"></div>
<div class="container-fluid" id="venue-list-bg">
    <div class="col-sm-2 tab-filters">
        <div class="list">
            @include('shared.filters', ['filters' => $venues["filters"], 'type' => 'venues', 'url' => '/venues'])
        </div>
        <!------- panel end -------->
    </div>
    <!-------filtersidvenue ---------->
    <!---------- wishlist -------------------------------->
    <div class="col-sm-10 tab-data">
        <!----------------------- tab container end -------------------->
        <div class="container">
            <div class="row venueslist">
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
            @if (count($venues["vennueLists"]) > 0)
            @foreach ($venues["vennueLists"] as $vennueLists)
            <div class="row color-bg-venuelist">
                <div class="col-sm-3 content-eve p-0">
                    <img src={{ $vennueLists["filePath"] }} alt="Mountains">
                </div>

                <div class="col-sm-9" id="content-eve-right">
                    <div class="content-optionblog">
                        <div class="wish-head"><b><a href="{{ url('/vennues/'.$vennueLists['vennueId']) }}">{{
                                    $vennueLists["vennueName"] }}</a></b></div>
                        <div class="spacer_boxtwo"></div>

                        <div class="wish-text">

                            @include('ui_utils.stars', ['stars' => $vennueLists["rating"]])

                        </div>

                        <div class="spacer_boxtwo"></div>
                        <div class="wish-text">
                            <a href={{ $vennueLists["googleMapLink"] }} target="_blank">
                                <i class='fas fa-map-marker-alt' style='font-size:25px;color:#6cc0b9'></i>
                                {{ $vennueLists["AddressLine_1"] }}
                                {{ $vennueLists["AddressLine_2"] }},
                                {{ $vennueLists["cityName"] }}
                            </a>
                        </div>
                        <div class="spacer_boxtwo"></div>
                        <div class="wish-text"><b><span class="go-green">Amenities:</span>
                                @foreach($vennueLists["ammenties"] as $ammenties)

                                {{ $loop->first ? '' : ', ' }}
                                <span class="nice">{{ $ammenties }}</span>

                                @endforeach
                            </b></div>
                        <div class="spacer_boxtwo"></div>

                        <p class="blogvenue">{{ $vennueLists["vennueShortDescription"] }}</p>
                        <div class="wish-text"><b><span class="col-green">SAR:</span> {{
                                $vennueLists["actualPrice"] }} {{ $vennueLists["pricingType"] }}</b>
                            <b><i class="fas fa-users" id="fasvenue" style="font-size:20px;color:#6cc0b9"></i>
                                100-200</b></div>
                        <button class="btn active" id="bn-venuelist" onclick="filterSelection('all')"><b>
                                Book Now</b></button>

                    </div>
                </div>
            </div>
            @endforeach
            @else
            <div>No data!!</div>
            @endif
        </div>

        <!-- Venue list pagination -->
        <div class="venuespagin">
            @if (count($venues["paginate"]) > 0)
            @include('ui_utils.paginate', ['paginate' => $venues['paginate'], 'type' => 'venues'])
            @else
            <div>No pagination data!!</div>
            @endif
        </div>
    </div>
</div>
@endif
<!------- venue-list-bg --------->
