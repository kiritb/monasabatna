@include('shared/header')
<link rel="stylesheet" type="text/css" href="{{ url('css/list-designs.css') }}">
<!------- form start-------->

@include('shared/city-date')

<div id="customerdetails">
    <div class="container-fluid" id="upcomingListingPage">

        <!-- upcoming events will be listed here -->

    </div>
</div>

@include('shared/footer')
<script src="{{ url('js/city-date.js') }}" type="text/javascript" charset="utf-8"></script>
<script src="{{ url('js/events.js') }}" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    $(document).ready(function () {
        getTypeListItems("upcoming-events");
    });

</script>
