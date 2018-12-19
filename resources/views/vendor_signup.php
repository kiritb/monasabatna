
@include('header')
<div class="flashmessage">

     <?php

if ($this->session->flashdata('true')) {



    echo '<section class="content-header"><div class="alert alert-success alert-dismissible"> 

    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

    <p><i class="icon fa fa-check"></i>';

    echo $this->session->flashdata('true');

    echo '</p></div></section>';

}else if ($this->session->flashdata('false')) {



    echo '<section class="content-header"><div class="alert alert-danger alert-dismissible"> 

    <button type="button" class="close" data-dismiss="alert" aria-hidden="false">&times;</button>

    <p><i class="icon fa fa-check"></i>';

    echo $this->session->flashdata('false');

    echo '</p></div></section>';

 }

?> 

</div>

<style type="text/css">

     .required_star{

        color: #dd4b39;

    }

    .error-msg{

        display:none;

    }

</style> 

 <!------- body start-------->   
           <hr class="line_hr">

         <div class="container">

         <div class="row changeleft">

            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">

            </div>

            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

               <div class="collapse navbar-collapse" id="myNavbar">

     

                  <ul class="second-nav">

                     <li class="venue-one"><a class="active-one" href="#signin"> Sign In</a></li>	

                    <li class="venue-one"><a class="signtwo" href="http://brillmindz.org/monasabatna/Html_dummy_pages/venue_registration"> Sign Up</a></li>

									

                  </ul>

               </div>

            </div>

         </div>

            <label> </label>

               <div id="signin">

                  <br>

                  <div class="container" id="formvendor-signup">

                     <form class="form-horizontal" method="post" id="sign_in_form" enctype="multipart/form-data">

                       

                         <div class="form-group">

                          <label class="control-label col-sm-3 textalign_vendorsignin" for="email">Email ID:</label>

                            <div class="col-sm-3">

                               <input type="text" class="form-control csignin-vendor" placeholder="" name="mobile">

                            </div>

                          </div>

                        <?php if (form_error('email_id')) { ?>

                                  <div class="alert alert-error" style="padding: 5px !important;">

                                      <p><?php echo form_error('email_id'); ?></p>

                                  </div>

                              <?php } ?> 

                              <div class="alert alert-error error-msg email_id_err_msg_contnr" style="padding: 5px !important;">

                                  <p id="email_id_err_msg"></p>

                              </div>

                     

                      

                     

                     <div class="form-group">

                        <label class="control-label col-sm-3 textalign_vendorsignin" for="pwd">Password:</label>

                        <div class="col-sm-3">

                          <input type="text" class="form-control csignin-vendor" placeholder="" name="pwd">

                           

                        </div>

						<div class="col-sm-12">

						   <label class="control-label small-custvendor" for="personname"><a href="">Forgot Password?</a></label>

							</div>

                    </div>

                    <?php if (form_error('password')) { ?>

                                <div class="alert alert-error" style="padding: 5px !important;">

                                    <p><?php echo form_error('password'); ?></p>

                                </div>

                            <?php } ?> 

                            <div class="alert alert-error error-msg password_err_msg_contnr" style="padding: 5px !important;">

                                <p id="password_err_msg"></p>

                            </div>

             



							<div class="row">

                           <div class="form-group">

                              <div class="col-md-12">

						 <button class="signinvendor" href="#signin"> Sign In</a></button>

						 

                        </div>

                           </div>

						   </div>

                           



                        </form>

                     </div>

                  </div>

                 

               </div>



         <div class="row"> </div>

		 <div class="row"> </div>

		 <div class="row"> </div>

         <!------- body end-------->
         @include('footer')