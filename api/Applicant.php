<?php

    class Applicant
    {
        public function AddWorkExperience($logo, string $companyName, string $position, string $jobStarted, string $jobEnd, string $jobDescription )
        {
            $test = explode('.', $logo);
            $extension = end($test);
            $name = rand(100,999).'.'.$extension;

            $location = 'uploads/'.$name;
            move_uploaded_file($_FILES['file']['tmp_name'], $location);

            echo '<img src="'.$location.'" height="100" width="100" />';
        }
    }
?>