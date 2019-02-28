@include('shared/header')
<link rel="stylesheet" type="text/css" href="{{ url('css/upcoming_events.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/upcomingcarousel.css') }}">
<!------- body start-------->
<!------- form start-------->

@include('shared/city-date')

<!------- form start-------->
<!------- Banner start-------->

<div class="container-fluid">

    <div class="bg clearfix">
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-6">
            <h3 class="event-two-head">
                <span class="star-headevent">{{ $data['eventName'] }}</span>

            </h3>
        </div>
        <div class="arabic-logosec">
            @if(isset($data['vendorLogo']) && $data['vendorLogo'] !== "")
            <img src={{ $data['vendorLogo'] }} class="img-responsive">
            @endif
        </div>
    </div>
    @include('slickslider_thumbnail', ['slides' => $data['files']])
    <!------- Banner end-------->
    <div class="container-fluid" id="eventinfo">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 pack-bg">
                <h3 class="nameupc">{{ $data['eventName'] }}</h3>
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

                </div>

                <div class="row arrange-supplier">
                    <i class="far fa-address-card" id="license"></i><span class="evenspanline">License Number :
                        <b>{{ $data['licenseNo'] }}</b>
                    </span>
                </div>
                <div class="row arrange-supplier">
                    <i class="far fa-calendar-alt" id="license"></i><span class="evenspanlineone">Event Date :
                        <b>
                            {{ date('d M, Y', strtotime($data['startDate'])) }}
                        </b>
                    </span>
                </div>
                <div class="row arrange-supplier">
                    <i class="far fa-calendar-plus" id="license"></i><span class="evenspanlineone">Event Type :
                        <b>
                            {{ $data['eventType'] }}
                        </b>
                    </span>
                    <div class="eventstar">
                        <span class="col-sar"> <b>SAR:</b>
                        </span>
                        <b>
                            {{ number_format($data['actualPrice']) }} {{ $data['pricingType'] }}
                        </b>
                    </div>
                </div>
                <div class="row arrange-supplier">
                    <i class="far fa-clock" id="license"></i><span class="evenspanline">Booking before :
                        <b>
                            {{ date('d M, Y', strtotime($data['endDate'])) }}
                        </b>
                    </span>
                    <button class="btn active" id="bn-upclist" onclick="filterSelection('all')"><b> Add to Short
                            List</b></button>
                    <button class="btn active" id="bn-upclistone" onclick="filterSelection('all')"><b> Book
                            Now</b></button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="eventrows">
        <div class="fbrow">
            <a class="fb-button" href={{ $data['fbLink'] }}><i id="fbevent" class="fab fa-facebook-f"></i>Facebook</a>
            <a class="twit-button" href={{ $data['twitterLink'] }}><i id="fbevent" class="fab fa-twitter"></i>Twitter</a>
        </div>
    </div>
    <!------- Address end-------->
    <div class="container-fluid" id="upcomingtabs">
        <div id="customerprofile">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                        aria-controls="nav-home" aria-selected="true">About</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                        aria-controls="nav-profile" aria-selected="false">Menu</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
                        aria-controls="nav-contact" aria-selected="false">Amenities</a>
                    <a class="nav-item nav-link" id="nav-events-tab" data-toggle="tab" href="#nav-events" role="tab"
                        aria-controls="nav-events" aria-selected="false">Terms & Policies</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="venue-list-bg">
                        {{ $data['eventShortDescription'] }}
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="container-fluid packagecontent">
                        <div class="accordion" id="accordionExample">

                            @if (count($data["services"]) > 0)
                            @foreach ($data["services"] as $key=>$services)
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse_{{ $key }}"
                                            aria-expanded="true" aria-controls="collapse_{{ $key }}">
                                            {{ $services['serviceName'] }}
                                        </button>
                                    </h2>
                                </div>


                                <div id="collapse_{{ $key }}" class="collapse {{ ($key==0)?'show':'' }}"
                                    aria-labelledby="headingOne" data-parent="#accordionExample">

                                    <div class="card-body">

                                        <h3>{{ $services['serviceName'] }}</h3>
                                        <div>{{ $services['actualPrice'] . ' ' . $services['pricingType'] }}</div>
                                    </div>

                                </div>
                            </div>
                            @endforeach
                            @else
                            <div>No data!!</div>
                            @endif

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="container-fluid packagecontent">

                        <div class="row">

                            @if (count($data["ammenties"]) > 0)
                            @foreach ($data["ammenties"] as $ammentie)
                            <div class="col">
                                <h1><i class="fa fa-street-view" style="font-size:50px"></i></h1>
                                <label><b>{{ $ammentie }}</b></label>
                            </div>
                            @endforeach
                            @else
                            <div>No data!!</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab">
                    <div class="customerlinegreen"></div>
                    <div class="container-fluid" id="customer-profile-bg">
                        @include('ui_utils/policy-loader', ['policies'=> $data['policies']])
                    </div>
                    <!------------end of events content ---------------------->
                </div>
            </div>
        </div>
    </div>

    <div class="row"></div>
</div>
@include('shared/footer')
<script src="{{ url('js/city-date.js') }}" type="text/javascript" charset="utf-8"></script>
