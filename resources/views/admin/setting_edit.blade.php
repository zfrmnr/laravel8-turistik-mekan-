@extends('layouts.admin')

@section('title', 'Place Edit')
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
                            <h4 class="card-title">Setting edit</h4>
                            <p class="card-description">setting edit</p>



                            <form role="form" action="{{route('admin_setting_update')}}" method="post" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">


                            <div class="form-group">
                                <label >Title</label>
                                <input type="text" id="title" name="title" value="{{$data->title}}" class="form-control">
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
                                    <label >Company</label>
                                    <input type="text" name="company"value="{{$data->company}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label >Address</label>
                                    <input type="text" name="adress" value="{{$data->adress}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label >Phone</label>
                                    <input type="text" name="phone" value="{{$data->phone}}" class="form-control">
                                </div>
                        <div class="form-group">
                            <label >Fax</label>
                            <input type="text" name="fax" value="{{$data->fax}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label >Email</label>
                            <input type="text" name="email" value="{{$data->email}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label >SmtpServer</label>
                            <input type="text" name="Smtpserver" value="{{$data->smtpserver}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label >SmtpEmail</label>
                            <input type="text" name="Smtpemail" value="{{$data->mtpemail}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label >SmtpPassword</label>
                            <input type="password" name="smtppassword" value="{{$data->smtppassword}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label >SmtpPort</label>
                            <input type="number" name="smtpport" value="{{$data->smtpport}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label >Facebook</label>
                            <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label >Twitter</label>
                            <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label >Instagram</label>
                            <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label >Youtube</label>
                            <input type="text" name="youtube" value="{{$data->youtube}}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label >AboutUs</label>
                            <textarea id="aboutus" name="aboutus">{{$data->aboutus}}</textarea>
                        </div>
                                <div class="form-group">
                                    <label >Contact</label>
                                    <textarea id="contact" name="contact">{{$data->contact}}</textarea>
                                </div>
                        <div class="form-group">
                            <label >Reference</label>
                            <textarea id="references" name="references">{{$data->references}}</textarea>
                        </div>


                        <script>
                            $('#aboutus').summernote({placeholder: '', tabsize: 2, height: 100});
                            $('#contact').summernote({placeholder: '', tabsize: 2, height: 100});
                            $('#references').summernote({placeholder: '', tabsize: 2, height: 100});
                        </script>

                                 <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="status" value="{{$data->status}}">
                                        <option>false</option>
                                        <option>true</option>
                                    </select>
                                </div>
                        </div>


                                <button type="submit" class="btn btn-primary mr-2">Edit setting</button>

                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>





@endsection
