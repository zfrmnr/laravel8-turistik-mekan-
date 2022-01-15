@extends('layouts.admin')

@section('title', 'FAQ Edit')
@section('javascript')
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
@endsection
@section('content')
    <div class="main-panel col-xl-10">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-10 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">FAQ edit</h4>
                            <p class="card-description">FAQ edit</p>



                            <form role="form" action="{{route('admin_faq_update',['id'=>$data->id])}}" method="post" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label >Position</label>
                                    <input type="number" name="position" value="{{$data->position}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label >Question</label>
                                    <input type="text" name="question" value="{{$data->question}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label >Answer</label>
                                    <textarea id="answer" value="{!! $data->answer !!}}" name="answer">{!! $data->answer !!}</textarea>
                                    <script>
                                        CKEDITOR.replace( 'answer' );
                                    </script>
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

                                <button type="submit" class="btn btn-primary mr-2">Add FAQ</button>

                            </form>
                    </div>
                </div>
            </div>
        </div>




@endsection
