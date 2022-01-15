@extends('layouts.home')

@section('title',$data->title)


@section('content')
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>

                <li class="breadcrumb-item active">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category, $data->category->title) }}</li>
                <li class="breadcrumb-item">{{$data->title}}</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product Detail Start -->
    <div class="product-detail">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-detail-top">
                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <div class="product-slider-single normal-slider">
                                    <img src="{{Storage::url($data->image)}}" alt="Product Image">
                                    @foreach($datalist as $rs)
                                    <img src="{{Storage::url($rs->image)}}" alt="Product Image">
                                    @endforeach
                                </div>
                                <div class="product-slider-single-nav normal-slider">
                                    <div class="slider-nav-img"><img src="{{Storage::url($data->image)}}"  height="50" width="50" alt="Product Image"></div>
                                    @foreach($datalist as $rs)
                                    <div class="slider-nav-img"><img src="{{Storage::url($rs->image)}}"  height="50" alt="Product Image"></div>
                                    @endforeach

                                </div>
                            </div>
                            @php
                                $avgrev=\App\Http\Controllers\HomeController::avrgreview($data->id);
                                $countreview=\App\Http\Controllers\HomeController::countreview($data->id);
                            @endphp
                            <div class="col-md-5">
                                <div class="product-content">
                                    <div class="title"><h2>{{$rs->title}}</h2></div>
                                    <div class="ratting">
                                        <i class="fa fa-star" @if($avgrev<1) -o empty @endif></i>
                                        <i class="fa fa-star" @if($avgrev<2) -o empty @endif></i>
                                        <i class="fa fa-star" @if($avgrev<3) -o empty @endif></i>
                                        <i class="fa fa-star" @if($avgrev<4) -o empty @endif></i>
                                        <i class="fa fa-star" @if($avgrev<5) -o empty @endif></i>
                                    </div>
                                    <div class="price">
                                        <h4>Country</h4>
                                        <p>{{$data->country}}</p>
                                    </div>
                                    <div class="price">
                                        <h4>City</h4>
                                        <p>{{$data->city}}</p>
                                    </div>
                                    <div class="price">
                                        <h4>location</h4>
                                        <p>{{$data->location}}</p>
                                    </div>
                                    <div class="action">
                                        <a class="btn" href="{{route('addtofav',['id'=>$rs->id])}}"><i class="fa fa fa-heart"></i>Add to Fav</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row product-detail-bottom">
                        <div class="col-lg-12">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#description">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#specification">Specification</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#reviews">Reviews {{$countreview}}</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="description" class="container tab-pane active">
                                    <h4>Place description</h4>
                                    <p>
                                        {!! $data->detail !!}
                                    </p>
                                </div>
                                <div id="specification" class="container tab-pane fade">
                                    <h4>Place specification</h4>
                                    <ul>
                                        {!! $data->detail !!}
                                    </ul>
                                </div>

                                <div id="reviews" class="container tab-pane fade">
                                    <div class="reviews-submitted" >
                                        @foreach($reviews as $rs)
                                        <div class="reviewer">{{$rs->user->name}} - <span>{{$rs->created_at}}</span></div>
                                        <div class="ratting">
                                            <i class="fa fa-star" @if($rs->rate<1) -o empty @endif></i>
                                            <i class="fa fa-star"  @if($rs->rate<2) -o empty @endif ></i>
                                            <i class="fa fa-star"  @if($rs->rate<3) -o empty @endif></i>
                                            <i class="fa fa-star"  @if($rs->rate<4) -o empty @endif ></i>
                                            <i class="fa fa-star"  @if($rs->rate<5) -o empty @endif></i>
                                            <i>{{$countreview}}</i>
                                        </div>
                                            <div class="review-body">
                                                <strong>{{$rs->subject}}</strong>
                                                <p>{{$rs->review}}</p>
                                            </div> @endforeach

                                    </div>

                                        @livewire('review',['id' => $data->id])

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Side Bar End -->
            </div>
        </div>
    <!-- Product Detail End -->





@endsection

