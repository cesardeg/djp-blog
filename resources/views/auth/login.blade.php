@extends('layouts.auth')

@section('title', 'Login')

@section('content')

<div class="ui middle aligned center aligned grid grid-auth">
  <div class="column column-auth">
    <h2 class="ui white header">
    <a href="{{ url('/blog') }}" class="image"><img src="{{ url('images/logo_sm_1.png') }}"></a>
      <div class="content white">
        Login
      </div>
    </h2>
    <form class="ui large form" method="POST" action="{{ url('login') }}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="ui stacked segment">
        @include('partials._errors')
        <div class="field {{ $errors->has('email') ? 'error' : '' }}">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="email" placeholder="Correo electrónico" value="{{ old('email') }}" autofocus>
          </div>
        </div>
        <div class="field {{ $errors->has('password') ? 'error' : '' }}">
          <div class="ui input left icon action">
            <i class="lock icon"></i>
            <input type="password" name="password" class="show-password-field" placeholder="Contraseña">
            <div class="ui icon primary button show-password" tabindex="-1">
             <i class="eye icon"></i>
           </div>
          </div>
        </div>
        <div class="field">
          <div class="ui checkbox">
            <input type="checkbox" name="remember">
            <label>Recuerdame</label>
          </div>
        </div>

        <button class="ui fluid large primary submit button" type="submit" name="submit">Log in</button>
        <div class="ui divider"></div>
        <div class="ui "><a href="{{ url('password/reset') }}" name="forgot">¿Olvidó su contraseña?</a></div>
      </div>
    </form>
    <div class="ui message">
        ¿Nuevo usuario? <a href="{{ url('register') }}">Registrar</a>
        @if(config('blogger.social_login.enabled'))
          <div class="ui horizontal divider">
            O
          </div>
          <div class="ui tiny buttons">
          @if(config('blogger.social_login.providers.facebook.enabled'))
            <a class="ui facebook button" href="{{ url('auth/facebook') }}">
              <i class="facebook icon"></i>
              Log in
            </a>
          @endif
          @if(config('blogger.social_login.providers.twitter.enabled'))
            <a class="ui twitter button" href="{{ url('auth/twitter') }}">
              <i class="twitter icon"></i>
              Log in
            </a>
          @endif
          @if(config('blogger.social_login.providers.google.enabled'))
            <a class="ui google plus button" href="{{ url('auth/google') }}">
              <i class="google plus icon"></i>
              Log in
            </a>
          @endif
        </div>
       @endif
    </div>
  </div>
</div>

@endsection
