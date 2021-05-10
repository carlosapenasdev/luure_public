@extends('layouts/browse')

@section('css')

@endsection

@section('content')
<div class="card-content">

	<div class="row">
		@forelse($sistemas as $sistema)
		<div class="col s2 mb-1 card-sistema">
			<a target="_blank" href="{{$sistema->link}}">
				<h5 class="task-card-title mb-3 white-text grey darken-2 m-0" style="padding: 0.855em; margin: 0 !important;">{{$sistema->name}}</h5>
				
				<img src="{{($sistema->banner)}}" class="ratio img-responsive">
			</a>
		</div>
		@empty
		Vazio
		@endforelse
	</div>

</div>
@endsection

@section('js')

@endsection