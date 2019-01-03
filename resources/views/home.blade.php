@include('header')

<div id="home_page">

    <!-- Home Carousal for Banners -->
    @include("slider")

    <?php

        if (Auth::check()) {
            // The user is logged in...
            echo '<h1>Logged In</h1>';
        }

    ?>

    <!-----middlelayer star---------------->
    <div class="container-fluid" id="middlelayer">
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
                    <div class="spacer_box"></div>
                    <div class="spacer_box"></div>
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

                    <br>
                    <div class="spacer_box"></div>
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
                    <div class="spacer_boxone"></div>
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
            <a href="#">
                <center><button type="button" class="btn btn-info btn-lg" id="show_record"><b>SHOW MORE</b></button>
                    <center>
            </a>
        </p>
    </div>

    <!-----middlelayer---------------->
    <div class="container-fluid" id="sponsor">
        <div class="row">
            <div class="container">
                <center>
                    <div class="middlehead_exp"> <b>Our Partners </b></div>
                    <center>
            </div>
            <div class="container col-md-12 col-sm-6">
                @if (count($data["partners"]) > 0)
                @foreach ($data["partners"] as $partners)
                <div class="advertisepic">
                    <img class="img-responsive" src={{ $partners->filePath }}>
                </div>
                @endforeach
                @else
                <div>No data!!</div>
                @endif
            </div>
        </div>
        <!------------ end of col ------------->
    </div>
    <!---end of row -->
    <!-----middlelayer star---------------->
    <div class="container-fluid" id="middlelayer2">

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
                    <div class="spacer_box"></div>
                    <div class="spacer_box"></div>
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
                    <br>
                    <div class="spacer_box"></div>
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
                    <div class="spacer_boxone"></div>
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
            <a href="#">
                <center><button type="button" class="btn btn-info btn-lg" id="show_recordone"><b>SHOW MORE</b></button>
                    <center>
            </a>
        </p>
    </div>

    <!-----middlelayer---------------->
    <!-----middlelayer end---------------->
    <!-------------- menuback start --------------->
    <div class="container-fuild">
        <div id="show_menubg">
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
    </div>
    <!-------------- menuback end --------------->

    <!-------------- meeting layer start --------------->
    <div class="container-fluid">
        <div class="row">
            <div id="middlehead" class="text-center">
                <b>Why Munasabatna?</b>
            </div>
            <div class="row control_why">
                <h3 class="why_head"><b>EVERYTHING TO MAKE YOU SMILE</b> </h3>
            </div>
            <div class="row why-collap">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <p class="why_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It
                        has
                        survived not only five centuries, but also the leap into
                        electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                        the
                        release of
                        Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                        software
                        like Aldus PageMaker including versions of Lorem Ipsum
                    </p>
                    <p class="why_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It
                        has
                        survived not only five centuries, but also the leap into
                        electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                        the
                        release of
                        Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                        software
                        like Aldus PageMaker including versions of Lorem Ipsum
                    </p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <a href="#"><img src="svg/images/meetpic.jpg" class="img-responsive" style="width:600px; height:300px; margin-left:13px"></a>
                </div>
            </div>
            <div class="row">
                <a href="#">
                    <center><button type="button" class="btn btn-info btn-lg" id="show_record_why"><b>BOOK NOW</b></button>
                        <center>
                </a>
            </div>

        </div>
    </div>
    <!-------------- meeting layer end --------------->

    <!-------------- testimonial start --------------->
    <div class="slideshow-container">
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
    <!-------testimonialcontent---------->

    <!-------------- Forms start--------------->
    <div class="container">
        <h2 class="form_homehead">
            <center><b>Facilitate Customer Service</b></center>
        </h2>
        <p class="form_hometext">
            <center> We will allow you to book the best party services based on your preferences with best deals</center>
        </p>
        <div class="row" id="form-home">
            <form class="form-horizontal text-center" action="/action_page.php">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6 form-group">
                        <input type="text" class="form-control customhomeone" placeholder="Name" name="contact">
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 form-group">
                        <input type="text" class="form-control customhome" placeholder="Phone Number" name="venue">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6 form-group">
                        <input type="text" class="form-control customhomeone" placeholder="Email Address" name="contact">
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 form-group">
                        <input type="date_default_timezone_set" class="form-control customhome" placeholder="Event Date"
                            name="contact">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6 form-group">
                        <select class="form-control customhomeone" placeholder="Type of Event" required>
                            <option value="" selected>Type of Event</option>
                            <option value="Marriages">Mariages</option>
                            <option value="Babyshower">Baby Shower</option>
                            <option value="birthdays">Birthdays</option>
                            <option value="tradition">Tradition Ceremonies</option>
                        </select>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 form-group">
                        <input type="date_default_timezone_set" class="form-control customhome" placeholder="Number of Guests"
                            name="contact">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6 form-group">
                        <select class="form-control customhomeone" placeholder="Type of Event">>
                            <option>Food</option>
                            <option>Mariages</option>
                            <option>Baby Shower</option>
                            <option>Birthdays</option>
                            <option>Tradition Ceremonies</option>
                        </select>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 form-group">
                        <select class="form-control customhome" placeholder="Type of Event">>
                            <option>Decoration</option>
                            <option>Mariages</option>
                            <option>Baby Shower</option>
                            <option>Birthdays</option>
                            <option>Tradition Ceremonies</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6 form-group">
                        <select class="form-control customhomeone" placeholder="Type of Event">
                            <option>Budget</option>
                            <option>Mariages</option>
                            <option>Baby Shower</option>
                            <option>Birthdays</option>
                            <option>Tradition Ceremonies</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <textarea class="form-control customtext" placeholder="Note" rows="4"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group mt-3">
                        <button type="button" class="btn btn-info btn-lg center-block" id="show_recordform">SUBMIT</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!------- body end-------->

@include('footer')

<script type="text/javascript">
    // Testimonial
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        if (dots.length) {
            dots[slideIndex - 1].className += " active";
        }
    }

    // countdown with background
    $('.count').each(function () {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

</script>
