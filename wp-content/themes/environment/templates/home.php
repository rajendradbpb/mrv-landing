<?php /* Template Name: Home */ ?>
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
        <div class="intro-area-2">
            <div class="intro-carousel">
                <div class="intro-content-2">
                    <div class="slider-images">
                        <img src="<?php echo bloginfo('template_directory');?>/assets/images/slider/h1.jpg" alt="">
                    </div>
                    <div class="slider-content">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- layer 1 -->
                                            <div class="layer-1 wow fadeInUp" data-wow-delay="0.3s">
                                                <h2 class="title2">Title is Goes Here</h2>
                                            </div>
                                            <!-- layer 2 -->
                                            <div class="layer-2 wow fadeInUp" data-wow-delay="0.5s">
                                                <p>Content is goes here</p>
                                            </div>
                                            <!-- layer 3 -->
                                            <div class="layer-3 wow fadeInUp" data-wow-delay="0.7s">
                                                <a href="#" class="ready-btn left-btn " >Our Services</a>
                                                <a href="#" class="ready-btn right-btn">Contact us</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-content-2 slide-2">
                    <div class="slider-images">
                        <img src="<?php echo bloginfo('template_directory');?>/assets/images/slider/h2.jpg" alt="">
                    </div>
                    <div class="slider-content">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="container">
                                    <div class="row">
                                         <div class="col-md-12">
                                            <!-- layer 1 -->
                                            <div class="layer-1 wow fadeInUp" data-wow-delay="0.3s">
                                                <h2 class="title2">Title is Goese Here</h2>
                                            </div>
                                            <!-- layer 2 -->
                                            <div class="layer-2 wow fadeInUp" data-wow-delay="0.5s">
                                                <p>Description is Goese Here</p>
                                            </div>
                                            <!-- layer 3 -->
                                            <div class="layer-3 wow fadeInUp" data-wow-delay="0.7s">
                                                <a href="#" class="ready-btn left-btn " >Our Services</a>
                                                <a href="#" class="ready-btn right-btn">Contact us</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-content-2 slide-3">
                    <div class="slider-images">
                        <img src="<?php echo bloginfo('template_directory');?>/assets/images/slider/h3.jpg" alt="">
                    </div>
                    <div class="slider-content">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="container">
                                    <div class="row">
                                         <div class="col-md-12">
                                            <!-- layer 1 -->
                                            <div class="layer-1 wow fadeInUp" data-wow-delay="0.3s">
                                                <h2 class="title2">Title is Goese Here</h2>
                                            </div>
                                            <!-- layer 2 -->
                                            <div class="layer-2 wow fadeInUp" data-wow-delay="0.5s">
                                                <p>Description is Goese Here</p>
                                            </div>
                                            <!-- layer 3 -->
                                            <div class="layer-3 wow fadeInUp" data-wow-delay="0.7s">
                                                <a href="#" class="ready-btn left-btn " >Our Services</a>
                                                <a href="#" class="ready-btn right-btn">Contact us</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slider Area -->
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
       <!-- Start Team Banner area -->
        <div class="banner-area fix area-padding wow fadeInUp" data-wow-delay="0.3s" id="aboutimrv">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="add-content">
                            <h3>World Enviournment corporate company established since 1998</h3>
                            <div class="add-contact">
                                <span class="call-us"><i class="ti-mobile"></i>Toll free : +4321-7654543</span>
                                <span class="call-us mail-us"><i class="ti-email"></i>Mail us : render-09@mail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Team Banner area -->
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
<div class="about-area about-2 fix wow fadeInUp" data-wow-delay="0.3s" id="reports">
            <div class="container-full">
                <div class="row">
                    <div class="col-md-5 col-sm-4 col-xs-12 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="about-image">
                            <div class="video-content ">
								<a href="https://www.youtube.com/watch?v=O33uuBh6nXA" class="video-play vid-zone">
									<i class="fa fa-play"></i>
								</a>
							</div>
                        </div>
                    </div>
                    <!-- column end -->
                    <div class="col-md-7 col-sm-8 col-xs-12 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="support-all about-content">
                            <div class="section-headline right-headline white-headline">
                                <h3>Report <span class="color">more experts</span> that provides Report</h3>
                            </div>
                            <div class="about-company">
                                <div class="tab-menu">
				            <!-- Start Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li class="active">
								    <a href="#r-view-1" role="tab" data-toggle="tab">
								        <span class="cha-title">National GHG Inventory</span>
								    </a>
								</li>
								<li>
								    <a href="#r-view-2" role="tab" data-toggle="tab">
								        <span class="cha-title">Mitigation Report</span>
								    </a>
								</li>
                                <li>
								    <a href="#r-view-3" role="tab" data-toggle="tab">
								        <span class="cha-title">Adaptation Report</span>
								    </a>
								</li>
                                <li>
								    <a href="#r-view-4" role="tab" data-toggle="tab">
								        <span class="cha-title">SDG Report</span>
								    </a>
								</li>
                                <li>
								    <a href="#r-view-5" role="tab" data-toggle="tab">
								        <span class="cha-title">Climate Fianance Report</span>
								    </a>
								</li>
							</ul>
							<!-- End Nav tabs -->
						</div>
                        		<div class="tab-content">
						    <!--Start Tab Content -->
                        
							<div class="tab-pane active" id="r-view-1" >
								<div class="tab-inner wow fadeInUp" data-wow-delay="0.3s">
									<canvas id="myChart" style="width:100%;max-width:600px"></canvas>

