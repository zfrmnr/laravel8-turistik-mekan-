<!-- Main Slider Start -->

            <div class="col-md-6">
                <div class="header-slider normal-slider">
                    @foreach($slider as $rs)
                    <div class="header-slider-item">
                        <img src="{{Storage::url($rs->image)}}"style="height: 400px;weight:300px" alt="Slider Image" />
                        <div class="header-slider-caption">
                            <p>{{$rs->title}}</p>
                            <a class="btn" href="{{route('place',['id'=>$rs->id])}}"><i class="fa fa-shopping-cart"></i>Show Now</a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="col-md-3">
                <div class="header-img">
                    <div class="img-item">
                        <img src="{{asset('assets')}}/img/category-1.jpg" />
                        <a class="img-text" href="">
                            <p>Some text goes here that describes the image</p>
                        </a>
                    </div>
                    <div class="img-item">
                        <img src="{{asset('assets')}}/img/category-2.jpg" />
                        <a class="img-text" href="">
                            <p>Some text goes here that describes the image</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Slider End -->
