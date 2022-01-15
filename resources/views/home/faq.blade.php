@extends('layouts.home')

@section('title','FAQ-')

@section('content')

    <div class="my-account">
        <div class="container-fluid">
            <div class="row">


                <div class="col-md-12">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="dashboard-tab" role="tabpanel" aria-labelledby="dashboard-nav">
                            <h4>FAQ</h4>
                                @foreach($datalist as $rs)
                                    <h4>{{$rs->question}}</h4>
                              <p> {!! $rs->answer !!}</p>
                            <br>
                                @endforeach
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection

