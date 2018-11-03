<?php

include "header.php";

$form = "";

if($_REQUEST['form'] == 'edit')
{		
	$form = $_REQUEST['form'];
	 include "../connection.php";

	$query_select_data_untuk_diupdate =
	 "SELECT * FROM pelanggan where id='".$_REQUEST['id']."' ";
	$res= mysqli_query($conn,$query_select_data_untuk_diupdate);
	$row = mysqli_fetch_array($res);

	$no_identitas = $row['no_identitas'];
	$kartu_identitas = $row['kartu_identitas'];
	$nama_pelanggan = $row ['nama_pelanggan'];
	$barang_favorit = $row['barang_favorit'];
	$no_handphone = $row ['no_handphone'];
	$ultah = $row ['ultah'];
	$status = $row ['status'];


}
?>



<div class="container">
	<div class="row">
	<div class="col-md-5">
    <form class="form-horizontal" action="../function/form_action_pelanggan.php" method='POST'>
	<h3 style="text-align:center">Edit Data Penjualan an/ <b style="color:blue"> <?php echo $nama_pelanggan ?></b></h3></center>
		
		<div class="form-group">
    	<label> No Identitas </label>
        <input type="number" name="no_identitas" class="form-control"
        value="<?php echo ($form=='edit')?$no_identitas:'';?>">
		</div>
        
		<div class="form-group">
        <label> Nama Pelanggan 	</label>
        <input type="text" name="nama_pelanggan"  class="form-control"
        value="<?php echo ($form=='edit')?$nama_pelanggan:'';?>"></div>
		
		<div class="form-group">
        <label> Barang Favorit </label>
        <select class="form-control" class="form-control" name="barang_favorit">
		<?php 
			$brg=mysql_query("select * from data_barang");
			while($b=mysql_fetch_array($brg)){?>	
				<option value="<?php echo $b['nama_barang']; ?>">
					<?php echo $b['nama_barang'] ?></option>
						<?php } ?>
							</select>
        </div>
       
	   	<div class="form-group">
        <label>  No Handphone / WA </label>
         <input type="text" name="no_handphone"  class="form-control"
			value="<?php echo ($form=='edit')?$no_handphone:'';?>">
        </div>

		<div class="form-group">
         <label> Ulang Tahun		</label>
        <input type="date" name="ultah" class="form-control"
        value="<?php echo ($form=='edit')?$ultah:'';?>"></div>
        
		<div class="form-group">
        <label> Status 	</label>
        <input type="text" name="status" class="form-control"
        value="<?php echo ($form=='edit')?$status:'';?>"></div>

        
        <button class="btn" type="submit" style=" background-color:#ccc; color:#ff5500"><b> Edit Pelanggan </b></button>
        - <a href="pelanggan.php"> Cancel </a>
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
        


