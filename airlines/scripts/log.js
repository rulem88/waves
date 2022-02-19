$(document).ready(function(){
    $( '.logup-div' ).toggle();
    $( '.login-div' ).toggle();
    $( '.log-up-login-psw' ).toggle();
})
function log_in(){
    $( '.main-frame-log' ).toggle();
    $( '.login-div' ).toggle();
}
function log_up(){
    $( '.main-frame-log' ).toggle();
    $( '.logup-div' ).toggle();
}
function back_log_in(){
    $( '.main-frame-log' ).toggle();
    $( '.login-div' ).toggle();
    $("#log_up_1").removeClass("wrong_enter_red_light");
    $("#log_up_2").removeClass("wrong_enter_red_light");
    $("#log_up_3").removeClass("wrong_enter_red_light");
    $("#log_up_4").removeClass("wrong_enter_red_light");
    $("#log_in_1").removeClass("wrong_enter_red_light");
    $("#log_in_2").removeClass("wrong_enter_red_light");
    $( '#log_in_1' ).val("");
    $( '#log_in_2' ).val("");

}
function back_log_up(){
    $( '.main-frame-log' ).toggle();
    $( '.logup-div' ).toggle();
    $("#log_up_1").removeClass("wrong_enter_red_light");
    $("#log_up_2").removeClass("wrong_enter_red_light");
    $("#log_up_3").removeClass("wrong_enter_red_light");
    $("#log_up_4").removeClass("wrong_enter_red_light");
    $("#log_in_1").removeClass("wrong_enter_red_light");
    $("#log_in_2").removeClass("wrong_enter_red_light");
}
function back_log_up_lg_psw(){
    $( '.logup-div' ).toggle();
    $( '.log-up-login-psw' ).toggle();
    $("#log_up_1").removeClass("wrong_enter_red_light");
    $("#log_up_2").removeClass("wrong_enter_red_light");
    $("#log_up_3").removeClass("wrong_enter_red_light");
    $("#log_up_4").removeClass("wrong_enter_red_light");
    $("#log_in_1").removeClass("wrong_enter_red_light");
    $("#log_in_2").removeClass("wrong_enter_red_light");
}
function next_btn(){
    var l_1 = $("#log_up_1").val();
    var l_2 = $("#log_up_2").val();
    var l_3 = $("#log_up_3").val();
    var l_4 = $("#log_up_4").val();

    var prka_email = new RegExp('^[a-zA-Z{1,25}][@][a-z{3,8}][.][a-z{1,3}]$');
    
    if ((l_1 == "")||(l_2 == "")||(l_3 == "")||(l_4 == "")){
        
        if (l_1 == ""){
            $("#log_up_1").addClass("wrong_enter_red_light");
        } if (l_2 == ""){
            $("#log_up_2").addClass("wrong_enter_red_light");
        } if(l_3 == "") {
            $("#log_up_3").addClass("wrong_enter_red_light");
        } if (l_4 == "") {
            $("#log_up_4").addClass("wrong_enter_red_light");
        } if (l_1 != ""){
            $("#log_up_1").removeClass("wrong_enter_red_light");
        } if (l_2 != ""){
            $("#log_up_2").removeClass("wrong_enter_red_light");
        } if(l_3 != "") {
            $("#log_up_3").removeClass("wrong_enter_red_light");
        } if (l_4 != "") {
            $("#log_up_4").removeClass("wrong_enter_red_light");
        }
    }
    else {
        $( '.logup-div' ).toggle();
        $( '.log-up-login-psw' ).toggle();
        $( '#hdn_first_name' ).val(l_1);
        $( '#hdn_second_name' ).val(l_2);
        $( '#hdn_bday' ).val(l_3);
        $( '#hdn_email' ).val(l_4);
        $( '#hdn_unique' ).val("up");
        
    }
    
}
function finish_log_in(){
    var login = $( '#log_in_1' ).val();
    var password = $( '#log_in_2' ).val();
    if ((login == "")&&(password == "")){
        $( '#log_in_1' ).addClass("wrong_enter_red_light");
        $( '#log_in_2' ).addClass("wrong_enter_red_light");
        $( '#hdn_unique' ).val("error");
    }
    else if (login == ""){
        $( '#log_in_1' ).addClass("wrong_enter_red_light");
        $( '#log_in_2' ).removeClass("wrong_enter_red_light");
        $( '#hdn_unique' ).val("error");
    } else if(password == ""){
        $( '#log_in_1' ).removeClass("wrong_enter_red_light");
        $( '#log_in_2' ).addClass("wrong_enter_red_light");
        $( '#hdn_unique' ).val("error");
        
    } else{
        $( '#log_in_1' ).removeClass("wrong_enter_red_light");
        $( '#log_in_2' ).removeClass("wrong_enter_red_light");
        $( '#hdn_login' ).val(login);
        $( '#hdn_password' ).val(password);
        $( '#hdn_unique' ).val("in");
        
    }
}
function finish_log_up(){
    var login = $( '#log_up_login' ).val();
    var password = $( '#log_up_password' ).val();
    alert(login);
    alert(password);

    if ((login == "")&&(password == "")){
        $( '#log_up_login' ).addClass("wrong_enter_red_light");
        $( '#log_up_password' ).addClass("wrong_enter_red_light");
        $( '#hdn_unique' ).val("error");
    }
    else if (login == ""){
        $( '#log_up_login' ).addClass("wrong_enter_red_light");
        $( '#log_up_password' ).removeClass("wrong_enter_red_light");
        $( '#hdn_unique' ).val("error");
    } else if(password == ""){
        $( '#log_up_login' ).removeClass("wrong_enter_red_light");
        $( '#log_up_password' ).addClass("wrong_enter_red_light");
        $( '#hdn_unique' ).val("error");
        
    } else{
        $( '#log_up_login' ).removeClass("wrong_enter_red_light");
        $( '#log_up_password' ).removeClass("wrong_enter_red_light");
        $( '#hdn_login' ).val(login);
        $( '#hdn_password' ).val(password);
    }
}