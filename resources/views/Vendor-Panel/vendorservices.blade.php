

@include('shared/headercustom')
<link rel="stylesheet" type="text/css" href="{{ url('css/vendor-panel/superadmin.css') }}">
      <!------- body start--------> 
      <div id="greydivider"></div>
      <div class="container-fluid" id="globevendorpanel">
     @include('vendor-panel/vendorheaderbar')

<div class="tab-content" id="pills-tabContent">
<div class="tab-pane fade show active" id="pills-vendorpan" role="tabpanel" aria-labelledby="pills-vendorpan-tab">
<div class="container-fluid" id="dashboardcontent">
      
      @include('vendor-panel/vendorvenuesidebar')
<div class="tab-content" id="v-pills-tabContent">
 
  <div>

  <div class="dashvendortop">
      <a class="servicetext" href="#"> Services </a>
          <a class="addservicedash" href="{{ url('dashboardserviceform') }}"> Add Services</a>
</div><!----------------add button ---------------------->
  <div class="dashboardvenuepart">
            <table class="table table-xs-12 table-sm-12 table-md-12">
               <thead class="table-color-head">
                  <tr>
                     <th scope="col">Sr No.</th>
                     <th scope="col">Service Name </th>
                     <th scope="col">Cost</th>
                     <th scope="col">Cost Type</th>
                     <th scope="col">Added date & time</th>        
                  </tr>
               </thead>
               <tbody class="table-hover">
                  <tr>
                     <th scope="row">201</th>
                     <td>Food </td>
                     <td>100 </td>
                     <td>Per Person</td>
                     <td>10-Feb-2019 12:30 PM</td>
                     <td class="bg-white-booking"><a data-toggle="modal" data-target="#viewservicesmodal" id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                     <td class="bg-white-booking"><a data-toggle="modal" data-target="#serviceeditModal" href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a data-toggle="modal" data-target="#servicedeleteModal" id="myCancel" href="#"><i class="fas fa-trash-alt" style="font-size:20px;color:red"></i></a></td>
                     <td class="bg-white-booking"><label class="switch">
                        <input type="checkbox" id="togBtn" style="font-size:12px">
                        <div class="slider round">
                            <span class="on"></span>
                            <span class="off"></span>
                        </div>
                        </label></td>
                  </tr>
                  <tr>
                     <th scope="row">201</th>
                     <td>Music </td>
                     <td>100 </td>
                     <td>Per Person</td>
                     <td>10-Feb-2019 12:30 PM</td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt" style="font-size:20px;color:red"></i></a></td>
                     <td class="bg-white-booking"><label class="switch">
                        <input type="checkbox" id="togBtn" style="font-size:12px">
                        <div class="slider round">
                            <span class="on"></span>
                            <span class="off"></span>
                        </div>
                        </label></td>
                  </tr>
                  <tr>
                  <th scope="row">201</th>
                     <td>Speaker </td>
                     <td>100 </td>
                     <td>Per Person</td>
                     <td>10-Feb-2019 12:30 PM</td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt" style="font-size:20px;color:red"></i></a></td>
                     <td class="bg-white-booking"><label class="switch">
                        <input type="checkbox" id="togBtn" style="font-size:12px">
                        <div class="slider round">
                            <span class="on"></span>
                            <span class="off"></span>
                        </div>
                        </label></td>
                  </tr>
                  <tr>
                  <th scope="row">201</th>
                     <td>Music </td>
                     <td>100 </td>
                     <td>Per Person</td>
                     <td>10-Feb-2019 12:30 PM</td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt" style="font-size:20px;color:red"></i></a></td>
                     <td class="bg-white-booking"><label class="switch">
                        <input type="checkbox" id="togBtn" style="font-size:12px">
                        <div class="slider round">
                            <span class="on"></span>
                            <span class="off"></span>
                        </div>
                        </label></td>
                  </tr>
                  <tr>
                  <th scope="row">201</th>
                     <td>Speaker </td>
                     <td>100 </td>
                     <td>Per Person</td>
                     <td>10-Feb-2019 12:30 PM</td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt" style="font-size:20px;color:red"></i></a></td>
                     <td class="bg-white-booking"><label class="switch">
                        <input type="checkbox" id="togBtn" style="font-size:12px">
                        <div class="slider round">
                            <span class="on"></span>
                            <span class="off"></span>
                        </div>
                        </label></td>
                     
                  </tr>
                  <tr>
                  <th scope="row">201</th>
                     <td>Food </td>
                     <td>100 </td>
                     <td>Per Person</td>
                     <td>10-Feb-2019 12:30 PM</td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt" style="font-size:20px;color:red"></i></a></td>
                     <td class="bg-white-booking"><label class="switch">
                        <input type="checkbox" id="togBtn" style="font-size:12px">
                        <div class="slider round">
                            <span class="on"></span>
                            <span class="off"></span>
                        </div>
                        </label></td>
                  </tr>
                  <tr>
                  <th scope="row">201</th>
                     <td>Music </td>
                     <td>100 </td>
                     <td>Per Person</td>
                     <td>10-Feb-2019 12:30 PM</td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt" style="font-size:20px;color:red"></i></a></td>
                     <td class="bg-white-booking"><label class="switch">
                        <input type="checkbox" id="togBtn" style="font-size:12px">
                        <div class="slider round">
                            <span class="on"></span>
                            <span class="off"></span>
                        </div>
                        </label></td>
                  </tr>
                  <tr>
                  <th scope="row">201</th>
                     <td>Speaker </td>
                     <td>100 </td>
                     <td>Per Person</td>
                     <td>10-Feb-2019 12:30 PM</td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt" style="font-size:20px;color:red"></i></a></td>
                     <td class="bg-white-booking"><label class="switch">
                        <input type="checkbox" id="togBtn" style="font-size:12px">
                        <div class="slider round">
                            <span class="on"></span>
                            <span class="off"></span>
                        </div>
                        </label></td>
                  </tr>
                  <tr>
                  <th scope="row">201</th>
                     <td>Food </td>
                     <td>100 </td>
                     <td>Per Person</td>
                     <td>10-Feb-2019 12:30 PM</td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt" style="font-size:20px;color:red"></i></a></td>
                     <td class="bg-white-booking"><label class="switch">
                        <input type="checkbox" id="togBtn" style="font-size:12px">
                        <div class="slider round">
                            <span class="on"></span>
                            <span class="off"></span>
                        </div>
                        </label></td>
                  </tr>
                  <tr>
                  <th scope="row">201</th>
                     <td>Music </td>
                     <td>100 </td>
                     <td>Per Person</td>
                     <td>10-Feb-2019 12:30 PM</td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt" style="font-size:20px;color:red"></i></a></td>
                     <td class="bg-white-booking"><label class="switch">
                        <input type="checkbox" id="togBtn" style="font-size:12px">
                        <div class="slider round">
                            <span class="on"></span>
                            <span class="off"></span>
                        </div>
                        </label></td>
                  </tr>
                  <tr>
                  <th scope="row">201</th>
                     <td>Speaker </td>
                     <td>100 </td>
                     <td>Per Person</td>
                     <td>10-Feb-2019 12:30 PM</td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt" style="font-size:20px;color:red"></i></a></td>
                     <td class="bg-white-booking"><label class="switch">
                        <input type="checkbox" id="togBtn" style="font-size:12px">
                        <div class="slider round">
                            <span class="on"></span>
                            <span class="off"></span>
                        </div>
                        </label></td>
                  </tr>
                  <tr>
                  <th scope="row">201</th>
                     <td>Food </td>
                     <td>100 </td>
                     <td>Per Person</td>
                     <td>10-Feb-2019 12:30 PM</td>
                     <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt" style="font-size:20px;color:red"></i></a></td>
                     <td class="bg-white-booking"><label class="switch">
                        <input type="checkbox" id="togBtn" style="font-size:12px">
                        <div class="slider round">
                            <span class="on"></span>
                            <span class="off"></span>
                        </div>
                        </label></td>
                  </tr>
               </tbody>
            </table>
            <!-------------------------------------View Services Modal -------------------------------->
