<?php /* Template Name: Reports */ ?>
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

<?php get_footer(); ?>