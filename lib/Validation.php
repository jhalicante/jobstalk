<?php
    
    /** 
     * All Validation goes here
     * */ 

    class Validation
    {
        public function validateEmail(string $email)
        {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return false;
            }
            return true;

        }
        
    }
    $validation = new Validation();
?>