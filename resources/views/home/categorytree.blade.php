@foreach($children as $subcategory)

        @if(count($subcategory->children))

            <li ><a href="#" class="col-md-1">{{$subcategory->title}}</a> </li>

                @include('home.categorytree',['children'=>$subcategory->children])


        @else
            <li><a href="{{route('categoryplaces',['id'=>$subcategory->id])}}" class="col-md-4">{{$subcategory->title}}</a> </li>
            @endif

@endforeach
