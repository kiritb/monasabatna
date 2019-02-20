<div class="container-fluid recommended-slicks">

    @if(isset($title))
    <div class="sliderheadevent">{{ $title }}</div>
    @endif

    <section class="mySlicker slicker">

        @if (count($slides) > 0)
        @foreach ($slides as $key=>$slide)
        @if(isset($slide['vennueId']))
        @php
        $id = $slide['vennueId'];
        $name = $slide['vennueName'];
        @endphp
        @elseif(isset($slide['eventOrganisersId']))
        @php
        $id = $slide['eventOrganisersId'];
        $name = $slide['eventOrgainsersName'];
        @endphp
        @elseif(isset($slide['packageId']))
        @php
        $id = $slide['packageId'];
        $name = $slide['packageName'];
        @endphp
        @else
        @php
        $id = $slide['supplierOrganisersId'];
        $name = $slide['supplierName'];
        @endphp
        @endif

        <div class="">
            <a href={{ url('/events/organisers/'.$id) }}>
                <img src={{ $slide['filePath'] }} alt={{ $name }}>
                @if(isset($name))
                <div class="sleek-labels py-2">{{ $name }}</div>
                @endif
            </a>
        </div>
        @endforeach
        @else
        <div>No Slides!!</div>
        @endif

    </section>
</div>