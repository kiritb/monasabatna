@include('shared/header')
<link rel="stylesheet" type="text/css" href={{ url('css/upcoming_event_userclick.css') }}>
<link rel="stylesheet" type="text/css" href={{ url('css/upcomingcarousel.css') }}>
<!------- body start-------->
<!------- form start-------->

@include('shared/city-date')

<div class="container-fluid">

    <div class="bg clearfix">
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-6">
            <h3 class="event-two-head">
                <span class="star-headevent">{{ $data['vennueName'] }}</span>
                @include('ui_utils.stars', ['stars' => $data["rating"]])
            </h3>
        </div>
        <div class="arabic-logosec">
            <img src={{ url('svg/images/arabic-logo.jpg') }} class="img-responsive">
        </div>
    </div>
    @include('slickslider_thumbnail', ['slides' => $data['files']])
    <!------- Banner end-------->
    <div class="container-fluid" id="eventinfo">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 pack-bg pt-3">
                <div class="row arrange-supplier">

                    <i class="fas fa-map-marker-alt" style="font-size:20px; color:#6cc0b9" aria-hidden="true"></i>
                    <span class="evenspanline"> Address : <b>{{ $data['AddressLine_1'] }}, {{ $data['AddressLine_2']
                            }}, {{ $data['cityName'] }}</b><a class="showmap" href={{ $data['googleMapLink'] }}>
                            Show in map</a></span>
                    <div class="spacer_boxupc"></div>

                </div>

                <div class="row arrange-supplier">
                    <i class="fas fa-phone" id="license"></i><span class="evenspanlineone">Customer Service Number : <b>+85-9876543210
                        </b></span>
                    <div class="spacer_boxupc"></div>

                </div>

                <div class="row arrange-supplier">
                    <i class="far fa-address-card" id="license"></i>
                    <span class="evenspanline">License Number :
                        <b>{{ $data['licenseNo'] }}</b>
                    </span>
                    <div class="spacer_boxupc"></div>

                </div>

                <div class="row arrange-supplier">
                    <i class="fas fa-users" id="license"></i>
                    <span class="evenspanlineone">Guest Capacity :
                        <b>{{ $data['MinGuestCap'] }} - {{ $data['MaxGuestCap'] }}</b>
                    </span>
                    <div class="spacer_boxupc"></div>
                    <div class="venuestar">
                        <span class="col-sar">
                            <b>SAR:</b>
                        </span>
                        <b>{{ number_format($data['actualPrice']) }} {{ $data['pricingType'] }}</b>
                    </div>
                </div>
                <div class="row arrange-supplier">
                    <i class="far fa-clock" id="license"></i>
                    <span class="evenspanline">Start Time : <b>{{ date('h:i A', strtotime($data['vennueStartTime']))
                            }}</b>
                        <span class="clockrow">End Time : <b>{{ date('h:i A', strtotime($data['vennueEndTime']))
                                }}</b>
                        </span>
                    </span>
                    <button class="btn active" id="bn-upclist" onclick="filterSelection('all')"><b> Add to Short List</b></button>
                    <button class="btn active" id="bn-upclistone" onclick="filterSelection('all')"><b> Book Now</b></button>
                    <div class="spacer_boxupc"></div>

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="eventrows">
        <div class="fbrow">
            <a class="fb-button" href="#"><i id="fbevent" class="fab fa-facebook-f"></i>Facebook</a>
            <a class="twit-button" href="#"><i id="fbevent" class="fab fa-twitter"></i>Twitter</a>

        </div>
    </div>
    <!------- Address end-------->

    <div class="container-fluid" id="venuedetails">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab"
                    aria-controls="nav-about" aria-selected="true">About</a>
                <a class="nav-item nav-link" id="nav-provided-tab" data-toggle="tab" href="#nav-provided" role="tab"
                    aria-controls="nav-provided" aria-selected="false">Services</a>
                <a class="nav-item nav-link" id="nav-requisites-tab" data-toggle="tab" href="#nav-requisites" role="tab"
                    aria-controls="nav-requisites" aria-selected="false">Amenities</a>
                <a class="nav-item nav-link" id="nav-testi-tab" data-toggle="tab" href="#nav-testi" role="tab"
                    aria-controls="nav-testi" aria-selected="false">Reviews</a>
                <a class="nav-item nav-link" id="nav-terms-tab" data-toggle="tab" href="#nav-terms" role="tab"
                    aria-controls="nav-terms" aria-selected="false">Terms & Policies</a>
            </div>
        </nav>

        <div class="tab-content" id="nav-packContent">
            <div class="tab-pane fade show active" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">

                <div class="packagegreyline"></div>
                <div class="packagecontent">
                    <p>{{ $data['vennueShortDescription'] }}</p>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-provided" role="tabpanel" aria-labelledby="nav-provided-tab">
                <div class="packagegreyline"></div>
                <div class="packagecontent">
                    <div class="accordion" id="accordionExample">

                        @if (count($data["services"]) > 0)
                        @foreach ($data["services"] as $key=>$services)
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse_{{ $key }}"
                                        aria-expanded="true" aria-controls="collapse_{{ $key }}">
                                        Catering
                                    </button>
                                </h2>
                            </div>

                            <div id="collapse_{{ $key }}" class="collapse {{ ($key==0)?'show':'' }}" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    @if (count($services["serviceMenu"]) > 0)
                                    @foreach ($services["serviceMenu"] as $serviceMenu)
                                    <div>{{ $serviceMenu }}</div>
                                    @endforeach
                                    @else
                                    <div>No data!!</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div>No data!!</div>
                        @endif

                    </div>
                </div>
                <!------------end of events content ---------------------->
            </div>
            <div class="tab-pane fade" id="nav-requisites" role="tabpanel" aria-labelledby="nav-requisites-tab">
                <div class="packagegreyline"></div>
                <div class="packagecontent">

                    @if (count($data["ammenties"]) > 0)
                    @foreach ($data["ammenties"] as $ammenties)
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                        <h1><i class="fa fa-street-view" style="font-size:50px"></i></h1>
                        <label><b>{{ $ammenties['amenitieName'] }}</b></label>
                    </div>
                    @endforeach
                    @else
                    <div>No data!!</div>
                    @endif

                </div>
            </div>
            <div class="tab-pane fade" id="nav-testi" role="tabpanel" aria-labelledby="nav-testi-tab">
                <div class="packagegreyline"></div>
                <!--------------Event Organisers ------------------>
                <div class="packagecontent">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">

                            @if (count($data["reviews"]) > 0)
                            @foreach ($data["reviews"] as $key=>$reviews)
                            <div class="carousel-item {{ ($key==0)?'active':'' }}">
                                <img src={{ $reviews['fileUrl'] }} class="d-block w-100" id="testivenueone" alt="...">
                                <div class="carousel-caption d-none d-md-block">

                                    <p class="venuepara">
                                        {{ $reviews['review_comment'] }}
                                        <a href="#">Read More</a>
                                    </p>
                                    <h5 class="venuetestiname">{{ $reviews['first_name'] }} {{ $reviews['family_name']
                                        }}</h5>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <div>No data!!</div>
                            @endif

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <i class="fas fa-angle-left" id="venuetestil"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <i class="fas fa-angle-right" id="venuetestir"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <!------------end of events content ---------------------->
            </div>
            <div class="tab-pane fade" id="nav-terms" role="tabpanel" aria-labelledby="nav-terms-tab">
                <div class="packagegreyline"></div>
                <div class="packagecontent">
                    @include('ui_utils/policy-loader', ['policies'=> $data['policies']])
                </div>
            </div>
        </div>
    </div>

    @include('slickslider', ['slides' => $data['files']])
    @include('slickslider', ['slides' => $data['files']])
    @include('slickslider', ['slides' => $data['files']])

    <div class="row"></div>
</div>
@include('shared/footer')
<script src="{{ url('js/city-date.js') }}" type="text/javascript" charset="utf-8"></script>