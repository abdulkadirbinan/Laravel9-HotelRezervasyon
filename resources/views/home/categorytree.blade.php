@foreach($children as $subcategory)
    <ul class="submenu">
        @if(count($subcategory->children))
            <li>{{ $subcategory->title }}</li>
            <ul class="submenu">
                @include('home.categorytree',['children'=> $subcategory->$children])
            </ul>
            <hr>
        @else
            <li> <a href="{{route('categoryhotels',['id'=>$subcategory->id, 'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a> </li>
        @endif
    </ul>
@endforeach

