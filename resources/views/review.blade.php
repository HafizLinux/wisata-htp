@extends('frontend.index')
@section('front')


<div class="site-section">
<div class="site-section">

<div class="container">
  <div class="row justify-content-center text-center">
    <div class="col-md-7">
      <div class="heading-39101 mb-5">
        <span class="backdrop text-center">Journey</span>
        <span class="subtitle-39191">Journey</span>
        <h3>Your Journey Starts Here</h3>
      </div>
    </div>
  </div>
  <div class="row">
    <!-- <div class="col-md-4">
      <div id="weatherapi-weather-widget-1"></div><script type='text/javascript' src='https://www.weatherapi.com/weather/widget.ashx?loc=3037591&wid=1&tu=2&div=weatherapi-weather-widget-1' async></script><noscript><a href="https://www.weatherapi.com/weather/q/pangandaran-3037591" alt="Hour by hour Pangandaran weather">10 day hour by hour Pangandaran weather</a></noscript>
    </div> -->
    @forelse($trips as $row)
    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
      <div class="listing-item">
        <div class="listing-image">
          <img src="{{asset('admin/image/'.$row['foto'])}}" alt="Image" class="img-fluid" style="height: 300px">
        </div>
        <div class="listing-item-content">
          <a class="px-3 mb-3 category bg-primary" href="#">$200.00</a>
          <h2 class="mb-1"><a href="{{ url('trips/'.$row->id) }}">{{ $row->nama }}</a></h2>
        </div>
      </div>
    </div>
    @empty
    <center><h3>Data tidak tersedia</h3></center>
    @endforelse
</div>
</div>
</div>
<div class="container">
        <h4 class="text-uppercase mb-6">Ulasan</h4>
        <p class="mb-6">Ulasan dari masyarakat tentang GoVocation. Berikan ulasan sekarang!</p>
        <div class="my-4" id="review">
        <form method="POST" action="{{url('review/store')}}" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="text" name="nama" type="text" class="form-control" placeholder="Masukkan nama mu">
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Wisata</label> 
    <div class="col-8">
      <input id="text1" name="wisata" type="text" class="form-control" placeholder="Masukkan nama wisata">
    </div>
  </div>
  <div class="form-group row">
    <label for="textarea" class="col-4 col-form-label">Ulasan</label> 
    <div class="col-8">
      <textarea id="textarea" name="komentar" cols="40" rows="5" class="form-control" placeholder="Masukkan ulasan mu"></textarea>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
        </div>
    </div>
    </div> <!-- END .site-section -->
    </div>
@endsection