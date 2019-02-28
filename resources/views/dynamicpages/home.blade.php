@include('shared/header')
<link rel="stylesheet" type="text/css" href="{{ url('css/home.css') }}">
<div id="home_page">

    <!-- Home Carousal for Banners -->
    @include("shared/home_slider")

    <div class="container-fluid home-containers padd-lr-2" id="middlelayer">
        <div class="home-header-title">
            <h2>Express Deals</h2>
        </div>
        <div class="row four_box">
            @if (count($data["expressDeals"]) > 0)
            @foreach ($data["expressDeals"] as $eDeals)
            <!---- start of col-sm-3---->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <div class="boxShadow dataCards">
                    <div class="imagecards">
                        <img src={{ $eDeals["filePath"] }} alt="Avatar">
                        <div class="middle">
                            <a href={{ url("/") . '/venues/' . $eDeals['id'] }}>
                                <div class="book-now-sm-h">
                                    <span>Book Now</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="contentinside">
                        <div class="headtitle">{{ $eDeals["vennueName"] }}</div>
                        <div class="d-flex justify-content-between">
                            <div class="cardsubheader">
                                <i class="far fa-calendar-alt"></i>
                                <span>{{ $eDeals["vennueStartTime"] }}</span>
                            </div>
                            <div class="cardsubheader">
                                <span>SAR</span> {{ number_format($eDeals->actualPrice, 0) }}
                            </div>
                        </div>
                        <div class="address-line d-flex">
                            <div class="address-mark">
                                <img src="svg/images/markeradd.png">
                            </div>
                            <div class="addressBox">
                                {{ $eDeals["AddressLine_1"] }}
                                {{ $eDeals["AddressLine_2"] }}
                                {{ $eDeals["cityName"] }}
                            </div>
                        </div>
                        <div class="desc-sm">
                            {{ $eDeals["vennueShortDescription"] }}
                        </div>
                        <div class="learntab">
                            <a href={{ url("/") . '/venues/' . $eDeals['id'] }}>
                                <button type="button" class="btn btn-info btn-lg show_box"><b>LEARN MORE</b></button>
                            </a>
                        </div>
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

        <p class="text-center mt-4">
            <a href="{{ url('/expressdeals') }}">
                <button type="button" class="btn btn-info btn-lg" id="show_record"><b>SHOW MORE</b></button>
            </a>
        </p>
    </div>

    <div class="container-fluid home-containers" id="sponsor">
        <div class="home-header-title">
            <h2>Our Partners</h2>
        </div>
        <div class="row">
            @if (count($data["partners"]) > 0)
            @include('slickslider', ['slides' => $data["partners"]])
            @else
            <div>No data!!</div>
            @endif
        </div>
        <!------------ end of col ------------->
    </div>

    <div class="container-fluid home-containers padd-lr-2" id="upcomingeves">
        <div class="home-header-title text-white">
            <h2>Upcoming Events</h2>
        </div>
        <div class="row four_box">
            @if (count($data["upcomingEvents"]) > 0)
            @foreach ($data["upcomingEvents"] as $upcomingEvents)
            <!---- start of col-sm-3---->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <div class="boxShadow dataCards">
                    <div class="imagecards">
                        <img src={{ $upcomingEvents->filePath }} alt="Avatar">
                        <div class="middle">
                            <a href={{ url("/") . '/events/organisers/' . $upcomingEvents['id'] }}>
                                <div class="book-now-sm-h">
                                    <span>Book Now</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="contentinside">
                        <div class="headtitle">
                            {{ $upcomingEvents->eventName }}
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="cardsubheader">
                                <i class="far fa-calendar-alt"></i>
                                {{date('d-m-Y', strtotime($upcomingEvents->vennueStartTime))}}
                            </div>
                            <div class="cardsubheader">
                                <span>SAR</span> {{number_format($upcomingEvents->actualPrice,
                                0)}}
                            </div>
                        </div>
                        <div class="address-line d-flex">
                            <div class="address-mark">
                                <img src="svg/images/markeradd.png">
                            </div>
                            <div class="addressBox">
                                {{ $upcomingEvents["AddressLine_1"] }}
                                {{ $upcomingEvents["AddressLine_2"] }}
                                {{ $upcomingEvents["cityName"] }}
                            </div>
                        </div>
                        <div class="desc-sm">
                            {{ $upcomingEvents["eventShortDescription"] }}
                        </div>
                        <div class="learntab">
                            <a href={{ url("/") . '/events/organisers/' . $upcomingEvents['id'] }}>
                                <button type="button" class="btn btn-info btn-lg show_box"><b>LEARN MORE</b></button>
                            </a>
                        </div>
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

        <p class="text-center mt-4">
            <a href="{{ url('/upcoming-events') }}">
                <button type="button" class="btn btn-info btn-lg" id="show_recordone"><b>SHOW MORE</b></button>
            </a>
        </p>
    </div>

    <div class="container-fuild home-containers" id="show_menubg">
        <div class="d-flex justify-content-between">
            <div class="counter">
                <span class="count">{{ $data["totalEvents"] }}</span>
                <p>Events</p>
            </div>
            <div class="counter">
                <span class="count">{{ $data["totalVennues"] }}</span>
                <p>Venues</p>
            </div>
            <div class="counter">
                <span class="count">{{ $data["totalVendors"] }}</span>
                <p>Vendors</p>
            </div>
            <div class="counter">
                <span class="count">{{ $data["totalEventOrganisers"] }}</span>
                <p>Event Organizers</p>
            </div>
            <div class="counter">
                <span class="count">{{ $data["totalUsers"] }}</span>
                <p>Customers</p>
            </div>
        </div>
    </div>

    <div class="container-fluid home-containers" id="whyus">
        <div class="home-header-title">
            <h2>Why Munasabatna?</h2>
        </div>
        <div class="why-collap">
            <h5 class="why_head">EVERYTHING TO MAKE YOU SMILE</h5>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="why-us">
                        <!-- Data loads from ajax call -->
                    </div>
                    <a href="{{ url('/listing') }}" class="why-us-link">
                        <button type="button" class="btn btn-info btn-lg" id="why-us-book-button">
                            BOOK NOW
                        </button>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <img src="svg/images/meetpic.jpg" class="img-responsive">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid slideshow-container home-containers">
        <div class="home-header-title text-white">
            <h2>See what our Customers are Saying</h2>
        </div>

        <div class="home-testimonials">
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

            <a class="prev" onclick="plusSlides(-1)">
                <i class="fas fa-angle-left"></i>
            </a>
            <a class="next" onclick="plusSlides(1)">
                <i class="fas fa-angle-right"></i>
            </a>
        </div>
    </div>

    <div class="container-fluid home-containers" id="facilitate-form">
        <div class="home-header-title">
            <h2>Facilitate Customer Service</h2>
        </div>
        <p class="text-center">
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
