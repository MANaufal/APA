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

            .wrapper {
                position: relative;
                width: var(--wrapper);
                height: 670px;
                transform: translate(-50%, 0);
            }

            .left {
                float: left;
                width: 25%;
                height: 100%;
                border: 1px solid var(--light);
                background-color: var(--white);
                overflow: auto;
            }

            .right {
                position: relative;
                float: left;
                width: 75%;
                height: 100%;
            }

            .top{
                width: 100%;
                height: 47px;
                margin: 10px 15px;
                padding: 16.5px 20px;
                background-color: #970C10;     
                color: white;          
            }

            .chat {
                background-color: #970C10;
                color: white;
                padding: 30px 50px;
                margin: 10px 0px;
            }

            ..write {
                position: absolute;
                bottom: 29px;
                left: 30px;
                height: 42px;
                padding-left: 8px;
                border: 1px solid var(--light);
                background-color: #eceff1;
                width: calc(100% - 58px);
                border-radius: 5px;
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
                        
                        $sql = "SELECT users.username FROM relationship
                                JOIN users WHERE relationship.user_id = '$userid' 
                                AND relationship.friend_id = users.id";
                        $result = mysqli_query($conn, $sql);

                        if($result->num_rows>0){
                            while($row = $result->fetch_assoc()){
                                ?>  
                                    <div class = "chat">
                                        <?php echo "$row[username]";?>
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
            </div>
        </div>
    </body>