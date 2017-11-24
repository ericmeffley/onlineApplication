<?php

ob_start();
session_start();
include "db.php";


//INITIALIZE VARIABLES-----------------------------------------
$error = ""; $success = "";
$firstName = "";
$overEighteen = ""; $iAmLegal = ""; $felonyCommit = "";
$fullPartTime = ""; $shiftChoice = "";
$firstShift = ""; $secondShift = ""; $thirdShift = "";
$driversLicense = "";
$startMonth = ""; $startDay = ""; $startYear = "";
$pageOneValid = "";

if(isset($_SESSION['applicant_data']['prefix'])){
	$prefix = $_SESSION['applicant_data']['prefix'];
}
if(isset($_SESSION['applicant_data']['startMonth'])){
	$startMonth = $_SESSION['applicant_data']['startMonth'];
}
if(isset($_SESSION['applicant_data']['startDay'])){
	$startDay = $_SESSION['applicant_data']['startDay'];
}
if(isset($_SESSION['applicant_data']['startYear'])){
	$startYear = $_SESSION['applicant_data']['startYear'];
}

if(isset($_SESSION['applicant_data']['eighteenRadio'])){
	$overEighteen = $_SESSION['applicant_data']['eighteenRadio'];
}
if(isset($_SESSION['applicant_data']['legalRadio'])){
	$iAmLegal = $_SESSION['applicant_data']['legalRadio'];
}
if(isset($_SESSION['applicant_data']['felonyRadio'])){
	$felonyCommit = $_SESSION['applicant_data']['felonyRadio'];
}
if(isset($_SESSION['applicant_data']['timeRadio'])){
	$fullPartTime = $_SESSION['applicant_data']['timeRadio'];
}
if(isset($_SESSION['applicant_data']['shiftRadio'])){
	$shiftChoice = $_SESSION['applicant_data']['shiftRadio'];
}

if(isset($_SESSION['applicant_data']['appliedPositionRadio'])){
	$appliedPositionRadio = $_SESSION['applicant_data']['appliedPositionRadio'];
}

if(isset($_SESSION['applicant_data']['previouslyEmployedRadio'])){
	$previouslyEmployed = $_SESSION['applicant_data']['previouslyEmployedRadio'];
}
if(isset($_SESSION['applicant_data']['driversLicenseRadio'])){
	$driversLicense = $_SESSION['applicant_data']['driversLicenseRadio'];
}


//Required Information------------------------------------------
if(isset($_POST['submit'])){
	
	//SET SESSION VARIABLE---------------------------------------
	$_SESSION['applicant_data'] = $_POST;
	
	header("Location: pagetwo.php");

}

