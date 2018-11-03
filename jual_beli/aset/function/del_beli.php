<?php 
include "../connection.php";

switch ($_REQUEST['form'])

{
case 'delete':

		$query_delete = "DELETE FROM pembelian
		where id='".$_REQUEST['id']."'";
		if(mysqli_query($conn,$query_delete))
		
		break;
		
}
header('Location: ../content/pembelian.php?insert=delete');

		?>

