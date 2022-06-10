@extends('layouts.admin')

@section('title', 'User edit')
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
                            <h4 class="card-title">User edit</h4>
                            <p class="card-description">User edit</p>



                            <form role="form" action="{{route('admin_user_update',['id'=>$data->id])}}" method="post" method="post" enctype="multipart/form-data">
                                @csrf
                            <div class="form-group">
                                <label >Name</label>
                                <input type="name" name="name" value="{{$data->name}}" class="form-control">
                            </div>
                                <div class="form-group">
                                    <label >Email</label>
                                    <input type="email" name="email" value="{{$data->email}}"class="form-control">
                                </div>
                                <div class="form-group">
                                    <label >Phone</label>
                                    <input type="text" name="phone"value="{{$data->phone}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label >Adress</label>
                                    <input type="adress" name="adress"value="{{$data->adress}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label >Image</label>
                                    <input type="file" name="image"  class="form-control">
                                    @if($data->profile_photo_path)
                                        <img src="{{Storage::url($data->profile_photo_path)}}" height="75" alt="">
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Update User</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>




@endsection
