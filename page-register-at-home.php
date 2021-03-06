<?php
/**
 * Template Name: Register-at-home
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header();
?>
<div class="register-body">
	<h1 class="blue-text">Enter your information</h1>
		<ol class="register-form">
			<li>
				<form>
					<label>Student name</label> <br>
					<input type="text" name="fname" placeholder="Full Student Name">
				</form>
			</li>
			<li>
				<button class="blue-button age-button" type="button">A. L1: 1-3 years old</button>
				<button class="blue-button age-button" type="button">B. L2: 3-6 years old</button><br>
				<button class="blue-button age-button" type="button">C. L3: 6-9 years old</button>
				<button class="blue-button age-button" type="button">D. L4: 9-12 years old</button>
			</li>
			<li>
				Choose Program Language: <br>
				<div class="row">
					<div class="large-4 columns language-button relative">
						<div class="overlay-color"></div>
							<?php
							echo '<img src="'.get_bloginfo("stylesheet_directory").'/images/language-buttons/spanish_selected.jpg">'."<br>";
							?>
					</div>
					<div class="large-4 columns language-button relative">
						<div class="overlay-color"></div>
							<?php
							echo '<img src="'.get_bloginfo("stylesheet_directory").'/images/language-buttons/french_selected.jpg">'."<br>";
							?>
					</div>
					<div class="large-4 columns language-button relative">
						<div class="overlay-color"></div>
							<?php
							echo '<img src="'.get_bloginfo("stylesheet_directory").'/images/language-buttons/mandarin_selected.jpg">'."<br>";
							?>
							
						</div>
					</div>
				<!--TODO implement JS logic that changes what window display when specific buttons are pressed -->
			</li>
			<li>
				Pick Your Class Type:<br>
				
			<input type="button" value="At Home" name="atHome" onclick="chooseHome()">
			<input type="button" value="As a Group" name="atGroup" onclick="chooseGroup()">		
				<!--TODO custom buttons go here -->
			</li>
		
			<!-- TODO if they pick a class to have at home, these options should show up -->
			<li><!-- TODO set this point to display none by default -->
				<form>
					Where would you like to host your classes?<br>
					<input class="class-location" type="text" name="class-hosting-location" placeholder="Address, City, Postal Code">
				</form>
			</li>
			<li>
				<form>
				What day(s) would you prefer your classes to take place? (Select Preferences)<br>
				<div class="row">
					<div class="large-3 columns">
						<input type="checkbox"  value="Monday"> Monday<br>
						<input type="checkbox"  value="Tuesday"> Tuesday<br>
						<input type="checkbox" value="Wednesday"> Wednesday<br>
						<input type="checkbox"  value="Thursday"> Thursday<br>
					</div>
					<div class="large-3 columns">
						<input type="checkbox" value="Friday"> Friday<br>
						<input type="checkbox"  value="Saturday"> Saturday<br>
						<input type="checkbox"  value="Sunday"> Sunday<br>
					</div>
					<div class="columns"></div>
				</div>
				</form>
			</li>
			<li>
				<form>
					What time of day would you like your classes to take place?(Select Preferences)<br>
					<input type="checkbox" value="morning">Morning<br>
					<input type="checkbox" value ="afternoon">Afternoon<br>
					<input type="checkbox" value="evening">Evening<br>
				</form>
			</li>
			<!--these options show up if they want a class to happen publicly -->
			<li>
				<!-- the parent name, phone number, email address are all the same whether or not the student is school at
				home or in a public place -->
				<form>
					Parent/Guardian Name<br>
					<input type="text" name="parent-guardian-name" placeholder="Parent/Guardian Name"/>
				</form>
			</li>
			<li>
				<form>
					Parent/Guardian Phone Number<br>
					<input type="text" name="parent-guardian-phone" placeholder="###-###-####">
				</form>
			</li>
			<li>
				<form>
					Parent/Guardian Email Address<br>
					<input type="text" name="parent-guardian-email" placeholder="Enter Email Address">
				</form>
			</li>
			<li>
				<!--TODO  if another student is added, a different set of options will show up depending on whether yes or no is clicked -->
				Would you like to add another student?<br>
				<button class="blue-button add-student" type="button">A. Yes</button>
				<button class="blue-button" type="button">B. No </button>
			</li>
				<div class="additional-student">
				<li>
					<form>
						<label>Student name</label> <br>
						<input type="text" name="fname" placeholder="Full Student Name">
					</form>
				</li>
				<li>
					<button class="blue-button age-button" type="button">A. L1: 1-3 years old</button>
					<button class="blue-button age-button" type="button">B. L2: 3-6 years old</button><br>
					<button class="blue-button age-button" type="button">C. L3: 6-9 years old</button>
					<button class="blue-button age-button" type="button">D. L4: 9-12 years old</button>
				</li>
				<li>
					Choose Program Language: <br>
					<div class="row">
						<div class="large-4 columns language-button relative">
							<div class="overlay-color"></div>
								<?php
								echo '<img src="'.get_bloginfo("stylesheet_directory").'/images/language-buttons/spanish_selected.jpg">'."<br>";
								?>
						</div>
						<div class="large-4 columns language-button relative">
							<div class="overlay-color"></div>
								<?php
								echo '<img src="'.get_bloginfo("stylesheet_directory").'/images/language-buttons/french_selected.jpg">'."<br>";
								?>
						</div>
						<div class="large-4 columns language-button relative">
							<div class="overlay-color"></div>
								<?php
								echo '<img src="'.get_bloginfo("stylesheet_directory").'/images/language-buttons/mandarin_selected.jpg">'."<br>";
								?>
								
							</div>
						</div>
					<!--TODO implement JS logic that changes what window display when specific buttons are pressed -->
				</li>
				<li>
					Pick Your Class Type:<br>
				<input type="button" value="At Home">
				<input type="button" value="As a Group">			
					<!--TODO custom buttons go here -->
				</li>
				<li><!-- TODO set this point to display none by default -->
					<form>
						Where would you like to host your classes?<br>
							<input class="class-location" type="text" name="class-hosting-location" placeholder="Address, City, Postal Code">
					</form>
				</li>
				<li>
					<form>
					What day(s) would you prefer your classes to take place? (Select Preferences)<br>
					<div class="row">
						<div class="large-3 columns">
							<input type="checkbox"  value="Monday"> Monday<br>
							<input type="checkbox"  value="Tuesday"> Tuesday<br>
							<input type="checkbox" value="Wednesday"> Wednesday<br>
							<input type="checkbox"  value="Thursday"> Thursday<br>
						</div>
						<div class="large-3 columns">
							<input type="checkbox" value="Friday"> Friday<br>
							<input type="checkbox"  value="Saturday"> Saturday<br>
							<input type="checkbox"  value="Sunday"> Sunday<br>
						</div>
						<div class="columns"></div>
					</div>
					</form>
				</li>
				<li>
					<form>
						What time of day would you like your classes to take place?(Select Preferences)<br>
						<input type="checkbox" value="morning">Morning<br>
						<input type="checkbox" value ="afternoon">Afternoon<br>
						<input type="checkbox" value="evening">Evening<br>
					</form>
				</li>
			</div>
			<li>
				Terms and Conditions<br>
				<div class="tos border-sm padding-lrg">
					<div class="tos-title">Magic Languages Terms &amp; Conditions:</div>
					<div class="tos-body">
						Last Updated on 2016-09-09 <br>
						GENERAL POLICIES Please read the following and sign at the end to certify that you understand and agree with Magic-Languages policies.<br>
						REGISTRATION The registration is done on a first come first served basis for any session. We highly recommend early registration due to the limited number of spots available for eachsession. Each class consist of a maximum of 4 students for the first level (1-3 years old) and a maximum of 6 students for the second, third and fourth level (4 years and more). Magic-Languages charge a one-time registration &amp; evaluation fee of $35 upon registration. The fee is non-refundable.<br>
						PAYMENT Payment must be made by cheque, cash, credit card or Pay Pal. After we receive full payment you will receive a confirmation of registration and a receipt of payment. Magic-Languages charge a $40 administration fee for NSF cheques. Payment &amp; complete forms are due upon registration. Full tuition is due before the first day of class.<br>
						LATE PAYMENT Magic-Languages will charge a late fee of $25 for any payment not received before the indicated date on the invoice. If you wish to avoid the late fee, please complete the payment before the limit date or call us to make an arrangement.<br>
						MAKE-UP CLASSES In case of an absence, Magic-Languages allow one make-up class per session. All make-up classes must be completed during the current session &amp; will NOT carry over to the following session. A make-up schedule is available towards the end of each session.<br>
						CANCELLATION Magic-Languages reserve the right to cancel or postpone any session on its sole discretion. In this case, full refunds will be made for missed classes.<br>
						REFUND Tuition is fully refundable minus a $30 cancellation fee if cancelled before commencing classes. If you wish to withdraw your child from a session, you can either choose to be refunded for the remaining classes minus $50 administration fee or to carry the credit over to another session. In case of refund after beginning of the session, any discount applied on the initial price is void. <br>
						DURATION Classes are 45 minutes long for the first level (1-3 years old) and one hour long for the second, third and fourth level (4 years and more).<br>
						PARENT RESPONSIBILITY Mommy &amp; Me classes are for ages 1 year – 3 years. A parent or caregiver must attend class and is responsible for the wellbeing of the child. <br>
						IMAGE USE AUTHORIZATION Caregivers and parents expressly agree that Magic-Languages may use photos taken of such persons or their children for archival, promotion and publicity purposes. As a Magic-Languages class participant, you will be added to our newsletter list so that we can keep you updated on MagicLanguages’ latest offerings, discounts and events. <br>
						FOODS &amp; DRINKS No food or drinks are permitted in the classroom while class is in session. If your child needs a bottle or snack please have it outside the class area. Magic-Languages is food-allergy aware &amp; committed to providing a safe environment for our students. Therefore, we request that you do not bring peanuts, nuts, or foods containing nut ingredients onto the premises.
					</div>
				</div>
			</li>
				
	
	<div class="print-tos absolute"><a class="print-tos-link"href="">Printable Version</a></div>
				
				<form class="tos-accept">
					<input type="checkbox" name="terms-agree">I have read and
					agree to the Magic Languages Terms and Conditions
					<!--TODO include link to access printable version pdf -->
				</form>
			</li>
			
		</ol>
		<form><!-- on the click of this button, I would be taken to a  different registration page -->
			<button class="blue-button txt-center checkout-button" type="button" id="checkout-button"> Check Out </button>
		</form>
<?php
get_footer();
?>

