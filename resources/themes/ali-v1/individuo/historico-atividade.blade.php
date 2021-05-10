@foreach($individuo->historico() as $atividade)

<div class="row mt-1 no-break">

	<div class="col s12">
		
		<p class="m-0">
			{!!$atividade->em_por!!}
		</p>
		@if($atividade->descricao !== '')
		<div class="row">
			<div class="col s12">
				<div class="card card-border z-depth-2">
					<div class="card-content">
						{!!$atividade->descricao!!}
					</div>
				</div>
			</div>
		</div>
		@endif
		<hr class="mt-2">
	</div>
</div>

@endforeach