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

	<footer id="colophon" class="site-footer flex" role="contentinfo">
		<div class="site-info">
			<div class="footer-left float-left col-1-3">
				<?php 
		 			echo '<img src="'.get_bloginfo("stylesheet_directory").'/images/footer_logo.png">'."<br>";
				?>
				<div class="footer-address float-left">
					1233 Yonge Street, Unit 203<br>
					Toronto ON M4T 1W4<br>
					(647) 766-2363<br>
					<a class="footer-link" href="mailto:info@magic-languages.com">info@magic-languages.com</a>
			</div>
			
		</div>
			
			<div class="footer-middle">
				<div class="left-middle col-1-6 float-left">
					<ul>
						<li><a href="#">Our Story</a></li>
						<li><a href="#">Programs</a></li>
						<li><a href="#">Schedule</a></li>
						<li><a href="#">Locations</a></li>
						<li><a class="nav-register" href="#">Register</a></li>
					</ul>
				</div>
				<div class="right-middle col-1-6 float-left">
					<ul>
						<li><a href="#">Blog</a></li>
						<li><a href="#">School Programs</a></li>
						<li><a href="#">Careers</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Login</a></li>
					</ul>
				</div>
			</div>
			<div class="footer-right">
				<div class="social-buttons">
					<i class="fa fa-facebook" aria-hidden="true"></i>
					<i class="fa fa-twitter" aria-hidden="true"></i>
					<i class="fa fa-instagram" aria-hidden="true"></i>
				</div>
				<div class="footer-newsletter">
					
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
