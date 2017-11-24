<?php
date_default_timezone_set('UTC');

$date = date_create();
$date = date_format($date, 'Y-m-d H:i:s');

$pageOneValid = ""; $pageTwoValid = ""; $pageThreeValid = ""; 
$error = ""; $success = "";
$id = ""; $firstName = ""; $lastName = ""; $previouslyEmployed = "";
$shiftPreference = ""; $fullPartTime = ""; $workPermit = ""; $overEighteen = ""; $felony = "";
$startMonth = ""; $startDay = ""; $startYear = "";
$jobResponsible1 = ""; $jobResponsible2 = ""; $jobResponible3 = "";
$empAddress1Replaced = ""; $jobResponsibleReplaced = ""; $wage1Replaced = "";
$specialDescription = ""; $buttonState = "";


if(isset($_POST['submit'])){

			if(isset($_POST['applicationAgreement'])){	
					//PAGE ONE VARIABLES
					$appliedPosition = $_SESSION['applicant_data']['appliedPosition'];	
					$prefix = $_SESSION['applicant_data']['prefix'];
					$firstName = $_SESSION['applicant_data']['firstName'];
					$middleName = $_SESSION['applicant_data']['middleName'];
					$lastName = $_SESSION['applicant_data']['lastName'];
					$address = $_SESSION['applicant_data']['streetAddress'];
					$city = $_SESSION['applicant_data']['applicantCity'];
					$state = $_SESSION['applicant_data']['applicantState'];
					$zip = $_SESSION['applicant_data']['applicantZip'];
					$startMonth = $_SESSION['applicant_data']['startMonth'];
					$startDay = $_SESSION['applicant_data']['startDay'];
					$startYear = $_SESSION['applicant_data']['startYear'];
					$startDate = $startMonth." ".$startDay.", ".$startYear;
					$phone = $_SESSION['applicant_data']['applicantPhone'];
					$email = $_SESSION['applicant_data']['applicantEmail'];
					$ssn = $_SESSION['applicant_data']['ssn'];

					if(isset($_SESSION['applicant_data']['timeRadio'])){
						$fullPartTime = $_SESSION['applicant_data']['timeRadio'];   
					}
				
					if(isset($_SESSION['applicant_data']['previouslyEmployedRadio'])){
						$previouslyEmployed = $_SESSION['applicant_data']['previouslyEmployedRadio'];   
					}
				
				
					if(isset($_SESSION['applicant_data']['shiftRadio'])){
						$shiftPreference = $_SESSION['applicant_data']['shiftRadio'];   
					}
					
					if(isset($_SESSION['applicant_data']['eighteenRadio'])){
						$overEighteen = $_SESSION['applicant_data']['eighteenRadio'];   
					}

					if(isset($_SESSION['applicant_data']['legalRadio'])){
						$workPermit = $_SESSION['applicant_data']['legalRadio'];
					}

					if(isset($_SESSION['applicant_data']['felonyRadio'])){
						$felony = $_SESSION['applicant_data']['felonyRadio'];
					}

					if(isset($_SESSION['applicant_data']['felonyDescription'])){
						$felonyDescription = $_SESSION['applicant_data']['felonyDescription'];
					}
					
					//-------------------------------------------------------------		
					//WORK HISTORY
					//-------------------------------------------------------------
				
					if(isset($_SESSION['work_history']['startDate1'])){
						$startDate1 = $_SESSION['work_history']['startDate1'];
					}	

					if(isset($_SESSION['work_history']['stopDate1'])){
						$stopDate1 = $_SESSION['work_history']['stopDate1'];

					}
					if(isset($_SESSION['work_history']['empAddress1'])){
						$empAddress1 = $_SESSION['work_history']['empAddress1'];
					}
					if(isset($_SESSION['work_history']['jobResposible1'])){
						$jobResposible1 = $_SESSION['work_history']['jobResposible1'];
					}
					if(isset($_SESSION['work_history']['wage1'])){
						$wage1 = $_SESSION['work_history']['wage1'];
					}
					if(isset($_SESSION['work_history']['reasonLeaving1'])){
						$reasonLeaving1 = $_SESSION['work_history']['reasonLeaving1'];
					}
				
					//TWO----------------------------------------------------------
				
					if(isset($_SESSION['work_history']['startDate2'])){
						$startDate2 = $_SESSION['work_history']['startDate2'];

					}
					if(isset($_SESSION['work_history']['stopDate2'])){
						$stopDate2 = $_SESSION['work_history']['stopDate2'];

					}
					if(isset($_SESSION['work_history']['empAddress2'])){
						$empAddress2 = $_SESSION['work_history']['empAddress2'];

					}
					if(isset($_SESSION['work_history']['jobResposible2'])){
						$jobResposible2 = $_SESSION['work_history']['jobResposible2'];
					}
					if(isset($_SESSION['work_history']['wage2'])){
						$wage2 = $_SESSION['work_history']['wage2'];
					}
					if(isset($_SESSION['work_history']['reasonLeaving2'])){
						$reasonLeaving2 = $_SESSION['work_history']['reasonLeaving2'];
					}
				
					//THREE---------------------------------------------------------

					if(isset($_SESSION['work_history']['startDate3'])){

						$startDate3 = $_SESSION['work_history']['startDate3'];
					}

					if(isset($_SESSION['work_history']['stopDate3'])){
						$stopDate3 = $_SESSION['work_history']['stopDate3'];

					}
					if(isset($_SESSION['work_history']['empAddress3'])){
						$empAddress3 = $_SESSION['work_history']['empAddress3'];

					}
					if(isset($_SESSION['work_history']['jobResposible3'])){
						$jobResposible3 = $_SESSION['work_history']['jobResposible3'];
					}
					if(isset($_SESSION['work_history']['wage3'])){
						$wage3 = $_SESSION['work_history']['wage3'];
					}
					if(isset($_SESSION['work_history']['reasonLeaving3'])){
						$reasonLeaving3 = $_SESSION['work_history']['reasonLeaving3'];
					}
				
					//-------------------------------------------------------------		
					//EDUCATION HISTORY
					//-------------------------------------------------------------
				
					if(isset($_SESSION['education_history']['highSchoolName'])){
						$highSchoolName = $_SESSION['education_history']['highSchoolName'];
					}	
					if(isset($_SESSION['education_history']['highSchoolCity'])){
						$highSchoolCity = $_SESSION['education_history']['highSchoolCity'];
					}
					if(isset($_SESSION['education_history']['highSchoolState'])){
						$highSchoolState = $_SESSION['education_history']['highSchoolState'];
					}
					if(isset($_SESSION['education_history']['hsYearsComplete'])){
						$hsYearsComplete = $_SESSION['education_history']['hsYearsComplete'];
					}
					if(isset($_SESSION['education_history']['hsYearGraduate'])){
						$hsYearGraduate = $_SESSION['education_history']['hsYearGraduate'];
					}
					if(isset($_SESSION['education_history']['hsCourseOfStudy'])){
						$hsCourseOfStudy = $_SESSION['education_history']['hsCourseOfStudy'];
					}
				
					//VOCATIONAL------------------------------------------------------
				
					if(isset($_SESSION['education_history']['vocationalSchoolName'])){
						$vocationalSchoolName = $_SESSION['education_history']['vocationalSchoolName'];
					}
					if(isset($_SESSION['education_history']['vocationalSchoolCity'])){
					$vocationalSchoolCity = $_SESSION['education_history']['vocationalSchoolCity'];
					}
					if(isset($_SESSION['education_history']['vocationalSchoolState'])){
						$vocationalSchoolState = $_SESSION['education_history']['vocationalSchoolState'];
					}
					if(isset($_SESSION['education_history']['vsYearsComplete'])){
						$vsYearsComplete = $_SESSION['education_history']['vsYearsComplete'];
					}
					if(isset($_SESSION['education_history']['vsYearGraduate'])){
						$vsYearGraduate = $_SESSION['education_history']['vsYearGraduate'];
					}
					if(isset($_SESSION['education_history']['vsCourseOfStudy'])){
						$vsCourseOfStudy = $_SESSION['education_history']['vsCourseOfStudy'];
					}
				
					//SET COLLEGE VARIABLES
					if(isset($_SESSION['education_history']['collegeName'])){
						$collegeName = $_SESSION['education_history']['collegeName'];
					}

					if(isset($_SESSION['education_history']['collegeCity'])){
						$collegeCity = $_SESSION['education_history']['collegeCity'];
					}

					if(isset($_SESSION['education_history']['collegeState'])){
						$collegeState = $_SESSION['education_history']['collegeState'];
					}

					if(isset($_SESSION['education_history']['colYearsComplete'])){
						$colYearsComplete = $_SESSION['education_history']['colYearsComplete'];
					}

					if(isset($_SESSION['education_history']['colYearGraduate'])){
						$colYearGraduate = $_SESSION['education_history']['colYearGraduate'];
					}

					if(isset($_SESSION['education_history']['collegeMajor'])){
						$collegeMajor = $_SESSION['education_history']['collegeMajor'];
					}
				
					//SET OTHER EDUCATION VARIABLES
					if(isset($_SESSION['education_history']['otherEdName'])){
						$otherName = $_SESSION['education_history']['otherEdName'];
					}

					if(isset($_SESSION['education_history']['otherEdCity'])){
						$otherCity = $_SESSION['education_history']['otherEdCity'];
					}

					if(isset($_SESSION['education_history']['otherEdState'])){
						$otherState = $_SESSION['education_history']['otherEdState'];
					}

					if(isset($_SESSION['education_history']['otherEdYearsComplete'])){
						$otherYearsComplete = $_SESSION['education_history']['otherEdYearsComplete'];
					}

					if(isset($_SESSION['education_history']['otherEdYearGraduate'])){
						$otherYearGraduate = $_SESSION['education_history']['otherEdYearGraduate'];
					}

					if(isset($_SESSION['education_history']['otherEdCourseOfStudy'])){
						$otherCourseOfStudy = $_SESSION['education_history']['otherEdCourseOfStudy'];
					}
					
					if($firstName && $lastName && $phone){

              if($query_stmt = mysqli_prepare($connection,"INSERT INTO applicants (applied_position,prefix,first_name,middle_name,last_name,applicant_address,applicant_city,applicant_state,applicant_zip,full_part_time,shift_pref,start_date,prev_employed,applicant_phone,applicant_email,applicant_ssn,eighteen_yrs,work_permit,felony_history,felony_desc) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)")){
                mysqli_stmt_bind_param($query_stmt,"ssssssssisssssssssss",$appliedPosition,$prefix,$firstName,$middleName,$lastName,$address,$city,$state,$zip,$fullPartTime,$shiftPreference,$startDate,$previouslyEmployed,$phone,$email,$ssn,$overEighteen,$workPermit,$felony,$felonyDescription);
                mysqli_stmt_execute($query_stmt);
                mysqli_stmt_close($query_stmt);
    
              }

              //SET APPLICANT VARIABLES
              if(isset($_SESSION['applicant_data']['first_name'])){
                $firstName = trim($_SESSION['applicant_data']['first_name']);
              }

              if(isset($_SESSION['applicant_data']['last_name'])){
                $lastName = trim($_SESSION['applicant_data']['last_name']);
              }
      
              //QUERY APPLICANT ID
              $id_query = "SELECT id FROM `applicants`  WHERE first_name = '$firstName' AND last_name = '$lastName'";
              
              if($result = mysqli_query($connection, $id_query)){
                $row = mysqli_fetch_array($result); 
                $_SESSION['id'] = $row['id'];
                $id = $_SESSION['id'];
              } else {
                  echo "query failed,";
                  mysqli_error($connection);
                }
                          
              //PAGE TWO DATA INSERT

                  //JOB DETAIL LINE ONE---------------------------------    
        
                  if($startDate1 || $stopDate1 || $empAddress1 || $jobResponsible1 || $wage1 || $reasonLeaving1){
                    if($wrk1_stmt = mysqli_prepare($connection,"INSERT INTO work_experience (id,start_date,stop_date,employer_address,job_responsibility,wage,reason_left) VALUES (?,?,?,?,?,?,?)")){
                      mysqli_stmt_bind_param($wrk1_stmt,"issssss",$id,$startDate1,$stopDate1,$empAddress1,$jobResposible1,$wage1,$reasonLeaving1);
                      mysqli_stmt_execute($wrk1_stmt);
                      mysqli_stmt_close($wrk1_stmt);
        
                    }
                  }
        
                  if($startDate2 || $stopDate2 || $empAddress2 || $jobResponsible2 || $wage2 || $reasonLeaving2){
                    if($wrk2_stmt = mysqli_prepare($connection,"INSERT INTO work_experience (id,start_date,stop_date,employer_address,job_responsibility,wage,reason_left) VALUES (?,?,?,?,?,?,?)")){
                      mysqli_stmt_bind_param($wrk2_stmt,"issssss",$id,$startDate2,$stopDate2,$empAddress2,$jobResposible2,$wage2,$reasonLeaving2);
                      mysqli_stmt_execute($wrk2_stmt);
                      mysqli_stmt_close($wrk2_stmt);
                    }						
                  }

                  if($startDate3 || $stopDate3 || $empAddress3 || $jobResponsible3 || $wage3 || $reasonLeaving3){
                    if($wrk3_stmt = mysqli_prepare($connection,"INSERT INTO work_experience (id,start_date,stop_date,employer_address,job_responsibility,wage,reason_left) VALUES (?,?,?,?,?,?,?)")){
                      mysqli_stmt_bind_param($wrk3_stmt,"issssss",$id,$startDate3,$stopDate3,$empAddress3,$jobResposible3,$wage3,$reasonLeaving3);
                      mysqli_stmt_execute($wrk3_stmt);					
                      mysqli_stmt_close($wrk3_stmt);
                    }
                  }

                  
              //THIRD PAGE DATA INSERT
                 
                  //SET SCHOOLING VARIABLES
                  $highSchool = "High";
                  $vocationalSchool = "Vocational"; 
                  $college = "College";
                  $other = "Other";
                  $special = "Special Skill";
							
                  //HIGH SCHOOL INSERT
                  if($highSchoolName || $highSchoolCity || $highSchoolState || $hsYearsComplete || $hsYearGraduate || $hsCourseOfStudy){
                    if ($hs_stmt = mysqli_prepare($connection, "INSERT INTO education (user_id,school_type,school_name,school_city,school_state,years_complete,year_graduated,course_of_study) VALUES (?,?,?,?,?,?,?,?)")){
                      mysqli_stmt_bind_param($hs_stmt,"isssssss",$id,$highSchool,$highSchoolName,$highSchoolCity,$highSchoolState,$hsYearsComplete,$hsYearGraduate,$hsCourseOfStudy);
                      mysqli_stmt_execute($hs_stmt);
                      mysqli_stmt_close($hs_stmt);
                    } 
                  }

								  //VOCATIONAL TRAINING INSERT
                  if($vocationalSchoolName || $vocationalSchoolCity || $vocationalSchoolState || $vsYearsComplete || $vsYearGraduate || $vsCourseOfStudy){	
                    if($vs_stmt = mysqli_prepare($connection,"INSERT INTO education (user_id,school_type,school_name,school_city,school_state,years_complete,year_graduated,course_of_study) VALUES (?,?,?,?,?,?,?,?)")){
                      mysqli_stmt_bind_param($vs_stmt,"isssssss",$id,$vocationalSchool,$vocationalSchoolName,$vocationalSchoolCity,$vocationalSchoolState,$vsYearsComplete,$vsYearGraduate,$vsCourseOfStudy);
                      mysqli_stmt_execute($vs_stmt);
                      mysqli_stmt_close($vs_stmt);
                    }
                  }

    					    //COLLEGE DATA INSERT------------------------------
                  if($collegeName || $collegeName || $collegeCity || $collegeState || $colYearsComplete || $colYearGraduate || $collegeMajor){
                        if($col_stmt = mysqli_prepare($connection,"INSERT INTO education (user_id,school_type,school_name,school_city,school_state,years_complete,year_graduated,course_of_study) VALUES (?,?,?,?,?,?,?,?)")){
                          mysqli_stmt_bind_param($col_stmt,"isssssss",$id,$college,$collegeName,$collegeCity,$collegeState,$colYearsComplete,$colYearGraduate,$collegeMajor);
                          mysqli_stmt_execute($col_stmt);
                          mysqli_stmt_close($col_stmt);
                        }
                  }

                  //OTHER TRAINING INSERT------------------------------
                  if($otherName || $otherName || $otherCity || $otherState || $otherYearsComplete || $otherYearGraduate || $otherCourseOfStudy){
                    if($other_stmt = mysqli_prepare($connection,"INSERT INTO education (user_id,school_type,school_name,school_city,school_state,years_complete,year_graduated,course_of_study) VALUES (?,?,?,?,?,?,?,?)")){
                      mysqli_stmt_bind_param($other_stmt,"isssssss",$id,$other,$otherName,$otherCity,$otherState,$otherYearsComplete,$otherYearGraduate,$otherCourseOfStudy);
                      mysqli_stmt_execute($other_stmt);
                      mysqli_stmt_close($other_stmt);
                    } 
                  }
                  
                  if(isset($_SESSION['education_history']['specialDescription'])){
                    $specialDescription = $_SESSION['education_history']['specialDescription'];
                    if($special_stmt = mysqli_prepare($connection, "INSERT INTO education (user_id,school_type,other_studies) VALUES (?,?,?)")){
                      mysqli_stmt_bind_param($special_stmt,"iss", $id,$special,$specialDescription);
                      mysqli_stmt_execute($special_stmt);
                      mysqli_stmt_close($special_stmt);
                    }
                  }

            //SET MAIL VARIABLES
            //$to = $userEmail;
            $to = "ericmeffley@live.com";
            $headers = "From: demo@ericmeffley.com (no-reply)\r\n";
            $headers .= "Cc: \r\n";
            $headers .= "Bcc: \r\n";
            $subject = "Online Application Demo Content";
    
            $content = "Thank you for taking the time to test the Demo Application on ericmeffley.com \n\nName: ".$prefix." ".$firstName." ".$lastName."\nAddress: ".$address." ".$city." ".$state." ".$zip."\nPhone: ".$phone."\nEmail: ".$email."\nStart Date: ".$startDate."\nShift Preference: ".$shiftPreference."\n\nEMPLOYMENT HISTORY\n1. ".$startDate1." - ".$stopDate1." - ".$empAddress1." - ".$jobResposible1." - ".$wage1." - ".$reasonLeaving1."\n2. ".$id." - ".$startDate2." - ".$stopDate2." - ".$empAddress2." - ".$jobResposible2." - ".$wage2." - ".$reasonLeaving2."\n\nHIGH SCHOOL\n".$id." - ".$highSchool." - ".$highSchoolName." - ".$highSchoolCity." - ".$highSchoolState." - ".$hsYearsComplete." - ".$hsYearGraduate." - ".$hsCourseOfStudy."\n\nVOCATIONAL SCHOOL\n".$vocationalSchool." - ".$vocationalSchoolName." - ".$vocationalSchoolCity." - ".$vocationalSchoolState." - ".$vsYearsComplete." - ".$vsYearGraduate." - ".$vsCourseOfStudy."\n\nCOLLEGE\n".$college." - ".$collegeName." - ".$collegeCity." - ".$collegeState." - ".$colYearsComplete." - ".$colYearGraduate." - ".$collegeMajor."\n\nSPECIAL SKILLS\n".$specialDescription;
          
            //SEND MAIL        
            mail($to, $subject, $content, $headers);	

            //DISABLE SEND BUTTON TO STOP MULTIPLE SUBMITIONS
            $buttonState = "disabled";
            //SUCCESS MESSAGE	
            $success = '<div class="success" role="alert"><p>Application sent successfully Thank you!</p></div>';
            //CLEAR SESSION VARIABLES
						session_unset();

						} else{
							$error = '<div class="error" role="alert"><p>Page One is a required page. Please fill out <a href="index.php"><b>page one</b></a> and return to page 4 to send your application.</p></div>';
						}
				
			} else{
				
				$error = '<div class="error" role="alert"><p>Please Check The Box To Agree To The Application Terms</p></div>';
			}

		//}

}

if(isset($_POST['clear'])){
		session_unset();
		header("Location: pageone.php");
	}
?>