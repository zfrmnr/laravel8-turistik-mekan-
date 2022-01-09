@extends('layouts.home')

@section('title','AboutUs-')


@section('content')

    <div class="my-account">
        <div class="container-fluid">
            <div class="row">


                <div class="col-md-12">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="dashboard-tab" role="tabpanel" aria-labelledby="dashboard-nav">
                            <h4>about us</h4>
                            <p>
                                {!! $setting->aboutus !!}
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>






@endsection

