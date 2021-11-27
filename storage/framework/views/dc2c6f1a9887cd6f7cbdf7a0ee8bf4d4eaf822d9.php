<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
 
     <!-- Site Metas -->
    <title>Green Special - Restaurant Responsive HTML5 OnePage Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?php echo e(asset('app/images/favicon.ico')); ?>" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo e(asset('app/images/apple-touch-icon.png')); ?>')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('app/css/bootstrap.min.css')); ?>">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('app/style.css')); ?>">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('app/css/responsive.css')); ?>">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('app/css/custom.css')); ?>">
	<script src="<?php echo e(asset('app/js/modernizr.js')); ?>"></script> <!-- Modernizr -->


</head>
<body id="page-top" class="politics_version">

    <!-- LOADER -->
    <div id="preloader">
        <div id="main-ld">
			<div id="loader"></div>  
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->
	
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container-fluid">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
			<img class="img-fluid" src="images/logo.png')}}" alt="" />
		</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger active" href="#home"><span>Home</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about"><span>About</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#menu"><span>Menu</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#gallery"><span>Gallery</span></a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#chef"><span>Chef</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#pricing"><span>Pricing</span></a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#blog"><span>Blog</span></a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact"><span>Contect Us</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	
	<section id="home" class="main-banner">
		
		<div class="slider-new-2 owl-carousel owl-theme">
			<?php $__currentLoopData = $headers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $header): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				
			
			<div class="item slider-screen">
				<div class="slider-img-full">
					<img src="<?php echo e(asset($header->image->url??'#')); ?>" alt="" />
				</div>
				<div class="container">
					<div class="slider-content text-white">
						<div class="in-box">
							<h2><?php echo e($header->title); ?></h2>
							<p><?php echo e($header->description); ?></p>
							<a class="btn-slider hvr-radial-in" href="#">Learn More</a>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				
		
			
		</div>
		
	</section>
	
	

    <div id="about" class="section lb">
        <div class="container-fluid">
			<?php $__currentLoopData = $ssections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ssection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row">
                <div class="col-md-6">
				
					<div class="message-box">                        
                        <h2><?php echo e($ssection->title); ?></h2>
                        
						<p><?php echo e($ssection->description); ?></p>
						<ul>
							<?php $__currentLoopData = $ssection->ssection_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ssection_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li><?php echo e($ssection_item->title); ?></li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						
							
						</ul>
                        <a href="#" class="sim-btn hvr-radial-in"><span>Contact Us</span></a>
                    </div><!-- end messagebox -->
					
                    
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="right-box-pro wow fadeIn">
                        <img src="<?php echo e(asset($ssection->image->url)); ?>" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div><!-- end container -->
    </div><!-- end section -->
	
	<div class="section cont-box">
		<div class="container-fluid">
			<div class="row">
				<?php $__currentLoopData = $fsections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fsection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="inner-cont-box">
						<i class="flaticon-review"></i>
						<h3 class="counter-number"><?php echo e($fsection->number); ?></h3>
						<h4><?php echo e($fsection->title); ?></h4>
					</div>
				</div>	
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				
			</div>
		</div>
	</div>
	
    <div id="menu" class="section lb">
        <div class="container-fluid">
            <div class="section-title text-center">
                <h3><?php echo e($page_menu->title); ?></h3>
                <p><?php echo e($page_menu->description); ?></p>
            </div><!-- end title -->

            <div class="row">
				<?php $__currentLoopData = $menu_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-md-3">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<img src="<?php echo e(asset($item_item->image->url)); ?>" class="img-fluid" alt="" />
						</div>
						<h2><?php echo e($item_item->name); ?></h2>
						<a class="hvr-radial-in" href="#">$ <?php echo e($item_item->price); ?>.00</a>
					</div>
                </div><!-- end col -->
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
	<div id="gallery" class="section wb">
		<div class="container-fluid">
			<div class="section-title text-center">
                <h3><?php echo e($page_gallery->title); ?></h3>
                <p><?php echo e($page_gallery->description); ?></p>
            </div><!-- end title -->
			
			<div class="gallery-menu text-center row">
				<div class="col-md-12">
					<div class="button-group filter-button-group">
						<button class="hvr-radial-in active" data-filter="*">All</button>
						<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<button class="hvr-radial-in" data-filter=".<?php echo e($category->id); ?>">Starters</button>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						
					
					</div>
				</div>
			</div>
			
			<div class="gallery-list row">
				<?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-md-4 col-sm-6 gallery-grid <?php echo e($gallery->category_id); ?>">
					<div class="gallery-single fix">
						<img src="<?php echo e(asset($gallery->image->url)); ?>" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<h3><?php echo e($gallery->name); ?></h3>
							<a href="<?php echo e(asset($gallery->image->url)); ?>" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				
				
			
			</div>
		</div>
	</div>
	
	 <div id="testimonials" class="section lb">
        <div class="container-fluid">
            <div class="section-title text-center">
                <h3><?php echo e($page_testimony->title); ?></h3>
                <p><?php echo e($page_testimony->description); ?></p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
						<?php $__currentLoopData = $testimonies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimony): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							
						<div class="testimonial align-items-center clearfix">
							<div class="testi-meta">
                                <img src="<?php echo e(asset($testimony->image->url)); ?>" alt="" class="img-fluid">
                                <h4><?php echo e($testimony->name); ?> </h4>
                            </div>
                            <!-- end testi-meta -->
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> <?php echo e($testimony->title); ?></h3>
                                <p class="lead"><?php echo e($testimony->description); ?></p>
                            </div>
                        </div>
                        <!-- end testimonial -->

						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       

                    </div><!-- end carousel -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
	<div id="chef" class="section wb">
		<div class="container-fluid">
			<div class="section-title text-center">
				<h3><?php echo e($page_team->title); ?></h3>
                <p><?php echo e($page_team->description); ?></p>
            </div><!-- end title -->
		
			<div class="row">
				<?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-md-3 col-sm-6">
                    <div class="our-team">
                        <img src="<?php echo e(asset($team->image->url)); ?>" alt="">
                        <div class="team-content">
                            <h3 class="title"><?php echo e($team->name); ?></h3>
                            <span class="post"><?php echo e($team->occupation); ?></span>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i> </a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i> </a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i> </a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               

            </div>
			
		</div>
	</div>
	
	<div id="pricing" class="section lb">
		<div class="container-fluid">
			<div class="section-title text-center">
				<h3><?php echo e($page_price->title); ?></h3>
                <p><?php echo e($page_price->description); ?></p>
            </div><!-- end title -->
			
			<div class="row">
				<?php $__currentLoopData = $prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-md-4 col-sm-6">
					<div class="pricingTable " style="background: url(<?php echo e(asset($price->image->url)); ?>) no-repeat center top;background-size: cover;">
						<div class="pricingTable-header">
							<h3 class="title"><?php echo e($price->name); ?></h3>
							<div class="price-value">
								<div class="value">
									<span class="amount">$<?php echo e($price->number); ?>.00</span>
									<span class="month">per Month</span>
								</div>
							</div>
						</div>
						<ul class="pricing-content">
							<li><?php echo e($price->disk); ?></li>
							<li><?php echo e($price->emails); ?></li>
							<li><?php echo e($price->bandwith); ?></li>
							<li><?php echo e($price->sub_domains); ?></li>
							<li><?php echo e($price->domains); ?></li>
						</ul>
						<a href="#" class="hvr-radial-in pricingTable-signup"><i class="fa fa-dot-circle-o"></i>Buy Now</a>
					</div>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				

			</div>
			
		</div>
	</div>
	
	
	<div id="blog" class="section wb">
		<div class="container-fluid">
			<div class="section-title text-center">
				<h3><?php echo e($page_blog->title); ?></h3>
                <p><?php echo e($page_blog->description); ?></p>
            </div><!-- end title -->
			
			<div class="row">
				<?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-md-4 col-sm-6 col-lg-4">
					<div class="post-box">
						<div class="post-thumb">
							<img src="<?php echo e(asset($blog->image->url)); ?>" class="img-fluid" alt="post-img" />
							<div class="date">
								<span><?php echo e($blog->created_at->format('M d')); ?></span>
							</div>
						</div>
						<div class="post-info">
							<h4><?php echo e($blog->title); ?></h4>
							<p><?php echo e($blog->description); ?></p>
							<ul>
                                <li>by admin</li>
                                <li><?php echo e($blog->created_at->format('M d, Y')); ?></li>
                                <li><a href="#"><b> Comments</b></a></li>
                            </ul>
						</div>
					</div>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				
			</div>
			
		</div>
	</div>

    <div id="contact" class="section db">
        <div class="container-fluid">
            <div class="section-title text-center">
				<h3><?php echo e($page_contact->title); ?></h3>
                <p><?php echo e($page_contact->description); ?></p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form   method="POST" action="<?php echo e(route('contacts.store')); ?>">
							<?php echo csrf_field(); ?>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" id="name" name="name" type="text" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name.">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" id="email" type="email" name="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email address.">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="form-control" id="message" placeholder="Your Message" name="message" required="required" data-validation-required-message="Please enter a message."></textarea>
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="col-lg-12 text-center">
									<div id="success"></div>
									<button  class="sim-btn hvr-radial-in" type="submit">Send Message</button>
								</div>
							</div>
						</form>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
	<footer class="main-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="mb-3 img-logo">
						<a href="#">
							 <img src="images/logo.png')}}" alt="">
						</a>
						<p><?php echo e($footer_desc->description); ?></p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<h4 class="mb-4 ph-fonts-style foot-title">
						Recent Link
					</h4>
					<ul class="ph-links-column">
						<?php $__currentLoopData = $footer_links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $footer_link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li><a href="<?php echo e($footer_link->url); ?>" class="text-black"><?php echo e($footer_link->name); ?></a></li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						
						
					</ul>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<h4 class="mb-4 ph-fonts-style foot-title">
						Contact Us
					</h4>
					<div class="cont-box-footer">
						<div class="cont-line">
							<div class="icon-b">
								<i class="fa fa-map-signs" aria-hidden="true"></i>
							</div>
							<div class="cont-dit">
								<p><?php echo e($footer_contact->address); ?></p>
							</div>
						</div>
						<div class="cont-line">
							<div class="icon-b">
								<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
							</div>
							<div class="cont-dit">
								<p><a href="#"><?php echo e($footer_contact->phone1); ?></a></p>
								<p><a href="#"><?php echo e($footer_contact->phone2); ?></a></p>
							</div>
						</div>
						<div class="cont-line">
							<div class="icon-b">
								<i class="fa fa-envelope-o" aria-hidden="true"></i>
							</div>
							<div class="cont-dit">
								<p><a href="#"><?php echo e($footer_contact->email1); ?></a></p>
								<p><a href="#"><?php echo e($footer_contact->email2); ?></a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<h4 class="mb-4 ph-fonts-style foot-title">
						SUBSCRIBE
					</h4>
					<p class="ph-fonts-style_p">
						<?php echo e($footer_sub->description??''); ?>

					</p>
					<div class="media-container-column" data-form-type="formoid">
						<div data-form-alert="" class="align-center" hidden="">
							Thanks for filling out the form!
						</div>

						<form class="form-inline" action="#" method="post">
							<input value="" data-form-email="true" type="hidden">
							<div class="form-group">
								<input class="form-control input-sm input-inverse my-2" name="email" required="" data-form-field="Email" placeholder="Email" id="email" type="email">
							</div>
							<div class="input-group-btn">
								<button href="" class="btn hvr-radial-in btn-primary" type="submit" role="button"><span> Subscribe </span></button>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
	</footer>

    <div class="copyrights">
        <div class="container-fluid">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-links">
                        <a href="#">Home</a>
                        <a href="#">Blog</a>
                        <a href="#">Pricing</a>
                        <a href="#">About</a>
                        <a href="#">Faq</a>
                        <a href="#">Contact</a>
                    </p>
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">Green Special</a> Design By : 
					<a href="https://html.design/">html design</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="<?php echo e(asset('app/js/all.js')); ?>"></script>
	<!-- Camera Slider -->
	<script src="<?php echo e(asset('app/js/jquery.mobile.customized.min.js')); ?>"></script>
	<script src="<?php echo e(asset('app/js/jquery.easing.1.3.js')); ?>"></script> 
	<script src="<?php echo e(asset('app/js/parallaxie.js')); ?>"></script>
	<script src="<?php echo e(asset('app/js/headline.js')); ?>"></script>
	<script src="<?php echo e(asset('app/js/owl.carousel.js')); ?>"></script>
	<script src="<?php echo e(asset('app/js/jquery.nicescroll.min.js')); ?>"></script>
	<!-- Contact form JavaScript -->
    <script src="<?php echo e(asset('app/js/jqBootstrapValidation.js')); ?>"></script>
    <script src="<?php echo e(asset('app/js/contact_me.js')); ?>"></script>
    <!-- ALL PLUGINS -->
    <script src="<?php echo e(asset('app/js/custom.js')); ?>"></script>
</body>
</html><?php /**PATH D:\projects\web\laravel\progress\my_web1\resources\views/index.blade.php ENDPATH**/ ?>