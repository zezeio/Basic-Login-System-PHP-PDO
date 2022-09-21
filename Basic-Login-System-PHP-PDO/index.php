<?php
include 'dbConnection.php';
session_start();

if(!isset($_SESSION['session']))
{
	header("Location:login/login.php");
}
else
{
	header("Location:Dashboard/index.php");		
} 
?>