@include('shared/header')
<link rel="stylesheet" type="text/css" href="{{ url('css/static-pages.css') }}">

<!-- including header -->
@include('sliderinnercustom')

@if (count($data))

<div class="aboutus-page">
    <div>
        <div class="title-text kitten-bold">
            <h1>Our Services</h1>
        </div>
    </div>
    <div class="static-page-spacer">
        <div class="row abtfirst">
            <div class="leftalignabout">
                <h2 class="about-headicon">
                    <i class="fas fa-map-marker-alt"></i>
                    Venue
                </h2>
                <div class="leftabout">

                    <p class="about-headzone">
                        {{ $data['aboutUs']['description'] }}
                    </p>

                </div>
            </div>
            <div class="rightalignabout">
                <img class="img-fluid" src={{ $data['aboutUs']['filePath'] }}>
            </div>
        </div>
        <div class="row firstcol">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <center>
                    <button type="button" class="btn btn-default btn-lg-3 about-btn">SEE ALL VENUES HERE</button>
                </center>
            </div>
        </div>
    </div>
    <div class="static-page-spacer">
        <div class="row abtfirst">
            <div class="leftalignabout">
                <img class="img-fluid" src={{ $data['suppliers']['filePath'] }}>
            </div>
            <div class="rightalignabout">
                <h2 class="about-headicon">
                    <i class="fas fa-hand-holding-usd"></i>
                    Suppliers
                </h2>
                <div class="leftabout">
                    <p class="about-headzone">
                        {{ $data['suppliers']['description'] }}
                    </p>
                </div>
            </div>
        </div>
        <div class="row firstcol">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <center>
                    <button type="button" class="btn btn-default btn-lg-3 supp-btn">FIND ALL SUPPLIERS HERE</button>
                </center>
            </div>
        </div>
    </div>
    <div class="static-page-spacer">
        <div class="row abtfirst">
            <div class="leftalignabout">
                <h2 class="about-headicon">
                    <i class="fas fa-users"></i>
                    Event Organizers
                </h2>
                <div class="leftabout">
                    <p class="about-headzone">
                        {{ $data['eventOrganisers']['description'] }}
                    </p>
                </div>
            </div>
            <div class="rightalignabout">
                <img class="img-fluid" src={{ $data['eventOrganisers']['filePath'] }}>
            </div>
        </div>
        <div class="row firstcol">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <center>
                    <button type="button" class="btn btn-default btn-lg-3 eventorg-btn">FIND THE BEST EVENT
                        ORGANISERS HERE</button>
                </center>
            </div>
        </div>
    </div>
    <div class="bg-about static-page-spacer">

        @include('ui_utils/our-team', ['slides' => $data['ourTeam'], 'title' => 'Our Team'])

    </div>
</div>

@else
<div class="noData">No data!!</div>
@endif

<!-- including footer -->
@include('shared/footer')
<script src="{{ url('js/static-pages.js') }}" type="text/javascript" charset="utf-8"></script>
