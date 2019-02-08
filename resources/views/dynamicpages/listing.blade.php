@include('shared/header')
<link rel="stylesheet" type="text/css" href="{{ url('css/venues.css') }}">
<!------- form start-------->

@include('shared/city-date')

<!------- form start-------->
<!------maps button and headding --------------->
<div class="venueheadbtn text-center">
    <h3 class="venuehead"><span id="totalResults"></span> Search Results </h3>
    <a href="#" class="showmapbtn"> Show in Maps </a>
</div>
<!---- maps button and heading ------------>
<!------- Tabs start-------->
<div class="container-fluid" id="customerdetails">
    <div id="customerprofile">
        <nav>
            <div class="nav nav-tabs d-flex" id="nav-tab" role="tablist">
                <a class="nav-item nav-link list-nav-tabs active" id="nav-venues-tab" data-toggle="tab"
                    href="#nav-venues" role="tab" aria-controls="nav-home" aria-selected="true">Venue</a>
                <a class="nav-item nav-link list-nav-tabs" id="nav-suppliers-tab" data-toggle="tab"
                    href="#nav-suppliers" role="tab" aria-controls="nav-profile" aria-selected="false">Suppliers</a>
                <a class="nav-item nav-link list-nav-tabs" id="nav-events-tab" data-toggle="tab" href="#nav-events"
                    role="tab" aria-controls="nav-contact" aria-selected="false">Event Organisers</a>
                <a class="nav-item nav-link list-nav-tabs" id="nav-packages-tab" data-toggle="tab" href="#nav-packages"
                    role="tab" aria-controls="nav-events" aria-selected="false">Packages</a>
            </div>
        </nav>

        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-venues" role="tabpanel" aria-labelledby="nav-venues-tab">
                <!-- Venues list with filters sidebar here -->
            </div>
            <div class="tab-pane fade" id="nav-suppliers" role="tabpanel" aria-labelledby="nav-suppliers-tab">
                <!-- Suppliers list with filters sidebar here -->
            </div>
            <div class="tab-pane fade" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab">
                <!-- Event org list with filters sidebar here -->
            </div>
            <div class="tab-pane fade" id="nav-packages" role="tabpanel" aria-labelledby="nav-packages-tab">
                <!-- Package list with filters sidebar here -->
                <div class="container-fluid" id="customerdetails">
                    <div id="customerprofile">
                        <nav>
                            <div class="nav nav-tabs d-flex" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link list-nav-tabs active" id="nav-express-deals-tab"
                                    data-toggle="tab" href="#nav-express-deals" role="tab" aria-controls="nav-home"
                                    aria-selected="true">Express Deals</a>
                                <a class="nav-item nav-link list-nav-tabs" id="nav-package-eveorgs-tab"
                                    data-toggle="tab" href="#nav-package-eveorgs" role="tab" aria-controls="nav-profile"
                                    aria-selected="false">Event Organisers</a>
                                <a class="nav-item nav-link list-nav-tabs" id="nav-package-suppliers-tab"
                                    data-toggle="tab" href="#nav-package-suppliers" role="tab"
                                    aria-controls="nav-contact" aria-selected="false">Suppliers</a>
                            </div>
                        </nav>

                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-express-deals" role="tabpanel"
                                aria-labelledby="nav-express-tab">
                                <div class="customerlinegreen"></div>
                                <!----------- start of pages --------------------->
                                <div class="container-fluid">
                                    <!--- event right ---------------------->
                                    <div class="container-fluid" id="packagelist-contentright">
                                        <div class="row rightevent">
                                            <div class="row evenorglist">
                                                <div class="venulistsortleft"> </div>
                                                <div class="content-expsort-top">
                                                    <div class="form-group">

                                                        <select class="form-control sortpackagelist">
                                                            <option>Sort by: <b>Star Rating</option>
                                                            <option>Price high to low</option>
                                                            <option>Price low to high</option>
                                                            <option>Ratio high to low</option>
                                                            <option>Ratio low to high</option>
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-------------------- underline menu ------------------------------->
                                            <div class="container-fluid" id="underlinetab">
                                                <ul class="nav nav-pills col-sm-10 tab-data mb-3" id="pills-tab"
                                                    role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="express-eventorgs-tab"
                                                            data-toggle="pill" href="#express-eventorgs" role="tab"
                                                            aria-controls="pills-home" aria-selected="true">Event
                                                            Organisers</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="express-suppliers-tab"
                                                            data-toggle="pill" href="#express-suppliers" role="tab"
                                                            aria-controls="pills-profile"
                                                            aria-selected="false">Suppliers</a>
                                                    </li>

                                                </ul>
                                                <div class="tab-content" id="pills-tabContent">
                                                    <div class="row tab-pane fade show active" id="express-eventorgs"
                                                        role="tabpanel" aria-labelledby="pills-home-tab">

                                                    </div>
                                                    <div class="row tab-pane fade" id="express-suppliers"
                                                        role="tabpanel" aria-labelledby="pills-profile-tab">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!------- tab close ------->
                            <div class="tab-pane fade" id="nav-package-eveorgs" role="tabpanel"
                                aria-labelledby="nav-eveorg-tab">
                                <!-- Package event organisers list here -->
                            </div>
                            <!---------------------------eventorganisation tab---------------------------->
                            <div class="tab-pane fade" id="nav-package-suppliers" role="tabpanel"
                                aria-labelledby="nav-supp-tab">
                                <!-- Package suppliers list here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!------- tabs end-------->

<div class="row"> </div>

@include('shared/footer')
<script src="{{ url('js/city-date.js') }}" type="text/javascript" charset="utf-8"></script>
<script src="{{ url('js/events.js') }}" type="text/javascript" charset="utf-8"></script>