@include('shared/headercustom')
<link rel="stylesheet" type="text/css" href="{{ url('css/vendor-panel/superadmin.css') }}">
<!------- body start-------->
<div class="greydivider"> </div>
<div class="container-fluid" id="globevendorpanel">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="pills-vendorpan-tab" data-toggle="pill" href="#pills-vendorpan" role="tab"
                aria-controls="pills-vendorpan" aria-selected="true">Venues</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-suplpan-tab" data-toggle="pill" href="#pills-suplpan" role="tab"
                aria-controls="pills-suplpan" aria-selected="false">Supplier</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-eventpan-tab" data-toggle="pill" href="#pills-eventpan" role="tab"
                aria-controls="pills-eventpan" aria-selected="false">Event Organisers</a>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-vendorpan" role="tabpanel" aria-labelledby="pills-vendorpan-tab">
            <div class="container-fluid" id="dashboardcontent">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-books-tab" data-toggle="pill" href="#v-pills-books" role="tab"
                        aria-controls="v-pills-books" aria-selected="true">Bookings</a>
                    <a class="nav-link" id="v-pills-venues-tab" data-toggle="pill" href="#v-pills-venues" role="tab"
                        aria-controls="v-pills-venues" aria-selected="false">Venue </a>
                    <a class="nav-link" id="v-pills-services-tab" data-toggle="pill" href="#v-pills-services" role="tab"
                        aria-controls="v-pills-services" aria-selected="false">Services</a>
                    <a class="nav-link" id="v-pills-policies-tab" data-toggle="pill" href="#v-pills-policies" role="tab"
                        aria-controls="v-pills-policies" aria-selected="false">Terms & Policies</a>
                    <a class="nav-link" id="v-pills-profiles-tab" data-toggle="pill" href="#v-pills-profiles" role="tab"
                        aria-controls="v-pills-profiles" aria-selected="false">Profile</a>
                    <a class="nav-link" id="v-pills-amenities-tab" data-toggle="pill" href="#v-pills-amenities" role="tab"
                        aria-controls="v-pills-amenities" aria-selected="false">Amenities</a>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-books" role="tabpanel" aria-labelledby="v-pills-books-tab">
                        <!------------------------tabs start for bookings ----------------------------------->
                        <div class="container-fluid" id="dashboardtabs">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-current-tab" data-toggle="pill" href="#pills-current"
                                        role="tab" aria-controls="pills-current" aria-selected="true">Current Bookings</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-history-tab" data-toggle="pill" href="#pills-history"
                                        role="tab" aria-controls="pills-history" aria-selected="false">Booking History</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-cancel-tab" data-toggle="pill" href="#pills-cancel"
                                        role="tab" aria-controls="pills-cancel" aria-selected="false">Cancel Bookings</a>
                                </li>
                                <li class="nav-item">
                                    <div class="col-md-3">
                                        <div class="search-container">
                                            <form class="navbar-form" role="search">
                                                <div class="input-group add-on">
                                                    <input class="form-control" placeholder="Search" name="srch-term"
                                                        id="srch-term" type="text">
                                                    <div class="input-group-btn">
                                                        <button type="submit"><i class="fa fa-search"></i></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>


                                    </div>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-current" role="tabpanel"
                                    aria-labelledby="pills-current-tab">
                                    <div class="dashboardright">
                                        <table class="table table-xs-12 table-sm-12 table-md-12">
                                            <thead class="table-color-head">
                                                <tr>
                                                    <th scope="col">Booking ID</th>
                                                    <th scope="col">Room ID </th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Arrive</th>
                                                    <th scope="col">Depart</th>
                                                    <th scope="col">Venue</th>

                                                </tr>
                                            </thead>
                                            <tbody class="table-hover">
                                                <tr>
                                                    <th scope="row">MTNA04879564</th>
                                                    <td>201</td>
                                                    <td>John Deo</td>
                                                    <td>johndeo@gmail.com</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>200</td>

                                                    <td class="bg-white-booking"><a data-toggle="modal" data-target="#myBookingOTP"
                                                            href="#"><i class="fas fa-check-circle" style="font-size:20px;color:#6cc0b9"></i></a></td>
                                                    <td class="bg-white-booking"><a data-toggle="modal" data-target="#cancelBooking"
                                                            href="#"><i class="fas fa-times-circle" style="font-size:20px;color:red"></i></a></td>
                                                    <td class="bg-white-booking"><a data-toggle="modal" data-target="#viewbookingsmodal"
                                                            href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">MTNA04879564</th>
                                                    <td>201</td>
                                                    <td>John Deo</td>
                                                    <td>johndeo@gmail.com</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>200</td>

                                                    <td class="bg-white-booking"><a href="#"><i class="fas fa-check-circle"
                                                                style="font-size:20px;color:#6cc0b9"></i></a></td>
                                                    <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle"
                                                                style="font-size:20px;color:red"></i></a></td>
                                                    <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                                style='font-size:20px;color:#66b85d'></i></a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">MTNA04879564</th>
                                                    <td>201</td>
                                                    <td>John Deo</td>
                                                    <td>johndeo@gmail.com</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>200</td>

                                                    <td class="bg-white-booking"><a href="#"><i class="fas fa-check-circle"
                                                                style="font-size:20px;color:#6cc0b9"></i></a></td>
                                                    <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle"
                                                                style="font-size:20px;color:red"></i></a></td>
                                                    <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                                style='font-size:20px;color:#66b85d'></i></a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">MTNA04879564</th>
                                                    <td>201</td>
                                                    <td>John Deo</td>
                                                    <td>johndeo@gmail.com</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>200</td>

                                                    <td class="bg-white-booking"><a href="#"><i class="fas fa-check-circle"
                                                                style="font-size:20px;color:#6cc0b9"></i></a></td>
                                                    <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle"
                                                                style="font-size:20px;color:red"></i></a></td>
                                                    <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                                style='font-size:20px;color:#66b85d'></i></a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">MTNA04879564</th>
                                                    <td>201</td>
                                                    <td>John Deo</td>
                                                    <td>johndeo@gmail.com</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>200</td>

                                                    <td class="bg-white-booking"><a href="#"><i class="fas fa-check-circle"
                                                                style="font-size:20px;color:#6cc0b9"></i></a></td>
                                                    <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle"
                                                                style="font-size:20px;color:red"></i></a></td>
                                                    <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                                style='font-size:20px;color:#66b85d'></i></a></td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">MTNA04879564</th>
                                                    <td>201</td>
                                                    <td>John Deo</td>
                                                    <td>johndeo@gmail.com</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>200</td>

                                                    <td class="bg-white-booking"><a href="#"><i class="fas fa-check-circle"
                                                                style="font-size:20px;color:#6cc0b9"></i></a></td>
                                                    <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle"
                                                                style="font-size:20px;color:red"></i></a></td>
                                                    <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                                style='font-size:20px;color:#66b85d'></i></a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">MTNA04879564</th>
                                                    <td>201</td>
                                                    <td>John Deo</td>
                                                    <td>johndeo@gmail.com</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>200</td>
                                                    <td class="bg-white-booking"><a href="#"><i class="fas fa-check-circle"
                                                                style="font-size:20px;color:#6cc0b9"></i></a></td>
                                                    <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle"
                                                                style="font-size:20px;color:red"></i></a></td>
                                                    <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                                style='font-size:20px;color:#66b85d'></i></a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">MTNA04879564</th>
                                                    <td>201</td>
                                                    <td>John Deo</td>
                                                    <td>johndeo@gmail.com</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>200</td>
                                                    <td class="bg-white-booking"><a href="#"><i class="fas fa-check-circle"
                                                                style="font-size:20px;color:#6cc0b9"></i></a></td>
                                                    <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle"
                                                                style="font-size:20px;color:red"></i></a></td>
                                                    <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                                style='font-size:20px;color:#66b85d'></i></a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">MTNA04879564</th>
                                                    <td>201</td>
                                                    <td>John Deo</td>
                                                    <td>johndeo@gmail.com</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>200</td>
                                                    <td class="bg-white-booking"><a href="#"><i class="fas fa-check-circle"
                                                                style="font-size:20px;color:#6cc0b9"></i></a></td>
                                                    <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle"
                                                                style="font-size:20px;color:red"></i></a></td>
                                                    <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                                style='font-size:20px;color:#66b85d'></i></a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">MTNA04879564</th>
                                                    <td>201</td>
                                                    <td>John Deo</td>
                                                    <td>johndeo@gmail.com</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>200</td>
                                                    <td class="bg-white-booking"><a href="#"><i class="fas fa-check-circle"
                                                                style="font-size:20px;color:#6cc0b9"></i></a></td>
                                                    <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle"
                                                                style="font-size:20px;color:red"></i></a></td>
                                                    <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                                style='font-size:20px;color:#66b85d'></i></a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">MTNA04879564</th>
                                                    <td>201</td>
                                                    <td>John Deo</td>
                                                    <td>johndeo@gmail.com</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>200</td>
                                                    <td class="bg-white-booking"><a href="#"><i class="fas fa-check-circle"
                                                                style="font-size:20px;color:#6cc0b9"></i></a></td>
                                                    <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle"
                                                                style="font-size:20px;color:red"></i></a></td>
                                                    <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                                style='font-size:20px;color:#66b85d'></i></a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">MTNA04879564</th>
                                                    <td>201</td>
                                                    <td>John Deo</td>
                                                    <td>johndeo@gmail.com</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>200</td>
                                                    <td class="bg-white-booking"><a href="#"><i class="fas fa-check-circle"
                                                                style="font-size:20px;color:#6cc0b9"></i></a></td>
                                                    <td class="bg-white-booking"><a data-toggle="modal" data-target="#exampleModal"
                                                            id="myCancel" href="#"><i class="fas fa-times-circle" style="font-size:20px;color:red"></i></a></td>
                                                    <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                                style='font-size:20px;color:#66b85d'></i></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--------------end of booking ---------------------------------->
                                </div>
                                <!-------------------- tab-pane fade ------------------------->
                                <div class="modal fade" id="myBookingOTP" tabindex="-1" role="dialog" aria-labelledby="myBookingOTPLabel"
                                    aria-hidden="true">
                                    <div id="codedash" class="modal-dialog">
                                        <div class="modal-content">
                                            <form class="form-horizontal text-center" method="post" id="otp_verify_form">
                                                <!-- Modal Header -->
                                                <div class="modal-header text-center">
                                                    <h3 class="modal-title">Booking Code</h3>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <h6 style="text-align:center">Please enter booking code provided by
                                                        customer in order to close the booking.</h6>

                                                    <div class="panel panel-default panel-body custom-code">
                                                        <div class="otpholder"></div>
                                                        <div id="divOuter">
                                                            <div id="divInner">
                                                                <input name="otp" id="partitioned" type="text"
                                                                    maxlength="4" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Modal footer -->
                                                <div class="modal-footer">

                                                    <input type="button" data-toggle="modal" id="AddexpressLabel"
                                                        data-target="#Addexpress" class="btn btn-lg-12 custom-button"
                                                        value="Submit">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!----------- Booking code -------------->
                                <!------------------------------ Payment Details ----------------------------------->
                                <div class="modal fade" id="Addexpress" tabindex="-1" role="dialog" aria-labelledby="AddexpressLabel"
                                    aria-hidden="true">
                                    <div id="paymentdash" class="modal-dialog">
                                        <div class="modal-content">
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h3 class="modal-title">Payment Details</h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">Ã—</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="content-payment">
                                                <div class="form-group row">
                                                    <div class="col-30">
                                                        <label for="fname">Payment Type : </label>
                                                    </div>
                                                    <div id="pyttype" class="col-sm-5">
                                                        <select class="form-control" id="exampleFormControlSelect1">
                                                            <option>Cash</option>
                                                            <option>Span</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <!------------form-group row --------------------->
                                                <div class="form-group row">
                                                    <div class="col-30">
                                                        <label for="fname">Payment Type : </label>
                                                    </div>
                                                    <div id="pytstatus" class="col-sm-5">
                                                        <select class="form-control" id="exampleFormControlSelect1">
                                                            <option>Pending</option>
                                                            <option>Closed</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <!------------form-group row --------------------->
                                            </div>
                                            <!-----------content-payment ----------------------->
                                            <!-- Modal footer -->
                                            <div class="modal-footer">

                                                <!---<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--->
                                                <button data-toggle="modal" id="closeModal" data-target="#closeModallabel"
                                                    type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-------------------------------Payment Details ------------------------------------>
                                <!------------------------------ Cancel Booking ----------------------------------->
                                <!-- Modal with Text area -->
                                <div class="modal fade" id="cancelBooking" tabindex="-1" role="dialog" aria-labelledby="CancelBooking"
                                    aria-hidden="true">
                                    <div id="canceldash" class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Cancel Booking</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Please mention the reason of cancellation
                                                <div class="colcancelbook">
                                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                                        rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="cancelmodalbtn" data-dismiss="modal">Close</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to close the booking.
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-----------------------------cancel Booking --------------------------------------------->
                                <!-------------------------------------View Bookings Modal -------------------------------->
                                <div class="modal fade" id="viewbookingsmodal" tabindex="-1" role="dialog"
                                    aria-labelledby="mybookingsviewmodalLabel" aria-hidden="true">
                                    <div id="viewvenuebk" class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">View Venue Details</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-1">
                                                            <label for="inputEmail4">Room ID :</label>
                                                            <input type="text" readonly class="form-control-plaintext"
                                                                id="fname" name="firstname" value="B502">
                                                        </div>
                                                        <!-------------form-group -------------------->
                                                        <div class="form-group col-md-2">
                                                            <label for="inputEmail4">Booking ID :</label>
                                                            <input type="text" readonly class="form-control-plaintext"
                                                                id="fname" name="firstname" value="B502">
                                                        </div>
                                                        <!-------------form-group -------------------->

                                                        <div class="form-group col-md-2">
                                                            <label for="inputPassword4">Venue Name :</label>
                                                            <input type="text" readonly class="form-control-plaintext"
                                                                id="fname" name="firstname" value="Party">
                                                        </div>
                                                        <div class="form-group col-md-2">
                                                            <label for="inputAddress">Customer Name :</label>
                                                            <input type="text" readonly class="form-control-plaintext"
                                                                id="fname" name="firstname" value="Shirish Sharma">
                                                        </div>
                                                        <div class="form-group col-md-2">
                                                            <label for="inputAddress2">Mobile:</label>
                                                            <input type="text" readonly class="form-control-plaintext"
                                                                id="fname" name="firstname" value="9008065432">
                                                        </div>

                                                        <div class="form-group col-md-2">
                                                            <label for="inputAddress2">Email :</label>
                                                            <input type="text" readonly class="form-control-plaintext"
                                                                id="fname" name="firstname" value="sundarma@gmail.com">
                                                        </div>

                                                    </div>
                                                    <!--------------end of row ---------------------------------->
                                                    <div class="form-row">
                                                        <div class="form-group col-md-2">
                                                            <label for="inputAddress2">Date From :</label>
                                                            <input type="text" readonly class="form-control-plaintext"
                                                                id="fname" name="firstname" value="22/10/2019 12:15 am">
                                                        </div>
                                                        <div class="form-group col-md-2">
                                                            <label for="inputPassword4">Date To :</label>
                                                            <input type="text" readonly class="form-control-plaintext"
                                                                id="fname" name="firstname" value="24/10/2019 12:15 am">
                                                        </div>
                                                        <div class="form-group col-md-2">
                                                            <label for="inputAddress">Total Days : </label>
                                                            <input type="text" readonly class="form-control-plaintext"
                                                                id="fname" name="firstname" value="2 Days">
                                                        </div>
                                                        <div class="form-group col-md-2">
                                                            <label for="inputAddress2">Service Chosen : </label>
                                                            <input type="text" readonly class="form-control-plaintext"
                                                                id="fname" name="firstname" value="Birthday Party">
                                                        </div>
                                                        <div class="form-group col-md-2">
                                                            <label for="inputAddress2">Delivery Address : </label>
                                                            <input type="text" readonly class="form-control-plaintext"
                                                                id="fname" name="firstname" value="India">
                                                        </div>


                                                    </div>
                                                    <!----------------------end of row --------------------------->
                                                    <div class="form-row">
                                                        <div class="form-group sttimeven">
                                                            <label for="inputAddress2">Revenue (SAR) :</label>
                                                            <input type="text" readonly class="form-control-plaintext"
                                                                id="fname" name="firstname" value="SAR 100 per day">
                                                        </div>
                                                        <div class="form-group sttimeven">
                                                            <label for="inputAddress2">Payment Status (Paid/Unpaid) :</label>
                                                            <input type="text" readonly class="form-control-plaintext"
                                                                id="fname" name="firstname" value="20% paid online balance pending with auto debit permission">
                                                        </div>
                                                        <div class="form-group col-md-2">
                                                            <label for="inputPassword4">Payment Type :</label>
                                                            <input type="text" readonly class="form-control-plaintext"
                                                                id="fname" name="firstname" value="Auto Debit">
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label for="inputAddress2">Attached Iqama / Passport :
                                                            </label>
                                                            <input type="text" readonly class="form-control-plaintext"
                                                                id="fname" name="firstname" value="150 person">
                                                        </div>
                                                    </div>
                                                    <!----------------------end of row --------------------------->
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="inputCity">Note(if customer has written while
                                                                Booking) : </label>
                                                            <input type="text" class="form-control" id="Express deal discout is offered only for seasonal period"
                                                                value="Auto Transaction">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="inputState">Expected guests (Customer given) :
                                                            </label>
                                                            <input type="text" class="form-control" id="Express deal discout is offered only for seasonal period"
                                                                value="thousand guest">
                                                        </div>

                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-----------------------View Bookings pop up -------------------------------------------------------->

                                <div class="tab-pane fade" id="pills-history" role="tabpanel" aria-labelledby="pills-history-tab">
                                    <div id="historydropdown" class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Month: August
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Month: July</a>
                                            <a class="dropdown-item" href="#">Month: July</a>
                                            <a class="dropdown-item" href="#">Month: July</a>
                                        </div>
                                    </div>
                                    <div class="dashboardright">
                                        <table class="table table-xs-12 table-sm-12 table-md-12">
                                            <thead class="table-color-head">
                                                <tr>
                                                    <th scope="col">Booking ID</th>
                                                    <th scope="col">Room ID </th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Arrive</th>
                                                    <th scope="col">Depart</th>
                                                    <th scope="col">Venue</th>

                                                </tr>
                                            </thead>
                                            <tbody class="table-hover">
                                                <tr>
                                                    <th scope="row">MTNA04879564</th>
                                                    <td>201</td>
                                                    <td>John Deo</td>
                                                    <td>johndeo@gmail.com</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>200</td>

                                                    <td class="bg-white-booking"><a data-toggle="modal" data-target="#viewpopModal"
                                                            href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">MTNA04879564</th>
                                                    <td>201</td>
                                                    <td>John Deo</td>
                                                    <td>johndeo@gmail.com</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>200</td>

                                                    <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                                style='font-size:20px;color:#66b85d'></i></a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">MTNA04879564</th>
                                                    <td>201</td>
                                                    <td>John Deo</td>
                                                    <td>johndeo@gmail.com</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>200</td>

                                                    <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                                style='font-size:20px;color:#66b85d'></i></a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">MTNA04879564</th>
                                                    <td>201</td>
                                                    <td>John Deo</td>
                                                    <td>johndeo@gmail.com</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>200</td>

                                                    <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                                style='font-size:20px;color:#66b85d'></i></a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">MTNA04879564</th>
                                                    <td>201</td>
                                                    <td>John Deo</td>
                                                    <td>johndeo@gmail.com</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>200</td>

                                                    <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                                style='font-size:20px;color:#66b85d'></i></a></td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">MTNA04879564</th>
                                                    <td>201</td>
                                                    <td>John Deo</td>
                                                    <td>johndeo@gmail.com</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>200</td>

                                                    <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                                style='font-size:20px;color:#66b85d'></i></a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">MTNA04879564</th>
                                                    <td>201</td>
                                                    <td>John Deo</td>
                                                    <td>johndeo@gmail.com</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>200</td>

                                                    <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                                style='font-size:20px;color:#66b85d'></i></a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">MTNA04879564</th>
                                                    <td>201</td>
                                                    <td>John Deo</td>
                                                    <td>johndeo@gmail.com</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>200</td>

                                                    <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                                style='font-size:20px;color:#66b85d'></i></a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">MTNA04879564</th>
                                                    <td>201</td>
                                                    <td>John Deo</td>
                                                    <td>johndeo@gmail.com</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>200</td>

                                                    <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                                style='font-size:20px;color:#66b85d'></i></a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">MTNA04879564</th>
                                                    <td>201</td>
                                                    <td>John Deo</td>
                                                    <td>johndeo@gmail.com</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>200</td>

                                                    <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                                style='font-size:20px;color:#66b85d'></i></a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">MTNA04879564</th>
                                                    <td>201</td>
                                                    <td>John Deo</td>
                                                    <td>johndeo@gmail.com</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>200</td>

                                                    <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                                style='font-size:20px;color:#66b85d'></i></a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">MTNA04879564</th>
                                                    <td>201</td>
                                                    <td>John Deo</td>
                                                    <td>johndeo@gmail.com</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>200</td>

                                                    <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                                style='font-size:20px;color:#66b85d'></i></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--------------end of booking ---------------------------------->
                                    <div class="row markdashboard">
                                        <span class="totalrev">Total Revenue : 12100</span>
                                        <span class="totalcom">Total Commision : 1552 </span>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-cancel" role="tabpanel" aria-labelledby="pills-cancel-tab">
                                    <div class="dashboardright">
                                        <table class="table table-xs-12 table-sm-12 table-md-12">
                                            <thead class="table-color-head">
                                                <tr>
                                                    <th scope="col">Booking ID</th>
                                                    <th scope="col">Room ID </th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">Cancelled Date & Time</th>
                                                    <th scope="col">Cancelled By </th>
                                                    <th scope="col">Cancelled Reason</th>

                                                </tr>
                                            </thead>
                                            <tbody class="table-hover">
                                                <tr>
                                                    <th scope="row">MTNA04879564</th>
                                                    <td>201</td>
                                                    <td>John Deo</td>
                                                    <td>90080 63462</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>cancelled by you</td>
                                                    <td>Personal</td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">MTNA04879564</th>
                                                    <td>201</td>
                                                    <td>John Deo</td>
                                                    <td>90080 63462</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>cancelled by you</td>
                                                    <td>Personal</td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">MTNA04879564</th>
                                                    <td>201</td>
                                                    <td>John Deo</td>
                                                    <td>90080 63462</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>cancelled by customer</td>
                                                    <td>Personal</td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">MTNA04879564</th>
                                                    <td>201</td>
                                                    <td>John Deo</td>
                                                    <td>90080 63462</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>cancelled by you</td>
                                                    <td>Personal</td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">MTNA04879564</th>
                                                    <td>201</td>
                                                    <td>John Deo</td>
                                                    <td>90080 63462</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>cancelled by you</td>
                                                    <td>Personal</td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">MTNA04879564</th>
                                                    <td>201</td>
                                                    <td>John Deo</td>
                                                    <td>90080 63462</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>cancelled by vendor</td>
                                                    <td>function postponded</td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">MTNA04879564</th>
                                                    <td>201</td>
                                                    <td>John Deo</td>
                                                    <td>90080 63462</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>cancelled by you</td>
                                                    <td>function postponded</td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">MTNA04879564</th>
                                                    <td>201</td>
                                                    <td>John Deo</td>
                                                    <td>90080 63462</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>cancelled by you</td>
                                                    <td>Personal</td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">MTNA04879564</th>
                                                    <td>201</td>
                                                    <td>John Deo</td>
                                                    <td>90080 63462</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>cancelled by you</td>
                                                    <td>Personal</td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">MTNA04879564</th>
                                                    <td>201</td>
                                                    <td>John Deo</td>
                                                    <td>90080 63462</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>cancelled by you</td>
                                                    <td>Personal</td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">MTNA04879564</th>
                                                    <td>201</td>
                                                    <td>John Deo</td>
                                                    <td>90080 63462</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>cancelled by event organiser</td>
                                                    <td>Personal</td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">MTNA04879564</th>
                                                    <td>201</td>
                                                    <td>John Deo</td>
                                                    <td>90080 63462</td>
                                                    <td>28/July/2018, 12:00 PM</td>
                                                    <td>cancelled by you</td>
                                                    <td>Personal</td>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--------------end of booking ---------------------------------->
                                </div>
                            </div>
                        </div>
                        <!--------------end of booking tabs ---------------------------->
                    </div>
                    <!------------------end of container-fluid ------------------------------>
                    <div class="tab-pane fade" id="v-pills-venues" role="tabpanel" aria-labelledby="v-pills-venues-tab">
                        <div class="dashvendortop">
                            <a class="addvenuedash" href="{{ url('dashboardvenueform') }}" target="_blank"> Add </a>
                        </div>
                        <!----------------add button ---------------------->
                        <div class="dashboardvenuepart">
                            <table class="table table-xs-12 table-sm-12 table-md-12">
                                <thead class="table-color-head">
                                    <tr>
                                        <th scope="col">Room ID</th>
                                        <th scope="col">Guest Capacity </th>
                                        <th scope="col">Regular Price</th>
                                        <th scope="col">Express Price</th>
                                        <th scope="col">AC / Non-AC</th>
                                        <th scope="col">Services</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Cancellation</th>

                                    </tr>
                                </thead>
                                <tbody class="table-hover">
                                    <tr>
                                        <th scope="row">201</th>
                                        <td>300</td>
                                        <td>100 / Day</td>
                                        <td>90 / Day</td>
                                        <td>Non-AC</td>
                                        <td>Catering</td>
                                        <td>+616-783437843</td>
                                        <td>5% </td>

                                        <td class="bg-white-booking"><a id="filterdash" data-toggle="modal" data-target="#bookingeditModal"
                                                href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                                        <td class="bg-white-booking"><a data-toggle="modal" data-target="#venudeleteModal"
                                                id="myCancel" href="#"><i class="fas fa-times-circle" style="font-size:20px;color:red"></i></a></td>
                                        <td class="bg-white-booking"><label class="switch">
                                                <input type="checkbox" id="togBtn" style="font-size:12px">
                                                <div class="slider round">
                                                    <span class="on"></span>
                                                    <span class="off"></span>
                                                </div>
                                            </label></td>
                                        <td class="bg-white-booking"><a data-toggle="modal" data-target=".bd-example-modal-xl"
                                                id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                                        <td class="bg-white-booking"><a data-toggle="modal" data-target="#venueaddexp"
                                                id="myaddexpress" href="#"><i class='fas fa-certificate' style='font-size:20px;color:#f09c18'></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">201</th>
                                        <td>300</td>
                                        <td>100 / Day</td>
                                        <td>90 / Day</td>
                                        <td>AC</td>
                                        <td>lighting</td>
                                        <td>+616-783437843</td>
                                        <td>5% </td>

                                        <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                                        <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle"
                                                    style="font-size:20px;color:red"></i></a></td>
                                        <td class="bg-white-booking"><a id="mypercent" href="#"><i class='fas fa-toggle-on'
                                                    style='font-size:20px;color:#66b85d'></i></a></td>
                                        <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                    style='font-size:20px;color:#66b85d'></i></a></td>
                                        <td class="bg-white-booking"><a id="myaddexpress" href="#"><i class='fas fa-certificate'
                                                    style='font-size:20px;color:#f09c18'></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">201</th>
                                        <td>300</td>
                                        <td>100 / Day</td>
                                        <td>90 / Day</td>
                                        <td>Non-AC</td>
                                        <td>Sound</td>
                                        <td>+616-783437843</td>
                                        <td>5% </td>

                                        <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                                        <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle"
                                                    style="font-size:20px;color:red"></i></a></td>
                                        <td class="bg-white-booking"><a id="mypercent" href="#"><i class='fas fa-toggle-on'
                                                    style='font-size:20px;color:#66b85d'></i></a></td>
                                        <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                    style='font-size:20px;color:#66b85d'></i></a></td>
                                        <td class="bg-white-booking"><a id="myaddexpress" href="#"><i class='fas fa-certificate'
                                                    style='font-size:20px;color:#f09c18'></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">201</th>
                                        <td>300</td>
                                        <td>100 / Day</td>
                                        <td>90 / Day</td>
                                        <td>Non-AC</td>
                                        <td>Catering</td>
                                        <td>+616-783437843</td>
                                        <td>5% </td>

                                        <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                                        <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle"
                                                    style="font-size:20px;color:red"></i></a></td>
                                        <td class="bg-white-booking"><a id="mypercent" href="#"><i class='fas fa-toggle-on'
                                                    style='font-size:20px;color:#66b85d'></i></a></td>
                                        <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                    style='font-size:20px;color:#66b85d'></i></a></td>
                                        <td class="bg-white-booking"><a id="myaddexpress" href="#"><i class='fas fa-certificate'
                                                    style='font-size:20px;color:#f09c18'></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">201</th>
                                        <td>300</td>
                                        <td>100 / Day</td>
                                        <td>90 / Day</td>
                                        <td>Non-AC</td>
                                        <td>lighting</td>
                                        <td>+616-783437843</td>
                                        <td>5% </td>

                                        <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                                        <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle"
                                                    style="font-size:20px;color:red"></i></a></td>
                                        <td class="bg-white-booking"><a id="mypercent" href="#"><i class='fas fa-toggle-on'
                                                    style='font-size:20px;color:#66b85d'></i></a></td>
                                        <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                    style='font-size:20px;color:#66b85d'></i></a></td>
                                        <td class="bg-white-booking"><a id="myaddexpress" href="#"><i class='fas fa-certificate'
                                                    style='font-size:20px;color:#f09c18'></i></a></td>

                                    </tr>
                                    <tr>
                                        <th scope="row">201</th>
                                        <td>300</td>
                                        <td>100 / Day</td>
                                        <td>90 / Day</td>
                                        <td>Non-AC</td>
                                        <td>Catering</td>
                                        <td>+616-783437843</td>
                                        <td>5% </td>

                                        <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                                        <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle"
                                                    style="font-size:20px;color:red"></i></a></td>
                                        <td class="bg-white-booking"><a id="mypercent" href="#"><i class='fas fa-toggle-on'
                                                    style='font-size:20px;color:#66b85d'></i></a></td>
                                        <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                    style='font-size:20px;color:#66b85d'></i></a></td>
                                        <td class="bg-white-booking"><a id="myaddexpress" href="#"><i class='fas fa-certificate'
                                                    style='font-size:20px;color:#f09c18'></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">201</th>
                                        <td>300</td>
                                        <td>100 / Day</td>
                                        <td>90 / Day</td>
                                        <td>Non-AC</td>
                                        <td>Catering</td>
                                        <td>+616-783437843</td>
                                        <td>5% </td>
                                        <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                                        <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle"
                                                    style="font-size:20px;color:red"></i></a></td>
                                        <td class="bg-white-booking"><a id="mypercent" href="#"><i class='fas fa-toggle-on'
                                                    style='font-size:20px;color:#66b85d'></i></a></td>
                                        <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                    style='font-size:20px;color:#66b85d'></i></a></td>
                                        <td class="bg-white-booking"><a id="myaddexpress" href="#"><i class='fas fa-certificate'
                                                    style='font-size:20px;color:#f09c18'></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">201</th>
                                        <td>300</td>
                                        <td>100 / Day</td>
                                        <td>90 / Day</td>
                                        <td>Non-AC</td>
                                        <td>Catering</td>
                                        <td>+616-783437843</td>
                                        <td>5% </td>
                                        <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                                        <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle"
                                                    style="font-size:20px;color:red"></i></a></td>
                                        <td class="bg-white-booking"><a id="mypercent" href="#"><i class='fas fa-toggle-on'
                                                    style='font-size:20px;color:#66b85d'></i></a></td>
                                        <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                    style='font-size:20px;color:#66b85d'></i></a></td>
                                        <td class="bg-white-booking"><a id="myaddexpress" href="#"><i class='fas fa-certificate'
                                                    style='font-size:20px;color:#f09c18'></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">201</th>
                                        <td>300</td>
                                        <td>100 / Day</td>
                                        <td>90 / Day</td>
                                        <td>Non-AC</td>
                                        <td>Catering</td>
                                        <td>+616-783437843</td>
                                        <td>5% </td>
                                        <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                                        <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle"
                                                    style="font-size:20px;color:red"></i></a></td>
                                        <td class="bg-white-booking"><a id="mypercent" href="#"><i class='fas fa-toggle-on'
                                                    style='font-size:20px;color:#66b85d'></i></a></td>
                                        <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                    style='font-size:20px;color:#66b85d'></i></a></td>
                                        <td class="bg-white-booking"><a id="myaddexpress" href="#"><i class='fas fa-certificate'
                                                    style='font-size:20px;color:#f09c18'></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">201</th>
                                        <td>300</td>
                                        <td>100 / Day</td>
                                        <td>90 / Day</td>
                                        <td>Non-AC</td>
                                        <td>Catering</td>
                                        <td>+616-783437843</td>
                                        <td>5% </td>
                                        <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                                        <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle"
                                                    style="font-size:20px;color:red"></i></a></td>
                                        <td class="bg-white-booking"><a id="mypercent" href="#"><i class='fas fa-toggle-on'
                                                    style='font-size:20px;color:#66b85d'></i></a></td>
                                        <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                    style='font-size:20px;color:#66b85d'></i></a></td>
                                        <td class="bg-white-booking"><a id="myaddexpress" href="#"><i class='fas fa-certificate'
                                                    style='font-size:20px;color:#f09c18'></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">201</th>
                                        <td>300</td>
                                        <td>100 / Day</td>
                                        <td>90 / Day</td>
                                        <td>Non-AC</td>
                                        <td>Catering</td>
                                        <td>+616-783437843</td>
                                        <td>5% </td>
                                        <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                                        <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle"
                                                    style="font-size:20px;color:red"></i></a></td>
                                        <td class="bg-white-booking"><a id="mypercent" href="#"><i class='fas fa-toggle-on'
                                                    style='font-size:20px;color:#66b85d'></i></a></td>
                                        <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                    style='font-size:20px;color:#66b85d'></i></a></td>
                                        <td class="bg-white-booking"><a id="myaddexpress" href="#"><i class='fas fa-certificate'
                                                    style='font-size:20px;color:#f09c18'></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">201</th>
                                        <td>300</td>
                                        <td>100 / Day</td>
                                        <td>90 / Day</td>
                                        <td>Non-AC</td>
                                        <td>Catering</td>
                                        <td>+616-783437843</td>
                                        <td>5% </td>
                                        <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                                        <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-times-circle"
                                                    style="font-size:20px;color:red"></i></a></td>
                                        <td class="bg-white-booking"><a id="mypercent" href="#"><i class='fas fa-toggle-on'
                                                    style='font-size:12px;color:#66b85d'></i></a></td>
                                        <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                    style='font-size:20px;color:#66b85d'></i></a></td>
                                        <td class="bg-white-booking"><a id="myaddexpress" href="#"><i class='fas fa-certificate'
                                                    style='font-size:20px;color:#f09c18'></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-------------------------------------Vendor Venue Edit Modal ---------------------------------------->
                            <div class="modal fade" id="bookingeditModal" tabindex="-1" role="dialog" aria-labelledby="bookingeditModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog" id="venueeditdash" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Venue Registration</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-horizontal" method="post" id="vendor_sign_up_form">

                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Company Name : </label>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="company_name" class="vendorformreg"
                                                            placeholder="Enter Company Name" value="Tata">
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->
                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Logo : </label>
                                                    <div class="col-sm-2">

                                                        <div class="upload-btn-wrapper">
                                                            <button class="btn uploadbutton">Upload</button>
                                                            <input type="file" name="logo_upload_file" />
                                                        </div>

                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->
                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Phone Number : </label>
                                                    <div class="col-sm-2">
                                                        <select class="vendorformsel" disabled>
                                                            <option selected>+678</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="primary_phone_no" class="vendorformphone"
                                                            placeholder="999999999" value="9819234765">
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->
                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Alternate Contact
                                                        Number 1 : </label>
                                                    <div class="col-sm-2">
                                                        <select class="vendorformsel" disabled>
                                                            <option selected>+678</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="secondary_phone_no" class="vendorformphone"
                                                            placeholder="999999999" value="9819234765">
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->
                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Alternate Contact
                                                        Number 2 : </label>
                                                    <div class="col-sm-2">
                                                        <select class="vendorformsel" disabled>
                                                            <option selected>+678</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="alternate_phone_no" class="vendorformphone"
                                                            value="9819234765">
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->

                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Email : </label>
                                                    <div class="col-sm-5">
                                                        <input type="email" name="email" class="vendorformreg"
                                                            placeholder="Enter Email" value="jackdeo@gmail.com">
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->

                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Country : </label>
                                                    <div class="col-sm-5">
                                                        <select id="inputForCountry" class="vendorfullsel" name="country_id">
                                                            <option value="1" selected>Saudi</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->

                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">City : </label>
                                                    <div class="col-sm-5">
                                                        <select id="inputForCities" class="vendorfullsel" name="city_id">
                                                            <option value="" selected>--- Select city ---</option>
                                                            <option value="1" selected>Saudi</option>
                                                            <option value="1" selected>India</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->

                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Address Line 1 :
                                                    </label>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="address_line_1" class="vendorformreg"
                                                            placeholder="Enter address Line" value="23 street carvin road Bangalore 560066">
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->

                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Address Line 2 :
                                                    </label>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="address_line_2" class="vendorformreg"
                                                            placeholder="Enter Address Line 2" value="23 street carvin road Bangalore 560066">
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->

                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Add in Google Map :
                                                    </label>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="google_map_link" class="vendorformreg"
                                                            placeholder="Enter Google map link here">
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->

                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Note : </label>
                                                    <div class="col-sm-5">
                                                        <textarea class="form-control" name="note" id="vendorfromtxtarea"
                                                            rows="3" placeholder="Enter here..." value="venues are booked by vendors"></textarea>
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->
                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">License Number :
                                                    </label>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="license_no" class="vendorformreg"
                                                            placeholder="Enter License Number" value="123499489">
                                                    </div>
                                                </div>

                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">ID Name : </label>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="id_name" class="vendorformreg"
                                                            placeholder="Enter ID Type" value="B012">
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->
                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">License Photo :
                                                    </label>

                                                    <div class="col-sm-2">

                                                        <div class="upload-btn-wrapper">
                                                            <button class="btn uploadbutton">Upload</button>
                                                            <input type="file" name="license_upload_file" name="myfile" />
                                                        </div>

                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->
                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Photo of National ID /
                                                        Passport : </label>

                                                    <div class="col-sm-2">

                                                        <div class="upload-btn-wrapper">
                                                            <button class="btn uploadbutton">Upload</button>
                                                            <input type="file" name="id_upload_file" name="myfile" />
                                                        </div>

                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->

                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Password : </label>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="password" id="vendorPassword" class="vendorformreg"
                                                            placeholder="*************" value="****">
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->

                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Confirm Password :
                                                    </label>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="password_confirmation" id="conf_vendorPassword"
                                                            class="vendorformreg" placeholder="**************" value="****">
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->
                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Facebook Link :
                                                    </label>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="fb_link" class="vendorformreg"
                                                            placeholder="Enter Facebook Link" value="www.facebook.com/">
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->

                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Twitter Link : </label>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="twitter_link" class="vendorformreg"
                                                            placeholder="Enter Twitter Link" value="https://twitter.com/">
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->

                                                <div class="linehr"></div>

                                                <div class="form-group">

                                                    <label class="control-label col-sm-3 bankhead" for="head"><b>Bank
                                                            info</b></label>

                                                </div>

                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Bank Account Name :
                                                    </label>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="account_name" class="vendorformreg"
                                                            placeholder="Enter Bank Account Name" Value="John Shah">
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->
                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Bank Name : </label>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="bank_name" class="vendorformreg"
                                                            placeholder="Enter Bank Name" value="HDFC">
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->

                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">IBAN Number : </label>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="iban_name" class="vendorformreg"
                                                            placeholder="Enter IBAN Number" value="hdfv0008743">
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->

                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Account Number :
                                                    </label>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="account_number" class="vendorformreg"
                                                            placeholder="Enter Account Number" value="A123uq78343">
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->
                                                <!-- <div class="form-group">

        <label class="control-label col-sm-6 textalign_vendor" for="pwd">Payment Option:</label>

        <div class="col-sm-8 checkalign">

            <div class="checkbox">

                <label><input type="checkbox" name="payment_option" value="1"> <b style="font-size:15px">Online
                        Payment</b></label>

                <label> </label>

                <label> </label>

                <label> </label>

                <label> </label>

                <label><input type="checkbox" name="payment_option" value="2"> <b style="font-size:15px">
                        Cash</b></label>

                <div id="payment_option-error" class="error-class"></div>
            </div>
        </div>
    </div> -->
                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Account Number :
                                                    </label>
                                                    <div class="optcheckterms">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="payment_method"
                                                                value="online" id="checkboxOnline">
                                                            <label class="form-check-label" id="vendorchkon" for="checkboxOnline">Online
                                                                Payment</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="payment_method"
                                                                value="cash" id="checkboxCash">
                                                            <label class="form-check-label" id="vendorchkcash" for="checkboxCash">Cash</label>
                                                        </div>
                                                        <!---------------optcheckbox------------------>
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->
                                                <div class="form-group">
                                                    <div class="col-sm-3"></div>
                                                    <div class="col-sm-6 checkterms">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" name="terms_conditions"
                                                                id="checkboxTerms" value="option1">
                                                            <label class="form-check-label" for="checkboxTerms"><span
                                                                    class="vendorterms">I
                                                                    agreed to Monasabatna </b></span><a href="#">Term &
                                                                    Conditions </a><b><span class="vendorterms">and
                                                                    </span></b><a href="#">Privacy Policies</a></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-offset-3 col-sm-10 textalign">
                                                        <button type="submit" id="myModal" name="submit" value="submit"
                                                            class="btn btn-default signme-venuereg">Sign
                                                            Up</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!--------------------------vendor Venue Edit -------------------->
                                    </div>
                                    <!---------------------tab-pane-fade ----------------------------->

                                </div>
                            </div>
                            <!-----------------------venue Edit pop up -------------------------------------------------------->
                            <!------------------------------ Delete Venues ----------------------------------->
                            <!-- Modal with Text area -->
                            <div class="modal fade" id="venudeleteModal" tabindex="-1" role="dialog" aria-labelledby="venudeleteModalLabel"
                                aria-hidden="true">
                                <div id="canceldash" class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Confirm to Delete Venue</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are you sure you want to Delete the venue.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary yesamen" data-dismiss="modal">Yes</button>
                                            <button type="button" class="btn btn-primary noamen">No</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!------------------Delete Modal ------------------------->
                            <!-------------------------------------View venue Modal -------------------------------->
                            <div class="modal fade bd-example-modal-xl" id="viewvenuemodal" tabindex="-1" role="dialog"
                                aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                <div id="viewvenuefm" class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">View Venue Details</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-row">
                                                    <div class="form-group col-md-2">
                                                        <label for="inputEmail4">Photo :</label>
                                                        <a class="venimgpic" href="#"><img src="svg/images/testi-about1.png"
                                                                class="img-thumbnail" alt="Cinque Terre"> </a>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="inputAddress2">Video : </label>
                                                        <a class="venimgpic" href="#"><video width="265" height="178"
                                                                controls>
                                                                <source src="svg/images/venuevideo.mp4" type="video/mp4">
                                                                Your browser does not support the video tag.
                                                            </video> </a>
                                                    </div>
                                                    <div class="form-group col-md-1">
                                                        <label for="inputEmail4">Room ID :</label>
                                                        <input type="text" readonly class="form-control-plaintext" id="fname"
                                                            name="firstname" value="B502">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="inputPassword4">Venue Name :</label>
                                                        <input type="text" readonly class="form-control-plaintext" id="fname"
                                                            name="firstname" value="Party">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="inputAddress">Guest Capacity :</label>
                                                        <input type="text" readonly class="form-control-plaintext" id="fname"
                                                            name="firstname" value="300">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="inputAddress2">Regular Price :</label>
                                                        <input type="text" readonly class="form-control-plaintext" id="fname"
                                                            name="firstname" value="200 / Day">
                                                    </div>


                                                </div>
                                                <!--------------end of row ---------------------------------->
                                                <div class="form-row">
                                                    <div class="form-group col-md-2">
                                                        <label for="inputAddress2">Express Price :</label>
                                                        <input type="text" readonly class="form-control-plaintext" id="fname"
                                                            name="firstname" value="200 / Day">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="inputAddress2">Ac / Non Ac :</label>
                                                        <input type="text" readonly class="form-control-plaintext" id="fname"
                                                            name="firstname" value="AC">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="inputPassword4">Phone :</label>
                                                        <input type="text" readonly class="form-control-plaintext" id="fname"
                                                            name="firstname" value="9008089765">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="inputAddress">Services : </label>
                                                        <input type="text" readonly class="form-control-plaintext" id="fname"
                                                            name="firstname" value="Catering and Lighting">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="inputAddress2">Country : </label>
                                                        <input type="text" readonly class="form-control-plaintext" id="fname"
                                                            name="firstname" value="India">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="inputAddress2">Cancellation Charges: </label>
                                                        <input type="text" readonly class="form-control-customcharges"
                                                            id="fname" name="firstname" value="Before 24 Hours">
                                                        <input type="text" readonly class="form-control-customcol" id="fname"
                                                            name="firstname" value="5%">

                                                    </div>


                                                </div>
                                                <!----------------------end of row --------------------------->
                                                <div class="form-row">
                                                    <div class="form-group sttimeven">
                                                        <label for="inputAddress2">Start Time :</label>
                                                        <input type="text" readonly class="form-control-plaintext" id="fname"
                                                            name="firstname" value="10 : 30">
                                                    </div>
                                                    <div class="form-group sttimeven">
                                                        <label for="inputAddress2">End Time :</label>
                                                        <input type="text" readonly class="form-control-plaintext" id="fname"
                                                            name="firstname" value="12 : 30">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="inputPassword4">Conference Hall Provided :</label>
                                                        <input type="text" readonly class="form-control-plaintext" id="fname"
                                                            name="firstname" value="Yes">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="inputAddress">Event Type : </label>
                                                        <input type="text" readonly class="form-control-plaintext" id="fname"
                                                            name="firstname" value="Marriage">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="inputAddress2">Amenities : </label>
                                                        <input type="text" readonly class="form-control-plaintext" id="fname"
                                                            name="firstname" value="Food">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="inputAddress2"> </label>
                                                        <input type="text" readonly class="form-control-customcharges"
                                                            id="fname" name="firstname" value="Before 24 Hours">
                                                        <input type="text" readonly class="form-control-customcol" id="fname"
                                                            name="firstname" value="5%">
                                                    </div>
                                                </div>
                                                <!----------------------end of row --------------------------->
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputCity">Note : </label>
                                                        <input type="text" class="form-control" id="Express deal discout is offered only for seasonal period"
                                                            value="Express deal discount is offered only for seasonal period">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputState">Deadline for cash payment : </label>
                                                        <input type="text" class="form-control" id="Express deal discout is offered only for seasonal period"
                                                            value="Check Maturity Date as per your credential">
                                                    </div>
                                                    <div class="form-group col-md-2 chargeven">
                                                        <label for="inputAddress2"> </label>
                                                        <input type="text" readonly class="form-control-customcharges"
                                                            id="fname" name="firstname" value="Before 24 Hours">
                                                        <input type="text" readonly class="form-control-customcol" id="fname"
                                                            name="firstname" value="5%">
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-----------------------View Venue pop up -------------------------------------------------------->
                            <!------------------------------ venue Add to express Deals ----------------------------------->
                            <div class="modal fade" id="venueaddexp" tabindex="-1" role="dialog" aria-labelledby="venueaddexpLabel"
                                aria-hidden="true">
                                <div id="paymentdash" class="modal-dialog">
                                    <div class="modal-content">
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h3 class="modal-title">Add to Express Deals</h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">Ã—</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="content-payment">
                                            <div class="form-group row express">
                                                <label for="inputEmail3" class="vendoraddexp"> Current Price(SAR) :</label>

                                                <div class="col-sm-5">
                                                    <input type="text" name="company_name" class="vendorformexp"
                                                        placeholder="100">
                                                </div>
                                                <div class="col-15">
                                                    <select id="country" class="selectvenexp" name="country">
                                                        <option value="australia" selected>Per day</option>
                                                        <option value="canada">Per hour</option>
                                                        <option value="usa">Per Person</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!------------------form-group row ------------------------->
                                            <div class="form-group row express">
                                                <label for="inputEmail3" class="vendoraddexp"> Express Price(SAR) :</label>

                                                <div class="col-sm-5">
                                                    <input type="text" name="company_name" class="vendorformexp"
                                                        placeholder="80">
                                                </div>
                                                <div class="col-15">
                                                    <select id="country" class="selectvenexp" name="country">
                                                        <option value="australia" selected>Per day</option>
                                                        <option value="canada">Per Person</option>
                                                        <option value="usa">Per head</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <!------------------form-group row ------------------------->

                                        </div>
                                        <!-----------content-payment ----------------------->
                                        <!-- Modal footer -->
                                        <div class="modal-footer">

                                            <!---<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--->
                                            <button data-toggle="modal" id="closeModal" data-target="#closeModallabel"
                                                type="submit" class="btn btn-primary">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-------------------------------Payment Details ------------------------------------>
                        </div>
                        <!--------------end of booking ---------------------------------->
                    </div>
                    <div class="tab-pane fade" id="v-pills-services" role="tabpanel" aria-labelledby="v-pills-services-tab">
                        <div class="dashvendortop">
                            <a class="servicetext" href="#"> Services </a>
                            <a class="addservicedash" href="{{ url('dashboardserviceform') }}"> Add Services</a>
                        </div>
                        <!----------------add button ---------------------->
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
                                        <td class="bg-white-booking"><a data-toggle="modal" data-target="#viewservicesmodal"
                                                id="mypercent" href="#"><i class="fas fa-eye" style='font-size:20px;color:#66b85d'></i></a></td>
                                        <td class="bg-white-booking"><a data-toggle="modal" data-target="#serviceeditModal"
                                                href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                                        <td class="bg-white-booking"><a data-toggle="modal" data-target="#servicedeleteModal"
                                                id="myCancel" href="#"><i class="fas fa-trash-alt" style="font-size:20px;color:red"></i></a></td>
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
                                        <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                    style='font-size:20px;color:#66b85d'></i></a></td>
                                        <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                                        <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt"
                                                    style="font-size:20px;color:red"></i></a></td>
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
                                        <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                    style='font-size:20px;color:#66b85d'></i></a></td>
                                        <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                                        <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt"
                                                    style="font-size:20px;color:red"></i></a></td>
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
                                        <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                    style='font-size:20px;color:#66b85d'></i></a></td>
                                        <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                                        <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt"
                                                    style="font-size:20px;color:red"></i></a></td>
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
                                        <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                    style='font-size:20px;color:#66b85d'></i></a></td>
                                        <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                                        <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt"
                                                    style="font-size:20px;color:red"></i></a></td>
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
                                        <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                    style='font-size:20px;color:#66b85d'></i></a></td>
                                        <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                                        <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt"
                                                    style="font-size:20px;color:red"></i></a></td>
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
                                        <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                    style='font-size:20px;color:#66b85d'></i></a></td>
                                        <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                                        <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt"
                                                    style="font-size:20px;color:red"></i></a></td>
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
                                        <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                    style='font-size:20px;color:#66b85d'></i></a></td>
                                        <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                                        <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt"
                                                    style="font-size:20px;color:red"></i></a></td>
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
                                        <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                    style='font-size:20px;color:#66b85d'></i></a></td>
                                        <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                                        <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt"
                                                    style="font-size:20px;color:red"></i></a></td>
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
                                        <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                    style='font-size:20px;color:#66b85d'></i></a></td>
                                        <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                                        <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt"
                                                    style="font-size:20px;color:red"></i></a></td>
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
                                        <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                    style='font-size:20px;color:#66b85d'></i></a></td>
                                        <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                                        <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt"
                                                    style="font-size:20px;color:red"></i></a></td>
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
                                        <td class="bg-white-booking"><a id="mypercent" href="#"><i class="fas fa-eye"
                                                    style='font-size:20px;color:#66b85d'></i></a></td>
                                        <td class="bg-white-booking"><a href="#"><i class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                                        <td class="bg-white-booking"><a id="myCancel" href="#"><i class="fas fa-trash-alt"
                                                    style="font-size:20px;color:red"></i></a></td>
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
                            <!-------------------------------------Services Edit Modal ---------------------------------------->
                            <div class="modal fade" id="serviceeditModal" tabindex="-1" role="dialog" aria-labelledby="serviceeditModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog" id="serviceeditdash" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Venue Registration</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-horizontal" method="post" id="vendor_sign_up_form">

                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Company Name : </label>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="company_name" class="vendorformreg"
                                                            placeholder="Enter Company Name" value="Tata">
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->
                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Logo : </label>
                                                    <div class="col-sm-2">

                                                        <div class="upload-btn-wrapper">
                                                            <button class="btn uploadbutton">Upload</button>
                                                            <input type="file" name="logo_upload_file" />
                                                        </div>

                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->
                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Phone Number : </label>
                                                    <div class="col-sm-2">
                                                        <select class="vendorformsel" disabled>
                                                            <option selected>+678</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="primary_phone_no" class="vendorformphone"
                                                            placeholder="999999999" value="9819234765">
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->
                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Alternate Contact
                                                        Number 1 : </label>
                                                    <div class="col-sm-2">
                                                        <select class="vendorformsel" disabled>
                                                            <option selected>+678</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="secondary_phone_no" class="vendorformphone"
                                                            placeholder="999999999" value="9819234765">
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->
                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Alternate Contact
                                                        Number 2 : </label>
                                                    <div class="col-sm-2">
                                                        <select class="vendorformsel" disabled>
                                                            <option selected>+678</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="alternate_phone_no" class="vendorformphone"
                                                            value="9819234765">
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->

                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Email : </label>
                                                    <div class="col-sm-5">
                                                        <input type="email" name="email" class="vendorformreg"
                                                            placeholder="Enter Email" value="jackdeo@gmail.com">
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->

                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Country : </label>
                                                    <div class="col-sm-5">
                                                        <select id="inputForCountry" class="vendorfullsel" name="country_id">
                                                            <option value="1" selected>Saudi</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->

                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">City : </label>
                                                    <div class="col-sm-5">
                                                        <select id="inputForCities" class="vendorfullsel" name="city_id">
                                                            <option value="" selected>--- Select city ---</option>
                                                            <option value="1" selected>Saudi</option>
                                                            <option value="1" selected>India</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->

                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Address Line 1 :
                                                    </label>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="address_line_1" class="vendorformreg"
                                                            placeholder="Enter address Line" value="23 street carvin road Bangalore 560066">
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->

                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Address Line 2 :
                                                    </label>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="address_line_2" class="vendorformreg"
                                                            placeholder="Enter Address Line 2" value="23 street carvin road Bangalore 560066">
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->

                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Add in Google Map :
                                                    </label>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="google_map_link" class="vendorformreg"
                                                            placeholder="Enter Google map link here">
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->

                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Note : </label>
                                                    <div class="col-sm-5">
                                                        <textarea class="form-control" name="note" id="vendorfromtxtarea"
                                                            rows="3" placeholder="Enter here..." value="venues are booked by vendors"></textarea>
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->
                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">License Number :
                                                    </label>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="license_no" class="vendorformreg"
                                                            placeholder="Enter License Number" value="123499489">
                                                    </div>
                                                </div>

                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">ID Name : </label>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="id_name" class="vendorformreg"
                                                            placeholder="Enter ID Type" value="B012">
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->
                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">License Photo :
                                                    </label>

                                                    <div class="col-sm-2">

                                                        <div class="upload-btn-wrapper">
                                                            <button class="btn uploadbutton">Upload</button>
                                                            <input type="file" name="license_upload_file" name="myfile" />
                                                        </div>

                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->
                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Photo of National ID /
                                                        Passport : </label>

                                                    <div class="col-sm-2">

                                                        <div class="upload-btn-wrapper">
                                                            <button class="btn uploadbutton">Upload</button>
                                                            <input type="file" name="id_upload_file" name="myfile" />
                                                        </div>

                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->

                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Password : </label>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="password" id="vendorPassword" class="vendorformreg"
                                                            placeholder="*************" value="****">
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->

                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Confirm Password :
                                                    </label>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="password_confirmation" id="conf_vendorPassword"
                                                            class="vendorformreg" placeholder="**************" value="****">
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->
                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Facebook Link :
                                                    </label>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="fb_link" class="vendorformreg"
                                                            placeholder="Enter Facebook Link" value="www.facebook.com/">
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->

                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Twitter Link : </label>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="twitter_link" class="vendorformreg"
                                                            placeholder="Enter Twitter Link" value="https://twitter.com/">
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->

                                                <div class="linehr"></div>

                                                <div class="form-group">

                                                    <label class="control-label col-sm-3 bankhead" for="head"><b>Bank
                                                            info</b></label>

                                                </div>

                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Bank Account Name :
                                                    </label>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="account_name" class="vendorformreg"
                                                            placeholder="Enter Bank Account Name" Value="John Shah">
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->
                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Bank Name : </label>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="bank_name" class="vendorformreg"
                                                            placeholder="Enter Bank Name" value="HDFC">
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->

                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">IBAN Number : </label>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="iban_name" class="vendorformreg"
                                                            placeholder="Enter IBAN Number" value="hdfv0008743">
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->

                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Account Number :
                                                    </label>
                                                    <div class="col-sm-5">
                                                        <input type="text" name="account_number" class="vendorformreg"
                                                            placeholder="Enter Account Number" value="A123uq78343">
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->
                                                <!-- <div class="form-group">

        <label class="control-label col-sm-6 textalign_vendor" for="pwd">Payment Option:</label>

        <div class="col-sm-8 checkalign">

            <div class="checkbox">

                <label><input type="checkbox" name="payment_option" value="1"> <b style="font-size:15px">Online
                        Payment</b></label>

                <label> </label>

                <label> </label>

                <label> </label>

                <label> </label>

                <label><input type="checkbox" name="payment_option" value="2"> <b style="font-size:15px">
                        Cash</b></label>

                <div id="payment_option-error" class="error-class"></div>
            </div>
        </div>
    </div> -->
                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendorregco">Account Number :
                                                    </label>
                                                    <div class="optcheckterms">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="payment_method"
                                                                value="online" id="checkboxOnline">
                                                            <label class="form-check-label" id="vendorchkon" for="checkboxOnline">Online
                                                                Payment</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="payment_method"
                                                                value="cash" id="checkboxCash">
                                                            <label class="form-check-label" id="vendorchkcash" for="checkboxCash">Cash</label>
                                                        </div>
                                                        <!---------------optcheckbox------------------>
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->
                                                <div class="form-group">
                                                    <div class="col-sm-3"></div>
                                                    <div class="col-sm-6 checkterms">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" name="terms_conditions"
                                                                id="checkboxTerms" value="option1">
                                                            <label class="form-check-label" for="checkboxTerms"><span
                                                                    class="vendorterms">I
                                                                    agreed to Monasabatna </b></span><a href="#">Term &
                                                                    Conditions </a><b><span class="vendorterms">and
                                                                    </span></b><a href="#">Privacy Policies</a></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-offset-3 col-sm-10 textalign">
                                                        <button type="submit" id="myModal" name="submit" value="submit"
                                                            class="btn btn-default signme-venuereg">Sign
                                                            Up</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!--------------------------vendor Venue Edit -------------------->
                                    </div>
                                    <!---------------------tab-pane-fade ----------------------------->

                                </div>
                            </div>
                            <!-----------------------Services Edit pop up -------------------------------------------------------->
                            <!-------------------------------------View Services Modal -------------------------------->
                            <div class="modal fade xlservices" id="viewservicesmodal" tabindex="-1" role="dialog"
                                aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
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
                                                    <td class="servborder"> </td>
                                                    <td class="servborder"> </td>
                                                </tr>
                                                <tr>
                                                    <td class="servborder">1. Chicken Wings </td>
                                                    <td class="servborder"> </td>
                                                    <td class="servborder"> </td>
                                                </tr>
                                                <tr>
                                                    <td class="servborder">2. Hot Chocolate </td>
                                                    <td class="servborder"> </td>
                                                    <td class="servborder"> </td>
                                                </tr>
                                                <tr>
                                                    <td class="servborder">3. Finger Chips </td>
                                                    <td class="servborder"> </td>
                                                    <td class="servborder"> </td>
                                                </tr>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-----------------------View Services pop up -------------------------------------------------------->
                            <!-- Modal with Text area -->
                            <div class="modal fade" id="servicedeleteModal" tabindex="-1" role="dialog" aria-labelledby="servicedeleteModalLabel"
                                aria-hidden="true">
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
                        </div>
                        <!--------------end of booking ---------------------------------->
                    </div>
                    <!-----------------Services Tab -------------------------------->
                    <div class="tab-pane fade" id="v-pills-policies" role="tabpanel" aria-labelledby="v-pills-policies-tab">
                        <div class="profileleft">
                            <form class="form-horizontal" action="">
                                <div class="form-group">
                                    <div class="profileterms">
                                        <textarea class="form-control" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitationlaboris nisi ut aliquip.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                              **Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitationlaboris nisi ut aliquip.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                              **Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitationlaboris nisi ut aliquip.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip "
                                            rows="22"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="email"></label>
                                    <ul>

                                        <button type="submit" class="btn btn-default btn-lg-6" id="sign-text">Save</button>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!------------------------v-pills-policies------------------------------------------->
                    <div class="tab-pane fade" id="v-pills-profiles" role="tabpanel" aria-labelledby="v-pills-profiles-tab">
                        <div class="container-fluid" id="formprofile-signup">

                            <form class="form-horizontal" method="post" id="vendor_sign_up_form">

                                <div class="form-group row regfeild">
                                    <label for="inputEmail3" class="profileregco">Company Name : </label>
                                    <div class="col-sm-5">
                                        <input type="text" name="company_name" class="vendorformreg" placeholder="Enter Company Name">
                                    </div>
                                </div>
                                <!------------------form-group row ------------------------->
                                <div class="form-group row regfeild">
                                    <label for="inputEmail3" class="profileregco">Logo : </label>
                                    <div class="col-sm-2 profilewrap">

                                        <div class="upload-btn-wrapper">
                                            <button class="btn uploadbutton">Upload</button>
                                            <input type="file" name="logo_upload_file" />
                                        </div>

                                    </div>
                                </div>
                                <!------------------form-group row ------------------------->
                                <div class="form-group row regfeild">
                                    <label for="inputEmail3" class="profileregco">Phone Number : </label>
                                    <div class="col-sm-2">
                                        <select id="inputState" class="profileformsel" disabled>
                                            <option selected>+678</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" name="primary_phone_no" class="profileformphone" placeholder="999999999">
                                    </div>
                                </div>
                                <!------------------form-group row ------------------------->
                                <div class="form-group row regfeild">
                                    <label for="inputEmail3" class="profileregco">Alternate Contact Number 1 : </label>
                                    <div class="col-sm-2">
                                        <select id="inputState" class="profileformsel" disabled>
                                            <option selected>+678</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" name="secondary_phone_no" class="profileformphone"
                                            placeholder="999999999">
                                    </div>
                                </div>
                                <!------------------form-group row ------------------------->
                                <div class="form-group row regfeild">
                                    <label for="inputEmail3" class="profileregco">Alternate Contact Number 2 : </label>
                                    <div class="col-sm-2">
                                        <select id="inputState" class="profileformsel" disabled>
                                            <option selected>+678</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" name="alternate_phone_no" class="profileformphone"
                                            placeholder="999999999">
                                    </div>
                                </div>
                                <!------------------form-group row ------------------------->

                                <div class="form-group row regfeild">
                                    <label for="inputEmail3" class="profileregco">Email : </label>
                                    <div class="col-sm-5">
                                        <input type="email" name="email" class="vendorformreg" placeholder="Enter Email">
                                    </div>
                                </div>
                                <!------------------form-group row ------------------------->

                                <div class="form-group row regfeild">
                                    <label for="inputEmail3" class="profileregco">Country : </label>
                                    <div class="col-sm-5">
                                        <select id="inputForCountry" class="vendorfullsel" name="country_id">
                                            <option value="1" selected>Saudi</option>
                                        </select>
                                    </div>
                                </div>
                                <!------------------form-group row ------------------------->

                                <div class="form-group row regfeild">
                                    <label for="inputEmail3" class="profileregco">City : </label>
                                    <div class="col-sm-5">
                                        <select id="inputForCities" class="vendorfullsel" name="city_id">
                                            <option value="" selected>--- Select city ---</option>
                                        </select>
                                    </div>
                                </div>
                                <!------------------form-group row ------------------------->

                                <div class="form-group row regfeild">
                                    <label for="inputEmail3" class="profileregco">Address Line 1 : </label>
                                    <div class="col-sm-5">
                                        <input type="text" name="address_line_1" class="vendorformreg" placeholder="Enter address Line">
                                    </div>
                                </div>
                                <!------------------form-group row ------------------------->

                                <div class="form-group row regfeild">
                                    <label for="inputEmail3" class="profileregco">Address Line 2 : </label>
                                    <div class="col-sm-5">
                                        <input type="text" name="address_line_2" class="vendorformreg" placeholder="Enter Address Line 2">
                                    </div>
                                </div>
                                <!------------------form-group row ------------------------->

                                <div class="form-group row regfeild">
                                    <label for="inputEmail3" class="profileregco">Add in Google Map : </label>
                                    <div class="col-sm-5">
                                        <input type="text" name="google_map_link" class="vendorformreg" placeholder="Enter Google map link here">
                                    </div>
                                </div>
                                <!------------------form-group row ------------------------->

                                <div class="form-group row regfeild">
                                    <label for="inputEmail3" class="profileregco">Note : </label>
                                    <div class="col-sm-5">
                                        <textarea class="form-control" name="note" id="vendorfromtxtarea" rows="3"
                                            placeholder="Enter here..."></textarea>
                                    </div>
                                </div>
                                <!------------------form-group row ------------------------->
                                <div class="form-group row regfeild">
                                    <label for="inputEmail3" class="profileregco">License Number : </label>
                                    <div class="col-sm-5">
                                        <input type="text" name="license_no" class="vendorformreg" placeholder="Enter License Number">
                                    </div>
                                </div>

                                <div class="form-group row regfeild">
                                    <label for="inputEmail3" class="profileregco">ID Name : </label>
                                    <div class="col-sm-5">
                                        <input type="text" name="id_name" class="vendorformreg" placeholder="Enter ID Type">
                                    </div>
                                </div>
                                <!------------------form-group row ------------------------->
                                <div class="form-group row regfeild">
                                    <label for="inputEmail3" class="profileregco">License Photo : </label>

                                    <div class="col-sm-2 profilewrap">

                                        <div class="upload-btn-wrapper">
                                            <button class="btn uploadbutton">Upload</button>
                                            <input type="file" name="license_upload_file" name="myfile" />
                                        </div>

                                    </div>
                                </div>
                                <!------------------form-group row ------------------------->
                                <div class="form-group row regfeild">
                                    <label for="inputEmail3" class="profileregco">Photo of National ID / Passport :
                                    </label>

                                    <div class="col-sm-2 profilewrap">

                                        <div class="upload-btn-wrapper">
                                            <button class="btn uploadbutton">Upload</button>
                                            <input type="file" name="id_upload_file" name="myfile" />
                                        </div>

                                    </div>
                                </div>
                                <!------------------form-group row ------------------------->

                                <div class="form-group row regfeild">
                                    <label for="inputEmail3" class="profileregco">Password : </label>
                                    <div class="col-sm-5">
                                        <input type="text" name="password" id="vendorPassword" class="vendorformreg"
                                            placeholder="*************">
                                    </div>
                                </div>
                                <!------------------form-group row ------------------------->

                                <div class="form-group row regfeild">
                                    <label for="inputEmail3" class="profileregco">Confirm Password : </label>
                                    <div class="col-sm-5">
                                        <input type="text" name="password_confirmation" id="conf_vendorPassword" class="vendorformreg"
                                            placeholder="**************">
                                    </div>
                                </div>
                                <!------------------form-group row ------------------------->
                                <div class="form-group row regfeild">
                                    <label for="inputEmail3" class="profileregco">Facebook Link : </label>
                                    <div class="col-sm-5">
                                        <input type="text" name="fb_link" class="vendorformreg" placeholder="Enter Facebook Link">
                                    </div>
                                </div>
                                <!------------------form-group row ------------------------->

                                <div class="form-group row regfeild">
                                    <label for="inputEmail3" class="profileregco">Twitter Link : </label>
                                    <div class="col-sm-5">
                                        <input type="text" name="twitter_link" class="vendorformreg" placeholder="Enter Twitter Link">
                                    </div>
                                </div>
                                <!------------------form-group row ------------------------->

                                <div class="linehr"></div>

                                <div class="form-group">

                                    <label class="control-label col-sm-3 bankhead" for="head"><b>Bank info</b></label>

                                </div>

                                <div class="form-group row regfeild">
                                    <label for="inputEmail3" class="profileregco">Bank Account Name : </label>
                                    <div class="col-sm-5">
                                        <input type="text" name="account_name" class="vendorformreg" placeholder="Enter Bank Account Name">
                                    </div>
                                </div>
                                <!------------------form-group row ------------------------->
                                <div class="form-group row regfeild">
                                    <label for="inputEmail3" class="profileregco">Bank Name : </label>
                                    <div class="col-sm-5">
                                        <input type="text" name="bank_name" class="vendorformreg" placeholder="Enter Bank Name">
                                    </div>
                                </div>
                                <!------------------form-group row ------------------------->

                                <div class="form-group row regfeild">
                                    <label for="inputEmail3" class="profileregco">IBAN Number : </label>
                                    <div class="col-sm-5">
                                        <input type="text" name="iban_name" class="vendorformreg" placeholder="Enter IBAN Number">
                                    </div>
                                </div>
                                <!------------------form-group row ------------------------->

                                <div class="form-group row regfeild">
                                    <label for="inputEmail3" class="profileregco">Account Number : </label>
                                    <div class="col-sm-5">
                                        <input type="text" name="account_number" class="vendorformreg" placeholder="Enter Account Number">
                                    </div>
                                </div>
                                <!------------------form-group row ------------------------->
                                <!-- <div class="form-group">

        <label class="control-label col-sm-6 textalign_vendor" for="pwd">Payment Option:</label>

        <div class="col-sm-8 checkalign">

            <div class="checkbox">

                <label><input type="checkbox" name="payment_option" value="1"> <b style="font-size:15px">Online
                        Payment</b></label>

                <label> </label>

                <label> </label>

                <label> </label>

                <label> </label>

                <label><input type="checkbox" name="payment_option" value="2"> <b style="font-size:15px">
                        Cash</b></label>

                <div id="payment_option-error" class="error-class"></div>
            </div>
        </div>
    </div> -->
                                <div class="form-group row regfeild">
                                    <label for="inputEmail3" class="profileregco">Account Number : </label>
                                    <div class="optcheckterms">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="payment_method" value="online"
                                                id="checkboxOnline">
                                            <label class="form-check-label" id="vendorchkon" for="checkboxOnline">Online
                                                Payment</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="payment_method" value="cash"
                                                id="checkboxCash">
                                            <label class="form-check-label" id="vendorchkcash" for="checkboxCash">Cash</label>
                                        </div>
                                        <!---------------optcheckbox------------------>
                                    </div>
                                </div>
                                <!------------------form-group row ------------------------->
                                <div class="form-group">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-6 profileterms">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="terms_conditions" id="checkboxTerms"
                                                value="option1">
                                            <label class="form-check-label" for="checkboxTerms"><span class="vendorterms">I
                                                    agreed to Monasabatna </b></span><a href="#">Term & Conditions </a><b><span
                                                        class="vendorterms">and </span></b><a href="#">Privacy Policies</a></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-10 textalign">
                                        <button type="submit" id="myModal" name="submit" value="submit" class="btn btn-default signme-profilereg">Sign
                                            Up</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--------------------------container-fluid Profile registration -------------------->


                    </div>
                    <!-----------------v-pills-profiles ------------------------------->
                    <div class="tab-pane fade" id="v-pills-amenities" role="tabpanel" aria-labelledby="v-pills-amenities-tab">
                        <div class="dashvendortop">
                            <a data-toggle="modal" data-target="#addAmenities" class="addvenuedash" href="#"> Add </a>
                        </div>
                        <!----------------add button ---------------------->
                        <div class="dashboardamenpart">
                            <table class="table table-xs-12 table-sm-12 table-md-12">
                                <thead class="table-color-head">
                                    <tr>
                                        <th class="amenid" scope="col">Sr ID</th>
                                        <th scope="col">Amenities </th>
                                    </tr>
                                </thead>
                                <tbody class="table-hover">
                                    <!--  @isset($data) -->
                                    <?php $slno = 1; ?>
                                    @foreach($data as $amenitie)
                                    <tr>
                                        <th class="amenid" scope="row">{!! $slno++ !!}</th>
                                        <td>{!! $amenitie->name !!}</td>

                                        <td class="bg-white-booking"><a href="#"><i data-toggle="modal" data-target="#updateAmenities"
                                                    class="fas fa-pencil-alt" style="font-size:20px;color:#6cc0b9"></i></a></td>
                                        <td class="bg-white-booking"><a id="myCancel" href="#"><i data-toggle="modal"
                                                    data-target="#deleteAmenities" class="fas fa-trash-alt" style="font-size:20px;color:red"></i></a></td>
                                    </tr>
                                    @endforeach
                                    <!--  @endisset -->
                                </tbody>
                            </table>
                            <!------------------------------ Add Amenities ----------------------------------->
                            <!-- Modal with Text area -->
                            <form method="post" id="addAmenitiesForm" enctype="multipart/form-data">
                                <div class="modal fade" id="addAmenities" tabindex="-1" role="dialog" aria-labelledby="AddamenitiesLabel"
                                    aria-hidden="true">
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
                                                        <input type="text" name="name" id="name" class="vendorformamen"
                                                            placeholder="name">
                                                        <div id="name-error" class="error-class"></div>
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->
                                                <div class="form-group row regfeild">
                                                    <label for="inputEmail3" class="vendoramenco">Description : </label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="description" id="description" class="vendorformamen"
                                                            placeholder="description">
                                                        <div id="description-error" class="error-class"></div>
                                                    </div>
                                                </div>
                                                <!------------------form-group row ------------------------->
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="cancelmodalbtn">Add</button>
                                                <button type="button" name="cancel" value="cancel" class="cancelmodalbtn"
                                                    data-dismiss="modal">close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-------------------End Add Modal -------------------------------------->
                            <!------------------------------ Update Amenities ----------------------------------->
                            <!-- Modal with Text area -->
                            <div class="modal fade" id="updateAmenities" tabindex="-1" role="dialog" aria-labelledby="updateAmenitiesLabel"
                                aria-hidden="true">
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
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="vendoramenco">Amenities : </label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="password" id="vendorPassword" class="vendorformamen"
                                                            placeholder="Enter here">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="vendoramenco">Description : </label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="ammentie" id="ammentie" value="Swimming Phool"
                                                            class="vendorformamen" placeholder="Enter here">
                                                    </div>
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
                            <div class="modal fade" id="deleteAmenities" tabindex="-1" role="dialog" aria-labelledby="deleteAmenitiesLabel"
                                aria-hidden="true">
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


                            <!-------------------Delete Modal -------------------------------------->
                        </div>
                        <!--------------end of booking ---------------------------------->

                    </div>
                    <!-----------pills-amenities-tab ----------------------------->

                </div>
                <!----------------------------container-fluid-------------------------->
            </div>
            <!--------------v-pills-books -------------------------------->


        </div>
        <!----------------------vendorpan-tab ------------------------------------>
        <div class="tab-pane fade" id="pills-suplpan" role="tabpanel" aria-labelledby="pills-suplpan-tab">
            trigger
        </div>
        <!-------------------------------suplpan--------------------------------->
        <div class="tab-pane fade" id="pills-eventpan" role="tabpanel" aria-labelledby="pills-eventpan-tab">
            globalus
        </div>
        <!----------------------------eventpan-tab-------------------------->
    </div>
    <!--------------tab-content --------------------->
</div>
<!-------------------------globevendorpanel--------------------------->

<!------- body end-------->
@include('shared/footer')


<script>
    <!------inner page-Tabs-------->
    $(document).ready(function () {

        $("#Add-Express #Remove-Express-Deal").click(function () {
            $("#Remove-Express-Modal").modal();
        });
        $("#myaddexpress").click(function () {
            $("#Add-Express").modal();
        });
        $(".nav-tabs a").click(function () {
            $(this).tab('show');
        });
    });

</script>

<script type="text/javascript">
    $('MySlicker slicker').slick({
        rtl: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: false,
        infinite: true,
        speed: 300,
        adaptiveHeight: true
    });

</script>
