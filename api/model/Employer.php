<?php
    class Employer
    {
        public function addProfileInformation($post, $files)
        {
            global $conn;
            
            $path = $files['logo']['name'];
            $ext = pathinfo($path, PATHINFO_EXTENSION);

            $filepath = GEN_UID.".".$ext;
            $uploaded_url = '../assets/uploaded/'.$filepath;
            $filetmp = $files['logo']['tmp_name'];
            move_uploaded_file($filetmp, $uploaded_url);

            $sql = "SELECT * FROM `employer_information` WHERE `user_id`='".$_COOKIE["user_id"]."' ";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // has a result 
                $sql = "UPDATE `employer_information` 
                        SET `name`='".$post["company-name"]."',
                            `short_desc`='".$post["short-description"]."',
                            `about`='".$post["about"]."',
                            `address`='".$post["address"]."',
                            `contact_no`='".$post["contact-no"]."',
                            `email`='".$post["email-address"]."',
                            `logo`='".$filepath."',
                            `website`='".$post["website"]."'
                        WHERE `user_id`='".$_COOKIE['user_id']."' ";

                if ($conn->query($sql) === TRUE) 
                {
                    echo json_encode(array('errorCode'=>0, 'successMsg'=>'Successfully updated'));                    
                } 
                else 
                {
                    echo json_encode(array('errorCode'=>304, 'errorMsg'=>'Unable to update'));                    
                }
            } else {
                // no results
                $sql = "INSERT INTO `employer_information`(`ID`, `user_id`, `name`, `short_desc`, `about`, `address`, `contact_no`, `email`, `logo`, `website`) 
                        VALUES (null,
                            '".$_COOKIE['user_id']."',
                            '".$post['company-name']."',
                            '".$post['short-description']."',
                            '".$post['about']."',
                            '".$post['address']."',
                            '".$post['contact-no']."',
                            '".$post['email-address']."',
                            '".$filepath."',
                            '".$post['website']."')";

                if ($conn->query($sql) === TRUE) 
                {
                    echo json_encode(array('errorCode'=>0, 'successMsg'=>'Successfully created'));
                }
                else 
                {
                    echo json_encode(array('errorCode'=>304, 'errorMsg'=>'Unable to create'.$sql));                    
                }
            }
        }
    }
?>