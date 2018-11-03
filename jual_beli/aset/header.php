<?php
include "../koneksi.php";
session_start();
if (!isset($_SESSION['username'])){
header ("location:../../index.php");
}
?>
<?php
include "../connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	
<title> Umboro Corp </title>

	<link rel ="stylesheet" type="text/css" 
	href="../../assets/css/bootstrap.css">

	<link rel ="stylesheet" type="text/css"
	href="../../assets/js/jquery-ui/jquery-ui.css">
 
	<script type="text/javascript" 
	src="../../assets/js/jquery.js"></script>
    
	<script type="text/javascript" 
	src="../../assets/js/jquery.js"></script>
    
	<script type="text/javascript"
	 src="../../assets/js/bootstrap.js"></script>
     
	<script type="text/javascript" 
	src="../../assets/js/jquery-ui/jquery-ui.js"></script>
    
    <style>
	body {font-family:nyala; }
	.ay:hover {
		font-style:oblique; color:#D00;}
	.au {background-color:red; }
	.ox{background-color:white; border-color:red; border-top:none; border-left:none; border-right:none;}
	.ol {color:white;}
	.ac {background-color:white; 
			color:black;}
	.ass:hover {text-decoration:underline blue;}
	</style>
	

</head>


<body>

<div class="container">
<div class="row">
<div id="c" class="col-md-12">
<nav class="navbar navbar-default ox" role="navigation">
   	<div class="navbar-header"> 
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse"> 
			<span class="sr-only">Toggle navigation</span> 
			<span class="icon-bar"></span> <span class="icon-bar"></span> 
			<span class="icon-bar"></span> 
		</button> 
		<a href="../../index.php" class="navbar-brand" style="color:#ff5500; font-size:2.2em;"><b>Umboro Corp</b></a>
		
	</div> 
	
	<div class="collapse navbar-collapse" id="example-navbar-collapse" > 
		<ul class="nav navbar-nav"> 
		<li class="ay"><a href="penjualan.php">Penjualan</a></li> 
		<li class="ay"><a href="pembelian.php" >Pembelian</a></li> 
		<li class="ay"><a href="data_barang.php">Data Barang</a></li> 
		<li class="ay"><a href="pelanggan.php" >Pelanggan</a></li> 
		<li class="dropdown"> <a href="#" data-toggle="dropdown"> Menu <b class="caret"></b></a> 
				<ul class="dropdown-menu" > 
					<li class="ay"><a href="#" >Pengaturan</a></li> 
							<li class="divider"></li> 
					<li class="ay"><a href="#"  data-toggle="modal" data-target="#myModal20"> Call Service</a></li> 
							<li class="divider"></li> 
					<li class="ay"><a  href="#" data-toggle="modal" data-target="#myModal13" style="color:blue;">Log Out</a></li>			
				</ul></li> 
		<li><a  href="#" data-toggle="modal" data-target="#myModal15">Hello <b style="color:blue" class="ass"> <?php echo $_SESSION['username']  ?></style></b></b> </a></li>
		</ul> 
	</div> 
	
	<div class="collapse navbar-collapse" id="example-navbar-collapse">				
		<span class="nav navbar-nav navbar-right">
			<a id="pesan_sedia" href="#" data-toggle="modal" data-target="#modalpesan">
            <span class='glyphicon glyphicon-comment'></span> Pesan</a></span>
		</span>
	</div>
	
</nav>
</div>
</div>
</div>
	
	<div id="myModal13" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title" style="text-align:center;"> 
				Klik untuk <a href="../../logout.php"  > LOG OUT </a></h3>
				
			</div>
		</div>
	</div>
	</div>
	
	<div id="myModal15" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title" style="text-align:left;">Profile <?php echo $_SESSION['username']; ?> </a></h3>
			</div>
		</div>
	</div>
	</div>
	
	<div id="myModal20" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" style="text-align:left;"> Sampaikan Pesan Anda disini <br> atau Hubungi Kami di <a href="#">088989899898</a></h4>
			</div>
			<div class="modal-body">
					<form>
					
					<div class="form-group"> 
					<label for="name">Pesan Anda</label> 
					<textarea class="form-control" rows="3">
					</textarea> 
					</div>
					
					<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<button class="btn" type="submit" style="background-color:blue; color:white;"> <b> Submit Pesan </b></button>
					</div>
					
					</form>
			</div>
		</div>
	</div>
	</div>
	
	
	
	<div id="myModal10" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h2 class="modal-title" style="color:red; text-align:center;"><b>Tambah Stok</b></h2>
			</div>
			<div class="modal-body">
				<form  action="../function/tambah_pembelian_header.php"  method='POST'>
					
					<div class="form-group">
						<label>Tanggal Pembelian</label>
						<input name="tgl_beli" type="date"
						class="form-control" required>						
					</div>
									
					<div class="form-group">
							<label>Nama Barang</label>	
							<select class="form-control" name="nama_barang">
								<option value="input nama" disabled="disabled" selected> - Pilih Barang - </option>
								<?php 
								$brg=mysql_query("select * from data_barang");
								while($b=mysql_fetch_array($brg)){
									?>	
									 
									<option value="<?php echo $b['nama_barang']; ?>">
									<?php echo $b['nama_barang'] ?></option>
									<?php 
								}
								?>
							</select>
					</div>
								
					<div class="form-group">
						<label> Jumlah Barang</label>
						  <input type="number" name="jumlah_barang" 
						  class="form-control" 
						  placeholder="Jumlah Barang Pembelian" required>
					</div>
					
					<div class="form-group">
						<label>Suplier</label>
						  <select class="form-control" name="Suplier">
							<option disabled="disabled" selected> - Pilih Suplier - </option>
								<?php 
								$brg=mysql_query("select * from data_barang");
								while($b=mysql_fetch_array($brg)){
									?>	
									 
									<option value="<?php echo $b['suplier']; ?>" >
									<?php echo $b['suplier'] ?></option>
									<?php 
								}
								?>
							</select>
					</div>
					
					<div class="form-group">
						<label>harga Beli Barang</label>
						<input type="number" name="harga_beli_semua" 
						 class="form-control" 
						placeholder="Harga Pembelian" required>
						</div>
						
					<div class="form-group">
						<label>Pembayaran</label>
						<select name="pembayaran" class="form-control">
							<option value="Lunas"> Cash </option>
							<option value="Kredit 3 Bln"> Kredit 3 Bln</option>
							<option value="Kredit 6 Bln"> Kredit 6 Bln </option>
							<option value="Kredit 12 Bln"> Kredit 12 Bln </option>
						</select>
						</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<button class="btn" type="submit" style="background-color:red; color:white;"> <b> Submit Pembelian </b></button>
				</div>
			</form>
		</div>
</div>
</div>
</div>
</div>
	
	
<div class="container">
<div class="col-md-5" style="float:right;">	
		
		<?php  $periksa=mysql_query("select * from data_barang where jumlah_barang <=10 ");
		while($q=mysql_fetch_array($periksa))
		{	
			if	($q['jumlah_barang']<=10)
			{
		?>	
		<script>
			$(document).ready(function(){
				$('#pesan_sedia').css("color","red");
				$('#pesan_sedia').append("<span class='glyphicon glyphicon-asterisk'></span>");
			});
		</script>
		<?php
		echo " 
			<div style='padding:3px; text-align:right;' class='alert text-right '>
		
			<span class='glyphicon glyphicon-info-sign'></span> 				
			<span class='glyphicon glyphicon-info-sign'></span> 				
				 
			Stok  <a style='color:red'>". $q['nama_barang']."</a>
			tersisa  <a style='color:red'> ". $q['jumlah_barang']." </a>. Segera pesan lagi !! &nbsp
		
			<button type='button' class='btn btn-danger glyphicon glyphicon-plus' 
			data-toggle='modal' data-target='#myModal10' style='padding-top:1px; padding-bottom:1px;' ></button>

			</div>
			
			";	
			}
		}
		?>
</div>
</div>

<script type="text/javascript">

      $(document).ready(function() {

        var stickyNavTop = $('#c').offset().top;

        var stickyNav = function(){

          var scrollTop = $(window).scrollTop();

          if (scrollTop > stickyNavTop) {

            $('#c').css({ 'position': 'fixed', 'top':0, 'z-index':9999 });

          } else {

            $('#c').css({ 'position': 'relative' });

          }

        };

        stickyNav();

        $(window).scroll(function() {

          stickyNav();

        });

      });

    </script>
