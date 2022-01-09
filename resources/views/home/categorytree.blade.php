@foreach($children as $subcategory)

        @if(count($subcategory->children))

            <li ><a href="#" class="col-md-4">{{$subcategory->title}}</a> </li>

                @include('home.categorytree',['children'=>$subcategory->children])


        @else
            <li><a href="#" class="col-md-4">{{$subcategory->title}}</a> </li>
            @endif

@endforeach
