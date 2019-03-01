@include('header')
<link rel="stylesheet" type="text/css" href="{{ url('css/static-pages.css') }}">
<div class="maindivider"> </div>
<!------- body start-------->
<div class="container-fluid" id="faq-align">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="col-md-12 globe-panel">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                @if (count($data))
                @foreach ($data as $key=>$faqs)
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading_{{ $key }}">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_{{ $key }}"
                                aria-expanded="true" aria-controls="collapse_{{ $key }}" class="collapsed">
                                Q.{{ $key+1 }} {{ $faqs['question'] }}
                            </a>
                        </h4>
                    </div>
                    <div id="collapse_{{ $key }}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_{{ $key }}">
                        <div class="panel-body">
                            <p>{{ $faqs['answer'] }}</p>
                            <a class="acc_read" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="noData">No data!!</div>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" id="faq-textarea">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="maindivider"> </div>
        <div class="row">
            <div class="form-group blogforms">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-faq">
                    <textarea class="form-control box-faq" placeholder="Your question here..."></textarea>
                    <button type="submit" class="btn btn-lg-12 click-faq">Post Question</button>
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer')
