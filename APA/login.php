<?php
    include 'config.php';
    
    error_reporting(0);

    session_start();

    if(isset($_SESSION['username'])){
        header("Location: home.php");
    }

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
    }

    $sql = "SELECT * FROM users WHERE $username='$username' AND $password ='$password'";
    $result = mysqli_query($conn, $sql);
    if($result){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: home.php");       
    }else{
        echo "<script>alert('Your username or password is incorrect!')</script>";
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
            <label for="username" style = "color: white;">Username/Email</label>   
            <input type="text" name="username" required>                            
        
            <label for="pass" style ="color:white;">Password</label>                
            <input type="password" name="pass" required>

            <div class = "container" style = "margin-left: 55%; color: white;">
                Lupa kata <a href=>sandi?</a>
            </div>

            <div class="center">
                <button type="submit"><b>MASUK</b></button>  
            </div>   
            <div class="container" style = "margin-left:55%; color: white;">
                Belum mempunyai akun? <a href="register.php">Daftar</a>
            </div>                        
        </div>
    </form>

</body>
</html>