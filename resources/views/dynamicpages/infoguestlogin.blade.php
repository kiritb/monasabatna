@include('header')
<div class="container-fluid" id="greydivider"> </div>
<div class="container-fluid" id="infologin">
             <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><div class="step">1</div><div class="bookinfo">Booking Info</div></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><div class="step">2</div><div class="bookinfo">Personal Info</div></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-payment-tab" data-toggle="pill" href="#pills-payment" role="tab" aria-controls="pills-payment" aria-selected="false"><div class="step">3</div><div class="bookinfo">Payment Info</div></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-booking-tab" data-toggle="pill" href="#pills-booking" role="tab" aria-controls="pills-booking" aria-selected="false"><div class="step">4</div><div class="bookinfo">Booking Confirmation</div></a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
  upcoming
</div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
  <div class="container guestlog">
  <form>
  <div class="row infolog">
      <div class="col-20">
        <label for="fname">First Name : </label>
      </div>
      <div class="col-25">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div><!---- row infolog------------>
    <div class="row infolog">
      <div class="col-20">
        <label for="lname">Father Name : </label>
      </div>
      <div class="col-25">
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div><!---- row infolog------------>
    <div class="row infolog">
      <div class="col-20">
        <label for="fname">Family Name : </label>
      </div>
      <div class="col-25">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div><!---- row infolog------------>
    <div class="row infolog">
      <div class="col-20">
        <label for="lname">Phone : </label>
      </div>
      <div class="col-15">
        <select id="country" name="country">
          <option value="australia">677</option>
          <option value="canada">987</option>
          <option value="usa">345</option>
        </select>
      </div>
      <div class="col-18 addphone">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div><!---- row infolog------------>
    <div class="row infolog">
      <div class="col-20">
        <label for="fname">Email : </label>
      </div>
      <div class="col-25">
        <input type="text" id="fname" name="firstname" placeholder="larasun@gmail.com">
      </div>
    </div><!---- row infolog------------>
    <div class="row infolog">
      <div class="col-20">
        <label for="lname">Attach Iqama/Passport : </label>
      </div>
      <div class="col-25">
        <input type="text" id="lname" name="lastname" placeholder="Passport_Jpeg">
      </div>
      <div class="col-15 updbtn">
      <input type="submit" value="upload" class="uploadsub">
    </div>
    </div><!---- row infolog------------>
    <div class="row infolog">
      <div class="col-20">
        <label for="lname">Credit Card Number : </label>
      </div>
      <div class="col-25">
        <input type="text" id="lname" name="lastname" placeholder="8741 9876 5621 3564">
      </div>
    </div><!---- row infolog------------>
    <div class="row infolog">
    <div class="col-20">
        <label for="lname">Credit Card Number : </label>
      </div>
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Booking for Myself</label>
</div>
<div class="form-check form-check-inline">
<label data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  class="form-check-label" for="inlineRadio2">Booking for Someone else</label>
</div>
</div><!------------row infolog -------------------------->
    <div class="container-fluid" id="infodivider"> </div>
    <div class="row infolog">
      <div class="col-20">
        <label for="fname">First Name : </label>
      </div>
      <div class="col-25">
        <input type="text" id="fname" name="firstname" placeholder="Enter Guest First Name">
      </div>
    </div>	    <div class="row infolog">
      <div class="col-20">
        <label for="fname">First Name : </label>
      </div>
      <div class="col-25">
        <input type="text" id="fname" name="firstname" placeholder="Enter Guest Father Name">
      </div>
    </div><!---- row infolog------------>
    <div class="row infolog">
      <div class="col-20">
        <label for="lname">Father Name : </label>
      </div>
      <div class="col-25">
        <input type="text" id="lname" name="lastname" placeholder="Enter Father Name">
      </div>
    </div><!---- row infolog------------>
    
    <div class="row infolog">
      <div class="col-20">
        <label for="lname">Phone : </label>
      </div>
      <div class="col-15">
        <select id="country" name="country">
          <option value="australia">345</option>
          <option value="canada">999</option>
          <option value="usa">657</option>
        </select>
      </div>
      <div class="col-18 addphone">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div><!---- row infolog------------>
    <div class="row infolog">
      <div class="col-20">
        <label for="fname">Email : </label>
      </div>
      <div class="col-25">
        <input type="text" id="fname" name="firstname" placeholder="larasun@gmail.com">
      </div>
    </div><!---- row infolog------------>
    <div class="row nextbtn">
    <div class="col-15 btnnext">
      <input type="submit" value="Next" class="uploadnext">
    </div>

    </div><!------- row ----------------->

  </form>
</div>
  
  
</div>
<div class="tab-pane fade" id="pills-payment" role="tabpanel" aria-labelledby="pills-payment-tab">
    
    devapp

</div>
<div class="tab-pane fade" id="pills-booking" role="tabpanel" aria-labelledby="pills-booking-tab">
    
         dashboard

</div>
</div>
</div>
</div>
</div>
</div>
</div>


<!---------------------------- Thumbnail carousel start --------------------------------->

<div class="row"> </div>
@include('footer')

<!------- body end-------->

<script type="text/javascript">
    $(document).ready(function () {
        $("#datepicker").datepicker();
        $('.fa-calendar').click(function () {
            $("#datepicker").focus();
        });

        $(".nav-tabs a").click(function () {
            $(this).tab('show');
        });

        $('.nav-tabs a').on('shown.bs.tab', function (event) {
            var x = $(event.target).text(); // active tab
            var y = $(event.relatedTarget).text(); // previous tab
            $(".act span").text(x);
            $(".prev span").text(y);
        });
    });

    $(function () {
        $('a[data-toggle="tab"]').on('click', function (e) {
            window.localStorage.setItem('activeTab', $(e.target).attr('href'));
        });
        var activeTab = window.localStorage.getItem('activeTab');
        if (activeTab) {
            $('#myDetailTab a[href="' + activeTab + '"]').tab('show');
            window.localStorage.removeItem("activeTab");
        }
    });

</script>
