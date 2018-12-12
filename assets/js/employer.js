
var employer = {
    init : function() {
        this.eventListener();
    },
    eventListener : function() {
        $('#print-joblist-table').DataTable( {
            dom: 'lBfrtip',
            buttons: [
                {
                    extend: 'print',
                    messageTop: 'Job lists with candidate applied'
                }
            ]
        });
        $('#placement-report-table').DataTable( {
            dom: 'lBfrtip',
            buttons: [
                {
                    extend: 'print',
                    messageTop: 'Company Placement Report'
                }
            ]
        });

        $(document).on('click','.jobinfo-show-modal', function(e){
            var job_id = $(this).attr('job_id');
            $('#employer-view-job-information').modal('show');
            $('.employer-view-job-information-loading').css('display','block');
            console.log('jobid ', job_id);
            $.ajax({
                type : 'POST',
                url : api_url+'/employer/get-job-information',
                data : {job_id: job_id},
                success : function(res) {
                    console.log('res ',res);                        
                    $('.employer-view-job-information-loading').css('display','none');
                    $('.employer-view-job-information-content').css('display','block');    
                    if(res.errorCode == 0) {
                        $('.view-logo').attr('src',asset_url+'assets/uploaded/'+res.response.com_logo);
                        $('.view-company-name').val(res.response.com_name);
                        $('.view-position').val(res.response.position);
                        $('.view-req-course').val(res.response.course_name);
                        $('.view-req-industry').val(res.response.job_industry);
                        $('.view-years-experience').val(res.response.years_experience+' year(s)');
                        $('.view-months-experience').val(res.response.months_experience+' month(s)');
                        $('.view-job-type').val(res.response.job_type);
                        $('.view-address').val(res.response.com_address);
                        $('.view-job-desc').val(res.response.description);
                    } 
                    else {
                        swal("Unable to fetch data", res.errorMsg, "error");
                    }
                }
            });
        });
            


        $(document).on('click','.candidates-show-modal', function(e){
            var job_id = $(this).attr('job_id'),
                years_exp = $(this).attr('years-exp'),
                months_exp = $(this).attr('months-exp');
            $('#employer-view-candidates-applied').modal('show');
            $('.employer-view-candidates-loading').css('display','block');
            $('.employer-view-candidates-lists').html('');
            
            console.log('jobid ', job_id);
            $.ajax({
                type : 'POST',
                url : api_url+'/employer/get-job-candidates-applied',
                data : {job_id: job_id},
                success : function(res) {
                    $('.employer-view-candidates-loading').css('display','none');
                    $('.employer-view-candidates-content').css('display','block');
                    console.log('res ',res);
                    if(res.errorCode == 0) {
                        var res = res.response;
                        var experience_count = '';
                        for (let i = 0; i < res.length; i++) { 

                            var year_count = 0,
                            month_count =0;

                            console.log('res ',res[i][0]);
                            
                            var explen = res[i][0].length;

                            for (let x = 0; x <= explen; x++) {

                                 
                                 try {
                                    console.log('year = ', res[i][0][x]["year"]); 
                                    var years = JSON.parse(res[i][0][x].year),
                                        months = JSON.parse(res[i][0][x].months),
                                        addedMonths = month_count + months;

                                    year_count = year_count + years;
                                    month_count = month_count + months;
                                    // if( addedMonths >= 12  ) {
                                    //     var sliced = res[i][0][x]["month"]
                                    //     year_count = 
                                    //     month_count = month_count + res[i][0][x]["month"];                                        
                                    // }
                                 } catch (error) {
                                    break;
                                 }

                                // var fromDate = '2010-01-01';
                                // var toDate = '2018-01-01';
                                // try {
                                
                                //     var result = employer.getDateDifference(new Date(fromDate), new Date(toDate));
                                //     console.log('results ', result);
                                
                                //     if (result && !isNaN(result.years)) {
                                //         experience_count =
                                //             result.years + ' year' + (result.years == 1 ? ' ' : 's ') +
                                //             result.months + ' month' + (result.months == 1 ? ' ' : 's ') + 'and ' +
                                //             result.days + ' day' + (result.days == 1 ? '' : 's');
                                //     }
                                // } catch (e) {
                                //     console.error(e);
                                // }
                                
                            }
                            var markup = '<tr>';
                                    markup += '<td>'+(i+1)+'</td>';                                
                                    markup += '<td>'+res[i].fname+' '+res[i].mname+' '+res[i].lname+'</td>';
                                    markup += '<td>'+res[i].date_applied+'</td>';
                                    markup += '<td>'+year_count+'yrs & '+month_count+'mons</td>';
                                    markup += '<td>'+res[i].date_applied+'</td>';
                                    if(years_exp <  year_count) {
                                        markup += '<td><mark>Qualified</mark></td>';
                                    } else {
                                        markup += '<td><mark>Not Qualified</mark></td>';
                                    }
                                    markup += '<td>'+res[i].application_status+'</td>';
                                    markup += '<td><a href="?applicant-profile='+res[i].user_id+'">View Profile</a></td>';
                                markup += '</tr>';
                                year_count=0;
                                month_count=0;
                            $('.employer-view-candidates-lists').append(markup);
                        }
                    } 
                    else {
                        swal("Unable to fetch data", res.errorMsg, "error");
                    }
                }
            });
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
            console.log('test');
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

        /* Post a new Job */
        $("#post-a-new-job").submit(function(e){
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
                url : api_url+'/employer/add-job',
                data : formData,
                contentType : false,
                cache       : false,
                processData : false,
                success : function(res) {
                    console.log('res ',res);
                    if(res.errorCode == 0) {
                        location.href='?active-tab=jobslist-tab';
                    } else {
                        swal("Profile Completion", res.errorMsg, "error");                            
                    }
                }
            });
        });


        /* Add Placement Report */
        $("#add-placement-report").submit(function(e){
            e.preventDefault();                
            var formData = new FormData($(this)[0]);
            $.ajax({
                type : 'POST',
                url : api_url+'/employer/add-placement-report',
                data : formData,
                contentType : false,
                cache       : false,
                processData : false,
                success : function(res) {
                    console.log('res ',res);
                    if(res.errorCode == 0) {
                        location.href='?active-tab=jobslist-tab';
                    } else {
                        swal("Profile Completion", res.errorMsg, "error");                            
                    }
                }
            });
        });

    },
    getDateDifference : function(startDate, endDate) {
        if (startDate > endDate) {
            console.error('Start date must be before end date');
            return null;
        }
        var startYear = startDate.getFullYear();
        var startMonth = startDate.getMonth();
        var startDay = startDate.getDate();
        
        var endYear = endDate.getFullYear();
        var endMonth = endDate.getMonth();
        var endDay = endDate.getDate();
        
        // We calculate February based on end year as it might be a leep year which might influence the number of days.
        var february = (endYear % 4 == 0 && endYear % 100 != 0) || endYear % 400 == 0 ? 29 : 28;
        var daysOfMonth = [31, february, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        
        var startDateNotPassedInEndYear = (endMonth < startMonth) || endMonth == startMonth && endDay < startDay;
        var years = endYear - startYear - (startDateNotPassedInEndYear ? 1 : 0);
        
        var months = (12 + endMonth - startMonth - (endDay < startDay ? 1 : 0)) % 12;
        
        // (12 + ...) % 12 makes sure index is always between 0 and 11
        var days = startDay <= endDay ? endDay - startDay : daysOfMonth[(12 + endMonth - 1) % 12] - startDay + endDay;
        
        return {
            years: years,
            months: months,
            days: days
        };
    }
}

employer.init();