@extends('layouts.admin')

@section('title', 'Message list')
@section('content')
    <div class="main-panel col-xl-10">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-11 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"> Review
                            <p class="card-description"> Review list</p>
                                @include('home.message')
                            <div class="table-responsive pt-12">
                                <table class="table table-bordered ">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>Place</th>
                                        <th>Subject</th>
                                        <th>Review</th>
                                        <th>Rate</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Edit</th>
                                        <th>Delete</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datalist as $rs)
                                        <p></p>
                                        <tr class="table-info">
                                            <td>{{$rs->id}}</td>
                                            <td>
                                                <a href="{{route('admin_user_show',['id'=>$rs->user->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                                    {{$rs->user->name}}</a>
                                            </td>
                                            <td><a href="{{route('place',['id'=>$rs->place->id])}}" target="_blank">{{$rs->place->title}}</a></td>
                                            <td>{{$rs->subject}}</td>
                                            <td>{{$rs->review}}</td>
                                            <td>{{$rs->rate}}</td>
                                            <td>{{$rs->status}}</td>
                                            <td>{{$rs->created_at}}</td>
                                            <td>{{$rs->status}}</td>

                                            <td>
                                                <a href="{{route('admin_review_show',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                                    <img src="{{asset('assets/admin/images/file-icons/yeni')}}/edit.png"></a>
                                            </td>

                                            <td><a href="{{route('admin_review_delete',['id'=>$rs->id])}}" on onclick="return confirm('Eminmisiniz')"> <img src="{{asset('assets/admin/images/file-icons/yeni')}}/delete.png"></a> </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection
