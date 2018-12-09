<?php

    class Job
    {
        public function applyJob($post)
        {
            global $conn;

            $sql = "SELECT     
                    `user_id`,
                    `job_id`,
                    `com_logo`,
                    `com_name`,
                    `com_address`,
                    `position`,
                    `job_type`,
                    `course_id`,
                    `industry_id`,
                    `years_experience`,
                    `months_experience`,
                    `description`,
                    `created_date`,
                    `status` 
                FROM `employer_job_posted` WHERE (`com_address` LIKE '%".$post['location']."%' OR `position` LIKE '%".$post['position']."%') AND status='approved'  ";
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
    }
    

?>