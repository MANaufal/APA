<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
        <link rel="stylesheet" href="https://use.typekit.net/oov2wcw.css">
        <link rel="stylesheet" type="text/css" href="css/belajar.css">
    </head>

    <style>
        body{
            font-family: century-gothic;
        }
    </style>
    
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

        <h1><br></h1>

        <div class = "left">
            <h2>Menu Belajar</h2>
            <li><a href=latihan.php>Latihan</a></li>
            <li><a href=materi.php>Materi</a></li>
        </div>

        <div class ="right" style="float: center; top: 50%;">
            <?php
            $userid = $_SESSION['user_id'];
            $level = "SELECT progress WHERE user_id = $userid";

            $level2 = mysqli_query($conn, "SELECT * FROM progress WHERE level_materi = 2");

            ?>
            <a href = level1.php>
            <a href="<?php
            if(mysqli_num_rows($level2) > 0){
                echo "./level2.php";
            }else{
                echo "#";
            }
            ?>"></a>
            <?php

            ?>
        </div>
    </body>
</html>