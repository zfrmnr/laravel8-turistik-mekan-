@extends('layouts.admin')

@section('title', 'User list')
@section('content')
    <div class="main-panel col-xl-10">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-11 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"> Users
                            <p class="card-description"> user list</p>
                            <div class="table-responsive pt-12">
                                <table class="table table-bordered ">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>photo</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>roles</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datalist as $rs)
                                        <tr class="table-info">
                                            <td>{{$rs->id}}</td>
                                            <td>@if($rs->profile_photo_path)
                                                    <img src="{{\Illuminate\Support\Facades\Storage::url($rs->profile_photo_path)}}" width="50">
                                                @endif</td>
                                            <td>{{$rs->name}}</td>
                                            <td>{{$rs->email}}</td>
                                            <td>{{$rs->phone}}</td>
                                            <td>{{$rs->adress}}</td>
                                            <td>@foreach($rs->roles as $row)
                                            {{$row->name}},

                                            <a href="{{route('admin_user_roles',['id'=>$rs->id])}}"onclick="return !window.open(this.href,'','top=50 left=100 width=800 height=600')">
                                                <img src="{{asset('assets/admin/images/plus.png')}}" width="2px"> </a>
                                                @endforeach  </td>

                                            <td><a href="{{route('admin_user_edit',['id'=>$rs->id])}}" on onclick="return confirm('Eminmisiniz')"><img src="{{asset('assets/admin/images/file-icons/yeni')}}/edit.png"></a> </td>
                                            <td><a href="{{route('admin_user_delete',['id'=>$rs->id])}}" on onclick="return confirm('Eminmisiniz')"> <img src="{{asset('assets/admin/images/file-icons/yeni')}}/delete.png"></a> </td>
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
