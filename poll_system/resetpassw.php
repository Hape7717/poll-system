<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>Reset password</h2>
        <form action="resetpassword.php" method="post">
            <div>
                <label for="">Username</label>
                <input type="text" name="username" placeholder="Enter your usrname">
            </div>
            <div>
                <label for="">Email</label>
                <input type="email" name="email" placeholder="Enter your email">
            </div>
            <div>
                <label for="">New password</label>
                <input type="password" name="newpassword1" placeholder="Enter your new password">
            </div>
            <div>
                <label for="">Confirm password</label>
                <input type="password" name="newpassword2" placeholder="Confirm password">
            </div>
            <button type="submit">Reset password</button>
        </form>
        <a href="login.php">Login page</a>
    </div>
</body>
</html>