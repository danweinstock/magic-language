<div class="row">
	<div class="medium-8 medium-centered small-8 small-centered column">
		<p class="text-left">If you are a school, kindergarten, daycare, or any other center for child education and you
			would like to offer French, Spanish, Mandarin language class, Magic-Languages can help you.
			Our teachers can teach before- and after-school programs or integrate lessons in you regular
			curriculum. </p>

		<p class="text-left">Please contact us and benefit from a professional teaching service with a proven methodology
			directly at your school</p><br>

		<?php
		while ( have_posts() ) : the_post();
		 the_content();
		endwhile;
		?>


		<div class="row ">
			<div class="panel">
				<div class="large-6 hide-for-small-only column bunny-school">
					<?php
						echo '<img src="'.get_bloginfo("stylesheet_directory").'/images/bunny/black_bunny.png">'."<br>";
					?>
				</div>
			</div>
		</div>
	</div>
</div>