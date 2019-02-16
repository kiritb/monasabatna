

@include('shared/headercustom')
<link rel="stylesheet" type="text/css" href="{{ url('css/vendor-panel/superadmin.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/infoguestlogin.css') }}">
      <!------- body start--------> 
    <div id="greydivider"></div>
      <div class="container-fluid" id="globevendorpanel">  
 @include('vendor-panel/vendorheaderbar')
  <div class="container-fluid" id="dashboardcontent">
      
     @include('vendor-panel/vendorvenuesidebar')

     
<div class="tab-content" id="pills-tabContent">
 
  <div>
      <div class="dashformtop">
          Services
</div><!----------------add button ---------------------->
  <div class="venueform">
  
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
<section class="container serviceform">
<div class="table table-responsive">
<table class="table table-responsive table-striped table-bordered">
<thead>
	<tr>
    	<td>What's Provided</td>
    </tr>
</thead>
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
</section>
</form>
</div><!--------------end of booking ---------------------------------->   

  </div>
  <div class="tab-pane fade" id="v-pills-policies" role="tabpanel" aria-labelledby="v-pills-policies-tab">drupal</div>
  <div class="tab-pane fade" id="v-pills-profiles" role="tabpanel" aria-labelledby="v-pills-profiles-tab">java</div>
  <div class="tab-pane fade" id="v-pills-amenities" role="tabpanel" aria-labelledby="v-pills-amenities-tab">
  <div class="dashvendortop">
          <a  data-toggle="modal" data-target="#addAmenities" class="addvenuedash" href="#"> Add </a>
</div><!----------------add button ---------------------->
  <div class="dashboardamenpart">
            <table class="table table-xs-12 table-sm-12 table-md-12">
               <thead class="table-color-head">
                  <tr>
                     <th class="amenid" scope="col">Sr ID</th>
                     <th scope="col">Amenities </th>
                  </tr>
               </thead>
               <tbody class="table-hover">
                  <tr>
                     <th class="amenid" scope="row">201</th>
                     <td>Swimming Phool</td>
                     
                     <td class="bg-white-booking"><a href="#"><i data-toggle="modal" data-target="#updateAmenities" class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i data-toggle="modal" data-target="#deleteAmenities" class="fas fa-trash-alt" style="font-size:20px;color:red"></i></a></td>
                  </tr>
                  <tr>
                     <th class="amenid" scope="row">201</th>
                     <td>Parking</td>
                     
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt" style="font-size:20px;color:red"></i></a></td>
                  </tr>
                  <tr>
                     <th class="amenid" scope="row">201</th>
                     <td>Swimming Phool</td>
                     
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt" style="font-size:20px;color:red"></i></a></td>
                  </tr>
                  <tr>
                     <th class="amenid" scope="row">201</th>
                     <td>Parking</td>
                     
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt" style="font-size:20px;color:red"></i></a></td>
                  </tr>
                  <tr>
                     <th class="amenid" scope="row">201</th>
                     <td>Play Area</td>
                     
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt" style="font-size:20px;color:red"></i></a></td>
                  </tr>
                  <tr>
                     <th class="amenid" scope="row">201</th>
                     <td>Gym</td>
                     
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt" style="font-size:20px;color:red"></i></a></td>
                  </tr>
                  <tr>
                     <th class="amenid" scope="row">201</th>
                     <td>Swimming Phool</td>
                     
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt" style="font-size:20px;color:red"></i></a></td>
                  </tr>
                  <tr>
                     <th class="amenid" scope="row">201</th>
                     <td>Swimming Phool</td>
                     
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt" style="font-size:20px;color:red"></i></a></td>
                  </tr>
                  <tr>
                     <th class="amenid" scope="row">201</th>
                     <td>Swimming Phool</td>
                     
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt" style="font-size:20px;color:red"></i></a></td>
                  </tr>
                  <tr>
                     <th class="amenid" scope="row">201</th>
                     <td>Swimming Phool</td>
                     
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt" style="font-size:20px;color:red"></i></a></td>
                  </tr>
                  <tr>
                     <th class="amenid" scope="row">201</th>
                     <td>Swimming Phool</td>
                     
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt" style="font-size:20px;color:red"></i></a></td>
                  </tr>
                  <tr>
                     <th class="amenid" scope="row">201</th>
                     <td>Swimming Phool</td>
                     
                     <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt" style="font-size:20px;color:red"></i></a></td>
                  </tr>
               </tbody>
            </table>
            <!------------------------------ Add Amenities ----------------------------------->
            <!-- Modal with Text area -->
            <div class="modal fade" id="addAmenities" tabindex="-1" role="dialog" aria-labelledby="AddamenitiesLabel" aria-hidden="true">
  <div id="canceldash" class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Amenities</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <!------------------form-group row ------------------------->

