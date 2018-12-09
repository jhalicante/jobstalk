(function ($) {
    "use strict";

    var findJob = {
        init : function() {
            this.eventListener();
            //  findJob.fetchFindJob({position:'',location:''})
        },
        eventListener : function() {  
            /* Find Job */
            $("#find-job-form").submit(function(e){
                e.preventDefault();                
                var formData = new FormData($(this)[0]);
                $('.searched-job-lists').html('');
                $.ajax({
                    type : 'POST',
                    url : api_url+'/job/find-job',
                    data : formData,
                    contentType : false,
                    cache       : false,
                    processData : false,
                    success : function(res) {
                        console.log('res ',res);
                        if(res.errorCode == 0) {
                            var res = res.response;
                            for (let i = 0; i < res.length; i++) {
                                var markup = '<div class="blog-list flex no-wrap find-job-item">';
                                        markup += '<div class="left-side">';
                                            markup += '<img src="'+asset_url+'assets/uploaded/'+res[i].com_logo+'" alt="blog-post-featured-img" class="img-responsive">';
                                        markup += '</div>';
                                        markup += '<div class="right-side">';
                                        markup += '<h2 class="dark">'+res[i].position+'</h2>';
                                            markup += '<div class="news-meta flex no-column">';
                                                markup += '<h6><a href="#0" class="news-author">Nancy watson</a></h6>';
                                                markup += '<h6 class="publish-date">20.02.2017</h6>';
                                                markup += '<h6><a href="#0" class="comment-count">5 comments</a></h6>';
                                            markup += '</div>';
                                            markup += '<p>'+res[i].description+'</p>';
                                            markup += '<button type="button" class="button">View Details</button>';
                                            markup += '<button type="button" class="button linkedln-btn">Send Resume</button>';
                                        markup += '</div>';
                                    markup += '</div>';
                                $('.searched-job-lists').append(markup);
                            }
                        } else {
                            $('.searched-job-lists').append('<h3>No results found</h3>');
                        }
                    }
                });
            });
        },
        fetchFindJob : function(params) {
            console.log(params);
            $.ajax({
                type : 'POST',
                url : api_url+'/job/find-job',
                data : params,
                contentType : false,
                cache       : false,
                processData : false,
                success : function(res) {
                    console.log('res ',res);
                    // if(res.errorCode == 0) {
                    //     location.href='?active-tab=jobslist-tab';
                    // } else {
                    //     swal("Profile Completion", res.errorMsg, "error");                            
                    // }
                }
            });
        }
    }

    findJob.init();

})(jQuery)