
<!-- Favicon -->
<link href="{{asset('assets')}}/img/favicon.ico" rel="icon">

<!-- Google Fonts -->

<link href="{{asset('assets')}}/https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

<!-- CSS Libraries -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="{{asset('assets')}}/lib/slick/slick.css" rel="stylesheet">
<link href="{{asset('assets')}}/lib/slick/slick-theme.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="{{asset('assets')}}/css/style.css" rel="stylesheet">
@yield('css')
@yield('javascript')
    <div class="main-panel col-xl-10">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-10 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Review</h4>
                            <p class="card-description">Show Review</p>



                            <form role="form" action="{{route('admin_review_update',['id'=>$data->id])}}" method="post" method="post" enctype="multipart/form-data">
                                @csrf
                                <table class="table table-bordered ">
                                    <thead>
                                    <tr>
                                        <th>id</th><td>{{$data->id}}</td>
                                    </tr>
                                    <tr>
                                        <th>Name</th><td>{{$data->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Place</th><td>{{$data->place->title}}</td>
                                    </tr>
                                    <tr>
                                        <th>Subject</th><td>{{$data->subject}}</td>
                                    </tr>
                                    <tr>
                                        <th>Review</th><td>{{$data->review}}</td>
                                    </tr>
                                    <tr>
                                        <th>Rate</th> <td>{{$data->rate}}</td>
                                    </tr>
                                    <tr>
                                        <th>IP</th>   <td>{{$data->IP}}
                                    </td>
                                    </tr>
                                    <tr>
                                        <th>Created Date</th>   <td>{{$data->created_at}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Updated Date</th>   <td>{{$data->updated_at}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Status</th><td>
                                            <select name="status">
                                                <option selected>{{$data->status}}</option>
                                                <option>True</option>
                                                <option>False</option>
                                            </select>
                                            </td>
                                    </tr>
                                    <tr>
                                        <th>Edit</th><td>
                                            <button type="submit" class="btn btn-primary mr-2">Edit review </button>
                                        </td>
                                    </tr>
                                    @include('home.message')

                                    </thead>
                                </table>

                        </form>
                    </div>
                </div>
            </div>
        </div>





