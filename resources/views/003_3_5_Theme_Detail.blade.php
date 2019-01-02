@include('header')

<!------- form start-------->
<div class="container-fluid">
    <div class="row" id="set-bg">
        <div class="col-md-12 col-sm-12 themeform-top">

            <div class="col-md-2 col-sm-3 col-xs-3 form-group">
                <label class="themelab">City</label>
                <input type="text" name='datepicker' class="form-control themehome" placeholder="Jeddah">

            </div>

            <div class="col-md-2 col-sm-3 col-xs-3 form-group">
                <label class="themelab">Date From</label>
                <input type="text" class="form-control themehome" placeholder="16 May, 2018" name="contact">
                <span class="far fa-calendar-alt date-element-theme"></span>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3 form-group">
                <label class="themelab">Date To</label>
                <input type="text" class="form-control themehome" placeholder="20 May,2018" name="contact">
                <span class="far fa-calendar-alt date-element-theme"></span>
            </div>
            <br>
            <br>
            <div class="form-group">
                <div class="col-md-2 col-sm-3 col-xs-3 form-group">
                    <button type="submit" class="btn btn-danger sub_theme">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!------- form start-------->
<!------- Banner start-------->
<div class="container">

    <h3 class="detail-party"><b>Party Zone</b></h3>


    @include('slider')
</div>
<!------- Banner end-------->

<!------- Information start-------->


<div class="container">


    <div class="row" id="bg-requirement">
        <div class="row themedetails-top">
            <b class="theme-flower"> Flower de-rose decorations</b><br>
        </div>
        <div class="row sar-setting">
            <div class="col-md-9 col-sm-9 col-xs-9 settheme">

                Setup Time - <span class="col-green"><b>2 Hours</b></span>
            </div>

            <div class="rightsar">
                <span class="col-sar"> <b>SAR:</b></span> <b>100/Setup</b>
            </div>
        </div>

        <div class="row request-setting">
            <div class="col-md-10 col-sm-10 col-xs-10 right">
                <span class="theme-travel">Travel free upto 10 kms. SAR 50 for 11 kms. to 25 kms.</span>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2 right">
                <button type="submit" class="btn btn-lg-12 submittheme">Request Booking</button>
            </div>
        </div>

    </div>
    <!------------------------------ Request sent modal ----------------------------------->

    <!------------------------------ Request send modal ----------------------------------->
</div>
</div>

<!---------- end of container ------------->


<!------- Information end-------->
<!-------------------- tab container begin ------------------------->
<div class="row gap"></div>

<div class="container">

    <div class="tabsdetails">
        <div class="themedetails_tabs">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="high-details" role="tablist">
                <li role="presentation" class="active"><a href="#about" aria-controls="about" role="tab" data-toggle="tab"><b>About</b></a></li>
                <li role="presentation"><a href="#provided" aria-controls="provided" role="tab" data-toggle="tab"><b>What's
                            Provided</b></a></li>
                <li role="presentation"><a href="#pre" aria-controls="pre" role="tab" data-toggle="tab"><b>Pre-Requisites</b></a></li>
                <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab"><b>Reviews</b></a></li>
                <li role="presentation"><a href="#terms" aria-controls="terms" role="tab" data-toggle="tab"><b>Terms &
                            Policies</b></a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content testimonial">
                <div role="tabpanel" class="tab-pane active" id="about">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.Lorem ipsum
                        dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                        minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.Lorem ipsum
                        dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                        minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip</p>

                </div>
                <div role="tabpanel" class="tab-pane" id="provided">
                    <div class="tab-pane active" id="1b">
                        <ul style="list-style-type:circle; color:6cc0b9">
                            <ol> Write the review for all the facilities </ol>
                            <ol> Write the review for all the facilities </ol>
                            <ol> Write the review for all the facilities </ol>
                            <ol> Write the review for all the facilities </ol>
                            <ol> Write the review for all the facilities </ol>
                        </ul>
                    </div>

                </div>
                <div role="tabpanel" class="tab-pane" id="pre">
                    <div class="tab-pane active" id="1b">
                        <ul style="list-style-type:circle; color:6cc0b9">
                            <ol> Write the review for all the facilities </ol>
                            <ol> Write the review for all the facilities </ol>
                            <ol> Write the review for all the facilities </ol>
                            <ol> Write the review for all the facilities </ol>
                            <ol> Write the review for all the facilities </ol>
                            <ol> Write the review for all the facilities </ol>
                            <ol> Write the review for all the facilities </ol>
                        </ul>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="reviews">

                    <div class='container-fluid'>
                        <div class='col-md-12 col-sm-12'>
                            <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                                <!-- Bottom Carousel Indicators -->

                                <!-- Carousel Slides / Quotes -->
                                <div class="carousel-inner">

                                    <!-- Quote 1 -->
                                    <div class="item active">

                                        <div class="row">
                                            <div class="col-sm-3 text-center">
                                                <img src="svg/images/testi-themedetails.png">

                                            </div>
                                            <div class="col-sm-9">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                    nisi ut aliquip.Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                    aliqua. Ut enim ad minim veniam</p>
                                                <span class="namechange">Allan carls</span>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Quote 2 -->
                                    <div class="item">

                                        <div class="row">
                                            <div class="col-sm-3 text-center">
                                                <img src="svg/images/testi-about1.png">
                                            </div>
                                            <div class="col-sm-9">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                    nisi ut aliquip.Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                    aliqua. Ut enim ad minim veniam</p>
                                                <span class="namechange">Allan carls</span>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Quote 3 -->
                                    <div class="item">

                                        <div class="row">
                                            <div class="col-sm-3 text-center">
                                                <img src="svg/images/testi-about2.png">
                                            </div>
                                            <div class="col-sm-9">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                    nisi ut aliquip.Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                    aliqua. Ut enim ad minim veniam</p>
                                                <span class="namechange">Allan carls</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- Carousel Buttons Next/Prev -->
                                <a data-slide="prev" href="#quote-carousel" class="resize-theme"><img src="svg/images/testi-arrow-left.png"
                                        style="width:22px; height:32px; margin-top:-313px; margin-left:-36px;"></a>
                                <a data-slide="next" href="#quote-carousel" class="resize-theme"><img src="svg/images/testi-arrow-right.png"
                                        style="width:20px; height:32px; float:right; margin-top:-156px; margin-right:-39px;"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="terms">
                    <div role="tabpanel" class="tab-pane active" id="about">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.Lorem
                            ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                            ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.Lorem
                            ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                            ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip</p>

                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
<div class="row"></div>
<div class="row"></div>

<!---------------------------- Thumbnail carousel start --------------------------------->
@include('slickslider')
@include('footer')

<!------- body end-------->
<script>
    $('#wrapper').css('min-width', '100%');

</script>
<script>
    $(document).ready(function () {
        $("#datepicker").datepicker();
        $('.fa-calendar').click(function () {
            $("#datepicker").focus();
        })
    })

</script>
<script>
    $(document).ready(function () {
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

</script>
<script>
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

</body>

</html>
