<?php
session_start();
if(isset($_SESSION['username'])){
    header('refresh:0;url=dashboard1.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
            <div class="container">Login Form</div>
                <form action="checklogin.php" method="post">
                    <div class="item-card">
                        <label for="username" class="label">Username</label><br>
                        <input class="input-box" type="text" placeholder="Username" name="username"><br>
                    </div>
                    <div class="item-card">
                        <label for="Password" class="label">Password</label><br>
                        <input class="input-box" type="password" placeholder="Password" name="password">
                    </div>
                    <button class="btn" type="submit">login</button>
                    <p class="txt">Not a member ? <a href="register.php">Register</a></p>
                    <a href="resetpassw.php">Password Forgot</a>
                </form>
        </div>
</body>
</html