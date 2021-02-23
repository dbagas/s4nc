
<?php $__env->startSection('content'); ?>

<section class="welcome_area p_120">      
     
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">        
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" data-aos="fade" src="<?php echo e(asset('templates')); ?>/img/S4nc2.png" height ="580px" alt="First slide" >
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
            <img class="d-block w-100" src="<?php echo e(asset('templates')); ?>/img/S4nc2.png" height ="580px"alt="Second slide">
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
            <img class="d-block w-100" src="<?php echo e(asset('templates')); ?>/img/S4nc2.png" height ="580px"alt="Third slide">
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
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    
    
</section>
      
      
    </div>
<?php $__env->stopSection(); ?>
  

  
<?php echo $__env->make('layout.v_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\belajar-laravel\resources\views/v_home.blade.php ENDPATH**/ ?>