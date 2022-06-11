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
            <a href="#pesan" style = "float:left"><b>PESAN</b></a>
            <?php
            if(!isset($_SESSION['username'])){
                ?>
                <a href="login.php" style = "float:right">Akun belum terbentuk</a>
                <?php
            }else{
                ?>
                <a style = "float:right"><?php echo $_SESSION['username']?></a>
                <?php
            }
            ?>
        </div>

        <div class = "content" style = "position: absolute; left: 50px; top: 150px; font-size: 15px; color: #947360; text-align: center">
            <h1>Menjadi solusi sekaligus pengalaman terbaik<br>untuk belajar bahasa Inggris</h1>
            <a href="register.php"><button style = "color: white; background-color: #A1AFA0; font-size: 23px; width: 400px; height: 70px"><b>Mulai sekarang</b></button></a>
        </div>        
    </body>
</html>