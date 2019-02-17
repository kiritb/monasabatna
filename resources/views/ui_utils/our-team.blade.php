<div class="our-team">

    @if(isset($title))
    <div class="text-center">
        <h1>
            {{ $title }}
        </h1>
    </div>
    @endif

    <section class="ourTeamSlicker slicker">

        @if (count($slides) > 0)
        @foreach ($slides as $key=>$slide)
        <div>
            <img src={{ $slide['filePath'] }} alt={{ $slide['name'] }} />

            @if(isset($slide['name']))
            <h3 class="employee-name">{{ $slide['name'] }}</h3>
            <h4 class="employee-designation">{{ $slide['designation'] }}</h4>
            @endif

            @if(isset($slide['description']))
            <p class="employee-desc">{{ $slide['description'] }}</p>
            @endif
        </div>
        @endforeach
        @else
        <div>No Slides!!</div>
        @endif

    </section>
</div>
