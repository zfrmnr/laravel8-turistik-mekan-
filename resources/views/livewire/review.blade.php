<div>
   @if(session()->has('message'))
       <div class="alert alert-success">
           {{session('message')}}
       </div>
    @endif
        <div class="reviews-submit">
            @error('rate')<span class="text-danger">{{$message}}</span>@enderror
            <h4>Give your Review:</h4>
            <div class="ratting">
                <i class="far fa-star" wire:model="rate" value="1"></i>
                <i class="far fa-star" wire:model="rate" value="2"></i>
                <i class="far fa-star" wire:model="rate" value="3"></i>
                <i class="far fa-star" wire:model="rate" value="4"></i>
                <i class="far fa-star" wire:model="rate" value="5"></i>
            </div>
            <div class="row form"  wire:submit.prevent="store">
                <div class="col-sm-12">
                    <input class="input" wire:model="subject" type="text" placeholder="Subject">
                    @error('subject')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="col-sm-12">
                    <textarea class="input" wire:model="review" placeholder="Review"></textarea>
                    @error('review')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="col-sm-12">
                    @auth
                    <button type="submit" class="btn btn-success" value="Save">Submit</button>
                    @else
                    <a href="/login" class="primary-btn">for submit Review Please Login</a>
                    @endauth
                </div>
            </div>
        </div>
</div>
