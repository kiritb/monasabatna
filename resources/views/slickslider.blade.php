<div class="container-fluid slickslideevent">

    @if(isset($title))
    <div class="sliderheadevent">{{ $title }}</div>
    @endif

    <section class="mySlicker slicker">

        @if (count($slides) > 0)
        @foreach ($slides as $key=>$slide)
        <div>
            <img src={{ $slide['filePath'] }} alt={{ $slide['linkable_type'] }}>
            @if(isset($slide['label']))
            <div class="sleek-labels">{{ $slide['label'] }}</div>
            @endif
        </div>
        @endforeach
        @else
        <div>No Slides!!</div>
        @endif

    </section>
</div>
