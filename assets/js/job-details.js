(function ($) {
    "use strict";

    var jobDetails = {
        init : function() {
            this.eventListener();
        },
        eventListener : function() {

            /* Submit resume for applying a job */ 
            $(document).on('click', '.send-resume', function(e) {
                e.preventDefault();
                if(auth.getCookie('role') != null ) {
                    if(auth.getCookie('role') == 'applicant') {
                        var formData = {
                            applicant_id: auth.getCookie('user_id'),
                            job_id : $(this).attr('job-id'),
                            employer_id : $(this).attr('employer-id')
                        }
                        jobDetails.applyJob(formData);
                    } 
                    else {
                        swal("Applying a job", 'You are not able to apply', "error");
                    }
                } 
                else {
                    $("#login-signup-popup").modal("show");    
                }
            });
        },
        applyJob : function(formData) {
            $.ajax({
                type : 'POST',
                url : api_url+'/job/apply-job',
                data : formData,
                success : function(res) {
                    console.log('res ',res);
                    if(res.errorCode == 0) {
                        swal("Applying a job", res.errorMsg, "success");
                    } else {
                        swal("Applying a job", res.errorMsg, "error");                        
                    }
                }
            });
        },
    }

    jobDetails.init();

})(jQuery)