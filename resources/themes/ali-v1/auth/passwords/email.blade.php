@extends('layouts.login')

@section('content')
<form method="POST" action="{{ route('password.email') }}" class="login-form">
    @csrf
    <div class="row">
        <div class="input-field col s12">
            <h5 class="ml-4">{{ config('app.name', 'Luure') }}: @lang('auth.recuperar_senha')</h5>
        </div>
    </div>
    
    @if (session('status'))
    <div class="card-alert card green">
        <div class="card-content white-text">
            <span class="card-title white-text darken-1">
                <i class="material-icons">notifications</i> @lang('common.sucesso')
            </span>
            <p>{{ session('status') }}</p>
        </div>
        <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    @endif

    <div class="row margin">
        <div class="input-field col s12">
            <i class="material-icons prefix pt-2">person_outline</i>
            <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus data-error=".errorTxt1">
            
            <div class="errorTxt1">
                <div id="uname-error" class="error">
                    @error('email')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <label for="email" class="center-align">@lang('common.email')</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s8 offset-s2">
            <button type="submit" class="btn-pmpr">
                @lang('auth.enviar_reset')
            </button>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12 m12 l12">
            <p class="margin right-align medium-small">
                <a href="{{ route('login') }}" class="link-pmpr">
                    @lang('auth.entrar_login')
                </a>
            </p>
        </div>
    </div>
</form>
@endsection
