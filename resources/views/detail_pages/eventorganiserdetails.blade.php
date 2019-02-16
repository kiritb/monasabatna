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

                    <i class="fas fa-map-marker-alt" style="font-size:20px; color:#6cc0b9" aria-hidden="true"></i>
                    <span class="evenspanline"> Address : <b> {{ $data['AddressLine_1'] }},
                            {{ $data['AddressLine_2']
                            }}, {{ $data['cityName'] }} </b><a
                            class="showmap" href={{ $data['googleMapLink'] }}>
                            Show in map</a></span>
                    <div class="spacer_boxtwo"></div>
                    <span class="travelline">{{ $data['travelNote'] }}</span>
                </div>
                <div class="row arrange-supplier">
                    <i class="fas fa-phone-volume" style="font-size:20px; color:#6cc0b9; margin-top:2px"></i><span
                        class="evenspanline"> Customer Service Number : <b>+85-9876543210 </b></span>
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
        <h4 class="event_h_four">15 Event themes offered</h4>
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                @if (count($data["packages"]) > 0)
                @foreach ($data["packages"] as $key=>$packages)
                <a class="nav-item nav-link {{ ($key=='all')?'active':'' }}"
                    id="nav-{{ strtolower(str_replace(' ', '-', $key)) }}-tab" data-toggle="tab"
                    href="#nav-{{ strtolower(str_replace(' ', '-', $key)) }}" role="tab"
                    aria-controls="nav-{{ strtolower(str_replace(' ', '-', $key)) }}" aria-selected="true">
                    {{ ucfirst($key) }}
                </a>
                @endforeach
                @else
                <div>No data!!</div>
                @endif
            </div>
        </nav>

        <div class="tab-content" id="nav-eventportfolioContent">
            @if (count($data["packages"]) > 0)
            @foreach ($data["packages"] as $key=>$packages)
            <div class="tab-pane fade show {{ ($key=='all')?'active':'' }}"
                id="nav-{{ strtolower(str_replace(' ', '-', $key)) }}" role="tabpanel"
                aria-labelledby="nav-{{ strtolower(str_replace(' ', '-', $key)) }}-tab">

                <!-- <div class="eventgreyline"></div> -->
                <div class="eventportcontent">
                    <!---------- start of content --------------->
                    <div class="row">
                        <!--- row start ---------->
                        @if (count($packages) > 0)
                        @foreach ($packages as $key=>$item)
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="event-content">
                                <img src={{ $item['filePath'] }} class="img-responsive" alt="Mountains"
                                    style="width:100%; height:100%">
                                <div class="row portthemebtn">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="content-option">
                                            <strong><b>{{ $item['packageName'] }}</b></strong>
                                            <p>
                                                <b>
                                                    <span class="col-green">SAR:</span>
                                                    {{ number_format($item['actualPrice']) }} {{$item['pricingType'] }}
                                                </b>
                                            </p>
                                        </div>
                                    </div>

                                    <button class="btn active" id="btn-port" onclick="filterSelection('all')"> Book
                                        Now</button>

                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div>No data!!</div>
                        @endif
                    </div>
                    <!-------------end of content -------------------------->
                </div>
            </div>
            @endforeach
            @else
            <div>No data!!</div>
            @endif
        </div>
    </div>

    <!-- Portfolio Gallery Grid -->

    <!------- Information start-------->

    <div class="container-fluid" id="starreview">
        <div class="bg-star">
            <div class="row eventcustom">
                <div class="col-lg-12 col-md-12 col-xs-6">
                    <h4 class="eve-head text-center">
                        <bold>See What our Customers are saying</bold>
                    </h4>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-6">
                    <span class="star-head">Responsiveness</span>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-6">
                    @include('ui_utils.stars', ['stars'=> 5])
                </div>
                <div class="col-lg-6 col-md-6 col-xs-6">
                    <span class="star-head">Quality</span>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-6">
                    @include('ui_utils.stars', ['stars'=> 4])
                </div>
                <div class="col-lg-6 col-md-6 col-xs-6">
                    <span class="star-head">Availability</span>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-6">
                    @include('ui_utils.stars', ['stars'=> 3])
                </div>

                <div class="col-lg-6 col-md-6 col-xs-6">
                    <span class="star-head"> Value for money</span>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-6">
                    @include('ui_utils.stars', ['stars'=> 5])
                </div>
                <div class="col-lg-6 col-md-6 col-xs-6">
                    <span class="star-head"> Quality</span>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-6">
                    @include('ui_utils.stars', ['stars'=> 3])
                </div>

            </div>
        </div>
    </div>
    <!------- Information end-------->

    <div class="eventgreyline"></div>

    <!---------------------------- Thumbnail carousel start --------------------------------->

    @include('slickslider', ['slides' => $data['files']])
    <div class="row"></div>
</div>
@include('shared/footer')
<script src="{{ url('js/city-date.js') }}" type="text/javascript" charset="utf-8"></script>