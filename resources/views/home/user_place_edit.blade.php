@extends('layouts.home')

@section('title','profile')
@section('javascript')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection

@section('content')
    <div class="main-panel col-xl-10">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-10 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Place edit</h4>
                            <p class="card-description">Place edit</p>



                            <form role="form" action="{{route('user_place_update',['id'=>$data->id])}}" method="post" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label >Category</label>
                                    <select class="form-control" name="category_id">
                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}" @if ($rs->id == $data->parent_id) selected="selected" @endif>
                                                {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                                            </option>
                                        @endforeach

                                    </select>

                                </div>
                                <div class="form-group">
                                    <label >Title</label>
                                    <input type="text" name="title" value="{{$data->title}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label >Keywords</label>
                                    <input type="text" name="keywords" value="{{$data->keywords}}"class="form-control">
                                </div>
                                <div class="form-group">
                                    <label >Description</label>
                                    <input type="text" name="description"value="{{$data->description}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label >Country</label>
                                    <input type="text" name="country"value="{{$data->country}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label >City</label>
                                    <input type="text" name="city" value="{{$data->city}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label >Location</label>
                                    <input type="text" name="location" value="{{$data->location}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label >Image</label>
                                    <input type="file" name="image"  class="form-control">
                                    @if($data->image)
                                        <img src="{{Storage::url($data->image)}}" height="75" alt="">
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label >Detail</label>
                                    <textarea id="detail" name="detail">{{$data->detail}}</textarea>
                                    <script>
                                        $('#detail').summernote({
                                            placeholder: '',
                                            tabsize: 2,
                                            height: 100
                                        });
                                    </script>

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


                                <button type="submit" class="btn btn-primary mr-2">Edit Place</button>


                        </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>


@endsection
