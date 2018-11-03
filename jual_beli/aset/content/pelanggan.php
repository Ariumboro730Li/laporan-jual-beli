<?php

include "header.php";

?>
<?php 
$per_hal=10;
$jumlah_record=mysql_query("SELECT COUNT(*) from pelanggan");
$jum=mysql_result($jumlah_record, 0);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;   
?>


<div class="containers">
</div>
<body>
    <div class="container">
    
   <h2 style="text-align:center; color:#ff5500;"> Data Pelanggan</h2>
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
				<a href="?page=<?php echo $x ?>" style="color:#ff5500;"><?php echo $x ?></a></li>
					<?php
				}
				?>		
				</li> 
			</ul>
		
				
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
        	<th> No 			 </th>
            <th>            Identitas	</th>           
            <th>            No Identitas	</th>           
            <th>            Nama Pelanggan	</th>
            <th>            Barang Favorit  </th>
            <th>            No Handphone / WA 	 </th>
            <th>            Ulang Tahun </th>
            <th>            Status </th>
            <th> 			Opsi </th>
         </tr>
      </thead>
      <tbody>
	  
      	<?php
		
		$i= 1;
		$query_select = "SELECT * FROM pelanggan";
		$res = mysqli_query($conn,$query_select);
		while ($row = mysqli_fetch_array($res))
		{
			?>
            <tr class="abu">
            <td> <?php echo $i++; ?> </td>
			<td> <?php echo $row ['kartu_identitas']; ?> </td>
            <td> <?php echo $row ['no_identitas']; ?> </td>
            <td> <?php echo $row ['nama_pelanggan']; ?> </td>
			<td> <?php echo $row ['barang_favorit']; ?> </td>
            <td> <?php echo $row ['no_handphone']; ?> </td>
            <td> <?php echo $row ['ultah']; ?> </td>
            <td> <?php echo $row ['status']; ?> 
			<td> <a href="../function/form_action_pelanggan.php
			?form=delete&id=<?php echo $row['id'];?>
			&nama_pelanggan=<?php echo $row['nama_pelanggan'] ?>">
             Hapus </a>
            
             -  <a href="input_pelanggan.php?form=edit&id=
				  <?php echo $row['id'];?> 
                  &nama_pelanggan=<?php echo $row['nama_pelanggan'] ?>
                  " style="color:green">
                   Edit </a></td>

             </tr>
             <?php
			 
		 }
				
		  ?>
          </tbody>
          </table>
          </div>
          </div>
         
          
		
<script type="text/javascript">
		$(document).ready(function(){
			$("#tgl_masuk").datepicker({dateFormat : 'yy/mm/dd'});							
		});
</script>
<?php
include "footer.php";
?>          
          
         