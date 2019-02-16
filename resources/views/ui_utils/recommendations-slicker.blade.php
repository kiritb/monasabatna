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
        @else
        @php
        $id = $slide['supplierOrganisersId'];
        $name = $slide['supplierName'];
        @endphp
        @endif

        <div class="bg-success">
            <a href={{ url('/events/organisers/'.$id) }}>
                <img src={{ $slide['filePath'] }} alt={{ $name }}>
                @if(isset($name))
                <div class="sleek-labels text-center p-2">{{ $name }}</div>
                @endif
            </a>
        </div>
        @endforeach
        @else
        <div>No Slides!!</div>
        @endif

    </section>
</div>