<?php
include '../server.php';
session_start();

$username = $_SESSION['username'];

$sql = "SELECT * FROM member WHERE username = '$username'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_object($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='style1.css'>
    <title>Profile</title>
</head>
<body>
     <div class="card">
          <div class="container-header">
               <div>
                    <p class="lg-txt">Welcome <?php echo $row->username ?></p>
                    <p class="sm-txt">Update Profile</p>
               </div>    
               <div>
                    <a class="btn-b" href="admindash.php">Back</a>
               </div>
          </div>
            
          <div class="container-form">
               <div class="form-card">
                    <form action="editadmin.php" method="post">

                         <div class="item-card">
                              <label for="username" class="label">Username</label><br>
                              <input type="text" class="input-box-long-dis" name="usernamme" disabled value="<?php  echo $row->username; ?>">
                         </div>
                         <div class="item-card">
                              <label for="password" class="label">Password</label><br>
                              <input class="input-box-long-dis" type="password" name="password" disabled value="<?php  echo $row->password; ?>">
                         </div>

                         <p class="txt-b-label">Change User Information</p>

                         <!-- input 2-col -->
                         <div class="box-2">
                              <div class="item-card">
                                   <label for="fname" class="label">First name</label><br>
                                   <input class="input-box" type="text" name="fname" value="<?php  echo $row->fname; ?>">
                              </div>
                              <div class="item-card">
                                   <label for="lname" class="label">Last name</label><br>
                                   <input class="input-box" type="text" name="lname" value="<?php  echo $row->lname; ?>">
                              </div>
                         </div>

                         <div class="item-card">
                              <label for="Password" class="label">Email</label><br>
                              <input class="input-box-long" name="email" value="<?php  echo $row->email; ?>">
                         </div>
                         <button class="btn" type="submit">Update</button>
                    </form>
               </div>
          </div>
     </div>  
</body>
</html>