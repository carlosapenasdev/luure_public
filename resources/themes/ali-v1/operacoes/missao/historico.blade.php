@if(!empty($missaoop) && $missaoop->historico()->isNotEmpty())
<h5 class="">{{Lang::get('historico.name')}}</h5>
<table class="striped">
	<tbody>
		@foreach($missaoop->historico() as $atividade)
		
		@include('layouts/partials/historico-atividade')

		@endforeach
	</tbody>
</table>
@endif