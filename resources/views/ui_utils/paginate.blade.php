<ul class="pagination">
    <li class="page-item {{ ($paginate['prev_page_url'])?'':'disabled' }}"><a class="page-link" href="{{ $paginate['prev_page_url'] }}">Previous</a></li>
    @php $totalpages = $paginate["last_page"]; @endphp

    @foreach(range(1,$totalpages) as $i)
    @if($totalpages >0)
    <li class="page-item {{ ($paginate['current_page']==$i)?'active':'' }}"><a class="page-link" href="{{ $paginate['path'] }}?page={{ $i }}">{{
            $i }}</a></li>
    @endif
    @php $totalpages--; @endphp
    @endforeach
    <li class="page-item {{ ($paginate['next_page_url'])?'':'disabled' }}"><a class="page-link" href="{{ $paginate['next_page_url'] }}">Next</a></li>
</ul>
