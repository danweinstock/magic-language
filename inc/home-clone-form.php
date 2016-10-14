<li>
  <label>Student name*</label> <br>
  <input type="text" name="fname[]" placeholder="Full Student Name">
</li>
<li>
  <label>Select Student's Age*</label>
    <button class="blue-button age-button active-option" type="button" name="student_age" value="1-3">A. L1: 1-3 years old</button>
    <button class="blue-button age-button" type="button" name="student_age" value="3-6">B. L2: 3-6 years old</button><br>
    <button class="blue-button age-button" type="button" name="student_age" value="6-9">C. L3: 6-9 years old</button>
    <button class="blue-button age-button" type="button" name="student_age" value="9-12">D. L4: 9-12 years old</button>
    <input type="hidden" name="studentAge[]" class="age-hidden" />
</li>  
<li>
  <label>Choose Program Language:*</label>
  <div class="row">
   
      <button class="language-button relative" name="language" value="spanish">
          <div class="overlay-color"></div>
          <?php
            echo '<img src="'.get_bloginfo("stylesheet_directory").'/images/language-buttons/spanish_selected.jpg">'."<br>";
          ?>
      </button>
   
    
      <button class="language-button relative" name="language" value="french"> 
        <div class="overlay-color"></div>
        <?php
          echo '<img src="'.get_bloginfo("stylesheet_directory").'/images/language-buttons/french_selected.jpg">'."<br>";
        ?>
      </button> 
      <button class="language-button relative" name="language" value="mandarin">
        <div class="overlay-color"></div>
        <?php
          echo '<img src="'.get_bloginfo("stylesheet_directory").'/images/language-buttons/mandarin_selected.jpg">'."<br>";
        ?>
      </button> 
  </div>
  <input type="hidden" name="studentLanguage[]" class="hidden-language" >
</li>
<li>
  <label>Where would you like to host your class? *<br></label>
  <input type="text" name="teachAddress[]" id="address-field" class="class-location" placeholder="Address, City, Postal Code" required>
</li>
<li>
  <label>What day would you prefer your classes to take place? *<br></label>
  <input type="text" name="dayChoice[]" id ="day-field" class="day-field" placeholder="Please enter on what day of the week you would like to have class" required>
</li>
<li>
   <label>What time of day would you like your classes to take place? *<br></label>
   <input type="text" name="timeChoice[]" id="time-field" class="time-field" placeholder="Please enter a time when you would like class" required>
</li>