<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

    <div class="carousel-inner">

        @if (count($reviews) > 0)
        @foreach ($reviews as $key=>$review)
        <div class="carousel-item {{ ($key==0)?'active':'' }}">
            <img src={{ $review['fileUrl'] }} class="d-block w-100" id="testivenueone" alt="...">
            <div class="carousel-caption d-none d-md-block">

                <p class="venuepara">
                    {{ $review['review_comment'] }}
                    <a href="#">Read More</a>
                </p>
                <h5 class="venuetestiname">{{ $review['first_name'] }}
                    {{ $review['family_name'] }}</h5>
            </div>
        </div>
        @endforeach
        @else
        <div>No data!!</div>
        @endif

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <i class="fas fa-angle-left" id="venuetestil"></i>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <i class="fas fa-angle-right" id="venuetestir"></i>
        <span class="sr-only">Next</span>
    </a>

</div>
