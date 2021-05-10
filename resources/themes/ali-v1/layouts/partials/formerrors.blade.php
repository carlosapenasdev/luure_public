@if(isset($errors) && !is_array($errors))

@php
$errors = $errors->all();
@endphp

@endif
@if(count($errors))
<div class="col s12">
	<div class="col s6 offset-s3">
		<div class="card-alert card red alert">
			<div class="card-content white-text">
				<p><i class="material-icons">error</i> {{Lang::get('validation.show_error')}}:</p>
				
				@foreach($errors as $error)
				<p><i class="material-icons">adjust</i> {{$error}}</p>
				@endforeach
			</div>
			<button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
		</div>
	</div>
</div>
@endif