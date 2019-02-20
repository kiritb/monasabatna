@if(isset($data['code']))
<div>No Data found!!!</div>
@else
@include('shared/header')
@include('shared/city-date')

<div class="container-fluid" id="packagecommon">

    <h3 class="detail-party"><b>{{ $data['packageName'] }}</b></h3>
    @include('sliderinner', ['slides' => $data['files']])

</div>

<div id="supplierpacksect">
    <div class="row">
        <div class="col-sm-9">
            <div class="suppoffered">Packages : Desserts, Chocolates and Cakes </div>
            <div class="supptravel">{{ $data['note'] }}</div>
        </div>
        <div class="float-right col-sm-3">
            <div class="sartravel"><span class="bold-grey">SAR :</span>
                {{ $data['actualPrice'] . ' ' . $data['pricingType'] }}
            </div>
            <div class="buttonsupp">
                <a class="shtsupp" href="#">Add to Wishlist</a>
                <a class="booksupp active" href="#">Book Now</a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" id="supplierdetails">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link list-nav-tabs active" id="nav-about-tab" data-toggle="tab" href="#nav-about"
                role="tab" aria-controls="nav-about" aria-selected="true">About</a>
            <a class="nav-item nav-link list-nav-tabs" id="nav-provided-tab" data-toggle="tab" href="#nav-provided"
                role="tab" aria-controls="nav-provided" aria-selected="false">What's Provided</a>
            <a class="nav-item nav-link list-nav-tabs" id="nav-testi-tab" data-toggle="tab" href="#nav-testi" role="tab"
                aria-controls="nav-testi" aria-selected="false">Reviews</a>
            <a class="nav-item nav-link list-nav-tabs" id="nav-terms-tab" data-toggle="tab" href="#nav-terms" role="tab"
                aria-controls="nav-terms" aria-selected="false">Terms & Policies</a>
        </div>
    </nav>

    <div class="tab-content" id="nav-packContent">
        <div class="tab-pane fade show active" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
            <div class="packagecontent">
                {{ $data['aboutPackage'] }}
            </div>
        </div>
        <div class="tab-pane fade" id="nav-provided" role="tabpanel" aria-labelledby="nav-provided-tab">
            <div class="packagecontent">
                @if (count($data["providers"]) > 0)
                @foreach ($data["providers"] as $key=>$provider)
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                    <p> {{ $key + 1 }} {{ $provider }} </p>
                </div>
                @endforeach
                @else
                <div>No data!!</div>
                @endif
            </div>
            <!------------end of events content ---------------------->
        </div>
        <div class="tab-pane fade" id="nav-testi" role="tabpanel" aria-labelledby="nav-testi-tab">
            <!--------------Event Organisers ------------------>
            <div class="packagecontent">
                @include("shared/reviews", ['reviews' => $data['reviews']])
            </div>
            <!------------end of events content ---------------------->
        </div>
        <div class="tab-pane fade" id="nav-terms" role="tabpanel" aria-labelledby="nav-terms-tab">
            <!------------end of events content ---------------------->
            <div role="tabpanel" class="tab-pane active" id="about">
                <div class="packagecontent">
                    @include('ui_utils/policy-loader', ['policies'=> $data['policies']])
                </div>
            </div>
        </div>

    </div>

    @include("shared/reviewratings", ['reviews' => $data['averageReviews']])

    @include('ui_utils.recommendations-slicker', ['slides' => $data['recommendations'], 'title' => 'Recommonded
    Suppliers'])

</div>

<div class="row"> </div>
@include('shared/footer')
<script src="{{ url('js/city-date.js') }}" type="text/javascript" charset="utf-8"></script>
@endif