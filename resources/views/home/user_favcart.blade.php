@extends('layouts.home')

@section('title','fav')


@section('content')
        <div class="my-account">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                        <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                            <a class="nav-link"  href=""><i class="fa fa-tachometer-alt"></i>Dashboard</a>
                            <a class="nav-link " id="orders-nav" data-toggle="pill" href="#orders-tab" role="tab"><i class="fa fa-plus-square"></i>Add New Place</a>
                            <a class="nav-link active " id="payment-nav" data-toggle="pill" href="#payment-tab" role="tab"><i class="fa fa-credit-card"></i>Fav Place</a>
                            <a class="nav-link" id="address-nav" data-toggle="pill" href="#address-tab" role="tab"><i class="fa fa-map-marker-alt"></i>address</a>
                            <a class="nav-link " id="account-nav" data-toggle="pill" href="#account-tab" role="tab"><i class="fa fa-user"></i>Account Details</a>
                            <a class="nav-link" href="{{route('logout')}}"><i class="fa fa-sign-out-alt"></i>Logout</a>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="tab-content">
                            <div class="tab-pane fade" id="dashboard-tab" role="tabpanel" aria-labelledby="dashboard-nav">
                                <h4>Reviews</h4>

                            </div>
                            <div class="tab-pane fade " id="orders-tab" role="tabpanel" aria-labelledby="orders-nav">

                            </div>
                            <div class="tab-pane fade show active" id="payment-tab" role="tabpanel" aria-labelledby="payment-nav">
                                <div class="table-responsive">
                                <h4>Fav Places</h4>
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th>id</th>
                                            <th>Place</th>
                                            <th>Country</th>
                                            <th>City</th>
                                            <th>Location</th>
                                            <th>Image</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($datalist as $rs)
                                            <p></p>
                                            <tr class="table-info">
                                                <td>{{$rs->id}}</td>
                                                <td><a href="{{route('place',['id'=>$rs->place->id])}}">
                                                        {{$rs->place->title}}</a></td>
                                                <td>{{$rs->place->country}}</td>
                                                <td>{{$rs->place->city}}</td>
                                                <td>{{$rs->place->location}}</td>
                                                <td>
                                                    @if($rs->place->image)
                                                        <img src="{{Storage::url($rs->place->image)}}" width="150">
                                                    @endif
                                                </td>
                                                <td><a href="{{route('user_favcart_update',['id'=>$rs->place->id])}}" on onclick="return confirm('Eminmisiniz')"><img src="{{asset('assets/admin/images/file-icons/yeni')}}/edit.png" width="50"></a> </td>
                                                <td><a href="{{route('user_favcart_delete',['id'=>$rs->id])}}" on onclick="return confirm('Eminmisiniz')"> <img src="{{asset('assets/admin/images/file-icons/yeni')}}/delete.png" width="50"></a> </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="address-tab" role="tabpanel" aria-labelledby="address-nav">
                                <h4>Address</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Payment Address</h5>
                                        <p>123 Payment Street, Los Angeles, CA</p>
                                        <p>Mobile: 012-345-6789</p>
                                        <button class="btn">Edit Address</button>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Shipping Address</h5>
                                        <p>123 Shipping Street, Los Angeles, CA</p>
                                        <p>Mobile: 012-345-6789</p>
                                        <button class="btn">Edit Address</button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="account-tab" role="tabpanel">
                                <h4>Account Details</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection
