@include('shared/header')

<!------- form start-------->

@include('shared/city-date')

<!------- form start-------->
<!------- Banner start-------->
<div class="container-fluid" id="packagecommon">

    <h3 class="detail-party"><b>{{ $data['supplierName'] }}</b></h3>

    <div class="arabic-logosec">
        @if(isset($data['vendorLogo']) && $data['vendorLogo'] !== "")
        <img src={{ $data['vendorLogo'] }} class="img-responsive">
        @endif
    </div>

    @include('sliderinner', ['slides' => $data['files']])

</div>

<!------- Banner end-------->
<div class="container-fluid">

    <div id="supplierpacksect">
        <div class="row">
            <div class="col-sm-12">

                <!-- Address maker -->
                @php
                $addresses = array(
                "address1"=> $data['AddressLine_1'],
                "address2"=> $data['AddressLine_2'],
                "city"=> $data['cityName'],
                "gmaplink"=> $data['googleMapLink']
                );
                @endphp
                @include('ui_utils/address-maker', ['data' => $addresses])

                <div class="supptravel">{{ $data['travelNote'] }}</div>
                <div class="customer-number">
                    <label>Customer Service Number:</label>
                    <span class="cnum">{{ $data['customerCareNo'] }}</span>
                </div>
                <div class="customer-licence">
                    <label><i class="far fa-address-card license-icon"></i>Licence Number:</label>
                    <span class="clsn">{{ $data['licenseNo'] }}</span>
                </div>
                <div class="customer-phone">
                    <label><i class="fas fa-phone phone-icon"></i>Licence Number:</label>
                    <span class="clsn">{{ $data['licenseNo'] }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="eventdetails">
        @include('shared/packageLists', ['packageList' => $data['packages'], 'type' => 'Suppliers', 'noOfPackages' =>
        $data['noOfPackages']])
    </div>

    @include("shared/reviewratings", ['reviews' => $data['reviews']])

    @include('ui_utils.recommendations-slicker', ['slides' => $data['recommendations'], 'title' => 'Our Previous
    Services'])

</div>
@include('shared/footer')
<script src="{{ url('js/city-date.js') }}" type="text/javascript" charset="utf-8"></script>
