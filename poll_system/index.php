<?php
// session_start();

if(!isset($_SESSION['username'])){
    // header('refresh:0; url=dashboard1.php');
    header('refresh:0; url=login.php');
}
?>