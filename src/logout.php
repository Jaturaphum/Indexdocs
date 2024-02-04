<?php
session_start();
$_SESSION = array();
session_destroy();
header("Location: login.php?login_status=1");
exit();
?>
