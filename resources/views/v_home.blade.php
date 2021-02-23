@extends('layout.v_template')
@section('content')
<section class="welcome_area p_120">         
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100"  data-aos="fade" src="{{asset('templates')}}/img/S4nc.png" alt="First slide">
            <div class="carousel-caption d-none d-md-block ">
              <div class="slide">
                <h1 class="text-uppercase" data-aos="fade-up">S4NC</h1>
                <p class="mb-5 desc" data-aos="fade-up" data-aos-delay="100">Kesingkatan dari S4NCTUARY</p>
                <div data-aos="fade-up" data-aos-delay="100">
                </div>
              </div>
            </div> 
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('templates')}}/img/S4nc.png" alt="Second slide">
            <div class="carousel-caption d-none d-md-block ">
              <div class="slide">
                <h1 class="text-uppercase" data-aos="fade-up">S4NC</h1>
                <p class="mb-5 desc" data-aos="fade-up" data-aos-delay="100">S4NC memiliki komunitas yang terbaik</p>
                <div data-aos="fade-up" data-aos-delay="100">
                </div>
              </div>
            </div> 
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('templates')}}/img/S4nc.png" alt="Third slide">
            <div class="carousel-caption d-none d-md-block ">
              <div class="slide">
                <h1 class="text-uppercase" data-aos="fade-up">S4NC</h1>
                <p class="mb-5 desc" data-aos="fade-up" data-aos-delay="100">Ayo join discord kami, untuk menemukan sahabat bermain baru</p>
                <div data-aos="fade-up" data-aos-delay="100">
                </div>
              </div>
            </div> 
          </div>
        </div>
        <a class="carousel-control-prev" href="next" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="carousel-item">
        <img src="..." alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>tes</h5>
          <p>tes</p>
        </div>
      </div>
</section>
      
      
    </div>
@endsection
  

  