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

        include 'config.php';
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
            <h2 style="text-align:center">Menu Belajar</h2>
            <li style="padding: 25px 1px"><a href=belajar.php>Latihan</a></li>
            <li><a href=materi.php>Materi</a></li>
        </div>

        <div class ="wrapper">
            <?php
            if(isset($_SESSION['user_id'])){
                $userid = $_SESSION['user_id'];
                $level = "SELECT progress WHERE user_id = $userid";

                $level2 = mysqli_query($conn, "SELECT * FROM progress WHERE level_materi = 2");
            }
            ?>
            <a href = "level1.php" style="height: 70px; width: 70px; background-color: #5ACD23; border-radius: 50%; display: inline-block; 
            text-align: center; line-height: 70px; border: 12px solid #E2E2E2; text-decoration: none;
            color: white; font-size: 35px"><b>1</b></a>
            <div class="contents" style="background-color: #5ACD23;">
                <li style="color: white;font-size: 23px"><b>Level I</b></li>
                <li style="color: white;"><b>Noun I</b></li>
                <li style="color: white;"><b>Adjective I</b></li>
                <li style="color: white;"><b>Verb I</b></li>
            </div>
            <p><br></p>
            <a href="<?php
            if(mysqli_num_rows($level2) > 0){
                echo "./level2.php";
            }else{
                echo "#";
            }
            ?>
            " style="height: 70px; width: 70px; background-color: #30B8E3; border-radius: 50%; display: inline-block; 
            text-align: center; line-height: 70px; border: 12px solid #E2E2E2; text-decoration: none;
            color: white; font-size: 35px"><b>2</b></a>
            <div class="contents" style="background-color: #30B8E3;">
                <li style="color: white;font-size: 23px"><b>Level II</b></li>
                <li style="color: white;"><b>Noun II</b></li>
                <li style="color: white;"><b>Adjective II</b></li>
                <li style="color: white;"><b>Verb II</b></li>
            </div>
            <p><br></p>
        </div>
    </body>
</html>