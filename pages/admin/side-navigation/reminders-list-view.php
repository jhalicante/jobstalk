<table id="print-spes-view-table" class="table table-condensed">
    <thead>
        <tr>
        <th>No.</th>
        <th>Title</th>
        <th>Time</th>
        <th>Date</th>
        <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $remResult = $conn->query("SELECT * FROM `admin_reminders` WHERE 1 ORDER BY ID DESC");
        $i = 0;
        $remRow;
        if ($remResult->num_rows > 0) {
            while($remRow = $remResult->fetch_assoc()) {
                $i++; 
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $remRow['title']; ?></td>
            <td><?php echo $remRow['hour'].':'.$remRow['minute'].' '.$remRow['am_pm']; ?></td>
            <td><?php echo $remRow['date']; ?></td>
            <td><?php echo $remRow['description']; ?></td>
        </tr> 
        <?php }
        } ?>												
    </tbody>
</table>