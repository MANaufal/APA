<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
        <link rel="stylesheet" href="https://use.typekit.net/oov2wcw.css">
        <link rel="stylesheet" type="text/css" href="css/chat.css">

        <style>
            body{
                font-family: century-gothic, sans-serif;
                font-style: normal;
                font-weight: 400;
            }
        </style>
    </head>

    <?php
    session_start();

    include 'config.php';
    ?>

    <body>
        <?php
        if(!isset($_SESSION['username'])){
            header("Location: Login.php");
        }
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
                <a style = "float:right"><?php echo $_SESSION['username']?></a>
                <?php
            }
            ?>
        </div>

        <h1><br></h1>

        <div class = "wrapper">
                <div class = "left">
                        <?php
                            $userid = $_SESSION['user_id'];
                            
                            $sql = "SELECT users.username, relationship.relationship_id FROM relationship
                                    JOIN users WHERE relationship.user_id = '$userid' 
                                    AND relationship.friend_id = users.id";
                            $result = mysqli_query($conn, $sql);

                            if($result->num_rows>0){
                                while($row = $result->fetch_assoc()){
                                    ?>  
                                        <div class = "contact" id="c1">
                                            <a href="chat.php?chatid=<?php ?>">
                                                <?php echo "$row[username]";?>
                                            </a>
                                        </div>
                                    <?php
                                }
                            }
                        ?>
            </div>
            <div class = "right">
                <div class = "top">
                    <a>ya</a>
                </div>
                <?php
                    $chatquery="SELECT message, sender
                                FROM message WHERE relationship_id = 1
                                ORDER BY message_id";
                    $result = mysqli_query($conn, $chatquery);

                    if($result->num_rows>0){
                        while($row = $result->fetch_assoc()){
                            if($row["sender"] == $userid){
                                ?>
                                    <p style="float:right"><?php echo "$row[message]" ?><br></p>
                                <?php
                            }else{
                                ?>
                                    <p style="float:left"><?php echo "$row[message]" ?><br></p>
                                <?php
                            }
                        }
                    }
                ?>
                <div class="write">
                    <form action:"chat.php" method="submit">
                            <input type="text" name="chat" placeholder="write a message">
                            <button type="submit" name="send">Send</button>
                    </form>
                    <?php
                        
                    ?>
                </div>
                
            </div>
        </div>
    </body>