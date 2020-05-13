@extends('layouts.auth')

@section('title', 'Registro')

@section('content')

<div class="ui middle aligned center aligned grid grid-auth">
  <div class="column column-auth">
    <h2 class="ui white header">
    <a href="{{ url('/blog') }}" class="image"><img src="{{ url('images/logo_sm_1.png') }}"></a>
      <div class="content white">
        Registro
      </div>
    </h2>
    <form class="ui large form" method="POST" action="{{ url('register') }}">
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
            <button class="ui icon primary button show-password" tabindex="-1" >
             <i class="eye icon"></i>
           </button>
          </div>
        </div>
        <button type="submit" class="ui fluid large primary button" name="submit">Registrar</button>
        <div>Con su registro, acepta los <a href="{{ url('terms-and-conditions') }}">Terminos de Servicio</a></div>
        <div class="ui divider"></div>
        <div class="ui "><a href="{{ url('login') }}">¿Ya cuenta con una cuenta?</a></div>
      </div>
    </form>
  </div>
</div>

@endsection
