<?php 

include "connection.php";

	    $nama_barang = $_POST ['nama_barang'];
	    $suplier= $_POST ['suplier'];
	    $jumlah_barang = $_POST['jumlah_barang'];
		$harga_beli_semua = $_POST ['harga_beli_semua'];
	    $harga_beli = $_POST ['harga_beli'];
		$lo = $_POST ['lo'];
		$pres = $lo / 100;
		$harga_pokok = $harga_beli + ($harga_beli * $pres);
		$harga_jual = $harga_pokok + ($harga_pokok * 0.2);
		$laba_barang = $harga_pokok - $harga_beli;
		$laba_barang_semua = $jumlah_barang * $laba_barang;
		$status = $_POST ['status'];
	    

$query_insert="INSERT INTO data_barang
		(nama_barang,suplier,jumlah_barang,harga_beli_semua
		,harga_beli,lo,pres,harga_pokok,harga_jual,
		laba_barang,laba_barang_semua,status)
		
		values('".$nama_barang."','".$suplier."','".$jumlah_barang."',
		'".$harga_beli_semua."','".$harga_beli."','".$lo."','".$pres."',
		'".$harga_pokok."','".$harga_jual."','".$laba_barang."',
		'".$laba_barang_semua."','".$status."')";
		
		(mysqli_query($conn,$query_insert));


		header('HTTP/1.1 302 Found');
header('Location: ../content/data_barang.php?insert=success');

?>


