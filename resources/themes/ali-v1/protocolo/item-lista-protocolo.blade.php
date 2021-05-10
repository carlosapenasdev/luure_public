<li class="collection-item width-100 left">

	@php
	$proto = $protocolo;
	@endphp

	@include('protocolo/display-proto')
	@include('protocolo/display-difusao')

	@role('root|sysadmin|chefe-subsecao|chefe-regional|chefe-local|adjunto')
	@if($protocolo->isInAdministrativo())
	<div class="width-20 right center-align">

		@include('protocolo/visibilidade-protocolo')

	</div>
	@endif
	@endrole
</li>