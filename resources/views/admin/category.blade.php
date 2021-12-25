@extends('layouts.admin')

@section('title', 'Category List')
@section('content')
    <div class="main-panel col-xl-10">
        <div class="content-wrapper">
            <div class="row">
    <div class="col-lg-11 stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"> Category
                    <a type="submit"  href="{{route('admin_category_add')}}" class="btn btn-primary mr-2">Add Category</a></h4>

                <p class="card-description"> category list</p>
            <div class="table-responsive pt-12">
                            <table class="table table-bordered ">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Parent</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>delete</th></tr>
                                </thead>
                                <tbody>
                                @foreach($datalist as $rs)
                                    <p></p>
                                <tr class="table-info">
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->parent_id}}</td>
                                    <td>{{$rs->title}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="{{route('admin_category_edit',['id'=>$rs->id])}}" on onclick="return confirm('Eminmisiniz')">Edit</a> </td>
                                    <td><a href="{{route('admin_category_delete',['id'=>$rs->id])}}" on onclick="return confirm('Eminmisiniz')">Delete</a> </td>
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


@include('admin._footer')
@endsection


<!-- Brand Start -->

