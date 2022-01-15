@extends('layouts.admin')

@section('title', 'Place add')
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
                            <h4 class="card-title">FAQ add</h4>
                            <p class="card-description">FAQ add</p>



                            <form role="form" action="{{route('admin_faq_store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label >Position</label>
                                    <input type="number" name="position" value="0" class="form-control">
                                </div>
                            <div class="form-group">
                                <label >Question</label>
                                <input type="text" name="question" class="form-control">
                            </div>

                                <div class="form-group">
                                    <label >Answer</label>
                                    <textarea id="answer" name="answer"></textarea>
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
