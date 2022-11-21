<?php
 include 'server.php';

    $username = $_POST['username'];
    $mail = $_POST['email'];
    $pass1 = $_POST['newpassword1'];
    $pass2 = $_POST['newpassword2'];
 
    $sql = "SELECT * FROM member WHERE username = '$username' && email = '$mail'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_object($result);
    // print_r($row);
    if(empty($username) || empty($mail) || empty($pass1) || empty($pass2)){
        echo '<script> alert("กรอกข้อมูลไม่ครบ"); </script>';
        header("refresh:0.2; url=resetpassw.php");
    }elseif($pass1 != $pass2){
        // echo $pass1.'<br>'.$pass2;
        echo '<script> alert("รหัสผ่านไม่ตรงกัน"); </script>';
        header("refresh:0.2; url=resetpassw.php");
    }elseif($row->email != $mail){
            echo '<script> alert("อีเมล์ไม่ถูกต้องไม่สามารถแก้ไขรหัสผ่านได้"); </script>';
    }else{
            $sql = "UPDATE member SET password='$pass1' WHERE username = '$username'";
            if ($conn->query($sql) === TRUE) {
                echo "<script> alert('แก้ไขรหัสผ่านสำเร็จ');</script>";
                header("refresh:0.2; url=login.php");
            } else{
                echo "Error updating record: " . $conn->error;
            }
    }
        $conn->close();
    ?>

  