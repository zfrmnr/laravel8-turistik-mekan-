<div>
   @if(session()->has('message'))
       <div class="alert alert-success">
           {{session('message')}}
       </div>
    @endif
    <form class="review form" wire:submit.prevent="store">
        @csrf
        <div class="reviews-submit" >
            <h4>Give your Review:</h4>
            @error('rate')<span class="text-danger">{{$message}}</span>@enderror
            <div  class="ratting">
                <input  type="radio" id="star1" wire:model="rate" value="1"/><i class="far fa-star"></i>
                <input  type="radio"  id="star2" wire:model="rate" value="2"/><i class="far fa-star"></i>
                <input type="radio" id="star3" wire:model="rate" value="3"/><i class="far fa-star"></i>
                <input  type="radio" id="star4" wire:model="rate" value="4"/><i class="far fa-star"></i>
                <input   type="radio" id="star5" wire:model="rate" value="5"/><i class="far fa-star"></i>
                </div>

                <div class="col-sm-7">
                    <input class="input" wire:model="subject" type="text" placeholder="Subject">
                    @error('subject')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="col-sm-7">
                    <textarea class="input" wire:model="review" placeholder="Review"></textarea>
                    @error('review')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="col-sm-7">
                    @auth
                    <button type="submit" class="btn btn-success" value="Save">Submit</button>
                    @else
                    <a href="/login" class="primary-btn">for submit Review Please Login</a>
                    @endauth
                </div>
        </div>
    </form>
       @livewireScripts
</div>
