<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ADMIN_Waves</title>
        <link rel="stylesheet" href="style.css">
        <script src="scripts/jquery.js"></script>
        
        <script>
            $(document).ready(function(){
                $( '.manage-users-container' ).toggle();
                $( '.manage-airlines-container' ).toggle();
                $( '.create_new_user_frame' ).toggle();
                $( '.change_existing_user_frame' ).toggle();
                $( '.delete_user_frame' ).toggle();
                $( '.create_new_airline_frame' ).toggle();
                $( '.change_existing_airline_frame' ).toggle();
                $( '.delete_airline_frame' ).toggle();
            })
            function manage_users_frame(){
                $( '.manage-users-container' ).toggle();
                $( '.manage-main-container' ).toggle();
            }
            function manage_airlines_frame(){
                $( '.manage-airlines-container' ).toggle();
                $( '.manage-main-container' ).toggle();
            }
            function back_to_main_from_m_airlines(){
                $( '.manage-airlines-container' ).toggle();
                $( '.manage-main-container' ).toggle();
            }
            function back_to_main_from_m_users(){
                $( '.manage-users-container' ).toggle();
                $( '.manage-main-container' ).toggle();
            }
            function add_new_user(){
                $( '.manage-users-container' ).toggle();
                $( '.create_new_user_frame' ).toggle();
            }
            function change_existing_user(){
                $( '.manage-users-container' ).toggle();
                $( '.change_existing_user_frame' ).toggle();
            }
            function delete_user(){
                $( '.manage-users-container' ).toggle();
                $( '.delete_user_frame' ).toggle();
            }
            function add_new_airline(){
                $( '.manage-airlines-container' ).toggle();
                $( '.create_new_airline_frame' ).toggle();
            }
            function change_existing_airline(){
                $( '.manage-airlines-container' ).toggle();
                $( '.change_existing_airline_frame' ).toggle();
            }
            function delete_airline(){
                $( '.manage-airlines-container' ).toggle();
                $( '.delete_airline_frame' ).toggle();
            }
            function back_btn_from_optional_frame_1(){
                $( '.manage-users-container' ).toggle();
                $( '.create_new_user_frame' ).toggle();
                $( '#user1_1' ).val("");
                $( '#user1_2' ).val("");
                $( '#user1_3' ).val("");
                $( '#user1_4' ).val("");
                $( '#user1_5' ).val("");
                $( '#user1_6' ).val("");
            }
            function back_btn_from_optional_frame_2(){
                $( '.manage-users-container' ).toggle();
                $( '.change_existing_user_frame' ).toggle();
                $( '#user2_1' ).val("");
            }
            function back_btn_from_optional_frame_3(){
                $( '.manage-users-container' ).toggle();
                $( '.delete_user_frame' ).toggle();
                $( '#user3_1' ).val("");
            }
            function back_btn_from_optional_frame_4(){
                $( '.manage-airlines-container' ).toggle();
                $( '.create_new_airline_frame' ).toggle();
                $( '#airline1_1' ).val("");
                $( '#airline1_2' ).val("");
                $( '#airline1_3' ).val("");
                $( '#airline1_4' ).val("");
                $( '#airline1_5' ).val("");
            }
            function back_btn_from_optional_frame_5(){
                $( '.manage-airlines-container' ).toggle();
                $( '.change_existing_airline_frame' ).toggle();
                $( '#airline2_1' ).val("");
            }
            function back_btn_from_optional_frame_6(){
                $( '.manage-airlines-container' ).toggle();
                $( '.delete_airline_frame' ).toggle();
                $( '#airline3_1' ).val("");
            }
        </script>

        <style>
            a{
                color: black;
                text-decoration: none;
            }
            .manage-main-container{
                position: relative;
                height: 200px;
                width: 700px;
                background-color: #eee;
                margin: auto;
                top:250px;
            }
            .manage-users{
                position: relative;
                text-align: center;
                top: 25px;
                font-size: 24px;
                font-family: 'Franklin Gothic Medium';
                background-color: #ddd;
                cursor: pointer;
           }
           .manage-users:hover{
               background-color: #ccf;
               transition: 0.3s;
           }
            .manage-airlines{
                position: relative;
                text-align: center;
                top: 50px;
                font-size: 24px;
                font-family: 'Franklin Gothic Medium';
                background-color: #ddd;
                cursor: pointer;
            }
            .manage-airlines:hover{
                background-color: #ccf;
                transition: 0.3s;
            }
            .manage-exit-button{
                position: relative;
                text-align: center;
                top: 75px;
                font-size: 24px;
                background-color: #ddd;
                font-family: 'Franklin Gothic Medium';
            }
            .manage-exit-button:hover{
                background-color: #ccf;
                transition: 0.3s;
            }
            .manage-users-container{
                position: relative;
                height: 200px;
                width: 700px;
                background-color: #eee;
                margin: auto;
                top:250px;
            }
            .manage-airlines-container{
                position: relative;
                height: 200px;
                width: 700px;
                background-color: #eee;
                margin: auto;
                top:250px;
            }
            .h1-cont{
                position: relative;
                font-size: 24px;
                text-align: center;
                font-weight:bolder;
                background-color: #ccc;
            }
            .back-btn-admin{
                position: relative;
                font-size: 16px;
                text-align: center;
                font-weight:bolder;
                background-color: #ccc;
                top: 100px;
                cursor: pointer;
            }
            .back-btn-admin:hover{
                background-color: #ccf;
                transition: 0.3s;
            }
            .option-1{
                position: relative;
                top: 30px;
                width: 400px;
                margin: auto;
                border-radius: 5px;
                text-align: center;
                background-color: #ddd;
                cursor: pointer;
            }
            .option-1:hover{
                background-color: #ccf;
                transition: 0.3s;
            }
            .option-2{
                position: relative;
                top: 50px;
                width: 400px;
                margin: auto;
                border-radius: 5px;
                text-align: center;
                background-color: #ddd;
                cursor: pointer;
            }
            .option-2:hover{
                background-color: #ccf;
                transition: 0.3s;
            }
            .option-3{
                position: relative;
                top: 70px;
                width: 400px;
                margin: auto;
                border-radius: 5px;
                text-align: center;
                background-color: #ddd;
                cursor: pointer;
            }
            .option-3:hover{
                background-color: #ccf;
                transition: 0.3s;
            }
            .create_new_user_frame{
                position: relative;
                height: 200px;
                width: 700px;
                background-color: #eee;
                margin: auto;
                top:250px;
            }
            .change_existing_user_frame{
                position: relative;
                height: 200px;
                width: 700px;
                background-color: #eee;
                margin: auto;
                top:250px;
            }
            .delete_user_frame{
                position: relative;
                height: 200px;
                width: 700px;
                background-color: #eee;
                margin: auto;
                top:250px;
            }
            .create_new_airline_frame{
                position: relative;
                height: 200px;
                width: 700px;
                background-color: #eee;
                margin: auto;
                top:250px;
            }
            .change_existing_airline_frame{
                position: relative;
                height: 200px;
                width: 700px;
                background-color: #eee;
                margin: auto;
                top:250px;
            }
            .delete_airline_frame{
                position: relative;
                height: 200px;
                width: 700px;
                background-color: #eee;
                margin: auto;
                top:250px;
            }
            .back_btn_from_optional_frames{
                position: relative;
                width: 50px;
                background-color: #ddd;
                margin: auto;
                text-align: center;
                top:5px;
                cursor: pointer;
                font-weight: bolder;

            }
            .back_btn_from_optional_frames:hover{
                background-color: #ccf;
                transition: 0.3s;
            }
        </style>
    </head>
    <body>
        <?php include("blocks/header_admin.php"); ?>

        <form method="GET" action="admin_tools.php">
            <div class="manage-main-container">
                <div class="manage-users" onclick="manage_users_frame();">Manage users DB</div>
                <div class="manage-airlines" onclick="manage_airlines_frame();">Manage airlines DB</div> 
                <div class="manage-exit-button"><a href="index.php">Exit</a></div>
            </div>

            <div class="manage-users-container">
                <div class="h1-cont">Manage users DB</div>
                <div class="option-1" onclick="add_new_user();" >Add new user</div>
                <div class="option-2" onclick="change_existing_user();">Change existing user</div>
                <div class="option-3" onclick="delete_user();">Delete user</div>
                <div class="back-btn-admin" onclick="back_to_main_from_m_users();">Back</div>
            </div>

            <div class="manage-airlines-container">
                <div class="h1-cont">Manage airlines DB</div>
                <div class="option-1" onclick="add_new_airline();">Add new airline</div>
                <div class="option-2" onclick="change_existing_airline();">Change existing airline</div>
                <div class="option-3" onclick="delete_airline();">Delete airline</div>
                <div class="back-btn-admin"  onclick="back_to_main_from_m_airlines();">Back</div>
            </div>
            <div class="create_new_user_frame">
                <div class="h1-cont">Create  new user</div>
                <div>1st Name<input type="text" name="add_user_1name" id="user1_1"></div>
                <div>2nd Name<input type="text" name="add_user_2name" id="user1_2"></div>
                <div>Bday<input type="date" name="add_user_bday" id="user1_3"></div>
                <div>Email<input type="text" name="add_user_email" id="user1_4"></div>
                <div>Login<input type="text" name="add_user_login" id="user1_5"></div>
                <div>Password<input type="text" name="add_user_password" id="user1_6"></div>
                <div><input type="submit" value="OK"></div>
                <div class="back_btn_from_optional_frames" onclick="back_btn_from_optional_frame_1();">Back</div>
            </div>
            <div class="change_existing_user_frame">
                <div class="h1-cont">Change existing user</div>
                <div>Enter name, bday, email, login or password<input type="text" name="change_user_unit" id="user2_1"></div>
                <div><input type="submit" value="OK"></div>
                <div class="back_btn_from_optional_frames" onclick="back_btn_from_optional_frame_2();">Back</div>
            </div>
            <div class="delete_user_frame">
                <div class="h1-cont">Delete user</div>
                <div>Enter name, bday, email, login or password<input type="text" name="delete_user_unit" id="user3_1"></div>
                <div><input type="submit" value="OK"></div>
                <div class="back_btn_from_optional_frames" onclick="back_btn_from_optional_frame_3();">Back</div>
            </div>
            <div class="create_new_airline_frame">
                <div class="h1-cont">Add new airline</div>
                <div>Name<input type="text" name="add_airline_name" id="airline1_1"></div>
                <div>Comp<input type="text" name="add_airline_comp" id="airline1_2"></div>
                <div>URL pic<input type="text" name="add_airline_url_pic" id="airline1_3"></div>
                <div>URL icon<input type="text" name="add_airline_url_icon" id="airline1_4"></div>
                <div>Price<input type="text" name="add_airline_price" id="airline1_5"></div>
                <div><input type="submit" value="OK"></div>
                <div class="back_btn_from_optional_frames" onclick="back_btn_from_optional_frame_4();">Back</div>
            </div>
            <div class="change_existing_airline_frame">
                <div class="h1-cont">Change existing airline</div>
                <div>Enter name, comp, url pic, url icon or price<input type="text" name="change_airline_unit" id="airline2_1"></div>
                <div><input type="submit" value="OK"></div>
                <div class="back_btn_from_optional_frames" onclick="back_btn_from_optional_frame_5();">Back</div>
            </div>
            <div class="delete_airline_frame">
                <div class="h1-cont">Delete airline</div>
                <div>Enter name, comp, url pic, url icon or price<input type="text" name="delete_airline_unit" id="airline3_1"></div>
                <div><input type="submit" value="OK"></div>
                <div class="back_btn_from_optional_frames" onclick="back_btn_from_optional_frame_6();">Back</div>
            </div>
        </form>
    
    </body>

</html>