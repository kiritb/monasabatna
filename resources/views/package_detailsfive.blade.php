@include('header')

<!------- form start-------->
<form class="form-vertical">
    <div class="container-fluid" id="commonpack-bg">
        <div class="row" id="set-bg">
            <div class="col-md-12 col-sm-12 themeform-top">

                <div class="col-md-2 col-sm-3 col-xs-3 form-group packform" id="citypack">
                    <label class="themelab">City</label>
                    <input type="text" name='datepicker' class="form-control themehome" placeholder="Jeddah">
                </div>

                <div class="col-md-2 col-sm-3 col-xs-3 form-group packform" id="datapack">
                    <label class="themelab">Date From</label>
                    <input type="text" class="form-control themehome" placeholder="16 May, 2018">
                    <span class="far fa-calendar-alt date-element-theme"></span>
                </div>

                <div class="col-md-2 col-sm-3 col-xs-3 form-group packform" id="labpack">
                    <label class="themelab">Date To</label>
                    <input type="text" class="form-control themehome" placeholder="20 May,2018" name="contact">
                    <span class="far fa-calendar-alt date-element-theme"></span>
                </div>
                <br>
                <br>
                <div class="form-group">
                    <div class="col-md-2 col-sm-3 col-xs-3 form-group packform" id="subpack">
                        <button type="submit" class="btn btn-danger sub_theme">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>
<!------- form start-------->
<!------- Banner start-------->
<div class="container-fluid" id="packagecommon">

    <h3 class="detail-party"><b>Party Zone</b></h3>

    @include('slickslider')
</div>
<!------- Banner end-------->

<div class="container-fluid">
    <div class="row" id="bg-requirement">
        <div class="row themedetails-top">
            <b class="theme-flower"> Flower de-rose decorations</b><br>
        </div>
        <div class="row sar-setting">
            <div class="col-md-9 col-sm-9 col-xs-9 settheme">

                Setup Time - <span class="col-green"><b>2 Hours</b></span>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-3 rightsar">
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


<div class="container-fluid" id="packagedetails">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab"
                aria-controls="nav-about" aria-selected="true">About</a>
            <a class="nav-item nav-link" id="nav-provided-tab" data-toggle="tab" href="#nav-provided" role="tab"
                aria-controls="nav-provided" aria-selected="false">What's Provided</a>
            <a class="nav-item nav-link" id="nav-requisites-tab" data-toggle="tab" href="#nav-requisites" role="tab"
                aria-controls="nav-requisites" aria-selected="false">Pre-Requisites</a>
            <a class="nav-item nav-link" id="nav-testi-tab" data-toggle="tab" href="#nav-testi" role="tab"
                aria-controls="nav-testi" aria-selected="false">Reviews</a>
            <a class="nav-item nav-link" id="nav-terms-tab" data-toggle="tab" href="#nav-terms" role="tab"
                aria-controls="nav-terms" aria-selected="false">Terms & Policies</a>
        </div>
    </nav>

    <div class="tab-content" id="nav-packContent">
        <div class="tab-pane fade show active" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">

            <div class="packagegreyline"></div>
            <div class="packagecontent">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.Lorem ipsum
                    dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                    minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.Lorem ipsum
                    dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                    minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip</p>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-provided" role="tabpanel" aria-labelledby="nav-provided-tab">
            <div class="packagegreyline"></div>
            <div class="packagecontent">
                <!--------------Event Organisers ------------------>
                <ul style="list-style-type:circle; color:6cc0b9">
                    <ol> Write the review for all the facilities </ol>
                    <ol> Write the review for all the facilities </ol>
                    <ol> Write the review for all the facilities </ol>
                    <ol> Write the review for all the facilities </ol>
                    <ol> Write the review for all the facilities </ol>
                </ul>
            </div>
            <!------------end of events content ---------------------->
        </div>
        <div class="tab-pane fade" id="nav-requisites" role="tabpanel" aria-labelledby="nav-requisites-tab">
            <div class="packagegreyline"></div>
            <div class="packagecontent">
                <!--------------Event Organisers ------------------>
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
            <!------------end of events content ---------------------->
        </div>
        <div class="tab-pane fade" id="nav-testi" role="tabpanel" aria-labelledby="nav-testi-tab">
            <div class="packagegreyline"></div>
            <!--------------Event Organisers ------------------>
            <div class="packagecontent">
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
            <!------------end of events content ---------------------->
        </div>
        <div class="tab-pane fade" id="nav-terms" role="tabpanel" aria-labelledby="nav-terms-tab">
            <div class="packagegreyline"></div>
            <!------------end of events content ---------------------->
            <div role="tabpanel" class="tab-pane active" id="about">
                <div class="packagecontent">
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
            </div>
        </div>
    </div>
</div>

@include('slickslider')
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