<div class="modal fade xlservices" id="viewservicesmodal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div id="viewvenuesm" class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title">View Services Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <caption class="servhd">Services Provided : </caption>
<table style="width:100%">
 
  <tr class="servicetable">
    <th>Service Name : Food</th>
    <th>Cost : 100/Person</th>
    <th>Added Date & Time</th>
    
  </tr>
  <tr>
    <td class="servborder">What's Provided</td>
    <td  class="servborder"> </td>
    <td  class="servborder"> </td>
  </tr>
  <tr>
    <td class="servborder">1. Chicken Wings </td>
    <td class="servborder"> </td>
    <td  class="servborder"> </td>
  </tr>
  <tr>
    <td class="servborder">2. Hot Chocolate </td>
    <td class="servborder"> </td>
    <td  class="servborder"> </td>
  </tr>
  <tr>
    <td class="servborder">3. Finger Chips </td>
    <td class="servborder"> </td>
    <td  class="servborder"> </td>
  </tr>
</table>

</div>
  </div>
</div>
</div>
<!-----------------------Edit Services pop up -------------------------------------------------------->
            <!-- Modal with Text area -->
            <div class="modal fade" id="serviceeditModal" tabindex="-1" role="dialog" aria-labelledby="serviceeditModalLabel" aria-hidden="true">
            <div id="canceldash" class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Services</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <div class="serviceform">
  <form class="form-horizontal" method="post" id="vendor_sign_up_form">
  <div class="form-group row regfeild">
    <label for="inputEmail3" class="vendorregco">Service Name : </label>
    <div class="col-sm-5">
        <input type="text" name="company_name" class="vendorformreg" placeholder=" ">
    </div>
