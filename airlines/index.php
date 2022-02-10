if (isset($_POST['name']))

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Waves</title>
        <link rel="stylesheet" href="style.css">
        <script async src="scripts/jquery.js"></script>
        <script>

        </script>
    </head>
    <body>
        <header>
            <div class="shapka-settings">
                <img src="pictures/m_icon.svg" height="50px" width="55px">
                <span class="span-header-style">Waves</span>
            </div>

            
        </header>
        <div class='login'>
             <a href='log.htm' class='log-link'><img src=
             <?php if (isset($_POST['name'])){
                 echo "'icons/empty.jpg'"
             } 
             else{echo "'icons/empty.jpg'"}?>class='icons'></a>
        </div>
        <div class="content-verst">
            <div class="content-pic-pos-1st-line">
                
                <img src="pictures/m_1.jpg" width="400px" height="200px">
                
                <img src="pictures/2_m.png" width="400px" height="200px">
                
                <img src="pictures/m_3.jpg" width="400px" height="200px">
            </div>
            <br>
            <div class="content-pic-pos-2st-line">
                
                <img src="pictures/m_4.jpg" width="400px" height="200px">
                
                <img src="pictures/m-5.jpg" width="400px" height="200px">
               
                <img src="pictures/m_6.jpg" width="400px" height="200px">
            </div>
        </div>

    </body>

</html>