if(isset($_POST['submitTwo'])){
	
	//SET SESSION VARIABLE---------------------------------------
	$_SESSION['applicant_data'] = $_POST;
	
	header("Location: index.php");
	
}
  

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sample Online Job Application</title>

	<!-- SITE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Rokkitt:300,400,500" rel="stylesheet">

	<!-- STYLESHEETS -->
  <link rel="stylesheet" href="css/styles.css?v=1.02">
	
  </head>
    
    
  <body beforeunload="StoreSession()">
     
    <!-- Header -->
    <div class="header">
		<div class="header-img-wrapper">
			<a href="#"><img src="images/demo-logo.png"></a>
		</div>
    </div>
      
    <div class="container">
		
		<!-- DISPLAY ERROR DIV -->
		<div id="error"><?php  echo $pageOneValid; echo $success;?></div>
		
    <p class="page-title">Employment Application</p>
        
    <form method="post" id="form1" name="form1" autocomplete="on">
			
      <div class="row">
				<p><span class="required">*</span>Position You Are Applying For</p>
				<div>
					<textarea type="text" class="form-control" name="appliedPosition" id="appliedPosition" rows="5"><?php if(isset($_SESSION['applicant_data'])){echo $_SESSION['applicant_data']['appliedPosition'];} ?></textarea>  
				</div>
			</div><!-- /row -->

			<div class="row">
				<p><span class="required">*</span>I Prefer <i style="color:rgba(0,0,0,.6);">(Select either Full Time or Part Time, and also select one of the shift options)</i></p>
					
				<div class="form-row">
            <div class="form__group">
						  <input type="radio" class="form-input" name="timeRadio" value="Full" <?php if(isset($_SESSION['applicant_data']['timeRadio'])){ if($fullPartTime == "Full"){echo 'checked'; }} ?>><span class="radio-label">Full Time</span>
            </div>
            <div class="form__group">
              <input type="radio" class="form-input" name="timeRadio" value="Part" <?php if(isset($_SESSION['applicant_data']['timeRadio'])){ if($fullPartTime == "Part"){echo 'checked'; }} ?>><span class="radio-label">Part Time</span>
            </div>
				</div>
        <hr class="clear">
        
    <!-- FORM GROUP ROW -->

					<div class="form__group">
						<input type="radio" class="form-input"  name="shiftRadio" value="First" <?php if(isset($_SESSION['applicant_data']['shiftRadio'])){ if($shiftChoice == "First"){echo 'checked'; }} ?>>
						<span class="radio-label">1st Shift</span>
					</div>
					<div class="form__group">
						<input type="radio" class="form-input"  name="shiftRadio" value="Second" <?php if(isset($_SESSION['applicant_data']['shiftRadio'])){ if($shiftChoice == "Second"){echo 'checked'; }} ?>>
						<span class="radio-label">2nd Shift</span>
					</div>
					<div class="form__group">
						<input type="radio" class="form-input"  name="shiftRadio" value="Third" <?php if(isset($_SESSION['applicant_data']['shiftRadio'])){ if($shiftChoice == "Third"){echo 'checked'; }} ?>>
						<span class="radio-label">3rd Shift</span>
					</div>
			</div><!-- /row-->
		
      <div class="row">    
        <div>
          <p><span class="required">*</span>Date When You Can Start Work</p>
        </div>	
	
        <fieldset> 
          <select class="start-date" 
              name="startMonth" id="startMonth" />
          <option></option>
          <option <?php if(isset($_SESSION['applicant_data']['startMonth'])){ if($startMonth == "January"){echo 'selected'; }} ?>>January</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startMonth'])){ if($startMonth == "February"){echo 'selected'; }} ?>>February</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startMonth'])){ if($startMonth == "March"){echo 'selected'; }} ?>>March</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startMonth'])){ if($startMonth == "April"){echo 'selected'; }} ?>>April</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startMonth'])){ if($startMonth == "May"){echo 'selected'; }} ?>>May</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startMonth'])){ if($startMonth == "June"){echo 'selected'; }} ?>>June</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startMonth'])){ if($startMonth == "July"){echo 'selected'; }} ?>>July</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startMonth'])){ if($startMonth == "August"){echo 'selected'; }} ?>>August</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startMonth'])){ if($startMonth == "September"){echo 'selected'; }} ?>>September</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startMonth'])){ if($startMonth == "October"){echo 'selected'; }} ?>>October</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startMonth'])){ if($startMonth == "November"){echo 'selected'; }} ?>>November</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startMonth'])){ if($startMonth == "December"){echo 'selected'; }} ?>>December</option>       
          </select> / 

          <select class="start-date"
              name="startDay" id="startDay" /> 
          <option></option>
          <option <?php if(isset($_SESSION['applicant_data']['startDay'])){ if($startDay == "01"){echo 'selected'; }} ?>>01</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startDay'])){ if($startDay == "02"){echo 'selected'; }} ?>>02</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startDay'])){ if($startDay == "03"){echo 'selected'; }} ?>>03</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startDay'])){ if($startDay == "04"){echo 'selected'; }} ?>>04</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startDay'])){ if($startDay == "05"){echo 'selected'; }} ?>>05</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startDay'])){ if($startDay == "06"){echo 'selected'; }} ?>>06</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startDay'])){ if($startDay == "07"){echo 'selected'; }} ?>>07</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startDay'])){ if($startDay == "08"){echo 'selected'; }} ?>>08</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startDay'])){ if($startDay == "09"){echo 'selected'; }} ?>>09</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startDay'])){ if($startDay == "10"){echo 'selected'; }} ?>>10</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startDay'])){ if($startDay == "11"){echo 'selected'; }} ?>>11</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startDay'])){ if($startDay == "12"){echo 'selected'; }} ?>>12</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startDay'])){ if($startDay == "13"){echo 'selected'; }} ?>>13</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startDay'])){ if($startDay == "14"){echo 'selected'; }} ?>>14</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startDay'])){ if($startDay == "15"){echo 'selected'; }} ?>>15</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startDay'])){ if($startDay == "16"){echo 'selected'; }} ?>>16</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startDay'])){ if($startDay == "17"){echo 'selected'; }} ?>>17</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startDay'])){ if($startDay == "18"){echo 'selected'; }} ?>>18</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startDay'])){ if($startDay == "19"){echo 'selected'; }} ?>>19</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startDay'])){ if($startDay == "20"){echo 'selected'; }} ?>>20</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startDay'])){ if($startDay == "21"){echo 'selected'; }} ?>>21</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startDay'])){ if($startDay == "22"){echo 'selected'; }} ?>>22</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startDay'])){ if($startDay == "23"){echo 'selected'; }} ?>>23</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startDay'])){ if($startDay == "24"){echo 'selected'; }} ?>>24</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startDay'])){ if($startDay == "25"){echo 'selected'; }} ?>>25</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startDay'])){ if($startDay == "26"){echo 'selected'; }} ?>>26</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startDay'])){ if($startDay == "27"){echo 'selected'; }} ?>>27</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startDay'])){ if($startDay == "28"){echo 'selected'; }} ?>>28</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startDay'])){ if($startDay == "29"){echo 'selected'; }} ?>>29</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startDay'])){ if($startDay == "30"){echo 'selected'; }} ?>>30</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startDay'])){ if($startDay == "31"){echo 'selected'; }} ?>>31</option>       
          </select> / 

          <select class="start-date" id="startYear" 
            name="startYear" id="startYear"/>
          <option></option>
          <option <?php if(isset($_SESSION['applicant_data']['startYear'])){ if($startYear == "2017"){echo 'selected'; }} ?>>2017</option>       
          <option <?php if(isset($_SESSION['applicant_data']['startYear'])){ if($startYear == "2018"){echo 'selected'; }} ?>>2018</option>       
          </select> 
        </fieldset> 
				
        <div>
          <p><span class="required">*</span>Have You Ever Been Employed By ACME</p>
          <div class="form__group">
            <input type="radio" class="form-input" name="previouslyEmployedRadio" id="previouslyEmployedRadio" value="yes" <?php if(isset($_SESSION['applicant_data']['previouslyEmployedRadio'])){ if($previouslyEmployed == "yes"){echo 'checked="checked"'; }} ?>> <span class="radio-label">Yes</span>
          </div>
          <div class="form__group">
            <input type="radio" class="form-input" name="previouslyEmployedRadio" id="previouslyEmployedRadio" value="no" <?php if(isset($_SESSION['applicant_data']['previouslyEmployedRadio'])){ if($previouslyEmployed == "no"){echo 'checked="checked"'; }} ?>><span class="radio-label">No</span>
          </div>
        </div>
		  </div>
		
      <div class="row wrapper-address">
        <div>
          <label><span class="required">*</span>Prefix</label>
          <fieldset>
            <select class="start-date" id="prefix" name="prefix"/>
            <option></option>
            <option <?php if(isset($_SESSION['applicant_data']['prefix'])){ if($prefix == "Mrs"){echo 'selected'; }} ?>>Mrs</option> 
            <option <?php if(isset($_SESSION['applicant_data']['prefix'])){ if($prefix == "Mr"){echo 'selected'; }} ?>>Mr</option>
            <option <?php if(isset($_SESSION['applicant_data']['prefix'])){ if($prefix == "Ms"){echo 'selected'; }} ?>>Ms</option>
            </select> 
          </fieldset>
        </div>

        <div class="col-md-6">
          <label><span class="required">*</span>First Name</label>
          <input type="text" class="form-input" name="firstName" id="firstName" value="<?php if(isset($_SESSION['applicant_data'])){echo $_SESSION['applicant_data']['firstName'];} ?>">
        </div>

        <div class="col-md-6">						
          <label>Middle Name</label>
          <input type="text" class="form-input" name="middleName" id="middleName" value="<?php if(isset($_SESSION['applicant_data'])){echo $_SESSION['applicant_data']['middleName'];} ?>">
        </div>

        <div class="col-md-5">
          <label><span class="required">*</span>Last Name</label>
          <input type="text" class="form-input" name="lastName" id="lastName" value="<?php if(isset($_SESSION['applicant_data'])){echo $_SESSION['applicant_data']['lastName'];} ?>">
        </div>
        
        <div class="col-md-7">
          <label for="ssn" class="label-ssn"><span class="required">*</span>Last Four Digits Of Your SSN</label>
      
          <input type="password" class="form-input" name="ssn" id="ssn" maxlength="4" placeholder="0000" value="<?php if(isset($_SESSION['applicant_data'])){echo $_SESSION['applicant_data']['ssn'];} ?>">
        </div>

        <div class="col-md-12">
          <label class="clear"><span class="required">*</span>Street Address</label>
          <input type="text" class="form-input" name="streetAddress" id="streetAddress" value="<?php if(isset($_SESSION['applicant_data'])){echo $_SESSION['applicant_data']['streetAddress'];} ?>">
        </div>

        <div class="col-md-4">
          <label><span class="required">*</span>City</label>
          <input type="text" class="form-input" name="applicantCity" id="applicantCity" value="<?php if(isset($_SESSION['applicant_data'])){echo $_SESSION['applicant_data']['applicantCity'];} ?>">
        </div>

        <div class="col-md-4">
          <label><span class="required">*</span>State</label>
          <input type="text" class="form-input" name="applicantState" id="applicantState" value="<?php if(isset($_SESSION['applicant_data'])){echo $_SESSION['applicant_data']['applicantState'];} ?>">
        </div>

        <div class="col-md-4">
          <label><span class="required">*</span>Zip</label>
          <input type="text" class="form-input" name="applicantZip" id="applicantZip" maxlength="5" value="<?php if(isset($_SESSION['applicant_data'])){echo $_SESSION['applicant_data']['applicantZip'];} ?>">
        </div>		
      </div><!-- /row-->
		

		  <div class="row wrapper-email">
        <div class="col-md-6">
          <label>Email Address</label>
          <input type="email" class="form-input" name="applicantEmail" placeholder="email@example.com" value="<?php if(isset($_SESSION['applicant_data'])){echo $_SESSION['applicant_data']['applicantEmail'];} ?>">
        </div>
        <div class="col-md-6">
        <label><span class="required">*</span>Phone Number</label>
        <input type="text" class="form-input" name="applicantPhone" id="applicantPhone" placeholder="000-000-0000" maxlength="14" value="<?php if(isset($_SESSION['applicant_data'])){echo $_SESSION['applicant_data']['applicantPhone'];} ?>">
          </div>
      </div>

		
		<div class="row">
			<p><span class="required">*</span>Do You Have A Valid Drivers License And A Reliable Vehicle You Will Drive To Work?</p>
      <div class="form__group">
			  <input type="radio" name="driversLicenseRadio" id="driversLicenseRadio" class="form-input" value="yes"  <?php if(isset($_SESSION['applicant_data'])){ if($driversLicense == "yes"){echo 'checked="checked"'; }} ?>><span class="radio-label">Yes</span>
      </div>
      <div class="form__group">
			  <input type="radio" name="driversLicenseRadio" id="driversLicenseRadio" class="form-input" value="no"   <?php if(isset($_SESSION['applicant_data'])){ if($driversLicense == "no"){echo 'checked="checked"'; }} ?>><span class="radio-label">No</span>
      </div>            
    </div>            
    <div class="row">  
      <p><span class="required">*</span>Are You Older Than 18 Years Old?</p>
      <div class="form__group">
        <input type="radio" class="form-input" name="eighteenRadio" id="eighteenRadio" value="yes"
        <?php if(isset($_SESSION['applicant_data'])){ if($overEighteen == "yes"){echo 'checked="checked"'; }} ?>>
        <span class="radio-label">Yes</span>
      </div>
      <div class="form__group">
            <input type="radio" class="form-input" name="eighteenRadio" id="eighteenRadio" value="no"
              <?php if(isset($_SESSION['applicant_data'])){ if($overEighteen == "no"){echo 'checked="checked"'; }} ?>>
              <span class="radio-label">No</span>
      </div>
    </div>	 

    <div class="row">
      <p><span class="required">*</span>Are You Legally Permitted To Work In The United States?</p>
      <div class="form__group">
        <input type="radio" name="legalRadio" id="legalRadio" class="form-input" value="yes"
        <?php if(isset($_SESSION['applicant_data'])){ if($iAmLegal == "yes"){echo 'checked="checked"'; }} ?>>
        <span class="radio-label">Yes</span>
      </div>
      <div class="form__group">
        <input type="radio" name="legalRadio" id="legalRadio" class="form-input" value="no"
        <?php if(isset($_SESSION['applicant_data'])){ if($iAmLegal == "no"){echo 'checked="checked"'; }} ?>>
        <span class="radio-label">No</span>
      </div>
    </div>
		
	  <div class="row">
      <p><span class="required">*</span>Have You Ever Been Convicted Of A Felony Or Misdemeanor</p>
      <div class="form__group">
        <input type="radio" name="felonyRadio" class="form-input" id="felonyYes" value="yes" 
        <?php if(isset($_SESSION['applicant_data'])){ if($felonyCommit == "yes"){echo 'checked="checked"'; }} ?>>
        <span class="radio-label">Yes</span>
      </div>
      <div class="form__group">  
        <input type="radio" name="felonyRadio" class="form-input" id="felonyNo" value="no"
        <?php if(isset($_SESSION['applicant_data'])){ if($felonyCommit == "no"){echo 'checked="checked"'; }} ?>>
        <span class="radio-label">No</span>
      </div>

      <textarea type="text" class="form-control" name="felonyDescription" id="felonyDescription" rows="4" placeholder="If you answered yes, please explain here."><?php if(isset($_SESSION['applicant_data'])){ echo $_SESSION['applicant_data']['felonyDescription'];} ?></textarea>
      <p class="small-text">You Will Not Be Denied Employment Soley Because Of A Conviction Record Unless The Offense Is Related To The Job You Are Applying For.</p>
		</div>
                 
    <div class="row__transparent">
      <div class="col-sm-12 col-md-6">
        <button type="submit" id="clear-button" name="clear" class="btn btn-red" action="functions.php" onclick="location.reload()">Clear Form</button>
      </div>
      <div class="col-sm-12 col-md-6">
        <button class="btn btn-green" type='submit' name="submit" onClick="validateForm()">Go to Page 2/4</button>
      </div>
    </div>
			
    </form>
  
    </div>  
         
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	  <script src="js/phonenum-format.js"></script>

	<script type="text/javascript" src="js/sisyphus.min.js"></script>

	<script>
		$( function() {
			$( "form" ).sisyphus();
		} );
	</script>

	<script type="text/javascript">
	
		function validateForm(){
			
		$("form").submit(function(e){
            
			var error = "";
			var position = $("#appliedPosition").val();
			var fullPartTime = $("input:radio[name=timeRadio]").is(":checked");
			var selectedShift = $("input:radio[name=shiftRadio]").is(":checked");
			var startMonth = $("#startMonth").val();
			var startDay = $("#startDay").val();
			var startYear = $("#startYear").val();
			var prefix = $("#prefix").val();
			var first = $("#firstName").val();
			var middle = $("#middleName").val();
			var last = $("#lastName").val();
			var address = $("#streetAddress").val();
			var city = $("#applicantCity").val();
			var state = $("#applicantState").val();
			var zip = $("#applicantZip").val();
			var phone = $("#applicantPhone").val();
			var hasBeenEmployed = $("input:radio[name=previouslyEmployedRadio]").is(":checked");
			var ssn = $("#ssn").val();
			var driversLicense = $("input:radio[name=driversLicenseRadio]").is(":checked");
			var overEighteen = $("input:radio[name=eighteenRadio]").is(":checked");
			var legalWorker = $("input:radio[name=legalRadio]").is(":checked");
			var felonyConviction = $("input:radio[name=felonyRadio]").is(":checked");
			var felonyDescription = $("textarea[name=felonyDescription]").val();
			
			//If any information is entered validate...
			if(position || fullPartTime || selectedShift || startMonth || startDay || startYear || hasBeenEmployed || prefix || first || middle || last || address || city || state || zip || phone || ssn || driversLicense || overEighteen || legalWorker || felonyConviction){

				if($("#appliedPosition").val() == ""){

				error+= "Position you're applying for<br>";

				}

				if(!fullPartTime){

					error += "Full or Part Time<br>";
				}

				if(!selectedShift){

					error += "Shift choice<br>";
				}

				if($("#startMonth").val() == "" || $("#startDay").val() == "" || $("#startYear").val() == ""){

					error+= "Starting Date<br>";

				}

				if(!hasBeenEmployed){

					error += "Have you been employed by MACC before?<br>";
				}
				
				if($("#prefix").val() == ""){

					error+= "Name Prefix<br>";

				}

				if($("#firstName").val() == ""){

				error+= "First Name<br>";

				}

				if($("#lastName").val() == ""){

				error+= "Last Name<br>";

				}

				if($("#address").val() == ""){

				error+= "Address<br>";

				}

				if($("#applicantCity").val() == ""){

				error+= "City<br>";

				}

				if($("#applicantState").val() == ""){

				error+= "State<br>";

				}

				if($("#applicantZip").val() == ""){

				error+= "Zip Code<br>";

				}

				if($("#applicantPhone").val() == ""){

					error += "Phone Number<br>";

				} else {
					
					var phoneNumberPattern = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;
					
   					if(!phoneNumberPattern.test($("#applicantPhone").val())){
						
						error += "Phone number wrong format ###-###-####<br>";
					}
					
				}

				if($("#ssn").val() == ""){

					error += "Last 4-Digits of Social Security Number<br>";

				} else {

					if(ssn.length != "4"){
						error += "Social Security must be 4-Digits<br>";
					}
				}

				if(!driversLicense){

					error += "Drivers License<br>";

				}

				if(!overEighteen){

					error += "Eighteen+<br>";

				}

				if(!legalWorker){

					error += "Legal Permit<br>";

				}

				if(!felonyConviction){

					error += "Felony<br>";

				} 

				if(error != ""){

					$("#error").html('<div class="error" role="alert"><p><strong>ERROR: Application is missing required information.</strong><br><br>' + error + '</p></div>');
                    $('html, body').animate({ scrollTop: 0 }, 'fast');

					return false;

				} else {

					return true;

				}
			} else{
				
				return true;
				
			}
      
        })
		}

		function storeSession(){
			
			return true;
			
		}

	</script>
    
    
  </body>
</html>