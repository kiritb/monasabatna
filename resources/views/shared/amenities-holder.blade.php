<div class="row">

    @if (count($amenities) > 0)
    @foreach ($amenities as $amenity)
    <div class="col">

        @switch($amenity['amenitieName'])
        @case("Gym")
        <h1><i class="fas fa-dumbbell"></i></h1>
        @break

        @case("Swimming Pool")
        <h1><i class="fas fa-swimmer"></i></h1>
        @break

        @case("Kids Play Area")
        <h1><i class="fab fa-playstation"></i></h1>
        @break

        @default
        <h1><i class="fa fa-street-view"></i></h1>
        @endswitch

        <label><b>{{ $amenity['amenitieName'] }}</b></label>
    </div>
    @endforeach
    @else
    <div class="noData">No data!!</div>
    @endif
</div>
