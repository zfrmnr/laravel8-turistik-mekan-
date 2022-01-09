@extends('layouts.home')

@section('title','References-')


@section('content')

    <div class="my-account">
        <div class="container-fluid">
            <div class="row">


                <div class="col-md-12">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="dashboard-tab" role="tabpanel" aria-labelledby="dashboard-nav">
                            <h4>References</h4>
                            <p>
                                {!! $setting->references !!}
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>






@endsection

