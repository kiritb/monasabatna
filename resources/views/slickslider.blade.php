<div class="container-fluid slickslideevent">
    @if(isset($title) ? $title : '')
    <div class="sliderheadevent">{{ isset($title) ? $title : '' }}</div>
    @endif
    <section class="mySlicker slicker">

        @if (count($slides) > 0)
        @foreach ($slides as $key=>$slide)
        <div>
            <img src={{ $slide['filePath'] }} alt={{ $slide['linkable_type'] }}>
            @if(isset($slide['label']))
            <div class="sleek-labels">6.Event Type/ Name</div>
            @endif
        </div>
        @endforeach
        @else
        <div>No Slides!!</div>
        @endif

    </section>
</div>
