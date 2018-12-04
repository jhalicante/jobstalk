<?php
    class ValidateData
    {
        public function emailIsExists(string $email_address)
        {
            global $conn;
            global $validation;
            
            if( $validation->validateEmail($email_address) )
            {
                $sql = "SELECT `email_address` 
                        FROM `user_account`
                        WHERE `email_address`='".$email_address."' ";

                $result = $conn->query($sql);
                
                if ($result->num_rows < 0) 
                {
                    echo json_encode(array('errorCode'=>0,'errorMsg'=>'Email Address is available'));
                } 
                else 
                {
                    echo json_encode(array('errorCode'=>304,'errorMsg'=>'Email Address is already exists'));
                }
            } 
            else 
            {   
                echo json_encode(array('errorCode'=>304,'errorMsg'=>'Invalid Email address'));
            }
        }
    }
    

?>