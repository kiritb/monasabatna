
   <body>

      <!------- body start--------> 
      <div class="container-fluid center">
         <h2 class="head-dash">Profile</h2>
         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
            <div class="vertical-menu">
               <a href="#" class="active">Booking</a>
               <a href="#">Venue</a>
               <a href="#">Services</a>
               <a href="#">Terms & Policies</a>
               <a href="#">Profile</a>
            </div>
         </div>
         <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <form class="form-horizontal" action="/action_page.php">
            <div class="row panel panel-default formcall" id="formcall-dash">
               <div class="form-group">
                  <label class="control-label col-sm-3 font-weight-light" for="personname">Venue Name:</label>
                  <div class="col-sm-3">
                     <input type="text" class="form-control" id="personname" placeholder="200" name="contact">
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-sm-3" for="venuename">Logo:</label>
                  <div class="col-sm-3">
                     <input type="text" class="form-control" id="venuename" placeholder="200" name="venue">
                  </div>
                  <div class="col-sm-2">
                     <button type="submit" class="btn btn-default upload">Upload</button>
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-sm-3 font-weight-light" for="personname">License Number:</label>
                  <div class="col-sm-3">
                     <input type="text" class="form-control" id="personname" placeholder="200" name="contact">
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-sm-3" for="venuename">License Photo:</label>
                  <div class="col-sm-3">
                     <input type="text" class="form-control" id="venuename" placeholder="200" name="venue">
                  </div>
                  <div class="col-sm-2">
                     <button type="submit" class="btn btn-default upload">Upload</button>
                  </div>
               </div>
            </div>
            <div class="row"></div>
            <h5>Please provide atleast one of the following information </h5>
            <div class="row panel panel-default formcall" id="formcall-dash">
               <div class="form-group">
                  <label class="control-label col-sm-3 font-weight-light" for="personname">Official Website Link:</label>
                  <div class="col-sm-3">
                     <input type="text" class="form-control" id="personname" placeholder="200" name="contact">
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-sm-3" for="venuename">Facebook Link:</label>
                  <div class="col-sm-3">
                     <input type="text" class="form-control" id="venuename" placeholder="200" name="venue">
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-sm-3" for="venuename">Twitter Link:</label>
                  <div class="col-sm-3">
                     <input type="text" class="form-control" id="venuename" placeholder="200" name="venue">
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-sm-3 font-weight-light" for="personname">Instagram Link:</label>
                  <div class="col-sm-3">
                     <input type="text" class="form-control" id="personname" placeholder="200" name="contact">
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-sm-3" for="venuename">Photo of National ID / Passport:</label>
                  <div class="col-sm-3">
                     <input type="text" class="form-control" id="venuename" placeholder="200" name="venue">
                  </div>
                  <div class="col-sm-2">
                     <button type="submit" class="btn btn-default upload">Upload</button>
                  </div>
               </div>
            </div>
            <div class="row"></div>
            <h5>Munasabatna Commissions </h5>
            <div class="row panel panel-default" id="formcall-dash">
               <div class="row">Booking:12% </div>
               <div class="row">Cancellation:6% </div>
               <div class="row">Express Deals:15% </div>
               <div class="col-sm-offset-3 check-dash">
                  <label><input type="checkbox" name="remember"> I Agreed to Munasabatna 
                  <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policies</a></label>
               </div>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
               <!-- <ul class="nav navbar-nav navbar-center"> -->
               <ul class="center">
                  <button type="button" class="btn btn-default btn-xs" id="signone">SIGN IN</button>
                  <button type="button" class="btn btn-default btn-xs" id="signtwo">SIGN UP</button> 
               </ul>
            </div>
            <div class="row"></div>
         </div>
      </div>
      <!------- body end-------->

	  
      <script>
         $(document).ready(function(){
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
   </body>
</html>