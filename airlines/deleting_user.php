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
            }
            .fatal-error-delete-or-insert{
                text-align: center;
                font-family: 'Franklin Gothic Medium';
            }
        </style>
    </head>
    
    <body>
        <?php include("blocks/header_admin.php"); ?>
        <div class="main-frame-delete">
            <?php 

                if (isset($_REQUEST['id'])){
                    $id = $_REQUEST['id'];
                    if ($id != ""){
                        if (isset($_REQUEST['type'])){
                            $type = $_REQUEST['type'];
                            if ($type == "1"){

                                
                                $db = mysql_connect('localhost', 'root', '');
                                mysql_select_db('waves', $db);
                                mysql_set_charset('utf8');
                                    
                                $query = "DELETE FROM `users` WHERE id='$id'";
                                $query_polz = mysql_query($query);
                                echo 
                                "
                                    <div class='fatal-error-delete-or-insert'>
                                        <h1>Success!</h1><br>
                                        User was successfully deleted from users_table!<br>
                                    </div>
                                ";

                            } else if ($type == "2"){

                                $db = mysql_connect('localhost', 'root', '');
                                mysql_select_db('waves', $db);
                                mysql_set_charset('utf8');
                                    
                                $query11 = "DELETE FROM `offers` WHERE id='$id'";
                                $query_polz11 = mysql_query($query11);

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