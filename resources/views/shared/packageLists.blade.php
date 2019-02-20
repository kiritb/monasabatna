<h4 class="event_h_four">15 Event packages offered</h4>
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        @if (count($packageList) > 0)
        @foreach ($packageList as $key=>$packages)
        <a class="nav-item nav-link list-nav-tabs {{ ($key=='all')?'active':'' }}"
            id="nav-{{ strtolower(str_replace(' ', '-', $key)) }}-tab" data-toggle="tab"
            href="#nav-{{ strtolower(str_replace(' ', '-', $key)) }}" role="tab"
            aria-controls="nav-{{ strtolower(str_replace(' ', '-', $key)) }}" aria-selected="true">
            {{ ucfirst($key) }}
        </a>
        @endforeach
        @else
        <div>No data!!</div>
        @endif
    </div>
</nav>

<div class="tab-content" id="nav-eventportfolioContent">
    @if (count($packageList) > 0)
    @foreach ($packageList as $key=>$packages)
    <div class="tab-pane fade show {{ ($key=='all')?'active':'' }}"
        id="nav-{{ strtolower(str_replace(' ', '-', $key)) }}" role="tabpanel"
        aria-labelledby="nav-{{ strtolower(str_replace(' ', '-', $key)) }}-tab">
        <div class="eventportcontent">
            <!---------- start of content --------------->
            <div class="row">
                @if (count($packages) > 0)
                @foreach ($packages as $key=>$item)
                <div class="col-sm-3">
                    <div class="card">
                        <img src={{ $item['filePath'] }} class="img-responsive card-img-top" alt="Mountains">
                        <div class="card-body">
                            <h5 class="card-title">
                                <b>{{ $item['packageName'] }}</b>
                            </h5>
                            <p class="card-text">
                                <span class="col-green">SAR:</span>
                                {{ number_format($item['actualPrice']) }} {{$item['pricingType'] }}
                            </p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                        <div class="card-footer">
                            <a class="btn active" id="btn-port" onclick="filterSelection('all')">
                                Book Now
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <div>No data!!</div>
                @endif
            </div>
            <!-------------end of content -------------------------->
        </div>
    </div>
    @endforeach
    @else
    <div>No data!!</div>
    @endif
</div>