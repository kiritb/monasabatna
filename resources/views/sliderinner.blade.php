<div id="myCarouselIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        @if (count($slides) > 0)
        @foreach ($slides as $key=>$slide)
        <div class="carousel-item {{ ($key==0)?'active':'' }}">
            <img class="d-block" src={{ $slide['filePath'] }} alt={{ $slide['linkable_type'] }}>
            <div class="carousel-caption home-banner-captions">
                <h1 class="bannerfont">
                    Performance Appraisal
                </h1>
            </div>
        </div>
        @endforeach
        @else
        <div>No Slides!!</div>
        @endif
    </div>
    <a class="carousel-control-prev" href="#myCarouselIndicators" role="button" data-slide="prev">

        <i class="fas fa-chevron-circle-left" id="ban-inner-arrowleft" style="font-size:30px; color:#000000"></i>
    </a>
    <a class="carousel-control-next" href="#myCarouselIndicators" role="button" data-slide="next">
        <i class="fas fa-chevron-circle-right" id="ban-inner-arrowright" style="font-size:30px; color:#000000"></i>
    </a>

    <!------- <form class="col-sm-12" id="search-form">
        <div class="form-group col-sm-6 align-items-center m-auto">
            <div class="input-group input-group-lg center-block">
                <i class="fa fa-search icon-for-search" aria-hidden="true"></i>
                <input type="text" class="form-control banner" id="radius-given" placeholder="Search by City,Venue,Events Organizers & Suppliers">
            </div>
        </div>
    </form> ----->
    <!---   <ol class="carousel-indicators">
        <li data-target="#myCarouselIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#myCarouselIndicators" data-slide-to="1"></li>
        <li data-target="#myCarouselIndicators" data-slide-to="2"></li>
    </ol> -->
</div>
<!------- banner start-------->