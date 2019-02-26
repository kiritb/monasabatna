<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

   <li class="nav-item">
     <a class="nav-link" id="pills-vendorpan-tab" href="{{ url('vendorbookings') }}">Venues </a>
  </li>
  <li class="nav-item">
  <a class="nav-link" id="pills-suplpan-tab" href="{{ url('supplierbookings') }}">Supplier </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-eventpan-tab" data-toggle="pill" href="{{ url('eventorgbookings') }}" role="tab" aria-controls="pills-eventpan" aria-selected="false">Event Organisers</a>
  </li>
</ul>
<script src="{{ url('vendors/jquery/jquery3.3.1.min.js') }}" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
  $(document).ready(function () {
     var url = window.location.pathname;
     var uri = '{{ Request::segment(1) }}';

        if(uri == 'vendorbookings' || uri == 'vendorvenue' || uri == 'dashboardvenueform' || uri == 'vendorservices' || uri == 'dashboardserviceform' || uri == 'vendorprofile' || uri == 'vendorterms' || uri == 'vendoramenities' || uri == 'add_amenities' || uri == 'edit_amenities' || uri == 'deleteamenities'){
          $("#pills-vendorpan-tab").addClass('active');
        }
        else if(uri == 'supplierbookings' || uri == 'supplierevents' || uri == 'supplierservices' || uri == 'supplierterms' || uri == 'dashboardserviceform' || uri == 'vendorprofile' || uri == 'vendorterms' || uri == 'vendoramenities' || uri == 'add_amenities' || uri == 'edit_amenities' || uri == 'deleteamenities'){
          $("#pills-suplpan-tab").addClass('active');
        }
        else if(uri == 'eventorgbookings' || uri == 'eventorgvenue' || uri == 'eventorg' || uri == 'vendorservices' || uri == 'dashboardserviceform' || uri == 'vendorprofile' || uri == 'vendorterms' || uri == 'vendoramenities' || uri == 'add_amenities' || uri == 'edit_amenities' || uri == 'deleteamenities'){
          $("#pills-eventpan-tab").addClass('active');
        }
});

</script>