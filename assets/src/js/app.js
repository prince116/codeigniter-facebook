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


    _fb.getLoginStatus(function(){
        _fb.api('/me', 'GET', {fields: 'id, gender, link, name, first_name, last_name'}, function(response){
            console.log(response);
        });
    }, function(){
        alert('fail');
    });

});