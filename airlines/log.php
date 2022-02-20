<!DOCTYPE html>

<html>
    <head>
        <meta charset='utf-8'>
        <title>Waves</title>
        <link rel="stylesheet" href="style.css">
        <script src='scripts/jquery.js'></script>
        <style>
            body{
    background-color: #fff;
    top: -5px;
    width: 100%;
}

a{
    text-decoration: none;
    color: black;
}

.span-header-style{
    font-size: 48px;
    font-weight: bold;
    position: absolute;
    top: 5px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

.shapka-settings{
    width: auto;
    top: 0px;
    background-color: #eeef;
    height: 50px;
    border: 0px;
    border-radius: 0 10px 10px 0;
}

.content-verst{
    height: 455px;
    width: 1300px;
    text-align: center;
    margin-top: 250px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: auto;
    background-color:#eeef;
}

.content-pic-pos-1st-line{
    position: absolute;
    height: 200px;
    width: 1300px;
    margin-top: 20px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: auto;
    border: 0px;
    border-radius: 15px;
}

.content-pic-pos-2st-line{
    position: absolute;
    height: 200px;
    width: 1300px;
    margin-top: 215px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: auto;
}

.element::-webkit-scrollbar {
    width: 0;
  }

  ::-webkit-scrollbar {
    width: 0;
  }

.login{
    position: absolute;
    top: 17px;
    right: 10px;
    width: 50px;
    height: 30px;
}
.icons{
    width: 30px;
    height: 30px;
}
.log-link{
    text-decoration: none;
}
.main-frame-log{
    background-color: rgb(235, 233, 233);
    width: 600px;
    height: 230px;
    left: 800px;
    margin-top: 300px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: auto;
    text-align: center;
}
.sign-in-btn{
    position: relative;
    top: 24px;
    background-color: #ccc;
    border: 0px solid;
    border-radius: 15px;
    font-size: 40px;
    font-family: Arial, Helvetica, sans-serif;
    cursor: pointer;
}
.sign-in-btn:hover{
    background-color: #cff;
    transition: 0.3s;
}
.sign-up-btn{
    position: relative;
    top: 44px;
    background-color: #ccc;
    border: 0px solid;
    border-radius: 15px;
    font-size: 40px;
    font-family: Arial, Helvetica, sans-serif;
    cursor: pointer;
}
.sign-up-btn:hover{
    background-color: #cff;
    transition: 0.3s;
}
.back-btn{
    position: relative;
    top: 64px;
    background-color: #ccc;
    border: 0px solid;
    border-radius: 15px;
    font-size: 40px;
    font-family: Arial, Helvetica, sans-serif;
    text-decoration: none;
    color: black;
    cursor: pointer;
}
.back-btn:hover{
    background-color: #cff;
    transition: 0.3s;
}
.login-div{
    background-color: rgb(235, 233, 233);
    width: 600px;
    height: 230px;
    left: 800px;
    margin-top: 300px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: auto;
    text-align: center;
}
.logup-div{
    background-color: rgb(235, 233, 233);
    width: 600px;
    height: 230px;
    left: 800px;
    margin-top: 300px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: auto;
    text-align: center;
}
.loginup-back-btn{
    position: relative;
    bottom: 0px;
    background-color: #ccc;
    width: 120px;
    margin: auto auto;
    border: 0px;
    border-radius: 5px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
    top: 125px;
    left: 60px;
    cursor: pointer;
}
.loginup-back-btn:hover{
    background-color: #cff;
    transition: 0.3s;
}
.loginup-back-btn-2{
    position: relative;
    background-color: #ccc;
    width: 120px;
    margin: 0 0;
    border: 0px;
    border-radius: 5px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
    top: 60px;
    left: 300px;
    cursor: pointer;
}
.loginup-back-btn-2:hover{
    background-color: #cff;
    transition: 0.3s;
}
.login-login-enter-bar{
    position: relative;
    margin: auto auto;
    top: 45px;
    left: 12px;

}
.login-password-enter-bar{
    position: relative;
    margin: auto auto;
    top: 65px;
    
}
.h1_sign_up_in{
    background-color: #ccc;
    border: 0px solid;
    font-size: 25px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bolder;
}
#input{
    border: 0px;
    background-color: #ccc;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
    cursor: pointer;
}
.log_in_btn{
    position: relative;
    background-color: #ccc;
    width: 120px;
    margin: 0 0;
    border: 0px;
    border-radius: 5px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
    top: 105px;
    left: 175px;
    cursor: pointer;
}
.log_in_btn:hover{
    background-color: #cff;
    transition: 0.3s;
}
#input:hover{
    background-color: #cff;
    transition: 0.3s;
}
.log-up-login-psw{
    background-color: rgb(235, 233, 233);
    width: 600px;
    height: 230px;
    left: 800px;
    margin-top: 300px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: auto;
    text-align: center;
}
.log_up_user_1stname_enter_bar{
    position: relative;
    top: 20px;
    left: 9px;
}
.log_up_user_2ndname_enter_bar{
    position: relative;
    top: 30px;
}
.log_up_user_bday_enter_bar{
    position: relative;
    top: 40px;
    left: 4px;
}
.log_up_user_email_enter_bar{
    position: relative;
    top: 50px;
    left: 25px;
}
.next-log-up-btn{
    position: relative;
    background-color: #ccc;
    width: 120px;
    margin: 0 0;
    border: 0px;
    border-radius: 5px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
    top: 80px;
    left: 175px;
    cursor: pointer;
}
.next-log-up-btn:hover{
    background-color: #cff;
    transition: 0.3s;
}

