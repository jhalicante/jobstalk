<?php

    class ReportsInclude
    {
     
        public function employerApplicantCount(string $table, string $field, string $condition)
        {
            global $conn;
            $sql = "SELECT count(`$field`) as $field FROM `$table` WHERE $field = '".$condition."'  ";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                return $row[$field];
            } else {
                return null;
            }
        }
        public function jobsCount()
        {
            global $conn;
            $sql = "SELECT count(`ID`) as job_count FROM `employer_job_posted` WHERE 1 ";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                return $row['job_count'];
            } else {
                return null;
            }
        }
        public function registeredApplicantCount(string $table, string $field, string $condition)
        {
            global $conn;
            $sql = "SELECT count(`$field`) as $field FROM `$table` WHERE $field = '".$condition."'  ";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                return $row[$field];
            } else {
                return null;
            }
        }
        public function spesCount()
        {
            global $conn;
            $sql = "SELECT count(`ID`) as spes_count FROM `admin_spes_report` WHERE 1 ";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                return $row['spes_count'];
            } else {
                return null;
            }
        }
        public function lmiJobsCount()
        {
            global $conn;
            $sql = "SELECT count(`ID`) as job_count FROM `employer_job_posted` WHERE 1 ";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                return $row['job_count'];
            } else {
                return null;
            }
        }
    }
    $repInc = new ReportsInclude();
?>

