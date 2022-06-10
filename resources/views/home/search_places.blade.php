@extends('layouts.home')

@section('title',$search."place list")


@section('content')

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item">Places</li>
                <a class="breadcrumb-item active"><a href=>{{$search}}</a> </li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product List Start -->
    <div class="product-view">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">

                        @foreach($datalist as $rs)
                        <div class="col-lg-4">
                            <div class="product-item">
                                <div class="product-title">
                                    <a href="#">{{$rs->title}}</a>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <div class="product-image">
                                    <a href="product-detail.html">
                                        <img src="{{Storage::url($rs->image)}}" height="300" alt="Place Image">
                                    </a>
                                    <div class="product-action">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                        <a href="#"><i class="fa fa-search"></i></a>
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

                    <div class="col-md-12">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
            </div>
        </div>
    </div>
    <!-- Product List End -->


@endsection

