@extends('layouts.auth')

@section('title', 'Crear una nueva contraseña')

@section('content')

<div class="ui middle aligned center aligned grid grid-auth">

  <div class="column column-auth">

    <h2 class="ui white header">
    <a href="{{ url('/blog') }}" class="image"><img src="{{url('images/logo_sm_1.png')}}" ></a>
      <div class="content white">
        Crear una nueva contraseña
      </div>
    </h2>
    <form class="ui large form" method="POST" action="{{ url('/password/reset') }}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="hidden" name="token" value="{{ $token }}">
      <div class="ui stacked segment">
        @include('partials._errors')
        @include('partials._success',['flashSuccess'=>'status'])
        <div class="field {{ $errors->has('email') ? 'error' : '' }}">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="email" placeholder="Correo electrónico" value="{{ $email or old('email') }}" >
          </div>
        </div>
        <div class="field {{ $errors->has('password') ? 'error' : '' }}">
          <div class="ui input left icon action">
            <i class="lock icon"></i>
            <input type="password" name="password" class="show-new-password-field" placeholder="Contraseña" autofocus>
            <button class="ui icon primary button show-new-password" tabindex="-1">
             <i class="eye icon"></i>
           </button>
          </div>
        </div>
        <div class="field {{ $errors->has('password') ? 'error' : '' }}">
          <div class="ui input left icon action">
            <i class="lock icon"></i>
            <input type="password"  name="password_confirmation" class="show-new-password-confirmation-field" placeholder="Confirmar contraseña">
            <button class="ui icon primary button show-new-password-confirmation" tabindex="-1">
             <i class="eye icon"></i>
           </button>
          </div>
        </div>
        <button type="submit" name="submit" class="ui fluid large primary submit button">Cambiar contraseña</button>
        <div class="ui divider"></div>
        <div class="ui "><a href="{{ url('login') }}">¿Recordó su contraseña?</a></div>

      </div>
    </form>

  </div>

</div>

@endsection
