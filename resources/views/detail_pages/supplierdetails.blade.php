@include('shared/header')

<!------- form start-------->

@include('shared/city-date')

<!------- form start-------->
<!------- Banner start-------->
<div class="container-fluid" id="packagecommon">

    <h3 class="detail-party"><b>{{ $data['supplierName'] }}</b></h3>

    @include('sliderinner', ['slides' => $data['files']])

</div>

<!------- Banner end-------->

<div class="container-fluid" id="supplierpacksect">
    <div class="row suppoffered">Theme : Desserts, Chocolates and Cakes </div>
    <div class="row supptravel">{{ $data['travelNote'] }}</div>
    <div class="row sartravel"><span class="go-green">SAR :</span>40 / Person </div>
    <div class="row buttonsupp"><a class="shtsupp" href="#">Add to Wishlist</a><a class="booksupp active" href="#">Book
            Now</a></div>
</div>

<div class="row gap"></div>

<div class="container-fluid" id="supplierdetails">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab"
                aria-controls="nav-about" aria-selected="true">About</a>
            <a class="nav-item nav-link" id="nav-provided-tab" data-toggle="tab" href="#nav-provided" role="tab"
                aria-controls="nav-provided" aria-selected="false">What's Provided</a>

            <a class="nav-item nav-link" id="nav-testi-tab" data-toggle="tab" href="#nav-testi" role="tab"
                aria-controls="nav-testi" aria-selected="false">Reviews</a>
            <a class="nav-item nav-link" id="nav-terms-tab" data-toggle="tab" href="#nav-terms" role="tab"
                aria-controls="nav-terms" aria-selected="false">Terms & Policies</a>
        </div>
    </nav>

    <div class="tab-content" id="nav-packContent">
        <div class="tab-pane fade show active" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
            <div class="packagecontent">
                {{ $data['supplierDescription'] }}
            </div>
        </div>
        <div class="tab-pane fade" id="nav-provided" role="tabpanel" aria-labelledby="nav-provided-tab">
            <div class="packagecontent">
                <!--------------Event Organisers ------------------>
                <ul style="list-style-type:circle; color:6cc0b9">
                    <ol> Write the review for all the facilities </ol>
                    <ol> Write the review for all the facilities </ol>
                    <ol> Write the review for all the facilities </ol>
                    <ol> Write the review for all the facilities </ol>
                    <ol> Write the review for all the facilities </ol>
                </ul>
            </div>
            <!------------end of events content ---------------------->
        </div>
        <div class="tab-pane fade" id="nav-requisites" role="tabpanel" aria-labelledby="nav-requisites-tab">
            <div class="packagecontent">
                <!--------------Event Organisers ------------------>
                <ul style="list-style-type:circle; color:6cc0b9">
                    <ol> Write the review for all the facilities </ol>
                    <ol> Write the review for all the facilities </ol>
                    <ol> Write the review for all the facilities </ol>
                    <ol> Write the review for all the facilities </ol>
                    <ol> Write the review for all the facilities </ol>
                    <ol> Write the review for all the facilities </ol>
                    <ol> Write the review for all the facilities </ol>
                </ul>
            </div>
            <!------------end of events content ---------------------->
        </div>
        <div class="tab-pane fade" id="nav-testi" role="tabpanel" aria-labelledby="nav-testi-tab">
            <!--------------Event Organisers ------------------>
            <div class="packagecontent">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="svg/images/testi-about1.png" class="d-block w-100" id="testivenueone" alt="...">
                            <div class="carousel-caption d-none d-md-block">

                                <p class="venuepara">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                    aliquip.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam <a href="#">Read More</a></p>
                                <h5 class="venuetestiname">Lara</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="svg/images/testi-about2.png" class="d-block w-100" id="testivenuetwo" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <p class="venuepara">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                    aliquip.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam <a href="#">Read More</a></p>
                                <h5 class="venuetestiname">Kanes</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="svg/images/testi-themedetails.png" class="d-block w-100" id="testivenuethree"
                                alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <p class="venuepara">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                    aliquip.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam <a href="#">Read More</a></p>
                                <h5 class="venuetestiname">John</h5>
                            </div>
                        </div>
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
            <!------------end of events content ---------------------->
            <div role="tabpanel" class="tab-pane active" id="about">
                <div class="packagecontent">
                    @include('ui_utils/policy-loader', ['policies'=> $data['policies']])
                </div>
            </div>
        </div>
    </div>
</div>

@include('ui_utils.recommendations-slicker', ['slides' => $data['recommendations'], 'title' => 'Recommonded Suppliers'])

<!---------------------------- Thumbnail carousel start --------------------------------->

<div class="row"> </div>
@include('shared/footer')
<script src="{{ url('js/city-date.js') }}" type="text/javascript" charset="utf-8"></script>