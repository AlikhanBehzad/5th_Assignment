
<?php

session_start();
if(isset($_POST['submit']) && !empty($_POST['submit']))
{
	header('location: index.html');
}

$_SESSION['login']='login';
echo $_POST["uname"]." ";
echo $_POST["uage"]." ";
echo $_POST["uemail"]." ";
echo $_POST["uimage"]." ";
echo $_POST["password"]." ";