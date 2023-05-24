<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        body {
            background-color: #f0f2f5;
        }

        section {
            width: 30rem;
            margin: 10rem auto;
        }

        .custom-form {
            text-align: center;
            background-color: white;
            padding: 1rem;
            border-radius: 1rem;
            box-shadow: -1px 4px 10px 7px rgba(0, 0, 0, 0.33);
            -webkit-box-shadow: -1px 4px 10px 7px rgba(0, 0, 0, 0.33);
            -moz-box-shadow: -1px 4px 10px 7px rgba(0, 0, 0, 0.33);
        }

        .custom-form input {
            margin: 1rem 0;
            font-size: 1.5rem;
        }
        .custom-form button {
            font-size: 1.5rem;
        }
    </style>
</head>

<?php
include('database.php');
//Super Global Variables
// $num1 = $_GET['a'] ?? null;
// $num2 = $_GET['b'] ?? null;

// if (!is_null($num1) && !is_null($num1)) {
//     echo "So thu 1: $num1, So thu 2: $num2";
//     echo "<br>Tong: $num1 + $num2 = " . $num1 + $num2;
// }
// var_dump($_POST);
if (isset($_POST['login'])) {
    
    $email = $_POST['email'];
    $password = sha1($_POST['password'] . 'random') ;
    // echo "Email: $email, Password: $password";

    $email = trim($email);
    $email = htmlspecialchars($email);
    $email =strip_tags($email);
    

    $checkUserSql = "select username,password from user where username = '$email' and  password = '$password'";
    $result = $conn->query($checkUserSql);
    if (mysqli_num_rows($result) > 0){
        $_SESSION['username'] = $email;
        // echo "Dang nhap thanh cong";
        var_dump($_SESSION);
    }else{
        
        echo "Dang nhap that bai";
    }
}

if(isset($_POST["logout"])){
    unset($_SESSION['username']);
    // session_destroy();
}

if(isset($_GET["lang"])){
    setcookie('lang',$_GET['lang'],time()+86400);
    $_COOKIE['lang'] = $_GET['lang'];
}
?>

<body>
    <section>
       
    <?php if(isset($_SESSION["username"])){ 
                include("welcome.php");
            }
            else {?>
                <form method="POST" class="form-signin custom-form" action="<?php echo $_SERVER['PHP_SELF']?>">
            <h3>Log In</h3>
            <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password"
                required>
            <button name="login" class="btn btn-lg btn-primary btn-block" type="submit" value="Log In">Sign in</button>
        </form>
                <?php  }?>
        
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>