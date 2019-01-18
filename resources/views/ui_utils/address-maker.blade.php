<i class="fas fa-map-marker-alt address-marker" aria-hidden="true"></i>
<span class="evenspanline"> Address :
    <b>
        @if($data['address1'])
        {{ $data['address1'] }},
        @endif
        @if($data['address2'])
        {{ $data['address2'] }},
        @endif
        @if($data['city'])
        {{ $data['city'] }}
        @endif
    </b>
    <a class="showmap" href={{ ($data['gmaplink'])?$data['gmaplink']:'#' }}>
        Show in map
    </a>
</span>
<div class="spacer_boxupc"></div>