<?php 
include "../connection.php";

header('HTTP/1.1 302 Found');
header('Location: ../content/penjualan.php');


switch ($_REQUEST['form'])

{
case 'delete':

		$query_delete = "DELETE FROM penjualan 
		where id='".$_REQUEST['id']."'";
		if(mysqli_query($conn,$query_delete))
		{
			echo "<p> Data  Penjualan tanggal <b style='color:red'>
				".$_REQUEST['date']." </b><br>
				 Nama Barang <b style='color:red'>
				 ".$_REQUEST ['nama_barang']."</b>
				 berhasil didelete 
				</p>";;
		}
			else
		{
			echo"data gagal didelete";
		}
		break;
		
}
header('Location: ../content/penjualan.php?insert=delete');

		?>

