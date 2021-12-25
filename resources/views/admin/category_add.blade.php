@extends('layouts.admin')

@section('title', 'Category add')
@section('content')
    <div class="main-panel col-xl-10">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-10 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Category add</h4>
                            <p class="card-description">category add</p>



                            <form role="form" action="{{route('admin_category_create')}}" method="post">
                                @csrf
                            <div class="form-group">
                                <label >Parent</label>
                                <select class="form-control" name="parent_id">
                                    <option value="0" selected="selected">Ana category</option>
                                    @foreach($datalist as $rs)
                                    <option value="{{$rs->id}}">{{$rs->title}}</option>
                                    @endforeach

                                </select>

                            </div>
                            <div class="form-group">
                                <label >Title</label>
                                <input type="text" name="title" class="form-control"  placeholder="title">
                            </div>
                                <div class="form-group">
                                    <label >Keywords</label>
                                    <input type="text" name="keywords" class="form-control" placeholder="title">
                                </div>
                                <div class="form-group">
                                    <label >Description</label>
                                    <input type="text" name="description" class="form-control" placeholder="title">
                                </div>
                                 <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="status">
                                        <option>false</option>
                                        <option>true</option>

                                    </select>
                                </div>
                        </div>


                                <button type="submit" class="btn btn-primary mr-2">Add Category</button>

                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>




@endsection
