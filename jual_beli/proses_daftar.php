<?php


include "koneksi.php";
$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

{
$query_insert = "INSERT INTO login 
(nama,email,username,password) 
values ('".$nama."','".$email."','".$username."','".$password."')";
		 if(mysqli_query($conn,$query_insert))

{
echo "<script>alert('Berhasil Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}else{
echo "<script>alert('Gagal Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}
}
?>