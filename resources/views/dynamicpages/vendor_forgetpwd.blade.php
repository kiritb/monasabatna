
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
            Forgot your Password?
            </div>
         <form>
 
  <div class="form-group" id="formforgot">
    <label id="forgotlab" for="inputAddress">Registered Phone Number</label>
    <input type="text" class="form-control" id="inputforgot" placeholder="Phone Number">
  </div>
 
  <button type="submit" class="forgotsubmit">Submit</button>
  <span class="small-cust">
                                    <a href="http://18.218.133.17/register"> Back</a>
                                </span>

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