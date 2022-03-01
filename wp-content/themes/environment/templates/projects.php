<?php /* Template Name: Projects */ ?>
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
        <!-- Start Tab Area -->
        <div class="tab-area fix area-padding bg-color wow fadeInUp" data-wow-delay="0.3s" id="projects">
            <div class="container">
                <div class="section-headline text-center">
							<h3>Our Projects</h3>
						</div>
                <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.5s">
						<div class="tab-menu">
				            <!-- Start Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li class="active">
								    <a href="#p-view-1" role="tab" data-toggle="tab">
								        <span class="cha-title">Mitigation Actions</span>
								    </a>
								</li>
								<li>
								    <a href="#p-view-2" role="tab" data-toggle="tab">
								        <span class="cha-title">Adaptation Actions</span>
								    </a>
								</li>
							</ul>
							<!-- End Nav tabs -->
						</div>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.7s">
						<div class="tab-content">
						    <!--Start Tab Content -->
                        
							<div class="tab-pane active" id="p-view-1" >
								<div class="tab-inner">
									<table class="project-tbl">
                                        <tr>
                                          <th>List of Projects</th>
                                          <th>Project Proponent</th>
                                          <th>Location</th>
                                          <th>Start Year</th>
                                          <th>End Year</th>
                                        </tr>
                                        <tr>
                                          <td>Lorem Ipsum</td>
                                          <td>Lorem Ipsum</td>
                                          <td>50</td>
                                          <td>2015</td>
                                          <td>2018</td>
                                        </tr>
                                        <tr>
                                          <td>Lorem Ipsum</td>
                                          <td>Lorem Ipsum</td>
                                          <td>50</td>
                                          <td>2015</td>
                                          <td>2018</td>
                                        </tr><tr>
                                          <td>Lorem Ipsum</td>
                                          <td>Lorem Ipsum</td>
                                          <td>50</td>
                                          <td>2015</td>
                                          <td>2018</td>
                                        </tr>
                                        <tr>
                                          <td>Lorem Ipsum</td>
                                          <td>Lorem Ipsum</td>
                                          <td>50</td>
                                          <td>2015</td>
                                          <td>2018</td>
                                        </tr>
                                        <tr>
                                          <td>Lorem Ipsum</td>
                                          <td>Lorem Ipsum</td>
                                          <td>50</td>
                                          <td>2015</td>
                                          <td>2018</td>
                                        </tr>
                                        <tr>
                                          <td>Lorem Ipsum</td>
                                          <td>Lorem Ipsum</td>
                                          <td>50</td>
                                          <td>2015</td>
                                          <td>2018</td>
                                        </tr>
                                    </table>
								</div>
							</div>
							<!--Start Tab Content -->
							<div class="tab-pane" id="p-view-2">
								<div class="tab-inner">
									<table class="project-tbl">
                                        <tr>
                                          <th>List of Projectsv</th>
                                          <th>Project Proponent</th>
                                          <th>Location</th>
                                          <th>Start Year</th>
                                          <th>End Year</th>
                                        </tr>
                                        <tr>
                                          <td>Lorem Ipsum</td>
                                          <td>Lorem Ipsum</td>
                                          <td>50</td>
                                          <td>2015</td>
                                          <td>2018</td>
                                        </tr>
                                        <tr>
                                          <td>Lorem Ipsum</td>
                                          <td>Lorem Ipsum</td>
                                          <td>50</td>
                                          <td>2015</td>
                                          <td>2018</td>
                                        </tr><tr>
                                          <td>Lorem Ipsum</td>
                                          <td>Lorem Ipsum</td>
                                          <td>50</td>
                                          <td>2015</td>
                                          <td>2018</td>
                                        </tr>
                                        <tr>
                                          <td>Lorem Ipsum</td>
                                          <td>Lorem Ipsum</td>
                                          <td>50</td>
                                          <td>2015</td>
                                          <td>2018</td>
                                        </tr>
                                        <tr>
                                          <td>Lorem Ipsum</td>
                                          <td>Lorem Ipsum</td>
                                          <td>50</td>
                                          <td>2015</td>
                                          <td>2018</td>
                                        </tr>
                                        <tr>
                                          <td>Lorem Ipsum</td>
                                          <td>Lorem Ipsum</td>
                                          <td>50</td>
                                          <td>2015</td>
                                          <td>2018</td>
                                        </tr>
                                    </table>
								</div>
							</div>

						</div>
					</div>
				</div>
				<!-- end Row -->
            </div>
        </div>
        <!-- End Tab end -->


<?php get_footer(); ?>