<!-- Top bar Start -->

@php
$setting= \App\Http\Controllers\HomeController::getsetting()
@endphp

<div class="top-bar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <i class="fa fa-envelope"></i>
                {{$setting->email}}
            </div>
            <div class="col-sm-6">
                <i class="fa fa-phone-alt"></i>
                {{$setting->phone}}
            </div>
        </div>
    </div>
</div>
<!-- Top bar End -->

<!-- Nav Bar Start -->
<div class="nav">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
                    <a href="product-list.html" class="nav-item nav-link">Products</a>
                    <a href="product-detail.html" class="nav-item nav-link">Product Detail</a>
                    <a href="{{route('references')}}" class="nav-item nav-link">REFERENCES</a>
                    <a href="{{route('faq')}}" class="nav-item nav-link">FAQ</a>
                    <a href="{{route('contact')}}" class="nav-item nav-link">CONTACT</a>


                </div>

                <div class="navbar-nav ml-auto">
                    <div class="nav-item dropdown">
                        @auth
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name}}</a>
                            <div class="dropdown-menu">
                                <a href="{{route('myprofile')}}" class="dropdown-item">Myaccount</a>
                            <a href="{{route('logout')}}" class="dropdown-item">Logout</a>
                            </div>
                        @endauth
                        @guest
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">User</a>
                        <div class="dropdown-menu">
                            <a href="/login" class="dropdown-item">Login</a>
                            <a href="/register" class="dropdown-item">Register</a>
                            <a href="{{route('logout')}}" class="dropdown-item">Logout</a>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Nav Bar End -->

<!-- Bottom Bar Start -->
<div class="bottom-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-3">
                <div class="logo">
                    <a href="{{route('home')}}">
                        <img src="{{asset('assets')}}/img/logo2.jpg" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="search">
                    <input type="text" placeholder="Search">
                    <button><i class="fa fa-search"></i></button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="user">
                    <a href="wishlist.html" class="btn wishlist">
                        <i class="fa fa-heart"></i>
                        <span>(0)</span>
                    </a>
                    <a href="cart.html" class="btn cart">
                        <i class="fa fa-shopping-cart"></i>
                        <span>(0)</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bottom Bar End -->
