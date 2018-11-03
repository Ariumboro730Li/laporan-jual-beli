<?php

include "header.php";

$form = "";

if($_REQUEST['form'] == 'edit')
{		
	$form = $_REQUEST['form'];
	 include "../connection.php";

	$query_select_data_untuk_diupdate =
	 "SELECT * FROM pembelian where id='".$_REQUEST['id']."' ";
	$res= mysqli_query($conn,$query_select_data_untuk_diupdate);
	$row = mysqli_fetch_array($res);

	$tgl_beli=$row['tgl_beli'];
	$nama_barang=$row['nama_barang'];
	$jumlah_barang=$row['jumlah_barang'];
	$Suplier=$row['Suplier'];
	$harga_beli_semua=$row['harga_beli_semua'];
	$pembayaran=$row['pembayaran'];



}
?>
	
<div class="container">
	<div class="row">
	<div class="col-md-5">
    <form class="form-horizontal" action="../function/form_action_beli.php" method='POST'>
	<h3 style="text-align:center">Edit Data Pembelian an/ <b style="color:blue"> <?php echo $nama_barang ?></b></h3></center>
		
		<div class="form-group">
		<label>Tanggal Pembelian</label>
		<input type="date" name="tgl_beli"  
		value="<?php echo ($form=='edit')?$tgl_beli:'';?>"
		class="form-control">
		</div>
		
		<div class="form-group" >
		<label for="firstname" class="lodo">Nama Barang</label> 
        <input type="text" class="form-control"
        name="nama_barang"  value="<?php echo ($form=='edit')?$nama_barang:'';?>"> 						
        </div> 
		
		<div class="form-group" >
		<label for="firstname" class="lodo">Jumlah Barang</label> 
        <input type="text" class="form-control"
         name="jumlah_barang"  value="<?php echo ($form=='edit')?$jumlah_barang:'';?>"> 						
        </div> 
		
		<div class="form-group" >
		<label for="firstname" class="lodo">Suplier</label> 
        <input type="text" class="form-control"
        name="Suplier"
        value="<?php echo ($form=='edit')?$Suplier:'';?>"> 						
        </div> 
		
		<div class="form-group" >
		<label for="firstname" class="lodo">Harga Beli Barang </label> 
        <input type="number" name="harga_beli_semua" class="form-control"
        value="<?php echo ($form=='edit')?$harga_beli_semua:'';?>"> 						
        </div> 
		
		<div class="form-group">
		<label>Pembayaran</label>
		<select name="pembayaran" class="form-control" >
				<option value="Lunas"<?php echo ($form=='edit' && $pembayaran=="Lunas")?'selected="selected"':'';?>> Cash </option>
				<option value="Kredit 3 Bln" <?php echo ($form=='edit' && $pembayaran=="Kredit 3 bulan")?'selected="selected"':'';?>> Kredit 3 Bln</option>
				<option value="Kredit 6 Bln" <?php echo ($form=='edit' && $pembayaran=="kredit 6 bulan")?'selected="selected"':'';?>> Kredit 6 Bln </option>
				<option value="Kredit 12 Bln" <?php echo ($form=='edit' && $pembayaran=="kredit 12 bulan")?'selected="selected"':'';?>> Kredit 12 Bln </option>
						</select>
						</div>
        
        <button class="btn" type="submit" style=" background-color:#ccc; color:blue"><b> Edit Pembelian </b></button>
        - <a href="penjualan.php" > Cancel </a>
        
        <p class="buttons">
			<input type="hidden" name="form" value="add"/></p>
            
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
        


