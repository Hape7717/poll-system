<?php
    include 'server.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT username, password FROM tb_user WHERE username='$username' && password='$password'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if($count ==0){
        echo "<script> alert('ไม่พบผู้ใช้นี้'); </script>";
        header("refresh:0.2; url=login.html");  
    }else{
        $_SESSION['username'] = $username;
        header('refresh:0.2; url=dashboard.html');
    }
    $conn->close();
?>