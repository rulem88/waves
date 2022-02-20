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

            if (isset($_REQUEST['new_6'])){


            }
            else if (isset($_REQUEST['new_7'])){


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
                                
                            $query12 = "SELECT * FROM waves WHERE id='$id'";
                            $query_polz12 = mysql_query($query12);
                            $mas =  mysql_fetch_array($query_polz12);
                            
                            if (mysql_fetch_array($query_polz12)){
                                echo "
                                    <form method='GET' action='inserting_user.php'>
                                        <div class='change-frame-ad'>
                                            ID <input type='text' readonly='readonly' name='new_6' value='{$mas['id']}'>
                                            1st name <input type='text' name='new_1' value='{$mas['first_name']}'>
                                            2nd name <input type='text' name='new_2' value='{$mas['second_name']}'>
                                            Bday <input type='text' name='new_3' value='{$mas['bday']}'>
                                            Email <input type='text' name='new_4' value='{$mas['email']}'>
                                            Login <input type='text' name='new_5' value='{$mas['login']}'>
                                            Password <input type='text' name='new_5' value='{$mas['password']}'>
                                            <input type='submit' value='OK'>
                                        </div>
                                    </form>
                                ";
                            }
                            else{
                                echo 
                                "
                                    <div class='fatal-error-delete-or-insert'>
                                        <h1>ERROR!</h1><br>
                                        UNEXPECTED ERROR APPEARED!<br>
                                    </div>
                                ";
                            }

                        } else if ($type == "2"){

                            $db = mysql_connect('localhost', 'root', '');
                            mysql_select_db('waves', $db);
                            mysql_set_charset('utf8');
                                
                            

                            echo 
                            "
                                <div class='fatal-error-delete-or-insert'>
                                    <h1>Success!</h1><br>
                                    User was successfully deleted from offers_table!<br>
                                </div>
                            ";

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