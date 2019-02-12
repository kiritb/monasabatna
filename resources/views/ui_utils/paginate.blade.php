@if($paginate["total"] > 0)
<ul class="pagination">
    @php
    $totalpages = $paginate["last_page"];
    $nextpage = $paginate["current_page"] + 1;
    $prevpage = $paginate["current_page"] - 1;
    $pageType = $type;
    @endphp
    <li class="page-item {{ ($paginate['prev_page_url'])?'':'disabled' }}"><a class="page-link" href="javascript:void(0);"
            onclick="pagiNator('{{ $pageType }}',{{ $prevpage }})">Previous</a></li>

    @foreach(range(1, $totalpages) as $i)
    @if($totalpages > 0)
    <li class="page-item {{ ($paginate['current_page']==$i)?'active':'' }}">
        <a class="page-link" href="javascript:void(0);" onclick="pagiNator('{{ $pageType }}',{{ $i }})">
            {{ $i }}
        </a>
    </li>
    @endif
    @php $totalpages--; @endphp
    @endforeach
    <li class="page-item {{ ($paginate['next_page_url'])?'':'disabled' }}"><a class="page-link" href="javascript:void(0);"
            onclick="pagiNator('{{ $pageType }}',{{ $nextpage }})">Next</a></li>
</ul>
@endif
