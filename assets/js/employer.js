(function ($) {
    "use strict";

    var employer = {
        init : function() {
            this.eventListener();
        },
        eventListener : function() {
            
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

                var property = document.getElementById('logo-picture').files[0];
                var image_name;
                if(property == undefined) {
                    swal("Select Logo", "Please select your logo", "error");                    
                    return false;
                } else {
                    image_name = property.name;
                }
                
                var image_extension = image_name.split('.').pop().toLowerCase();

                if(jQuery.inArray(image_extension,['gif','jpg','jpeg','png']) == -1){
                    swal("Invalid Logo", "File should be have .png, .jpeg, and jpg extension only!", "error");
                    return false;
                }
                $.ajax({
                    type : 'POST',
                    url : api_url+'/employer/add-personal-information',
                    data : formData,
                    contentType : false,
                    cache       : false,
                    processData : false,
                    success : function(res) {
                        console.log('res ',res);
                        if(res.errorCode == 0) {
                            $('.next')[0].click();
                        } else {
                            swal("Profile Completion", res.errorMsg, "error");                            
                        }
                    }
                });
            });

        }
    }

    employer.init();

})(jQuery)