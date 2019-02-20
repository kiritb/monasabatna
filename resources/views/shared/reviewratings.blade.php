<div class="container-fluid" id="starreview">
    <div class="bg-star">
        <div class="row eventcustom">
            <div class="col-lg-12 col-md-12 col-xs-6">
                <h4 class="eve-head text-center">
                    <b>See What our Customers are saying</b>
                </h4>
            </div>
            @if(isset($reviews['ratingResponsiveness']))
            <div class="col-lg-6 col-md-6 col-xs-6">
                <span class="star-head">Responsiveness</span>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-6">
                @include('ui_utils.stars', ['stars'=> $reviews['ratingResponsiveness']])
            </div>
            @endif

            @if(isset($reviews['ratingQuality']))
            <div class="col-lg-6 col-md-6 col-xs-6">
                <span class="star-head">Quality</span>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-6">
                @include('ui_utils.stars', ['stars'=> $reviews['ratingQuality']])
            </div>
            @endif

            @if(isset($reviews['ratingAvailability']))
            <div class="col-lg-6 col-md-6 col-xs-6">
                <span class="star-head">Availability</span>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-6">
                @include('ui_utils.stars', ['stars'=> $reviews['ratingAvailability']])
            </div>
            @endif

            @if(isset($reviews['ratingValueForMoney']))
            <div class="col-lg-6 col-md-6 col-xs-6">
                <span class="star-head"> Value for money</span>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-6">
                @include('ui_utils.stars', ['stars'=> $reviews['ratingValueForMoney']])
            </div>
            @endif

        </div>
    </div>
</div>