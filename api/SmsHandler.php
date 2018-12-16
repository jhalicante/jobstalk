<?php

class SMSHandler
{
    public function authenticate($reciever_mobile_number, $message)
    {
        if(isset($reciever_mobile_number) AND !empty($reciever_mobile_number) ) {
            if( $this->$validate($reciever_mobile_number) ) {
                $this->send($reciever_mobile_number, $message);
            } else {
                echo json_encode(array('errorCode'=>304,'errorMsg'=>'Invalid Mobile Number'));
            }
        }
        else {
            echo json_encode(array('errorCode'=>304,'errorMsg'=>'Parameters required'));
        }
    }

    public function validate($mobile_number)
    {
        // Validate if mobile number is 11 digit and has a first 2 number start with 09 number
        if(strlen($mobile_number) != 11 && substr($mobile_number, 0, 2) != '09') {
            return false;
        }
        else {
            return true;
        }
    }

    public function send($reciever_mobile_number, $message)
    {
        
        $sql = "INSERT INTO `ozekimessageout`(`id`, `sender`, `receiver`, `msg`, `senttime`, `receivedtime`, `reference`, `status`, `msgtype`, `operator`, `errormsg`) 
                VALUES (null,'SenderName','".$reciever_mobile_number."','".$message."','','','','send','','','')";

        if ($conn->query($sql) === TRUE) {
            echo json_encode(array('errorCode'=>0,'successMsg'=>'Successfully Sent'));            
        } else {
            echo json_encode(array('errorCode'=>304,'errorMsg'=>'Unable to send'));                        
        }
    }
}

?>