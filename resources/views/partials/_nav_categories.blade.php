@if(isset($categories) && count($categories))
    @foreach($categories as $category)
        <a class="item" href="{{url('categories/'.$category['slug'])}}">{{$category['name']}}</a>
    @endforeach

    @if($numberOfCategories>5)
    	<a class="item item-all-entities" style="background-color: #f3f3f3 !important; font-weight: bold !important;" href="{{ url('categories') }}">Ver todas las {{$numberOfCategories}} categorías</a>
    @endif
@endif
