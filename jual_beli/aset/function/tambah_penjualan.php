
<?php 

include 'connections.php';

$date=$_POST['date'];
$time= date("H:i:s");
$nama_pembeli=$_POST['nama_pembeli'];
$nama_barang=$_POST['nama_barang'];
$harga_barang=$_POST['harga_barang'];
$jumlah_barang=$_POST['jumlah_barang'];
$total_penjualan = $jumlah_barang * $harga_barang;

$tat=mysql_query("SELECT * from data_barang where nama_barang='$nama_barang'");
$tat=mysql_fetch_array($tat);
$keuntungan = $total_penjualan - ($tat['harga_beli']  * $jumlah_barang);



$tat=mysql_query("SELECT * from data_barang where nama_barang='$nama_barang'");
$tat=mysql_fetch_array($tat);
$tis = $tat['harga_beli_semua'] -($tat['harga_beli'] * $jumlah_barang);
mysql_query("UPDATE data_barang set harga_beli_semua='$tis' where nama_barang='$nama_barang'");


$dara=mysql_query("SELECT * from data_barang where nama_barang='$nama_barang'");
$dara=mysql_fetch_array($dara);
$sita=$dara['jumlah_barang'] - $jumlah_barang;
mysql_query("UPDATE data_barang set jumlah_barang='$sita' where nama_barang='$nama_barang'");

$das=mysql_query("SELECT * from data_barang where nama_barang='$nama_barang'");
$das=mysql_fetch_array($das);
$tus=$das['harga_beli_semua'] / $das['jumlah_barang'];
mysql_query("UPDATE data_barang set harga_beli='$tus' where nama_barang='$nama_barang'");


mysql_query("insert into penjualan values
		('','$date','$time','$nama_pembeli','$nama_barang',
			'$jumlah_barang','$harga_barang',
			'$total_penjualan',
			'$keuntungan')")or die(mysql_error());
			
header('Location: ../content/penjualan.php?insert=success');

?>

