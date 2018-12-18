<?php

    class Job
    {
        // 
        public function findJob($post)
        {
            global $conn;

            $sql = "SELECT
                        employer_job_posted.`user_id`,
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
                        employer_job_posted.`created_date`,
                        employer_job_posted.`status`,
                        course_lists.name as course_name
                    FROM `employer_job_posted`
                    LEFT JOIN course_lists ON course_lists.course_id = employer_job_posted.course_id
                    WHERE (employer_job_posted.`com_address` LIKE '%".$post['location']."%' OR employer_job_posted.`position` LIKE '%".$post['position']."%')
                        AND employer_job_posted.`status`='approved'  
                        GROUP BY employer_job_posted.`ID` 
                        ORDER BY employer_job_posted.`ID` DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $arrData[] = $row;
                }
                echo json_encode(array('errorCode'=>0, 'message'=>'Successfully fetch','response'=>$arrData));                    
            }
            else {
                echo json_encode(array('errorCode'=>304, 'message'=>'No results found!','query'=>$post));                    
            }
        
        }

        // Apply job
        public function applyJob($post)
        {
            global $conn;

            $sql = "SELECT * FROM `applied_job` WHERE `employer_id`='".$post['employer_id']."' AND applicant_id='".$post['applicant_id']."' AND job_id='".$post['job_id']."' ";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo json_encode(array('errorCode'=>305,'errorMsg'=>'You are already applied on this job'));
            } else {
                $sql = "INSERT INTO `applied_job`(`ID`, `applicant_id`, `employer_id`, `job_id`, `application_status`, `date_applied`) 
                VALUES (null,'".$post['applicant_id']."','".$post['employer_id']."','".$post['job_id']."','in-process','".date('m-d-Y')."')";
                if ($conn->query($sql) === TRUE) {
                    echo json_encode(array('errorCode'=>0,'errorMsg'=>'Successfully applied'));
                } else {
                    echo json_encode(array('errorCode'=>304,'errorMsg'=>'Unable to apply'));
                }
            }


            $conn->close();
        }
    }
    

?>