
@include('header')
<body>

         <!------- body start-------->   

         <div class="container-fluid">

         <div class="row bg-custsignin">

			<div class="main_custsignin">

			<div class="row">

			<div class="col-md-4 col-sm-4 col-xs-4 form_custsignin">

			  <form class="form-horizontal" method="post" id="sign_up_form" enctype="multipart/form-data">

                  

                       <div class="form-group">

					   <div class="row">

                        <label class="control-label col-sm-11 formcust-head">User Sign In:</label>

						</div>

						</div>

						<div class="form-group signin-custom">

                        <div class="col-sm-10">

						<label class="control-label col-sm-11 formcust-signin" for="personname">Phone Number</label>

                           <input type="text" class="form-control csignin" placeholder="" name="mobile">

                        </div>

						</div>

						<div class="form-group">

						<div class="col-sm-10">

						<label class="control-label col-sm-11 formcust-signin" for="personname">Password</label>

                           <input type="text" class="form-control csignin" placeholder="" name="pwd">

						   </div>

						   <div class="col-sm-12">

						   <label class="control-label small-custforgot" for="personname"><a href="#">Forgot Password?</a></label>

							</div>

						</div>

						<div class="form-group">

						<div class="row">

						<div class="col-md-12">

						 <a class="signinlink" href="#"> Sign In</a>

						 

                        </div>

						<div class="col-sm-12">

						   <label class="control-label small-cust" for="personname">New User?<a href="http://18.218.133.17/customer_signup">&nbsp;Sign Up</a></label>

							</div>

						</div>

						</row>

						</div>

    

                     

					 </form>

			</div>

			<div class="col-md-8 col-sm-8 col-xs-8 img_custsignin">

			<img src="svg/images/cust-signin.jpg" class="img-responsive" style="height:425px">

			</div>

			</div>

			</div><!----------- row -------------->

		 </div>

            



</div> <!---------- row bg-custsignin ------------>

</div><!---- container-fluid --------------->

<div class="row"></div>
<div class="row"></div>
<div class="row"></div>
<div class="row"></div>

         <!------- body end-------->
@include('footer')


