@include('shared/headercustom')
<link rel="stylesheet" type="text/css" href="{{ url('css/vendor-panel/superadmin.css') }}">
<!------- body start-------->
<div class="greydivider"></div>
<div class="container-fluid" id="globevendorpanel">
    @include('vendor-panel/vendorheaderbar')
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-vendorpan" role="tabpanel" aria-labelledby="pills-vendorpan-tab">
            <div class="container-fluid" id="dashboardcontent">

                @include('vendor-panel/vendorvenuesidebar')
                <div class="tab-content" id="v-pills-tabContent">

                    <div>
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
                                    <ul>
                                        <button type="submit" class="btn btn-default btn-lg-6" id="sign-text">Save</button>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!------------------------v-pills-policies------------------------------------------->

                </div>
                <!-------------------------globevendorpanel--------------------------->

                <!------- body end-------->
                @include('shared/footer')
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
