<div id="modalArchive" class="modal bottom-sheet">

	<div class="modal-content">
		<h4>{{Lang::get('controller/protocolo.finalizados')}}</h4>
		
		<div class="row">
			@php
			$i = 1;
			@endphp
			@foreach($finalizados as $protocolo)
			<div class="col s12 m4 l4">
				<ul class="collection with-header coluna-estagio">
					<li class="collection-item width-100 left">

						@php
						$proto = $protocolo;
						@endphp

						@include('protocolo/display-proto')
						@include('protocolo/display-difusao')

					</li>
				</ul>
			</div>
			@php
			
			$i++;
			
			if($i == 4)
			{
			echo '</div><div class="row">';
				$i = 1;
			}
			@endphp
			@endforeach
		</div>
	</div>
</div>