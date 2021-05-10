@if(!empty($user) && $user->historico()->isNotEmpty())
<h5 class="">{{Lang::get('historico.name')}}</h5>
<table class="striped">
	<tbody>
		@foreach($user->historico() as $atividade)

		@include('layouts/partials/historico-atividade')

		@endforeach
	</tbody>
</table>
@endif