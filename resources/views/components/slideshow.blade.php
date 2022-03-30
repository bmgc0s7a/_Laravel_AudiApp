<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @for ($i = 0; $i < count($slideshow); $i++)
            <li data-target="#carouselExampleCaptions" data-slide-to="{{$i}}"  class="@if ($i == 0) active @endif" ></li>
        @endfor
    </ol>
    <div class="carousel-inner">
        @for ($i = 0; $i < count($slideshow); $i++)
              <div class="carousel-item @if ($i == 0) active @endif">
                <img src="{{$slideshow[$i]['img']}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5>{{$slideshow[$i]['title']}}</h5>
                <p>{{$slideshow[$i]['desc']}}</p>
              </div>
          </div>
        @endfor
      </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </button>
</div>