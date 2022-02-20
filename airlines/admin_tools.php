<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ADMIN_Waves</title>
        <link rel="stylesheet" href="style.css">
        <script async src="scripts/jquery.js"></script>
        <script>

        </script>
        <style>
            .global_admin_error{
                position: relative;
                top: 70px;
                text-align:center;
                font-family: 'Franklin Gothic Medium';
            }
            .back-to-main0menu-btn{
                position: relative;
                height: 23px;
                width: 180px;
                top: 100px;
                background-color: #ccc;
                margin: auto;
                font-family: 'Franklin Gothic Medium';
                text-align: center;
            }
            .back-to-main0menu-btn:hover{
                background-color: #ccf;
                transition: 0.3s;
            }
            td{
                border:1px black;
            }
            tr{
                border:1px black;
            }
            table{
                margin: auto;
            }
            .url-ppp{
                background-color: #ccf;
            }
            .url-ppp:hover{
                background-color: #ccc;
            }
        </style>
    </head>
    
    <body>
        <?php include("blocks/header_admin.php");?>
        <table>
        <?php
            $add_1 = $_REQUEST['add_user_1name'];
            $add_2 = $_REQUEST['change_user_unit'];
            $add_3 = $_REQUEST['delete_user_unit'];
            $add_4 = $_REQUEST['add_airline_name'];
            $add_5 = $_REQUEST['change_airline_unit'];
            $add_6 = $_REQUEST['delete_airline_unit'];

            if ($add_1 != ""){

                if(isset($_REQUEST['add_user_2name']) && isset($_REQUEST['add_user_bday']) && isset($_REQUEST['add_user_email']) && isset($_REQUEST['add_user_login']) && isset($_REQUEST['add_user_password'])){
                    $add_1 = $_REQUEST['add_user_1name'];
                    $add_2 = $_REQUEST['add_user_2name'];
                    $add_3 = $_REQUEST['add_user_bday'];
                    $add_4 = $_REQUEST['add_user_email'];
                    $add_5 = $_REQUEST['add_user_login'];
                    $add_6 = $_REQUEST['add_user_password'];
                    
                    $db = mysql_connect('localhost', 'root', '');
                    mysql_select_db('waves', $db);
                    mysql_set_charset('utf8');
                    
                    $query = "SELECT * FROM users WHERE login='$add_5' AND password='$add_6' AND first_name='$add_1' AND second_name='$add_2' AND bday='$add_3' AND email='$add_4'";
                    $query_polz = mysql_query($query);

                    if (mysql_fetch_array($query_polz)){
                        echo "
                        <div class='global_admin_error'>
                            <h1>Error!</h1><br>
                            This user exists<br> 
                        </div>
                        <div class='back-to-main0menu-btn'>
                            <a href='admin_index.php'>Back to main menu</a>
                        </div>
                        ";
                    }
                    else{
                        $query1 = "INSERT INTO users (`first_name`, `second_name`, `bday`, `email`, `login`, `password`) VALUES ('$add_1', '$add_2', '$add_3' ,'$add_4' ,'$add_5' ,'$add_6')";
                        $query_polz1 = mysql_query($query1);
                        echo "
                        <div class='global_admin_error'>
                            <h1>Congratulationes!!</h1><br>
                             
                        </div>
                        <div class='back-to-main0menu-btn'>
                            <a href='admin_index.php'>Back to main menu</a>
                        </div>
                        ";
                    }
                }
                else{
                    echo "
                <div class='global_admin_error'>
                    <h1>Error!</h1><br>
                    Fields are empty!<br> 
                </div>
                <div class='back-to-main0menu-btn'>
                    <a href='admin_index.php'>Back to main menu</a>
                </div>
                ";
                }
                

            }
            else if ($add_2 != ""){
                $db = mysql_connect('localhost', 'root', '');
                mysql_select_db('waves', $db);
                mysql_set_charset('utf8');
                    
                $query11 = "SELECT * FROM users WHERE login='$add_2' OR password='$add_2' OR first_name='$add_2' OR second_name='$add_2' OR bday='$add_2' OR email='$add_2'";
                $query_polz11 = mysql_query($query11);
                $mas = mysql_fetch_array($query_polz11);

                while ($mas = mysql_fetch_array($query_polz11)){
                        echo"
                            <tr>
                                <td><a href='inserting_user.php?id={$mas['id']}&type=1' class='url-ppp'>{$mas['id']}</a></td>
                                <td>{$mas['first_name']}</td>
                                <td>{$mas['second_name']}</td>
                                <td>{$mas['bday']}</td>
                                <td>{$mas['email']}</td>
                                <td>{$mas['login']}</td>
                                <td>{$mas['password']}</td>
                            </tr>
                        ";
                }
                
                               
            }
            else if ($add_3 != ""){
                $db = mysql_connect('localhost', 'root', '');
                mysql_select_db('waves', $db);
                mysql_set_charset('utf8');
                    
                $query = "SELECT * FROM users WHERE login='$add_3' OR password='$add_3' OR first_name='$add_3' OR second_name='$add_3' OR bday='$add_3' OR email='$add_3'";
                $query_polz = mysql_query($query);
                $mas = mysql_fetch_array($query_polz);

                while ($mas = mysql_fetch_array($query_polz)){
                        echo"
                            <tr>
                                <td><a href='deleting_user.php?id={$mas['id']}&type=1' class='url-ppp'>{$mas['id']}</a></td>
                                <td>{$mas['first_name']}</td>
                                <td>{$mas['second_name']}</td>
                                <td>{$mas['bday']}</td>
                                <td>{$mas['email']}</td>
                                <td>{$mas['login']}</td>
                                <td>{$mas['password']}</td>
                            </tr>
                        ";
                }
            }
            else if ($add_4 != ""){


                if(isset($_REQUEST['add_airline_name']) && isset($_REQUEST['add_airline_comp']) && isset($_REQUEST['add_airline_url_pic']) && isset($_REQUEST['add_airline_url_icon']) && isset($_REQUEST['add_airline_price'])){
                    
                    $add_1 = $_REQUEST['add_airline_name'];
                    $add_2 = $_REQUEST['add_airline_comp'];
                    $add_3 = $_REQUEST['add_airline_url_pic'];
                    $add_4 = $_REQUEST['add_airline_url_icon'];
                    $add_5 = $_REQUEST['add_airline_price'];
                    
                    $db = mysql_connect('localhost', 'root', '');
                    mysql_select_db('waves', $db);
                    mysql_set_charset('utf8');
                    
                    $query = "SELECT * FROM offers WHERE price='$add_5' AND name='$add_1' AND comp='$add_2' AND url_pic='$add_3' AND url_icon='$add_4'";
                    $query_polz = mysql_query($query);

                    if (mysql_fetch_array($query_polz)){
                        echo "
                        <div class='global_admin_error'>
                            <h1>Error!</h1><br>
                            This airline exists<br> 
                        </div>
                        <div class='back-to-main0menu-btn'>
                            <a href='admin_index.php'>Back to main menu</a>
                        </div>
                        ";
                    }
                    else{
                        $query1 = "INSERT INTO offers (`name`, `comp`, `url_pic`, `url_icon`, `price`) VALUES ('$add_1', '$add_2', '$add_3' ,'$add_4' ,'$add_5')";
                        $query_polz1 = mysql_query($query1);
                        echo "
                        <div class='global_admin_error'>
                            <h1>Congratulationes!!</h1><br>
                             
                        </div>
                        <div class='back-to-main0menu-btn'>
                            <a href='admin_index.php'>Back to main menu</a>
                        </div>
                        ";
                    }
                }
                else{
                    echo "
                <div class='global_admin_error'>
                    <h1>Error!</h1><br>
                    Fields are empty!<br> 
                </div>
                <div class='back-to-main0menu-btn'>
                    <a href='admin_index.php'>Back to main menu</a>
                </div>
                ";
                }
            }
            else if ($add_5 != ""){

                $db = mysql_connect('localhost', 'root', '');
                mysql_select_db('waves', $db);
                mysql_set_charset('utf8');
                    
                $query = "SELECT * FROM offers WHERE name='$add_5' OR comp='$add_5' OR url_pic='$add_5' OR url_icon='$add_5' OR price='$add_5'";
                $query_polz = mysql_query($query);
                $mas = mysql_fetch_array($query_polz);

                while ($mas = mysql_fetch_array($query_polz)){
                        echo"
                            <tr>
                                <td><a href='inserting_user.php?id={$mas['id']}&type=2' class='url-ppp'>{$mas['id']}</a></td>
                                <td>{$mas['name']}</td>
                                <td>{$mas['comp']}</td>
                                <td>{$mas['url_pic']}</td>
                                <td>{$mas['url_icon']}</td>
                                <td>{$mas['price']}</td>
                            </tr>
                        ";
                }

            }
            else if  ($add_6 != ""){

                $db = mysql_connect('localhost', 'root', '');
                mysql_select_db('waves', $db);
                mysql_set_charset('utf8');
                    
                $query = "SELECT * FROM offers WHERE name='$add_5' OR comp='$add_5' OR url_pic='$add_5' OR url_icon='$add_5' OR price='$add_5'";
                $query_polz = mysql_query($query);
                $mas = mysql_fetch_array($query_polz);

                while ($mas = mysql_fetch_array($query_polz)){
                        echo"
                            <tr>
                                <td><a href='deleting_user.php?id={$mas['id']}&type=2' class='url-ppp'>{$mas['id']}</a></td>
                                <td>{$mas['name']}</td>
                                <td>{$mas['comp']}</td>
                                <td>{$mas['url_pic']}</td>
                                <td>{$mas['url_icon']}</td>
                                <td>{$mas['price']}</td>
                            </tr>
                        ";
                }

            }
            else{
                echo "
                <div class='global_admin_error'>
                    <h1>Error!</h1><br>
                    Fatal error! Check your commands!<br> 
                </div>
                <div class='back-to-main0menu-btn'>
                    <a href='admin_index.php'>Back to main menu</a>
                </div>
                ";
            }
        ?>
        </table>
    </body>

</html>