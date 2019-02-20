@include('shared/header')
<!------- body start-------->
<!------- form start-------->

@include('shared/city-date')

<!------- form start-------->
<!------- Banner start-------->

<div class="container-fluid">

    <div class="bg clearfix">
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-6">
            <h3 class="event-two-head">
                <span class="star-headevent">{{ $data['eventOrgainsersName'] }}</span>
                @include('ui_utils.stars', ['stars' => $data["rating"]])
            </h3>
        </div>
        <div class="arabic-logosec">
            <img src={{ url('svg/images/arabic-logo.jpg') }} class="img-responsive">
        </div>
    </div>
    @include('sliderinner', ['slides' => $data['files']])
    <!------- Banner end-------->
    <div class="container-fluid" id="eventinfo">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 pack-bg">
                <div class="row arrange-supplier">
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
                    <span class="travelline">{{ $data['travelNote'] }}</span>
                </div>
                <div class="row arrange-supplier">
                    <i class="fas fa-phone-volume" style="font-size:20px; color:#6cc0b9; margin-top:2px"></i><span
                        class="evenspanline"> Customer Service Number :
                        <b>
                            {{ $data['customerCareNo'] }}
                        </b>
                    </span>
                </div>
                <div class="row arrange-supplier">
                    <i class="far fa-address-card" id="license"></i>
                    <span class="evenspanline">License Number :
                        <b>
                            {{ $data['licenseNo'] }}
                        </b>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="eventrows">
        <div class="fbrow">
            <a class="fb-button" href={{ $data['fbLink'] }}><i id="fbevent" class="fab fa-facebook-f"></i>Facebook</a>
            <a class="twit-button" href={{ $data['twitterLink'] }}><i id="fbevent"
                    class="fab fa-twitter"></i>Twitter</a>
            <a class="eventterms" href="#"> Terms & Policies</a>
        </div>
    </div>
    <!------- Address end-------->

    <div class="container-fluid" id="eventdetails">
        @include('shared/packageLists', ['packageList' => $data['packages']])
    </div>

    <!-- Portfolio Gallery Grid -->

    <!------- Information start-------->

    @include("shared/reviewratings", ['reviews' => $data['reviews']])

    <!------- Information end-------->

    <div class="eventgreyline"></div>

    <!---------------------------- Thumbnail carousel start --------------------------------->

    @include('slickslider', ['slides' => $data['files']])
    <div class="row"></div>
</div>
@include('shared/footer')
<script src="{{ url('js/city-date.js') }}" type="text/javascript" charset="utf-8"></script>