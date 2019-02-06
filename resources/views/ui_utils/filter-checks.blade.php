<h4 class="venuecliphead">{{ $type_title }}</h4>
<div class="form-group">

    @foreach ($filters as $key=>$value)
    <div class="form-check venue_filters">
        <input class="form-check-input" type="checkbox" name="{{ $name }}[]" value={{ $value }} id={{ $type_title . '-' . $key }} >
        <label class="form-check-label" for={{ $type_title . '-' . $key }}>
{{ isset($prefix)?$prefix:'' }} {{ $value }}
        </label>
    </div>
    @endforeach

</div>
