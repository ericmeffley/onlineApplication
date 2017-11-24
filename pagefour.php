<?php
session_start();
include "db.php";
include "functions.php";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Sample Online Job Application</title>

		<!-- JQuery -->
		<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="crossorigin="anonymous"></script>

        <!-- SITE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Rokkitt:300,400,500" rel="stylesheet">

        <!-- STYLESHEETS -->
        <link rel="stylesheet" href="css/styles.css?v=1.02">

<style>
    
</style>
    </head>
    
  <body>

    <!-- Header -->
    <div class="header">
      <div class="header-img-wrapper">
      <a href="#"><img src="images/demo-logo.png"></a>
      </div>
    </div>
      

    <p class="page-title">Acceptance of Conditions For Employment</p>

	 
	<div id="error"><?php  echo $error; echo $success; echo $pageOneValid; echo $pageTwoValid; echo $pageThreeValid;?></div>
    
    <div class="container">
        <div class="row">
            <ol>
                <li>I authorize investigation of all statements contained in this application for employment as may be necessary in arriving at an employment decision.</li>
                <br>
                <li>I understand that this company is an At Will employer, which means that employment is not for a fixed or defined time period, regardless of the time and manner of payment for wages or salary, or the administration of any other condition of employment. Both the employee and MACC have the right to terminate the employment relationship with or without cause, or notice, for any reason or no reason, as long as it is not an unlawful reason.</li>
                <br>
                <li>I understand that false or misleading information given in the application or interview(s) may result in discharge from employment.</li>
                <br>
                <li>I understand that I am required to abide by all rules and regulations of this company.</li>
                <br>
                <li>I understand and agree that I may be required to take one or more urinalysis substance abuse tests as a condition of continued employment. I agree to consent to take tests at such time as designated by said company and to release said company, its directors, officers, agents, and employees from any claim arising in connection with the lawful use of such tests. Results of tests will only be disclosed to this company's managers who are directly or indirectly responsible for managing the employment relationship, and to government authorities if compelled by writ.</li>
            </ol>
        </div>
        <form method="post">
                <div class="row__transparent"> 
                    <div style="float:left;width:50px;"><input type="checkbox" name="applicationAgreement" id="applicationAgreement" class="check-box" value="agreed"></div>
                    <div class="agreement-tagline"><span class="required"><b>*</span>CLICK THE CHECKBOX TO CERTIFY ACCEPTANCE OF REQUIREMENTS AND THAT ANSWERS ARE TRUE AND COMPLETE.</b></div>
                </div>
			<div class="v-space-25"></div>
            <!--Bootstrap Page Navigations --> 
            
			<div class="row__transparent">
				
                <div class="col-md-6">
                    <a class="btn btn-red" onclick="location.href='pagethree.php'" style="width: 100%"><i class="glyphicon glyphicon-arrow-left"></i>&nbsp;Back To Page 3</a>
                </div> 
				
                <div class="col-md-6">
                    <button name="submit" id="submit4" class="btn btn-green" onclick="disableButton()" style="width: 100%"<?php echo $buttonState ?>>Send Application</button>
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