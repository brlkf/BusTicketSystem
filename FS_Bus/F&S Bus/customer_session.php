<?php
session_start();
if (!isset($_SESSION['mySession']))
{
header("location: customer_login.php");
}
?>