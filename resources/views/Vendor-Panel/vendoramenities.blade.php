

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
 
   


  </div><!-----------------v-pills-profiles ------------------------------->
  <div>
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
                <?php $slno = 1;?>
                  @foreach($data['amenities'] as $amenitie)
                 <?php  $encoded_data = base64_encode(json_encode($amenitie))?>
                 <?php  $amentie_id = $amenitie->id?>
                  <tr>
                     <th class="amenid" scope="row">{!! $slno++ !!}</th>
                     <td>{!! $amenitie->name !!}</td>
                     
                     <td class="bg-white-booking"><a href="#"><i data-toggle="modal" data-target="#updateAmenities" class="fas fa-pencil-alt editamentieButton" style="font-size:20px;color:#6cc0b9" data-data="{!! $encoded_data !!}"></i></a></td>
                     <td class="bg-white-booking"><a id="myCancel" href="#"><i data-toggle="modal" data-target="#deleteAmenities" class="fas fa-trash-alt deleteamenetie" style="font-size:20px;color:red" data-data="{!! $encoded_data !!}"></i></a></td>
                  </tr>
                 @endforeach
               </tbody>
            </table>
            <!------------------------------ Add Amenities ----------------------------------->
            <!-- Modal with Text area -->
            <form method="post" id="" action = "{{url('add_amenities')}}" enctype="multipart/form-data">
             @csrf
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
        <input type="text" name="name" id="name" class="vendorformamen" placeholder="name">
          <div id="name-error" class="error-class"></div>
    </div>
    
</div>
<div class="form-group row regfeild">
      <label for="inputEmail3" class="vendoramenco">Description : </label>
      <div class="col-sm-8">
          <input type="text" name="description" id="description" class="vendorformamen" placeholder="description">
          <div id="description-error" class="error-class"></div>
      </div>
  </div>
<!------------------form-group row ------------------------->

      </div>
      <div class="modal-footer">
        <button type="submit" class="cancelmodalbtn">Add</button>
        
      </div>
    </div>
  </div>
</div>
</form>
<!-------------------Add Modal -------------------------------------->
<!------------------------------ Update Amenities ----------------------------------->
            <!-- Modal with Text area -->
            <form method="post" id="" action = "{{url('edit_amenities')}}" enctype="multipart/form-data">
             @csrf
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
<input type = "hidden" name="amentie_id" id="id">
<div class="form-group row regfeild">
    <label for="inputEmail3" class="vendoramenco">Amenities : </label>
    <div class="col-sm-8">
        <input type="text" name="name" id="name" class="vendorformamen" placeholder="Enter here">
         <div id="name-error" class="error-class"></div>
    </div>
    
</div>
<div class="form-group row regfeild">
      <label for="inputEmail3" class="vendoramenco">Description : </label>
      <div class="col-sm-8">
          <input type="text" name="description" id="short_description" class="vendorformamen" placeholder="description">
          <div id="description-error" class="error-class"></div>
      </div>
  </div>
<!------------------form-group row ------------------------->

      </div>
      <div class="modal-footer">
        <button type="submit" class="cancelmodalbtn">Update</button>
       
        
      </div>
    </div>
  </div>
</div>
</form>
<!-------------------Update Modal -------------------------------------->
<!------------------------------ Delete Amenities ----------------------------------->
            <!-- Modal with Text area -->
            <form method="post" id="" action = "{{url('deleteamenities')}}" enctype="multipart/form-data">
             @csrf
            <div class="modal fade" id="deleteAmenities" tabindex="-1" role="dialog" aria-labelledby="deleteAmenitiesLabel" aria-hidden="true">
            <div id="canceldash" class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete Amenities</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <input type = "hidden" name="amentie_id" id="id">
      <div class="modal-body">
        <p>Are you sure you want to Delete.</p>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary  yesamen">Yes</button>
        <button type="button" class="btn btn-primary noamen">No</button>
      </div>
    </div>
  </div>
    
</div>
</form>
<!------------------form-group row ------------------------->

  
<!-------------------Delete Modal -------------------------------------->
</div><!--------------end of booking ----------------------------------> 

  </div><!-----------pills-amenities-tab ----------------------------->
        
</div><!----------------------------container-fluid-------------------------->
</div><!--------------v-pills-books -------------------------------->


</div><!----------------------vendorpan-tab ------------------------------------>
<div class="tab-pane fade" id="pills-suplpan" role="tabpanel" aria-labelledby="pills-suplpan-tab">
trigger
</div><!-------------------------------suplpan--------------------------------->
<div class="tab-pane fade" id="pills-eventpan" role="tabpanel" aria-labelledby="pills-eventpan-tab">
    globalus
</div><!----------------------------eventpan-tab-------------------------->
</div><!--------------tab-content --------------------->
</div><!-------------------------globevendorpanel--------------------------->
  
      <!------- body end-------->
@include('shared/footer')
<script src="js/amenitie.js" type="text/javascript" charset="utf-8"></script>
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

  $('.table').on('click', '.editamentieButton', function(){

       encoded_data = $(this).data('data');
       decoded_data = atob(encoded_data);
       $.each(JSON.parse(decoded_data), function(key, value){

         $('#updateAmenities #'+key).val(value);
       })

       $('#updateAmenities .error-class').empty();
       $('#updateAmenities').modal('show');
   });
  $('.table').on('click', '.deleteamenetie', function(){

       encoded_data = $(this).data('data');
       decoded_data = atob(encoded_data);
       $.each(JSON.parse(decoded_data), function(key, value){

         $('#deleteAmenities #'+key).val(value);
       })

       $('#deleteAmenities .error-class').empty();
       $('#deleteAmenities').modal('show');
   });
});
</script>
     
    