<script>
var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
var yValues = [55, 49, 44, 24, 15];
var barColors = ["red", "green","blue","orange","brown"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "World Wine Production 2018"
    }
  }
});
</script>
								</div>
							</div>
							<!--Start Tab Content -->
							<div class="tab-pane" id="r-view-2">
								<div class="tab-inner wow fadeInUp" data-wow-delay="0.5s">
									<canvas id="myChart2" style="width:100%;max-width:600px"></canvas>

<script>
var xValues = ["abc", "def", "ghi", "jkl", "mno"];
var yValues = [55, 49, 44, 24, 15];
var barColors = ["red", "green","blue","orange","brown"];

new Chart("myChart2", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "World Wine Production 2012"
    }
  }
});
</script>
								</div>
							</div>
							<div class="tab-pane" id="r-view-3">
								<div class="tab-inner wow fadeInUp" data-wow-delay="0.3s">
									<canvas id="myChart3" style="width:100%;max-width:600px"></canvas>

<script>
var xValues = ["abc", "def", "ghi", "jkl", "mno"];
var yValues = [55, 49, 44, 24, 15];
var barColors = ["red", "green","blue","orange","brown"];

new Chart("myChart3", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "World Wine Production 2012"
    }
  }
});
</script>
								</div>
							</div>
                            <div class="tab-pane" id="r-view-4">
								<div class="tab-inner">
									<canvas id="myChart4" style="width:100%;max-width:600px"></canvas>

<script>
var xValues = ["abc", "def", "ghi", "jkl", "mno"];
var yValues = [55, 49, 44, 24, 15];
var barColors = ["red", "green","blue","orange","brown"];

new Chart("myChart4", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "World Wine Production 2012"
    }
  }
});
</script>
								</div>
							</div>
                            <div class="tab-pane" id="r-view-5">
								<div class="tab-inner">
									<canvas id="myChart5" style="width:100%;max-width:600px"></canvas>

<script>
var xValues = ["abc", "def", "ghi", "jkl", "mno"];
var yValues = [55, 49, 44, 24, 15];
var barColors = ["red", "green","blue","orange","brown"];

new Chart("myChart5", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "World Wine Production 2012"
    }
  }
});
</script>
								</div>
							</div>
						</div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- column end -->
                </div>
            </div>
        </div>

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
<div class="contact-area area-padding-2" id="contact">
            <div class="container">
            <div class="section-headline text-center">
                            <h3>Contact Us</h3>
						</div>
                <div class="row">
                    <div class="contact-inner">
                        <!-- Start contact icon column -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <i class="ti-mobile"></i>
                                    <p>
                                        Call : +0011-564-543<br>
                                        <span>Monday-Friday (10am-18pm)</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Start contact icon column -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <i class="ti-email"></i>
                                    <p>
                                        Email : xyz@gmail.com<br>
                                        <span>Web: www.website.com</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Start contact icon column -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <i class="ti-location-pin"></i>
                                    <p>
                                        Location : Newyork city<br>
                                        <span>23 house/3 Road</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                     <div class="col-md-6 col-sm-6 col-xs-12">
                         <!-- Start Map -->
                        <div class="map-area">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319" width="100%" height="400" frameborder="0" style="border:0"></iframe>
                        </div>
                        <!-- End Map -->
                    </div>
                    <!-- Start Left contact -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-form">
                            <div class="row">
                                <form id="contactForm" method="POST" action="contact.php" class="contact-form">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="name" class="form-control" placeholder="Name" required="" data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" class="email form-control" id="email" placeholder="Email" required="" data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" id="msg_subject" class="form-control" placeholder="Subject" required="" data-error="Please enter your message subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <textarea id="message" rows="7" placeholder="Massage" class="form-control" required="" data-error="Write your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                        <button type="submit" id="submit" class="add-btn contact-btn">Send Message</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                        <div class="clearfix"></div>
                                    </div>   
                                </form>  
                            </div>
                        </div>
                    </div>
                    <!-- End Left contact -->
                </div>
            </div>
        </div>

<?php get_footer(); ?>