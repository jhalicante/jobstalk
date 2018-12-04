(function ($) {
    "use strict";

    var app = {
        init : function() {
            this.eventListener();
        },
        eventListener : function() {
            $(document).on('click', '.btn-edit-career', function(e) {
                app.updateCareerObjective(objective_content);
            });

            $(document).on('click', '.show-new-experience-view', function(e){
                $('.new-experience-view').removeClass('hide');
            });
            $(document).on('click', '.hide-new-experience-view', function(e){
                $('.new-experience-view').addClass('hide');
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