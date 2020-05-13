@extends('layouts.frontend')

@section('title', 'Confirmación de Subscripción')

@section('content')
<div class="ui segments raised">

  <div class="ui segment large">
    {!! Breadcrumbs::render('frontend.subscription',old('email')) !!}
  </div><!--end of segment-->

  <div class="ui segment teal padded">
    <h2>Confirmación de Subscripción</h2>
    @if($success)
    	<div class="ui message green">¡Gracias por confirmar su correo!, ¡Ahora está subscrito a nuestro sitio!.</div>
    @else
    	<div class="ui red green">Hubo un problema al confirmar su correo electrónico.</div>
    @endif
   </div><!--end of segment-->
</div><!--end of segments-->
@endsection
