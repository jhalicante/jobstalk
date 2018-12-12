<?php

    class ReportsInclude
    {
     
        public function getCount(string $table, string $field)
        {
            global $conn;
            $sql = "SELECT count(`$field`) FROM `$table` WHERE `user_id`='".USER_ID."' ";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                return $row[$field];
            } else {
                return null;
            }
        }
    }
    $repInc = new ReportsInclude();
?>

