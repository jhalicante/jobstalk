<?php

    class Fetch
    {
     
        public function getInformation(string $table, string $field)
        {
            global $conn;
            $sql = "SELECT `$field` FROM `$table` WHERE `user_id`='".USER_ID."' ";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                return $row[$field];
            } else {
                return null;
            }
        }
    }

    $fetch = new Fetch();
?>

