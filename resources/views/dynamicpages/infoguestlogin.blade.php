@include('shared/header')
<link rel="stylesheet" type="text/css" href="{{ url('css/infoguestlogin.css') }}">
<div class="greydivider"> </div>
<div class="container-fluid" id="infologin">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                aria-controls="pills-home" aria-selected="true">
                <div class="step">1</div>
                <div class="bookinfo">Booking Info</div>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                aria-controls="pills-profile" aria-selected="false">
                <div class="step">2</div>
                <div class="bookinfo">Personal Info</div>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-payment-tab" data-toggle="pill" href="#pills-payment" role="tab"
                aria-controls="pills-payment" aria-selected="false">
                <div class="step">3</div>
                <div class="bookinfo">Payment Info</div>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-booking-tab" data-toggle="pill" href="#pills-booking" role="tab"
                aria-controls="pills-booking" aria-selected="false">
                <div class="step">4</div>
                <div class="bookinfo">Booking Confirmation</div>
            </a>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="container-fluid" id="bookinginfopro-bg">
                <div class="row bookingcust">
                    <div class="picbook">
                        <img src="svg/images/customer-profile11.jpg" alt="Mountains" class="img-responsive" style="width:300px; height:300px">
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 infobookingonline">
                        <div class="row custprofhead">
                            <h3 class="bkinfo-head"><b>La Fontaine La Plage Resort</b></h3>

                        </div>

                        <div class="row infolist">
                            <datetime>
                                <div class="icons-custone"><i class="fas fa-clipboard-list" style='font-size:19px; color:#6cc0b9'></i></div>
                                <div class="margincst">From:<b> July 16,2018<span class="spaceone">11:30 AM</span></b>&nbsp;<a
                                        href="#">Change </a> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; To:<b>July 16,2018<span
                                            class="spaceone"> 11:30 AM</span></b>&nbsp;<a href="#">Change </a></div>
                            </datetime>
                        </div>
                        <address>
                            <div class="icons-cust"><i class="fas fa-map-marker-alt" style="font-size:22px; color:#6cc0b9"></i></div>
                            <div class="margincst">Address:<b> 123 XYZRoad, Saudi Arabia </b><a href="#"> Show in map</a></div>
                        </address>
                        <div>
                            <div class="icons-custone"><i class="fas fa-users" style='font-size:18px; color:#6cc0b9'></i></div>
                            <div class="margincst"> Guest Capacity : <b>100 - 200</b></div>
                        </div>
                        <div class="row sarinfo"><span class="bold-grey">SAR : </span><b> 100 / Day</b></div>
                    </div>
                </div>
            </div>
            <!--------------------end of customerprofile ----------------------->
            <div class="container-fluid" id="contentbkinfo">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                ut aliquip
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.

            </div>
            <div class="container-fluid" id="servicebk">Services : <b>Catering, Lighting and Music</b></div>
            <div class="container-fluid" id="infologpane">

                <div class="panel-heading">5 Days and 4 Nights</div>
                <div class="panel-body">
                    <form>
                        <div class="row infolog">
                            <div class="col-20">
                                <label for="fname">Venue : </label>
                            </div>
                            <div class="col-25">
                                <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    style="border:none" value="SAR 500">
                            </div>
                        </div>
                        <!---- row infolog------------>
                        <div class="row infolog">
                            <div class="col-20">
                                <label for="lname">Expected Guests : </label>
                            </div>
                            <div class="col-25">
                                <input type="text" id="lname" name="lastname" placeholder="10">
                            </div>
                        </div>
                        <!---- row infolog------------>
                        <div class="row infolog">
                            <div class="col-20">
                                <label for="fname">Services : </label>
                            </div>
                            <div class="col-25">
                                <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    style="border:none" value="SAR 100">
                            </div>
                        </div>
                        <!---- row infolog------------>
                        <div class="row infolog">
                            <div class="col-20">
                                <label for="fname">Tax : </label>
                            </div>
                            <div class="col-25">
                                <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    style="border:none" value="8 %">
                            </div>
                        </div>
                        <!---- row infolog------------>
                        <div class="row infolog">
                            <div class="col-20">
                                <label for="fname">Sub-Total : </label>
                            </div>
                            <div class="col-25">
                                <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    style="border:none" value="SAR 756">
                            </div>
                        </div>
                        <!---- row infolog------------>
                        <div class="row infolog">
                            <div class="col-20">
                                <label for="fname">Service Fees : </label>
                            </div>
                            <div class="col-25">
                                <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    style="border:none" value="5%">
                            </div>
                        </div>
                        <!---- row infolog------------>
                        <div class="row infolog">
                            <div class="col-20">
                                <label for="fname">Total : </label>
                            </div>
                            <div class="col-25">
                                <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    style="border:none" value="800">
                            </div>
                        </div>
                        <!---- row infolog------------>
                        <div class="row infolog">
                            <div class="col-20">
                                <label for="fname">Note : </label>
                            </div>
                            <div class="col-25">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                        <!---- row infolog------------>
                        <div class="row infolog">
                            <div class="col-20">
                                <label for="lname"> </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">Terms & Conditions</label>
                            </div>

                        </div>
                        <!------------row infolog -------------------------->
                        <div class="row nextbtn">
                            <div class="col-15 btnnext">
                                <input type="submit" value="Next" class="uploadnext">
                            </div>

                        </div>
                        <!------- row ----------------->
                    </form>
                </div>
                <!---- panel-body ------------>

            </div>
            <!---infologpne ----------->

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
                    </div>
                    <!---- row infolog------------>
                    <div class="row infolog">
                        <div class="col-20">
                            <label for="lname">Father Name : </label>
                        </div>
                        <div class="col-25">
                            <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                        </div>
                    </div>
                    <!---- row infolog------------>
                    <div class="row infolog">
                        <div class="col-20">
                            <label for="fname">Family Name : </label>
                        </div>
                        <div class="col-25">
                            <input type="text" id="fname" name="firstname" placeholder="Your name..">
                        </div>
                    </div>
                    <!---- row infolog------------>
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
                    </div>
                    <!---- row infolog------------>
                    <div class="row infolog">
                        <div class="col-20">
                            <label for="fname">Email : </label>
                        </div>
                        <div class="col-25">
                            <input type="text" id="fname" name="firstname" placeholder="larasun@gmail.com">
                        </div>
                    </div>
                    <!---- row infolog------------>
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
                    </div>
                    <!---- row infolog------------>
                    <div class="row infolog">
                        <div class="col-20">
                            <label for="lname">Credit Card Number : </label>
                        </div>
                        <div class="col-25">
                            <input type="text" id="lname" name="lastname" placeholder="8741 9876 5621 3564">
                        </div>
                    </div>
                    <!---- row infolog------------>
                    <div class="row infolog">
                        <div class="col-20">
                            <label for="lname">Credit Card Number : </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                value="option1">
                            <label class="form-check-label" for="inlineRadio1">Booking for Myself</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                                aria-controls="collapseOne">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="option2">
                                <label class="form-check-label" for="inlineRadio2">Booking for Someone else</label>
                        </div>
                    </div>
                    <!------------row infolog -------------------------->
                    <div class="container-fluid" id="infodivider"> </div>
                    <div class="row infolog">
                        <div class="col-20">
                            <label for="fname">First Name : </label>
                        </div>
                        <div class="col-25">
                            <input type="text" id="fname" name="firstname" placeholder="Enter Guest First Name">
                        </div>
                    </div>
                    <div class="row infolog">
                        <div class="col-20">
                            <label for="fname">First Name : </label>
                        </div>
                        <div class="col-25">
                            <input type="text" id="fname" name="firstname" placeholder="Enter Guest Father Name">
                        </div>
                    </div>
                    <!---- row infolog------------>
                    <div class="row infolog">
                        <div class="col-20">
                            <label for="lname">Father Name : </label>
                        </div>
                        <div class="col-25">
                            <input type="text" id="lname" name="lastname" placeholder="Enter Father Name">
                        </div>
                    </div>
                    <!---- row infolog------------>

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
                    </div>
                    <!---- row infolog------------>
                    <div class="row infolog">
                        <div class="col-20">
                            <label for="fname">Email : </label>
                        </div>
                        <div class="col-25">
                            <input type="text" id="fname" name="firstname" placeholder="larasun@gmail.com">
                        </div>
                    </div>
                    <!---- row infolog------------>
                    <div class="row nextbtn">
                        <div class="col-15 btnnext">
                            <input type="submit" value="Next" class="uploadnext">
                        </div>

                    </div>
                    <!------- row ----------------->

                </form>
            </div>


        </div>
        <div class="tab-pane fade" id="pills-payment" role="tabpanel" aria-labelledby="pills-payment-tab">

            <div class="container-fluid" id="pytinfo">
                <div class="leftpyt">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1"><span class="">Full Payment</span><span
                                class="go-color"> SAR : </span>324</label>
                    </div>

                </div>
                <!----------------leftpyt------------------>
                <div class="rightpyt">
                    <div class="form-check form-check-inline">
                        <label data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                value="option2">
                            <label class="form-check-label" for="inlineRadio2">Advance Payment SAR : 151.2</label>
                            <div class="">
                                Pay 20 % (SAR. 151.2) now and pay remaining 80 % (SAR. 200) at venue
                                on arrival.
                            </div>
                    </div>
                </div>
                <!-------------rightpyt ----------------->
            </div>
            <!-------------pytinfo---------------->
            <div class="container-fluid" id="pyttabs">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-debit-tab" data-toggle="tab" href="#nav-debit" role="tab"
                            aria-controls="nav-debit" aria-selected="true">Debit Card</a>
                        <a class="nav-item nav-link" id="nav-netbank-tab" data-toggle="tab" href="#nav-netbank" role="tab"
                            aria-controls="nav-netbank" aria-selected="false">Net Banking</a>
                        <a class="nav-item nav-link" id="nav-credit-tab" data-toggle="tab" href="#nav-credit" role="tab"
                            aria- controls="nav-credit" aria-selected="false">Credit Card</a>
                        <a class="nav-item nav-link" id="nav-sadad-tab" data-toggle="tab" href="#nav-sadad" role="tab"
                            aria- controls="nav-sadad" aria-selected="false">Sadad</a>
                    </div>
                </nav>

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-debit" role="tabpanel" aria-labelledby="nav-debit-tab">
                        <div class="row crddetails">Please provide the card details</div>
                        <div class="row infolog">
                            <div class="col-35">
                                <input type="text" id="lname" name="lastname" placeholder="Card Number">
                            </div>
                        </div>
                        <!---- row infolog------------>
                        <div class="row infolog">
                            <div class="col-35">
                                <input type="text" id="lname" name="lastname" placeholder="Name on Card">
                            </div>
                        </div>
                        <!---- row infolog------------>
                        <div class="row infolog">
                            <span class="col-10">
                                <input type="text" id="month" name="lastname" placeholder="MM">
                            </span>
                            <span class="slashpyt"> /</span>
                            <span class="col-11">
                                <input type="text" id="monthn" name="lastname" placeholder="MM">
                            </span>
                        </div>
                        <!---- row infolog------------>
                        <div class="row infolog">

                            <span class="col-2">
                                <input type="text" id="monthn" name="lastname" placeholder="CVV">
                            </span>
                            <span class="ques"><i class="fas fa-question-circle"></i></span>
                        </div>
                        <!---- row infolog------------>
                        <div class="row infolog">

                            <div class="form-check form-check-inline" id="formchkpyt">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" id="savecrd" for="inlineCheckbox1">Save this card for
                                    faster checkout</label>
                            </div>
                        </div>
                        <!------------row infolog -------------------------->

                        <div class="row pytlink">
                            <a href="#" class="paynotbtn">Pay Now</a>
                        </div>
                        <div class="row notepyt">Note: After clicking on the "Pay Now" button, you will be redirected
                            to a secure payment gateway</div>
                        <div class="row termslink"><a href="#">Terms & Conditions</a> </div>
                    </div>
                    <!--------------------------debit ------------------>
                    <div class="tab-pane fade" id="nav-netbank" role="tabpanel" aria-labelledby="nav-netbank-tab">
                        update
                    </div>
                    <!---------------Net Banking --------------------------->
                    <div class="tab-pane fade" id="nav-credit" role="tabpanel" aria-labelledby="nav-credit-tab">
                        delete
                    </div>
                    <!---------------- credit Card ---------------------->
                    <div class="tab-pane fade" id="nav-sadad" role="tabpanel" aria-labelledby="nav-sadad-tab">
                        calling func
                    </div>
                    <!---------------- sadad ----------------------------->
                </div>
                <!-------------------------tabs closed ----------------------------->
            </div>
            <!----------------pyttabs -------------------------------->
        </div>
        <div class="tab-pane fade" id="pills-booking" role="tabpanel" aria-labelledby="pills-booking-tab">
            <div class="container-fluid" id="bkconfirm">
                <div class="booking">
                    <div class="booking-header">
                        <div class="row conghd">Congratulations!</div>
                        <div class="row bkhd"> Your booking is confirmed.</div>
                    </div>
                    <div class="booking-body">
                        <div class="row infolog">
                            <div class="col-20">
                                <label for="fname">Booking Number : </label>
                            </div>
                            <div class="col-25">
                                <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    style="border:none" value="MTNA0789456123">
                            </div>
                        </div>
                        <!---- row infolog------------>
                        <div class="row infolog">
                            <div class="col-20">
                                <label for="fname">Booking Date : </label>
                            </div>
                            <div class="col-25">
                                <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    style="border:none" value="8/July/2018">
                            </div>
                        </div>
                        <!---- row infolog------------>
                        <div class="row infolog">
                            <div class="col-20">
                                <label for="fname">Packages : </label>
                            </div>
                            <div class="col-25">
                                <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    style="border:none" value="Deserts, Chocolates and Cakes">
                            </div>
                        </div>
                        <!---- row infolog------------>
                        <div class="row infolog">
                            <div class="col-20">
                                <label for="fname">Venue Name : </label>
                            </div>
                            <div class="col-25">
                                <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    style="border:none" value="La Fountaine La Plage Resort">
                            </div>
                        </div>
                        <!---- row infolog------------>
                        <div class="row infolog">
                            <div class="col-20">
                                <label for="fname">Venue Address : </label>
                            </div>
                            <div class="col-25">
                                <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    style="border:none" value="123 Avenue Road">
                            </div>
                        </div>
                        <!---- row infolog------------>
                        <div class="row infolog">
                            <div class="col-20">
                                <label for="fname">Date : </label>
                            </div>
                            <div class="col-25">
                                <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    style="border:none" value="30/July/2018">
                            </div>
                        </div>
                        <!---- row infolog------------>
                        <div class="row infolog">
                            <div class="col-20">
                                <label for="fname">Attached Event Organiser : </label>
                            </div>
                            <div class="col-25">
                                <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    style="border:none" value="Event Organiser Name">
                            </div>
                        </div>
                        <!---- row infolog------------>
                        <div class="row infolog">
                            <div class="col-20">
                                <label for="fname">Attached Venue : </label>
                            </div>
                            <div class="col-25">
                                <input type="text" readonly class="form-control-plaintext" id="fname" name="firstname"
                                    style="border:none" value="Venue Name">
                            </div>
                        </div>
                        <!---- row infolog------------>
                    </div>
                    <div class="booking-footer">Total Price: SAR.756</div>
                </div>
                <!---------------booking ------------------------------------>
            </div>
            <!----------------------bkconfirm ----------------------------->
            <div class="container-fluid" id="bkconftext">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua. Ut enim ad minim veniam,
            </div>
            <!--------------bkconftext ------------------->
            <div class="container-fluid" id="buttonlink">

                <a href="#" class="bookconfshr" role="button">Share</a>
                <a href="#" class="bookconflink active" role="submit">Done</a>

            </div>
            <!----------------------buttonlink ---------------------->
        </div>
    </div>
    <!----------end of tabs ----------------->

</div>
</div>
</div>
</div>
</div>


<!---------------------------- Thumbnail carousel start --------------------------------->

<div class="row"> </div>
@include('shared/footer')
<script>
    $('#r11').on('click', function () {
        $(this).parent().find('a').trigger('click')
    });

    $('#r12').on('click', function () {
        $(this).parent().find('a').trigger('click')
    });

</script>
