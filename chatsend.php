<!DOCTYPE html>
<html>
    <head>
    </head>

<?php
include 'config.php';

session_start();

$userid = $_SESSION['user_id'];

if(isset($_SESSION['chatid'])){
    $chatid = $_SESSION['chatid'];
    $chatquery="SELECT message, sender
                FROM message WHERE relationship_id = '$chatid'
                ORDER BY message_id";
    $result = mysqli_query($conn, $chatquery);

    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            if($row["sender"] == $userid){
                ?>
                <p style="
                float:right; background-color: #c2bcbc;
                border-radius: 15px;
                padding: 4px;
                margin: 15px;
                max-width: 400px;
                overflow-wrap: break-word;
                word-wrap: break-word;
                hyphens: auto;
                ">
                <?php echo "$row[message]" ?></p>
                <h1><br></h1>
                <?php
            }else{
                ?>
                <p style="
                float:left; background-color: #E7E7E7;
                border-radius: 15px;
                padding: 4px;
                margin: 15px;
                max-width: 400px;
                overflow-wrap: break-word;
                word-wrap: break-word;
                hyphens: auto;
                "><?php echo "$row[message]" ?></p>
                <h1><br></h1>
                <?php
                }
            }
        }
    }else{
        echo "Please select a contact.";
    }
?>
</html>