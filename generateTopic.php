<?php
include 'config.php';

function getTopic(){
    $int = rand(1, 5);

    $sql="SELECT * FROM topic";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);

    if($result){
        ?>
            <script>alert(<?php echo $row[$int]?>)</script>
        <?php
    }
}
?>