@include('shared/header')
<link rel="stylesheet" type="text/css" href="{{ url('css/list-designs.css') }}">
<!------- form start-------->

@include('shared/city-date')

<!------- form start-------->
<!------maps button and headding --------------->
<div class="venueheadbtn">
    <div class="venuehead text-center">
        <span id="totalResults"></span>
        Search Results
        <a href="#" class="btn btn-secondary showmapbtn">Show in Maps</a>
    </div>
</div>
<!---- maps button and heading ------------>
<!------- Tabs start-------->
<div class="container-fluid" id="customerdetails">
    <div id="listingPage">
        <nav>
            <div class="nav nav-tabs d-flex" id="nav-tab" role="tablist">
                <a class="nav-item nav-link list-nav-tabs active" id="nav-venues-tab" data-toggle="tab" href="#nav-venues"
                    role="tab" aria-controls="nav-home" aria-selected="true" onclick="getTypeListItems('venues')">Venue</a>
                <a class="nav-item nav-link list-nav-tabs" id="nav-suppliers-tab" data-toggle="tab" href="#nav-suppliers"
                    role="tab" aria-controls="nav-profile" aria-selected="false" onclick="getTypeListItems('suppliers')">Suppliers</a>
                <a class="nav-item nav-link list-nav-tabs" id="nav-events-tab" data-toggle="tab" href="#nav-events"
                    role="tab" aria-controls="nav-contact" aria-selected="false" onclick="getTypeListItems('events')">Event
                    Organisers</a>
                <a class="nav-item nav-link list-nav-tabs" id="nav-packages-tab" data-toggle="tab" href="#nav-packages"
                    role="tab" aria-controls="nav-events" aria-selected="false" onclick="getTypeListItems('package-ex-events')">Packages</a>
            </div>
        </nav>

        <div class="tab-content" id="nav-tabContent">
            <div class="container-fluid tab-pane fade show active" id="nav-venues" role="tabpanel" aria-labelledby="nav-venues-tab">
                <!-- Venues list with filters sidebar here -->
            </div>
            <div class="container-fluid tab-pane fade" id="nav-suppliers" role="tabpanel" aria-labelledby="nav-suppliers-tab">
                <!-- Suppliers list with filters sidebar here -->
            </div>
            <div class="container-fluid tab-pane fade" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab">
                <!-- Event org list with filters sidebar here -->
            </div>
            <div class="container-fluid tab-pane fade" id="nav-packages" role="tabpanel" aria-labelledby="nav-packages-tab">
                <!-- Package list with filters sidebar here -->
                <div id="packages-holder">
                    @include('list_pages.packages-holder')
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
<script type="text/javascript">
    $(document).ready(function () {
        getTypeListItems("venues");

        let pageIs = findGetParameter("pageis");
        if (pageIs == 'suppliers') {
            $("#nav-suppliers-tab").trigger("click");
        } else if (pageIs == "events") {
            $("#nav-events-tab").trigger("click");
        } else if (pageIs == "venues") {
            $("#nav-venues-tab").trigger("click");
        } else if (pageIs == "packages") {
            $("#nav-packages-tab").trigger("click");
        }

        window.history.replaceState(null, null, window.location.pathname);
    });

</script>
