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
                            <div class="col-md-5">
                                <div class="product-content">
                                    <div class="title"><h2>{{$rs->title}}</h2></div>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
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
                                    <a class="nav-link" data-toggle="pill" href="#reviews">Reviews (1)</a>
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
                                    <div class="reviews-submitted">
                                        <div class="reviewer">Phasellus Gravida - <span>01 Jan 2020</span></div>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <p>
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                                        </p>
                                    </div>
                                    <div class="reviews-submit">
                                        <h4>Give your Review:</h4>
                                        <div class="ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="row form">
                                            <div class="col-sm-6">
                                                <input type="text" placeholder="Name">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="email" placeholder="Email">
                                            </div>
                                            <div class="col-sm-12">
                                                <textarea placeholder="Review"></textarea>
                                            </div>
                                            <div class="col-sm-12">
                                                <button>Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <!-- Side Bar End -->
            </div>
        </div>
    </div>
    <!-- Product Detail End -->





@endsection

