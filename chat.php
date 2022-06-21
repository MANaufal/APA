<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
        <link rel="stylesheet" href="https://use.typekit.net/oov2wcw.css">
        <link rel="stylesheet" type="text/css" href="css/chat.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript" src="chat.js"></script>

        <style>
            body{
                font-family: century-gothic, sans-serif;
                font-style: normal;
                font-weight: 400;
            }

            a{
                text-decoration: none;
                color: white;
            }

            .chat{
                overflow: auto;
                padding: 15px 25px;
                height: 60%;
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
                                        <div class = "contact">
                                            <a href="chat.php?chatid=<?php echo $row['relationship_id']; ?>&username=<?php echo $row['username'];?>">
                                                <?php echo "$row[username]";?>
                                            </a>
                                        </div>
                                    <?php
                                }
                            }

                            $findfriend = "SELECT users.username, relationship.relationship_id FROM relationship
                                    JOIN users WHERE relationship.friend_id = '$userid' 
                                    AND relationship.user_id = users.id";
                            $run = mysqli_query($conn, $findfriend);

                            if($run->num_rows>0){
                                while($row = $run->fetch_assoc()){
                                    ?>  
                                        <div class = "contact">
                                            <a href="chat.php?chatid=<?php echo $row['relationship_id']; ?>&username=<?php echo $row['username'];?>">
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
                    <div class = "activeusername"><?php
                    if(isset($_GET['username'])){
                        $friendname = $_GET['username'];
                        $_SESSION['chatid'] = $_GET['chatid'];
                        $chatid = $_GET['chatid'];
                        echo "$friendname";
                    }
                    ?></div>
                </div>
                    
                <div id="chat" class="chat">
                    
                </div>
                    
                <div class="write">
                    <form action:"chat.php" method="POST">
                            <input type="text" name="chatting" placeholder="write a message"  autocomplete="off">
                            <button type="submit" name="send" style="border: 0px; background-color: white;"></button>
                            <button onclick="generateTopic()" style="
                            border-radius: 50px; color: white; background-color: green; border: 0px; padding: 14px;
                            right: 0%; position: absolute; top: 50%;
                            ">Topic</button>
                    </form>
                    <script>
                        if ( window.history.replaceState ) {
                            window.history.replaceState( null, null, window.location.href );
                        }
                    </script>
                    <?php
                        if(isset($_POST['send'])){
                            $message = $_POST['chatting'];
                            $chatquery = "INSERT INTO message(relationship_id, message, sender) VALUES('$chatid', '$message', '$userid')";
                            
                            if(!mysqli_query($conn, $chatquery)){
                                ?>
                                <script>alert("An error occurred while sending a message")</script>
                                <?php
                            }
                        }
                    ?>
                </div>               
            </div>
            <script>
                function generateTopic(){
                $.ajax({
                    type: "POST";
                    url: 'generateTopic.php',
                    success: function(result){
                        $("div").text(result);}
                    }
                )}    
            </script>
        </div>
    </body>
</html>