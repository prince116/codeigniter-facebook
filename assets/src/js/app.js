import $ from "jquery";
import _fb from "./facebook_sdk"

$(function(){

    _fb.init();

    console.log( _fbAsyncInitDeferred );

    $('#btn-login').click(function(){
        _fbAsyncInitDeferred.done(function(){
            FB.getLoginStatus(function(response){
                console.log(response);
            });
        });
    });

    console.log("Hello World! 2");


});