@include('shared/header')

<!------- form start-------->

@include('shared/city-date')

<!------- form start-------->
<!------- Banner start-------->
<div class="container-fluid" id="packagecommon">

    <h3 class="detail-party"><b>{{ $data['supplierName'] }}</b></h3>

    @include('sliderinner', ['slides' => $data['files']])

</div>

<!------- Banner end-------->
<div class="container-fluid">

    <div id="supplierpacksect">
        <div class="row">
            <div class="col-sm-9">
                <div class="suppoffered">Packages : Desserts, Chocolates and Cakes </div>
                <div class="supptravel">{{ $data['travelNote'] }}</div>
            </div>
            <div class="float-right col-sm-3">
                <div class="sartravel"><span class="bold-grey">SAR :</span>40 / Person </div>
                <div class="buttonsupp">
                    <a class="shtsupp" href="#">Add to Wishlist</a>
                    <a class="booksupp active" href="#">Book Now</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="eventdetails">
        @include('shared/packageLists', ['packageList' => $data['packages']])
    </div>

    @include("shared/reviewratings", ['reviews' => $data['reviews']])

    @include('ui_utils.recommendations-slicker', ['slides' => $data['recommendations'], 'title' => 'Recommonded
    Suppliers'])

</div>
@include('shared/footer')
<script src="{{ url('js/city-date.js') }}" type="text/javascript" charset="utf-8"></script>