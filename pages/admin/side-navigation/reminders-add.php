<form method="post" enctype="multipart/form-data" id="reminders-add-form">						
    <div class="form-inner">
        <div class="form-fields-wrapper">
            <div class="form-group-wrapper flex space-between items-center">
                <div class="form-group">
                    <p class="label">TITLE<sup>*</sup></p>
                    <input type="text" name="title" placeholder="" required="">
                </div>
                <div class="form-group">
                    <p class="label">Date<sup>*</sup></p>
                    <input type="date" name="date" placeholder="" required="">
                </div>
            </div>	
            <div class="form-group-wrapper flex space-between items-center">
                <div class="form-group">
                    <p class="label">Hour<sup>*</sup></p>
                    <input type="number" onkeyup="this.value = minmax(this.value, 1, 12)" name="hour" placeholder="" required="">
                </div>
                <div class="form-group">
                    <p class="label">Minutes<sup>*</sup></p>
                    <input type="number" name="minute" onkeyup="this.value = minmax(this.value, 1, 60)" placeholder="" required="">
                </div>
            </div>
            <div class="form-group-wrapper flex space-between items-center">
                <div class="form-group">
                    <p class="label">AM/PM<sup>*</sup></p>
                    <select name="am_pm" id="" class="form-control">
                        <option value="am">AM</option>
                        <option value="pm">PM</option>
                    </select>
                </div>
                <div class="form-group">
                    <p class="label">Description<sup>*</sup></p>
                    <textarea name="description-content" rows="4" required=""></textarea>
                </div>
            </div>
        </div>
        <br/>
        <div class="button-wrapper text-center">
            <button type="submit" class="button">Submit</button>
        </div>
    </div>
</form>


