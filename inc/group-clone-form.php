<li>
		<label>Student name*</label> <br>
		<input type="text" name="fname[]" placeholder="Full Student Name" required>
</li>
<li>
	<label>Select Student's Age*</label>
	<button class="blue-button age-button active-option" type="button" value="1-3">A. L1: 1-3 years old</button>
	<button class="blue-button age-button" type="button" value="3-6">B. L2: 3-6 years old</button><br>
	<button class="blue-button age-button" type="button" value="6-9">C. L3: 6-9 years old</button>
	<button class="blue-button age-button" type="button" value="9-12">D. L4: 9-12 years old</button>
	<input type="hidden" name="studentAge[]" class="age-hidden" required />
</li>
<li>
	<label>Choose Program Language:*</label>
	<div class="row">
		<button class="language-button relative" value="Spanish">
			<div class="overlay-color"></div>
				<?php
				echo '<img src="'.get_bloginfo("stylesheet_directory").'/images/language-buttons/spanish_selected.jpg">'."<br>";
				?>
		</button>
		<button class="language-button relative" value="French">
			<div class="overlay-color"></div>
				<?php
				echo '<img src="'.get_bloginfo("stylesheet_directory").'/images/language-buttons/french_selected.jpg">'."<br>";
				?>
		</button>
		<button class="language-button relative" value="Mandarin">
			<div class="overlay-color"></div>
				<?php
				echo '<img src="'.get_bloginfo("stylesheet_directory").'/images/language-buttons/mandarin_selected.jpg">'."<br>";
				?>
		</button>
	</div>
	<input type="hidden" name="studentLanguage[]" class="hidden-language" required>
</li>
<li>
	<label>Which Session would you like to Sign up For?*<br></label>
	<button class="blue-button session-button active-group-session" type="button" value="Fall 2016">Fall 2016 (Sept. - Nov.)</button><br>
	<button class="blue-button session-button" type="button" value="Winter 2017">Winter 2017 (Jan. - Mar.)</button><br>
	<button class="blue-button session-button" type="button" value="Spring 2017">Spring 2017 (Apr. - Jun.)</button><br>
	<button class="blue-button session-button" type="button" value="Full Year">Full Year (Sept. 2016 - Jun. 2017)</button><br>
<input type="hidden" name="studentSession[]" class="hidden-session" required>
</li>
<li>
	<label>Pick your class location*<br></label>
	<div class="row">
		<button class="button-location relative" value="Silly Good Kids">
			<div class="overlay-color"></div>
				<?php echo '<img src="'.get_bloginfo("stylesheet_directory").'/images/locations-button/silly_goose_kids_registration.jpg">'."<br>";
				?>
		</button>
		<button class="button-location relative" value="Emmanuel Howard Park">
			<div class="overlay-color"></div>
					<?php echo '<img src="'.get_bloginfo("stylesheet_directory").'/images/locations-button/emmanuel_howard_park_registration.jpg">'."<br>";
				?>	
		</button>
		<button class="button-location relative" value="Dalton School">
			<div class="overlay-color"></div>
				<?php echo '<img src="'.get_bloginfo("stylesheet_directory").'/images/locations-button/dalton_school_registration.jpg">'."<br>";
				?>
		</button>

		<button class="button-location relative" value="Artscape Youngplace">
			<div class="overlay-color"></div>
				<?php echo '<img src="'.get_bloginfo("stylesheet_directory").'/images/locations-button/artscape_ youngplace_registration.jpg">'."<br>";
				?>
		</button>
		<button class="button-location relative" value="Balafant Boutik">
			<div class="overlay-color"></div>
				<?php echo '<img src="'.get_bloginfo("stylesheet_directory").'/images/locations-button/balafant_boutik_registration.jpg">';
			?>
		</button>

	</div>
	<input type="hidden" name="studentLocation[]" class="hidden-location" required>
</li>