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
            <h1><img src="gambar/door.jpg" style="top:100%; left: 40%; position: absolute; width: 200px; height: 205px;"></h1>
            <p><br></p>
            <h1 style="right: 45%; bottom: -600%; position: absolute">What is this?</h1>
            <div class="wrapper" style="top: 500px; position: absolute">
                <form method="post" action="level1.php">
                    <button name="answer" type="submit" value="2">Door</button>
                    <button name="answer" type="submit" value="1">Refrigerator</button>
                    <button name="answer" type="submit" value="3">Cupboard</button>
                    <input type="text" name="answer">
                </form>
                
            </div>

            <script>
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
            </script>
        </div>

        <?php
            $sql ="SELECT answer FROM question WHERE question_id = 1";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_row($result);

            if(isset($_POST['answer'])){

                if($_POST['answer'] == $row[0]){
                    ?>
                    <script>alert("Jawaban Benar!")</script>
                    <div class="wrapper" style="bottom: 0%;">
                        <a href="belajar.php" style="right: 0%; bottom: 0%; background-color: red; color: white; border-radius: 10px; padding: 5px 10px">lanjut</a>
                        <?php
                            if(isset($_SESSION['username'])){
                                $userid = $_SESSION['user_id'];
                                                                
                                    $sql="INSERT INTO progress(id_user, level_materi) VALUES ($userid, 1)";
                                    
                                    if(mysqli_query($conn, $sql)){
                                        ?>
                                            <script>alert("Level 1 telah selesai!")</script>
                                        <?php
                                    }else{
                                        ?>
                                            <script>alert("terjadi kesalahan saat memproses data!")</script>
                                        <?php
                                    }
                            }else{
                                header("Location: login.php")
                                ?>
                                    <script>alert("Silahkan login terlebih dahulu untuk melanjutkan.")</script>
                                <?php
                            }
                        ?>
                    </div>
                    <?php
                }else{
                    ?>
                    <script>alert("Jawaban Salah!")</script>
                    <?php
                }
            }
        ?>
    </body>
</html>