    var admin = {
        init : function() {
            this.eventListener();
        },
        eventListener : function() { 
            $('#print-employer-table, #print-applicant-table').DataTable( {
                dom: 'lBfrtip',
                buttons: [
                    {
                        extend: 'print',
                        messageTop: 'Employer data list'
                    }
                ]
            } );
            $('#print-admin_sprs_report-table').DataTable( {
                dom: 'lBfrtip',
                buttons: [
                    {
                        extend: 'print',
                        messageTop: 'Statistical Performance Reporting System'
                    }
                ]
            } );
            $('#placement-report-table').DataTable( {
                dom: 'lBfrtip',
                buttons: [
                    {
                        extend: 'print',
                        messageTop: 'Customer Placement Report'
                    }
                ]
            } );
            $('#print-joblists-table').DataTable( {
                dom: 'lBfrtip',
                buttons: [
                    {
                        extend: 'print',
                        messageTop: 'Job lists'
                    }
                ]
            } );
            $('#print-spes-view-table').DataTable( {
                dom: 'lBfrtip',
                buttons: [
                    {
                        extend: 'print',
                        messageTop: 'SPES list view'
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
            $(document).on('click','.approved-job', function(e){
                var job_id = $(this).attr('job-id'),
                    status = $(this).attr('status');
                $.ajax({
                    type : 'POST',
                    url : api_url+'/admin/approved-job',
                    data : {
                        job_id : job_id,
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
            $(document).on('click','.save-sprs', function(e) {
                admin.saveSPRS();
            });
            $(document).on('click','.save-lmi', function(e) {
                admin.saveLMI();
            });

            $(document).on('keyup','.txt', function(e){
                console.log('123');
                var _this = $(this);
                $('.txt-total1').val( parseInt($('.txt1').val()) + parseInt($('.txt2').val()) );
                $('.txt-total2').val( parseInt($('.txt3').val()) + parseInt($('.txt4').val()) );
                $('.txt-total3').val( parseInt($('.txt5').val()) + parseInt($('.txt6').val()) );
                $('.txt-total4').val( parseInt($('.txt7').val()) + parseInt($('.txt8').val()) );
            });



            // Print SPRS Table
            $(document).on('click', '.print-sprs', function(e){
                admin.printDiv('sprs-div','STATISTICAL PERFORMANCE REPORTING SYSTEM (SPRS) Report');
            });
            $(document).on('click', '.print-lmi', function(e){
                admin.printDiv('lmi-print-div','LABOR MARKET INFORMATION ANALYSIS ANALYSIS Report');
            });
            
            // Add New SPES
            $("#spes-add-new-form").submit(function(e){
                e.preventDefault();
                var formData = new FormData($(this)[0]);
                $.ajax({
                    type : 'POST',
                    url : api_url+'/admin/add-spes',
                    data : formData,
                    contentType : false,
                    cache       : false,
                    processData : false,
                    success : function(res) {
                        console.log('resss ',res);
                        if(res.errorCode == 0) {
                            // swal("Adding SPES", 'Successully saved', "success");
                            location.reload();

                        } else {
                            swal("Adding SPES", res.errorMsg, "error");                            
                        }
                    }
                });
            });
            // Add New Reminders
            $("#reminders-add-form").submit(function(e){
                e.preventDefault();
                var formData = new FormData($(this)[0]);
                $.ajax({
                    type : 'POST',
                    url : api_url+'/admin/add-reminders',
                    data : formData,
                    contentType : false,
                    cache       : false,
                    processData : false,
                    success : function(res) {
                        console.log('res ',res);
                        if(res.errorCode == 0) {
                            location.reload();
                            // swal("Adding Reminders", res.errorMsg, "error");
                        } else {
                            swal("Adding Reminders", res.errorMsg, "error");                            
                        }
                    }
                });
            });

            jQuery('.toast__close').click(function(e){
                e.preventDefault();
                var parent = $(this).parent('.toast');
                parent.fadeOut("slow", function() { $(this).remove(); } );
            });
            
            // setInterval( function(){
            //     admin.getReminders();
            // }, 2000);
        },
        // getReminders: function(){
        //     $.ajax({
        //         type : 'POST',
        //         url : api_url+'/admin/get-reminders',
        //         success : function(res) {
        //             console.log(res);
        //             if(res.errorCode == 0){
        //                 var resp = res.response;
        //                 for (let i = 0; i <= resp.length; i++) {
        //                     console.log(resp[i]['am_pm']);
        //                     var r = resp[i];
        //                     try {
        //                         var dd = r['am_pm'].toString();
        //                         var d = new Date(),
        //                             _date = d.getFullYear()+'/'+d.getMonth()+'/'+d.getDate();
        //                         if( dd == _date.toString() ) {
        //                             if((d.getHours() == resp[i].hour) (d.getMinutes() == resp[i].minute) && (d.toLocaleTimeString().slice(-2) == resp[i].am_pm))
        //                             {
        //                                 // jQuery('.toast__close').click(function(e){
        //                                 //     e.preventDefault();
        //                                 //     var parent = $(this).parent('.toast');
        //                                 //     parent.fadeOut("slow", function() { $(this).remove(); } );
        //                                 // });
        //                             }
        //                         }   
        //                     } catch (error) {
        //                         console.log('error',error);
        //                     }

        //                 }
        //             }

        //         }
        //     });
        // },
        // SPES Selected Barangy Onchange
        spesSelectedBarangay : function(sel) {
            var brgy = sel.value;
            if(brgy !='') {
                location.href="account?spes-brgy="+brgy;
            } else {
                location.href="account?spes-brgy=";
            }
        },
        saveSPRS : function() {
            var fields = [],
                d = new Date(),
                date = d.getMonth()+'/'+d.getDate()+'/'+d.getFullYear(),
                other_activities = $('.other-activities').val(),
                sprs_name = $('.sprs-name').val(),
                sprs_designation = $('.sprs-designation').val();
                


            fields = [];
            var sql ="INSERT INTO `admin_sprs_report`(`ID`,`_1_`, `_2_`, `_3_`, `_4_`, `_5_`, `_6_`, `_7_`, `_8_`, `_9_`, `_10_`, `_11_`, `_12_`, `_13_`, `_14_`, `_15_`, `_16_`, `_17_`, `_18_`, `_19_`, `_20_`, `_21_`, `_22_`, `_23_`, `_24_`, `_25_`, `_26_`, `_27_`, `_28_`, `_29_`, `_30_`, `_31_`, `_32_`, `_33_`, `_34_`, `_35_`, `_36_`, `_37_`, `_38_`, `_39_`, `_40_`, `_41_`, `_42_`, `_43_`, `_44_`, `_45_`, `_46_`, `_47_`, `_48_`, `_49_`, `_50_`, `_51_`, `_52_`, `_53_`, `_54_`, `_55_`, `_56_`, `_57_`, `_58_`, `_59_`, `_60_`, `_61_`, `_62_`, `_63_`, `_64_`, `_65_`, `_66_`, `_67_`, `_68_`, `_69_`, `_70_`, `_71_`, `_72_`, `_73_`, `_74_`, `_75_`, `_76_`, `_77_`, `_78_`, `_79_`, `_80_`, `_81_`, `_82_`, `_83_`, `_84_`, `_85_`, `_86_`, `_87_`, `_88_`, `_89_`, `_90_`, `_91_`, `_92_`, `_93_`, `_94_`, `_95_`, `_96_`, `_97_`, `_98_`, `_99_`, `_100_`, `_101_`, `_102_`, `_103_`, `_104_`, `_105_`, `_106_`, `_107_`, `_108_`, `_109_`, `_110_`, `_111_`, `_112_`, `_113_`, `_114_`, `_115_`, `_116_`, `_117_`, `_118_`, `_119_`, `_120_`, `_121_`, `_122_`, `_123_`, `_124_`, `_125_`, `_126_`, `_127_`, `_128_`, `_129_`, `_130_`, `other_activities`, `sprs_name`, `sprs_designation`, `created_date`) VALUES (null,";
            $('#sprs-div table tr td[contenteditable="true"]').each(function(e) {
                var cellText = $(this).html();
                if ( cellText.trim() != '' ){
                    console.log(cellText);
                    var res = "'"+cellText.trim()+"',";
                    fields.push(res);
                    sql += res;
                }
            });
            sql += "'"+other_activities+"',";
            sql += "'"+sprs_name+"',";
            sql += "'"+sprs_designation+"',";
            sql += "'"+date+"')";
            console.log(sql);
            if(fields.length==130 && other_activities!='' && sprs_name!='' && sprs_designation!='') {
                $.ajax({
                    type : 'POST',
                    url : api_url+'/admin/add-sprs',
                    data : { sql : sql},
                    success : function(res) {
                        console.log('res ',res);
                        if(res.errorCode == 0) {
                            swal("Insert SPRS", res.successMsg, "success")
                            .then((value) => {
                                location.reload();
                            });
                        } else {
                            swal("Insert SPRS", res.errorMsg, "error");      
                        }
                    }
                });                      
            }
            else {
                swal("Insert SPRS",'Some fields are empty', "error");                
            }
        },
        saveLMI : function() {
            
            var fields = [],
                d = new Date(),
                date = d.getMonth()+'/'+d.getDate()+'/'+d.getFullYear();
            var sql ="INSERT INTO `admin_lmi_report`(`ID`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `created_date`) VALUES (null,";
            // [value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14],[value-15],[value-16],[value-17],[value-18],[value-19])";
            $('.txt').each(function(e) {
                var val = $(this).val();
                if ( val.trim() != '' ){
                    console.log(val);
                    var res = "'"+val.trim()+"',";
                    sql += res;
                }
            });
            sql += "'"+date+"')";
            console.log(sql);
            if($('.txt').length==17) {
                $.ajax({
                    type : 'POST',
                    url : api_url+'/admin/add-sprs',
                    data : { sql : sql},
                    success : function(res) {
                        console.log('res ',res);
                        if(res.errorCode == 0) {
                            swal("Insert LMI", res.successMsg, "success")
                            .then((value) => {
                                location.reload();
                            });
                        } else {
                            swal("Insert LMI", res.errorMsg, "error");      
                        }
                    }
                });                      
            }
            else {
                swal("Insert SPRS",'Some fields are empty', "error");                
            }
        },
        printDiv : function(id,title) {
            var d = new Date();
            var date = d.getMonth()+'/'+d.getDate()+'/'+d.getFullYear();
            var data=document.getElementById(id).innerHTML;
            var myWindow = window.open('', 'my div', "width="+screen.availWidth+",height="+screen.availHeight);
            myWindow.document.write('<html><head><title></title>');
            /*optional stylesheet*/ //myWindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
            myWindow.document.write('</head><body >');
            myWindow.document.write('<br/><center><h4>'+title+' - '+date+'</h4></center><br/><br/>'+data);
            myWindow.document.write('</body></html>');
			myWindow.print();
            myWindow.document.close(); // necessary for IE >= 10

            myWindow.onload=function(){ // necessary if the div contain images

                myWindow.focus(); // necessary for IE >= 10
                myWindow.print();
                myWindow.close();
            };
        }
    }
    admin.init();