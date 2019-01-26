<h4 class="venuecliphead">{{ $type_title }}</h4>
<div class="form-group">

    @foreach ($filters as $key=>$prices)
    <div class="form-check venue_filters">
        <input class="form-check-input" type="checkbox" value="" id={{ $type_title . '-' . $key }} required>
        <label class="form-check-label" for={{ $type_title . '-' . $key }}>
            {{ isset($prefix)?$prefix:'' }} {{ $prices }}
        </label>
    </div>
    @endforeach

</div>
