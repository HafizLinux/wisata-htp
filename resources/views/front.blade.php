@extends('frontend.index')
@section('front')

<div class="site-section py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="heading-39101 mb-5">
              <span class="backdrop">Vacation</span>
              <span class="subtitle-39191">Lets Vacation!</span>
              <h3>Amazing Places</h3>
            </div>
            <p>
              Going on a nature vacation is a perfect way to unwind and reconnect with the beauty of the world around us. Indonesia offers a wealth of natural wonders that make it an ideal destination for nature enthusiasts. From the lush rainforests of Borneo to the pristine beaches of Bali, there is something for everyone. Explore the breathtaking landscapes, hike through scenic mountains, and discover hidden waterfalls. Immerse yourself in the vibrant biodiversity, spot exotic wildlife, and dive into crystal-clear waters to witness stunning marine life. A nature vacation in Indonesia promises unforgettable experiences and a chance to rejuvenate amidst the wonders of the natural world.</p>
          </div>
          <div class="col-md-6" data-aos="fade-right">
            <img src="{{asset('frontend/images/traveler.jpg')}}" alt="Image" class="img-fluid">
          </div>
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
              <h3>Meet Our Team</h3>
            </div>
          </div>
        </div>


        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="person-29191 text-center">
              <img src="{{asset('frontend/images/person_1.jpg')}}" alt="Image" class="img-fluid mb-4">
              <div class="px-4">
                <h2 class="mb-2">John Doe</h2>
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


    <div class="site-section">

@endsection