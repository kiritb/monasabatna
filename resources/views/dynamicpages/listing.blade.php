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
                <a class="nav-item nav-link list-nav-tabs active" id="nav-venues-tab" data-toggle="tab" href="#nav-venues"
                    role="tab" aria-controls="nav-home" aria-selected="true">Venue</a>
                <a class="nav-item nav-link list-nav-tabs" id="nav-suppliers-tab" data-toggle="tab" href="#nav-suppliers"
                    role="tab" aria-controls="nav-profile" aria-selected="false">Suppliers</a>
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
            </div>
        </div>
    </div>
</div>
<!------- tabs end-------->

<div class="row"> </div>

@include('shared/footer')
<script src="{{ url('js/city-date.js') }}" type="text/javascript" charset="utf-8"></script>
<script src="{{ url('js/events.js') }}" type="text/javascript" charset="utf-8"></script>
