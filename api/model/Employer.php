<?php
    class Employer
    {
        // Add Profile Information
        public function addProfileInformation($post, $files)
        {
            global $conn;
            
            $path = $files['logo']['name'];
            $ext = pathinfo($path, PATHINFO_EXTENSION);

            $filepath = GEN_UID.".".$ext;
            $uploaded_url = '../assets/uploaded/'.$filepath;
            $filetmp = $files['logo']['tmp_name'];
            move_uploaded_file($filetmp, $uploaded_url);

            $sql = "SELECT * FROM `employer_information` WHERE `user_id`='".$_COOKIE["user_id"]."' ";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // has a result 
                $sql = "UPDATE `employer_information` 
                        SET `name`='".$post["company-name"]."',
                            `short_desc`='".$post["short-description"]."',
                            `about`='".$post["about"]."',
                            `address`='".$post["address"]."',
                            `contact_no`='".$post["contact-no"]."',
                            `email`='".$post["email-address"]."',
                            `logo`='".$filepath."',
                            `website`='".$post["website"]."'
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
                $sql = "INSERT INTO `employer_information`(`ID`, `user_id`, `name`, `short_desc`, `about`, `address`, `contact_no`, `email`, `logo`, `website`) 
                        VALUES (null,
                            '".$_COOKIE['user_id']."',
                            '".$post['company-name']."',
                            '".$post['short-description']."',
                            '".$post['about']."',
                            '".$post['address']."',
                            '".$post['contact-no']."',
                            '".$post['email-address']."',
                            '".$filepath."',
                            '".$post['website']."')";

                if ($conn->query($sql) === TRUE) 
                {
                    echo json_encode(array('errorCode'=>0, 'successMsg'=>'Successfully created'));
                }
                else 
                {
                    echo json_encode(array('errorCode'=>304, 'errorMsg'=>'Unable to create'.$sql));                    
                }
            }
        }

        // Add Job
        public function addJob($post, $files)
        {
            global $conn;

            $path = $files['com-logo']['name'];
            $ext = pathinfo($path, PATHINFO_EXTENSION);

            $filepath = GEN_UID.".".$ext;
            $uploaded_url = '../assets/uploaded/'.$filepath;
            $filetmp = $files['com-logo']['tmp_name'];
            move_uploaded_file($filetmp, $uploaded_url);
            
            $sql = "INSERT INTO `employer_job_posted`(`ID`, `user_id`, `job_id`, `com_logo`,`com_name`, `com_address`, `position`, `job_type`, `course_id`, `industry_id`, `years_experience`, `months_experience`, `description`, `created_date`, `status`) 
                    VALUES (null,
                        '".$_COOKIE['user_id']."',
                        '".GEN_UID."',
                        '".$filepath."',
                        '".$post['company-name']."',
                        '".$post['address']."',
                        '".$post['position']."',
                        '".$post['job_type']."',
                        '".$post['required_course']."',
                        '".$post['job_industry']."',
                        '".$post['years_experience']."',
                        '".$post['months_experience']."',
                        '".$post['job_desc']."',
                        '".date('m/d/Y')."',
                        'pending')";

            if ($conn->query($sql) === TRUE) 
            {
                echo json_encode(array('errorCode'=>0, 'successMsg'=>'Successfully created'));
            }
            else 
            {
                echo json_encode(array('errorCode'=>304, 'errorMsg'=>'Unable to create ',$files));                    
            } 
        }

        public function getJobInformation($post)
        {
            global $conn; 

            $sql = "SELECT
                        employer_job_posted.`job_id`,
                        employer_job_posted.`com_logo`,
                        employer_job_posted.`com_name`,
                        employer_job_posted.`com_address`,
                        employer_job_posted.`position`,
                        employer_job_posted.`job_type`,
                        employer_job_posted.`course_id`,
                        employer_job_posted.`industry_id`,
                        employer_job_posted.`years_experience`,
                        employer_job_posted.`months_experience`,
                        employer_job_posted.`description`,
                        employer_job_posted.`status`, 
                        course_lists.`name` as course_name,
                        job_industry.`name` as job_industry
                    FROM
                        `employer_job_posted`
                    INNER JOIN course_lists ON course_lists.`course_id` = employer_job_posted.`course_id`
                    INNER JOIN job_industry ON job_industry.`ji_id` = employer_job_posted.`industry_id`
                    WHERE `job_id`='".$post["job_id"]."' ";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                echo json_encode(array('errorCode'=>0, 'successMsg'=>'Successfully fetched','response'=>$row));                
            } else { 
                echo json_encode(array('errorCode'=>304, 'errorMsg'=>'No Results found'));                                    
            }
        }

        public function getCandidatesApplied($post)
        {
            global $conn; 

            $sql = "SELECT
                        applied_job.*,
                        applicant_personal_information.*,
                        applicant_education.`ter_course`,
                        COUNT(applicant_work_experience.`ID`) AS years_count                    
                    FROM
                        `applied_job`
                    INNER JOIN applicant_work_experience ON applicant_work_experience.user_id = applied_job.applicant_id
                    INNER JOIN applicant_education ON applicant_education.user_id = applied_job.applicant_id
                    INNER JOIN applicant_personal_information ON applicant_personal_information.user_id = applied_job.applicant_id
                    WHERE applied_job.`job_id` = '".$post['job_id']."'
                    GROUP BY applied_job.`ID` 
                    ORDER BY applied_job.`ID` DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $data = array();
                while($row = $result->fetch_assoc()) {
                    
                

                    $sql1 = "SELECT * FROM `applicant_work_experience` WHERE `user_id`='".$row['applicant_id']."' ";
                    $result1 = $conn->query($sql1);

                    if ($result1->num_rows > 0) {
                        // output data of each row
                        while($row1 = $result1->fetch_assoc()) {

                            date_default_timezone_set('Asia/Manila');
                            $datetime1 = new DateTime($row1['job_start']);
                            $datetime2 = new DateTime($row1['job_end']);
                            $interval = $datetime1->diff($datetime2);
                            
                            $year = $interval->format('%y year %m months');
                            $months = $interval->format('%y year %m months');
                            $experience = array('year'=>$year,'months'=>$months/12);

                            array_push($row, $experience);
                        }
                    }
                    array_push($data, $row);
                }
                echo json_encode(array('errorCode'=>0, 'successMsg'=>'Successfully fetched','response'=>$data));                
            } else { 
                echo json_encode(array('errorCode'=>304, 'errorMsg'=>'No Results found'));                                    
            }
        }

        public function addPlacementReport($post)
        {
            global $conn; 
            
            $sql = "INSERT INTO `employer_placement_report`(`ID`, `user_id`, `job_title`, `company_name`, `date_conducted`, `venue`, `created_date`) 
                    VALUES (null,
                            '".$_COOKIE['user_id']."',
                            '".$post['job-title']."',
                            '".$post['company-name']."',
                            '".$post['date-conducted']."',
                            '".$post['venue']."',
                            '".date('m-d-Y')."')";

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
?>