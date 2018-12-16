<form method="post" enctype="multipart/form-data" id="spes-add-new-form">						
    <div class="form-inner">
        <div class="form-fields-wrapper">
            <div class="form-group-wrapper flex space-between items-center">
                <div class="form-group">
                    <p class="label">First Name<sup>*</sup></p>
                    <input type="text" name="fname" placeholder="" required="">
                </div> <!-- end .form-group -->
                <div class="form-group">
                    <p class="label">Middle Name<sup>*</sup></p>
                    <input type="text" name="mname" placeholder="" required="">
                </div> <!-- end .form-group -->
            </div> <!-- end .form-group-wrapper -->									

            <div class="form-group-wrapper flex space-between items-center">
                <div class="form-group">
                    <p class="label">Last Name<sup>*</sup></p>
                    <input type="text" name="lname" placeholder="" required="">
                </div> <!-- end .form-group -->
                <div class="form-group">
                    <p class="label">Age<sup>*</sup></p>
                    <input type="number" name="age" placeholder="" required="">
                </div> <!-- end .form-group -->
            </div> <!-- end .form-group-wrapper --> 

            <div class="form-group-wrapper flex space-between items-center">
                <div class="form-group">
                    <p class="label">School<sup>*</sup></p>
                    <input type="text" name="school" placeholder="" required="">
                </div> <!-- end .form-group -->
                <div class="form-group">
                    <p class="label">Barangay<sup>*</sup></p>
                    <input type="number" name="brgy" placeholder="" required="">
                </div> <!-- end .form-group -->
            </div> <!-- end .form-group-wrapper -->
            <div class="form-group-wrapper flex space-between items-center">
                <div class="form-group">
                    <p class="label">Status<sup>*</sup></p>
                    <select name="spes-status" class="form-control" required="">
                        <option value="New">New</option>
                        <option value="Old">Old</option>
                    </select>
                </div> <!-- end .form-group -->
                <div class="form-group">
                    <p class="label">Year<sup>*</sup></p>
                    <select name="spes-year" class="form-control" required="">
                        <?php
                            for ($sy=1; $sy <= 15; $sy++) { 
                                echo "<option value='".$sy."'>".$sy."</option>";
                            }
                        ?>
                    </select>
                </div> <!-- end .form-group -->
            </div> <!-- end .form-group-wrapper -->		
            <div class="form-group-wrapper flex space-between items-center">
                <div class="form-group">
                    <p class="label">Batch<sup>*</sup></p>
                    <input type="number" name="batch" placeholder="" required="">                    
                </div> <!-- end .form-group -->
                <div class="form-group">
                    <p class="label">Year Admitted<sup>*</sup></p>
                    <?php $years = range(strftime("%Y", time()), 1900); ?>
                    <select name="year-admitted" class="form-control" required="">
                        <?php foreach($years as $year) : ?>
                            <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div> <!-- end .form-group -->
            </div> <!-- end .form-group-wrapper -->	
            <div class="form-group-wrapper flex space-between items-center">
                <div class="form-group">
                    <p class="label">Mobile Number <span>(Eg: 09278977590)</span> <sup>*</sup></p>
                    <input type="number" name="mobile-number" class="mobile-number" placeholder="" required="">                    
                </div> <!-- end .form-group -->
                <div class="form-group"> 
                </div> <!-- end .form-group -->
            </div> <!-- end .form-group-wrapper -->				
        </div>
        <br/>
        <div class="button-wrapper text-center">
            <button type="submit" class="button">Submit</button>
        </div>
    </div>
</form>