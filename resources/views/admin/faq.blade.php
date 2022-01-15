@extends('layouts.admin')

@section('title', 'Faq list')
@section('content')
    <div class="main-panel col-xl-10">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-11 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"> Faq
                                <a type="submit"  href="{{route('admin_faq_add')}}" class="btn btn-primary mr-2">Add faq</a></h4>
                            @include('home.message')

                            <p class="card-description"> Faq list</p>
                            <div class="table-responsive pt-12">
                                <table class="table table-bordered ">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Position</th>
                                        <th>Question</th>
                                        <th>Answer</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datalist as $rs)
                                        <p></p>
                                        <tr class="table-info">
                                            <td>{{$rs->id}}</td>
                                            <td>{{$rs->position}}</td>
                                            <td>{{$rs->question}}</td>
                                            <td>{!!$rs->answer!!}</td>
                                            <td>{{$rs->status}}</td>
                                            <td><a href="{{route('admin_faq_edit',['id'=>$rs->id])}}" on onclick="return confirm('Eminmisiniz')"><img src="{{asset('assets/admin/images/file-icons/yeni')}}/edit.png"></a> </td>
                                            <td><a href="{{route('admin_faq_delete',['id'=>$rs->id])}}" on onclick="return confirm('Eminmisiniz')"> <img src="{{asset('assets/admin/images/file-icons/yeni')}}/delete.png"></a> </td>
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



@endsection
