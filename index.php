<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
        <link rel="stylesheet" href="https://use.typekit.net/oov2wcw.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

            .logo {
                float:left;
                display:block;
                width: 40px;
                position: absolute; 
                left: 135px; 
                top: 105px;
            }

            h1.judul{
                float:left;
                font-size: 40px;
                color: #970C10; 
                text-align: center;
                position: absolute; 
                left: 180px; 
                top: 90px;
            }

            .gambar {
                float:right;
                display:block;
                width: 750px;
                position: absolute;  
                top: 60px;
                right: 10px;
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
        <img class="logo" src="gambar/logoweb.png"/>
        <h1 class="judul">SKUYYNATIVE</h1>
        <img class="gambar" src="gambar/logo-halaman-utama-4.png"/>

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
                    
                        <script>Swal.fire(
                            'Daily Verb!',
                            'That thing is still around?',
                        )</script>
                </div>
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