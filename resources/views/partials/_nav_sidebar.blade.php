<!-- SIDEBAR MENU -->
<div class="ui right vertical menu sidebar">
  <a href="#" class="item sidebar-trigger" style="padding-top:18px;padding-bottom:18px;">
      <i class="close icon"></i>
  </a>
   @if(config('blogger.search_engine.enabled'))
    <div class="item">
      <form class="search-form-sm" action="{{ url('search') }}">
      <div class="ui search">
        <div class="ui icon input">
          <input class="prompt" type="text" name="query" placeholder="BUSCAR...">
          <i class="search icon"></i>
        </div>
        <div class="results"></div>
      </div>
      </form>
    </div>
  @endif
  @if(Session::has( config('blogger.auth.impersonification.session_name')))
    <a class="item nav-link" href="{{ url('dashboard/back-to-admin-mode') }}" name="back-to-admin-mode"><i class="spy icon"></i> Volver a modo administrador</a>
  @endif
  <a class="item nav-link" href="{{ url('/')}}">
    Blog
  </a>
  <div class="ui item nav-link">
     <div class="ui fluid dropdown">
     <i class="dropdown icon"></i>
      <div class="text">Categorías</div>
      <div class="menu menu-sidebar">
        @include('partials._nav_categories')
      </div>
     </div>
  </div>
  <a class="item nav-link" href="{{url('about')}}">
    Acerca
  </a>
  @if(Auth::check())
    @include('partials._nav_dashboard')
  @endif
  <a class="item nav-link" href="{{ url('logout') }}" name="logout">
    Log out
  </a>
 </div>

<!--END OF SIDEBAR MENU -->
