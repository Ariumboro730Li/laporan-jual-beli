<?php 

include "connection.php";

	   $no_identitas = $_POST['no_identitas'];
		$kartu_identitas = $_POST['kartu_identitas'];
		$nama_pelanggan = $_POST ['nama_pelanggan'];
		$barang_favorit = $_POST['barang_favorit'];
		$no_handphone = $_POST ['no_handphone'];
		$ultah = $_POST ['ultah'];
		$status = $_POST ['status'];

		$query_insert ="INSERT INTO pelanggan
		(no_identitas,kartu_identitas,nama_pelanggan,
		barang_favorit,no_handphone,ultah,status)
		
		values('".$no_identitas."','".$kartu_identitas."','".$nama_pelanggan."',
		'".$barang_favorit."','".$no_handphone."','".$ultah."',
		'".$status."')";
		
		(mysqli_query($conn,$query_insert));


		header('HTTP/1.1 302 Found');
header('Location: ../content/pelanggan.php');

?>


