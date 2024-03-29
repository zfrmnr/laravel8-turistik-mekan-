@php
    $setting= \App\Http\Controllers\HomeController::getsetting()
@endphp

@extends('layouts.home')

@section('title','Z-TRAVEL')
@section('description'){{ $setting->description }}@endsection
@section('keywords',$setting->keywords)

@section('content')
    @include('home._category')
    @include('home._slider')


    <!-- Category Start-->
    <div class="category">
        <div class="container-fluid">
            <div class="row">
                @foreach($mustseem as $rs)
                <div class="col-md-3">
                    <div class="category-item ch-400">
                        <img src="{{Storage::url($rs->image)}}" height="300" />
                        <a class="category-name" href="{{route('place',['id'=>$rs->id])}}">
                            <p>{{$rs->title}}</p>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Category End-->


    <!-- Featured Product Start -->
    <div class="featured-product product">
        <div class="container-fluid">
            <div class="section-header">
                <h1>MOSTLİKE PLACES</h1>
            </div>
            <div class="row align-items-center product-slider product-slider-4">
                @foreach($mostlike as $rs)
                <div class="col-lg-3">
                    <div class="product-item">
                        <div class="product-title">
                            <a href="{{route('place',['id'=>$rs->id])}}">{{$rs->title}}</a>
                            @php
                                $avgrev=\App\Http\Controllers\HomeController::avrgreview($rs->id);
                                $countreview=\App\Http\Controllers\HomeController::countreview($rs->id);
                            @endphp
                            <div class="ratting">
                                <i class="fa fa-star" @if($rs->rate<1) -o empty @endif></i>
                                <i class="fa fa-star" @if($rs->rate<2) -o empty @endif></i>
                                <i class="fa fa-star" @if($rs->rate<3) -o empty @endif></i>
                                <i class="fa fa-star" @if($rs->rate<4) -o empty @endif></i>
                                <i class="fa fa-star" @if($rs->rate<5) -o empty @endif></i>
                                <i>({{$countreview}})</i>
                            </div>
                        </div>
                        <div class="product-image">
                            <a href="{{route('place',['id'=>$rs->id])}}">
                                <img src="{{Storage::url($rs->image)}}" height="300">
                            </a>
                            <div class="product-action">
                                <form action="{{route('user_favcart_add',['id'=>$rs->id])}}" method="post">
                                    @csrf
                                    <div class="action">
                                        <button class="btn" type="submit"><i class="fa fa fa-heart"></i>Add to Fav</button>
                                    </div>
                                </form>
                                <a href="{{route('place',['id'=>$rs->id])}}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="product-price">
                            <h3>{{$rs->city}}</h3>
                            <a class="btn" href="{{route('place',['id'=>$rs->id])}}"><i class=""></i>Show Now</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>

    <div class="recent-product product">
        <div class="container-fluid">
            <div class="section-header">
                <h1>MUST SEEM PLACES</h1>
            </div>
            <div class="row align-items-center product-slider product-slider-4">
                @foreach($mustseem as $rs)
                <div class="col-lg-3">
                    <div class="product-item">
                        <div class="product-title">
                            <a href="{{route('place',['id'=>$rs->id])}}">{{$rs->title}}</a>
                            @php
                                $avgrev=\App\Http\Controllers\HomeController::avrgreview($rs->id);
                                $countreview=\App\Http\Controllers\HomeController::countreview($rs->id);
                            @endphp
                            <div class="ratting">
                                <i class="fa fa-star" @if($avgrev<1) -o empty @endif></i>
                                <i class="fa fa-star" @if($avgrev<2) -o empty @endif></i>
                                <i class="fa fa-star" @if($avgrev<3) -o empty @endif></i>
                                <i class="fa fa-star" @if($avgrev<4) -o empty @endif></i>
                                <i class="fa fa-star" @if($avgrev<5) -o empty @endif></i>
                                <i>({{$countreview}})</i>
                            </div>
                        </div>
                        <div class="product-image">
                            <a href="{{route('place',['id'=>$rs->id])}}">
                                <img src="{{Storage::url($rs->image)}}" height="300">
                            </a>
                            <div class="product-action" >
                                <form action="{{route('user_favcart_add',['id'=>$rs->id])}}" method="post">
                                    @csrf
                                    <div class="action">
                                        <button class="btn" type="submit"><i class="fa fa fa-heart"></i>Add to Fav</button>
                                    </div>
                                </form>
                                <a href="{{route('place',['id'=>$rs->id])}}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="product-price">
                            <h3>{{$rs->city}}</h3>
                            <a class="btn" href="{{route('place',['id'=>$rs->id])}}"><i class=""></i>Show Now</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Recent Product End -->

@endsection
