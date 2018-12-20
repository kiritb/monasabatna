@include('header')
   <body>
     
      <!------- body start--------> 
      <!------- form start-------->
      <div class="container-fluid" id="set-bg">
         <div class="form-vertical">
            <div class="form-group" id="center-done">
               <br>
               <br>
               <div class="col-sm-3">
                  <label class="control-label col-sm-1" for="cityname">City:</label>
                  <input type="text" class="form-control text-high" placeholder="City" name="contact">
               </div>
               <div class="col-sm-3">
                  <label class="control-label col-lg-6 col-md-9 col-sm-12" for="cityname">Date from:</label>
                  <select class = "form-control">
                     <option>+966</option>
                     <option>+967</option>
                     <option>+968</option>
                     <option>+954</option>
                     <option>+969</option>
                  </select>
               </div>
               <div class="col-sm-3">
                  <label class="control-label col-lg-6 col-md-9 col-sm-12" for="cityname">Date to:</label>
                  <select class = "form-control">
                     <option>+966</option>
                     <option>+967</option>
                     <option>+968</option>
                     <option>+954</option>
                     <option>+969</option>
                  </select>
               </div>
               <br>
               <div class="col-sm-1">
                  <button type="submit" class="btn btn-danger" >Submit</button>   
               </div>
            </div>
         </div>
      </div>
      <!------- form end-------->
      <!-------------- Tab start for 004_04_4 package event organiser ----------------------->  
      <br>		 
      <div class="container">
         <ul class="nav nav-tabs nav-justified" id="tab-total">
            <li class="active" id="tab-size"><a href="#home" id="tab-work_organiser">Express Deals</a></li>
            <li id="tab-size"><a href="#menu1" id="tab-work_organiser">Event Organisers</a></li>
            <li id="tab-size"><a href="#menu2" id="tab-work_organiser">Venue</a></li>
            <li id="tab-size"><a href="#menu3" id="tab-work_organiser">Suppliers</a></li>
         </ul>
         <div class="tab-content bg-given">
            <div id="home" class="tab-pane fade in active">
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna 
                  aliqua. Ut enim ad minim veniam 
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna 
                  aliqua. Ut enim ad minim veniam
               </p>
            </div>
            <div id="menu1" class="tab-pane fade">
               <div class="container content-whole-col">
                  <div class="row">

                           <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" id="left-filter">
                              <form class="controls" id="Filters">
                                 <!-- We can add an unlimited number of "filter groups" using the following format: -->
                                 <div class="form-filter-eve"><label class="control-label">Filter</label></div>
                                 <fieldset>
                                    <h4>price</h4>
                                    <div class="checkbox">
                                       <input type="checkbox" value=".square"/>
                                       <label>SAR 80-100</label>
                                    </div>
                                    <div class="checkbox">
                                       <input type="checkbox" value=".circle"/>
                                       <label>SAR 100-150</label>
                                    </div>
                                    <div class="checkbox">
                                       <input type="checkbox" value=".triangle"/>
                                       <label>SAR 150-200</label>
                                    </div>
                                    <h4>Event Type</h4>
                                    <div class="checkbox">
                                       <input type="checkbox" value=".white"/>
                                       <label>birthday</label>
                                    </div>
                                    <div class="checkbox">
                                       <input type="checkbox" value=".green"/>
                                       <label>Wedding</label>
                                    </div>
                                    <div class="checkbox">
                                       <input type="checkbox" value=".blue"/>
                                       <label>Business Meeting</label>
                                    </div>
                                    <div class="checkbox">
                                       <input type="checkbox" value=".sm"/>
                                       <label>Conference</label>
                                    </div>
                                    <div class="checkbox">
                                       <input type="checkbox" value=".lrg"/>
                                       <label>Corporate Event</label>
                                    </div>
                                    <div class="checkbox">
                                       <input type="checkbox" value=".lrg"/>
                                       <label>Other</label>
                                    </div>
                                 </fieldset>
                                 <a href id="Reset">Clear Filters</a>
                              </form>
                           </div>
               
                        
                           <div class="col-lg-9 col-md-9 col-sm-6 col-xs-6">
							<div class="row">
                              <div class="content-eve-top">
                                 <div class="form-group">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                       <select class = "form-control">
                                          <option>Sort by: Star Rating</option>
                                          <option>+967</option>
                                          <option>+968</option>
                                          <option>+954</option>
                                          <option>+969</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row color-bg-eve">
                              <div class="content-eve">
                                 <img src="svg/images/portfolio-img1.jpg" alt="Mountains" style="width:300px; height:200px margin-left:10px">
                              </div>
                              <div id="content-eve-right">
                                 <div class="content-option">
                                    <h5><strong>Event Organiser Name</strong><br>
                                       <span class="fa fa-star checked"></span>
                                       <span class="fa fa-star checked"></span>
                                       <span class="fa fa-star checked"></span>
                                       <span class="fa fa-star checked"></span>
                                       <span class="fa fa-star"></span>
                                       <span class="fa fa-star"></span>
                                    </h5>
                                    <b><span class="col-green">Event Type:</span> Birthday, Wedding, Business Meeting</b>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br>
                                       incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis <br>
                                       nostrud exercitation ullamco laboris nisi ut aliquip.Lorem ipsum dolor sit amet,<br>
                                       consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et<br>
                                       dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation <br>
                                       ullamco laboris nisi ut aliquip 
                                    </p>
                                    <p class="rate-eve"><span class="col-green">SAR:</span> <b>100 Days</b></p>
                                    <button class="btn active" id="btn-port" onclick="filterSelection('all')"> Book Now</button>
                                 </div>
                              </div>
                           </div>
                           <div class="row color-bg-eve">
                              <div class="content-eve">
                                 <img src="svg/images/portfolio-img1.jpg" alt="Mountains" style="width:300px; height:200px margin-left:10px">
                              </div>
                              <div id="content-eve-right">
                                 <div class="content-option">
                                    <h5><strong>Event Organiser Name</strong><br>
                                       <span class="fa fa-star checked"></span>
                                       <span class="fa fa-star checked"></span>
                                       <span class="fa fa-star checked"></span>
                                       <span class="fa fa-star checked"></span>
                                       <span class="fa fa-star"></span>
                                       <span class="fa fa-star"></span>
                                    </h5>
                                    <b><span class="col-green">Event Type:</span> Birthday, Wedding, Business Meeting</b>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br>
                                       incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis <br>
                                       nostrud exercitation ullamco laboris nisi ut aliquip.Lorem ipsum dolor sit amet,<br>
                                       consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et<br>
                                       dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation <br>
                                       ullamco laboris nisi ut aliquip 
                                    </p>
                                    <p class="rate-eve"><span class="col-green">SAR:</span> <b>100 Days</b></p>
                                    <button class="btn active" id="btn-port" onclick="filterSelection('all')"> Book Now</button>
                                 </div>
                              </div>
                           </div>
                           <div class="row color-bg-eve">
                              <div class="content-eve">
                                 <img src="svg/images/portfolio-img1.jpg" alt="Mountains" style="width:300px; height:200px margin-left:10px">
                              </div>
                              <div id="content-eve-right">
                                 <div class="content-option">
                                    <h5><strong>Event Organiser Name</strong><br>
                                       <span class="fa fa-star checked"></span>
                                       <span class="fa fa-star checked"></span>
                                       <span class="fa fa-star checked"></span>
                                       <span class="fa fa-star checked"></span>
                                       <span class="fa fa-star"></span>
                                       <span class="fa fa-star"></span>
                                    </h5>
                                    <b><span class="col-green">Event Type:</span> Birthday, Wedding, Business Meeting</b>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br>
                                       incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis <br>
                                       nostrud exercitation ullamco laboris nisi ut aliquip.Lorem ipsum dolor sit amet,<br>
                                       consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et<br>
                                       dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation <br>
                                       ullamco laboris nisi ut aliquip 
                                    </p>
                                    <p class="rate-eve"><span class="col-green">SAR:</span> <b>100 Days</b></p>
                                    <button class="btn active" id="btn-port" onclick="filterSelection('all')"> Book Now</button>
                                 </div>
                              </div>
                           </div>
                           <div class="row color-bg-eve">
                              <div class="content-eve">
                                 <img src="svg/images/portfolio-img1.jpg" alt="Mountains" style="width:300px; height:200px margin-left:10px">
                              </div>
                              <div id="content-eve-right">
                                 <div class="content-option">
                                    <h5><strong>Event Organiser Name</strong><br>
                                       <span class="fa fa-star checked"></span>
                                       <span class="fa fa-star checked"></span>
                                       <span class="fa fa-star checked"></span>
                                       <span class="fa fa-star checked"></span>
                                       <span class="fa fa-star"></span>
                                       <span class="fa fa-star"></span>
                                    </h5>
                                    <b><span class="col-green">Event Type:</span> Birthday, Wedding, Business Meeting</b>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br>
                                       incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis <br>
                                       nostrud exercitation ullamco laboris nisi ut aliquip.Lorem ipsum dolor sit amet,<br>
                                       consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et<br>
                                       dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation <br>
                                       ullamco laboris nisi ut aliquip 
                                    </p>
                                    <p class="rate-eve"><span class="col-green">SAR:</span> <b>100 Days</b></p>
                                    <button class="btn active" id="btn-port" onclick="filterSelection('all')"> Book Now</button>
                                 </div>
                              </div>
                           </div>
                           <div class="row color-bg-eve">
                              <nav aria-label="Page navigation example">
                                 <ul class="pagination justify-content-end">
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
                           </div>
                       
                        <!---------------- static class -------------->
                
                     <!-----------wrapper---------------->	  
                  </div>
               </div>
            </div>
			</div>
            <div id="menu2" class="tab-pane fade">
               <div class="container content-whole-col">
                  <div class="row">
                     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" id="left-filter">
                        <form class="controls" id="Filters">
                           <!-- We can add an unlimited number of "filter groups" using the following format: -->
                           <div class="form-filter-eve"><label class="control-label">Filter</label></div>
                           <fieldset>
                              <div class="checkbox">
                                 <input type="checkbox" value=".square"/>
                                 <label>
                                    Venues with conference Hall</label>
                              </div>
                              <h4>price</h4>
                              <div class="checkbox">
                              <input type="checkbox" value=".square"/>
                              <label>SAR 80-100</label>
                              </div>
                              <div class="checkbox">
                                 <input type="checkbox" value=".circle"/>
                                 <label>SAR 100-150</label>
                              </div>
                              <div class="checkbox">
                                 <input type="checkbox" value=".triangle"/>
                                 <label>SAR 150-200</label>
                              </div>
                              <h4>Venue Capacity</h4>
                              <div class="text-num">
                                 <input type="text"/>
                                 <label>Min.</label>
                                 <input type="text"/>
                                 <label>Max.</label>
                              </div>
                              <h4>Event Type</h4>
                              <div class="checkbox">
                                 <input type="checkbox" value=".white"/>
                                 <label>birthday</label>
                              </div>
                              <div class="checkbox">
                                 <input type="checkbox" value=".green"/>
                                 <label>Wedding</label>
                              </div>
                              <div class="checkbox">
                                 <input type="checkbox" value=".blue"/>
                                 <label>Business Meeting</label>
                              </div>
                              <div class="checkbox">
                                 <input type="checkbox" value=".sm"/>
                                 <label>Conference</label>
                              </div>
                              <div class="checkbox">
                                 <input type="checkbox" value=".lrg"/>
                                 <label>Corporate Event</label>
                              </div>
                              <div class="checkbox">
                                 <input type="checkbox" value=".lrg"/>
                                 <label>Other</label>
                              </div>
                              <h4>Venue Type</h4>
                              <div class="checkbox">
                                 <input type="checkbox" value=".white"/>
                                 <label>birthday</label>
                              </div>
                              <div class="checkbox">
                                 <input type="checkbox" value=".green"/>
                                 <label>Wedding</label>
                              </div>
                              <div class="checkbox">
                                 <input type="checkbox" value=".blue"/>
                                 <label>Business Meeting</label>
                              </div>
                              <div class="checkbox">
                                 <input type="checkbox" value=".sm"/>
                                 <label>Conference</label>
                              </div>
                              <div class="checkbox">
                                 <input type="checkbox" value=".lrg"/>
                                 <label>Corporate Event</label>
                              </div>
                              <div class="checkbox">
                                 <input type="checkbox" value=".lrg"/>
                                 <label>Other</label>
                              </div>
                              <h4>Facility / Amenities</h4>
                              <div class="checkbox">
                                 <input type="checkbox" value=".white"/>
                                 <label>birthday</label>
                              </div>
                              <div class="checkbox">
                                 <input type="checkbox" value=".green"/>
                                 <label>Wedding</label>
                              </div>
                              <div class="checkbox">
                                 <input type="checkbox" value=".blue"/>
                                 <label>Business Meeting</label>
                              </div>
                              <div class="checkbox">
                                 <input type="checkbox" value=".sm"/>
                                 <label>Conference</label>
                              </div>
                              <div class="checkbox">
                                 <input type="checkbox" value=".white"/>
                                 <label>birthday</label>
                              </div>
                              <div class="checkbox">
                                 <input type="checkbox" value=".green"/>
                                 <label>Wedding</label>
                              </div>
                              <div class="checkbox">
                                 <input type="checkbox" value=".blue"/>
                                 <label>Business Meeting</label>
                              </div>
                              <div class="checkbox">
                                 <input type="checkbox" value=".sm"/>
                                 <label>Conference</label>
                              </div>
                              <h4>Room Type</h4>
                              <div class="checkbox">
                                 <input type="checkbox" value=".white"/>
                                 <label>birthday</label>
                              </div>
                              <div class="checkbox">
                                 <input type="checkbox" value=".green"/>
                                 <label>Wedding</label>
                              </div>
                           </fieldset>
                           <a href id="Reset">Clear Filters</a>
                        </form>
                     </div>
                     <div class="col-lg-9 col-md-9 col-sm-6 col-xs-6">
                        <div class="row">
                           <div class="content-eve-top">
                              <div class="form-group">
                                 <div class="col-lg-6 col-md-6 col-sm-6">
                                    <select class = "form-control">
                                       <option>Sort by: Star Rating</option>
                                       <option>+967</option>
                                       <option>+968</option>
                                       <option>+954</option>
                                       <option>+969</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="container">
                        <div class="row">
                           <div class="col lg-9 col-md-9 col-sm-6 col-xs-6">
                              <!-- Nav tabs -->
                              <div class="card">
                                 <ul class="nav nav-tabs venues-tab" role="tablist">
                                    <li role="presentation"  class="active"><a href="#all" class="venues_add" aria-controls="all" role="tab" data-toggle="tab">All</a></li>
                                    <li role="presentation" class="venues_add"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Star Hotels</a></li>
                                    <li role="presentation" class="venues_add"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Restaurants</a></li>
                                    <li role="presentation" class="venues_add"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Resorts</a></li>
                                    <li role="presentation" class="venues_add"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Party Hall</a></li>
                                 </ul>
                                 <!-- Tab panes -->
                                 <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                       <div class="row color-bg-eve">
                                          <div class="content-eve">
                                             <img src="svg/images/venues-pic1.jpg" alt="Mountains" style="width:300px; height:200px margin-left:10px">
                                          </div>
                                          <div id="content-eve-right">
                                             <div class="content-option">
                                                <h5><strong>Event Organiser Name</strong><br>
                                                   <span class="fa fa-star checked"></span>
                                                   <span class="fa fa-star checked"></span>
                                                   <span class="fa fa-star checked"></span>
                                                   <span class="fa fa-star checked"></span>
                                                   <span class="fa fa-star"></span>
                                                   <span class="fa fa-star"></span>
                                                </h5>
                                                <b>
                                                   <address>
                                                   <i class="material-icons" style="font-size:20px;color:#6cc0b9">place</i> 123 XYZ Road, Saudi Arabia
                                                   <address>
                                                </b>
                                                <b><span class="col-green">Amenities:</span> Gym, Swiming phool</b><br>
                                                <b><span class="col-green">Event Type:</span> Birthday, Wedding, Business Meeting</b>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br>
                                                   incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis <br>
                                                   nostrud exercitation ullamco laboris nisi ut aliquip.Lorem ipsum dolor sit amet,<br>
                                                   consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et<br>
                                                   dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation <br>
                                                   ullamco laboris nisi ut aliquip 
                                                </p>
                                                <p class="rate-eve"><span class="col-green">SAR:</span> <b>100 Days</b> <i class='fas fa-users' style='font-size:20px;color:#6cc0b9'></i> <b>100-200</b></p>
                                                <button class="btn active" id="btn-port" onclick="filterSelection('all')"> Book Now</button>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row color-bg-eve">
                                          <div class="content-eve">
                                             <img src="svg/images/venues-pic2.jpg" alt="Mountains" style="width:300px; height:200px margin-left:10px">
                                          </div>
                                          <div id="content-eve-right">
                                             <div class="content-option">
                                                <h5><strong>Event Organiser Name</strong><br>
                                                   <span class="fa fa-star checked"></span>
                                                   <span class="fa fa-star checked"></span>
                                                   <span class="fa fa-star checked"></span>
                                                   <span class="fa fa-star checked"></span>
                                                   <span class="fa fa-star"></span>
                                                   <span class="fa fa-star"></span>
                                                </h5>
                                                <b>
                                                   <address>
                                                   <i class="material-icons" style="font-size:20px;color:#6cc0b9">place</i> 123 XYZ Road, Saudi Arabia
                                                   <address>
                                                </b>
                                                <b><span class="col-green">Amenities:</span> Gym, Swiming phool</b><br>
                                                <b><span class="col-green">Event Type:</span> Birthday, Wedding, Business Meeting</b>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br>
                                                   incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis <br>
                                                   nostrud exercitation ullamco laboris nisi ut aliquip.Lorem ipsum dolor sit amet,<br>
                                                   consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et<br>
                                                   dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation <br>
                                                   ullamco laboris nisi ut aliquip 
                                                </p>
                                                <p class="rate-eve"><span class="col-green">SAR:</span> <b>100 Days</b> <i class='fas fa-users' style='font-size:20px;color:#6cc0b9'></i> <b>100-200</b></p>
                                                <button class="btn active" id="btn-port" onclick="filterSelection('all')"> Book Now</button>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row color-bg-eve">
                                          <div class="content-eve">
                                             <img src="svg/images/venues-pic3.jpg" alt="Mountains" style="width:300px; height:200px margin-left:10px">
                                          </div>
                                          <div id="content-eve-right">
                                             <div class="content-option">
                                                <h5><strong>Event Organiser Name</strong><br>
                                                   <span class="fa fa-star checked"></span>
                                                   <span class="fa fa-star checked"></span>
                                                   <span class="fa fa-star checked"></span>
                                                   <span class="fa fa-star checked"></span>
                                                   <span class="fa fa-star"></span>
                                                   <span class="fa fa-star"></span>
                                                </h5>
                                                <b>
                                                   <address>
                                                   <i class="material-icons" style="font-size:20px;color:#6cc0b9">place</i> 123 XYZ Road, Saudi Arabia
                                                   <address>
                                                </b>
                                                <b><span class="col-green">Amenities:</span> Gym, Swiming phool</b><br>
                                                <b><span class="col-green">Event Type:</span> Birthday, Wedding, Business Meeting</b>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br>
                                                   incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis <br>
                                                   nostrud exercitation ullamco laboris nisi ut aliquip.Lorem ipsum dolor sit amet,<br>
                                                   consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et<br>
                                                   dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation <br>
                                                   ullamco laboris nisi ut aliquip 
                                                </p>
                                                <p class="rate-eve"><span class="col-green">SAR:</span> <b>100 Days</b> <i class='fas fa-users' style='font-size:20px;color:#6cc0b9'></i> <b>100-200</b></p>
                                                <button class="btn active" id="btn-port" onclick="filterSelection('all')"> Book Now</button>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row color-bg-eve">
                                          <div class="content-eve">
                                             <img src="svg/images/venues-pic4.jpg" alt="Mountains" style="width:300px; height:200px margin-left:10px">
                                          </div>
                                          <div id="content-eve-right">
                                             <div class="content-option">
                                                <h5><strong>Event Organiser Name</strong><br>
                                                   <span class="fa fa-star checked"></span>
                                                   <span class="fa fa-star checked"></span>
                                                   <span class="fa fa-star checked"></span>
                                                   <span class="fa fa-star checked"></span>
                                                   <span class="fa fa-star"></span>
                                                   <span class="fa fa-star"></span>
                                                </h5>
                                                <b>
                                                   <address>
                                                   <i class="material-icons" style="font-size:20px;color:#6cc0b9">place</i> 123 XYZ Road, Saudi Arabia
                                                   <address>
                                                </b>
                                                <b><span class="col-green">Amenities:</span> Gym, Swiming phool</b><br>
                                                <b><span class="col-green">Event Type:</span> Birthday, Wedding, Business Meeting</b>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br>
                                                   incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis <br>
                                                   nostrud exercitation ullamco laboris nisi ut aliquip.Lorem ipsum dolor sit amet,<br>
                                                   consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et<br>
                                                   dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation <br>
                                                   ullamco laboris nisi ut aliquip 
                                                </p>
                                                <p class="rate-eve"><span class="col-green">SAR:</span> <b>100 Days</b> <i class='fas fa-users' style='font-size:20px;color:#6cc0b9'></i> <b>100-200</b></p>
                                                <button class="btn active" id="btn-port" onclick="filterSelection('all')"> Book Now</button>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row color-bg-eve">
                                          <div class="content-eve">
                                             <img src="svg/images/venues-pic5.jpg" alt="Mountains" style="width:300px; height:200px margin-left:10px">
                                          </div>
                                          <div id="content-eve-right">
                                             <div class="content-option">
                                                <h5><strong>Event Organiser Name</strong><br>
                                                   <span class="fa fa-star checked"></span>
                                                   <span class="fa fa-star checked"></span>
                                                   <span class="fa fa-star checked"></span>
                                                   <span class="fa fa-star checked"></span>
                                                   <span class="fa fa-star"></span>
                                                   <span class="fa fa-star"></span>
                                                </h5>
                                                <b>
                                                   <address>
                                                   <i class="material-icons" style="font-size:20px;color:#6cc0b9">place</i> 123 XYZ Road, Saudi Arabia
                                                   <address>
                                                </b>
                                                <b><span class="col-green">Amenities:</span> Gym, Swiming phool</b><br>
                                                <b><span class="col-green">Event Type:</span> Birthday, Wedding, Business Meeting</b>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br>
                                                   incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis <br>
                                                   nostrud exercitation ullamco laboris nisi ut aliquip.Lorem ipsum dolor sit amet,<br>
                                                   consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et<br>
                                                   dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation <br>
                                                   ullamco laboris nisi ut aliquip 
                                                </p>
                                                <p class="rate-eve"><span class="col-green">SAR:</span> <b>100 Days</b> <i class='fas fa-users' style='font-size:20px;color:#6cc0b9'></i> <b>100-200</b></p>
                                                <button class="btn active" id="btn-port" onclick="filterSelection('all')"> Book Now</button>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row color-bg-eve">
                                          <nav aria-label="Page navigation example">
                                             <ul class="pagination justify-content-end">
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
                                       </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="profile">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
                                    <div role="tabpanel" class="tab-pane" id="messages">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                                    <div role="tabpanel" class="tab-pane" id="settings">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passage..</div>
                                 </div>
                              </div>
                           </div>
                        </div>
            </div>
            <div id="menu3" class="tab-pane fade">
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna 
                  aliqua. Ut enim ad minim veniam 
               </p>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna 
                  aliqua. Ut enim ad minim veniam
               </p>
            </div>
         </div>
      </div>
      @include('footer')
      <!-------------- Tab end ----------------------->
      <!------- body end-------->


      <script> <!--------------------------------- checkbox filters --------------------------------------------->
         var checkboxFilter = {
           
           // Declare any variables we will need as properties of the object
           
           $filters: null,
           $reset: null,
           groups: [],
           outputArray: [],
           outputString: '',
           
           // The "init" method will run on document ready and cache any jQuery objects we will need.
           
           init: function(){
             var self = this; // As a best practice, in each method we will asign "this" to the variable "self" so that it remains scope-agnostic. We will use it to refer to the parent "checkboxFilter" object so that we can share methods and properties between all parts of the object.
             
             self.$filters = $('#Filters');
             self.$reset = $('#Reset');
             self.$container = $('#Container');
             
             self.$filters.find('fieldset').each(function(){
               self.groups.push({
                 $inputs: $(this).find('input'),
                 active: [],
         		    tracker: false
               });
             });
             
             self.bindHandlers();
           },
           
           // The "bindHandlers" method will listen for whenever a form value changes. 
           
           bindHandlers: function(){
             var self = this;
             
             self.$filters.on('change', function(){
               self.parseFilters();
             });
             
             self.$reset.on('click', function(e){
               e.preventDefault();
               self.$filters[0].reset();
               self.parseFilters();
             });
           },
           
           // The parseFilters method checks which filters are active in each group:
           
           parseFilters: function(){
             var self = this;
          
             // loop through each filter group and add active filters to arrays
             
             for(var i = 0, group; group = self.groups[i]; i++){
               group.active = []; // reset arrays
               group.$inputs.each(function(){ 
                 $(this).is(':checked') && group.active.push(this.value);
               });
         	    group.active.length && (group.tracker = 0);
             }
             
             self.concatenate();
           },
           
           // The "concatenate" method will crawl through each group, concatenating filters as desired:
           
           concatenate: function(){
             var self = this,
         		  cache = '',
         		  crawled = false,
         		  checkTrackers = function(){
                 var done = 0;
                 
                 for(var i = 0, group; group = self.groups[i]; i++){
                   (group.tracker === false) && done++;
                 }
         
                 return (done < self.groups.length);
               },
               crawl = function(){
                 for(var i = 0, group; group = self.groups[i]; i++){
                   group.active[group.tracker] && (cache += group.active[group.tracker]);
         
                   if(i === self.groups.length - 1){
                     self.outputArray.push(cache);
                     cache = '';
                     updateTrackers();
                   }
                 }
               },
               updateTrackers = function(){
                 for(var i = self.groups.length - 1; i > -1; i--){
                   var group = self.groups[i];
         
                   if(group.active[group.tracker + 1]){
                     group.tracker++; 
                     break;
                   } else if(i > 0){
                     group.tracker && (group.tracker = 0);
                   } else {
                     crawled = true;
                   }
                 }
               };
             
             self.outputArray = []; // reset output array
         
         	  do{
         		  crawl();
         	  }
         	  while(!crawled && checkTrackers());
         
             self.outputString = self.outputArray.join();
             
             // If the output string is empty, show all rather than none:
             
             !self.outputString.length && (self.outputString = 'all'); 
             
             //console.log(self.outputString); 
             
             // ^ we can check the console here to take a look at the filter string that is produced
             
             // Send the output string to MixItUp via the 'filter' method:
             
         	  if(self.$container.mixItUp('isLoaded')){
             	self.$container.mixItUp('filter', self.outputString);
         	  }
           }
         };
           
         // On document ready, initialise our code.
         
         $(function(){
               
           // Initialize checkboxFilter code
               
           checkboxFilter.init();
               
           // Instantiate MixItUp
               
           $('#Container').mixItUp({
             controls: {
               enable: false // we won't be needing these
             },
             animation: {
               easing: 'cubic-bezier(0.86, 0, 0.07, 1)',
               duration: 600
             }
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
   </body>
</html>