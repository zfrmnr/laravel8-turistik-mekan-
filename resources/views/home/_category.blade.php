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
                                <span class="menu-title"><i class="fa fa-map-marker"></i>Kategoriler</span>
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
                            <a class="nav-link" href="{{route('myreviews')}}"><i class="fa fa-child"></i>Myreviews</a>
                        </li>

                        @auth
                        @php
                            $userRoles = Auth::user()->roles->pluck('name');
                        @endphp
                        @if ($userRoles->contains('admin'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin_home')}}" target="_blank"><i class="fa fa-microchip"></i>admin panel</a>
                        </li>
                            @endif
                        @endauth
                        <li class="nav-item">
                            <a class="nav-link" ></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" ></a>
                        </li>
                    </ul>
                </nav>
            </div>

