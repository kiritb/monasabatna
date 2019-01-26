@include('header')
  

      <!------- body start-------->
      <div class="maindivider"> </div>
<!----
      <nav class="twoprofile">
    <div class="float-right">
        <a href class="profilehead"><img src="svg/images/photohead.png" style="margin-top:12px;"><span class="badge" id="headbadge">2</span></a>
        <div class="headdropdown"><form>
                  <select name="cars">
                     <option value="volvo">Volvo</option>
                     <option value="saab">Saab</option>
                     <option value="fiat">Fiat</option>
                     <option value="audi">Audi</option>
                  </select>
                  </form></div>
    </div>
</nav>
------>
      <div class="container-fluid" id="customerdetails">
         <!------- collapse navbar start-------->
         
  
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
                  <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <img src="svg/images/customer-profile11.jpg" alt="Mountains" style="width:300px; height:300px; margin-left:-62px; margin-top:0px">
                     </div>
                     <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 cust-prof-onlinepy">
                        <div class="row custprofhead">
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
                    update
                  </div>
                  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                      delete
                  </div>
                  <div class="tab-pane fade" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab">
                      calling func
                  </div>
                </div>
                </div>
  
  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"> <!---- customer_profile_paying_cash ------>
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
                  <div class="row fullvenue">
                     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 picheight">
                        <img src="svg/images/customer-profile11.jpg" alt="Mountains" style="width:300px; height:300px; margin-left:-66px; margin-top:-19px">
                     </div>
                     <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 cust-prof-text">
                        <div class="row custprofhead">
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
                        
                           <a href="#" style="float:right" class="btncancelbyuser" id="myalertcust"><b>Cancelled by you</b></a>

                        </div>
                     </div>
                  </div>
                  
                  
                  </div>
                  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    update
                  </div>
                  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                      delete
                  </div>
                  <div class="tab-pane fade" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab">
                      calling func
                  </div>
                </div>
                </div>
                           
  
  </div>
 
</div>
		 </div>
         <!------- collapse navbar end-------->
         <label> </label>
         <!--------- tab container begin ------------------------->

         <!----------------------- tab container end -------------------->




        		 
        <!------------------------------ Add to express ----------------------------------->
        <div class="modal fade" id="reviewcust">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <!-- Modal Header -->
                     <div class="modal-header">
                        <center>
                        <h3 class="modal-title">Alert</h3>
                        <center>
                     </div>
                     <!-- Modal body -->
                     <div class="row">
                        <h6 style="text-align:center"> Are you sure you want to cancel your booking?</h6>
                     </div>
                     <!-- Modal footer -->
                     <div class="modal-footer">
                        <button type="button" class="btn btn-lg-12 custom-button-cancelagain" data-dismiss="modal">No</button>
						 <button type="button" class="btn btn-lg-12 custom-button-cancelagain" data-dismiss="modal">Yes</button>
                     </div>
                  </div>
               </div>
            </div>
            <!------------------------------ Add to Express ----------------------------------->
</div>

</div>


@include('footer')
      <!------------------------------------ login page end------------------------------------------>
      <!------- body end-------->

      <!------- Footer end-------->
      <script><!------inner page-Tabs-------->
   $(document).ready(function(){
 $("#myalertcust").click(function(){
   $("#reviewcust").modal();
 });
 $(".nav-tabs a").click(function(){
           $(this).tab('show');
         });
   });
</script>

      <script>
         $(document).ready(function(){
             $(".nav-tabs a").click(function(){
                 $(this).tab('show');
             });
             $('.nav-tabs a').on('shown.bs.tab', function(event){
                 var x = $(event.target).text();         // active tab
                 var y = $(event.relatedTarget).text();  // previous tab
                 $(".act span").text(x);
                 $(".prev span").text(y);
             });
         });
      </script>
      <script>
         (function(){
           $('.carousel-showmanymoveone .item').each(function(){
             var itemToClone = $(this);

             for (var i=1;i<6;i++) {
               itemToClone = itemToClone.next();

               // wrap around if at end of item collection
               if (!itemToClone.length) {
                 itemToClone = $(this).siblings(':first');
               }

               // grab item, clone, add marker class, add to collection
               itemToClone.children(':first-child').clone()
                 .addClass("cloneditem-"+(i))
                 .appendTo($(this));
             }
           });
         }());

      </script>