<div class="form-group row regfeild">
    <label for="inputEmail3" class="vendoramenco">Amenities : </label>
    <div class="col-sm-8">
        <input type="text" name="password" id="vendorPassword" class="vendorformamen" placeholder="Enter here">
    </div>
    
</div>
<!------------------form-group row ------------------------->

      </div>
      <div class="modal-footer">
        <button type="button" class="cancelmodalbtn" data-dismiss="modal">Add</button>
        
      </div>
    </div>
  </div>
</div>
<!-------------------Add Modal -------------------------------------->
<!------------------------------ Update Amenities ----------------------------------->
            <!-- Modal with Text area -->
            <div class="modal fade" id="updateAmenities" tabindex="-1" role="dialog" aria-labelledby="updateAmenitiesLabel" aria-hidden="true">
  <div id="canceldash" class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Amenities</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <!------------------form-group row ------------------------->

<div class="form-group row regfeild">
    <label for="inputEmail3" class="vendoramenco">Amenities : </label>
    <div class="col-sm-8">
        <input type="text" name="password" id="vendorPassword" class="vendorformamen" placeholder="Enter here">
    </div>
    
</div>
<!------------------form-group row ------------------------->

      </div>
      <div class="modal-footer">
        <button type="button" class="cancelmodalbtn" data-dismiss="modal">Update</button>
        
      </div>
    </div>
  </div>
</div>
<!-------------------Update Modal -------------------------------------->
<!------------------------------ Delete Amenities ----------------------------------->
            <!-- Modal with Text area -->
            <div class="modal fade" id="deleteAmenities" tabindex="-1" role="dialog" aria-labelledby="deleteAmenitiesLabel" aria-hidden="true">
            <div id="canceldash" class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete Amenities</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to Delete.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary yesamen" data-dismiss="modal">Yes</button>
        <button type="button" class="btn btn-primary noamen">No</button>
      </div>
    </div>
  </div>
    
</div>
<!------------------form-group row ------------------------->

      </div>
      
    </div>
  </div>
</div>
<!-------------------Delete Modal -------------------------------------->
</div><!--------------end of booking ----------------------------------> 

  </div><!-----------pills-amenities-tab ----------------------------->
            
</div><!----------------------------container-fluid-------------------------->
</div><!--------------v-pills-books -------------------------------->
<div class="row"></div>
<div class="row"></div>
      <!------- body end-------->
@include('shared/footer')
   <script type="text/javascript">
   
$(function () {
    $("#btnAdd").bind("click", function () {
        var div = $("<tr />");
        div.html(GetDynamicTextBox(""));
        $("#TextBoxContent").append(div);
    });
    $("body").on("click", ".remove", function () {
        $(this).closest("tr").remove();
    });
});
function GetDynamicTextBox(value) {
    return '<td><input name = "DynamicTextBox" type="text" value = "'
     + value + '" class="form-control" /></td>' + '<td><button type="button" class="btn btn-danger remove"><i class="far fa-times-circle"></i></i></button></td>'
}
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
     
     
  