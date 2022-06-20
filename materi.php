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

        <div class ="right">
            <h2><a href="materi_belajar.php">Verb</a></h2>
            <h2><a href="materi_belajar.php">Adjective</a></h2>
            <h2><a href="materi_belajar.php">Noun</a></h2>
            <h2><a href="materi_belajar.php">Simple Present Tense</a></h2>
            <h2><a href="materi_belajar.php">Simple Past Tense</a></h2>
            <h2><a href="materi_belajar.php">Simple Future Tense</a></h2>
            <h2><a href="materi_belajar.php">Simple Continous Tense</a></h2>
            <h2><a href="materi_belajar.php">Simple Perfect Tense</a></h2>
        </div>        
    </body>
</html>