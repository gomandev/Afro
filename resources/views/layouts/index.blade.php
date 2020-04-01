@extends('layouts.app')


@section('content')



  <!-- Single Welcome Slide -->
    <!-- Single Welcome Slide -->
    <div class="single-welcome-slide bg-img bg-overlay gradient">
      <!-- Welcome Content -->
      <div class="welcome-content">
          <div class="container">
              
              <div class="row d-flex justify-content-center align-items-center mt-5 land">
                <div class="col-lg-6">
                    <img class="w-100" src="{{ asset('img/bg-img/mockup-iphone.png') }}" alt="">
                </div>
                  <!-- Welcome Text -->
                  <div class="col-lg-6">
                      <div class="welcome-text text-center">
                          <h2 data-animation="fadeInUpBig" data-delay="100ms">Listen And Download Any Latest Music Of your Choice Withen Around Africa In A High Quality</h2>
                          <h5 data-animation="fadeInUpBig" data-delay="400ms">Don't miss it... Join Us Today</h5>
                          <a href="{{ route('register') }}" class="btn razo-btn btn-2" data-animation="fadeInUpBig" data-delay="700ms"><span>Sign Up Now</span></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <section class="go-section go-no-pt">
    <div class="container">
        <div class="row justify-content-center">
      <div class="col-md-12 heading-section text-center go-animate mb-5">
          <span class="subheading">Discover</span>
        <h2 class="mb-2">Trending Albums</h2>
      </div>
    </div>
        <div class="row">
            <div class="col-md-12">
                <div class="carousel-car owl-carousel">
                    <div class="item">
                        <div class="car-wrap rounded go-animate">
                            <div class="img rounded d-flex align-items-end" style="background-image: url(img/bg-img/25.jpg);">
                            </div>
                            <div class="text">
                                {{-- <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2> --}}
                                <div class="d-flex text-right">
                                    <span class="cat">Love The Way You Lie</span>
                                    <small>By Eminem</small>
                                    <p class="price ml-auto">$1.5 </p>
                                </div>
                                <div class="d-flex text-right">
                                    <p><span class="icon_music"></span> 700 Streams</p>
                                    <p><span class="icon_heart"></span> 10,000 Likess</p>
                                    <p><span class="icon_play"></span> Play Now</p>
                                </div>
                                {{-- <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="#" class="btn btn-secondary py-2 ml-1">Details</a></p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="car-wrap rounded go-animate">
                            <div class="img rounded d-flex align-items-end" style="background-image: url(img/bg-img/26.jpg);">
                            </div>
                            <div class="text">
                                {{-- <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2> --}}
                                <div class="d-flex text-right">
                                    <span class="cat">Love The Way You Lie</span>
                                    <small>By Eminem</small>
                                    <p class="price ml-auto">$1.5 </p>
                                </div>
                                <div class="d-flex text-right">
                                    <p><span class="icon_music"></span> 700 Streams</p>
                                    <p><span class="icon_heart"></span> 10,000 Likess</p>
                                    <p><span class="icon_play"></span> Play Now</p>
                                </div>
                                {{-- <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="#" class="btn btn-secondary py-2 ml-1">Details</a></p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="car-wrap rounded go-animate">
                            <div class="img rounded d-flex align-items-end" style="background-image: url(img/bg-img/27.jpg);">
                            </div>
                            <div class="text">
                                {{-- <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2> --}}
                                <div class="d-flex text-right">
                                    <span class="cat">Love The Way You Lie</span>
                                    <small>By Eminem</small>
                                    <p class="price ml-auto">$1.5 </p>
                                </div>
                                <div class="d-flex text-right">
                                    <p><span class="icon_music"></span> 700 Streams</p>
                                    <p><span class="icon_heart"></span> 10,000 Likess</p>
                                    <p><span class="icon_play"></span> Play Now</p>
                                </div>
                                {{-- <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="#" class="btn btn-secondary py-2 ml-1">Details</a></p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="car-wrap rounded go-animate">
                            <div class="img rounded d-flex align-items-end" style="background-image: url(img/bg-img/28.jpg);">
                            </div>
                            <div class="text">
                                {{-- <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2> --}}
                                <div class="d-flex text-right">
                                    <span class="cat">Love The Way You Lie</span>
                                    <small>By Eminem</small>
                                    <p class="price ml-auto">$1.5 </p>
                                </div>
                                <div class="d-flex text-right">
                                    <p><span class="icon_music"></span> 700 Streams</p>
                                    <p><span class="icon_heart"></span> 10,000 Likess</p>
                                    <p><span class="icon_play"></span> Play Now</p>
                                </div>
                                {{-- <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="#" class="btn btn-secondary py-2 ml-1">Details</a></p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

           
      

  
<!-- Welcome Area End -->

@endsection 