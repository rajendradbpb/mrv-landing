<?php /* Template Name: About us */ ?>
<?php get_header(); ?>
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
        <!-- Start Counter area -->
        <div class="counter-area fix area-padding" id="about">
            <div class="container">
               <div class="row">
                   <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.3s">
                       <div class="counter-image">
                            <div class="rotmate-image rotateme">
                                <img src="<?php echo bloginfo('template_directory');?>/assets/images/about/circle.png" alt="">
                            </div>
                            <div class="top-img">
                                <img src="<?php echo bloginfo('template_directory');?>/assets/images/about/self.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="0.3s">
                        <div class="fun-text-all">
                            <!-- single counter  -->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="fun_text wow fadeInUp" data-wow-delay="0.2s">
                                   <span class="counter-icon"><i class="ti-layers"></i></span>
                                    <span class="counter">510</span>
                                    <h4>Total projects</h4>
                                </div>
                            </div>
                            <!-- single counter  -->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="fun_text wow fadeInUp" data-wow-delay="0.3s">
                                   <span class="counter-icon"><i class="ti-world"></i></span>
                                    <span class="counter">120</span>
                                    <h4>Worldwide</h4>
                                </div>
                            </div>
                           <!-- single counter  -->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="fun_text wow fadeInUp" data-wow-delay="0.4s">
                                    <span class="counter-icon"><i class="ti-cup"></i></span>
                                    <span class="counter">40</span>
                                    <h4>Awards win</h4>
                                </div>
                            </div>
                            <!-- single counter  -->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="fun_text wow fadeInUp" data-wow-delay="0.5s">
                                    <span class="counter-icon"><i class="ti-user"></i></span>
                                    <span class="counter">210</span>
                                    <h4>Team member</h4>
                                </div>
                            </div>
                            <!-- single counter  -->
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <!-- End Counter area -->
       
<?php get_footer(); ?>