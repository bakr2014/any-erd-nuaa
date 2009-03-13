<?php
session_start();

if (!isset($_SESSION["userID"]) || !isset($_SESSION["isLogin"])) Header("Location: login.php");
?>
	