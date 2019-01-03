@include('header')

<!------- form start-------->
<form class="form-vertical">
    <div class="container-fluid" id="commonpack-bg">
        <div class="row" id="set-bg">
            <div class="col-md-12 col-sm-12 themeform-top">

                <div class="col-md-2 col-sm-3 col-xs-3 form-group packform" id="citypack">
                    <label class="themelab">City</label>
                    <input type="text" name='datepicker' class="form-control themehome" placeholder="Jeddah">
                </div>

                <div class="col-md-2 col-sm-3 col-xs-3 form-group packform" id="datapack">
                    <label class="themelab">Date From</label>
                    <input type="text" class="form-control themehome" placeholder="16 May, 2018">
                    <span class="far fa-calendar-alt date-element-theme"></span>
                </div>

                <div class="col-md-2 col-sm-3 col-xs-3 form-group packform" id="labpack">
                    <label class="themelab">Date To</label>
                    <input type="text" class="form-control themehome" placeholder="20 May,2018" name="contact">
                    <span class="far fa-calendar-alt date-element-theme"></span>
                </div>
                <br>
                <br>
                <div class="form-group">
                    <div class="col-md-2 col-sm-3 col-xs-3 form-group packform" id="subpack">
                        <button type="submit" class="btn btn-danger sub_theme">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>
