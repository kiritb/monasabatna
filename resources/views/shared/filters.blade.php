<form method="POST" id="{{ $pageType }}-form">
    <div class="list-heading">Filter</div>
    <div class="list-body">

        <!---- Price - formgroup ------->
        @if(isset($filters["price_range"]))
        @if (count($filters["price_range"]) > 0)
        @include('ui_utils/filter-checks', ['filters' =>
        $filters["price_range"],
        'type_title' => 'Price', 'name' => 'price_range', 'prefix' => 'SAR'])
        @else
        <div>No data!!</div>
        @endif
        @endif

        <!---- Seating Capacity - formgroup ------->
        @if(isset($filters["seating_capacity"]))
        @if (count($filters["seating_capacity"]) > 0)
        @include('ui_utils/filter-checks', ['filters' =>
        $filters["seating_capacity"],
        'type_title'
        => 'Seating Capacity', 'name' => 'seating_capacity'])
        @else
        <div>No data!!</div>
        @endif
        @endif

        <!---- Venue Type - formgroup ------->
        @if (isset($filters["vennue_types"]))
        @if (count($filters["vennue_types"]) > 0)
        @include('ui_utils/filter-checks', ['filters' =>
        $filters["vennue_types"],
        'type_title'
        => 'Venue Type', 'name' => 'vennue_types'])
        @else
        <div>No data!!</div>
        @endif
        @endif

        <!---- Event Type - formgroup ------->
        @if(isset($filters["event_types"]))
        @if (count($filters["event_types"]) > 0)
        @include('ui_utils/filter-checks', ['filters' =>
        $filters["event_types"],
        'type_title'
        => 'Event Type', 'name' => 'event_types'])
        @else
        <div>No data!!</div>
        @endif
        @endif

        <!---- Services Types - formgroup ------->

        @if(isset($filters["services_types"]))
        @if (count($filters["services_types"]) > 0)
        @include('ui_utils/filter-checks', ['filters' =>
        $filters["services_types"],
        'type_title'
        => 'Service Types', 'name' => 'services_types'])
        @else
        <div>No data!!</div>
        @endif
        @endif

        <!---- Facility / Amenities - formgroup ------->

        @if(isset($filters["ammenties_types"]))
        @if (count($filters["ammenties_types"]) > 0)
        @include('ui_utils/filter-checks', ['filters' =>
        $filters["ammenties_types"],
        'type_title'
        => 'Facility / Amenities', 'name' => 'ammenties_types'])
        @else
        <div>No data!!</div>
        @endif
        @endif

        <!---- Room Type - formgroup ------->

        @if(isset($filters["room_types"]))
        @if (count($filters["room_types"]) > 0)
        @include('ui_utils/filter-checks', ['filters' =>
        $filters["room_types"],
        'type_title'
        => 'Room Type', 'name' => 'room_types'])
        @else
        <div>No data!!</div>
        @endif
        @endif

        <!---- Reset Filters ------->

        <a class="resetvenue" href id="Reset">Reset Filters</a>
        <div class="filterext"></div>
        <input type="button" onclick="filterItNow('{{ $pageType }}-form', '{{ $pageType }}')" id="{{ $pageType }}-submitter"
            value="Submit" />
    </div>
</form>