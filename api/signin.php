<?php
    class SignIn
    {
        public function auth(string $email, string $password)
        {
            global $conn;
            global $validation;
            global $cipher;
            
            if( $validation->validateEmail($email) ) 
            {
                $sql = "SELECT `user_id`,`email_address`,`password`,`role`,`status` FROM `user_account` WHERE `email_address`='".$email."' AND `password`='".$password."' ";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();

                    if($row['status'] == 'blocked') {
                        echo json_encode(array('errorCode'=>304,'errorMsg'=>'Your account has been blocked by admin. <br/>Report this to the admin for the immediate resolve for your account.'));
                    } 
                    else {
                        echo json_encode(array(
                            'errorCode'=>0,
                            'response'=>array(
                                'user_id'=> $row['user_id'],
                                'role'=> $row['role'],
                                'email_address'=> $row['email_address']
                            )
                        ));
                    }

                } else {
                    echo json_encode(array('errorCode'=>304,'errorMsg'=>'Incorrect email address or password'));
                }
            } 
            else 
            {   
                echo json_encode(array('errorCode'=>304,'errorMsg'=>'Invalid email address'));
            }
        }
    }
?>