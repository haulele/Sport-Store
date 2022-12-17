
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">  
  <div class="carousel-inner">
    @foreach($sliders as $key => $slider)
    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" data-bs-interval="2000">
      <img src="{{ $slider->image_path }}" class="d-block w-100 img-slider" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>{{ $slider->name }}</h5>
        <p>{{ $slider->description }}</p>
      </div>
    </div>
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>