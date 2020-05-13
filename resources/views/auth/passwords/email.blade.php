@extends('layouts.auth')

@section('title', 'Recuperar Contraseña')

@section('content')

<div class="ui middle aligned center aligned grid grid-auth">

  <div class="column column-auth">

    <h2 class="ui white header">
    <a href="{{ url('/blog') }}" class="image"><img src="{{ url('images/logo_sm_1.png') }}" alt="{{ config('app.name') }}"></a>
      <div class="content white">
        Recuperar contraseña
      </div>
    </h2>

    <form class="ui large form" method="POST" action="{{ url('/password/email') }}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="ui stacked segment">
        @include('partials._errors')
        @include('partials._success',['flashSuccess'=>'status'])
        <div class="field {{ $errors->has('email') ? 'error' : '' }}">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="email" placeholder="Correo electrónico" autofocus>
          </div>
        </div>
        <button class="ui fluid large primary submit button" name="submit">Enviar enlace de recuperación</button>
        <div class="ui "><a href="{{ url('login') }}" name="login">¿Recordó su contraseña?</a></div>
      </div>
    </form>

  </div>

</div>

@endsection
