<form method="POST" id="{{ $appliedParams['pageType'] }}-form">
    <div class="list-heading">Filter</div>
    <div class="list-body">

        <!---- Price - formgroup ------->
        @if(isset($filters["price_range"]))
        @if (count($filters["price_range"]) > 0)

        <?php
            if (isset($appliedParams['price_range'])) {
                $appliedFilters = $appliedParams['price_range'];
            } else {
                $appliedFilters = [];
            }
        ?>

        @include('ui_utils/filter-checks', ['filters' =>
        $filters["price_range"],
        'type_title' => 'Price', 'name' => 'price_range', 'prefix' => 'SAR', 'appliedParams' => $appliedFilters])
        @else
        <div>No data!!</div>
        @endif
        @endif


        <!---- Seating Capacity - formgroup ------->
        @if(isset($filters["seating_capacity"]))
        @if (count($filters["seating_capacity"]) > 0)

        <?php
        if (isset($appliedParams['seating_capacity'])) {
            $appliedFilters = $appliedParams['seating_capacity'];
        } else {
            $appliedFilters = [];
        }
        ?>

        @include('ui_utils/filter-checks', ['filters' =>
        $filters["seating_capacity"],
        'type_title'
        => 'Seating Capacity', 'name' => 'seating_capacity', 'appliedParams' => $appliedFilters])
        @else
        <div>No data!!</div>
        @endif
        @endif

        <!---- Venue Type - formgroup ------->
        @if (isset($filters["vennue_types"]))
        @if (count($filters["vennue_types"]) > 0)

        <?php
        if (isset($appliedParams['vennue_types'])) {
            $appliedFilters = $appliedParams['vennue_types'];
        } else {
            $appliedFilters = [];
        }
        ?>

        @include('ui_utils/filter-checks', ['filters' =>
        $filters["vennue_types"],
        'type_title'
        => 'Venue Type', 'name' => 'vennue_types', 'appliedParams' => $appliedFilters])
        @else
        <div>No data!!</div>
        @endif
        @endif

        <!---- Event Type - formgroup ------->
        @if(isset($filters["event_types"]))
        @if (count($filters["event_types"]) > 0)

        <?php
        if (isset($appliedParams['event_types'])) {
            $appliedFilters = $appliedParams['event_types'];
        } else {
            $appliedFilters = [];
        }
        ?>

        @include('ui_utils/filter-checks', ['filters' =>
        $filters["event_types"],
        'type_title'
        => 'Event Type', 'name' => 'event_types', 'appliedParams' => $appliedFilters])
        @else
        <div>No data!!</div>
        @endif
        @endif

        <!---- Services Types - formgroup ------->
        @if(isset($filters["services_types"]))
        @if (count($filters["services_types"]) > 0)

        <?php
        if (isset($appliedParams['services_types'])) {
            $appliedFilters = $appliedParams['services_types'];
        } else {
            $appliedFilters = [];
        }
        ?>

        @include('ui_utils/filter-checks', ['filters' =>
        $filters["services_types"],
        'type_title'
        => 'Service Types', 'name' => 'services_types', 'appliedParams' => $appliedFilters])
        @else
        <div>No data!!</div>
        @endif
        @endif

        <!---- Facility / Amenities - formgroup ------->
        @if(isset($filters["ammenties_types"]))
        @if (count($filters["ammenties_types"]) > 0)

        <?php
        if (isset($appliedParams['ammenties_types'])) {
            $appliedFilters = $appliedParams['ammenties_types'];
        } else {
            $appliedFilters = [];
        }
        ?>

        @include('ui_utils/filter-checks', ['filters' =>
        $filters["ammenties_types"],
        'type_title'
        => 'Facility / Amenities', 'name' => 'ammenties_types', 'appliedParams' => $appliedFilters])
        @else
        <div>No data!!</div>
        @endif
        @endif

        <!---- Room Type - formgroup ------->
        @if(isset($filters["room_types"]))
        @if (count($filters["room_types"]) > 0)

        <?php
        if (isset($appliedParams['room_types'])) {
            $appliedFilters = $appliedParams['room_types'];
        } else {
            $appliedFilters = [];
        }
        ?>

        @include('ui_utils/filter-checks', ['filters' =>
        $filters["room_types"],
        'type_title'
        => 'Room Type', 'name' => 'room_types', 'appliedParams' => $appliedFilters])
        @else
        <div>No data!!</div>
        @endif
        @endif

        <!---- Reset Filters ------->

        <a class="resetvenue" href id="Reset">Reset Filters</a>
        <div class="filterext"></div>
        <input type="button" onclick="filterItNow('{{ $appliedParams['pageType'] }}-form', '{{ $appliedParams['pageType'] }}')"
            id="{{ $appliedParams['pageType'] }}-submitter" value="Submit" />
    </div>
</form>
