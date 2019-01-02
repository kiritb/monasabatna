
@include('header')
<body>

         <!------- body start-------->   

         <div class="container-fluid">

         <div class="row bg-custsignup">

			<div class="main_custsignin">

			<div class="row">

			<div class="col-md-4 col-sm-4 col-xs-4 form_custsignup">

			  <form class="form-horizontal" method="post" id="sign_up_form" enctype="multipart/form-data">

                  

                       <div class="form-group">

					   <div class="row">

                        <label class="control-label col-sm-11 formcust-head"><b>User Registration</b></label>

						</div>

						</div>

						<div class="form-group custom-signup">

                        <div class="col-sm-10">

						<label class="control-label col-sm-11 formcust-signin" for="personname">First Name</label>

                           <input type="text" class="form-control csignin" placeholder="" name="fname">

                        </div>

						</div>

						<div class="form-group">

						<div class="col-sm-10">

						<label class="control-label col-sm-11 formcust-signin" for="personname">Father Name</label>

                           <input type="text" class="form-control csignin" placeholder="" name="fathername">

						   </div>



						</div>

						<div class="form-group">

                        <div class="col-sm-10">

						<label class="control-label col-sm-11 formcust-signin" for="personname">Family Name</label>

                           <input type="text" class="form-control csignin" placeholder="" name="familyname">

                        </div>

						</div>

						<div class="form-group">

                        <div class="col-sm-10">

						<label class="control-label col-sm-11 formcust-signin" for="personname">Email ID</label>

                           <input type="text" class="form-control csignin" placeholder="" name="email">

                        </div>

						</div>

						                     <div class="form-group">

                        <label class="control-label col-sm-11 formcust-signup" for="personname">Phone Number</label>

                        <div class="col-sm-1">
                           <input type="text" class="form-control" id="phone_number_country_code_custsignup" placeholder="254" name="phone_number_country_code">
                           <div id="phone_number_country_code-error" class="error-class"></div>
                        </div>
                        
                        <div class="col-sm-2">
                           <input type="text" class="form-control" id="phone_number_custsignup" placeholder="Enter Phone" name="phone_number">
                        </div>
                        <div id="phone_number-error" class="error-class"></div>

                     </div>
						<div class="form-group">

                        <div class="col-sm-10">

						<label class="control-label col-sm-11 formcust-signin" for="personname">Password</label>

                           <input type="text" class="form-control csignin" placeholder="" name="pwd">

                        </div>

						</div>

						<div class="form-group">

                        <div class="col-sm-10">

						<label class="control-label col-sm-11 formcust-signin" for="personname">Re-type Password</label>

                           <input type="text" class="form-control csignin" placeholder="" name="cpwd">

                        </div>

						</div>

						<div class="form-group">

                           

                              <label id="checkterms"><input type="checkbox" name="terms_and_conditions"></label>
                              <div class="small-custup">
				I Agree to Monasabatna <a href="#">Term & Conditions</a><span class="checkterms"> and <a href="#">Privacy Policies</a></span>

                           

                              </div>

                              

                           </div>

						<div class="form-group">

						<div class="row signup-custom">

						<div class="col-md-12">

						 <a id="myOTP"  class="signuplink" href="#"> Register</a>
                        </div>

						<div class="col-sm-12">

						   <label class="control-label small-custupreg" for="personname">Already have an account?<a href="http://18.218.133.17/customer_signin">&nbsp;Sign In</a></label>

							</div>

						</div>

						   </div>

						</div>

                 

                     

					 </form>

			</div>
      <!------------------------------ Booking code----------------------------------->			
	  <div class="modal fade" id="myBookingOTP">
                                             <div class="modal-dialog">
                                               <div class="modal-content">
                                               
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                  <center><h3 class="modal-title">OTP</h3><center>
                                                  <button type="button" class="close cross" data-dismiss="modal">&times;</button>
                                                </div>
                                                
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                  
                                                  <h6 style="text-align:center"> Please enter OTP sent to your phone number
                            					          	. </h6>
                                                  <center>
                                                  <div class="panel panel-default panel-body custom-code">
                                                  <div id="divOuter">
	                                                        <div id="divInner">
                                                  <input id="partitioned" type="text" maxlength="4" />
                                                          </div>
                                                          </div>
                                                  </div>
                                                  <center>
                                                </div>
                                                
                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                  <center><button type="button" class="btn btn-lg-12 custom-button" data-dismiss="modal" id="payment_booking">submit</button><center>
                                                </div>
                                                
                                               </div>
                                             </div>
                                            </div>
                                            
      <!------------------------------ Booking Code----------------------------------->	
			<div class="col-md-8 col-sm-8 col-xs-8 img_custsignup">

			<img src="svg/images/custsignup-img.jpg" class="img-responsive" style="height:815px">

			</div>

			</div>

			</div><!----------- row -------------->
						   </div>
</div> <!---------- row bg-custsignin ------------>
   </div>
<!---- container-fluid --------------->

<div class="row"></div>

<div class="row"></div>

<div class="row"></div>

<div class="row"></div>

<div class="row"></div>
@include('footer')
         <!------- body end-------->
<script>
next(el) {
    el.setFocus();
  }
</script>
		 <script><!------pop up------->
   $(document).ready(function(){
 $("#myCancel").click(function(){
   $("#myCancelbooking").modal();
 });
 $("#myOTP").click(function(){
   $("#myBookingOTP").modal();
 });
 $("#myBookingcode #payment_booking").click(function(){
   $("#myPaymentdetails").modal();
 });
   $("#myBtn").click(function(){
   $("#myFilter").modal();
   
   });
    $(".nav-tabs a").click(function(){
     $(this).tab('show');
   });
   });
</script>


