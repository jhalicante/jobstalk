(function ($) {
    "use strict";

    var app = {
        init : function() {
            this.eventListener();
            auth.clearErrorMsg();
        },
        eventListener : function() {
            $(document).on('click', '.btn-signin', function(e) {
                var email_address = $('.signin-email-address').val(),
                    password = $('.signin-password').val();

                if(email_address != '' && password != '') {
                    app.signin(email_address, password);
                } 
                else {
                    $('.signin-error-message').html('Some fields are empty');
                }
            });
        },
        signin : function(email_address, password) {
            $.ajax({
                type : 'POST',
                url : api_url+'/signin',
                data : {
                    email_address : email_address,
                    password : password
                },
                success: function(res) {
                    console.log(res);
                    if(res.errorCode ==0) {
                        auth.setCookie('user_id', res.response.user_id, 7);
                        auth.setCookie('role', res.response.role, 7);
                        location.href='account';
                    } 
                    else {
                        $('.signin-error-message').html(res.errorMsg);
                    }
                }
            });
        },
    }


    var auth = {
        clearErrorMsg : function() {
            $(document).on('keyup', '.signin-email-address, .signin-password', function(e) {
                $('.signin-error-message').text('');
                e.preventDefault();
            });
        },
        setCookie : function(name,value,days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days*24*60*60*1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "")  + expires + "; path=/";
        },
        getCookie : function(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for(var i=0;i < ca.length;i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1,c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
            }
            return null;
        },
        eraseCookie: function(name) {   
            document.cookie = name+'=; Max-Age=-99999999;';  
        }
        
    }

    app.init();

})(jQuery)