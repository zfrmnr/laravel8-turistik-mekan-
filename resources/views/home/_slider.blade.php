<!-- Main Slider Start -->

            <div class="col-md-6">
                <div class="header-slider normal-slider">
                    @foreach($slider as $rs)
                    <div class="header-slider-item">
                        <img src="{{Storage::url($rs->image)}}"style="height: 400px;weight:300px" alt="Slider Image" />
                        <div class="header-slider-caption">
                            <p>{{$rs->title}}</p>
                            <a class="btn" href="{{route('place',['id'=>$rs->id])}}"><i class=""></i>Show Now</a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="col-md-3">
                @foreach($popular as $rs)
                <div class="header-img">
                    <div class="img-item">
                        <img src="{{Storage::url($rs->image)}}" />
                        <a class="img-text" href="{{route('place',['id'=>$rs->id])}}">
                            <p>{{$rs->title}}</p>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- Main Slider End -->
