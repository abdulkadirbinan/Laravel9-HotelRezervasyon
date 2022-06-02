@foreach($children as $subcategory)



        <ul class="submenu">
           {{$subcategory->children}}
            @if(count($subcategory->children ))
                @include('home.categorytree',['children'=> $subcategory->$children])
            @else
                <li> <a href="{{route('categoryhotels',['id'=>$subcategory->id, 'slug'=>$subcategory->title])}}">{{$subcategory->title}} xx</a> </li>
            @endif
        </ul>



@endforeach

