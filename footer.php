<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package magic_language
 */

?>

	</div><!-- #content -->

	<div class="sub-footer">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php echo CFS()->get('sub_footer'); ?>
		<?php endwhile; wp_reset_query();?>
	</div>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info row">
<<<<<<< HEAD
			<div class="footer-left large-4 columns">
				<?php
=======
			<div class="footer-left large-4 medium-4 small-4 columns">
				<?php 
>>>>>>> master
		 			echo '<img src="'.get_bloginfo("stylesheet_directory").'/images/footer_logo.png">'."<br>";
				?>
				<div class="footer-address">
					1233 Yonge Street, Unit 203<br>
					Toronto ON M4T 1W4<br>
					(647) 766-2363<br>
					<a class="footer-link" href="mailto:info@magic-languages.com">info@magic-languages.com</a>
				</div>
			</div>
<<<<<<< HEAD

				<div class="left-middle large-2 columns">
=======
			
				<div class="left-middle large-2 medium-2 small-2 columns">
>>>>>>> master
					<ul>
						<li><a href="#">Our Story</a></li>
						<li><a href="#">Programs</a></li>
						<li><a href="#">Schedule</a></li>
						<li><a href="#">Locations</a></li>
						<li><a class="nav-register" href="#">Register</a></li>
					</ul>
				</div>
				<div class="right-middle large-2 medium-2 small-2 columns">
					<ul>
						<li><a href="#">Blog</a></li>
						<li><a href="#">School Programs</a></li>
						<li><a href="#">Careers</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Login</a></li>
					</ul>
				</div>
<<<<<<< HEAD

			<div class="large-3 columns">
				<div class="social-buttons flex">
=======
		
			<div class="large-3 medium-3 small-3 columns relative">
				<div class="social-buttons flex flex-end">
>>>>>>> master
					<i class="fa fa-facebook" aria-hidden="true"></i>
					<i class="fa fa-twitter" aria-hidden="true"></i>
					<i class="fa fa-instagram" aria-hidden="true"></i>
				</div>
				<div class="footer-newsletter">
					<label>Subscribe to the newsletter
        		<input type="text" placeholder="Enter your email address">
      		</label>
				</div>
				<div class="copyright absolute">
					&copy; Magic Languages Inc. 2012 All Rights Reserved
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
