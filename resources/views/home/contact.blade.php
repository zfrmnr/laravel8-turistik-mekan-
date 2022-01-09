@extends('layouts.home')

@section('title','Contact-')


@section('content')

    <div class="my-account">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="dashboard-tab" role="tabpanel" aria-labelledby="dashboard-nav">
                            <h4>Contact</h4>
                            <p>
                                {!! $setting->contact !!}
                            </p>
                        </div>instagram

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-form">
                        <form action="{{route('sendmessage')}}" method="post">
                            @csrf
                            <h4 class="section-title" >iletişim formu</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" placeholder="Name Surname" />
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="email" placeholder="Your Email" />
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="phone" placeholder="Phone" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" placeholder="Subject" />
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" name="message" placeholder="Message"></textarea>
                            </div>
                            <div><button class="btn" type="submit">Send Message</button></div> @include('home.message')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>






@endsection

