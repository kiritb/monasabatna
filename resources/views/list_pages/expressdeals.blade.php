@include('shared/header')

<!------- form start-------->

@include('shared/city-date')

<!---- maps button and heading ------------>
<!------- Tabs start-------->
<div class="container-fluid" id="customerdetails">
    <h2 class="exphead"> Express Deals </h2>
    <!----------- start of pages --------------------->

    <!--- event right ---------------------->
    <div class="container-fluid" id="packagelist-contentright">
        <div class="row rightevent">
            <div class="form-group float-right container-fluid">
                <select class="form-control sortpackagelist">
                    <option>Sort by: <b>Star Rating</option>
                    <option>Price high to low</option>
                    <option>Price low to high</option>
                    <option>Ratio high to low</option>
                    <option>Ratio low to high</option>
                </select>
            </div>
            <!-------------------- underline menu ------------------------------->
            <div class="container-fluid underlinetab">
                <ul class="nav nav-pills col-sm-10 tab-data mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="express-venues-tab" data-toggle="pill" href="#express-venues"
                            role="tab" aria-controls="express-venues" aria-selected="true" onclick="getTypeListItems('express-venues')">Venues</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="express-events-tab" data-toggle="pill" href="#express-events" role="tab"
                            aria-controls="express-events" aria-selected="false" onclick="getTypeListItems('express-events')">Event
                            Organisers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="express-suppliers-tab" data-toggle="pill" href="#express-suppliers"
                            role="tab" aria-controls="express-suppliers" aria-selected="false" onclick="getTypeListItems('express-suppliers')">Suppliers</a>
                    </li>

                </ul>
                <div class="tab-content" id="express-deals-tabContent">
                    <div class="tab-pane show active" id="express-venues" role="tabpanel" aria-labelledby="pills-home-tab">
                        <!-- Express venues loads here -->
                    </div>
                    <div class="tab-pane fade" id="express-events" role="tabpanel" aria-labelledby="pills-home-tab">
                        <!-- Express event organisers loads here -->
                    </div>
                    <div class="tab-pane fade" id="express-suppliers" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <!-- Express suppliers loads here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@include('shared/footer')
<script src="{{ url('js/city-date.js') }}" type="text/javascript" charset="utf-8"></script>
<script src="{{ url('js/events.js') }}" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    $(document).ready(function () {
        getTypeListItems('express-venues');
    });

</script>
