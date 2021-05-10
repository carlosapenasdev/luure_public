@extends('layouts.login')

@section('content')
<div class="card-content">
	<form method="POST" action="{{ route('user.trocarSenha') }}" class="login-form" id="login-form">
		@csrf
		<div class="row">
			<div class="input-field col s12">
				<h5 class="ml-4">{{ config('app.name', 'Luure') }}: @lang('controller/user.change_pass')</h5>
			</div>
		</div>
		<div class="row margin">
			<div class="input-field col s12">

				<i class="material-icons prefix pt-2">lock_outline</i>
				<input id="password" name="password" type="password" class="@error('password') is-invalid @enderror validate" required autocomplete="current-password">
				<label for="password">@lang('auth.senha')</label>

				@error('password')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror

			</div>
		</div>    <div class="row margin">
			<div class="input-field col s12">

				<i class="material-icons prefix pt-2">lock_outline</i>
				<input id="password-confirm" name="password-confirm" type="password" class="@error('password-confirm') is-invalid @enderror validate" required autocomplete="current-password">
				<label for="password-confirm">@lang('controller/user.confirm_senha')</label>

				@error('password-confirm')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror

			</div>
		</div>
		<div class="row">
			<div class="input-field col s12 center-align">
				<button type="submit" class="btn-pmpr btn-pmpr-3" id="submit-all">
					@lang('controller/user.alterar')
				</button>
			</div>
		</div>
	</form>
</div>
@endsection

@section('js')
{!!Theme::js('js/scripts/form-validation.js')!!}

@include('layouts/partials/form-swerror')

<script>
	
	$(document).ready(function ()
	{
		Swal.fire({
			title              : "{{Lang::get('controller/user.change_pass_msg')}}!",
			icon: 'warning',
			timer: "{{config('sweetalert.timer')}}"
		});
		
		document.getElementById("submit-all").addEventListener("click", function(e)
		{
			if($('#password').val() != $('#password-confirm').val())
			{
				e.preventDefault();
				e.stopPropagation();

				Swal.fire({
					title              : "{{Lang::get('controller/user.not_equal')}}!",
					icon: 'warning',
					timer: "{{config('sweetalert.timer')}}"
				});
			}
			else if($('#password').val().length < 6 )
			{
				e.preventDefault();
				e.stopPropagation();

				Swal.fire({
					title              : "{{Lang::get('controller/user.less_than')}}!",
					icon: 'warning',
					timer: "{{config('sweetalert.timer')}}"
				});
			}
		});
	});

</script>

@endsection