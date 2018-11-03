

<?php
include "../connection.php";
header('HTTP/1.1 302 Found');
header('Location: ../content/data_barang.php');



switch ($_REQUEST['form'])

{
	case'add':

	    $nama_barang = $_REQUEST ['nama_barang'];
		$nama_barang = $_POST ['suplier'];
	    $jumlah_barang = $_REQUEST['jumlah_barang'];
		$harga_beli_semua = $_REQUEST ['harga_beli_semua'];
	    $harga_beli = $harga_beli_semua / $jumlah_barang;
		$lo = $_REQUEST ['lo'];
		$pres = $lo / 100;
		$harga_pokok = $harga_beli + ($harga_beli * $pres);
		$harga_jual = $harga_pokok + ($harga_pokok * 0.2);
		$laba_barang = $harga_pokok - $harga_beli;
		$laba_barang_semua = $jumlah_barang * $laba_barang;
	    
		
		
		$query_insert ="INSERT INTO data_barang
		(nama_barang,jumlah_barang,sisa,harga_beli_semua
		,harga_beli,lo,pres,harga_pokok,harga_jual,
		laba_barang,laba_barang_semua,status)
		
		values('".$nama_barang."','".$suplier."','".$jumlah_barang."',
		'".$harga_beli_semua."','".$harga_beli."','".$lo."','".$pres."',
		'".$harga_pokok."','".$harga_jual."','".$laba_barang."',
		'".$laba_barang_semua."')";
		
		if(mysqli_query($conn,$query_insert))
		
		{
			echo "<p> Data Pembelian<br>
			Tanggal : <b style='color:red'>
				".$_REQUEST['tgl_masuk']." </b><br>
				 Nama Barang :   <b style='color:red'>
				 ".$_REQUEST ['nama_barang']."</b> 
				  Berhasil diinput </p>";;
			
		}
		
		else
		{
			echo " Data Gagal Diinput ".$query_insert;
			
		}
		
		break;
		
		case 'delete':

		$query_delete = "DELETE FROM data_barang 
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
	    $nama_barang = $_REQUEST ['nama_barang'];
	    $suplier = $_REQUEST ['suplier'];
	    $jumlah_barang = $_REQUEST['jumlah_barang'];
		$harga_beli_semua = $_REQUEST ['harga_beli_semua'];
	    $harga_beli = $harga_beli_semua / $jumlah_barang;
		$lo = $_REQUEST ['lo'];
		$pres = $lo / 100;
		$harga_pokok = $harga_beli + ($harga_beli * $pres);
		$harga_jual = $harga_pokok + ($harga_pokok * 0.2);
		$laba_barang = $harga_pokok - $harga_beli;
		$laba_barang_semua = $jumlah_barang * $laba_barang;
		
			$query_insert =
			"UPDATE data_barang set 
			 nama_barang='".$nama_barang."',
			 suplier='".$suplier."',
			 jumlah_barang='".$jumlah_barang."',
			 harga_beli_semua='".$harga_beli_semua."',
			 harga_beli='".$harga_beli."',
			 lo='".$lo."',
			 pres='".$pres."',
			 harga_pokok='".$harga_pokok."',
			 harga_jual='".$harga_jual."',
			 laba_barang='".$laba_barang."',
			 laba_barang_semua='".$laba_barang_semua."'

								
			WHERE id='".$id."' "; 
								
			
			if(mysqli_query($conn,$query_insert))
			{
				echo "<p>Data Penjualan  <br>
				 Nama Barang <b style='color:red'>
				 ".$_REQUEST ['nama_barang']."</b> berhasil diupdate
				 <a href=' ../content/data_barang.php'>l</a></p>";
;; 
				
			}else
			{
				echo "<h1>Data gagal diinput</h1>".$query_insert;
		
			} 
			break;
			
		
}		
		?>
	