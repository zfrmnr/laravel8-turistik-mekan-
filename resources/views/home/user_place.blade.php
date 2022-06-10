@extends('layouts.home')

@section('title','profile')


@section('content')
        <div class="my-account">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                        <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                            <a class="nav-link"  href="{{route('home')}}"><i class="fa fa-home"></i>Home</a>
                            <a class="nav-link active" id="orders-nav" data-toggle="pill" href="#orders-tab" role="tab"><i class="fa fa-plus-square"></i>Add New Place</a>
                            <a class="nav-link" href="{{route('logout')}}"><i class="fa fa-sign-out-alt"></i>Logout</a>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="tab-content">
                            <div class="tab-pane fade" id="dashboard-tab" role="tabpanel" aria-labelledby="dashboard-nav">
                                <h4>Reviews</h4>

                            </div>
                            <div class="tab-pane fade show active" id="orders-tab" role="tabpanel" aria-labelledby="orders-nav">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th>id</th>
                                            <th>Category</th>
                                            <th>Title(s)</th>
                                            <th>Country</th>
                                            <th>City</th>
                                            <th>Location</th>
                                            <th>Image</th>
                                            <th>Image Gallery</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($datalist as $rs)
                                            <p></p>
                                            <tr class="table-info">
                                                <td>{{$rs->id}}</td>
                                                <td>{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
                                                <td>{{$rs->title}}</td>
                                                <td>{{$rs->country}}</td>
                                                <td>{{$rs->city}}</td>
                                                <td>{{$rs->location}}</td>
                                                <td>
                                                    @if($rs->image)
                                                        <img src="{{Storage::url($rs->image)}}" height="30" alt="">
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{route('admin_image_add',['place_id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                                        <img src="{{asset('assets/admin/images/file-icons/yeni')}}/a1.png"></a>
                                                </td>
                                                <td>{{$rs->status}}</td>
                                                <td><a href="{{route('user_place_edit',['id'=>$rs->id])}}" on onclick="return confirm('Eminmisiniz')"><img src="{{asset('assets/admin/images/file-icons/yeni')}}/edit.png" width="20"></a> </td>
                                                <td><a href="{{route('user_place_delete',['id'=>$rs->id])}}" on onclick="return confirm('Eminmisiniz')"> <img src="{{asset('assets/admin/images/file-icons/yeni')}}/delete.png" width="20"></a> </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <button type="submit" class="btn"><a href="{{route('user_place_add')}}">Add place</a> </button>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="payment-tab" role="tabpanel" aria-labelledby="payment-nav">
                                <h4>Payment Method</h4>
                                <p>

                                </p>
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
                                @include('profile.show')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection
