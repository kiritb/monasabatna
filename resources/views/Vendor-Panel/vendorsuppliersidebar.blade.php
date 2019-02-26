
 <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  <a class="nav-link" id="v-pills-books-tab" href="{{ url('supplierbookings') }}">Bookings</a>
  <a class="nav-link" id="v-pills-services-tab" href="{{ url('supplierevents') }}">Events Types & Packages</a>
  <ul class="submenu">
        <li><a href="{{ url('suppliereventtype') }}" id="v-pills-services-tab">Event Types</a></li>
        <li><a href="{{ url('supplierpackagetype') }}" id="v-pills-services-tab">Packages</a></li>
      </ul>
  <a class="nav-link" id="v-pills-policies-tab" href="{{ url('supplierproducts') }}">Supply Products / Services</a>
  <a class="nav-link" id="v-pills-amenities-tab" href="{{ url('supplierterms') }}">Terms and Policies</a>
</div>
<script src="{{ url('vendors/jquery/jquery3.3.1.min.js') }}" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
  $(document).ready(function () {
     var url = window.location.pathname;
     var uri = '{{ Request::segment(1) }}';
        if(uri == 'supplierbookings'){
          $("#v-pills-books-tab").addClass('active');
        }
        else if(uri == 'supplierevents' || uri == 'dashboardserviceform'){
          $("#v-pills-services-tab").addClass('active');
        }
        else if(uri == 'supplierservices'){
          $("#v-pills-policies-tab").addClass('active');
        }
        else if(uri == 'supplierterms' || uri == 'add_amenities' || uri == 'edit_amenities' || uri == 'deleteamenities'){
          $("#v-pills-amenities-tab").addClass('active');
        }
});

</script>