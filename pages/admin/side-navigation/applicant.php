<table id="print-applicant-table" class="table table-condensed">
    <thead>
        <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Address</th>
        <th>Phone No.</th>
        <th>Gender</th>
        <th>Civil Status</th>
        <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        global $conn;
        $sql = "SELECT * FROM `user_account` WHERE `role`='applicant' ORDER BY status ASC  ";
        $result = $conn->query($sql);
        $i = 0;
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $i++;
                $sql1 = "SELECT
                            CONCAT(applicant_personal_information.fname,' ',applicant_personal_information.mname,' ',applicant_personal_information.lname) AS fullname,
                            CONCAT('Brgy.',applicant_contact_information.brgy,' ',applicant_contact_information.municipality ) AS address,
                            applicant_contact_information.phone_no,
                            applicant_personal_information.gender,
                            applicant_personal_information.civil_status,
                            user_account.user_id,
                            user_account.status
                        FROM applicant_personal_information
                        INNER JOIN applicant_contact_information ON applicant_contact_information.user_id = applicant_personal_information.user_id
                        INNER JOIN user_account ON user_account.user_id = applicant_personal_information.user_id
                        WHERE applicant_personal_information.user_id = '".$row['user_id']."' ";
                $result1 = $conn->query($sql1);
                if ($result1->num_rows > 0) {
                $row1 = $result1->fetch_assoc();
        ?>
        <tr>
            <th><?php echo $i; ?></th>
			<td><a href="?applicant-profile=<?php echo $row1['user_id']; ?>&mode=view" ><?php echo $row1['fullname']; ?></a></td>
            <td><?php echo $row1['address']; ?></td>
            <td><?php echo $row1['phone_no']; ?></td>
            <td><?php echo $row1['gender']; ?></td>
            <td><?php echo $row1['civil_status']; ?></td>													
            <td><?php  
                if($row['status'] == 'pending') {
                    echo '<button class="approved-employer" status="approved" user-id="'.$row['user_id'].'">Approve</button>';
                    echo '<button class="approved-employer" status="disapproved" user-id="'.$row['user_id'].'">Disapprove</button>';
                }
                else if($row['status'] == 'approved') {
                    echo '<button class="approved-employer" status="deactivated" user-id="'.$row['user_id'].'">Deactivate</button>';
                }
                else if($row['status'] == 'deactivated') {
                    echo '<button class="approved-employer" status="approved" user-id="'.$row['user_id'].'">Activate</button>';
                }
                else {
                    echo '<span style="background:#4d824d;color:#fff;padding:5px 15px 5px 15px;border-radius:5px;">'.ucfirst($row['status']).'</span>';
                }
            ?></td>
        </tr> 
        <?php }}} ?>												
    </tbody>
</table>