<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
        <link rel="stylesheet" href="https://use.typekit.net/oov2wcw.css">
        <link rel="stylesheet" type="text/css" href="css/timeline.css">
    </head>

    <?php
    session_start();
  
    ?>
    <body>
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
                <a style = "float:right"><?php echo $_SESSION['username']?></a>
                <?php
            }
            ?>
        </div>
        
        <div class = "container">           
            <h1><br></h1>
            <form action ="timeline.php" method="post">
                <input type="text" name="comment" placeholder="Tulis sesuatu..." autocomplete = "off" required>
                <button style = "float: right" type="submit" name="send"><b>Kirim</b></button>
            </form>
            <script>
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
            </script>
        </div>

    <?php
        include 'config.php';
        
        if(isset($_SESSION['username'])){
            if(isset($_POST['send'])){            
                $message = $_POST['comment'];
                $username = $_SESSION['username'];
                $sql = "INSERT INTO status(username, message, likes) VALUES('$username', '$message', 0)";

                if(!mysqli_query($conn, $sql)){
                    ?>
                    <script>alert("problem occured!")</script>
                    <?php
                }
            }
        }else{
            header("Location: login.php");
        }
    ?>

    <?php
        include 'config.php';

        $sql = "SELECT username, message, likes FROM status ORDER BY post_id DESC";
        $run = mysqli_query($conn, $sql);

        if($run->num_rows>0){
            while($row = $run->fetch_assoc()){
                ?>
                <div class ="container" style="background-color: #F0F0F0; border-radius: 30px; padding: 25px 10px; margin: 14px 40px">
                <p style = "margin: 2px 20px"><b><?php echo "$row[username]";?></b></p>
                <p style = "padding: 15px 50px;"><b><?php echo "$row[message]";?></b></p>
                </div>
                <?php
            }
        }
    ?>
    </body>
</html>