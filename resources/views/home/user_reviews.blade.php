
@extends('layouts.home')

@section('title','fav')


@section('content')
    <div class="my-account">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                        <a class="nav-link"  href="{{route('home')}}"><i class="fa fa-home"></i>Home</a>
                        <a class="nav-link active " id="address-nav" data-toggle="pill" href="#address-tab" role="tab"><i class="fa fa-child"></i>MyReviews</a>
                        <a class="nav-link" href="{{route('logout')}}"><i class="fa fa-sign-out-alt"></i>Logout</a>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="tab-content">
                        <div class="tab-pane fade" id="dashboard-tab" role="tabpanel" aria-labelledby="dashboard-nav">
                            <h4></h4>
                        </div>
                        <div class="tab-pane fade " id="orders-tab" role="tabpanel" aria-labelledby="orders-nav">

                        </div>
                        <div class="tab-pane fade " id="payment-tab" role="tabpanel" aria-labelledby="payment-nav">

                        </div>
                        <div class="tab-pane fade show active" id="address-tab" role="tabpanel" aria-labelledby="address-nav">
                            <h4>Reviews</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered ">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Place</th>
                                        <th>Subject</th>
                                        <th>Reviews</th>
                                        <th>Rate</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Delete</th></tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datalist as $rs)
                                        <tr class="table-info">
                                            <td>{{$rs->id}}</td>
                                            <td><a href="{{route('place',['id'=>$rs->place->id])}}" target="_blank">{{$rs->place->title}}</a></td>
                                            <td>{{$rs->subject}}</td>
                                            <td>{{$rs->review}}</td>
                                            <td>{{$rs->rate}}</td>
                                            <td>{{$rs->status}}</td>
                                            <td>{{$rs->created_at}}</td>
                                            <td><a href="{{route('user_review_delete',['id'=>$rs->id])}}" on onclick="return confirm('Eminmisiniz')"> <img src="{{asset('assets/admin/images/file-icons/yeni')}}/delete.png" width="50"></a> </td>
                                        </tr>
                                    @endforeach
                                    @include('home.message')
                                    </tbody>
                                </table>
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












































