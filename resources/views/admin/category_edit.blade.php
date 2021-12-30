@extends('layouts.admin')

@section('title', 'Category Edit')
@section('content')
    <div class="main-panel col-xl-10">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-10 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Category edit</h4>
                            <p class="card-description">category edit</p>



                            <form role="form" action="{{route('admin_category_update',['id'=>$data])}}" method="post">
                                @csrf
                            <div class="form-group">
                                <label >Parent</label>
                                <select class="form-control" name="parent_id">
                                    <option value="0">Main category</option>
                                    @foreach($datalist as $rs)
                                    <option value="{{$rs->id}}" @if ($rs->id ==$data->parent_id) selected="selected" @endif>
                                        {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                    @endforeach

                                </select>

                            </div>
                            <div class="form-group">
                                <label >Title</label>
                                <input type="text" name="title" value="{{$data->title}}" class="form-control" >
                            </div>
                                <div class="form-group">
                                    <label >Keywords</label>
                                    <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label >Description</label>
                                    <input type="text" name="description" value="{{$data->description}}" class="form-control" >
                                </div>
                                 <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="status" value="{{$data->status}}">
                                        <option>false</option>
                                        <option>true</option>

                                    </select>
                                </div>
                        </div>


                                <button type="submit" class="btn btn-primary mr-2">Add Category</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>




@endsection
