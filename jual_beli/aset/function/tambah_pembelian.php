
<?php 

include 'connections.php';

$tgl_beli=$_POST['tgl_beli'];
$time=date("H:i:s");
$nama_barang=$_POST['nama_barang'];
$jumlah_barang=$_POST['jumlah_barang'];
$Suplier=$_POST['Suplier'];
$harga_beli_semua=$_POST['harga_beli_semua'];
$pembayaran=$_POST['pembayaran'];
$lo = $_REQUEST ['lo'];
$pres = $lo / 100;



$data=mysql_query("SELECT * from data_barang where nama_barang='$nama_barang'");
$data=mysql_fetch_array($data);
$sisa=$data['jumlah_barang'] + $jumlah_barang;
mysql_query("UPDATE data_barang set jumlah_barang='$sisa' where nama_barang='$nama_barang'");

$dat=mysql_query("SELECT * from data_barang where nama_barang='$nama_barang'");
$dat=mysql_fetch_array($dat);
$sis=$dat['harga_beli_semua'] + $harga_beli_semua;
mysql_query("UPDATE data_barang set harga_beli_semua='$sis' where nama_barang='$nama_barang'");

$das=mysql_query("SELECT * from data_barang where nama_barang='$nama_barang'");
$das=mysql_fetch_array($das);
$tus=$sis / $das['jumlah_barang'];
mysql_query("UPDATE data_barang set harga_beli='$tus' where nama_barang='$nama_barang'");

$ras=mysql_query("SELECT * from data_barang where nama_barang='$nama_barang'");
$ras=mysql_fetch_array($ras);
$tus=$ras['harga_beli'] + ( $ras['harga_beli'] *  $ras['pres'] );
mysql_query("UPDATE data_barang set harga_pokok = '$tus' where nama_barang='$nama_barang'");

$pas=mysql_query("SELECT * from data_barang where nama_barang='$nama_barang'");
$pas=mysql_fetch_array($pas);
$mus=$pas['harga_pokok'] + ( $pas['harga_pokok'] *  (20/100) );
mysql_query("UPDATE data_barang set harga_jual = '$mus' where nama_barang='$nama_barang'");

mysql_query("insert into pembelian values
			('','$tgl_beli','$time','$nama_barang',
			'$jumlah_barang','$Suplier',
			'$harga_beli_semua','$pembayaran','$lo','$pres')")or die(mysql_error());
			
			
header('Location: ../content/pembelian.php?insert=success' );

?>
