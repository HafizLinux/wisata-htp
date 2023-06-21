@extends('frontend.index')
@section('front')

<div class="site-section">

<div class="container">
  <div class="row justify-content-center text-center">
    <div class="col-md-7">
      <div class="heading-39101 mb-5">
        <span class="backdrop text-center">See Our Recomendations</span>
        <span class="subtitle-39191">See Our Recomendations</span>
        <h3>Choose Your Dream Vacation Spot</h3>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
      <div class="listing-item">
        <div class="listing-image">
          <img src="{{asset('frontend/images/img_1.jpg')}}" alt="Image" class="img-fluid">
        </div>
        <div class="listing-item-content">
          <a class="px-3 mb-3 category bg-primary" href="#">Rp2000.00</a>
          <h2 class="mb-1"><a href="trip-single.html">Air Terjun Randusari</a></h2>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
      <div class="listing-item">
        <div class="listing-image">
          <img src="{{asset('frontend/images/img_2.jpg')}}" alt="Image" class="img-fluid">
        </div>
        <div class="listing-item-content">
          <a class="px-3 mb-3 category bg-primary" href="#">Rp5000.00</a>
          <h2 class="mb-1"><a href="trip-single.html">Pantai Singkil Indah</a></h2>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
      <div class="listing-item">
        <div class="listing-image">
          <img src="{{asset('frontend/images/img_3.jpg')}}" alt="Image" class="img-fluid">
        </div>
        <div class="listing-item-content">
          <a class="px-3 mb-3 category bg-primary" href="#">$180.00</a>
          <h2 class="mb-1"><a href="trip-single.html">Temporibus aperiam</a></h2>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
      <div class="listing-item">
        <div class="listing-image">
          <img src="{{asset('frontend/images/img_4.jpg')}}" alt="Image" class="img-fluid">
        </div>
        <div class="listing-item-content">
          <a class="px-3 mb-3 category bg-primary" href="#">$600.00</a>
          <h2 class="mb-1"><a href="trip-single.html">Expedita fugiat</a></h2>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
      <div class="listing-item">
        <div class="listing-image">
          <img src="{{asset('frontend/images/img_5.jpg')}}" alt="Image" class="img-fluid">
        </div>
        <div class="listing-item-content">
          <a class="px-3 mb-3 category bg-primary" href="#">$330.00</a>
          <h2 class="mb-1"><a href="trip-single.html">Consectetur adipisicing</a></h2>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
      <div class="listing-item">
        <div class="listing-image">
          <img src="{{asset('frontend/images/img_6.jpg')}}" alt="Image" class="img-fluid">
        </div>
        <div class="listing-item-content">
          <a class="px-3 mb-3 category bg-primary" href="#">$450.00</a>
          <h2 class="mb-1"><a href="trip-single.html">Consectetur Amet</a></h2>
        </div>
      </div>
    </div>

  </div>

</div>
</div>


<div class="site-section py-5">
<div class="container">
  <div class="row align-items-center">
    <div class="col-md-6">
      <div class="heading-39101 mb-5">
        <span class="backdrop">Story</span>
        <span class="subtitle-39191">Discover Story</span>
        <h3>Our Story</h3>
      </div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi quae expedita fugiat quo incidunt, possimus temporibus aperiam eum, quaerat sapiente.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis enim a pariatur molestiae.</p>
    </div>
    <div class="col-md-6" data-aos="fade-right">
      <img src="{{asset('frontend/images/traveler.jpg')}}" alt="Image" class="img-fluid">
    </div>
  </div>
</div>
</div>
@endsection