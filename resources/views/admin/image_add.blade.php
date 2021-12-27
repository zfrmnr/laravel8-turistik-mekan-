<html>
<head>
    <title>ımage gallery</title>
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/admin/feather/feather.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/admin/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/admin/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/admin/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('assets')}}/admin/images/favicon.png" />

</head>
<body>


    <div class="main-panel col-xl-10">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-10 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Place: {{$data->title}}</h4>
                            <p class="card-description">Image add</p>
                            <form role="form" action="{{route('admin_image_store',['place_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                            <div class="form-group">
                                <label >Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                                <div class="form-group">
                                    <label >Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>

                              <button type="submit" class="btn btn-primary mr-2">Add Image</button>
                            </form>
                        </div>

                    </div>
                        </div>

                    </div>
                </div>


        <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-10 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"> Place
                <p class="card-description"> Places list</p>
                <div class="table-responsive pt-12">
                    <table class="table table-bordered ">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Title(s)</th>
                            <th>Image</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $images as $rs)
                            <p></p>
                            <tr class="table-info">
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->title}}</td>
                                <td>
                                    @if($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" height="30" alt="">
                                    @endif
                                </td>
                                <td><a href="{{route('admin_image_delete',['id'=>$rs->id,'place_id'=>$data->id])}}" on onclick="return confirm('Eminmisiniz')"><img src="{{asset('assets/admin/images/file-icons/yeni')}}/delete.png"></a> </td>
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




        </body>
        </html>