.wrong_enter_red_light{
    background-color: rgb(230, 67, 67);
}
.back_to_index{
    position: absolute;
    height: 30px;
    width: 180px;
    top: 17px;
    right: 20px;
    text-align: center;
    font-size: 18px;
    font-weight: bolder;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    border: 0px;
    border-radius: 12px;
    cursor: pointer;
}
.back_to_index:hover{
    background-color: #cff;
    transition: 0.3s;
}
.bck_text{
    position: relative;
    top: 3px;
}
.div_4_offers{
    position: relative;
    top: 80px;
    background-color: #eeef;
    height: 350px;
    width: 1000px;
    margin: auto auto;
    border: 0px;
    border-radius: 10px;
}
.div_4_pic{
    position: relative;
    margin: auto 0;
    background-color: #ccc;
    height: 200px;
    width: 400px;
    top: 35px;
    left: 15px;
}
.div_4_h1{
    position: absolute;
    height: 80px;
    width: 500px;
    top: 35px;
    right: 40px;
    text-align: center;
    font-size: 60px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-weight: bolder;
}   
.div_4_info{
    position: absolute;
    height: 45px;
    width: 500px;
    right: 40px;
    top: 135px;
    background-color: #ccc;
    text-align: center;
}
.div_4_comp{
    position: absolute;
    top: 195px;
    right: 195px;
    height: 20px;
    width: 200px;
    background-color: #ccc;
    text-align: center;
    font-weight: bold;
    border: 0px;
    border-radius: 10px;
}
.div_4_button{
    position: absolute;
    background-color: #ccc;
    bottom: 25px;
    height: 40px;
    width: 180px;
    right: 400px;
    border: 0px;
    border-radius: 10px;
    cursor: pointer;
}
.div_4_button:hover{
    background-color: #cff;
    transition: 0.3s;
}
.buy_button{
    position: absolute;
    top: 2px;
    left: 65px;
    font-size: 28px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-weight: bolder;
}
        </style>
        <script>
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
        </script>
    </head>
    <body>
       <?php include("blocks/header.php");?>
        <form action="accessing.php" method="post">
            <div class='main-frame-log'>
                <div class='sign-in-btn' onclick='log_in();'>
                    Sign in
                </div>
                <div class='sign-up-btn' onclick='log_up();'>
                    Sign up
                </div>
                <a href='index.php'>
                    <div class='back-btn'>
                        Back
                    </div>
                </a>
            </div>
            <div class='login-div'>
                
                    <div class='h1_sign_up_in'>Sign in</div>
                    <div class='login-login-enter-bar'>
                        Login
                        <input type="text" name="login_login" id="log_in_1">
                    </div>
                    <div class='login-password-enter-bar'>
                        Password
                        <input type="password" name="login_password" id="log_in_2">
                    </div>
                    <div class='loginup-back-btn' onclick='back_log_in();'>
                        Back
                    </div>
                    <div class="log_in_btn">
                        <input type="submit" value="Sigh in" id="input" onclick="finish_log_in();">
                    </div>
                
            </div>
            <div class='logup-div'>
                <div class='h1_sign_up_in'>Sign up</div>

                <div class="log_up_user_1stname_enter_bar">
                    First name
                    <input type="text" name="log_up_first_name" id="log_up_1">
                </div>

                <div class="log_up_user_2ndname_enter_bar">
                    Second name
                    <input type="text" name="log_up_second_name" id="log_up_2">
                </div>
                
                <div class="log_up_user_bday_enter_bar">
                    Birthday
                    <input type="date" name="log_up_date" id="log_up_3">
                </div>

                <div class="log_up_user_email_enter_bar">
                    Email
                    <input type="text" name="log_up_email" id="log_up_4">
                </div>
                
                <div class="next-log-up-btn" onclick="next_btn();">Next</div>
                
                <div class='loginup-back-btn-2' onclick='back_log_up();'>
                    Back
                </div>
            </div>
            <div class="log-up-login-psw">
                
                    <div class="h1_sign_up_in">Create login and password</div>
                    <div class='login-login-enter-bar'>
                        Login
                        <input type="text" name='log_up_login' id='log_up_login'>
                    </div>
                    <div class='login-password-enter-bar'>
                        Password
                        <input type="password" name='log_up_password' id='log_up_password'>
                    </div>
                    <div class='loginup-back-btn' onclick='back_log_up_lg_psw();'>
                        Back
                    </div>
                    <div class="log_in_btn">
                        <input type="submit" value="Sigh up" id="input" onclick='finish_log_up();'>
                    </div>
                
            </div>
            <input type="hidden" name="hdn_login" id="hdn_login" value="0">
            <input type="hidden" name="hdn_password" id="hdn_password" value="0">
            <input type="hidden" name="hdn_first_name" id="hdn_first_name" value="0">
            <input type="hidden" name="hdn_second_name" id="hdn_second_name" value="0">
            <input type="hidden" name="hdn_bday" id="hdn_bday" value="0">
            <input type="hidden" name="hdn_email" id="hdn_email" value="0">
            <input type="hidden" name="hdn_unique" id="hdn_unique" value="0">
        </form>
    </body>
</html>