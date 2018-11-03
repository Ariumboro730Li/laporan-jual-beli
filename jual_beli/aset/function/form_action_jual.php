<?php 
header('HTTP/1.1 302 Found');
header('Location: ../content/penjualan.php');
include "../connection.php";



switch ($_REQUEST['form'])

{
	case'add':

		$date = date("y-m-d");
		$nama_barang = $_REQUEST ['nama_barang'];
		$nama_pembeli = $_REQUEST ['nama_pembeli'];
		$jumlah_barang = $_REQUEST ['jumlah_barang'];
		$harga_barang = $_REQUEST ['harga_barang'];
		$total_penjualan = $jumlah_barang * $harga_barang;
		
		
		$query1_insert ="INSERT INTO penjualan
		(date,nama_barang,nama_pembeli,jumlah_barang,
		harga_barang,total_penjualan)
		
		values('".$date."','".$nama_barang."','".$nama_pembeli."',
		'".$jumlah_barang."',
		'".$harga_barang."','".$total_penjualan."')";
		
		(mysqli_query($conn,$query1_insert));
	
		break;
		
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


	case 'edit':
		
		$id = $_REQUEST ['id'];
		$date = date("y-m-d");
		$nama_barang = $_REQUEST ['nama_barang'];
		$nama_pembeli = $_REQUEST ['nama_pembeli'];
		$jumlah_barang = $_REQUEST ['jumlah_barang'];
		$harga_barang = $_REQUEST ['harga_barang'];
		$total_penjualan = $jumlah_barang * $harga_barang;
		
			$query_insert = "UPDATE penjualan set 
			 date='".$date."',
			 nama_barang='".$nama_barang."',
			 nama_pembeli='".$nama_pembeli."',			 
			 jumlah_barang='".$jumlah_barang."',
			 harga_barang='".$harga_barang."',
			 total_penjualan='".$total_penjualan."'
								
			WHERE id='".$id."' "; 
								
			
			if(mysqli_query($conn,$query_insert))
			{
				echo "<p>Data Penjualan  <b style='color:red'>
				".$_REQUEST['date']." </b><br>
				 Nama Barang <b style='color:red'>
				 ".$_REQUEST ['nama_barang']."</b> berhasil diupdate</p>";; 
				
			}else
			{
				echo "<h1>Data gagal diinput</h1>".$query_insert;
		
			} 
			break;
			
		
}		
		?>
        </div>
        
        <?php
