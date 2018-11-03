<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "viany";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection

mysql_connect("localhost","root","") or die ("Gagal Mengkoneksikan Ke Database");
mysql_select_db("viany") or die ("Database Tidak Ditemukan");
?>