


<?php
include 'header.php'
?>
 
<table border="1">
  <tr>
    <th> No  </th>
            <th> Tanggal		    </th>
			<th> Nama Pembeli	</th>
            <th> Nama Barang	     </th>
            <th> Jumlah Terjual </th>
            <th> Harga Barang/pcs 	 </th>
            <th> Total Penjualan </th>
            <th> Opsi </th>                     
  </tr>
  <?php 
  $halaman = 10;
  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
  $result = mysql_query("SELECT * FROM penjualan");
  $total = mysql_num_rows($result);
  $pages = ceil($total/$halaman);            
  $query = mysql_query("select * from penjualan LIMIT $mulai, $halaman")or die(mysql_error);
  $o =$mulai+1;
 
 
  while ($data = mysql_fetch_assoc($query)) {
    ?>
    <tr>
	<?php
		
		$query_select = "SELECT * FROM penjualan";
		{
			?>
      <td><?php echo $o++; ?></td>                  
           <td> <?php echo $data['date']; ?> </td>
			<td> <?php echo $data['nama_pembeli']; ?> </td>			
            <td> <?php echo $data['nama_barang']; ?> </td>
			<td> <?php echo $data ['jumlah_barang']; ?> Unit </td>
            <td> Rp. <?php echo number_format ($data ['harga_barang']); ?> </td>
          	<td> Rp. <?php echo number_format ($data ['total_penjualan']); ?> </td>
                  
    </tr>
 
    <?php               
  } 
  ?>
  
  <?php } ?>
 
 
</table>          
 
<div class="">
  <?php for ($i=1; $i<=$pages ; $i++){ ?>
  <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
 
  <?php } ?>
 
</div>