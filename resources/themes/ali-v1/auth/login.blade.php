@extends('layouts.login')

@section('content')
<form method="POST" action="{{ route('login') }}" class="login-form">
    @csrf
    <div class="row">
        <div class="input-field col s12">
            <h5 class="ml-4">{{ config('app.name', 'Luure') }}: @lang('auth.login')</h5>
        </div>
    </div>
    <div class="row margin">
        <div class="input-field col s12">
            <i class="material-icons prefix pt-2">person_outline</i>
            <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <label for="email" class="center-align">@lang('common.email')</label>
        </div>
    </div>
    <div class="row margin">
        <div class="input-field col s12">

            <i class="material-icons prefix pt-2">lock_outline</i>
            <input id="password" name="password" type="password" class="@error('password') is-invalid @enderror" required autocomplete="current-password">
            <label for="password">@lang('auth.senha')</label>
            
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>
    </div>
    {{--
        <div class="row">
        <div class="col s12 m12 l12 ml-2 mt-1">
            <p>
                <label>
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <span>@lang('auth.lembrar')</span>
                </label>
            </p>
        </div>
    </div>
    --}}
    <div class="row">
        <div class="input-field col s12 center-align">
            <button type="submit" class="btn-pmpr btn-pmpr-3">
                @lang('auth.entrar')
            </button>
        </div>
    </div>
    {{--
    @if (Route::has('password.request'))
    <div class="row">
        <div class="input-field col s12 m12 l12">
            <p class="margin right-align medium-small">
                <a href="{{ route('password.request') }}" class="link-pmpr">
                    @lang('auth.esqueceu')
                </a>
            </p>
        </div>
    </div>
    @endif
    --}}
</form>
@endsection
