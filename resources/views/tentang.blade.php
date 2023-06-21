@extends('frontend.index')
@section('front')
<div class="site-section py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="heading-39101 mb-5">
              <span class="backdrop">US</span>
              <span class="subtitle-39191">About</span>
              <h3>GoVacation</h3>
            </div>
            <p>With us, have a worry-free vacation! We are a travel website that offers fantastic trip suggestions. Explore intriguing locations all throughout Indonesia and treat yourself to memorable experiences. 
              The helpful staff is prepared to help you choose your location. Your trip will be extraordinary if you go with us!</p>
          </div>
          <div class="col-md-6" data-aos="fade-right">
            <img src="{{asset('frontend/images/logoabs.svg')}}" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section">

      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-10">
            <div class="heading-39101 mb-5">
              <span class="backdrop text-center">Our Team</span>
              <span class="subtitle-39191">Amazing Staff</span>
              <h3>Meet Our Team saya</h3>
            </div>
          </div>
        </div>


        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="person-29191 text-center">
              <img src="{{asset('frontend/images/person_1.jpg')}}" alt="Image" class="img-fluid mb-4">
              <div class="px-4">
                <h2 class="mb-2">John Doe s</h2>
                <p class="caption mb-4">Staff</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, maiores? Eos alias fugit eius, repudiandae molestias error</p>
                <div class="social_29128 mt-5">
                <a href="#"><span class="icon-facebook"></span></a>  
                <a href="#"><span class="icon-instagram"></span></a>  
                <a href="#"><span class="icon-twitter"></span></a>  
               </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="person-29191 text-center">
              <img src="{{asset('frontend/images/person_2.jpg')}}" alt="Image" class="img-fluid mb-4">
              <div class="px-4">
                <h2 class="mb-2">Jean Doe</h2>
                <p class="caption mb-4">Staff</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, maiores? Eos alias fugit eius, repudiandae molestias error</p>
                <div class="social_29128 mt-5">
                <a href="#"><span class="icon-facebook"></span></a>  
                <a href="#"><span class="icon-instagram"></span></a>  
                <a href="#"><span class="icon-twitter"></span></a>  
               </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="person-29191 text-center">
              <img src="{{asset('frontend/images/person_3.jpg')}}" alt="Image" class="img-fluid mb-4">
              <div class="px-4">
                <h2 class="mb-2">Claire Dormey</h2>
                <p class="caption mb-4">Staff</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, maiores? Eos alias fugit eius, repudiandae molestias error</p>
                <div class="social_29128 mt-5">
                <a href="#"><span class="icon-facebook"></span></a>  
                <a href="#"><span class="icon-instagram"></span></a>  
                <a href="#"><span class="icon-twitter"></span></a>  
               </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>


@endsection