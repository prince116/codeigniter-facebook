import $ from "jquery";
import _fb from "./facebook_sdk"

$(function(){

    _fb.init();

    $('#btn-login').click(function(){
        _fb.getLoginStatus(function(response){
            console.log(response);
        },function(response){
            alert('fail');
        });
    });


});