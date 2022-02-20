<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Waves</title>
        <link rel="stylesheet" href="style.css">
        <script async src="scripts/jquery.js"></script>
        <script>

        </script>
        <style>
            .bac-back-bcak{
                position: absolute;
                height: 25px;
                width: 120px;
                top: 17px;
                right: 20px;
                background-color: #ccc;
                text-align: center;
                font-size: 18px;
                cursor: pointer;
                font-family: 'Franklin Gothic Medium';
            }
            .bac-back-bcak:hover{
                transition: 0.3s;
                background-color: #eef;
            }
            .main-frame-delete{
                position: relative;
                margin: auto; 
                top: 100px;
                height: 200px;
                width: 700px;
                background-color: #ddd;
                text-align: center;
            }
            .fatal-error-delete-or-insert{
                text-align: center;
                font-family: 'Franklin Gothic Medium';
            }
            .change-frame-ad{
                text-align: center;
                background-color: #eee;
                font-family: 'Franklin Gothic Medium';
            }
        </style>
    </head>

    <body>
        <?php include("blocks/header_admin.php"); ?>

        <div class="main-frame-delete">

        <?php 

            if (isset($_REQUEST['new_7'])){
                $id = $_REQUEST['new_7'];
                $first_name = $_REQUEST['new_1'];
                $second_name = $_REQUEST['new_2'];
                $bday = $_REQUEST['new_3'];
                $email = $_REQUEST['new_4'];
                $login = $_REQUEST['new_5'];
                $password = $_REQUEST['new_6'];

                $db = mysql_connect('localhost', 'root', '');
                mysql_select_db('waves', $db);
                mysql_set_charset('utf8');
                                
                $query_users_change = "UPDATE `users` SET `first_name`='$first_name',`second_name`='$second_name',`bday`='$bday',`email`='$email',`login`='$login',`password`='$password' WHERE id='$id'";
                $query_polz_users = mysql_query($query_users_change);

                echo 
                "
                <div class='fatal-error-delete-or-insert'>
                    <h1>SUCCESS!</h1><br>
                    User was succesfully updated!<br>
                </div>
                ";
            }
            else if (isset($_REQUEST['new_8'])){

                $id = $_REQUEST['new_8'];
                $name = $_REQUEST['new_9'];
                $comp = $_REQUEST['new_10'];
                $url_pic = $_REQUEST['new_11'];
                $url_icon = $_REQUEST['new_12'];
                $price = $_REQUEST['new_13'];

                $db = mysql_connect('localhost', 'root', '');
                mysql_select_db('waves', $db);
                mysql_set_charset('utf8');
                                
                $query_airline_change = "UPDATE `offers` SET `name`='$name',`comp`='$comp',`url_pic`='$url_pic',`url_icon`='$url_icon',`price`='$price' WHERE `id`='$id'";
                $query_polz_airline = mysql_query($query_airline_change);

                echo 
                "
                <div class='fatal-error-delete-or-insert'>
                    <h1>SUCCESS!</h1><br>
                    Airline was succesfully updated!<br>
                /div>
                ";

            }
            else if (isset($_REQUEST['id'])){
                $id = $_REQUEST['id'];
                if ($id != ""){
                    if (isset($_REQUEST['type'])){
                        $type = $_REQUEST['type'];
                        if ($type == "1"){

                            $db = mysql_connect('localhost', 'root', '');
                            mysql_select_db('waves', $db);
                            mysql_set_charset('utf8');
                                
                            $query12 = "SELECT * FROM users WHERE id='$id'";
                            $query_polz12 = mysql_query($query12);
                            
                            
                            while ($mas =  mysql_fetch_array($query_polz12)){
                                echo "
                                    <form method='GET' action='inserting_user.php'>
                                        <div class='change-frame-ad'>
                                            ID <input type='text' readonly='readonly' name='new_7' value='{$mas['id']}'><br>
                                            1st name <input type='text' name='new_1' value='{$mas['first_name']}'><br>
                                            2nd name <input type='text' name='new_2' value='{$mas['second_name']}'><br>
                                            Bday <input type='text' name='new_3' value='{$mas['bday']}'><br>
                                            Email <input type='text' name='new_4' value='{$mas['email']}'><br>
                                            Login <input type='text' name='new_5' value='{$mas['login']}'><br>
                                            Password <input type='text' name='new_6' value='{$mas['password']}'><br>
                                            <input type='submit' value='OK'>
                                        </div>
                                    </form>
                                ";
                            }
                            

                        } else if ($type == "2"){

                            $db = mysql_connect('localhost', 'root', '');
                            mysql_select_db('waves', $db);
                            mysql_set_charset('utf8');
                                
                            $query12 = "SELECT * FROM offers WHERE id='$id'";
                            $query_polz12 = mysql_query($query12);
                            $mas =  mysql_fetch_array($query_polz12);
                            
                            while ($mas =  mysql_fetch_array($query_polz12)){
                                echo "
                                    <form method='GET' action='inserting_user.php'>
                                        <div class='change-frame-ad'>
                                            ID <input type='text' readonly='readonly' name='new_8' value='{$mas['id']}'><br>
                                            Name <input type='text' name='new_9' value='{$mas['name']}'><br>
                                            Comp <input type='text' name='new_10' value='{$mas['comp']}'><br>
                                            URL pic <input type='text' name='new_11' value='{$mas['url_pic']}'><br>
                                            URL icon <input type='text' name='new_12' value='{$mas['url_icon']}'><br>
                                            Price <input type='text' name='new_13' value='{$mas['price']}'><br>
                                            <input type='submit' value='OK'>
                                        </div>
                                    </form>
                                ";
                            }
                            

                        } else{
                            echo 
                            "
                                <div class='fatal-error-delete-or-insert'>
                                    <h1>Error!</h1><br>
                                    Fatal error on server! UNDEFINED_TYPE error!<br>
                                </div>
                            ";
                        }
                    }
                    else{
                        echo 
                        "
                            <div class='fatal-error-delete-or-insert'>
                                <h1>Error!</h1><br>
                                Fatal error on server! No TYPE!<br>
                            </div>
                        ";
                    }
                }
                else{
                    echo 
                    "
                        <div class='fatal-error-delete-or-insert'>
                            <h1>Error!</h1><br>
                            Fatal error on server! No ID!<br>
                        </div>
                    ";
                }
                
            }
            else{
                echo 
                "
                    <div class='fatal-error-delete-or-insert'>
                        <h1>Error!</h1><br>
                        Fatal error on server! Try again!<br>
                    </div>
                ";
            }
            ?>

        </div>

        <div class="bac-back-bcak"><a href="admin_index.php">Back to admin</a></div>
    </body>

</html>