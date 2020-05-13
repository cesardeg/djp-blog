<a class="item nav-link" href="{{ url('/dashboard/profile') }}">
    <i class="user icon"></i>
    Perfil
</a>
<a class="item nav-link" href="{{ url('/dashboard/favourite-articles') }}">
    <i class="heart icon"></i>
    Artículos favoritos
</a>
@if(Auth::user()->hasRole('admin'))
<a class="item nav-link" href="{{ url('/dashboard/settings') }}">
    <i class="settings icon"></i>
    Ajustes
</a>
<a class="item nav-link" href="{{ url('/dashboard/tools') }}">
    <i class="wrench layout icon"></i>
    Herramientas
</a>
<a class="item nav-link" href="{{ url('/dashboard/users') }}">
    <i class="users icon"></i>
    Usuarios
</a>
<a class="item nav-link" href="{{ url('/dashboard/subscriptions') }}">
    <i class="rss icon"></i>
    Subscripciones
</a>
@endif

@if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('editor'))
<a class="item nav-link" href="{{ url('/dashboard/articles') }}">
    <i class="file text outline icon"></i>
    Artículos
</a>
<a class="item nav-link" href="{{ url('/dashboard/categories') }}">
    <i class="list layout icon"></i>
    Categorías
</a>
<a class="item nav-link" href="{{ url('/dashboard/tags') }}">
    <i class="tags icon"></i>
    Tags
</a>
<a class="item nav-link" href="{{ url('/dashboard/media') }}">
    <i class="image icon"></i>
    Media
</a>
@endif
