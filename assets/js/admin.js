(function ($) {
    "use strict";

    var admin = {
        init : function() {
            this.eventListener();
        },
        eventListener : function() { 
            $('#print-employer-table, #print-applicant-table').DataTable( {
                // dom: 'Bfrtip',
                dom: 'lBfrtip',
                buttons: [
                    {
                        extend: 'print',
                        messageTop: 'Employer data list'
                    }
                ]
            } );

            $(document).on('click','.approved-employer', function(e){
                var user_id = $(this).attr('user-id'),
                    status = $(this).attr('status');
                $.ajax({
                    type : 'POST',
                    url : api_url+'/admin/approved-user',
                    data : {
                        user_id : user_id,
                        status : status
                    },
                    success : function(res) {
                        console.log('res ',res);
                        if(res.errorCode == 0) {
                            location.reload();
                        } else {
                            swal("Verify User", res.errorMsg, "error");                            
                        }
                    }
                });
            });
        }
    }

    admin.init();

})(jQuery)