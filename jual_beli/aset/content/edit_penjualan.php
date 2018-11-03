<?php

include "header.php";

$form = "";

if($_REQUEST['form'] == 'edit')
{		
	$form = $_REQUEST['form'];
	 include "../connection.php";

	$query_select_data_untuk_diupdate =
	 "SELECT * FROM penjualan where id='".$_REQUEST['id']."' ";
	$res= mysqli_query($conn,$query_select_data_untuk_diupdate);
	$row = mysqli_fetch_array($res);

	$date = $row ['date'];
	$nama_barang = $row ['nama_barang'];
	$nama_pembeli = $row ['nama_pembeli'];
	$jumlah_barang = $row['jumlah_barang'];
	$harga_barang = $row ['harga_barang'];
	$total_penjualan = $jumlah_barang * $harga_barang;


}
?>
	
<div class="container">
	<div class="row">
	<div class="col-md-5">
    <form class="form-horizontal" action="../function/form_action_jual.php" method='POST'>
	<h3 style="text-align:center">Edit Data Penjualan an/ <b style="color:blue"> <?php echo $nama_pembeli ?></b></h3></center>
		<div class="form-group">
		<label>Tanggal Penjualan</label>
		<input type="date" name="date"  
		value="<?php echo ($form=='edit')?$date:'';?>"
		class="form-control">
		</div>
		
		<div class="form-group" >
		<label for="firstname" class="lodo">Nama Barang</label> 
        <input type="text" class="form-control"
        name="nama_barang"  value="<?php echo ($form=='edit')?$nama_barang:'';?>"> 						
        </div> 
		
		<div class="form-group" >
		<label for="firstname" class="lodo">Nama Pembeli</label> 
        <input type="text" class="form-control"
         name="nama_pembeli"  value="<?php echo ($form=='edit')?$nama_pembeli:'';?>"> 						
        </div> 
		
		<div class="form-group" >
		<label for="firstname" class="lodo">Jumlah Barang Terjual</label> 
        <input type="text" class="form-control"
        name="jumlah_barang"
        value="<?php echo ($form=='edit')?$jumlah_barang:'';?>"> 						
        </div> 
		
		<div class="form-group" >
		<label for="firstname" class="lodo">Harga Barang / Pcs</label> 
        <input type="number" name="harga_barang" class="form-control"
        value="<?php echo ($form=='edit')?$harga_barang:'';?>"> 						
        </div> 
        
        <button class="btn" type="submit" style=" background-color:#ccc; color:#ff5500"><b> Edit Penjualan </b></button>
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
        


