@include('shared/header')
<link rel="stylesheet" type="text/css" href="{{ url('css/upcoming_event_userclick.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/upcomingcarousel.css') }}">
<!------- body start-------->
<!------- form start-------->
<form class="form-vertical">
    <div class="container-fluid" id="commonpack-bg">
        <div class="row" id="set-bg">
            <div class="col-md-12 col-sm-12 themeform-top">

                <div class="col-md-3 col-sm-3 col-xs-3 form-group packform" id="citypack">
                    <label class="themelab">City</label>
                    <input type="text" name='datepicker' class="form-control themehome" placeholder="Jeddah">

                </div>

                <div class="col-md-3 col-sm-3 col-xs-3 form-group packform" id="datapack">
                    <label class="themelab">Date From</label>
                    <input type="text" class="form-control themehome" placeholder="16 May, 2018">
                    <span class="far fa-calendar-alt date-element-theme"></span>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-3 form-group packform" id="labpack">
                    <label class="themelab">Date To</label>
                    <input type="text" class="form-control themehome" placeholder="20 May,2018" name="contact">
                    <span class="far fa-calendar-alt date-element-theme"></span>
                </div>
                <br>
                <br>
                <div class="form-group">
                    <div class="col-md-3 col-sm-3 col-xs-3 form-group packform" id="subpack">
                        <button type="submit" class="btn btn-danger sub_theme">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>
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
            <img src="{{ url('svg/images/arabic-logo.jpg') }}" class="img-responsive">
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
                    <div class="spacer_boxupc"></div>

                </div>
                <div class="row arrange-supplier">
                    <i class="far fa-calendar-alt" id="license"></i><span class="evenspanlineone">Event Date :
                        <b>
                            {{ date('d M, Y', strtotime($data['startDate'])) }}
                        </b>
                    </span>
                    <div class="spacer_boxupc"></div>

                </div>
                <div class="row arrange-supplier">
                    <i class="far fa-calendar-plus" id="license"></i><span class="evenspanlineone">Event Type :
                        <b>
                            {{ $data['eventType'] }}
                        </b>
                    </span>
                    <div class="spacer_boxupc"></div>
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
                    <button class="btn active" id="bn-upclist" onclick="filterSelection('all')"><b> Add to Short List</b></button>
                    <button class="btn active" id="bn-upclistone" onclick="filterSelection('all')"><b> Book Now</b></button>
                    <div class="spacer_boxupc"></div>

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

                    <div class="container-fluid" id="venue-list-bg">

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.Lorem
                            ipsum
                            dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                            ad
                            minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.Lorem
                            ipsum
                            dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                            ad
                            minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip</p>



                    </div>
                    <!------- venue-list-bg --------->


                </div>
                <!------- tab close ------->
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                    Updating ....




                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <!--------------Event Organisers ------------------>
                    Coding in process...
                    <!------------end of events content ---------------------->


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
