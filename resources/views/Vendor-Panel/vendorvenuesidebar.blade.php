
 <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  <a class="nav-link" id="v-pills-books-tab" href="{{ url('vendorbookings') }}">Bookings</a>
  <a class="nav-link" id="v-pills-venues-tab" href="{{ url('vendorvenue') }}">Venue </a>
  <a class="nav-link" id="v-pills-services-tab" href="{{ url('vendorservices') }}">Services</a>
  <a class="nav-link" id="v-pills-policies-tab" href="{{ url('vendorterms') }}">Terms & Policies</a>

  <a class="nav-link" id="v-pills-amenities-tab" href="{{ url('vendoramenities') }}">Amenities</a>
</div>
<script src="{{ url('vendors/jquery/jquery3.3.1.min.js') }}" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
  $(document).ready(function () {
     var url = window.location.pathname;
     var uri = '{{ Request::segment(1) }}';
        if(uri == 'vendorbookings'){
          $("#v-pills-books-tab").addClass('active');
        }
        else if(uri == 'vendorvenue' || uri == 'dashboardvenueform'){
          $("#v-pills-venues-tab").addClass('active');
        }
        else if(uri == 'vendorservices' || uri == 'dashboardserviceform'){
          $("#v-pills-services-tab").addClass('active');
        }
        else if(uri == 'vendorprofile'){
          $("#v-pills-profiles-tab").addClass('active');
        }
        else if(uri == 'vendorterms'){
          $("#v-pills-policies-tab").addClass('active');
        }
        else if(uri == 'vendoramenities' || uri == 'add_amenities' || uri == 'edit_amenities' || uri == 'deleteamenities'){
          $("#v-pills-amenities-tab").addClass('active');
        }
});

</script>