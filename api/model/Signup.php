<?php
    class SignUp
    {
        public function auth($post)
        {
            global $conn;
            global $validation;
            global $cipher;
            
            if( $validation->validateEmail($post['email-address']) )
            {
                $sql = "SELECT `email_address` 
                        FROM `user_account` 
                        WHERE `email_address`='".$post["email-address"]."' ";

                $result = $conn->query($sql);
                
                // Check if email is not exists then saved form data
                if ($result->num_rows <= 0) 
                {
                    $row = $result->fetch_assoc();


                    $sql = "INSERT INTO `user_account`(`ID`, `user_id`, `email_address`, `password`, `role`, `status`) 
                            VALUES (null,'".GEN_UID."','".$post["email-address"]."','".$post["password"]."','".$post["role"]."','pending')";

                    if ($conn->query($sql) === TRUE) 
                    {

                        echo json_encode(array(
                            'errorCode'=>0,
                            'successMsg'=>'Successfully registered',
                            'response'=>array(
                                'user_id'=> GEN_UID,
                                'role'=> $post['role'],
                                'email_address'=> $post['email-address']
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