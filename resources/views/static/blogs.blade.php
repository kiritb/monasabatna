@include('shared/header')
<link rel="stylesheet" type="text/css" href="{{ url('css/static-pages.css') }}">

<div class="maindivider"></div>
<!------- body start-------->
<div class="container-fluid">
    <!----------------------- tab container end -------------------->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        @if (count($data["blogs"]) > 0)
        @foreach ($data["blogs"] as $blog)
        <div class="row color-bg-eve">
            <div class="content-eve">
                <img src={{ $blog['filePath'] }} alt="Blog image" class="blog-pic">
            </div>

            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="content-eve-right">
                <div class="content-optionblog">
                    <div class="blog-head">
                        <b>{{ $blog['blogHeader'] }}</b>
                    </div><br>
                    <div class="blog-icon">
                        <i class='far fa-calendar-alt' style='font-size:25px;color:#6cc0b9'></i>
                        <span class="blog-icon-text">{{ $blog['createdDate'] }}</span>
                    </div><br>
                    <p class="blogsteam">
                        {{ $blog['blogText'] }}
                    </p>
                    <button class="btn active" id="btn-blogtwo" onclick="filterSelection('all')"> Read More</button>
                </div>
            </div>
        </div>
        @endforeach
        @else
        <div class="noData">No data!!</div>
        @endif
        <div class="row">
            <nav aria-label="Page navigation example">
                <ul class="pagination">

                    @php
                    $paginate = $data['paginate'];
                    $totalpages = $paginate["last_page"];
                    $nextpage = $paginate["current_page"] + 1;
                    $prevpage = $paginate["current_page"] - 1;
                    @endphp

                    <li class="page-item">
                        <a class="page-link" href={{ $paginate['prev_page_url'] }} tabindex="-1">Previous</a>
                    </li>

                    @foreach(range(1, $totalpages) as $i)
                    @if($totalpages > 0)
                    <li class="page-item {{ ($paginate['current_page']==$i)?'active':'' }}">
                        <a class="page-link" href={{ $paginate['path'] . '?page=' . $i }}>
                            {{ $i }}
                        </a>
                    </li>
                    @endif
                    @php $totalpages--; @endphp
                    @endforeach

                    <li class="page-item">
                        <a class="page-link" href={{ $paginate['next_page_url'] }}>Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
</div>

@include('shared/footer')
