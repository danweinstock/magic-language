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
		<?php if ( is_archive() ){
			$resources = new WP_Query( array( 'page_id'=> 127) );
			 while ( $resources->have_posts() ) {
			 $resources->the_post();
			 echo CFS()->get('sub_footer');

		 	}
		} else {
			  while ( have_posts() ) : the_post();
				 echo CFS()->get('sub_footer');
			 endwhile; wp_reset_query();
	 	}?>
	</div>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info row">



			<div class="footer-left large-4 medium-4 small-12 columns">
				<div class="large-12 small-6 columns">
		 			<?echo '<img src="'.get_bloginfo("stylesheet_directory").'/images/footer_logo.png">'."<br>";?>
				</div>
				<div class="footer-address large-12 small-6 columns">
					1233 Yonge Street, Unit 203<br>
					Toronto ON M4T 1W4<br>
					(647) 766-2363<br>
					<a class="footer-link" href="mailto:info@magic-languages.com">info@magic-languages.com</a>
				</div>
			</div>

			<div class="large-4 small-12 columns">
				<div class="left-middle large-6  small-6 columns">

					<ul>
						<li><a href="/about">Our Story</a></li>
						<li><a href="/programs">Programs</a></li>
						<li><a href="/schedule">Schedule</a></li>
						<li><a href="/locations">Locations</a></li>
						<li><a class="nav-register" href="/register-general">Register</a></li>
					</ul>
				</div>
				<div class="right-middle large-6 small-6 columns">
					<ul>
						<li><a href="/blog">Blog</a></li>
						<li><a href="#">School Programs</a></li>
						<li><a href="#">Careers</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Login</a></li>
					</ul>
				</div>
			</div>


			<div class="large-4 small-12 columns">
				<div class="social-buttons flex flex-end">

					<a href="https://www.facebook.com/Magic-Languages-325747197551091/" target="_blank">
						<i class="fa fa-facebook" aria-hidden="true"></i>
					</a>
					<a href="https://twitter.com/MagicLanguages" target="_blank">
						<i class="fa fa-twitter" aria-hidden="true"></i>
					</a>
					<a href="https://www.instagram.com/magiclanguages/" target="_blank">
						<i class="fa fa-instagram" aria-hidden="true"></i>
					</a>
				</div>
				<div class="footer-newsletter">
					<label>Subscribe to the newsletter
		        		<input type="text" placeholder="Enter your email address">
		      		</label>
				</div>
				<div class="copyright">
					&copy; Magic Languages Inc. 2016 All Rights Reserved
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
