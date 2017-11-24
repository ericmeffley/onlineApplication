<?php
	ob_start();
    include 'db.php';
    session_start();

    $workHistory = array();
    

//VARIABLES
    $id = "";
    $error = "";
    $success = "";
    $firstName = "";
    $lastName  = "";


if(isset($_POST['submit'])){
	
//SESSION VARIABLE
    $_SESSION['work_history'] = $_POST;


 header("Location: pagethree.php");  
}//<<$_POST>
 


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
      
	  <!-- ERROR DISPLAY -->
	  <div id="error"><?php  echo $error; echo $success;?></div>
	  
    <p class="page-title">Work History</p>
    <p class="page-sub-title">(most recent first)</p>
      
    <div class="container">
      <form method="post">    
      
        <div class="row">
        <h2 class="blue">1</h2>
        <hr><br>
            <div class="col-md-4">
              <label>Start Date<span class="small-text"> (most recent)</span></label>
              <input type="text" name="startDate1" id="startDate1" class="form-input" placeholder="mm/yyyy" value="<?php if(isset($_SESSION['work_history'])){echo $_SESSION['work_history']['startDate1'];} ?>"></input>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4">
              <label>Stop Date</label>
              <input type="text" name="stopDate1" id="stopDate1" class="form-input" placeholder="mm/yyyy" value="<?php if(isset($_SESSION['work_history'])){echo $_SESSION['work_history']['stopDate1'];} ?>"></input>
            </div>
            <div class="col-md-3"></div>

          <div>  
            <div class="clear">
              <label>Employer Name, City, & State</label>
              <textarea rows="4" name="empAddress1" id="empAddress1" placeholder="" value=""><?php if(isset($_SESSION['work_history'])){echo $_SESSION['work_history']['empAddress1'];} ?></textarea>
            </div>
          </div>	

          <div>  
            <div>
              <label>Job Responsibilities</label>
              <textarea rows="3" name="jobResposible1" id="jobResposible1" placeholder="" value=""><?php if(isset($_SESSION['work_history'])){echo $_SESSION['work_history']['jobResposible1'];} ?></textarea>
            </div>
          </div>
          <div>  
            <div>
              <label>Wage</label>
              <textarea rows="3" name="wage1" id="wage1" placeholder="" value=""><?php if(isset($_SESSION['work_history'])){echo $_SESSION['work_history']['wage1'];} ?></textarea>
            </div>
          </div>
            <div>  
            <div>
              <label>Reason for Leaving</label>
              <textarea rows="3" name="reasonLeaving1" id="reasonLeaving1" placeholder="" value=""><?php if(isset($_SESSION['work_history'])){echo $_SESSION['work_history']['reasonLeaving1'];} ?></textarea>
            </div>
          </div>
        </div>
        	
        <div class="row">
        <h2 class="blue">2</h2>
        <hr><br>
          <div>
            <div class="col-md-4">
              <label>Start Date</label>
              <input type="text" name="startDate2" id="startDate2" class="form-input" placeholder="mm/yyyy" value="<?php if(isset($_SESSION['work_history'])){echo $_SESSION['work_history']['startDate2'];} ?>"></input>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4">
              <label>Stop Date</label>
              <input type="text" name="stopDate2" id="stopDate2" class="form-input" placeholder="mm/yyyy" value="<?php if(isset($_SESSION['work_history'])){echo $_SESSION['work_history']['stopDate2'];} ?>"></input>
            </div>
            
          </div>
          <div>  
            <div class="clear">
              <label>Employer Name, City, & State</label>
              <textarea class="form-control" rows="4" name="empAddress2" id="empAddress1" placeholder="" value=""><?php if(isset($_SESSION['work_history'])){echo $_SESSION['work_history']['empAddress2'];} ?></textarea>
            </div>
          </div>	

          <div>  
            <div>
              <label>Job Responsibilities</label>
              <textarea class="form-control" rows="3" name="jobResposible2" id="jobResposible2" placeholder="" value=""><?php if(isset($_SESSION['work_history'])){echo $_SESSION['work_history']['jobResposible2'];} ?></textarea>
            </div>
          </div>
          <div>  
            <div>
              <label>Wage</label>
              <textarea class="form-control" rows="3" name="wage2" id="wage2" placeholder="" value=""><?php if(isset($_SESSION['work_history'])){echo $_SESSION['work_history']['wage2'];} ?></textarea>
            </div>
          </div>
            <div>  
            <div>
              <label>Reason for Leaving</label>
              <textarea class="form-control" rows="3" name="reasonLeaving2" id="reasonLeaving2" placeholder="" value=""><?php if(isset($_SESSION['work_history'])){echo $_SESSION['work_history']['reasonLeaving2'];} ?></textarea>
            </div>
          </div>
        </div><!-- /row -->

        <div class="row">
        <h2 class="blue">3</h2>
        <hr><br>
          <div>
            <div class="col-md-4">
              <label>Start Date</label>
              <input type="text" name="startDate3" id="startDate3" class="form-input" placeholder="mm/yyyy" value="<?php if(isset($_SESSION['work_history'])){echo $_SESSION['work_history']['startDate3'];} ?>"></input>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4">
              <label>Stop Date</label>
              <input type="text" name="stopDate3" id="stopDate3" class="form-input" placeholder="mm/yyyy" value="<?php if(isset($_SESSION['work_history'])){echo $_SESSION['work_history']['stopDate3'];} ?>"></input>
            </div>
          </div>
          <div>  
            <div class="clear">
              <label>Employer Name, City, & State</label>
              <textarea class="form-control" rows="4" name="empAddress3" id="empAddress3" placeholder="" ><?php if(isset($_SESSION['work_history'])){echo $_SESSION['work_history']['empAddress3'];} ?></textarea>
            </div>
          </div>	

          <div>  
            <div>
              <label>Job Responsibilities</label>
              <textarea class="form-control" rows="3" name="jobResposible3" id="jobResposible3" placeholder="" ><?php if(isset($_SESSION['work_history'])){echo $_SESSION['work_history']['jobResposible3'];} ?></textarea>
            </div>
          </div>
          <div>  
            <div>
              <label>Wage</label>
              <textarea class="form-control" rows="3" name="wage3" id="wage3" placeholder="" ><?php if(isset($_SESSION['work_history'])){echo $_SESSION['work_history']['wage3'];} ?></textarea>
            </div>
          </div>
            <div>  
            <div>
              <label>Reason for Leaving</label>
              <textarea class="form-control" rows="3" name="reasonLeaving3" id="reasonLeaving3" placeholder="" ><?php if(isset($_SESSION['work_history'])){echo $_SESSION['work_history']['reasonLeaving3'];} ?></textarea>
            </div>
          </div>
        </div><!-- /row -->

      <div class="row-transparent">
        <div class="col-md-6">
          <a class="btn btn-red" href="index.php">Back To Page 1/4</a>
        </div>
        
        <div class="col-md-6">
          <button class="btn btn-green" type='submit' name="submit" id="submit">Go To Page 3/4</button>
        </div>	
      </div>
        </form>    
    </div><!-- /container  -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>



  
   <script type="text/javascript">
    
	       
     $("form").submit(function(e){

		var error="";
		var datePattern = /(0[1-9]|10|11|12)\/[12][90][1234567890][1234567890]/; 

        if($("#startDate1").val() != ""){

			if(!datePattern.test($("#startDate1").val())){
				
				error += "Please enter a valid start date(1) format mm/yyyy<br>";
			}

		}

		if($("#stopDate1").val() != ""){

			if(!datePattern.test($("#stopDate1").val())){
				
				error += "Please enter a valid stop date(1) format mm/yyyy<br>";
			}

		}

		if($("#startDate2").val() != ""){

			if(!datePattern.test($("#startDate2").val())){
				
				error += "Please enter a valid start date(2) format mm/yyyy<br>";
			}

		}

		if($("#stopDate2").val() != ""){

			if(!datePattern.test($("#stopDate2").val())){
				
				error += "Please enter a valid stop date(2) format mm/yyyy<br>";
			}

		}

		if($("#startDate3").val() != ""){

			if(!datePattern.test($("#startDate3").val())){
				
				error += "Please enter a valid start date(3) format mm/yyyy<br>";
			}

		}

		if($("#stopDate3").val() != ""){

			if(!datePattern.test($("#stopDate3").val())){
				
				error += "Please enter a valid stop date(3) format mm/yyyy<br>";
			}

		}

        if(error != ""){

            $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>Missing or Incorrect Information:</strong></p>' + error + '</div>');

            return false;

        } else {

            return true;
            
        }
      
        });
     
     
     
    
	</script>

  </body>
</html>