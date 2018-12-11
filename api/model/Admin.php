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
                echo json_encode(array('errorCode'=>304, 'errorMsg'=>'Unable to approve saved'));
            }
        }
    }
?>