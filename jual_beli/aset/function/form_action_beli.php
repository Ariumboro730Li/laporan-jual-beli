

<?php
include "../connection.php";
header('HTTP/1.1 302 Found');
header('Location: ../content/pembelian.php');



switch ($_REQUEST['form'])

{
	case'add':

		$tgl_beli = $_REQUEST['tgl_beli'];
	    $nama_barang = $_REQUEST ['nama_barang'];
	    $jumlah_barang = $_REQUEST['jumlah_barang'];
		$harga_beli_semua = $_REQUEST ['harga_beli_semua'];
		$Suplier = $_REQUEST ['Suplier'];
		$pembayaran= $_REQUEST ['pembayaran'];
	    
		
		
		$query_insert ="INSERT INTO pembelian
		(tgl_beli,nama_barang,jumlah_barang,harga_beli_semua
		,Suplier,pembayaran)
		
		values('".$tgl_beli."','".$nama_barang."','".$jumlah_barang."',,
		'".$harga_beli_semua."',
		'".$Suplier."','".$pembayaran."')";
		
		if(mysqli_query($conn,$query_insert))
		
		{
			echo "<p> Data Pembelian oke </p>";;
			
		}
		
		else
		{
			echo " Data Gagal Diinput ".$query_insert;
			
		}
		
		break;
		
		case 'delete':

		$query_delete = "DELETE FROM pembelian
		where id='".$_REQUEST['id']."'";
		if(mysqli_query($conn,$query_delete))
		{
			echo "<p> Data  Pembelian tanggal <b style='color:red'>
				".$_REQUEST['tgl_masuk']." </b><br>
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
		$tgl_beli = $_REQUEST['tgl_beli'];
	    $nama_barang = $_REQUEST ['nama_barang'];
	    $jumlah_barang = $_REQUEST['jumlah_barang'];
		$harga_beli_semua = $_REQUEST ['harga_beli_semua'];
		$Suplier = $_REQUEST ['Suplier'];
		$pembayaran= $_REQUEST ['pembayaran'];
		
			$query_insert = "UPDATE pembelian set
			 tgl_beli='".$tgl_beli."',
			 nama_barang='".$nama_barang."',
			 jumlah_barang='".$jumlah_barang."',
			 harga_beli_semua='".$harga_beli_semua."',
			 Suplier='".$Suplier."',
			 pembayaran='".$pembayaran."'
								
			WHERE id='".$id."' "; 
								
			
			if(mysqli_query($conn,$query_insert))
			{
				echo "<p>Data Penjualan berhasil diupdate</p>";; 
				
			}else
			{
				echo "<h1>Data gagal diinput</h1>".$query_insert;
		
			} 
			break;
			
		
}		
		?>
	