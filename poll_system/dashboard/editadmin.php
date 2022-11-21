<?php
    include '../server.php';
    session_start();
    
    $username = $_SESSION['username'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];


    $sql = "SELECT fname, lname, email FROM member WHERE fname='$fname', lname='$lname', email='$email'";
    // $result = mysqli_query($conn, $sql);
    // $row = mysqli_fatch_object($result);

    if(!empty($fname)){
        $sql = "UPDATE member SET fname='$fname' WHERE username='$username'";
    }if(!empty($lname)){
        $sql = "UPDATE member SET lname='$lname' WHERE username='$username'";
    }if(!empty($email)){
        $sql = "UPDATE member SET email='$email' WHERE username='$username'";
    }if ($conn->query($sql) === TRUE) {
        echo "<script> alert('แก้ไขข้อมูลสำเร็จ');</script>";
        header("refresh:0.2; url=adminprofile.php");
    } else{
        echo "Error updating record: " . $conn->error;
    }

?>