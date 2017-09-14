import $ from "jquery";
import _fb from "./facebook_sdk"

$(function(){

    _fb.init();

    $('#btn-login').click(function(){
        /* _fb.getLoginStatus(function(response){
            console.log(response);
        },function(response){
            alert('fail');
        }); */

        _fb.login(function(response){
            $.ajax({
                method: "POST",
                url: "https://"+window.location.hostname+"/form/create/",
                dataType: "JSON"
              })
                .done(function( msg ) {
                  console.log(msg);
                });
        });
    });


    /* _fb.getLoginStatus(function(){
        _fb.api('/me', 'GET', {fields: 'id, gender, link, name, first_name, last_name'}, function(response){
            if( !response.error ){
                $('#fb_id').val(response.id);
                $('#last_name').val(response.last_name);
                $('#first_name').val(response.first_name);
                $('#name').val(response.name);
                $('#link').val(response.link);
                
                if( response.gender === 'male' )
                    $('input[name="gender"][value="Male"]').prop('checked', true);
                else if( response.gender === 'female' )
                    $('input[name="gender"][value="Female"]').prop('checked', true);


                $.ajax({
                    method: "POST",
                    url: "https://"+window.location.hostname+"/form/create/",
                    dataType: "JSON"
                  })
                    .done(function( msg ) {
                      console.log(msg);
                    });

            }
        });
    }, function(){
        alert('fail');
    }); */

});