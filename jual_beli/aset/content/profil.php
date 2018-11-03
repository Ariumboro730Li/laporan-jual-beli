<?php
include "header.php";
?>

<div class="container">
<div class="col-md-6">
		<div class="row">
		<h3> Profil <?php echo $_SESSION ['username']; ?> </h3>
		
		<h3>  
		<?php "SELECT * FROM penjualan login id='".$_REQUEST ['id']."' ";
	$res= mysqli_query($conn,$query_select_data_untuk_diupdate);
	$row = mysqli_fetch_assoc($res); 
	{
		echo $_REQUEST ['nama']; 
	}
	?>
	</h3>
	
	
		