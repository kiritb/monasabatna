
@include('shared/header')


<style type="text/css">

     .required_star{

        color: #dd4b39;

    }

 </style> 

 <!------- body start-------->   
           <hr class="line_hr">

         <div class="container-fluid">
         <div class="row bg-custsignup">
        <div class="main_custsignup">
        <div class="form_custsignup">
            
            <div class="forgottext">
            Resend Password!
            </div>
         <form>
 
  <div class="form-group" id="formforgot">
    <label id="retypelab" for="inputAddress">New Password</label>
    <input type="text" class="form-control" id="inputforgot" placeholder="Enter New Password">
  </div>
  <div class="form-group" id="formforgot">
    <label id="retypelab" for="inputAddress">Retype New Password</label>
    <input type="text" class="form-control" id="inputforgot" placeholder="Retype New Password">
  </div>
 
  <button type="submit" class="forgotsubmit">Submit</button>
 
</form>
</div><!-----------------form_custsignup----------------->
<div class="col-md-8 col-sm-8 col-xs-8 img_custsignin">
                <img src="svg/images/cust-signin.jpg" class="img-responsive">
            </div>
</div><!--------------main_custsignup--------------------->
</div><!--------------row bg-custsignup------------------->


</div><!--------------container-fluid --------------------------->



         <div class="row"> </div>

		 <div class="row"> </div>

		 <div class="row"> </div>

         <!------- body end-------->
         @include('shared/footer')