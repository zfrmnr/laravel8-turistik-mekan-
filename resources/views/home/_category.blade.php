@php
    $parentCategories= \App\Http\Controllers\HomeController::categorylist()
@endphp

<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <nav class="navbar bg-light">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home')}}"><i class="fa fa-home"></i>Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" >
                                <i class="icon-layout menu-icon"></i>
                                <span class="menu-title"><i class="fa fa-category"></i>Kategoriler</span>
                                <ul class="category-list">
                                @foreach($parentCategories as $rs)
                                </ul>
                            </a>
                            <div class="collapse" id="ui-basic">
                                <ul>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">{{$rs->title}}</a>
                                        <div class="custom-menu">
                                            <div class="row">
                                                @if(count($rs->children))
                                                    <ul class="list-links">
                                                    @include('home.categorytree',['children'=>$rs->children])
                                                    </ul>
                                                @endif
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="{{route('user_places')}}"><i class="fa fa-plus-square"></i>add place</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('user_favcart')}}"><i class="fa fa-heart"></i>Fav place</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-child"></i>Kids & Babies Clothes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-tshirt"></i>Men & Women Clothes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-mobile-alt"></i>Gadgets & Accessories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-microchip"></i>Electronics & Accessories</a>
                        </li>
                    </ul>
                </nav>
            </div>
