<?php   
session_start();
session_destroy();
header("location:newblogtimmy.php");
exit();
?>