<div class="row align-items-center m-5">
    @if ($alignLeft)
        <div class="col-6 ">
            <img src="{{$img}}" class="w-100" alt="">
        </div>
        <div class="col-6">
            <p>{{$txt}}</p>
        </div>
    @else
        <div class="col-6">
            <p>{{$txt}}</p>
        </div>
        <div class="col-6">
            <img src="{{$img}}" class="w-100" alt=""> 
        </div>
    @endif
</div>
</div>