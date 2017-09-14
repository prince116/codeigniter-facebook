function init(){
    
    window._fbAsyncInitDeferred = $.Deferred();
    window.fbAsyncInit = function() {
        FB.init({
            appId            : '275397639638870',
            autoLogAppEvents : true,
            xfbml            : true,
            version          : 'v2.10'
        });

        _fbAsyncInitDeferred.resolve();
    };
    
    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

}

function getLoginStatus(successCallback, failCallback){
    _fbAsyncInitDeferred.done(function(){
        FB.getLoginStatus(function(response){
            if( response.status == 'connected' ){
                if( successCallback instanceof Function )
                    successCallback(response);
            } else {
                if( failCallback instanceof Function )
                    failCallback(response);
            }
        });
    });
}

function login(callback){
    _fbAsyncInitDeferred.done(function(){
        FB.login(callback);
    });
}

function api(path, method, params, callback){

    _fbAsyncInitDeferred.done(function(){
        FB.api(path, method, params, callback);
    });

}

export default {
    init: init,
    getLoginStatus: getLoginStatus,
    api: api
}
