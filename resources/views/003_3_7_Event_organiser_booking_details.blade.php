

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
                  <input type="text" class="form-control" placeholder="City" name="contact">
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
                  <button type="submit" class="btn btn-danger" >Sign Up</button>   
               </div>
            </div>
         </div>
      </div>
      <!------- form start-------->
      <!------- Banner start-------->
<section style="background:#efefe9;">
        <div class="container-fluid">
            <div class="row">
                <div class="board">
                    <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
                    <div class="board-inner">
                    <ul class="nav nav-tabs" id="myTab">
                    <div class="liner"></div>
                     <li class="active">
                     <a href="#home" data-toggle="tab" title="welcome">
                      <span class="round-tabs one">
                             1
                      </span> 
					  </a>  
                <a class="nav-link" id="one-tab" data-toggle="tab" href="#home" role="tab" aria-controls="One" aria-selected="true">Booking info</a>
                 </li>

					
                  <li><a href="#profile" data-toggle="tab" title="profile">
                     <span class="round-tabs two">
                       2
                     </span> 
           </a>
		   <a class="nav-link" id="one-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="One" aria-selected="true">Personal info</a>
                 </li>
                 <li><a href="#messages" data-toggle="tab" title="bootsnipp goodies">
                     <span class="round-tabs three">
                         3
                     </span> </a>
					 <a class="nav-link" id="one-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="One" aria-selected="true">Payment Info</a>
                     </li>

                     <li><a href="#settings" data-toggle="tab" title="blah blah">
                         <span class="round-tabs four">
                              4
                         </span> 
                     </a>
					 <a class="nav-link" id="one-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="One" aria-selected="true">Booking Confirmation</a>
					 </li>


                     
                     </ul></div>

                     <div class="tab-content">
                      <div class="tab-pane fade in active" id="home">

                          <h3 class="head text-center">Welcome to Bootsnipp<sup>™</sup> <span style="color:#f48260;">♥</span></h3>
                          <p class="narrow text-center">
                              Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
                          </p>
                          
                          <p class="text-center">
                    <a href="" class="btn btn-success btn-outline-rounded green"> start using bootsnipp <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></a>
                </p>
                      </div>
                      <div class="tab-pane fade" id="profile">
                          <h3 class="head text-center">Create a Bootsnipp<sup>™</sup> Profile</h3>
                          <p class="narrow text-center">
                              Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
                          </p>
                          
                          <p class="text-center">
                    <a href="" class="btn btn-success btn-outline-rounded green"> create your profile <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></a>
                </p>
                          
                      </div>
                      <div class="tab-pane fade" id="messages">
                          <h3 class="head text-center">Bootsnipp goodies</h3>
                          <p class="narrow text-center">
                              Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
                          </p>
                          
                          <p class="text-center">
                    <a href="" class="btn btn-success btn-outline-rounded green"> start using bootsnipp <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></a>
                </p>
                      </div>
                      <div class="tab-pane fade" id="settings">
                          <h3 class="head text-center">Drop comments!</h3>
                          <p class="narrow text-center">
                              Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
                          </p>
                          
                          <p class="text-center">
                    <a href="" class="btn btn-success btn-outline-rounded green"> start using bootsnipp <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></a>
                </p>
                      </div>
                      <div class="tab-pane fade" id="doner">
  <div class="text-center">
    <i class="img-intro icon-checkmark-circle"></i>
</div>
<h3 class="head text-center">thanks for staying tuned! <span style="color:#f48260;">♥</span> Bootstrap</h3>
<p class="narrow text-center">
  Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
</p>
</div>
<div class="clearfix"></div>
</div>

</div>
</div>
</div>
</section>
@include('footer')
      <!------- body end-------->

      <!------- Footer end-------->
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