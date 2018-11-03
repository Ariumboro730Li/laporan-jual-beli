<?php
error_reporting(0);
include "header.php";
include "connections.php";
?>
<?php
$per_hal=15;
$jumlah_record=mysql_query("SELECT COUNT(*) from pembelian");
$jum=mysql_result($jumlah_record, 0);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>

<body>
<div class="container">
   <div class="row">
		<div class="col-md-12 text-center">
			<h1 style="color:green"> Data Pembelian </h1>
		</div>
	</div>
		<?php
	if($_REQUEST['insert'] == "success")
	{
		?>
		<div class="alert alert-success alert-dismissible" >
			
			  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			  <p style="font-size:1.2em;" ><i class="glyphicon glyphicon-check"></i> Data Pembelian Berhasil Diinput</p>
			  
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
			  <p style="font-size:1.2em; color:red;" ><i class="glyphicon glyphicon-check"></i> Data Penjualan Berhasil Dihapus</p>
			  
		</div>
		<?php
	}
?>

   
   <div class="row">
		<div class="col-md-10">
			<ul class="list-inline"> 
				<li>Record : <?php echo $jum; ?></li>
				<li>Halaman : <?php echo $halaman; ?></li>
				<li class="pagination">					
				<?php 
				for($x=1;$x<=$halaman;$x++){
				?>
				<li><a href="?page=<?php echo $x ?>" style="color:#ff5500;"><?php echo $x ?></a></li>
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
    	<thead>
    	<tr class="active">
        	<th> No  </th>
            <th> Tanggal Beli</th>
            <th> Waktu</th>
			<th> Nama Barang	</th>
            <th> Jumlah Barang </th>
			<th> Suplier     </th>
            <th> Harga Barang	 </th>
            <th> Pembayaran</th>
            <th> Opsi </th>
         </tr>
      </thead>
	  
	  <tbody>
      <?php
		$i=$start+1;
		$query_select = "SELECT * FROM pembelian ORDER BY id DESC limit $start, $per_hal";
		$res = mysqli_query($conn,$query_select);
		while ($row = mysqli_fetch_array($res))
		{
			?>
            <tr class="abu">
            <td> <?php echo $i++; ?> </td>
            <td> <?php echo $row ['tgl_beli']; ?> </td>
			<td> <?php echo $row ['time']; ?> </td>
            <td> <?php echo $row ['nama_barang']; ?> </td>
			<td>     <?php echo number_format ($row ['jumlah_barang']); ?> Unit </td>
			<td> <?php echo $row ['Suplier']; ?> </td>
            <td> Rp. <?php echo number_format ($row ['harga_beli_semua']); ?> </td>
			<td> <?php echo $row ['pembayaran']; ?> </td>
			<td> 
			<div class="input-group" >  
			<div class="btn-group"> 
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" > 
					Opsi Barang <span class="caret"></span> 
					</a> 
			<ul class="dropdown-menu"> 
			<li><a onclick="if(confirm('Apakah anda yakin ingin menghapus data pembelian <?php echo $row['nama_barang'];?> tanggal <?php echo $row['tgl_beli'];?>?'))
				{ location.href='../function/del_beli.php?form=delete&id=<?php echo $row['id'];?>'}"> Delete Barang </a></li>


             <li><a href="edit_pembelian.php?form=edit&id=
				  <?php echo $row['id'];?> 
                  &date=<?php echo $row['date']?>
                  &nama_barang=<?php echo $row['nama_barang'] ?>">
                   Edit Barang </a></li>
			<ul>
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


<?php
include "footer.php";
?>          
    