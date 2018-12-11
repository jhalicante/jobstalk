(function ($) {
    "use strict";

    var findJob = {
        init : function() {
            this.eventListener();

            var location = findJob.getUrlParameter('location');
            var position = findJob.getUrlParameter('position');
            if(location != 'undefined' || position != 'undefined') {
                findJob.fetchFindJob({
                    position: position, location: location
                });
            } 
            else {
                findJob.fetchFindJob({
                    position: '', location: ''
                });
            }

        },
        eventListener : function() {
            /* Find Job */
            $("#find-job-form").submit(function(e){
                e.preventDefault();
                findJob.fetchFindJob({
                    position: $('.position-input').val(), location: $('.location-input').val()
                });
            });

            $(document).on('click', '.send-resume', function(e) {
                e.preventDefault();
                if(auth.getCookie('role') != null ) {
                    if(auth.getCookie('role') == 'applicant') {
                        var formData = {
                            applicant_id: auth.getCookie('user_id'),
                            job_id : $(this).attr('job-id'),
                            employer_id : $(this).attr('employer-id')
                        }
                        findJob.applyJob(formData);
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
        fetchFindJob : function(formData) {
            $('.searched-job-lists').html('');
            $.ajax({
                type : 'POST',
                url : api_url+'/job/find-job',
                data : formData,
                success : function(res) {
                    console.log('res ',res);
                    if(res.errorCode == 0) {
                        var res = res.response;
                        $('.search-results-count').html(res.length);
                        for (let i = 0; i < res.length; i++) {
                            var markup = '<div class="blog-list flex no-wrap find-job-item">';
                                    markup += '<div class="left-side">';
                                        markup += '<img src="'+asset_url+'assets/uploaded/'+res[i].com_logo+'" alt="blog-post-featured-img" class="img-responsive">';
                                    markup += '</div>';
                                    markup += '<div class="right-side">';
                                    markup += '<h2 class="dark">'+res[i].position+'</h2>';
                                        markup += '<div class="news-meta flex no-column">';
                                            markup += '<h6>'+res[i].com_name+'</h6>';
                                            markup += '<h6>'+res[i].job_type+'</h6>';
                                            markup += '<h6 class="publish-date">'+res[i].created_date+'</h6>';
                                        markup += '</div>';
                                        markup += '<div class="news-meta flex no-column">';
                                            markup += '<h6>'+res[i].course_name+'</h6>';
                                        markup += '</div>';
                                        markup += '<div class="news-meta flex no-column">';
                                            markup += '<h6>Required Experience: '+res[i].years_experience+' yr(s) '+res[i].months_experience+' (mons)</h6>';
                                        markup += '</div>';
                                        markup += '<div class="news-meta flex no-column">';
                                            markup += '<h6>'+res[i].com_address+'</h6>';
                                        markup += '</div>';
                                        markup += '<p><b>Job Description:</b> <br/>'+res[i].description+'</p>';
                                        markup += '<a href="job-details?job-id='+res[i].job_id+'" class="button">View Details</a>&nbsp;';
                                        if(auth.getCookie('role') == 'applicant') {
                                            markup += '<a href="" class="button linkedln-btn send-resume" employer-id="'+res[i].user_id+'" job-id="'+res[i].job_id+'">Send Resume</a>';
                                        }
                                    markup += '</div>';
                                markup += '</div>';
                            $('.searched-job-lists').append(markup);
                        }
                    } else {
                        $('.searched-job-lists').append('<h3>No results found</h3>');
                    }
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
        getUrlParameter : function(sParam) {
            var sPageURL = decodeURIComponent(window.location.search.substring(1)),
                sURLVariables = sPageURL.split('&'),
                sParameterName,
                i;
        
            for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split('=');
        
                if (sParameterName[0] === sParam) {
                    return sParameterName[1] === undefined ? true : sParameterName[1];
                }
            }
        }
    }

    findJob.init();

})(jQuery)