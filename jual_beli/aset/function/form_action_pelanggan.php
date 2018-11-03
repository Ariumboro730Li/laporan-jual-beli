<?php 
include "../connection.php";

header('HTTP/1.1 302 Found');
header('Location: ../content/pelanggan.php');


switch ($_REQUEST['form'])

{
	case'add':

		$no_identitas = $_REQUEST['no_identitas'];
		$kartu_identitas = $_REQUEST['kartu_identitas'];
		$nama_pelanggan = $_REQUEST ['nama_pelanggan'];
		$barang_favorit = $_REQUEST['barang_favorit'];
		$no_handphone = $_REQUEST ['no_handphone'];
		$ultah = $_REQUEST ['ultah'];
		$status = $_REQUEST ['status'];

		$query_insert ="INSERT INTO pelanggan
		(no_identitas,kartu_identitas,nama_pelanggan,
		barang_favorit,no_handphone,ultah,status)
		
		values('".$no_identitas."','".$kartu_identitas."','".$nama_pelanggan."',
		'".$barang_favorit."','".$no_handphone."','".$ultah."',
		'".$status."')";
		
		if(mysqli_query($conn,$query_insert))
		
		{
			echo "<p> Data pelanggan
			Tanggal : <b style='color:red'>
				".$_REQUEST['no_identitas']." </b><br>
				 Nama Pelanggan :   <b style='color:red'>
				 ".$_REQUEST ['nama_pelanggan']."</b> 
				  Berhasil diinput </p>";;
			
			}
		
		else
		{
			echo " Data Gagal Diinput ".$query_insert;
			
		}


		break;
		
		case 'delete':

		$query_delete = "DELETE FROM pelanggan
		where id='".$_REQUEST['id']."'";
		if(mysqli_query($conn,$query_delete))
		{
			echo "<p> Data  Pelanggan 
				 ".$_REQUEST ['nama_pelanggan']."</b>
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
		$no_identitas = $_REQUEST['no_identitas'];
		$kartu_identitas = $_REQUEST['kartu_identitas'];
		$nama_pelanggan = $_REQUEST ['nama_pelanggan'];
		$barang_favorit = $_REQUEST['barang_favorit'];
		$no_handphone = $_REQUEST ['no_handphone'];
		$ultah = $_REQUEST ['ultah'];
		$status = $_REQUEST ['status'];

			$query_insert = "UPDATE pelanggan set 
			 no_identitas='".$no_identitas."',
			 kartu_identitas='".$kartu_identitas."',
			 nama_pelanggan='".$nama_pelanggan."',
			 barang_favorit='".$barang_favorit."',
			 no_handphone='".$no_handphone."',
			 ultah='".$ultah."',
			 status='".$status."'
			 
								
			WHERE id='".$id."' "; 
								
			
			if(mysqli_query($conn,$query_insert))
			{
				echo "<p>Data Penjualan  <b style='color:red'>
				".$_REQUEST['nama_pelanggan']." </b><br>
				 </b> berhasil diupdate</p>";; 
				
			}else
			{
				echo "<h1>Data gagal diinput</h1>".$query_insert;
		
			} 
			break;
			
		
}		
		?>