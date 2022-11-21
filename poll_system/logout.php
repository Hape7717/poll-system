<?php
session_start();
session_destroy();
echo '<script> alert("ออกจากระบบแล้ว");</script>';
header("refresh:0; url=index.php");
?>