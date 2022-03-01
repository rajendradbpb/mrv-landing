<?php /* Template Name: Knowledge resources */ ?>
<?php get_header(); ?>
<?php 
$id=5; 
$post = get_post($id); 
$content = apply_filters('the_content', $post->post_content); 
echo $content;  
?>
<main id="site-content" role="main">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		}
	}

	?>

</main><!-- #site-content -->
<!-- Start Slider Area -->
        
        <!-- End Slider Area -->
        <!-- Start Counter area -->
        
        <!-- End Counter area -->
       <!-- Start Team Banner area -->
        
        <!-- End Team Banner area -->
        <!-- Start Tab Area -->
        
        <!-- End Tab end -->

<div class="blog-area fix bg-color area-padding-2 wow fadeInUp" data-wow-delay="0.3s" id="knowleadges">
            <div class="container">
                <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
                            <h3>Knowledge Resources</h3>
							<p>Dummy text is also used to demonstrate the appearance of different typefaces and layouts</p>
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="blog-grid home-blog">
                        <!-- Start single blog -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-blog">
                               <div class="blog-image">
									<a class="image-scale" href="#">
										<img src="<?php echo bloginfo('template_directory');?>/assets/images/blog/b1.jpg" alt="">
									</a>
								</div>
                                <div class="blog-content">
                                   <div class="blog-meta">
                                        <span class="admin-type">
                                            <i class="fa fa-user"></i>
                                            Admin
                                        </span>
                                        <span class="date-type">
                                            <i class="fa fa-calendar"></i>
                                            20 july, 2019
                                        </span>
                                        <span class="comments-type">
                                            <i class="fa fa-comment-o"></i>
                                            13
                                        </span>
                                    </div>
                                    <a href="#">
                                        <h4>Your Title is Goes Here</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-blog">
                                <div class="blog-content">
                                   <div class="blog-meta">
                                       <span class="admin-type">
                                            <i class="fa fa-user"></i>
                                            Admin
                                        </span>
                                        <span class="date-type">
                                           <i class="fa fa-calendar"></i>
                                            13 may, 2018
                                        </span>
                                        <span class="comments-type">
                                            <i class="fa fa-comment-o"></i>
                                            16
                                        </span>
                                    </div>
                                    <a href="#">
                                        <h4>Your Title is Goes Here</h4>
                                    </a>
                                </div>
                                <div class="blog-image">
									<a class="image-scale" href="#">
										<img src="<?php echo bloginfo('template_directory');?>/assets/images/blog/b2.jpg" alt="">
									</a>
								</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-blog">
                                <div class="blog-image">
									<a class="image-scale" href="#">
										<img src="<?php echo bloginfo('template_directory');?>/assets/images/blog/b3.jpg" alt="">
									</a>
								</div>
                                <div class="blog-content">
                                   <div class="blog-meta">
                                        <span class="admin-type">
                                            <i class="fa fa-user"></i>
                                            Admin
                                        </span>
                                        <span class="date-type">
                                           <i class="fa fa-calendar"></i>
                                            24 april, 2019
                                        </span>
                                        <span class="comments-type">
                                            <i class="fa fa-comment-o"></i>
                                            07
                                        </span>
                                    </div>
                                    <a href="#">
                                        <h4>Your Title is Goes Here</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-blog">
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <span class="admin-type">
                                            <i class="fa fa-user"></i>
                                            Admin
                                        </span>
                                        <span class="date-type">
                                           <i class="fa fa-calendar"></i>
                                            28 june, 2019
                                        </span>
                                        <span class="comments-type">
                                            <i class="fa fa-comment-o"></i>
                                            32
                                        </span>
                                    </div>
                                    <a href="#">
                                        <h4>Your Title is Goes Here</h4>
                                    </a>
                                </div>
                                <div class="blog-image">
									<a class="image-scale" href="#">
										<img src="<?php echo bloginfo('template_directory');?>/assets/images/blog/b4.jpg" alt="">
									</a>
								</div> 
                            </div>
                        </div>
                        <!-- End single blog -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-blog">
                                <div class="blog-image">
									<a class="image-scale" href="#">
										<img src="<?php echo bloginfo('template_directory');?>/assets/images/blog/b5.jpg" alt="">
									</a>
								</div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <span class="admin-type">
                                            <i class="fa fa-user"></i>
                                            Admin
                                        </span>
                                        <span class="date-type">
                                           <i class="fa fa-calendar"></i>
                                            28 june, 2019
                                        </span>
                                        <span class="comments-type">
                                            <i class="fa fa-comment-o"></i>
                                            32
                                        </span>
                                    </div>
                                    <a href="#">
                                        <h4>Your Title is Goes Here</h4>
                                    </a>
                                </div> 
                            </div>

                        </div>
                        <!-- End single blog -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-blog">
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <span class="admin-type">
                                            <i class="fa fa-user"></i>
                                            Admin
                                        </span>
                                        <span class="date-type">
                                           <i class="fa fa-calendar"></i>
                                            28 june, 2019
                                        </span>
                                        <span class="comments-type">
                                            <i class="fa fa-comment-o"></i>
                                            32
                                        </span>
                                    </div>
                                    <a href="#">
                                        <h4>Your Title is Goes Here</h4>
                                    </a>
                                </div>
                                <div class="blog-image">
									<a class="image-scale" href="#">
										<img src="<?php echo bloginfo('template_directory');?>/assets/images/blog/b6.jpg" alt="">
									</a>
								</div>
                            </div>
                        </div>
                        <!-- End single blog -->
                    </div>
                </div>
                <!-- End row -->
            </div>
        </div>


<?php get_footer(); ?>