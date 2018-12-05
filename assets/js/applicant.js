(function ($) {
    "use strict";

    var app = {
        init : function() {
            this.eventListener();
        },
        eventListener : function() {
            
            // Career Objective

            // Work Experience
            $(document).on('click', '.btn-edit-career', function(e) {
                app.updateCareerObjective(objective_content);
            });
            $(document).on('click', '.show-new-experience-view', function(e){
                $('.new-experience-view').removeClass('hide');
            });
            $(document).on('click', '.hide-new-experience-view', function(e){
                $('.new-experience-view').addClass('hide');
            });
            $(document).on('change','#company-logo',function(){
                 
            });
            $("#UploadMedia").submit(function(e){
                e.preventDefault();                
                var formData = new FormData($(this)[0]);

                var property = document.getElementById('company_logo').files[0];
                var image_name = property.name;
                var image_extension = image_name.split('.').pop().toLowerCase();

                if(jQuery.inArray(image_extension,['gif','jpg','jpeg','png']) == -1){
                    swal("Invalid Company Logo Image", "File should be have .png, .jpeg, and jpg extension only!", "error");
                    return false;
                }

                // if ($(this).valid()) {
                    $.ajax({
                        url : api_url+'/add-work-experience',
                        type        : 'POST',
                        data        : formData,
                        contentType : false,
                        cache       : false,
                        processData : false,
                        success: function(e) {console.log(e)  },
                        error       : function(x, t, m) {},
                    });         
                // }

                // var data = {
                //     logo : formData,
                //     companyName : $('.company-title').val(),
                //     position : $('.position').val(),
                //     jobStarted : $('.job-started').val(),
                //     jobEnd : $('.job-ended').val(),
                //     jobDescription : $('.job-desc').val(),
                // }
                // $.ajax({
                //     type : 'POST',
                //     url : api_url+'/add-work-experience',
                //     data : data,
                //     contentType:false,
                //     cache:false,
                //     processData:false,
                //     beforeSend:function(){
                //         console.log('Loading......');
                //     },
                //     success : function(res) {
                //         console.log(res);
                //     }
                // });
            });

            $(document).on('click', '.btn-save-new-experience', function(e){
                
                var property = document.getElementById('company-logo').files[0];
                var image_name = property.name;
                var image_extension = image_name.split('.').pop().toLowerCase();

                if(jQuery.inArray(image_extension,['gif','jpg','jpeg','png']) == -1){
                    alert("Invalid image file");
                }

                var form_data = new FormData();
                form_data.append("file",property);


            });




        },
        updateCareerObjective : function(objective_content) {
            $.ajax({
                type : 'POST',
                url : api_url+'/update-career-objective',
                data : {
                    objective_content : objective_content,
                },
                success: function(res) {
                    console.log(res);
                }
            });
        },
    }

    app.init();

})(jQuery)