<?php
    $spesSql = "SELECT * FROM `admin_spes_report` ORDER BY ID ASC  ";
    $selectedCurrentBrgy = 'Select Barangay';
    if(isset($_GET['spes-brgy'])) {
        if($_GET['spes-brgy'] !='all') {
            $spesSql = "SELECT * FROM `admin_spes_report` WHERE `brgy`='".$_GET["spes-brgy"]."' ORDER BY ID ASC  ";
        }
        $selectedCurrentBrgy = 'Selected : Barangy '.$_GET["spes-brgy"];
    }
?>
<select onchange="admin.spesSelectedBarangay(this);">
    <option selected><?php echo $selectedCurrentBrgy;?> </option>
    <option value="all">Select All</option>
    <?php 
        $spesSBSql = "SELECT DISTINCT(brgy) FROM `admin_spes_report` ";
        $spesSBResult = $conn->query($spesSBSql);
        $i = 0;
        if ($spesSBResult->num_rows > 0) {
            while($spesSBRow = $spesSBResult->fetch_assoc()) {
                $i++; 
        ?>
        <option value="<?php echo $spesSBRow['brgy'];?> ">Barangay <?php echo $spesSBRow['brgy'];?></option>
        <?php }} ?>	
</select>
<br/><br/>
<table id="print-spes-view-table" class="table table-condensed">
    <thead>
        <tr>
        <th>No.</th>
        <th>Firstname</th>
        <th>Middlename</th>
        <th>Lastname</th>
        <th>Age</th>
        <th>School</th>
        <th>Barangy</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $spesResult = $conn->query($spesSql);
        $i = 0;
        if ($spesResult->num_rows > 0) {
            while($spesRow = $spesResult->fetch_assoc()) {
                $i++; 
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $spesRow['fname']; ?></td>
            <td><?php echo $spesRow['mname']; ?></td>
            <td><?php echo $spesRow['lname']; ?></td>
            <td><?php echo $spesRow['age']; ?></td>
            <td><?php echo $spesRow['school']; ?></td>													
            <td><?php echo $spesRow['brgy']; ?></td>													
        </tr> 
        <?php }} ?>												
    </tbody>
</table>