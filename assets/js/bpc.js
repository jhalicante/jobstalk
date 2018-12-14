 
    var bpc = {
        init : function() {
            this.eventListener();
        },
        eventListener : function() {
            $('#spes-table').DataTable( {
                dom: 'lBfrtip',
                buttons: [
                    {
                        extend: 'print',
                        messageTop: 'Spes Reports'
                    }
                ]
            });
            $(document).on('click','.delete-spes',function(e){
                e.preventDefault();
                var id = $(this).attr('id');
                $.ajax({
                    type : 'POST',
                    url : api_url+'/bpc/delete-spes',
                    data : { id : id },
                    success: function(res) {
                        console.log(res);
                        if(res.errorCode == 0) {
                            swal("Delete Spes", res.successMsg, "success")
                            .then((value) => {
                                location.reload();
                            });
                        } else {
                            swal("Delete Spes", res.errorMsg, "error");                            
                        }
                    }
                });
            });

        }
    }

    bpc.init();
