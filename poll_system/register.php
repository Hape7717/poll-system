<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h2>Login page</h2>
        <form action="checkregister.php" method="post">
            <div>
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Enter your username">
            </div>
            <div>
                <label for="password_1">Password</label>
                <input type="password" name="password_1" placeholder="Enter your password">
            </div>
            <div>
                <label for="password_2">Confirm Password</label>
                <input type="password" name="password_2" placeholder="Confirm Password">
            </div>
            <div>
                <label for="fname">First name</label>
                <input type="text" name="fname" placeholder="Enter your first name">
            </div>
            <div>
                <label for="lname">Last name</label>
                <input type="text" name="lname" placeholder="Enter your last name">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="name@exemple">
            </div>
            <button type="submit">Register</button>
        </form>
        <p>Have a member <a href="login.php">Login</a></p>
    </div>
</body>
</html>