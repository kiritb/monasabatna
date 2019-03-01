@if (count($policies) > 0)
@foreach ($policies as $policy)
<h3>{{ $policy['termsHeader'] }}</h3>
<p>{{ $policy['policyTerms'] }}</p>
<hr />
@endforeach
@else
<div class="noData">No data!!</div>
@endif
