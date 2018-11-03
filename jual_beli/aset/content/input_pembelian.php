<?php

include "header.php";

$form = "";

if($_REQUEST['form'] == 'edit')
{		
	$form = $_REQUEST['form'];
	 include "../connection.php";

	$query_select_data_untuk_diupdate =
	 "SELECT * FROM data_barang where id='".$_REQUEST['id']."' ";
	$res= mysqli_query($conn,$query_select_data_untuk_diupdate);
	$row = mysqli_fetch_array($res);

	    $nama_barang = $row ['nama_barang'];
	    $jumlah_barang = $row['jumlah_barang'];
		$harga_beli_semua = $row ['harga_beli_semua'];
	    $harga_beli = $harga_beli_semua / $jumlah_barang;
		$lo = $row ['lo'];
		$pres = $lo/100;
		$harga_pokok = $harga_beli + ($harga_beli * $pres);
		$harga_jual = $harga_pokok + ($harga_pokok * 0.2);
		$laba_barang = $harga_pokok - $harga_beli;
		$laba_barang_semua = $jumlah_barang * $laba_barang;
		$status = $row['status'];

}
?>

<div class="container">
	<div class="row">
	<div class="col-md-5">
    <form class="form-horizontal" action="../function/form_action_beli.php" method='POST'>
	<h3 style="text-align:center">Edit Data Pembelian</h3> <center>
	<h5>  an/ <b style="color:blue"> <?php echo $nama_barang ?> </b>
	Pembelian tgl <b style="color:blue"><?php echo $tgl_masuk ?></b></h5></center>
	
    	<form action="../function/form_action_barang.php" method='POST'>
		
		<div class="form-group">
		<label>Nama Barang</label>
		<input type="text" name="nama_barang"  
        value="<?php echo ($form=='edit')?$nama_barang:'';?>"
		class="form-control">
		</div>
        
		<div class="form-group">
		<label>Jumlah Barang</label>
		<input type="number"  name="jumlah_barang"
        value="<?php echo ($form=='edit')?$jumlah_barang:'';?>"
		class="form-control">
		</div>
	        
		<div class="form-group">
		<label>Harga Beli (all) </label>
		<input type="number" name="harga_beli_semua"
        value="<?php echo ($form=='edit')?$harga_beli_semua:'';?>"
		class="form-control">
		</div>
		
		<div class="form-group">
		<label>Presentase (%) Keuntungan  </label>
		 <input type="number" name="lo" max="200"
        value="<?php echo ($form=='edit')?$lo:'';?>"
		class="form-control">
		</div>
	       
		<div class="form-group">
		<label>Cara Pembayaran Barang </label>
		<select name="status"class="form-control" >
			<option value="A" disabled   
			selected="selected"> Sistem Pembayaran Apa yang Anda Kenakan ? </option>
			<option value="Cash" <?php echo ($form=='edit' && $status=="Cash")?
			'selected="selected"':'';?> > Cash </option>
			
			<option value="Credit" <?php echo ($form=='edit' && $status=="Credit")?
			'selected="selected"':'';?>> Credit </option>
			</select>
		</div>
		
        <button class="btn" type="submit" style=" background-color:#ccc; color:#ff5500"><b> Submit Pembelian </b></button> 
		<a href="pembelian.php"> Cancel </a>

		<input type="hidden" name="form" value="add"/></p>
        <p class="buttons">
        
        <?php 
		if($form=="edit")
		{ 
		?>
			<input type="hidden" name="form" value="edit" />
			<input type="hidden" name="id" 
            value="<?php echo $_REQUEST['id']; ?>" />
	<?php		
		}else
		{ 
		?>
			<input type="hidden" name="form" value="add" />
	<?php			
		}
		?>

            
        		
		
     </ul>
     </form>
     </div>
     </body>
     </html>
        


