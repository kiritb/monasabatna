@include('shared/header')
<link rel="stylesheet" type="text/css" href="{{ url('css/venues.css') }}">
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
    <div id="upcomingListingPage">

        <!-- upcoming events will be listed here -->

    </div>
</div>
<!------- tabs end-------->

<div class="row"> </div>

@include('shared/footer')
<script src="{{ url('js/city-date.js') }}" type="text/javascript" charset="utf-8"></script>
<script src="{{ url('js/events.js') }}" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    $(document).ready(function () {
        getTypeListItems("upcoming-events");
    });

</script>
