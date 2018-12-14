<?php
    class BPC
    {
        public function auth($post)
        {
            global $conn; 
            $sql = "SELECT * FROM `bpc_account` WHERE `username`='".$post['username']."' AND `password`='".$post['password']."' ";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                echo json_encode(array(
                    'errorCode'=>0,
                    'response'=>array(
                        'user_id'=> $row['user_id'],
                        'role'=> $row['role'],
                        'email_address'=> $row['username']
                    )
                ));
            } else {
                echo json_encode(array('errorCode'=>304,'errorMsg'=>'Incorrect username or password'));
            }
        }
        public function deleteSpes($post)
        {
            global $conn;
            $sql = "DELETE FROM `admin_spes_report` WHERE `ID`='".$post['id']."' ";
    
            if ($conn->query($sql) === TRUE) {
                echo json_encode(array('errorCode'=>0,'successMsg'=>'Successfully deleted'));
                
            } else {
                echo json_encode(array('errorCode'=>304,'errorMsg'=>'Unable to delete'));
    
            }
    
        }
    }
?>