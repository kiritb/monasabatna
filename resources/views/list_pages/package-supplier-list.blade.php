@if(isset($data['code']) && $data['code'])
<div class="errorBox bg-danger text-white">No Data from API!! {{ $data['code'] }}</div>
@else

@php
$packageSuppliers= $data;
$appliedParams= $data['appliedParams'];
@endphp

<!--------------left ------------------>
<div id="venue-list-bg">
    <div class="col-sm-2 tab-filters">
        <div class="list">
            @include('shared.filters', ['filters' => $packageSuppliers["filters"], 'pageType' =>
            $appliedParams['pageType']])
        </div>
        <!------- panel end -------->

    </div>
    <!-------filtersidvenue ---------->

    <!--- event right ---------------------->
    <div class="col-sm-10 tab-data" id="eventlist-contentright">
        <div class="container rightevent">

            @include("shared.sorter", ['appliedParams' => $appliedParams, 'pageNumber' =>
            $packageSuppliers["paginate"]["current_page"]])

            @if (isset($packageSuppliers['suppliersList']) && count($packageSuppliers['suppliersList']) > 0)
            @foreach ($packageSuppliers['suppliersList'] as $key=>$suppliersList)
            <div class="row item-bg-color">
                <div class="content-eve">
                    @if(isset($suppliersList['isExpressDeal']) && $suppliersList['isExpressDeal'] == 1)
                    <div class="ribbon ribbon-top-left"><span class="orange">{{ '% Deal' }}</span></div>
                    @endif
                    <img src={{ $suppliersList['filePath'] }} alt="Mountains" style="width:300px; height:273px">
                </div>

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="content-eve-right">
                    <div class="content-optionpacklist">
                        <div class="wish-head"><b>{{ $suppliersList['pacakgeName'] }}</b></div>
                        <div class="wish-text">
                            @include('ui_utils.stars', ['stars'=> $suppliersList["rating"]])
                        </div>
                        <div class="wish-text"><b><span class="bold-grey">Event Type :
                                </span>{{ $suppliersList['eventType'] }}</b></div>
                        <p class="eventwish">
                            {{ $suppliersList['packageDescription'] }}
                        </p>
                        <div class="wish-text"><b><span class="col-green">SAR:</span>
                                {{ $suppliersList['actualPrice'].' '.$suppliersList['pricingType'] }} </b>
                        </div>

                        <a href={{ url('/suppliers/packages/') . "/" . $suppliersList['supplierId'] }} class="btn active"
                            id="btn-eventlist">
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

            @if (isset($packageSuppliers["paginate"]) && count($packageSuppliers["paginate"]) > 0)
            @include('ui_utils.paginate', ['paginate' => $packageSuppliers['paginate'], 'pageType' =>
            $appliedParams['pageType']])
            @else
            <div>No pagination data!!</div>
            @endif

        </div>
    </div>
</div>
@endif
