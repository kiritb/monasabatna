<div id="customerprofile">
    <div class="underlinetab">
        <ul class="nav nav-pills col-sm-12 mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="nav-express-deals-tab" data-toggle="pill" href="#nav-express-deals" role="tab"
                    aria-controls="pills-home" aria-selected="true" onclick="getTypeListItems('package-ex-events')">Express
                    Deals</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="nav-package-eveorgs-tab" data-toggle="pill" href="#nav-package-eveorgs" role="tab"
                    aria-controls="pills-profile" aria-selected="false" onclick="getTypeListItems('package-events')">Event
                    Organisers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="nav-package-suppliers-tab" data-toggle="pill" href="#nav-package-suppliers"
                    role="tab" aria-controls="pills-profile" aria-selected="false" onclick="getTypeListItems('package-suppliers')">Suppliers</a>
            </li>
        </ul>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-express-deals" role="tabpanel" aria-labelledby="nav-express-tab">
                <!----------- start of pages --------------------->
                <div id="packagelist-contentright">
                    <div class="rightevent">
                        <!-------------------- underline menu ------------------------------->
                        <div class="underlinetab">
                            <ul class="nav nav-pills col-sm-10 tab-data mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="express-eventorgs-tab" data-toggle="pill" href="#express-eventorgs"
                                        role="tab" aria-controls="pills-home" aria-selected="true" onclick="getTypeListItems('package-ex-events')">Event
                                        Organisers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="express-suppliers-tab" data-toggle="pill" href="#express-suppliers"
                                        role="tab" aria-controls="pills-profile" aria-selected="false" onclick="getTypeListItems('package-ex-suppliers')">Suppliers</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show m-auto w-100 active" id="express-eventorgs" role="tabpanel"
                                    aria-labelledby="pills-home-tab">
                                </div>
                                <div class="tab-pane fade m-auto w-100" id="express-suppliers" role="tabpanel"
                                    aria-labelledby="pills-profile-tab">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!------- tab close ------->
            <div class="tab-pane fade" id="nav-package-eveorgs" role="tabpanel" aria-labelledby="nav-eveorg-tab">
                <!-- Package event organisers list here -->
            </div>
            <!---------------------------eventorganisation tab---------------------------->
            <div class="tab-pane fade" id="nav-package-suppliers" role="tabpanel" aria-labelledby="nav-supp-tab">
                <!-- Package suppliers list here -->
            </div>
        </div>
    </div>
</div>
