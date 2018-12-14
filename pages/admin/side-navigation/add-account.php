<form method="post" enctype="multipart/form-data" id="employer-create-account-form">
    <div class="form-inner">
        <div class="form-fields-wrapper">
            <div class="form-group-wrapper flex space-between items-center">
                <div class="form-group">
                    <p class="label">Email Address<sup>*</sup></p>
                    <input type="text" name="email" placeholder="" required="">
                </div>
                <div class="form-group">
                    <p class="label">Password<sup>*</sup></p>
                    <input type="text" name="password" placeholder="" required="">
                    <input type="hidden" name="type" placeholder="" required="" value="employer">
                </div>
            </div>
        </div>
        <br/>
        <div class="button-wrapper text-center">
            <button type="submit" class="button">Submit</button>
        </div>
    </div>
</form>


<form method="post" enctype="multipart/form-data" id="bpc-create-account-form" style="display:none;">
    <div class="form-inner">
        <div class="form-fields-wrapper">
            <div class="form-group-wrapper flex space-between items-center">
                <div class="form-group">
                    <p class="label">Username<sup>*</sup></p>
                    <input type="text" name="username" placeholder="" required="">
                </div>
                <div class="form-group">
                    <p class="label">Password<sup>*</sup></p>
                    <input type="text" name="password" placeholder="" required="">
                </div>
            </div>	
            <div class="form-group-wrapper flex space-between items-center">
                <div class="form-group">
                    <p class="label">Barangay<sup>*</sup></p>
                    <input type="text" name="brgy" placeholder="" required="">
                    <input type="hidden" name="type" placeholder="" required="" value="bpc">
                </div>
            </div>
        </div>
        <br/>
        <div class="button-wrapper text-center">
            <button type="submit" class="button">Submit</button>
        </div>
    </div>
</form>


