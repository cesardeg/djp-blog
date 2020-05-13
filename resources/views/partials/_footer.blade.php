<div class="ui vertical segment inverted footer">
   <div class="ui center aligned middle aligned container footer-container">
     <a href="{{ url('/') }}">
       <img src="{{ url('images/logo_sm_1.png') }}" class="ui centered image" alt="{{config('app.name')}}" style="width:64px;">
     </a>
     <div class="ui horizontal inverted small divided link list">
       <a class="item" href="{{ url('terms-and-conditions') }}">Terminos y Condiciones</a>
       <a class="item" href="{{ url('privacy-policy') }}">Política de Privacidad</a>
     </div>
     <div>
       @include('partials._credits_footer')
     </div>
   </div>
 </div>
