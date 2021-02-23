<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?php echo e(asset('templates')); ?>/img/favicon.png" type="image/png">
        <title>Team S4NC</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('templates')); ?>/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo e(asset('templates')); ?>/vendors/linericon/style.css">
        <link rel="stylesheet" href="<?php echo e(asset('templates')); ?>/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo e(asset('templates')); ?>/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo e(asset('templates')); ?>/vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="<?php echo e(asset('templates')); ?>/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="<?php echo e(asset('templates')); ?>/vendors/animate-css/animate.css">
        <link rel="stylesheet" href="<?php echo e(asset('templates')); ?>/vendors/flaticon/flaticon.css">
        <!-- main css -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo e(asset('templates')); ?>/css/style.css">
        <link rel="stylesheet" href="<?php echo e(asset('templates')); ?>/css/responsive.css">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <?php echo $__env->make('layout.v_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--================Header Menu Area =================-->
       
        <!--================Home Banner Area =================-->
       
        <!--================End Home Banner Area =================-->
        
        <!--================Welcome Area =================-->
        
        <?php echo $__env->yieldContent('content'); ?>
        
        <!--================End Welcome Area =================-->     
                      
        
        <!--================Testimonials Area =================-->
        <section class="testimonials_area">
        	<div class="container">
        		<div class="main_title">
        			<h2>Testimonials</h2>
        			</div>
        		<div class="testi_inner">
					<div class="testi_slider owl-carousel">
						<div class="item">
							<div class="testi_item">
								<p>
									Saya lahir dan besar dari team ini.  Menjadi pro player adalah tantangan terbesar. Keep fighting
									<h4>Ilham Mubarog</h4>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star-half-o"></i></a>
							</div>
						</div>
						<div class="item">
							<div class="testi_item">
								<p>the team just like my families, we've been through up and down, rough times has it own experience to take, i even witness love from 2 different individual, imagine total strangers met and make it happen.
									<h4>Tomi Tri Sujaka</h4>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
							</div>
						</div>
						<div class="item">
							<div class="testi_item">
								<p>I found family and rival in this com
									<h4>M.Ari Syahputra</h4>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star-half-o"></i></a>
							</div>
						</div>
						<div class="item">
							<div class="testi_item">
								<p>Dimas orangnya santai dan setia kawan. Gak pernah ada masalah sama orang lain. Minusnya main dota kadang noobs wkwkwk.
									<h4>Ilham Rifky</h4>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
							</div>
						</div>
					</div>
        		</div>
        	</div>
        </section>
        <!--================End Testimonials Area =================-->
        
        <
        
        <!--================Footer Area =================-->
        <footer class="footer_area p_120">
        	<div class="container">
        		<div class="row footer_inner">
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget ab_widget">
        					<div class="f_title">
        						<h3>About</h3>
							</div>
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="/home">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="/about">About</a></li> 
								<li class="nav-item"><a class="nav-link" href="https://discord.com/invite/K7wq9Ah">Discord</a>						
								<li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
							</ul>
        					
        					<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Team S4NC
</p>        				</aside>
        			</div>
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget news_widget">
        					<div class="f_title">
        						<h3>Newsletter</h3>
        					</div>
        					<p>Stay updated with our latest trends</p>
        					<div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                	<div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>		
                                    </div>				
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
        				</aside>
        			</div>
        			<div class="col-lg-2">
        				<aside class="f_widget social_widget">
        					<div class="f_title">
        						<h3>Follow Me</h3>
        					</div>
        					<p>Let us be social</p>
        					<ul class="list">
        						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
        						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
        						<li><a href="https://www.instagram.com/teams4nc/"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube"></i></a></li>
								<li><a href="#"><i class="fa fa-discord"></i></a></li>
        					</ul>
        				</aside>
        			</div>
        		</div>
        	</div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="<?php echo e(asset('templates')); ?>/js/jquery-3.2.1.min.js"></script>
        <script src="<?php echo e(asset('templates')); ?>/js/popper.js"></script>
        <script src="<?php echo e(asset('templates')); ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo e(asset('templates')); ?>/js/stellar.js"></script>
        <script src="<?php echo e(asset('templates')); ?>/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="<?php echo e(asset('templates')); ?>/vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="<?php echo e(asset('templates')); ?>/vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="<?php echo e(asset('templates')); ?>/vendors/isotope/isotope-min.js"></script>
        <script src="<?php echo e(asset('templates')); ?>/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="<?php echo e(asset('templates')); ?>/js/jquery.ajaxchimp.min.js"></script>
        <script src="<?php echo e(asset('templates')); ?>/vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="<?php echo e(asset('templates')); ?>/vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="<?php echo e(asset('templates')); ?>/js/mail-script.js"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="<?php echo e(asset('templates')); ?>/js/gmaps.min.js"></script>
        <script src="<?php echo e(asset('templates')); ?>/js/theme.js"></script>
    </body>
</html><?php /**PATH C:\belajar-laravel\resources\views/layout/v_template.blade.php ENDPATH**/ ?>