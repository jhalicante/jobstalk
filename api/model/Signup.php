<?php
    class SignUp
    {
        public function auth(string $email_address, string $password, string $role)
        {
            global $conn;
            global $validation;
            global $cipher;
            
            if( $validation->validateEmail($email_address) )
            {
                $sql = "SELECT `email_address` 
                        FROM `user_account` 
                        WHERE `email_address`='".$email_address."' ";

                $result = $conn->query($sql);
                
                // Check if email is not exists then saved form data
                if ($result->num_rows <= 1) 
                { 
                    $row = $result->fetch_assoc();


                    $sql = "INSERT INTO `user_account`(`ID`, `user_id`, `email_address`, `password`, `role`, `status`) 
                            VALUES (null,'".GEN_UID."','".$email_address."','".$password."','".$role."','pending')";

                    if ($conn->query($sql) === TRUE) 
                    {

                        echo json_encode(array(
                            'errorCode'=>0,
                            'successMsg'=>'Successfully registered',
                            'response'=>array(
                                'uid_token'=> $cipher->encrypt(GEN_UID),
                                'role_token'=> $cipher->encrypt($role),
                                'email_address'=> $email_address
                            )
                        ));
                    } 
                    else 
                    {
                        echo json_encode(array('errorCode'=>304,'errorMsg'=>'Unable to registered your account'));
                    }
                } 
                else 
                {
                    echo json_encode(array('errorCode'=>304,'errorMsg'=>'Email already exists'));
                }
            } 
            else 
            {   
                echo json_encode(array('errorCode'=>304,'errorMsg'=>'Invalid email address'));
            }
        }
    }
?>