<!------- form start-------->
<!------- Tabs start-------->
<div id="customerprofile">
                  <nav>
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Venue</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Suppliers</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Event Organisers<span class="badge">  2</span></a>
                    <a class="nav-item nav-link" id="nav-events-tab" data-toggle="tab" href="#nav-events" role="tab" aria-controls="nav-events" aria-selected="false">Events</a>
                  </div>
                </nav>
                
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            
                  <div class="customerlinegreen"></div>
         
                  <div class="container-fluid" id="customer-profile-bg">
                  <div class="row custprofeven">
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <img src="svg/images/customer-profile11.jpg" alt="Mountains" class="img-fluid img-thumbnail" style="width:300px; height:300px; margin-left:-47px; margin-top:0px">
                     </div>
                     <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 cust-prof-onlinepy">
                        <div class="fullrow">
                        
                           <h3 class="cust-head"><b>La Fontaine La Plage Resort</b></h3>
                           <h4 class="go-right" style="float:right">Booking Number : MTNA0789456<br><div class="spacer_box"></div>
                              Booking Date : July 8, 2018
                           </h4>
                        </div>
                        <address><div class="icons-cust"><i class="fas fa-map-marker-alt" style="font-size:22px; color:#6cc0b9"></i></div><div class="margincst">Address:<b> 123 XYZRoad, Saudi Arabia </b><a href="#">  Show in map</a></div></address>
                        <datetime><div class="icons-custone"><i class="fas fa-clipboard-list" style='font-size:19px; color:#6cc0b9'></i></div><div class="margincst">From:<b> July 16,2018<span class="spaceone">11:30 AM</span></b>&nbsp;<a href="#">Change </a>   &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;       To:<b>July 16,2018<span class="spaceone"> 11:30 AM</span></b>&nbsp;<a href="#">Change </a></div></datetime>
                        <div class="spacer_boxthree"></div>
                        <div><div class="icons-custone"><i class="far fa-clock" style='font-size:17px; color:#6cc0b9'></i></div><div class="margincst"> 5 Days 4 Nights</div></div>
                        <div class="spacer_boxthree"></div>
                        <div class="custpack"> <span class="color-change"><b>Services :</span> Catering, Lighting and Sound</b></div>
                        <div class="spacer_boxthree"></div>
                        <div class="custpack"> <span class="color-change"><b>Total Price :</span> SAR.756</b></div>
                        
                        <div class="spacer_boxthree"></div>
                        <div class="custpack"><a href="#" class="remunderline"><b>Paid Amount : SAR 151.2</b></a></div>
                        <div class="spacer_boxthree"></div>
                        <div class="custpack"><a href="#" class="remunderline"><b>Pending Amount : SAR 604.8</b></a><span class="dynamic_red">    (To be paid at venue. 16 May,2018 before 11.30 AM)</span></div>
                        <div class="spacer_boxthree"></div>
                        <div class="redbold"><b>2 days, 20 hours, 28 min, 18 sec remaining for payment </b></div>
                        <div class="spacer_boxthree"></div>
                        <div class="blackbold"><b>Please give the code <span class="custonline-color">'MS1234'</span> at venue while making the remaining payment.</b></div>
                           <a href="#" style="float:right" class="btnonlinepy" id="myalertcust">Cancel Booking</a>

                        </div>
                     </div>
                  </div>
              
                  
                  </div>
                  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    
                     Updating ....




                  </div>
                  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                      <!--------------Event Organisers ------------------>
                              Coding in process...
                  <!------------end of events content ---------------------->    


                  </div>
                  <div class="tab-pane fade" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab">
                  <div class="customerlinegreen"></div>
                  <div class="container-fluid" id="customer-profile-bg"><!----- star of event page --------->
                  <div class="row custprofeven">
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <img src="svg/images/customer-profile11.jpg" alt="Mountains" style="width:300px; height:300px; margin-left:-47px; margin-top:0px">
                     </div>
                     <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 cust-prof-onlinepy">
                        <div class="row custprofhead">
                           <h3 class="cust-head"><b>Party Zone</b></h3>
                           <h4 class="go-rightevents" style="float:right">Booking Number : MTNA0789456<br><div class="spacer_box"></div>
                              Booking Date : July 8, 2018
                           </h4>
                        </div>
                        <div class="custevents"> <span class="color-change"><b>Event Name :</span> Food at its best</b></div>
                        <address><div class="icons-cust"><i class="fas fa-map-marker-alt" style="font-size:22px; color:#6cc0b9"></i></div><div class="margincst">Address:<b> 123 XYZRoad, Saudi Arabia </b><a href="#">  Show in map</a></div></address>
                        
                        
                        <div class="custpack"> <span class="color-change"><b>Date and Time :</span> 20 May 2018, 2:30 PM</b></div>
                        <div class="spacer_boxthree"></div>
                        <div class="custpack"> <span class="color-change"><b>Event Type :</span> Food Event</b></div>
                        
                        <div class="spacer_boxthree"></div>
                        <div class="custpack"> <span class="color-change"><b>Total People :</span> 100</b></div>
                        <div class="spacer_boxthree"></div>
                        <div class="custpack"> <span class="color-change"><b>Total Price :</span> SAR.4500</b></div>
                        
                        <div class="spacer_boxthree"></div>
                        
                           <a href="#" style="float:right" class="btnonlinepy" id="myalertcust">Cancel Booking</a>

                        </div>
                     </div>
                  </div><!------------end of events content ---------------------->
                      


                  </div>
                </div>
                </div>
<!------- tabs end-------->


<!---------- end of container ------------->


<!------- Information end-------->
<!-------------------- tab container begin ------------------------->

<!---------------------------- Thumbnail carousel start --------------------------------->

<div class="row"> </div>
@include('footer')

<!------- body end-------->

<script type="text/javascript">
    $(document).ready(function () {
        $("#datepicker").datepicker();
        $('.fa-calendar').click(function () {
            $("#datepicker").focus();
        });

        $(".nav-tabs a").click(function () {
            $(this).tab('show');
        });

        $('.nav-tabs a').on('shown.bs.tab', function (event) {
            var x = $(event.target).text(); // active tab
            var y = $(event.relatedTarget).text(); // previous tab
            $(".act span").text(x);
            $(".prev span").text(y);
        });
    });

    $(function () {
        $('a[data-toggle="tab"]').on('click', function (e) {
            window.localStorage.setItem('activeTab', $(e.target).attr('href'));
        });
        var activeTab = window.localStorage.getItem('activeTab');
        if (activeTab) {
            $('#myDetailTab a[href="' + activeTab + '"]').tab('show');
            window.localStorage.removeItem("activeTab");
        }
    });

</script>