</div>
<!------------------form-group row ------------------------->
<div class="form-group row regfeild">
    <label for="inputEmail3" class="vendorregco">Cost : </label>
    <div class="col-sm-5">
        <input type="text" name="company_name" class="vendorformreg" placeholder="200">
    </div>
</div>
<!------------------form-group row ------------------------->
<div class="form-group row regfeild">
    <label for="inputEmail3" class="vendorregco">Cost Type : </label>
    <div class="col-sm-5">
        <input type="text" name="company_name" class="vendorformreg" placeholder="200">
    </div>
</div>
<!------------------form-group row ------------------------->
<!------------------form-group row ------------------------->
<div class="form-group row regfeild">
    <label for="inputEmail3" class="vendorregco">What's Provided : </label>
    <div class="col-sm-5">
    <div class="table table-responsive">
<table class="table table-responsive table-striped table-bordered">
<tbody id="TextBoxContent">
<tr>
<td><input name="DynamicTextBox" type="text" value="" class="form-control"></td>
<td><button type="button" class="btn btn-danger remove"><i class="far fa-times-circle"></i></i></button></td>
</tr>
</tbody>
<tfoot>
  <tr>
    <th colspan="5">
    <button id="btnAdd" type="button" class="btn btn-primary" data-toggle="tooltip" data-original-title="Add more controls"><i class="far fa-plus-square"></i></button></th>
  </tr>
</tfoot>
</table>
</div>
    </div>
</div>
<!------------------form-group row ------------------------->
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary noamen">No</button>
        <button type="button" class="btn btn-secondary yesamen" data-dismiss="modal">Submit</button>
      </div>
    </div>
  </div>
    
</div>
<!------------------end of service edit ------------------------->
<!-----------------------View Services pop up -------------------------------------------------------->
            <!-- Modal with Text area -->
            <div class="modal fade" id="servicedeleteModal" tabindex="-1" role="dialog" aria-labelledby="servicedeleteModalLabel" aria-hidden="true">
            <div id="canceldash" class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Alert!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to Delete the Services?</p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary noamen">No</button>
        <button type="button" class="btn btn-secondary yesamen" data-dismiss="modal">Yes</button>
      </div>
    </div>
  </div>
    
</div>
<!------------------Delete Modal ------------------------->
</div><!--------------end of booking ---------------------------------->     
  </div><!-----------------Services Tab -------------------------------->
</div><!-------------------------globevendorpanel--------------------------->
  
      <!------- body end-------->
@include('shared/footer')
        <script type="text/javascript">
        $('MySlicker slicker').slick({
        rtl: true,
        slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  fade: false,
  infinite: true,
  speed: 300,
  adaptiveHeight:true
});
        </script>
      <script><!------inner page-Tabs-------->
         $(document).ready(function(){
         
         $("#Add-Express #Remove-Express-Deal").click(function(){
         $("#Remove-Express-Modal").modal();
         });
         $("#myaddexpress").click(function(){
         $("#Add-Express").modal();
         });
          $(".nav-tabs a").click(function(){
           $(this).tab('show');
         });
         });
      </script>
     
     
  