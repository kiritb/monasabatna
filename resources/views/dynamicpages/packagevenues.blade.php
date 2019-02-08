@include('shared/header')

<!------- form start-------->

@include('shared/city-date')

<!------- form start-------->
<!------maps button and headding --------------->
<!---<div class="venueheadbtn">
    <center>
        <h3 class="venuehead"> 121 Search Results </h3>
    </center>
    <a href="#" class="showmapbtn"> Show in Maps </a>
</div> -->
<!---- maps button and heading ------------>
<!------- Tabs start-------->
<div class="container-fluid" id="customerdetails">
    <div id="customerprofile">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-express-tab" data-toggle="tab" href="#nav-express" role="tab"
                    aria-controls="nav-home" aria-selected="true">Express Deals</a>
                <a class="nav-item nav-link" id="nav-eveorg-tab" data-toggle="tab" href="#nav-eveorg" role="tab"
                    aria-controls="nav-profile" aria-selected="false">Event Organisers</a>
                <a class="nav-item nav-link" id="nav-supp-tab" data-toggle="tab" href="#nav-supp" role="tab"
                    aria-controls="nav-contact" aria-selected="false">Suppliers</a>

            </div>
        </nav>

        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-express" role="tabpanel" aria-labelledby="nav-express-tab">

                <div class="customerlinegreen"></div>
                <!----------- start of pages --------------------->
                <div class="container-fluid" id="venue-list-bg">

                    <div class="filtersidevenue">


                        <div class="list">
                            <div class="list-heading">Filter</div>
                            <div class="list-body">

                                <h4 class="venuecliphead"> Price</h4>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            SAR 80 - 150
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            SAR 151 - 200
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            SAR 201 - 250
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->

                                <h4 class="venuecliphead"> Event Type</h4>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Birthday
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Wedding
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Business Meeting
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Conference
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Corporate Event
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Other
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->

                                <a class="resetvenue" href id="Reset">Reset Filters</a>
                                <div class="filterext"></div>

                            </div>

                        </div>
                        <!------- panel end -------->

                    </div>
                    <!-------filtersidvenue ---------->

                    <!--- event right ---------------------->
                    <div class="container-fluid" id="eventlist-contentright">
                        <div class="container rightevent">
                            <div class="row evenorglist">
                                <div class="venulistsortleft"> </div>
                                <div class="content-eve-top">
                                    <div class="form-group">

                                        <select class="form-control sortvenues">
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
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                            role="tab" aria-controls="pills-home" aria-selected="true">Event Organisers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                            role="tab" aria-controls="pills-profile" aria-selected="false">Suppliers</a>
                                    </li>

                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                        aria-labelledby="pills-home-tab">
                                        <!----------------------underline menu ------------------------------->
                                        <div class="row color-bg-packcontent">
                                            <div class="content-eve">
                                                <img src="svg/images/eventlist-pic1.jpg" alt="Mountains" style="width:300px; height:273px">
                                            </div>

                                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="content-eve-right">
                                                <div class="content-optionblog">
                                                    <div class="wish-head"><b>Event Organiser Name </b></div>
                                                    <div class="spacer_boxtwo"></div>
                                                    <div class="wish-text"><span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span></div>
                                                    <div class="spacer_boxtwo"></div>

                                                    <div class="wish-text"><b><span class="go-green">Theme : </span>8</b></div>
                                                    <div class="spacer_boxtwo"></div>
                                                    <div class="wish-text"><b><span class="go-green">Event Covered :
                                                            </span>Birthday, Wedding, Business Meeting</b></div>
                                                    <div class="spacer_boxtwo"></div>
                                                    <p class="eventwish">**Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                        dolore magna aliqua.

                                                        **Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                        do eiusmod tempor incididunt ut labore et



                                                    </p>
                                                    <div class="wish-text"><b><span class="col-green">SAR:</span> 100 -
                                                            200 </b>
                                                    </div>

                                                    <button class="btn active" id="btn-eventlist" onclick="#"><b> Book
                                                            Now </b></button>
                                                </div>
                                            </div>
                                        </div>

                                        <!-----------color-bg-eventlist ------------>
                                        <div class="row color-bg-packcontentnxt">
                                            <div class="content-eve">
                                                <img src="svg/images/eventlist-pic2.jpg" alt="Mountains" style="width:300px; height:273px">
                                            </div>

                                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="content-eve-right">
                                                <div class="content-optionblog">
                                                    <div class="wish-head"><b>Event Organiser Name </b></div>
                                                    <div class="spacer_boxtwo"></div>
                                                    <div class="wish-text"><span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span></div>
                                                    <div class="spacer_boxtwo"></div>

                                                    <div class="wish-text"><b><span class="go-green">Theme : </span>8</b></div>
                                                    <div class="spacer_boxtwo"></div>
                                                    <div class="wish-text"><b><span class="go-green">Event Covered :
                                                            </span>Birthday, Wedding, Business Meeting</b></div>
                                                    <div class="spacer_boxtwo"></div>
                                                    <p class="eventwish">**Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                        dolore magna aliqua.

                                                        **Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                        do eiusmod tempor incididunt ut labore et



                                                    </p>
                                                    <div class="wish-text"><b><span class="col-green">SAR:</span> 100 -
                                                            200 </b>
                                                    </div>

                                                    <button class="btn active" id="btn-eventlist" onclick="#"><b> Book
                                                            Now </b></button>
                                                </div>
                                            </div>
                                        </div>

                                        <!-----------color-bg-eventlist ------------>

                                        <div class="row color-bg-packcontentnxt">
                                            <div class="content-eve">
                                                <img src="svg/images/eventlist-pic3.jpg" alt="Mountains" style="width:300px; height:273px">
                                            </div>

                                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="content-eve-right">
                                                <div class="content-optionblog">
                                                    <div class="wish-head"><b>Event Organiser Name </b></div>
                                                    <div class="spacer_boxtwo"></div>
                                                    <div class="wish-text"><span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span></div>
                                                    <div class="spacer_boxtwo"></div>

                                                    <div class="wish-text"><b><span class="go-green">Theme : </span>8</b></div>
                                                    <div class="spacer_boxtwo"></div>
                                                    <div class="wish-text"><b><span class="go-green">Event Covered :
                                                            </span>Birthday, Wedding, Business Meeting</b></div>
                                                    <div class="spacer_boxtwo"></div>
                                                    <p class="eventwish">**Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                        dolore magna aliqua.

                                                        **Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                        do eiusmod tempor incididunt ut labore et



                                                    </p>
                                                    <div class="wish-text"><b><span class="col-green">SAR:</span> 100 -
                                                            200 </b>
                                                    </div>

                                                    <button class="btn active" id="btn-eventlist" onclick="#"><b> Book
                                                            Now </b></button>
                                                </div>
                                            </div>
                                        </div>

                                        <!-----------color-bg-eventlist ------------>
                                        <div class="row color-bg-packcontentnxt">
                                            <div class="content-eve">
                                                <img src="svg/images/eventlist-pic4.jpg" alt="Mountains" style="width:300px; height:273px">
                                            </div>

                                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="content-eve-right">
                                                <div class="content-optionblog">
                                                    <div class="wish-head"><b>Event Organiser Name </b></div>
                                                    <div class="spacer_boxtwo"></div>
                                                    <div class="wish-text"><span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span></div>
                                                    <div class="spacer_boxtwo"></div>

                                                    <div class="wish-text"><b><span class="go-green">Theme : </span>8</b></div>
                                                    <div class="spacer_boxtwo"></div>
                                                    <div class="wish-text"><b><span class="go-green">Event Covered :
                                                            </span>Birthday, Wedding, Business Meeting</b></div>
                                                    <div class="spacer_boxtwo"></div>
                                                    <p class="eventwish">**Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                        dolore magna aliqua.

                                                        **Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                        do eiusmod tempor incididunt ut labore et



                                                    </p>
                                                    <div class="wish-text"><b><span class="col-green">SAR:</span> 100 -
                                                            200 </b>
                                                    </div>

                                                    <button class="btn active" id="btn-eventlist" onclick="#"><b> Book
                                                            Now </b></button>
                                                </div>
                                            </div>
                                        </div>

                                        <!-----------color-bg-eventlist ------------>
                                        <div class="row color-bg-packcontentnxt">
                                            <div class="content-eve">
                                                <img src="svg/images/eventlist-pic5.jpg" alt="Mountains" style="width:300px; height:273px">
                                            </div>

                                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="content-eve-right">
                                                <div class="content-optionblog">
                                                    <div class="wish-head"><b>Event Organiser Name </b></div>
                                                    <div class="spacer_boxtwo"></div>
                                                    <div class="wish-text"><span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span></div>
                                                    <div class="spacer_boxtwo"></div>

                                                    <div class="wish-text"><b><span class="go-green">Theme : </span>8</b></div>
                                                    <div class="spacer_boxtwo"></div>
                                                    <div class="wish-text"><b><span class="go-green">Event Covered :
                                                            </span>Birthday, Wedding, Business Meeting</b></div>
                                                    <div class="spacer_boxtwo"></div>
                                                    <p class="eventwish">**Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                        dolore magna aliqua.

                                                        **Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                        do eiusmod tempor incididunt ut labore et



                                                    </p>
                                                    <div class="wish-text"><b><span class="col-green">SAR:</span> 100 -
                                                            200 </b>
                                                    </div>

                                                    <button class="btn active" id="btn-eventlist" onclick="#"><b> Book
                                                            Now </b></button>
                                                </div>
                                            </div>
                                        </div>

                                        <!-----------color-bg-eventlist ------------>
                                        <div class="packpagin">

                                            <center>
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination">
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#">Next</a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </center>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                        <!----------------------underline menu ------------------------------->
                                        <div class="row color-bg-packcontent">
                                            <div class="content-eve">
                                                <img src="svg/images/supp-pic1.jpg" alt="Mountains" style="width:300px; height:273px">
                                            </div>

                                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="content-eve-right">
                                                <div class="content-optionblog">
                                                    <div class="wish-head"><b>Event Organiser Name </b></div>
                                                    <div class="spacer_boxtwo"></div>
                                                    <div class="wish-text"><span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span></div>
                                                    <div class="spacer_boxtwo"></div>

                                                    <div class="wish-text"><b><span class="go-green">Theme : </span>8</b></div>
                                                    <div class="spacer_boxtwo"></div>
                                                    <div class="wish-text"><b><span class="go-green">Event Covered :
                                                            </span>Birthday, Wedding, Business Meeting</b></div>
                                                    <div class="spacer_boxtwo"></div>
                                                    <p class="eventwish">**Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                        dolore magna aliqua.

                                                        **Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                        do eiusmod tempor incididunt ut labore et



                                                    </p>
                                                    <div class="wish-text"><b><span class="col-green">SAR:</span> 100 -
                                                            200 </b>
                                                    </div>

                                                    <button class="btn active" id="btn-eventlist" onclick="#"><b> Book
                                                            Now </b></button>
                                                </div>
                                            </div>
                                        </div>

                                        <!-----------color-bg-eventlist ------------>
                                        <div class="row color-bg-packcontentnxt">
                                            <div class="content-eve">
                                                <img src="svg/images/supp-pic2.jpg" alt="Mountains" style="width:300px; height:273px">
                                            </div>

                                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="content-eve-right">
                                                <div class="content-optionblog">
                                                    <div class="wish-head"><b>Event Organiser Name </b></div>
                                                    <div class="spacer_boxtwo"></div>
                                                    <div class="wish-text"><span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span></div>
                                                    <div class="spacer_boxtwo"></div>

                                                    <div class="wish-text"><b><span class="go-green">Theme : </span>8</b></div>
                                                    <div class="spacer_boxtwo"></div>
                                                    <div class="wish-text"><b><span class="go-green">Event Covered :
                                                            </span>Birthday, Wedding, Business Meeting</b></div>
                                                    <div class="spacer_boxtwo"></div>
                                                    <p class="eventwish">**Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                        dolore magna aliqua.

                                                        **Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                        do eiusmod tempor incididunt ut labore et



                                                    </p>
                                                    <div class="wish-text"><b><span class="col-green">SAR:</span> 100 -
                                                            200 </b>
                                                    </div>

                                                    <button class="btn active" id="btn-eventlist" onclick="#"><b> Book
                                                            Now </b></button>
                                                </div>
                                            </div>
                                        </div>

                                        <!-----------color-bg-eventlist ------------>

                                        <div class="row color-bg-packcontentnxt">
                                            <div class="content-eve">
                                                <img src="svg/images/supp-pic3.jpg" alt="Mountains" style="width:300px; height:273px">
                                            </div>

                                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="content-eve-right">
                                                <div class="content-optionblog">
                                                    <div class="wish-head"><b>Event Organiser Name </b></div>
                                                    <div class="spacer_boxtwo"></div>
                                                    <div class="wish-text"><span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span></div>
                                                    <div class="spacer_boxtwo"></div>

                                                    <div class="wish-text"><b><span class="go-green">Theme : </span>8</b></div>
                                                    <div class="spacer_boxtwo"></div>
                                                    <div class="wish-text"><b><span class="go-green">Event Covered :
                                                            </span>Birthday, Wedding, Business Meeting</b></div>
                                                    <div class="spacer_boxtwo"></div>
                                                    <p class="eventwish">**Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                        dolore magna aliqua.

                                                        **Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                        do eiusmod tempor incididunt ut labore et



                                                    </p>
                                                    <div class="wish-text"><b><span class="col-green">SAR:</span> 100 -
                                                            200 </b>
                                                    </div>

                                                    <button class="btn active" id="btn-eventlist" onclick="#"><b> Book
                                                            Now </b></button>
                                                </div>
                                            </div>
                                        </div>

                                        <!-----------color-bg-eventlist ------------>
                                        <div class="row color-bg-packcontentnxt">
                                            <div class="content-eve">
                                                <img src="svg/images/supp-pic4.jpg" alt="Mountains" style="width:300px; height:273px">
                                            </div>

                                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="content-eve-right">
                                                <div class="content-optionblog">
                                                    <div class="wish-head"><b>Event Organiser Name </b></div>
                                                    <div class="spacer_boxtwo"></div>
                                                    <div class="wish-text"><span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span></div>
                                                    <div class="spacer_boxtwo"></div>

                                                    <div class="wish-text"><b><span class="go-green">Theme : </span>8</b></div>
                                                    <div class="spacer_boxtwo"></div>
                                                    <div class="wish-text"><b><span class="go-green">Event Covered :
                                                            </span>Birthday, Wedding, Business Meeting</b></div>
                                                    <div class="spacer_boxtwo"></div>
                                                    <p class="eventwish">**Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                        dolore magna aliqua.

                                                        **Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                        do eiusmod tempor incididunt ut labore et



                                                    </p>
                                                    <div class="wish-text"><b><span class="col-green">SAR:</span> 100 -
                                                            200 </b>
                                                    </div>

                                                    <button class="btn active" id="btn-eventlist" onclick="#"><b> Book
                                                            Now </b></button>
                                                </div>
                                            </div>
                                        </div>

                                        <!-----------color-bg-eventlist ------------>
                                        <div class="row color-bg-packcontentnxt">
                                            <div class="content-eve">
                                                <img src="svg/images/supp-pic5.jpg" alt="Mountains" style="width:300px; height:273px">
                                            </div>

                                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="content-eve-right">
                                                <div class="content-optionblog">
                                                    <div class="wish-head"><b>Event Organiser Name </b></div>
                                                    <div class="spacer_boxtwo"></div>
                                                    <div class="wish-text"><span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span></div>
                                                    <div class="spacer_boxtwo"></div>

                                                    <div class="wish-text"><b><span class="go-green">Theme : </span>8</b></div>
                                                    <div class="spacer_boxtwo"></div>
                                                    <div class="wish-text"><b><span class="go-green">Event Covered :
                                                            </span>Birthday, Wedding, Business Meeting</b></div>
                                                    <div class="spacer_boxtwo"></div>
                                                    <p class="eventwish">**Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                        dolore magna aliqua.

                                                        **Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                        do eiusmod tempor incididunt ut labore et



                                                    </p>
                                                    <div class="wish-text"><b><span class="col-green">SAR:</span> 100 -
                                                            200 </b>
                                                    </div>

                                                    <button class="btn active" id="btn-eventlist" onclick="#"><b> Book
                                                            Now </b></button>
                                                </div>
                                            </div>
                                        </div>

                                        <!-----------color-bg-eventlist ------------>
                                        <div class="packpagin">

                                            <center>
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination">
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#">Next</a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </center>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!------- tab close ------->
            <div class="tab-pane fade" id="nav-eveorg" role="tabpanel" aria-labelledby="nav-eveorg-tab">
                <div class="customerlinegreen"></div>
                <div class="container-fluid" id="venue-list-bg">

                    <div class="filtersidevenue">


                        <div class="list">
                            <div class="list-heading">Filter</div>
                            <div class="list-body">

                                <h4 class="venuecliphead"> Price</h4>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            SAR 80 - 150
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            SAR 151 - 200
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            SAR 201 - 250
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->

                                <h4 class="venuecliphead"> Event Type</h4>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Birthday
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Wedding
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Business Meeting
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Conference
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Corporate Event
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Other
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->

                                <a class="resetvenue" href id="Reset">Reset Filters</a>
                                <div class="filterext"></div>

                            </div>

                        </div>
                        <!------- panel end -------->

                    </div>
                    <!-------filtersidvenue ---------->

                    <!--- event right ---------------------->
                    <div class="container-fluid" id="eventlist-contentright">
                        <div class="container rightevent">
                            <div class="row evenorglist">
                                <div class="venulistsortleft"> </div>
                                <div class="content-eve-top">
                                    <div class="form-group">

                                        <select class="form-control sortvenues">
                                            <option>Sort by: <b>Star Rating</option>
                                            <option>Price high to low</option>
                                            <option>Price low to high</option>
                                            <option>Ratio high to low</option>
                                            <option>Ratio low to high</option>
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="row color-bg-eventlist">
                                <div class="content-eve">
                                    <img src="svg/images/eventlist-pic1.jpg" alt="Mountains" style="width:300px; height:273px">
                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="content-eve-right">
                                    <div class="content-optionblog">
                                        <div class="wish-head"><b>Package Name </b></div>
                                        <div class="spacer_boxtwo"></div>
                                        <div class="wish-text"><span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span></div>
                                        <div class="spacer_boxtwo"></div>

                                        <div class="wish-text"><b><span class="go-green">Event Covered : </span>Birthday,
                                                Wedding, Business Meeting</b></div>
                                        <div class="spacer_boxtwo"></div>
                                        <p class="eventwish">**Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

                                            **Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et



                                        </p>
                                        <div class="wish-text"><b><span class="col-green">SAR:</span> 100 - 200 </b>
                                        </div>

                                        <button class="btn active" id="btn-eventlist" onclick="#"><b> Book Now </b></button>
                                    </div>
                                </div>
                            </div>

                            <!-----------color-bg-eventlist ------------>
                            <div class="row color-bg-eventlistnext">
                                <div class="content-eve">
                                    <img src="svg/images/eventlist-pic2.jpg" alt="Mountains" style="width:300px; height:273px">
                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="content-eve-right">
                                    <div class="content-optionblog">
                                        <div class="wish-head"><b>Package Name </b></div>
                                        <div class="spacer_boxtwo"></div>
                                        <div class="wish-text"><span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span></div>
                                        <div class="spacer_boxtwo"></div>

                                        <div class="wish-text"><b><span class="go-green">Event Covered : </span>Birthday,
                                                Wedding, Business Meeting</b></div>
                                        <div class="spacer_boxtwo"></div>
                                        <p class="eventwish">**Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

                                            **Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et



                                        </p>
                                        <div class="wish-text"><b><span class="col-green">SAR:</span> 100 - 200 </b>
                                        </div>

                                        <button class="btn active" id="btn-eventlist" onclick="#"><b> Book Now </b></button>
                                    </div>
                                </div>
                            </div>

                            <!-----------color-bg-eventlist ------------>

                            <div class="row color-bg-eventlistnext">
                                <div class="content-eve">
                                    <img src="svg/images/eventlist-pic3.jpg" alt="Mountains" style="width:300px; height:273px">
                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="content-eve-right">
                                    <div class="content-optionblog">
                                        <div class="wish-head"><b>Package Name </b></div>
                                        <div class="spacer_boxtwo"></div>
                                        <div class="wish-text"><span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span></div>
                                        <div class="spacer_boxtwo"></div>

                                        <div class="wish-text"><b><span class="go-green">Event Covered : </span>Birthday,
                                                Wedding, Business Meeting</b></div>
                                        <div class="spacer_boxtwo"></div>
                                        <p class="eventwish">**Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

                                            **Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et



                                        </p>
                                        <div class="wish-text"><b><span class="col-green">SAR:</span> 100 - 200 </b>
                                        </div>

                                        <button class="btn active" id="btn-eventlist" onclick="#"><b> Book Now </b></button>
                                    </div>
                                </div>
                            </div>

                            <!-----------color-bg-eventlist ------------>
                            <div class="row color-bg-eventlistnext">
                                <div class="content-eve">
                                    <img src="svg/images/eventlist-pic4.jpg" alt="Mountains" style="width:300px; height:273px">
                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="content-eve-right">
                                    <div class="content-optionblog">
                                        <div class="wish-head"><b>Package Name </b></div>
                                        <div class="spacer_boxtwo"></div>
                                        <div class="wish-text"><span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span></div>
                                        <div class="spacer_boxtwo"></div>


                                        <div class="wish-text"><b><span class="go-green">Event Covered : </span>Birthday,
                                                Wedding, Business Meeting</b></div>
                                        <div class="spacer_boxtwo"></div>
                                        <p class="eventwish">**Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

                                            **Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et



                                        </p>
                                        <div class="wish-text"><b><span class="col-green">SAR:</span> 100 - 200 </b>
                                        </div>

                                        <button class="btn active" id="btn-eventlist" onclick="#"><b> Book Now </b></button>
                                    </div>
                                </div>
                            </div>

                            <!-----------color-bg-eventlist ------------>
                            <div class="row color-bg-eventlistnext">
                                <div class="content-eve">
                                    <img src="svg/images/eventlist-pic5.jpg" alt="Mountains" style="width:300px; height:273px">
                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="content-eve-right">
                                    <div class="content-optionblog">
                                        <div class="wish-head"><b>Package Name </b></div>
                                        <div class="spacer_boxtwo"></div>
                                        <div class="wish-text"><span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span></div>
                                        <div class="spacer_boxtwo"></div>


                                        <div class="wish-text"><b><span class="go-green">Event Covered : </span>Birthday,
                                                Wedding, Business Meeting</b></div>
                                        <div class="spacer_boxtwo"></div>
                                        <p class="eventwish">**Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

                                            **Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et



                                        </p>
                                        <div class="wish-text"><b><span class="col-green">SAR:</span> 100 - 200 </b>
                                        </div>

                                        <button class="btn active" id="btn-eventlist" onclick="#"><b> Book Now </b></button>
                                    </div>
                                </div>
                            </div>

                            <!-----------color-bg-eventlist ------------>
                        </div>
                    </div>
                </div>
                <div class="supppagin">

                    <center>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </center>

                </div>


            </div>
            <!---------------------------eventorganisation tab---------------------------->
            <div class="tab-pane fade" id="nav-supp" role="tabpanel" aria-labelledby="nav-supp-tab">
                <div class="customerlinegreen"></div>
                <!--------------left ------------------>
                <div class="container-fluid" id="venue-list-bg">

                    <div class="filtersidevenue">


                        <div class="list">
                            <div class="list-heading">Filter</div>
                            <div class="list-body">
                                <h4 class="venuecliphead">Type of Supplier</h4>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Company
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Individual
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <h4 class="venuecliphead"> Price</h4>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            SAR 80 - 150
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            SAR 151 - 200
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            SAR 201 - 250
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->

                                <h4 class="venuecliphead">Event Type</h4>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Birthday
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Wedding
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Business Meeting
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Conference
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Corporate Event
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Other
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <h4 class="venuecliphead">Items</h4>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Chococlates
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Flowers
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Beauticians
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <h4 class="venuecliphead"> Event Type</h4>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Chairs And Tables
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Food
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Ice Cream
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Cake
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Food Combo
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Photographer
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <h4 class="venuecliphead"> Availability</h4>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            1 Day
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <h4 class="venuecliphead"> Facility / Amenities</h4>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            2 Days
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            3 Days
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            5 Days
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            15 Days
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            1 Month
                                        </label>
                                    </div>
                                </div>
                                <!---- formgroup ------->

                                <a class="resetvenue" href id="Reset">Reset Filters</a>
                                <div class="filterext"></div>

                            </div>

                        </div>
                        <!------- panel end -------->

                    </div>
                    <!-------filtersidvenue ---------->

                    <!--- event right ---------------------->
                    <div class="container-fluid" id="eventlist-contentright">
                        <div class="container rightevent">
                            <div class="row evenorglist">
                                <div class="venulistsortleft"> </div>
                                <div class="content-eve-top">
                                    <div class="form-group">

                                        <select class="form-control sortvenues">
                                            <option>Sort by: <b>Star Rating</option>
                                            <option>Price high to low</option>
                                            <option>Price low to high</option>
                                            <option>Ratio high to low</option>
                                            <option>Ratio low to high</option>
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="row color-bg-eventlist">
                                <div class="content-eve">
                                    <img src="svg/images/supp-pic1.jpg" alt="Mountains" style="width:300px; height:273px">
                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="content-eve-right">
                                    <div class="content-optionblog">
                                        <div class="wish-head"><b>Package Name </b></div>
                                        <div class="spacer_boxtwo"></div>
                                        <div class="wish-text"><span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span></div>
                                        <div class="spacer_boxtwo"></div>

                                        <div class="wish-text"><b><span class="go-green">Event Covered : </span>Birthday,
                                                Wedding, Business Meeting</b></div>
                                        <div class="spacer_boxtwo"></div>
                                        <p class="eventwish">**Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

                                            **Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et



                                        </p>
                                        <div class="wish-text"><b><span class="col-green">SAR:</span> 100 - 200 </b>
                                        </div>

                                        <button class="btn active" id="btn-eventlist" onclick="#"><b> Book Now </b></button>
                                    </div>
                                </div>
                            </div>

                            <!-----------color-bg-eventlist ------------>
                            <div class="row color-bg-eventlistnext">
                                <div class="content-eve">
                                    <img src="svg/images/supp-pic2.jpg" alt="Mountains" style="width:300px; height:273px">
                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="content-eve-right">
                                    <div class="content-optionblog">
                                        <div class="wish-head"><b>Package Name </b></div>
                                        <div class="spacer_boxtwo"></div>
                                        <div class="wish-text"><span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span></div>
                                        <div class="spacer_boxtwo"></div>

                                        <div class="wish-text"><b><span class="go-green">Event Covered : </span>Birthday,
                                                Wedding, Business Meeting</b></div>
                                        <div class="spacer_boxtwo"></div>
                                        <p class="eventwish">**Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

                                            **Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et



                                        </p>
                                        <div class="wish-text"><b><span class="col-green">SAR:</span> 100 - 200 </b>
                                        </div>

                                        <button class="btn active" id="btn-eventlist" onclick="#"><b> Book Now </b></button>
                                    </div>
                                </div>
                            </div>

                            <!-----------color-bg-eventlist ------------>

                            <div class="row color-bg-eventlistnext">
                                <div class="content-eve">
                                    <img src="svg/images/supp-pic3.jpg" alt="Mountains" style="width:300px; height:273px">
                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="content-eve-right">
                                    <div class="content-optionblog">
                                        <div class="wish-head"><b>Package Name </b></div>
                                        <div class="spacer_boxtwo"></div>
                                        <div class="wish-text"><span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span></div>
                                        <div class="spacer_boxtwo"></div>

                                        <div class="wish-text"><b><span class="go-green">Event Covered : </span>Birthday,
                                                Wedding, Business Meeting</b></div>
                                        <div class="spacer_boxtwo"></div>
                                        <p class="eventwish">**Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

                                            **Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et



                                        </p>
                                        <div class="wish-text"><b><span class="col-green">SAR:</span> 100 - 200 </b>
                                        </div>

                                        <button class="btn active" id="btn-eventlist" onclick="#"><b> Book Now </b></button>
                                    </div>
                                </div>
                            </div>

                            <!-----------color-bg-eventlist ------------>
                            <div class="row color-bg-eventlistnext">
                                <div class="content-eve">
                                    <img src="svg/images/supp-pic4.jpg" alt="Mountains" style="width:300px; height:273px">
                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="content-eve-right">
                                    <div class="content-optionblog">
                                        <div class="wish-head"><b>Package Name </b></div>
                                        <div class="spacer_boxtwo"></div>
                                        <div class="wish-text"><span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span></div>
                                        <div class="spacer_boxtwo"></div>


                                        <div class="wish-text"><b><span class="go-green">Event Covered : </span>Birthday,
                                                Wedding, Business Meeting</b></div>
                                        <div class="spacer_boxtwo"></div>
                                        <p class="eventwish">**Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

                                            **Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et



                                        </p>
                                        <div class="wish-text"><b><span class="col-green">SAR:</span> 100 - 200 </b>
                                        </div>

                                        <button class="btn active" id="btn-eventlist" onclick="#"><b> Book Now </b></button>
                                    </div>
                                </div>
                            </div>

                            <!-----------color-bg-eventlist ------------>
                            <div class="row color-bg-eventlistnext">
                                <div class="content-eve">
                                    <img src="svg/images/supp-pic5.jpg" alt="Mountains" style="width:300px; height:273px">
                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="content-eve-right">
                                    <div class="content-optionblog">
                                        <div class="wish-head"><b>package Name </b></div>
                                        <div class="spacer_boxtwo"></div>
                                        <div class="wish-text"><span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span></div>
                                        <div class="spacer_boxtwo"></div>


                                        <div class="wish-text"><b><span class="go-green">Event Covered : </span>Birthday,
                                                Wedding, Business Meeting</b></div>
                                        <div class="spacer_boxtwo"></div>
                                        <p class="eventwish">**Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

                                            **Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et



                                        </p>
                                        <div class="wish-text"><b><span class="col-green">SAR:</span> 100 - 200 </b>
                                        </div>

                                        <button class="btn active" id="btn-eventlist" onclick="#"><b> Book Now </b></button>
                                    </div>
                                </div>
                            </div>

                            <!-----------color-bg-eventlist ------------>
                        </div>
                    </div>
                </div>
                <div class="supppagin">

                    <center>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </center>

                </div>




                <!------upcoming-contentright ----------->

                <!------------ container-fluid ------------------------------>
                <!------------end of events content ---------------------->
            </div>
            <div class="tab-pane fade" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab">
                <div class="customerlinegreen"></div>
                <div class="container-fluid" id="customer-profile-bg">
                    <!----- star of event page --------->
                    upcoming soon/////
                    <!------------end of events content ---------------------->



                </div>
            </div>
        </div>
    </div>
</div>
@include('shared/footer')
<script src="{{ url('js/city-date.js') }}" type="text/javascript" charset="utf-8"></script>
