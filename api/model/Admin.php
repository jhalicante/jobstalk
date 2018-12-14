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

        // Get SPRS
        public function getSPRS($post)
        {
            global $conn; 
            $table = $post['table_name'];
            $sql = "SELECT * FROM `$table` WHERE ID ='".$post['id']."' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                echo json_encode(array('errorCode'=>0, 'successMsg'=>'Successfully fetch','response'=>$row));
            } else {
                echo json_encode(array('errorCode'=>304, 'errorMsg'=>'Unable to fetch'));                
            }
        }
        // Add Reminders
        public function addReminders($post)
        {
            global $conn;
            $sql = "INSERT INTO `admin_reminders`(`ID`, `title`, `date`, `hour`, `minute`, `am_pm`, `description`) 
                    VALUES (null,'".$post["title"]."','".$post["date"]."','".$post["hour"]."','".$post["minute"]."','".$post["am_pm"]."','".$post["description-content"]."')";
            if ($conn->query($sql) === TRUE) {
                echo json_encode(array('errorCode'=>0, 'successMsg'=>'Successfully saved'));
            } else {
                echo json_encode(array('errorCode'=>304, 'errorMsg'=>'Unable to saved'));
            }
        }

        // Get Reminders
        public function getReminders()
        {
            global $conn; 
            $sql = "SELECT * FROM `admin_reminders` WHERE 1 ORDER BY ID DESC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
                echo json_encode(array('errorCode'=>0, 'successMsg'=>'Successfully fetch','response'=>$data));                
            } else {
                echo json_encode(array('errorCode'=>304, 'errorMsg'=>'Unable to fetch'));                
            }
        }

        // Create BPC Account AND Employer
        public function createAccount($post)
        {
            global $conn;

            if($post['type'] =='employer') {
                $sql = "INSERT INTO `user_account`(`ID`, `user_id`, `email_address`, `password`, `role`, `status`) 
                        VALUES (null,'".GEN_UID."','".$post['email']."','".$post['password']."','employer','approved')";
            }
            else if($post['type'] =='bpc') {
                $sql = "INSERT INTO `bpc_account`(`ID`, `user_id`, `role`, `username`, `password`, `brgy`, `created_date`)
                        VALUES (null,'".GEN_UID."','bpc','".$post['username']."','".$post['password']."','".$post['brgy']."','".date('m/dY')."')";
            }

            if ($conn->query($sql) === TRUE)
            {
                echo json_encode(array('errorCode'=>0, 'successMsg'=>'Successfully created'));                    
            } 
            else 
            {
                echo json_encode(array('errorCode'=>304, 'errorMsg'=>'Unable to create '.$sql));                    
            } 
        }
        
    }
?>