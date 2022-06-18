<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
        <link rel="stylesheet" href="https://use.typekit.net/oov2wcw.css">

        <style>
            body{
                font-family: century-gothic, sans-serif;
                font-style: normal;
                font-weight: 400;
            }

            button{
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 30%;
                border-radius: 69px;
            }
        </style>
    </head>
    
    <body>

    <?php
    session_start();
    ?>
        <div class = "navbar">
            <a href="belajar.php" style = "float:left"><b>BELAJAR</b></a>
            <a href="timeline.php" style = "float:left"><b>LINIMASA</b></a>
            <a href="chat.php" style = "float:left"><b>PESAN</b></a>
            <?php
            if(!isset($_SESSION['username'])){
                ?>
                <a href="login.php" style = "float:right">Log in</a>
                <?php
            }else{
                ?>
                <div class = "dropdown" style ="float:right">
                    <a style = "float:right"><?php echo $_SESSION['username']?></a>

                    <div class = "dropdown-content">
                        <a href="logout.php">Log Out</a>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </body>
</html>