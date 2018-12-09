<?php

    class Admin
    {
        public function approvedUser($post)
        {
            global $conn; 
 
            // has a result 
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
    }
?>