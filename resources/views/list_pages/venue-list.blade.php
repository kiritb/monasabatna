@if(isset($data['code']) && $data['code'])
<div class="errorBox bg-danger text-white">No Data from API!! {{ $data['code'] }}</div>
@else

@php
$venues= $data;
$appliedParams= $data['appliedParams'];
@endphp

<div class="venue-list-bg">
    <div class="col-sm-2 tab-filters">
        <div class="list">
            @include('shared.filters', ['filters' => $venues["filters"], 'appliedParams' => $appliedParams])
        </div>
        <!------- panel end -------->
    </div>
    <!-------filtersidvenue ---------->
    <!---------- wishlist -------------------------------->
    <div class="col-sm-10 tab-data">
        <!----------------------- tab container end -------------------->
        @include("shared.sorter", ['appliedParams' => $appliedParams, 'pageNumber' =>
        $venues["paginate"]["current_page"]])

        <div class="container-fluid">
            @if (count($venues["vennueLists"]) > 0)
            @foreach ($venues["vennueLists"] as $vennueLists)
            <div class="row item-bg-color">
                <div class="col-sm-3 content-eve p-0">
                    @if(isset($vennueLists['isExpressDeal']) && $vennueLists['isExpressDeal'] == 1)
                    <div class="ribbon ribbon-top-left"><span class="orange">{{ '% Deal' }}</span></div>
                    @endif
                    <img src={{ $vennueLists["filePath"] }} alt="Mountains">
                </div>

                <div class="col-sm-9" id="content-eve-right">
                    <div class="content-optionblog">
                        <div class="wish-head">
                            {{ $vennueLists["vennueName"] }}
                        </div>
                        <div class="wish-text">

                            @include('ui_utils.stars', ['stars' => $vennueLists["rating"]])

                        </div>
                        <div class="wish-text">
                            <a href={{ $vennueLists["googleMapLink"] }} target="_blank">
                                <i class='fas fa-map-marker-alt' style='font-size:25px;color:#6cc0b9'></i>
                                {{ $vennueLists["AddressLine_1"] }}
                                {{ $vennueLists["AddressLine_2"] }},
                                {{ $vennueLists["cityName"] }}
                            </a>
                        </div>
                        <div class="wish-text"><b><span class="bold-grey">Amenities:</span>
                                @foreach($vennueLists["ammenties"] as $ammenties)

                                {{ $loop->first ? '' : ', ' }}
                                <span class="nice">{{ $ammenties }}</span>

                                @endforeach
                            </b></div>
                        <p class="blogvenue">{{ $vennueLists["vennueShortDescription"] }}</p>
                        <div class="wish-text">
                            <span class="col-green">SAR:</span>
                            {{ $vennueLists["actualPrice"] }}
                            {{ $vennueLists["pricingType"] }}
                            <i class="fas fa-users" id="fasvenue"></i>
                            {{ $vennueLists['MinGuestCap']. '-' . $vennueLists['MaxGuestCap'] }}
                        </div>
                        <a href="{{ url('/venues/'.$vennueLists['vennueId']) }}" class="btn active" id="bn-venuelist">
                            Book Now
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <div class="noData">No data!!</div>
            @endif
        </div>

        <!-- Venue list pagination -->
        <div class="venuespagin">
            @if (count($venues["paginate"]) > 0)
            @include('ui_utils.paginate', ['paginate' => $venues['paginate'], 'pageType' =>
            $appliedParams['pageType']])
            @else
            <div>No pagination data!!</div>
            @endif
        </div>
    </div>
</div>
@endif
