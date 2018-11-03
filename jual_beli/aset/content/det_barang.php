<?php include "header.php" ?>
<?php include "connections.php" ?>


<div class="container">
<div class="row">
<div class="col-md-12">
<div class="center-block" style="width:500px">


			<?php 
				$id = mysql_real_escape_string($_GET['id']);
				$det=mysql_query("select * from data_barang where id ='$id'")
					or die(mysql_error());
				while($d=mysql_fetch_array($det)){
					?>
					
			<h3> Detail Barang <?php echo $d['nama_barang'] ?> </h3>
			<a href="#"  onClick="history.go(-1);"> Halaman Sebelumnya </a> <br>

			<table class="table">
				<tr> 
					<td> Nama Barang </td>
					<td> <?php echo $d['nama_barang'] ?></td>
				</tr>
				<tr> 
					<td> Suplier Barang </td>
					<td> <?php echo $d['suplier'] ?></td>
				</tr>
				<tr> 
					<td> Stok Tersedia </td>
					<td> <?php echo $d['jumlah_barang'] ?> Unit</td>
				</tr>
				<tr> 
					<td> Modal Barang </td>
					<td> Rp. <?php echo number_format ($d['harga_beli_semua']); ?> </td>		

				</tr>
				<tr> 
					<td> Presentase (%) Laba </td>
					<td>  <?php echo number_format ($d['lo']); ?> %</td>		

				</tr>
				
				<tr> 
					<td> Harga Beli Satuan </td>
					<td> Rp. <?php echo number_format ($d['harga_beli']); ?> </td>		
				</tr>
				<tr> 
					<td> Harga Pokok Penjualan </td>
					<td> Rp. <?php echo number_format ($d['harga_pokok']); ?> </td>		
				</tr>
				<tr> 
					<td> Harga Jual Barang </td>
					<td> Rp. <?php echo number_format ($d['harga_jual']); ?> </td>		
				</tr>
				
			</table>
				<?php } ?>
</div>
</div>
</div>
</div>


<?php include 'footer.php'; ?>