<?php
session_start();
$_SESSION["ILOGIN"]=FALSE;
session_unset();
session_destroy();
header("Location:index.php");
?>