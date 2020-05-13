@extends('layouts.frontend')

@section('title', 'Aviso de Privacidad')

@section('content')
<div class="ui segments raised">

  <div class="ui segment large">
    {!! Breadcrumbs::render('frontend.privacy-policy') !!}
  </div><!--end of segment-->

  <div class="ui segment teal padded">
    <h2>Aviso de Privacidad</h2>


  </div><!--end of segment-->
</div><!--end of segments-->
@endsection
