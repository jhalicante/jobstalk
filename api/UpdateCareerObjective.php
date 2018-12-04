<?php

    class UpdateCareerObjective
    {
        public function update( string $content, string $table, string $field )
        {
            

            $sql = "SELECT `$field` FROM `$table` WHERE `user_id`='".USER_ID."' ";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                
                $sql = "UPDATE `$table` SET `$field`='".$content."' WHERE `user_ud`='".USER_ID."' ";

                if ($conn->query($sql) === TRUE) {
                    echo "Record updated successfully";
                } else {
                    echo "Error updating record: " . $conn->error;
                }
                
            } else {
                $sql = "INSERT INTO MyGuests (firstname, lastname, email)
                VALUES ('John', 'Doe', 'john@example.com')";
                
                if ($conn->query($sql) === TRUE) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }
        
    }
    

?>