<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<!-- Start Footer Area -->
        <footer class="footer1">
            <div class="footer-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <div class="footer-content logo-footer">
                                <div class="footer-head">
                                    <div class="footer-logo">
                                    	<a href="#"><img src="<?php echo bloginfo('template_directory');?>/assets/images/logo/footer-logo.png" alt=""></a>
                                    </div>
                                    <p>
                                        Are you looking for professional advice for your new business. Are you looking for professional advice for your new business. Are you looking for professional advice for your new business.
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-4 col-sm-3 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>Quick Link</h4>
                                    <ul class="footer-list">
                                        <li><a href="index.html">Home</a></li>
                                            <li><a href="#about">About US</a></li>
											<li><a href="#aboutimrv">About IMRV Tool</a></li>
											<li><a href="#projects">Projects</a></li>
											
                                    </ul>
                                    <ul class="footer-list hidden-sm">
										<li><a href="#reports">Reports</a></li>
											<li><a href="#knowleadges">Knoleadge Resources</a></li>
                                            <li><a href="#contact">Contact Us</a></li>
									</ul>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="footer-content last-content">
                                <div class="footer-head">
                                    <h4>Information</h4>
                                    <div class="footer-contacts">
                                        <p><span>Location :</span> House- 65/4, Zonson street-3/5, London, UK</p>
										<p><span>Tel :</span> +0890-564-5644</p>
										<p><span>Email :</span> info@xyz.com</p>
									</div> 
                                    <div class="footer-icons">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-pinterest"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Footer Bottom Area -->
            <div class="footer-area-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="copyright">
                                <p>
                                    Copyright © 2021
                                    <a href="#">yoursitename</a> All Rights Reserved
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer Bottom Area -->
        </footer>
        <!-- End Footer Area -->
		
		<!-- all js here -->

		<!-- jquery latest version -->
		<script src="<?php echo bloginfo('template_directory');?>/assets/js/vendor/jquery-1.12.4.min.js"></script>
		<!-- bootstrap js -->
		<script src="<?php echo bloginfo('template_directory');?>/assets/js/bootstrap.min.js"></script>
		<!-- owl.carousel js -->
		<script src="<?php echo bloginfo('template_directory');?>/assets/js/owl.carousel.min.js"></script>
		<!-- Counter js -->
		<script src="<?php echo bloginfo('template_directory');?>/assets/js/jquery.counterup.min.js"></script>
		<!-- waypoint js -->
		<script src="<?php echo bloginfo('template_directory');?>/assets/js/waypoints.js"></script>
		<!-- magnific js -->
        <script src="<?php echo bloginfo('template_directory');?>/assets/js/magnific.min.js"></script>
        <!-- wow js -->
        <script src="<?php echo bloginfo('template_directory');?>/assets/js/wow.min.js"></script>
         <!-- venobox js -->
        <script src="<?php echo bloginfo('template_directory');?>/assets/js/venobox.min.js"></script>
        <!-- meanmenu js -->
        <script src="<?php echo bloginfo('template_directory');?>/assets/js/jquery.meanmenu.js"></script>
		<!-- Form validator js -->
		<script src="<?php echo bloginfo('template_directory');?>/assets/js/form-validator.min.js"></script>
		<!-- plugins js -->
		<script src="<?php echo bloginfo('template_directory');?>/assets/js/plugins.js"></script>
		<!-- main js -->
		<script src="<?php echo bloginfo('template_directory');?>/assets/js/main.js"></script>
		<?php wp_footer(); ?>

	</body>
</html>
