@extends('layouts.frontend')

@section('title', 'Terminos y Condiciones')

@section('content')
<div class="ui segments raised">

  <div class="ui segment large">
    {!! Breadcrumbs::render('frontend.terms-and-conditions') !!}
  </div><!--end of segment-->

  <div class="ui segment teal padded">
    <h2>Terminos y Condiciones</h2>


  </div><!--end of segment-->
</div><!--end of segments-->
@endsection
