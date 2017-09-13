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

export default {
    init: init
}
