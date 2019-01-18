<div class="container-fluid upcomingcontentid">
    <section class="slider-for slicker" id="upcomingmain">
        @if (count($slides) > 0)
        @foreach ($slides as $key=>$slide)
        <div>
            <img src={{ $slide['filePath'] }} alt={{ $slide['linkable_type'] }}>
        </div>
        @endforeach
        @else
        <div>No Slides!!</div>
        @endif

    </section>

    <section class="slider-nav slicker" id="thumbnailmain">
        @if (count($slides) > 0)
        @foreach ($slides as $key=>$slide)
        <div>
            <img src={{ $slide['filePath'] }} alt={{ $slide['linkable_type'] }}>
        </div>
        @endforeach
        @else
        <div>No Slides!!</div>
        @endif
    </section>
</div>
