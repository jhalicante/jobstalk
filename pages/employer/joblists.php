<table id="print-joblist-table" class="table table-condensed">
    <thead>
        <tr>
            <th>No.</th>
            <th>Company Name</th>
            <th>Position</th>
            <th>Date Posted</th>
            <th>Candidates</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        global $conn;
        $pjsql = "SELECT
                    employer_job_posted.`job_id`,
                    employer_job_posted.`com_name`,
                    employer_job_posted.`com_address`,
                    employer_job_posted.`position`,
                    employer_job_posted.`status`,  
                    employer_job_posted.`years_experience`,
                    employer_job_posted.`months_experience`,
                    employer_job_posted.`created_date`,
                    COUNT(applied_job.`ID`) AS applicant_applied
                FROM `employer_job_posted`
                LEFT JOIN applied_job ON applied_job.`job_id` = employer_job_posted.`job_id`    
                WHERE employer_job_posted.`user_id`='".$_COOKIE['user_id']."'
                GROUP BY employer_job_posted.`ID`
                ORDER BY employer_job_posted.`ID` DESC ";
        $pjresult = $conn->query($pjsql);
        if ($pjresult->num_rows > 0) {
            $i = 1;
            while($pjrow = $pjresult->fetch_assoc()) { ?>															
        <tr>
            <th><?php echo $i++; ?></th>
            <td><a href="#" class="jobinfo-show-modal" job_id="<?php echo $pjrow['job_id']; ?>"><?php echo $pjrow['com_name']; ?></a></td>
            <td><?php echo $pjrow['position']; ?></td>
            <td><?php echo $pjrow['created_date']; ?></td>
            <td><?php 
                if( $pjrow['applicant_applied'] >= 1 ) {
                    echo '<a href="#" class="candidates-show-modal" years-exp="'.$pjrow['years_experience'].'" months-exp="'.$pjrow['months_experience'].'" job_id="'.$pjrow['job_id'].'"> <b>'.$pjrow['applicant_applied'].' Candidate(s)';
                } 
                else {
                    echo '0 Candidate';
                }
                ?></td>
            <td><?php echo ucfirst($pjrow['status']); ?></td>
        </tr> 
        <?php
            } 
        }
    ?>								
    </tbody>
</table>