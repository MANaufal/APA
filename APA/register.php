<?php
    include 'config.php';
 
    error_reporting(0);
     
    session_start();
     
    if (isset($_SESSION['username'])) {
        header("Location: index.php");
    }
     
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['pass']);
        $cpassword = md5($_POST['cpass']);
     
        if ($password == $cpassword) {
            $sql = "SELECT username, email, password FROM users";
            $result = mysqli_query($conn, $sql);
            if (!$result->num_rows > 0) {
                $sql = "INSERT INTO users (username, email, password)
                        VALUES ('$username', '$email', '$password')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "<script>alert('Your account have been made!')</script>";
                    $username = "";
                    $email = "";
                    $_POST['pass'] = "";
                    $_POST['cpass'] = "";
                } else {
                    echo "<script>alert('Error')</script>";
                }
            } else {
                echo "<script>alert('Your email is already has been used.')</script>";
            }
             
        } else {
            echo "<script>alert('Password is incorrect.')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background-image: url("gambar/background-login.jpg");"
        }

        input[type=text], input[type=password]{
            width: 50%;
            padding: 10px 20px;
            margin: 8px 0;
            margin-left: auto;
            margin-right: auto;
            display: block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 63px;
        }
         
        button{
            background-color: #750101;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 30%;
            border-radius: 13px;
        }

        .center{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        button:hover{   
            background-color: #A80000;
        }
       
        .a{
            text-decoration: none;
        }

        label{
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

    </style>
</head>

<body>
    <form action="" method="POST">
        <div class = "container"
            style =
            "padding: 20px;
            width: 40%;
            height: 100%;
            background-color: #970C10;
            margin-left: 25%;
            margin-right: 25%;
            position: fixed;
            top: 0;"
        >
            <label for="email" style = "color: white;">Email</label>   
            <input type="text" name="email" required>
            
            <label for="username" style = "color: white;">Username</label>   
            <input type="text" name="username" required>  
        
            <label for="pass" style ="color:white;">Password</label>                
            <input type="password" name="pass" required>

            <label for="cpass" style ="color:white;">Confirm Password</label>                
            <input type="password" name="cpass" required>

            <div class="center">
                <button type="submit"><b>DAFTAR</b></button>  
            </div>   


        </div>
    </form>

</body>
</html>