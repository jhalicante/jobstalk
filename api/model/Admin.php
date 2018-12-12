<?php

    class Admin
    {
        // Approved Use account
        public function approvedUser($post)
        {
            global $conn; 
 
            $sql = "UPDATE `user_account` 
                    SET `status`='".$post['status']."'
                    WHERE `user_id`='".$post['user_id']."' ";

            if ($conn->query($sql) === TRUE) 
            {
                echo json_encode(array('errorCode'=>0, 'successMsg'=>'Successfully approved'));                    
            } 
            else 
            {
                echo json_encode(array('errorCode'=>304, 'errorMsg'=>'Unable to approve user'));                    
            } 
        }
        // Approved Job account
        public function approvedJob($post)
        {
            global $conn; 
 
            $sql = "UPDATE `employer_job_posted` 
                    SET `status`='".$post['status']."'
                    WHERE `job_id`='".$post['job_id']."' ";

            if ($conn->query($sql) === TRUE) 
            {
                echo json_encode(array('errorCode'=>0, 'successMsg'=>'Successfully approved'));                    
            } 
            else 
            {
                echo json_encode(array('errorCode'=>304, 'errorMsg'=>'Unable to approve user'));                    
            } 
        }

        // Add SPRS
        public function addSPRS(string $sql)
        {
            global $conn; 
            if ($conn->query($sql) === TRUE) {
                echo json_encode(array('errorCode'=>0, 'successMsg'=>'Successfully saved'));
            } else {
                echo json_encode(array('errorCode'=>304, 'errorMsg'=>'Unable to saved'));
            }
        }

        // Add SPES
        public function addSPES($post)
        {
            global $conn; 
            $sql = "INSERT INTO `admin_spes_report`(`ID`, `fname`, `mname`, `lname`, `age`, `school`, `brgy`, `status`, `year`)
                    VALUES (null,'".$post["fname"]."','".$post["mname"]."','".$post["lname"]."','".$post["age"]."','".$post["school"]."','".$post["brgy"]."', '".$post["spes-status"]."', '".$post["spes-year"]."')";
            if ($conn->query($sql) === TRUE) {
                echo json_encode(array('errorCode'=>0, 'successMsg'=>'Successfully saved'));
            } else {
                echo json_encode(array('errorCode'=>304, 'errorMsg'=>'Unable to saved'));
            }
        }

        // Add Reminders
        public function addReminders($post)
        {
            global $conn;
            $sql = "INSERT INTO `admin_reminders`(`ID`, `title`, `description`, `time`) 
                    VALUES (null,'".$post["title"]."','".$post["description-content"]."','".$post["time"]."')";
            if ($conn->query($sql) === TRUE) {
                echo json_encode(array('errorCode'=>0, 'successMsg'=>'Successfully saved'));
            } else {
                echo json_encode(array('errorCode'=>304, 'errorMsg'=>'Unable to saved'));
            }
        }
        
    }
?>