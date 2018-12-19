
   <body>
     
      <!------- body start--------> 
      <div class="container center">
         <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
               <span class="go-green">
                  <h3><span class="col-green"><b>Terms & Policies</b></span></h3>
               </span>
            </div>
         </div>
         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <div class="vertical-menu">
               <a href="#">Booking</a>
               <a href="#">Venue</a>
               <a href="#">Services</a>
               <a href="#" class="active">Terms & Policies</a>
               <a href="#">Profile</a>
            </div>
         </div>
         <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
            <div id="home">
             
               <div id="formcall">
                  <form class="form-horizontal" action="">
                     <div class="form-group">
                        <div class="col-sm-12">
                           <textarea class = "form-control" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitationlaboris nisi ut aliquip.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                              **Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitationlaboris nisi ut aliquip.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                              **Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitationlaboris nisi ut aliquip.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip " rows = "22"></textarea>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="control-label col-sm-3" for="email"></label>
                        <ul>
                          <button type="button" class="btn btn-default btn-lg-6" id="sign-text">Edit</button> 
                        </ul>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div class="row"></div>
      <!------------- pop up modal -------------> 
      <div class="modal fade" id="myModal">
         <div class="modal-dialog">
            <div class="modal-content">
               <!-- Modal Header -->
               <div class="modal-header">
                  <center>
                  <h3 class="modal-title">Close Booking</h3>
                  <center>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
               <!-- Modal body -->
               <div class="modal-body">
                  <h6 style="text-align:center"> Please enter "<span class="custom-color">4578</span>" code in order to cancel the booking </h6>
                  <center>
                  <div class="panel panel-default panel-body custom-code">
                     _____ _____ _____ _____
                  </div>
                  <center>
               </div>
               <!-- Modal footer -->
               <div class="modal-footer">
                  <center>
                  <button type="button" class="btn btn-lg-8" id="sign-text" data-dismiss="modal">Edit</button>
                  <center>
               </div>
            </div>
         </div>
      </div>
      <!-- Close Booking -->
      <!------- body end-------->

      <!-------modal pop-up-------->
      </script>
      <script><!------inner page-Tabs-------->
         $(document).ready(function(){
         $("#myBtn").click(function(){
         
         $("#myModal").modal();
         
         });
          $(".nav-tabs a").click(function(){
           $(this).tab('show');
         });
         });
      </script>
      <script><!-------home page Tabs-------->
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
      <script><!-------banner carousel-showmanymoveone-------->
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