<table id="hired-applicants-table" class="table table-condensed">
    <thead>
        <tr>
            <th>No.</th>
            <th>FullName</th>
            <th>Company Name</th>
            <th>Position</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        global $conn;
        $hasql = "SELECT
                    applied_job.*,
                    applicant_personal_information.*,
                    applicant_education.`ter_course`,
                    employer_job_posted.*,
                    COUNT(applicant_work_experience.`ID`) AS years_count                    
                FROM
                    `applied_job`
                INNER JOIN applicant_work_experience ON applicant_work_experience.`user_id` = applied_job.`applicant_id`
                INNER JOIN employer_job_posted ON employer_job_posted.`job_id` = applied_job.`job_id`
                INNER JOIN applicant_education ON applicant_education.`user_id` = applied_job.`applicant_id`
                INNER JOIN applicant_personal_information ON applicant_personal_information.`user_id` = applied_job.`applicant_id`
                WHERE applied_job.`employer_id` = '".$_COOKIE['user_id']."' AND applied_job.`application_status`='hired'
                GROUP BY applied_job.`ID` 
                ORDER BY applied_job.`ID` DESC";
        $haresult = $conn->query($hasql);
        if ($haresult->num_rows > 0) {
            $i = 1;
            while($harow = $haresult->fetch_assoc()) { ?>															
        <tr>
            <th><?php echo $i++; ?></th>
            <td><?php echo $harow['fname']; ?></td>
            <td><?php echo $harow['com_name']; ?></td>
            <td><?php echo $harow['position']; ?></td>
            <td><?php echo ucfirst($harow['application_status']); ?></td>
        </tr> 
        <?php
            } 
        }
    ?>								
    </tbody>
</table>