@include('shared/header')
<link rel="stylesheet" type="text/css" href="{{ url('css/home.css') }}">
<div id="home_page">

    <!-- Home Carousal for Banners -->
    @include("shared/home_slider")

    <div class="container-fluid home-containers padd-lr-2" id="middlelayer">
        <div class="middlehead_exptop">
            <b>Express Deals </b>
        </div>
        <div class="row four_box">
            @if (count($data["expressDeals"]) > 0)
            @foreach ($data["expressDeals"] as $eDeals)
            <!---- start of col-sm-3---->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <div class="container" id="plus_two">
                    <img src={{ $eDeals["filePath"] }} alt="Avatar" class="image">
                    <div class="middle">
                        <a href="#">
                            <div class="pop_img"><img src="svg/images/booknow.png"></div>
                        </a>
                    </div>
                </div>
                <div class="container" id="contentinside1">
                    <div class="head1">
                        {{ $eDeals["vennueName"] }}
                    </div>
                    <div class="head_twoone">
                        <i class="far fa-calendar-alt" style="color:#6cc0b9"></i>
                        {{ $eDeals["vennueStartTime"] }}
                    </div>
                    <div class="head_twotwo">
                        <span style="color: #5cb9b1">SAR</span> {{ number_format($eDeals->actualPrice, 0) }}
                    </div>
                    <div class="head3">
                        <div class="headhome-img">
                            <a href=""><img src="svg/images/markeradd.png" style="margin-left:-2px;"></a></i>
                        </div>
                        <div class="headhome-text">
                            {{ $eDeals["AddressLine_1"] }}
                            {{ $eDeals["AddressLine_2"] }}
                            {{ $eDeals["cityName"] }}
                            {{ $eDeals["vennueShortDescription"] }}
                        </div>
                    </div>
                    <div class="learntab">
                        <a href="#">
                            <button type="button" class="btn btn-info btn-lg show_box"><b>LEARN MORE</b></button>
                        </a>
                    </div>
                </div>
            </div>
            <!---- end of col-sm-3---->
            @endforeach
            @else
            <div>No data!!</div>
            @endif
        </div>
        <!----- end of row col-sm-12 ----->

        <p>
            <a href="{{ url('/expressdeals') }}">
                <center><button type="button" class="btn btn-info btn-lg" id="show_record"><b>SHOW MORE</b></button>
                    <center>
            </a>
        </p>
    </div>

    <div class="container-fluid home-containers" id="sponsor">
        <div class="row">
            <div class="container">
                <div class="middlehead_exp text-center"> <b>Our Partners </b></div>
            </div>
            @if (count($data["partners"]) > 0)
            @include('slickslider', ['slides' => $data["partners"]])
            @else
            <div>No data!!</div>
            @endif
        </div>
        <!------------ end of col ------------->
    </div>

    <div class="container-fluid home-containers padd-lr-2" id="upcomingeves">

        <div class="container middlehead">
            <caption> Upcoming Events </caption>
        </div>
        <br>
        <div class="row four_box">
            @if (count($data["upcomingEvents"]) > 0)
            @foreach ($data["upcomingEvents"] as $upcomingEvents)
            <!---- start of col-sm-3---->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <div class="container" id="plus_one">
                    <img src={{ $upcomingEvents->filePath }} alt="Avatar" class="image">
                    <div class="middle">
                        <a href="#">
                            <div class="pop_img"><img src="svg/images/booknow.png"></div>
                        </a>
                    </div>
                </div>
                <div class="container" id="contentinside2">
                    <div class="head1">
                        {{ $upcomingEvents->eventName }}
                    </div>
                    <div class="head_twoone">
                        <i class="far fa-calendar-alt" style="color:#6cc0b9"></i>
                        {{date('d-m-Y', strtotime($upcomingEvents->vennueStartTime))}}
                    </div>
                    <div class="head_twotwo">
                        <span style="color: #5cb9b1">SAR</span> {{number_format($upcomingEvents->actualPrice, 0)}}
                    </div>
                    <div class="head3">
                        <div class="headhome-img">
                            <a href=""><img src="svg/images/markeradd.png" style="margin-left:-2px;"></a></i>
                        </div>
                        <div class="headhome-text">
                            {{ $upcomingEvents["AddressLine_1"] }}
                            {{ $upcomingEvents["AddressLine_2"] }}
                            {{ $upcomingEvents["cityName"] }}
                            {{ $upcomingEvents["eventShortDescription"] }}
                        </div>
                    </div>
                    <div class="learntab">
                        <a href="#">
                            <button type="button" class="btn btn-info btn-lg show_box"><b>LEARN MORE</b></button>
                        </a>
                    </div>
                </div>
            </div>
            <!---- end of col-sm-3---->
            @endforeach
            @else
            <div>No data!!</div>
            @endif

        </div>
        <!----- end of row col-sm-12 ----->

        <p>
            <a href="{{ url('/upcoming-events') }}">
                <center><button type="button" class="btn btn-info btn-lg" id="show_recordone"><b>SHOW MORE</b></button>
                    <center>
            </a>
        </p>
    </div>

    <div class="container-fuild home-containers" id="show_menubg">
        <div class="wrapper">
            <div class="counter col_fifth">
                <span class="count">{{ $data["totalEvents"] }}</span>
                <p class="count-text">Events</p>
            </div>
            <div class="counter col_fifth">
                <span class="count">{{ $data["totalVennues"] }}</span>
                <p class="count-text">Venues</p>
            </div>
            <div class="counter col_fifth">
                <span class="count">{{ $data["totalVendors"] }}</span>
                <p class="count-text">Vendors</p>
            </div>
            <div class="counter col_fifth">
                <span class="count">{{ $data["totalEventOrganisers"] }}</span>
                <p class="count-text">Event Organizers</p>
            </div>
            <div class="counter col_fifth">
                <span class="count">{{ $data["totalUsers"] }}</span>
                <p class="count-text ">Customers</p>
            </div>
        </div>
    </div>

    <div class="container-fluid home-containers">

        <h1 id="middlehead" class="text-center">
            Why Munasabatna?
        </h1>
        <div class="row why-collap">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <h3 class="why_head"><b>EVERYTHING TO MAKE YOU SMILE</b> </h3>
                <div class="why-us">
                    <!-- Data loads from ajax call -->
                </div>
                <button type="button" class="btn btn-info btn-lg" id="show_record_why"><a href="{{ url('/listing') }}"><b>BOOK
                            NOW</b></a></button>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <a href="#">
                    <img src="svg/images/meetpic.jpg" class="img-responsive">
                </a>
            </div>
        </div>
    </div>

    <div class="slideshow-container home-containers">
        <h4 class="testimonial-head">See what our Customers are Saying</h4>
        @if (count($data["testimonials"]) > 0)
        @foreach ($data["testimonials"] as $testimonials)
        <div class="mySlides">
            <div class="row">
                <a href="#" class="testimonial-pic">
                    <img class="testi-img" src={{ $testimonials->filePath }} alt="">
                </a>
            </div>
            <div class="row testi-content col-sm-8">
                <q class="quotes_home">{{ $testimonials->testimonial }}</q>
            </div>
            <p class="author">- {{ $testimonials->first_name }}</p>

        </div>
        @endforeach

        @else
        <div>No data!!</div>
        @endif

        <a class="prev" onclick="plusSlides(-1)"><i class="fas fa-angle-left" style="font-size:45px"></i></a>
        <a class="next" onclick="plusSlides(1)"><i class="fas fa-angle-right" style="font-size:45px"></i></a>
    </div>

    <div class="container-fluid home-containers" id="facilitate-form">
        <h2 class="form_homehead  text-center">
            <b>Facilitate Customer Service</b>
        </h2>
        <p class="form_hometext text-center">
            We will allow you to book the best party services based on your preferences with best deals.
        </p>
        <div class="row" id="form-home">
            <!-- Contact form will be loaded here -->
            @include("shared/facilitate-customer-service")
        </div>
    </div>
</div>
<!------- body end-------->

@include('shared/footer')
<script src="{{ url('js/home.js') }}" type="text/javascript" charset="utf-8"></script>
