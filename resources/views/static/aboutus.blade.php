@include('shared/header')
<link rel="stylesheet" type="text/css" href="{{ url('css/static-pages.css') }}">

<!-- including header -->
@include('sliderinnercustom')

<div class="row">
</div>

@if (count($data) > 0)

<div class="container-fluid">
    <div classs="row">
        <h2 class="change-italic text-center">
            Our Services
        </h2>
    </div>
    <div class="row" id="abtone">

        <div class="row abtfirst">
            <div class="leftalignabout">
                <h2 class="about-headicon">
                    <i class="fas fa-map-marker-alt" id="about" style="font-size:40px;color:#6cc0b9;background-color:white !important"></i>
                    Venue
                </h2>

                <div class="leftabout">

                    <p class="about-headzone">
                        {{ $data['aboutUs']['description'] }}
                    </p>

                </div>
            </div>
            <!----------------leftalignabout ------------------------>
            <div class="rightalignabout">
                <center> <img class="img-fluid" src={{ $data['aboutUs']['filePath'] }} style="width:600px; height:400px"></center>
            </div>
        </div>
        <!--------------row abtfirst --------------------------->
        <div class="row firstcol">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <center><button type="button" class="btn btn-default btn-lg-3 about-btn">SEE ALL VENUES HERE</button>
                </center>
            </div>
        </div>
        <!-----------------row firstcol -------------------------->
    </div>
    <!-----------------container-fluid center ------------------->
    <!----------------1st row -------------------------------------->

    <div class="row" id="bgabt">

        <div class="row abtfirst">
            <div class="rightalignabout">
                <center> <img class="img-fluid" src={{ $data['suppliers']['filePath'] }} style="width:600px; height:400px"></center>
            </div>
            <div class="leftalignabout">
                <h2 class="about-headicon"><i class="fas fa-hand-holding-usd" id="about"></i> Suppliers<h2>

                        <div class="leftabout">

                            <p class="about-headzone">
                                {{ $data['suppliers']['description'] }}
                            </p>

                        </div>
            </div>
            <!----------------leftalignabout ------------------------>

        </div>
        <!--------------row abtfirst --------------------------->
        <div class="row firstcol">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <center><button type="button" class="btn btn-default btn-lg-3 supp-btn">FIND ALL SUPPLIERS HERE</button>
                </center>
            </div>
        </div>
        <!-----------------row firstcol -------------------------->
    </div>
    <!-----------------container-fluid center ------------------->

    <div class="row" id="abtone">

        <div class="row abtfirst">
            <div class="leftalignabout">
                <h2 class="about-headicon"><i class="fas fa-users" id="about" style="font-size:40px;color:#6cc0b9;background-color:white !important"></i>
                    Event Organizers<h2>

                        <div class="leftabout">

                            <p class="about-headzone">
                                {{ $data['eventOrganisers']['description'] }}
                            </p>
                        </div>
            </div>
            <!----------------leftalignabout ------------------------>
            <div class="rightalignabout">
                <center> <img class="img-fluid" src={{ $data['eventOrganisers']['filePath'] }} style="width:600px; height:400px"></center>
            </div>
        </div>
        <!--------------row abtfirst --------------------------->
        <div class="row firstcol">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <center><button type="button" class="btn btn-default btn-lg-3 eventorg-btn">FIND THE BEST EVENT
                        ORGANISERS HERE</button> </center>
            </div>
        </div>
        <!-----------------row firstcol -------------------------->
    </div>
    <!-----------------container-fluid center ------------------->

    <!------------------------------------ content end------------------------------------------>
    <!------------------------------------ Testimonial start------------------------------------------>
    <div class="row" id="bg-about">

        @include('ui_utils/our-team', ['slides' => $data['ourTeam'], 'title' => 'Our Team'])

    </div>
    <!---------------container-fluid bg-about ----------------------->
</div>

@else
<div>No data!!</div>
@endif

<!-- including footer -->
@include('shared/footer')
<script src="{{ url('js/static-pages.js') }}" type="text/javascript" charset="utf-8"></script>
