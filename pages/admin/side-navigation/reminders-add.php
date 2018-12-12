<form method="post" enctype="multipart/form-data" id="reminders-add-form">						
    <div class="form-inner">
        <div class="form-fields-wrapper">
            <div class="form-group-wrapper flex space-between items-center">
                <div class="form-group">
                    <p class="label">TITLE<sup>*</sup></p>
                    <input type="text" name="title" placeholder="" required="">
                </div>
                <div class="form-group">
                    <p class="label">Time<sup>*</sup></p>
                    <input type="datetime-local" name="time" placeholder="" required="">
                </div>
            </div>							
            <div class="form-group-wrapper">
                <div class="form-group">
                    <p class="label">Description<sup>*</sup></p>
                    <textarea name="description-content" rows="4"></textarea>
                </div>
            </div>	
        </div>
        <br/>
        <div class="button-wrapper text-center">
            <button type="submit" class="button">Submit</button>
        </div>
    </div>
</form>


