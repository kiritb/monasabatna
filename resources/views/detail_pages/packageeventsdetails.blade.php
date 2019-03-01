@include('shared/header')

<!------- form start-------->

@include('shared/city-date')

<!------- form start-------->
<!------- Banner start-------->
<div class="container-fluid" id="packagecommon">

    <h3 class="detail-party"><b>{{ $data['eventName'] }}</b></h3>

    <div class="arabic-logosec">
        @if(isset($data['vendorLogo']) && $data['vendorLogo'] !== "")
        <img src={{ $data['vendorLogo'] }} class="img-responsive">
        @endif
    </div>

    @include('sliderinner', ['slides' => $data['files']])

    <div class="row" id="bg-requirement">
        <div class="row themedetails-top">
            <b class="theme-flower">{{ $data['packageName'] }}</b><br>
        </div>
        <div class="row sar-setting">
            <div class="col-md-9 col-sm-9 col-xs-9 settheme">

                Setup Time - <span class="col-green">
                    <b>{{ $data['setUpTime'] }}</b>
                </span>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-3 rightsar">
                <span class="col-sar">
                    <b>SAR:</b>
                </span>
                <b>{{ number_format($data['actualPrice']) . ' ' . $data['pricingType'] }}</b>
            </div>
        </div>

        <div class="row request-setting">
            <div class="col-md-10 col-sm-10 col-xs-10 right">
                <span class="theme-travel">{{ $data['note'] }}</span>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2 right">
                <button type="submit" class="btn btn-lg-12 submittheme">Request Booking</button>
            </div>
        </div>

    </div>
    <!------------------------------ Request sent modal ----------------------------------->
</div>

<div class="container-fluid" id="packagedetails">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab"
                aria-controls="nav-about" aria-selected="true">About</a>
            <a class="nav-item nav-link" id="nav-provided-tab" data-toggle="tab" href="#nav-provided" role="tab"
                aria-controls="nav-provided" aria-selected="false">What's Provided</a>
            <a class="nav-item nav-link" id="nav-requisites-tab" data-toggle="tab" href="#nav-requisites" role="tab"
                aria-controls="nav-requisites" aria-selected="false">Pre-Requisites</a>
            <a class="nav-item nav-link" id="nav-testi-tab" data-toggle="tab" href="#nav-testi" role="tab"
                aria-controls="nav-testi" aria-selected="false">Reviews</a>
            <a class="nav-item nav-link" id="nav-terms-tab" data-toggle="tab" href="#nav-terms" role="tab"
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
                <div class="noData">No data!!</div>
                @endif
            </div>
            <!------------end of events content ---------------------->
        </div>
        <div class="tab-pane fade" id="nav-requisites" role="tabpanel" aria-labelledby="nav-requisites-tab">
            <div class="packagecontent">
                @if (count($data["prerequisites"]) > 0)
                @foreach ($data["prerequisites"] as $key=>$prerequisite)
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                    <p> {{ $key + 1 }} {{ $prerequisite }} </p>
                </div>
                @endforeach
                @else
                <div class="noData">No data!!</div>
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

    @include('ui_utils.recommendations-slicker', ['slides' => $data['recommendations'], 'title' => 'Recommonded
    Suppliers'])
</div>
<!---------------------------- Thumbnail carousel start --------------------------------->
<div class="row"> </div>
@include('shared/footer')
<script src="{{ url('js/city-date.js') }}" type="text/javascript" charset="utf-8"></script>
