<?php

header('Content-Type:text/html;charset=utf8');
session_start();

$_SESSION['login_user'] = null;
$_SESSION['username'] = null;
session_destroy();

echo '<script> alert("Safely exit the system !"); window.location.href="login.php"; </script>';
exit;
