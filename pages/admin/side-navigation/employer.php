<table id="print-employer-table" class="table table-condensed">
    <thead>
        <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Address</th>
        <th>Email</th>
        <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        global $conn;
        $sql = "SELECT * FROM `user_account` WHERE `role`='employer' ORDER BY status ASC  ";
        $result = $conn->query($sql);
        $i = 0;
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $i++;
                $sql1 = "SELECT * FROM `employer_information` WHERE `user_id`='".$row['user_id']."' ";
                $result1 = $conn->query($sql1);
                if ($result1->num_rows > 0) {
                $row1 = $result1->fetch_assoc();
        ?>
        <tr>
            <th><?php echo $i; ?></th>
            <td> <a href="?employer-profile=<?php echo $row1['user_id']; ?>" > <?php echo $row1['name']; ?> </a> </td>
            <td><?php echo $row1['address']; ?></td>
            <td><?php echo $row1['email']; ?></td>
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