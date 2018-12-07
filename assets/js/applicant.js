(function ($) {
    "use strict";

    var applicant = {
        init : function() {
            this.eventListener();
        },
        eventListener : function() {
            
            // Career Objective

            // Work Experience
            $(document).on('click', '.btn-edit-career', function(e) {
                applicant.updateCareerObjective(objective_content);
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

            $(document).on('click', '.personal-information-form', function(e){
                
                var property = document.getElementById('company-logo').files[0];
                var image_name = property.name;
                var image_extension = image_name.split('.').pop().toLowerCase();

                if(jQuery.inArray(image_extension,['gif','jpg','jpeg','png']) == -1){
                    alert("Invalid image file");
                }

                var form_data = new FormData();
                form_data.append("file",property);
            });

            /**
             * PROFILE COMPLETION PAGE WIZARD
             * */ 
            function readImage(inputElement) {
                var deferred = $.Deferred();
            
                var files = inputElement.get(0).files;
                if (files && files[0]) {
                    var fr= new FileReader();
                    fr.onload = function(e) {
                        deferred.resolve(e.target.result);
                    };
                    fr.readAsDataURL( files[0] );
                } else {
                    deferred.resolve(undefined);
                }
            
                return deferred.promise();
            }

            $('input[type=file]').on('change',function(e){
                var _thisAttrPrevImg = $(this).attr('data-preview-img');
                $('.'+$(this).attr('data-label-class')).html(e.target.files[0].name.substring(0,30)+'...');                
                readImage($(this)).done(function(base64Data){ 
                    $('.'+_thisAttrPrevImg).attr({'src':base64Data});
                });
            });

            $("#personal-information-form").submit(function(e){
                e.preventDefault();                
                var formData = new FormData($(this)[0]);

                var property = document.getElementById('profile-picture').files[0];
                var image_name;
                if(property == undefined) {
                    swal("Select Profile Photo", "Please select your profile photo", "error");                    
                    return false;
                } else {
                    image_name = property.name;
                }
                
                var image_extension = image_name.split('.').pop().toLowerCase();

                if(jQuery.inArray(image_extension,['gif','jpg','jpeg','png']) == -1){
                    swal("Invalid Profile Photo", "File should be have .png, .jpeg, and jpg extension only!", "error");
                    return false;
                }
                $.ajax({
                    type : 'POST',
                    url : api_url+'/add-personal-information',
                    data : formData,
                    contentType : false,
                    cache       : false,
                    processData : false,
                    success : function(res) {
                        if(res.errorCode == 0) {
                            $('.next')[0].click();
                        } else {
                            swal("Profile Completion", res.errorMsg, "error");                            
                        }
                    }
                });
            });

            $("#educational-background-form").submit(function(e){
                e.preventDefault();
                var formData = new FormData($(this)[0]);                
                $.ajax({
                    type : 'POST',
                    url : api_url+'/add-educational-background',
                    data : formData,
                    contentType : false,
                    cache       : false,
                    processData : false,
                    success : function(res) {
                        if(res.errorCode == 0) {
                            $('.next')[1].click();
                        } else {
                            swal("Profile Completion", res.errorMsg, "error");                            
                        }
                    }
                });
            });

            $("#educational-background-form").submit(function(e){
                e.preventDefault();
                var formData = new FormData($(this)[0]);                
                $.ajax({
                    type : 'POST',
                    url : api_url+'/add-educational-background',
                    data : formData,
                    contentType : false,
                    cache       : false,
                    processData : false,
                    success : function(res) {
                        if(res.errorCode == 0) {
                            $('.next')[1].click();
                        } else {
                            swal("Profile Completion", res.errorMsg, "error");                            
                        }
                    }
                });
            });

            $("#work-experience-form").submit(function(e){
                e.preventDefault();
                var formData = new FormData($(this)[0]);      
                $.ajax({
                    type : 'POST',
                    url : api_url+'/add-work-experience',
                    data : formData,
                    contentType : false,
                    cache       : false,
                    processData : false,
                    success : function(res) {
                        console.log(res);
                        if(res.errorCode == 0) {
                            $('.next')[2].click();
                        } else {
                            swal("Profile Completion", res.errorMsg, "error");                            
                        }
                    }
                });
            });

            $('#contact-details-form').submit(function(e){
                e.preventDefault();
                var formData = new FormData($(this)[0]);      
                $.ajax({
                    type : 'POST',
                    url : api_url+'/add-contact-details',
                    data : formData,
                    contentType : false,
                    cache       : false,
                    processData : false,
                    success : function(res) {
                        console.log(res);
                        if(res.errorCode == 0) {
                            $('.next')[3].click();
                        } else {
                            swal("Profile Completion", res.errorMsg, "error");                            
                        }
                    }
                });
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

    applicant.init();

})(jQuery)