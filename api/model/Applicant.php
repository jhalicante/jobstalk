<?php

    class Applicant
    {

        public function addPersonalInformation($post, $files)
        {
            global $conn;
            
            $path = $files['profile-picture']['name'];
            $ext = pathinfo($path, PATHINFO_EXTENSION);

            $filepath = GEN_UID.".".$ext;
            $uploaded_url = '../assets/uploaded/'.$filepath;
            $filetmp = $files['profile-picture']['tmp_name'];
            move_uploaded_file($filetmp, $uploaded_url);

            $sql = "SELECT * FROM `applicant_personal_information` WHERE `user_id`='".$_COOKIE['user_id']."' ";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // has a result 
                $sql = "UPDATE `applicant_personal_information` 
                        SET `fname` = '".$post['fname']."',
                            `mname` = '".$post['mname']."',
                            `lname` = '".$post['lname']."',
                            `bday` = '".$post['bday']."',
                            `gender` = '".$post['gender']."',
                            `nationality` = '".$post['nationality']."',
                            `civil_status` = '".$post['civil-status']."',
                            `language` = '".$post['language']."',
                            `profile_picture` = '".$filepath."'
                        WHERE `user_id`='".$_COOKIE['user_id']."' ";

                if ($conn->query($sql) === TRUE) 
                {
                    echo json_encode(array('errorCode'=>0, 'successMsg'=>'Successfully updated'));                    
                } 
                else 
                {
                    echo json_encode(array('errorCode'=>304, 'errorMsg'=>'Unable to update'));                    
                }
            } else {
                // no results
                $sql = "INSERT INTO `applicant_personal_information`(`ID`, `user_id`, `fname`, `mname`, `lname`, `bday`, `gender`, `nationality`, `civil_status`, `language`,`profile_picture`)
                        VALUES (null,
                            '".$_COOKIE['user_id']."',
                            '".$post['fname']."',
                            '".$post['mname']."',
                            '".$post['lname']."',
                            '".$post['bday']."',
                            '".$post['gender']."',
                            '".$post['nationality']."',
                            '".$post['civil-status']."',
                            '".$post['language']."',
                            '".$filepath."')";

                if ($conn->query($sql) === TRUE) 
                {
                    echo json_encode(array('errorCode'=>0, 'successMsg'=>'Successfully created'));
                }
                else 
                {
                    echo json_encode(array('errorCode'=>304, 'errorMsg'=>'Unable to create'));                    
                }
            }
        }
        /* Add Educational Background */ 
        public function addEducationalBackground($post)
        {
            global $conn; 

            $sql = "SELECT * FROM `applicant_education` WHERE `user_id`='".$_COOKIE['user_id']."' ";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // has a result 
                $sql = "UPDATE `applicant_education` 
                        SET `ter_sname`='".$post['ter_sname']."',
                            `ter_course`='".$post['ter_course']."',
                            `ter_ys`='".$post['ter_ys']."',
                            `ter_ye`='".$post['ter_ye']."',
                            `ter_ad`='".$post['ter_ad']."',
                            `sec_sname`='".$post['sec_sname']."',
                            `sec_ys`='".$post['sec_ys']."',
                            `sec_ye`='".$post['sec_ye']."',
                            `sec_ad`='".$post['sec_ad']."',
                            `pri_sname`='".$post['pri_sname']."',
                            `pri_ys`='".$post['pri_ys']."',
                            `pri_ye`='".$post['pri_ye']."',
                            `pri_ad`='".$post['pri_ad']."'
                        WHERE `user_id`='".$_COOKIE['user_id']."' ";

                        if ($conn->query($sql) === TRUE) 
                {
                    echo json_encode(array('errorCode'=>0, 'successMsg'=>'Successfully updated'));                    
                } 
                else 
                {
                    echo json_encode(array('errorCode'=>304, 'errorMsg'=>'Unable to update'));                    
                }
            } else {
                // no results
                $sql = "INSERT INTO `applicant_education`(`ID`, `user_id`, `ter_sname`, `ter_course`, `ter_ys`, `ter_ye`, `ter_ad`, `sec_sname`, `sec_ys`, `sec_ye`, `sec_ad`, `pri_sname`, `pri_ys`, `pri_ye`, `pri_ad`) 
                        VALUES (null,
                            '".$_COOKIE['user_id']."',
                            '".$post['ter_sname']."',
                            '".$post['ter_course']."',
                            '".$post['ter_ys']."',
                            '".$post['ter_ye']."',
                            '".$post['ter_ad']."',
                            '".$post['sec_sname']."',
                            '".$post['sec_ys']."',
                            '".$post['sec_ye']."',
                            '".$post['sec_ad']."',
                            '".$post['pri_sname']."',
                            '".$post['pri_ys']."',
                            '".$post['pri_ye']."',
                            '".$post['pri_ad']."')";

                if ($conn->query($sql) === TRUE) 
                {
                    echo json_encode(array('errorCode'=>0, 'successMsg'=>'Successfully created'));
                }
                else 
                {
                    echo json_encode(array('errorCode'=>304, 'errorMsg'=>'Unable to create'));                    
                }
            }
        }
        /* Add Work Experience */         
        public function addWorkExperience($post, $files)
        {
            global $conn;

            $path = $files['company-logo-image']['name'];
            $ext = pathinfo($path, PATHINFO_EXTENSION);

            $filepath = GEN_UID.".".$ext;
            $uploaded_url = '../assets/uploaded/'.$filepath;
            $filetmp = $files['company-logo-image']['tmp_name'];
            move_uploaded_file($filetmp, $uploaded_url);

            $sql = "INSERT INTO `applicant_work_experience`(`ID`, `user_id`, `company_logo`, `company_name`, `position`, `job_start`, `job_end`, `description`, `location`) 
                    VALUES (null,
                        '".$_COOKIE['user_id']."',
                        '".$filepath."',
                        '".$post['com_name']."',
                        '".$post['com_position']."',
                        '".$post['com_js']."',
                        '".$post['com_je']."',
                        '".$post['com_desc']."',
                        '".$post['com_location']."');";

            // Check has aleady a 
            $sql1 = "SELECT * FROM `applicant_career_objective` WHERE `user_id`='".$_COOKIE['user_id']."' ";
            $result1 = $conn->query($sql1);
            if ($result1->num_rows <= 0) {
                $sql .= " INSERT INTO `applicant_career_objective`(`ID`, `user_id`, `objective_content`) 
                VALUES (null,
                    '".$_COOKIE['user_id']."',
                    '".$post['career-objective']."');";
            }

            if ($conn->multi_query($sql) === TRUE) {
                echo json_encode(array('errorCode'=>0, 'successMsg'=>'Successfully created'));
            } else {
                echo json_encode(array('errorCode'=>304, 'errorMsg'=>'Unable to create'));                    
            }

        }
        /* Edit Work Experience */         
        public function editWorkExperience($post, $files)
        {
            global $conn;

            $path = $files['company-logo-image']['name'];
            $ext = pathinfo($path, PATHINFO_EXTENSION);

            $filepath = GEN_UID.".".$ext;
            $uploaded_url = '../assets/uploaded/'.$filepath;
            $filetmp = $files['company-logo-image']['tmp_name'];
            move_uploaded_file($filetmp, $uploaded_url);

            $sql = "UPDATE `applicant_work_experience` 
                    SET `company_logo`=[value-3],
                        `company_name`=[value-4],
                        `position`=[value-5],
                        `job_start`=[value-6],
                        `job_end`=[value-7],
                        `description`=[value-8],
                        `location`=[value-9]
                    WHERE `user_id`='".$_COOKIE['user_id']."' ";

            if ($conn->query($sql) === TRUE) 
            {
                echo json_encode(array('errorCode'=>0, 'successMsg'=>'Successfully updated'));                    
            } 
            else 
            {
                echo json_encode(array('errorCode'=>304, 'errorMsg'=>'Unable to update'));                    
            }
        }
        /* Add Contact Details */ 
        public function addContactDetails($post)
        {
            global $conn; 
            global $validation;

            if( !$validation->validateEmail($post['email-address']) ) 
            {
                echo json_encode(array('errorCode'=>304,'errorMsg'=>'Invalid email address'));
                return false;
            }

            $sql = "SELECT * FROM `applicant_contact_information` WHERE `user_id`='".$_COOKIE['user_id']."' ";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // has a result 
                $sql = "UPDATE `applicant_contact_information` 
                        SET `email_address`='".$post['email-address']."',
                            `phone_no`='".$post['phone-no']."',
                            `municipality`='".$post['municipality']."',
                            `brgy`='".$post['brgy']."'
                        WHERE `user_id`='".$_COOKIE['user_id']."' ";

                if ($conn->query($sql) === TRUE) 
                {
                    echo json_encode(array('errorCode'=>0, 'successMsg'=>'Successfully updated'));                    
                } 
                else 
                {
                    echo json_encode(array('errorCode'=>304, 'errorMsg'=>'Unable to update'));                    
                }
            } else {
                // no results
                $sql = "INSERT INTO `applicant_contact_information`(`ID`, `user_id`, `email_address`, `phone_no`, `municipality`, `brgy`) 
                        VALUES (null,
                                '".$_COOKIE['user_id']."',
                                '".$post['email-address']."',
                                '".$post['phone-no']."',
                                '".$post['municipality']."',
                                '".$post['brgy']."')";

                if ($conn->query($sql) === TRUE) 
                {
                    echo json_encode(array('errorCode'=>0, 'successMsg'=>'Successfully created'));
                } 
                else  
                {
                    echo json_encode(array('errorCode'=>304, 'errorMsg'=>'Unable to create'));                    
                }
            }
        }
    }
?>