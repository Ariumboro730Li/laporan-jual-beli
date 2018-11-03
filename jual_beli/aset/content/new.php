


<?php
include 'header.php'
?>
 
 
 <body>
    <div class="container">
    
   <h1 style="text-align:center; color:#ff5500;"> Data Penjualan </h1>
   
    <div class="row">
		<div class="col-md-10">
			<ul class="list-inline"> 
				<li><button type="button" class="btn" data-toggle="modal" data-target="#myModal" style="color:#ff5500;">
				Tambah Penjualan </button></li> 
				<li class="pagination">					
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
            <th> Tanggal		    </th>
			<th> Nama Pembeli	</th>
            <th> Nama Barang	     </th>
            <th> Jumlah Terjual </th>
            <th> Harga Barang/pcs 	 </th>
            <th> Total Penjualan </th>
            <th> Opsi </th> 			
  </tr>
  
        </thead>
      

  <?php 
  $halaman = 1;
  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
  $result = mysql_query("SELECT * FROM penjualan");
  $total = mysql_num_rows($result);
  $pages = ceil($total/$halaman);            
  $query = mysql_query("select * from penjualan LIMIT $mulai, $halaman")or die(mysql_error);
  $o =$mulai+1;
 
 
  while ($data = mysql_fetch_assoc($query)) {
    ?>
	      <tbody>

            <tr class="abu">
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
 
 
          </tbody>
          </table>
		  </div>
          </div>
		  
         
 
<div class="col-md-5">
<ul class="pagination"> 
<li><a href="#">&laquo;</a></li> 
  <li><?php for ($i=1; $i<=$pages ; $i++){ ?>
  <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
 
  <?php } ?></li>
 <li><a href="#">&raquo;</a></li> 
</ul> 

</div>