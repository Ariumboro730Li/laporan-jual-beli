<?php
error_reporting(0);
include "header.php";
?>
<?php 
$per_hal=15;
$jumlah_record=mysql_query("SELECT COUNT(*) from data_barang");
$jum=mysql_result($jumlah_record, 0);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>

<body>
<div class="container">
    
	<div class="row">
		<div class="col-md-12 text-center">
			<h1 style="color:green;"> Daftar Barang </h1>
			</div>
	</div>
   	<?php
	if($_REQUEST['insert'] == "success")
	{
		?>
		<div class="alert alert-success alert-dismissible" >
			
			  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			  <p style="font-size:1.2em;"><i class="glyphicon glyphicon-check"></i> Data Barang Berhasil Diinput</p>
			  
		</div>
		<?php
	}
?>

	<?php
	if($_REQUEST['insert'] == "delete")
	{
		?>
		<div class="alert alert-warning alert-dismissible" >
			
			  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			  <p style="font-size:1.2em; color:red;"><i class="glyphicon glyphicon-check"></i>Data Barang Berhasil Dihapus</p>
			  
		</div>
		<?php
	}
?>

		
   <div class="row">
		<div class="col-md-9">
			<ul class="list-inline"> 
				<li>Record : <?php echo $jum; ?></li>
				<li>Halaman : <?php echo $halaman; ?></li>
				<li class="pagination">			
				<?php 
				for($x=1;$x<=$halaman;$x++){
				?>
				<li>
				<a href="?page=<?php echo $x ?>" style="color:#xf5500;"><?php echo $x ?></a></li>
					<?php
				}
				?>		
				</li> 
			</ul>
		</div>
	</div>

</div>
    
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="table-responsive">
				<table class="table table-hover">
		<div id="x">
    	<thead>
    	<tr class="active">
        	<th> No 		 </th>
			<th> Suplier </th>
            <th> Nama Barang </th>
            <th> Stok Tersedia  </th>
            <th> Harga Jual </th>
            <th> Presentase Laba </th>
            <th> Opsi </th>
		
         </tr>
      </thead>
	  </div>
      <tbody>
      	<?php
		
		$i=$start+1;
		$query_select = "SELECT * FROM data_barang ORDER BY id DESC limit $start, $per_hal";
		$res = mysqli_query($conn,$query_select);
		while ($row = mysqli_fetch_array($res))
		{
			?>
            <tr class="abu">
            <td> <?php echo $i++; ?> </td>
			<td style="font-size:1em;"> <?php echo $row ['suplier']; ?> </td>
            <td style="font-size:1em; color:blue"> <?php echo $row ['nama_barang']; ?> </td>
            <td style="color:blue"> <?php echo number_format ($row ['jumlah_barang'])
			; ?> Unit </td>					
            <td> Rp. <?php echo number_format ($row ['harga_jual']); ?> </td>         
            <td>  <?php echo number_format ($row ['lo']); ?>  %</td>         
			<td> 	
			<div class="input-group" >  
			<div class="btn-group"> 
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" > 
					Opsi Barang <span class="caret"></span> 
					</a> 
					
				<ul class="dropdown-menu"> 
					<li> <a  href="det_barang.php?id=<?php echo $row['id']; ?>" >Detail Barang</a> </li>

					<li> <a onclick="if(confirm('Apakah anda yakin ingin menghapus data <?php echo $row['nama_barang'];?> ?'))
							{ location.href='../function/del_barang.php?form=delete&id=<?php echo $row['id'];?>'}"> Delete Barang </a></li> 


					<li> <a href="edit_data_barang.php?form=edit&id=<?php echo $row['id'];?> 
							&tgl_masuk=<?php echo $row['tgl_masuk']?>
							&nama_barang=<?php echo $row['nama_barang'] ?>"> Edit Barang </a></li> 
				</ul> 
			</div>
			</div>
			</td>
            </tr>
			 
			 
             <?php
			 
		 }
				
		  ?>
		  
		  </tbody>
          </table>
       </div>
</div>
</div>
</div>



</body>
		  
		
	

<?php
include "footer.php";
?>          
          
         