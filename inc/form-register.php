<?php
  function register_form($step) {

    if ($step == 1) {
      // general info?>
      <h4 class="registration-intro">
        Please select whether you would like to register for lessons in home or in one of our group locations
      </h4>
      <div class="registration-buttons row center">
        <div class="large-4 columns">
          <form action="#" method="post">
            <input type="submit" value="In Home" name="home">
            <input type="hidden" name="step" value=2>
          </form>
        </div>
        <div class="large-4 columns"></div>
        <form action="#" method="post">
          <input type="submit" value="As a group" name="group">
          <input type="hidden" name="step" value="3">
        </form>
      </div>
      <?php
    }elseif($step == 2 ) {
       ?>
      <div class="register-body">
        <h1 class="blue-text">Enter your information</h1>
        <form class="in-home" action="#" method="post">
          <ol class="register-form child-1">
            <?php include "home-clone-form.php"  ?>
            <li>
              <label>Parent/Guardian Name*<br></label>
              <input type="text" name="parent-guardian-name[]" id="home-parent-guardian-name" placeholder="Parent/Guardian Name" required/>  
            </li>
            <li>
              <label>Parent/Guardian Phone Number*<br></label>
              <input type="text" name="parent-guardian-phone[]" id="home-parent-guardian-phone" placeholder="###-###-####" required/>
            </li>
            <li>
              <label>Parent/Guardian Email Address*<br></label>
              <input type="text" name="parent-guardian-email[]" id="home-parent-guardian-email" placeholder="Enter Email Address" required/>
             </li>
          </ol>
           <!-- <button id="submit-child"> Submit </button>
          -->
          
            <div class="children-added"> </div>
            <input type="hidden" name="form-data" class="form-data">
            <input type="hidden" name="step" value="4"/>
            <input type="submit" class="final-submit" name="in-home-submit" value="Submit"/>
        </form>
      </div>
        <div class="child-clone none">
          <ol>
            <?php include "home-clone-form.php" ?>
          </ol>
        </div>
        <div class="add-child"> Add Child</div>
        <!-- clone clone-form on click -->
      <?php
    }elseif($step == 3 ) {
      // child info at home form ?>
      <div class="register-body">
        <h1 class="blue-text">Enter your information</h1>
        <form class="in-group" action="#" method="post">
          <ol class="register-form child-1">
            <?php include "group-clone-form.php"  ?>
            <li>
              <label>Parent/Guardian Name*<br></label>
              <input type="text" name="parent-guardian-name[]" id="group-parent-guardian-name" placeholder="Parent/Guardian Name"/>  
            </li>
            <li>
              <label>Parent/Guardian Phone Number*<br></label>
              <input type="text" name="parent-guardian-phone[]" id="group-parent-guardian-phone" placeholder="###-###-####">
            </li>
            <li>
              <label>Parent/Guardian Email Address*<br></label>
              <input type="text" name="parent-guardian-email[]" id="group-parent-guardian-email" placeholder="Enter Email Address">
             </li>
          </ol>
           <!-- <button id="submit-child"> Submit </button>
          -->
          
            <div class="children-added"> </div>
            <input type="hidden" name="form-data" class="form-data">
            <input type="hidden" name="step" value="4"/>
            <input type="submit" class="final-submit" name="in-group-submit" value="Submit"/>
        </form>
      </div>
        <div class="child-clone none">
          <ol>
            <?php include "group-clone-form.php" ?>
          </ol>
        </div>
        <div class="add-child"> Add Child</div>
        <!-- clone clone-form on click -->
      <?php
    }
    if ($step==4){
     
      if($_POST["in-home-submit"]){
        $length = sizeof($_POST['fname']);
        for($q = 0; $q<$length; $q++){
          echo '<div class="home-student row">';
          echo '<div class="large-4 columns">';
          echo 'Child Name: '.$_POST['fname'][$q].'<br>';
          echo 'Class Location: '.$_POST['teachAddress'][$q].'<br>';
          echo 'Student Age: '.$_POST['studentAge'][$q].'<br>';
          echo '</div>';
          echo '<div class="large-4 columns">';
          echo 'Language of Study: '.$_POST['studentLanguage'][$q].'<br>';
          echo 'Prefered Day of Study: '.$_POST['dayChoice'][$q].'<br>';
          echo 'Preferred Time of Study: '.$_POST['timeChoice'][$q].'<br>';
          echo '</div>';
          echo '</div>';
        }
      echo 'Parent/Guardian Name: '.($_POST['parent-guardian-name'][0]).'<br>';
      echo 'Parent/Guardian Phone Number : '.($_POST['parent-guardian-phone'][0]).'<br>';
      echo 'Parent/Guardian Email : '.($_POST['parent-guardian-email'][0]).'<br>';
      }
      if($_POST["in-group-submit"]){
         $length = sizeof($_POST['fname']);
         for($z= 0; $z<$length; $z++){
          echo '<div class="home-student row">';
          echo '<div class="large-4 columns">';
          echo 'Child Name: '.$_POST['fname'][$z].'<br>';
          echo 'Student Age: '.$_POST['studentAge'][$z].'<br>';
          echo 'Language of Study: '.$_POST['studentLanguage'][$z].'<br>';
         
          echo '</div>';
          echo '<div class="large-4 columns">';
          echo 'Program Session: '.$_POST['studentSession'][$z].'<br>';
          echo 'Program Location: '.$_POST['studentLocation'][$z].'<br>';
          echo '</div>';
          echo '</div>';
         }
      echo 'Parent/Guardian Name: '.($_POST['parent-guardian-name'][0]).'<br>';
      echo 'Parent/Guardian Phone Number : '.($_POST['parent-guardian-phone'][0]).'<br>';
      echo 'Parent/Guardian Email : '.($_POST['parent-guardian-email'][0]).'<br>';
      }
      ?>
      <form action="#" method="POST">
      <input type="hidden" name="step" value="5">
        <script
          src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="pk_test_33ej3RxKgrmWtSkpKl0Y0Qmf"
          data-amount="1"
          data-name="Demo Site"
          data-description="Widget"
          data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
          data-locale="auto"
          data-currency="cad">
        </script>
      </form>
      <?php 

    } ?>
    <?php
     if($step==5) {
      
    }

  }
?>
