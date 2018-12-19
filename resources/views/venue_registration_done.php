
@include('header')
<body>

         <!------- body start-------->   
           <hr class="line_hr">
         <div class="container">

         <div class="row changeleft">

            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">

            </div>

            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

               <div class="collapse navbar-collapse" id="myNavbar">

     

                  <ul class="second-nav">

				  <li class="venue-one"><a class="signtwo" href="http://brillmindz.org/monasabatna/Html_dummy_pages/vendor_signup#signout"> Sign In</a></li>

                     <li class="venue-one"><a class="active-one" href="#signin"> Sign Up</a></li>

                     

                   

                  </ul>

               </div>

            </div>

         </div>

            <label> </label>

           



                  <br>

                  <div class="container" id="formvendor-signup">

                     <form class="form-horizontal" method="post" id="sign_up_form" enctype="multipart/form-data">

                       <br>

                       <br>

                       <div class="form-group venuereg">

                        <label class="control-label col-sm-3 textalign_vendor" for="personname">Company Name:</label>

                        <div class="col-sm-3">

                           <input type="text" class="form-control csignin-vendor" id="company_name" placeholder="Enter Company Name" name="company_name">

                        </div>

                        <div id="company_name-error" class="error-class"></div>

                     </div>

                     

                     <div class="form-group custom_reduce">

                        <label class="control-label col-sm-3 textalign_vendor1" for="optionservice">Phone Number:</label>

                        <div class="col-sm-1">

                           <input type="text" class="form-control" id="phone_number_country_code" placeholder="966" name="phone_number_country_code">

                           <div id="phone_number_country_code-error" class="error-class"></div>

                        </div>

                        

                        <div class="col-sm-2">

                           <input type="text" class="form-control csignin-vendor" id="phone_number" placeholder="Enter Phone Number" name="phone_number">

                        </div>

                        <div id="phone_number-error" class="error-class"></div>

                     </div>

                     <div class="form-group custom_reduce">

                        <label class="control-label col-sm-3 textalign_vendor1" for="altcontact">Alternate Contact Number 1:</label>

                        <div class="col-sm-1">

                           <input type="text" class="form-control" id="phone_number_country_code_1" placeholder="166" name="phone_number_country_code_1">

                        </div>

                        <div class="col-sm-2">

                           <input type="text" class="form-control csignin-vendor" id="phone_number_1" placeholder="Enter Phone Number 1" name="phone_number_1">

                        </div>

                     </div>

                     <div class="form-group custom_reduce">

                        <label class="control-label col-sm-3 textalign_vendor1" for="email">Alternate Contact Number 2:</label>

                        <div class="col-sm-1">

                           <input type="text" class="form-control" id="phone_number_country_code_2" placeholder="687" name="phone_number_country_code_2">

                        </div>

                        <div class="col-sm-2">

                           <input type="text" class="form-control csignin-vendor" id="phone_number_2" placeholder="Enter Phone Number 2" name="phone_number_2">

                        </div>

                     </div>

                     <div class="form-group custom_reduce">

                        <label class="control-label col-sm-3 textalign_vendor1" for="email">Email:</label>

                        <div class="col-sm-3">

                           <input type="text" class="form-control csignin-vendor" id="email_id" placeholder="Enter Email" name="email_id">

                        </div>

                        <div id="email_id-error" class="error-class"></div>

                     </div>

                     <div class="form-group custom_reduce">

                        <label class="control-label col-sm-3 textalign_vendor1" for="email">Country:</label>

                        <div class="col-sm-3">

                           <input type="text" class="form-control csignin-vendor" id="country" placeholder="Enter Country" name="country">

                        </div>

                        <div id="country-error" class="error-class"></div>

                     </div>

                     <div class="form-group custom_reduce">

                        <label class="control-label col-sm-3 textalign_vendor1" for="email">City:</label>

                        <div class="col-sm-3">

                           <input type="text" class="form-control csignin-vendor" id="city" placeholder="Enter City" name="city">

                        </div>

                        <div id="city-error" class="error-class"></div>

                     </div>

                     <div class="form-group custom_reduce">

                        <label class="control-label col-sm-3 textalign_vendor1" for="email">Address Line 1 :</label>

                        <div class="col-sm-3">

                           <input type="text" class="form-control csignin-vendor" id="address_line_1" placeholder="Enter Addressn Line1" name="address_line_1">

                        </div>

                        <div id="address_line_1-error" class="error-class"></div>

                     </div>

                     <div class="form-group custom_reduce">

                        <label class="control-label col-sm-3 textalign_vendor1" for="email">Address Line 2 :</label>

                        <div class="col-sm-3">

                           <input type="text" class="form-control csignin-vendor" id="address_line_2" placeholder="Enter Address Line 2" name="address_line_2">

                        </div>

                     </div>

                     <div class="form-group">

                        <label class="control-label col-sm-3 textalign_vendor1" for="email">Add in Google Map:</label>

                        <div class="col-sm-2">

                           <button type="submit" class="btn btn-default addn">Add</button>

                        </div>

                     </div>

                     <div class="form-group">

                        <label class="control-label col-sm-3 textalign_vendor1" for="email">Note:</label>

                        <div class="col-sm-3">

                           <textarea class ="form-control csignin-vendor" type="text" id="note" placeholder="Enter Note" name="note" rows = "4"></textarea>

                        </div>

                        <div id="note-error" class="error-class"></div>

                     </div>

                     <div class="form-group">

                        <label class="control-label col-sm-3 textalign_vendor1" for="email">License Number:</label>

                        <div class="col-sm-3">

                           <input type="text" class="form-control csignin-vendor" id="licence_number" placeholder="Enter License Number" name="licence_number">

                        </div>

                        <div id="licence_number-error" class="error-class"></div>

                     </div>

                     <div class="form-group">

                        <label class="control-label col-sm-3 textalign_vendor1" for="pwd">Password:</label>

                        <div class="col-sm-3">          

                           <input type="password" class="form-control csignin-vendor" id="password" placeholder="******" name="password">

                        </div>

                        <div id="password-error" class="error-class"></div>

                     </div>

                     <div class="form-group">

                        <label class="control-label col-sm-3 textalign_vendor1" for="pwd">Confirm Password:</label>

                        <div class="col-sm-3">          

                           <input type="password" class="form-control csignin-vendor" id="confirm_password" placeholder="****** " name="confirm_password">

                        </div>

                        <div id="confirm_password-error" class="error-class"></div>

                     </div>

                     <hr class="linehr">

                     <div class="form-group">

                        <label class="control-label col-sm-3 bankhead" for="head"><b>Bank info</b></label>

                     </div>

                     <div class="form-group">

                        <label class="control-label col-sm-3 textalign_vendor" for="pwd">Bank Account Name:</label>

                        <div class="col-sm-3">          

                           <input type="text" class="form-control csignin-vendor" id="bank_account_name" placeholder="Enter Bank Account Name" name="bank_account_name">

                        </div>

                     </div>

                     <div class="form-group">

                        <label class="control-label col-sm-3 textalign_vendor" for="pwd">Bank Name:</label>

                        <div class="col-sm-3">          

                           <input type="text" class="form-control csignin-vendor" id="bank_name" placeholder="Enter Bank Name " name="bank_name">

                        </div>

                     </div>

                     <div class="form-group">

                        <label class="control-label col-sm-3 textalign_vendor" for="pwd">PAN Number:</label>

                        <div class="col-sm-3">          

                           <input type="text" class="form-control csignin-vendor" id="pan_number" placeholder="Enter PAN Number " name="pan_number">

                        </div>

                     </div>

                     <div class="form-group">

                        <label class="control-label col-sm-3 textalign_vendor" for="pwd">Account Number:</label>

                        <div class="col-sm-3">          

                           <input type="text" class="form-control csignin-vendor" id="account_number" placeholder="Enter Account Number  " name="account_number">

                        </div>

                     </div>
			<!----
                     <div class="form-group">

                        <label class="control-label col-sm-6 textalign_vendor" for="pwd">Payment Option:</label>    

                        <div class="col-sm-8 checkalign">

                           <div class="checkbox">

                              <label><input type="checkbox" name="payment_option" value="1">  <b style="font-size:15px">Online Payment</b></label>

                              <label> </label>

                              <label> </label>

                              <label> </label>

                              <label> </label>

                              <label><input type="checkbox" name="payment_option" value="2"> <b style="font-size:15px"> Cash</b></label>

                              <div id="payment_option-error" class="error-class"></div>

                           </div>

                           

                        </div> --->


                        <div class="form-group">

                           <div class="col-sm-offset-3 checkterms">

                              <label><input type="checkbox" name="terms_and_conditions">&nbsp;I Agreed to Munasabatna

                                 <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policies</a></label>

                                 <div id="terms_and_conditions-error" class="error-class"></div>

                              </div>

                              

                           </div>

                           <div class="form-group">

                              <div class="col-sm-offset-3 col-sm-10 textalign">

                                 <button type="submit" name="submit" value="submit" class="btn btn-default signme-venuereg" >Sign Up</button>

                              </div>

                           </div>

                        </form>

                     </div>

</div>
<div class="row"> </div>
@include('footer')
         <!------- body end-------->



