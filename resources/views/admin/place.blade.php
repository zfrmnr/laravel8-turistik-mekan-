@extends('layouts.admin')

@section('title', 'Place list')
@section('content')
    <div class="main-panel col-xl-10">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-11 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"> Place
                                <a type="submit"  href="{{route('admin_place_add')}}" class="btn btn-primary mr-2">Add place</a></h4>

                            <p class="card-description"> Places list</p>
                            <div class="table-responsive pt-12">
                                <table class="table table-bordered ">
                                    <thead>
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
                                            <td>{{$rs->category_id}}</td>
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
                                            <td><a href="{{route('admin_place_edit',['id'=>$rs->id])}}" on onclick="return confirm('Eminmisiniz')"><img src="{{asset('assets/admin/images/file-icons/yeni')}}/edit.png"></a> </td>
                                            <td><a href="{{route('admin_place_delete',['id'=>$rs->id])}}" on onclick="return confirm('Eminmisiniz')"> <img src="{{asset('assets/admin/images/file-icons/yeni')}}/delete.png"></a> </td>
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
