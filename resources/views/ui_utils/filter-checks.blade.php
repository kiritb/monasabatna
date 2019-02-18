<h4 class="venuecliphead">{{ $type_title }}</h4>
<div class="form-group">

    @foreach ($filters as $key=>$value)

    @if(in_array($value, $appliedFilters))
    <?php $checked = 'checked'; ?>
    @else
    <?php $checked = ''; ?>
    @endif

    <div class="form-check venue_filters">
        <input class="form-check-input" type="checkbox" name="{{ $name }}[]" value="{{ str_replace('_', ' ', $value) }}"
            id={{ $type_title . '-' . $key }} {{ $checked }}>
        <label class="form-check-label" for={{ $type_title . '-' . $key }}>
            {{ isset($prefix)?$prefix:'' }} {{ $value }}
        </label>
    </div>
    @endforeach

</div>
