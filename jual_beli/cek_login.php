<?php
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
session_start();
$login = mysql_query("select * from login where
 username='$username' 
 and password='$password'");
 
if (mysql_num_rows($login) > 0)

{
$_SESSION['username'] = $username;
header("location:aset/content/penjualan.php");
}

			else
			{
				header("location:login.php?pesan=gagal")
				or die(mysql_error());
	// mysql_error();
}
// echo $pas;
 ?>
 