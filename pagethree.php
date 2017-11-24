<?php
ob_start();
include "db.php";
session_start();

$error = "";
$success = "";

if(isset($_POST['submit'])){
    
    //CREATE SESSION VARIABLE
    $_SESSION['education_history'] = $_POST;

    header("Location: pagefour.php");
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
    <link rel="stylesheet" href="css/styles.css?v=1.00">
    
  </head>  
  <body>
     

    <!-- Header -->
  <div class="header">
    <div class="header-img-wrapper">
    <a href="#"><img src="images/demo-logo.png"></a>
    </div>
  </div>
      
    <p class="page-title">Education & Training</p>

  <div id="error"><?php  echo $error; echo $success;?></div>	
      
    <div class="container">
        <form method="post">

          <!-- HIGH SCHOOL TRAINING -->

             
          <div class="row">
            <h2 class="blue">High School Or GED Equivalent</h2> 
            <hr><br>
            <div>
              <label>School Name</label>
                <input type="text" class="form-input" name="highSchoolName" placeholder="" value="<?php if(isset($_SESSION['education_history'])){ echo $_SESSION['education_history']['highSchoolName'];} ?>">
            </div>
            <div class="col-md-6">
              <label>School City</label>
              <input type="text" class="form-input" name="highSchoolCity" placeholder="" value="<?php if(isset($_SESSION['education_history'])){ echo $_SESSION['education_history']['highSchoolCity'];} ?>">
            </div>
            <div class="col-md-6">
              <label>School State</label>
              <input type="text" class="form-input" name="highSchoolState" placeholder="" value="<?php if(isset($_SESSION['education_history'])){ echo $_SESSION['education_history']['highSchoolState'];} ?>">
            </div>
            <div>
              <label>Number of Years Completed</label>
              <input type="text" class="form-input" name="hsYearsComplete" placeholder="" value="<?php if(isset($_SESSION['education_history'])){ echo $_SESSION['education_history']['hsYearsComplete'];} ?>">
            </div> 
            <div>
              <label>Year Of Graduation</label>
              <input type="text" class="form-input" name="hsYearGraduate" placeholder="" value="<?php if(isset($_SESSION['education_history'])){ echo $_SESSION['education_history']['hsYearGraduate'];} ?>">
            </div>
            <div>
              <label>Major Or Primary Course Of Study</label>
              <input type="text" class="form-input" name="hsCourseOfStudy" placeholder="" value="<?php if(isset($_SESSION['education_history'])){ echo $_SESSION['education_history']['hsCourseOfStudy'];} ?>">
            </div>
          </div><!-- /row  -->

          <!-- VOCATIONAL TRAINING --> 
          
          <div class="row">
          <h2 class="blue">Vocational Training</h2>
          <hr><br>
              <div>
                <label>School Name</label>
                <input type="text" class="form-input" name="vocationalSchoolName" placeholder="" value="<?php if(isset($_SESSION['education_history'])){ echo $_SESSION['education_history']['vocationalSchoolName'];} ?>">
              </div>

              <div class="col-md-6">
                <label>School City</label>
                <input type="text" class="form-input" name="vocationalSchoolCity"  placeholder="" value="<?php if(isset($_SESSION['education_history'])){ echo $_SESSION['education_history']['vocationalSchoolCity'];} ?>">
              </div>
              <div class="col-md-6">
                <label>School State</label>
                <input type="text" class="form-input" name="vocationalSchoolState" placeholder="" value="<?php if(isset($_SESSION['education_history'])){ echo $_SESSION['education_history']['vocationalSchoolState'];} ?>">
              </div>

              <div>
                  <label>Number Of Years Completed</label>
                  <input type="text" class="form-input" name="vsYearsComplete" placeholder="" value="<?php if(isset($_SESSION['education_history'])){ echo $_SESSION['education_history']['vsYearsComplete'];} ?>">
              </div> 
              <div>
                  <label>Year Of Graduation</label>
                  <input type="text" class="form-input" name="vsYearGraduate" placeholder="" value="<?php if(isset($_SESSION['education_history'])){ echo $_SESSION['education_history']['vsYearGraduate'];} ?>">
              </div>
              <div>
                <label>Major Or Primary Course Of Study</label>
                <input type="text" class="form-input" name="vsCourseOfStudy" placeholder="" value="<?php if(isset($_SESSION['education_history'])){ echo $_SESSION['education_history']['vsCourseOfStudy'];} ?>">
              </div>
          </div><!-- /row  -->
            
          <!-- COLLEGE --> 
          
          <div class="row">
          <h2 class="blue">College</h2>
          <hr><br>
            <div>
                <label for="">School Name</label>
                <input type="text" class="form-input" name="collegeName" placeholder="" value="<?php if(isset($_SESSION['education_history'])){ echo $_SESSION['education_history']['collegeName'];} ?>">
            </div>
            <div class="col-md-6">
                <label>School City</label>
                <input type="text" class="form-input" name="collegeCity"  placeholder="" value="<?php if(isset($_SESSION['education_history'])){ echo $_SESSION['education_history']['collegeCity'];} ?>">
            </div>

            <div class="col-md-6">
                <label>School State</label>
                <input type="text" class="form-input" name="collegeState" placeholder="" value="<?php if(isset($_SESSION['education_history'])){ echo $_SESSION['education_history']['collegeState'];} ?>">
            </div>
            <div>
                <label>Number Of Years Completed</label>
                <input type="text" class="form-input" name="colYearsComplete" placeholder="" value="<?php if(isset($_SESSION['education_history'])){ echo $_SESSION['education_history']['colYearsComplete'];} ?>">
            </div> 
            <div>
                <label>Year Of Graduation</label>
                <input type="text" class="form-input" name="colYearGraduate" placeholder="" value="<?php if(isset($_SESSION['education_history'])){ echo $_SESSION['education_history']['colYearGraduate'];} ?>">
            </div>
            <div>
              <label>Major Or Primary Course Of Study</label>
              <input type="text" class="form-input" name="collegeMajor" placeholder="" value="<?php if(isset($_SESSION['education_history'])){ echo $_SESSION['education_history']['collegeMajor'];} ?>">
            </div>
          </div><!-- </row> -->

          <!-- OTHER EDUCATION --> 
          
          <div class="row">
            <h2 class="blue">Other Education</h2>
            <hr><br>
            <div>
              <label>School Name</label>
              <input type="text" class="form-input" name="otherEdName" placeholder="" value="<?php if(isset($_SESSION['education_history'])){ echo $_SESSION['education_history']['otherEdName'];} ?>">
            </div>

            <div class="col-md-6">
              <label>School City</label>
              <input type="text" class="form-input" name="otherEdCity"  placeholder="" value="<?php if(isset($_SESSION['education_history'])){ echo $_SESSION['education_history']['otherEdCity'];} ?>">
            </div>

            <div class="col-md-6">
              <label>School State</label>
              <input type="text" class="form-input" name="otherEdState" placeholder="" value="<?php if(isset($_SESSION['education_history'])){ echo $_SESSION['education_history']['otherEdState'];} ?>">
            </div>

            <div class="col-md-6">
              <label>Number Of Years Completed</label>
              <input type="text" class="form-input" name="otherEdYearsComplete" placeholder="" value="<?php if(isset($_SESSION['education_history'])){ echo $_SESSION['education_history']['otherEdYearsComplete'];} ?>">
            </div>

            <div class="col-md-6">
              <label>Year Of Graduation</label>
              <input type="text" class="form-input" name="otherEdYearGraduate" placeholder="" value="<?php if(isset($_SESSION['education_history'])){ echo $_SESSION['education_history']['otherEdYearGraduate'];} ?>">
            </div>
    
            <div>
              <label>Major Or Primary Course Of Study</label>
              <input type="text" class="form-input" name="otherEdCourseOfStudy" placeholder="" value="<?php if(isset($_SESSION['education_history'])){ echo $_SESSION['education_history']['otherEdCourseOfStudy'];} ?>">
            </div>
          </div>

      
            <div class="row">
              <p class="blue five-hundred">Other Special Skills, Training, Certifications, Degrees, Licenses</p>
              <div>
                <textarea rows="3" name="specialDescription" placeholder="Describe your special skills here."><?php if(isset($_SESSION['education_history'])){ echo $_SESSION['education_history']['specialDescription'];} ?></textarea>
              </div>  
            </div>
            
      <div class="row__transparent">
        <div class="col-md-6">
          <a class="btn btn-red" onclick="location.href='pagetwo.php';" style="width: 100%;"><i class="glyphicon glyphicon-arrow-left"></i>&nbsp;Back To Page 2/4</a>
        </div>	
        
        <div class="col-md-6">
          <button class="btn btn-green" type="submit" name="submit" style="width: 100%;">Go To Page 4/4&nbsp;<i class="glyphicon glyphicon-arrow-right"></i></button>
        </div>
      </div>	
            
        </form>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>