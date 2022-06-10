
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
                            <h4 class="card-title">Role</h4>
                            <p class="card-description">User Roles</p>


                                <table class="table table-bordered ">
                                    <thead>
                                    <tr>
                                        <th>id</th><td>{{$data->id}}</td>
                                    </tr>
                                    <tr>
                                        <th>Name</th><td>{{$data->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th><td>{{$data->email}}</td>
                                    </tr>

                                    <tr>
                                        <th>Roles</th>
                                        <td>
                                            <table>
                                                @foreach($data->roles as $row)
                                                    <tr>
                                                        <td>{{$row->name}}</td>
                                                        <td>
                                                            <a href="{{route('admin_user_role_delete',['userid'=>$data->id,'roleid'=>$row->id])}}" onclick="return confirm('delete! are you sure')"><img src="{{asset('assets/admin/images/file-icons/yeni')}}/delete.png" width="10"></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Add Role</th>
                                        <td>
                                            <form role="form" action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <select name="roleid">
                                                    @foreach($datalist as $rs)
                                                        <option value="{{$rs->id}}">{{$rs->name}}</option>
                                                    @endforeach
                                                </select>
                                                <button type="submit" class="btn btn-primary">Add Role</button>
                                            </form>
                                        </td>
                                    </tr>

                                    @include('home.message')

                                    </thead>
                                </table>
                    </div>
                </div>
            </div>
        </div>





