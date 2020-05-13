@extends('layouts.frontend')

@section('title', 'Buscar artículos')

@section('content')
<div class="ui segments raised">

  <div class="ui segment large">
    {!! Breadcrumbs::render('frontend.search') !!}
  </div><!--end of segment-->

  <div class="ui segment teal padded">
    <h2>Buscar artículos</h2>
      <form class="search-form-sm" action="search">
        <div class="ui search fluid">
          <div class="ui icon input">
            <input class="prompt" type="text" name="query" value="{{ request('query') }}" placeholder="Search articles...">
            <i class="search icon"></i>
          </div><!--end of input-->
        </div><!--end of search fluid-->
      </form><!--end of form-->

      @if(count($articles) > 0)
        <p>Hemos encontrado {{$articles->total()}} article{{(count($articles)>1)? "s":""}} que coinciden con "<b>{{Request::input('query')}}</b>"
        </p>

        <div class="ui divided items">
          @foreach($articles as $article)
            <div class="item">

              <div class="ui tiny image">
                <a href="{{url('/blog/'.$article->slug)}}">
                  <img class="ui tiny hoverable image" src="{{(!empty($article->article_image))? url(config('blogger.filemanager.upload_path').'/'.$article->article_image): url('images/placeholder_640x480.png')}}">
                </a>
              </div><!--end of image-->

              <div class="middle aligned content">
                <a class="header" href="{{url('/blog/'.$article->slug)}}"><h3>{{ $article->title }} </h3></a>
                <div class="description">
                  <a href="{{url('about/'.$article->author->slug)}}">{{ $article->author_name }}</a>
                  <span class=" item-mute">| {{$article->published_at->diffForHumans()}}</span>
                </div>
              </div><!--end of content-->

              <div class="middle aligned content right floated">
                <a class="ui right floated tiny primary icon button no-wrap"  href="{{url('/blog/'.$article->slug)}}">
                  <i class="eye icon"></i> Leer artículo
                </a>
              </div><!--end of right content-->

            </div><!--end of item-->
          @endforeach
        </div><!--end of items-->
      @else
        <p>Oops! No pudimos encontrar ningun artículo que coincida con su busqueda.</p>
      @endif
 </div><!--end of segment-->
</div><!--end of segments-->
@if($articles && count($articles))
<div class="ui card blogger-card fluid no-box-shadow text-center">
  {{ $articles->links() }}
</div>
 @endif

@endsection
