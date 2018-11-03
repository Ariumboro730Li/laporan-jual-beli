<!DOCTYPE html>
<html>
<head>
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


	
<title> Um.com </title>



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


<div  id="f" class="col-lg-12">

<div class="container">
<div class="row">
<nav class="navbar navbar-default ox" role="navigation">
   	<div class="navbar-header"> 
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse"> 
			<span class="sr-only">Toggle navigation</span> 
			<span class="icon-bar"></span> <span class="icon-bar"></span> 
			<span class="icon-bar"></span> 
		</button> 
		<a href="../../index.php" class="navbar-brand" style="color:#ff5500; font-size:2.2em;"><b>Um<span style="color:black">.com</span></b></a>
		
	</div> 
	<div class="navbar-header" style="float:right; "> 
		
		<a  class="navbar-brand"  href="#" data-toggle="modal" data-target="#myModal15" style="font-size:1em;">
		Hello <b style="color:blue" class="ass"> <?php echo $_SESSION['username']  ?></style></b></b> </a>

		<a class="navbar-brand dropdown" id="pesan_sedia" href="#" data-toggle="dropdown" style="font-size:1em;"> 
		<span class="glyphicon glyphicon-bell btn-xs"></span>Message</a>
		
				<ul class="dropdown-menu pull-right">
					<li> 
					<?php  $periksa=mysql_query("select * from data_barang where jumlah_barang <=8  ORDER BY id DESC");
								while($q=mysql_fetch_array($periksa))
													{	
											if	($q['jumlah_barang']<=8)
													{
					?>	
						<script>
							$(document).ready(function(){
							$('#pesan_sedia').css("color","red");
							});
						</script>
					<?php
							echo " 
									<div style='padding:3px; text-align:left;' class='alert'>
		
									&nbsp
									<span class='glyphicon glyphicon-info-sign' style='color:red'></span> 				
									<span class='glyphicon glyphicon-info-sign' style='color:red'></span> 	
									&nbsp
				 
									Stok  <a  style='color:red'>". $q['nama_barang']."</a>
									tersisa  <a style='color:red'> ". $q['jumlah_barang']." </a>. 
									Segera <a  href='#' data-toggle='modal' data-target='#myModal10' style='color:blue;'>pesan</a> lagi !! &nbsp
	
									</div>
			
								";	
										}
									}
					?>
					</li>			
				</ul>
		
	</div> 

	
	<div class="collapse navbar-collapse" id="example-navbar-collapse"> 
		<ul class="nav navbar-nav"> 
		<li class="ay"><a href="penjualan.php">Penjualan</a></li> 
		<li class="ay"><a href="pembelian.php" >Pembelian</a></li> 
		<li class="ay"><a href="data_barang.php">Daftar Barang</a></li> 
		<li class="ay"><a href="pelanggan.php" >Pelanggan</a></li> 
		<li class="dropdown"> <a href="#" data-toggle="dropdown"> Menu <b class="caret"></b></a> 
				<ul class="dropdown-menu" role="menu"> 
					<li><a href="#home" data-toggle="tab"> Simple K </a></li>
					<li class="ay"><a href="#" >Pengaturan</a></li> 
					<li class="ay"><a href="#"  data-toggle="modal" data-target="#myModal20"> Call Service</a></li> 
					<li class="ay"><a  href="#" data-toggle="modal" data-target="#myModal13" style="color:blue;">Log Out</a></li>			
				</ul>
				</li> 
				
		
		</ul> 
	</div> 	
</nav>

	<div class="row"> 
	<div class="col-md-12"> 
		<div class="input-group" >  
			<div class="btn-group"> 
					<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" style="border-radius:30%; padding:10px;"> 
					<span class="glyphicon glyphicon-edit"></span>
					<span class="caret"></span> 
					</button> 
					
					<span class="sr-only">Toggle Dropdown</span> 
				<ul class="dropdown-menu"> 
					<li><a href="#" type="button" data-toggle="modal" data-target="#myModal88">
						Rincian Barang</a></li>
						
					<li class="divider"> </li>
					<li> <a href="#" type="button"  data-toggle="modal" data-target="#myModal23">
						 Input Data Penjualan </a> </li>

					<li> <a href="#" type="button"  data-toggle="modal" data-target="#myModal27">
						 Input Data Pembelian </a></li> 

					<li> <a href="#" type="button" data-toggle="modal" data-target="#myModal25">
						 Input Daftar Barang</a></li>
						 
					<li><a href="#" type="button" data-toggle="modal" data-target="#myModal30">
						Input Pelanggan</a></li>
						
					
						

					

						 
				</ul>
			</div>
			</div>
				
	
	<div id="myTabContent" class="tab-content" > 
		<div class="tab-pane fade" id="home" > 	
			<SCRIPT language="JavaScript" SRC="kalkulator.js"></SCRIPT>
			 
			<div class="col-md-4" >
			<div class="form-group" style="background-color:white; padding:10px; padding-left:30px; margin-left:50px; margin-top:-40px; color:#ff5500; border-radius:30px;"> 
			
			<FORM NAME ="fform" role="form">
			<p><b style="font-size:1.8em;">Simple K</b>  <a style="font-size:0.8em; color:black;"> (f5 untuk menutup) </a></p>

			<div class="form-group"> 

				<input type="text"  name="bilangan1" style="color:black; width:200px" placeholder="Masukkan Angka 1"> <br>
				<input type="text" size="15" name="bilangan2" style="color:black; width:200px" placeholder="Masukkan Angka 2"> 
			</div>
			<div class="form-group"> 

				<INPUT TYPE="button"  style="color:black" value="+" onclick="tambah()">
				<INPUT TYPE="button" style="color:black" value="-" onclick="kurang()">
				<INPUT TYPE="button" style="color:black"  value="*" onclick="kali()">
				<INPUT TYPE="button"  style="color:black"  value="/" onclick="bagi()">
				<INPUT TYPE="reset"  style="color:black" value="R">
			</div>
			</FORM>
			</div>
			</div>
		</div>
	</div>

			
	<div id="myModal13" class="modal fade">
	<div class="modal-dialog center-block" style="width:300px; margin-top:65px;">
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
	<div class="modal-dialog" style="margin-top:80px;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title" style="text-align:left;">Profile <?php echo $_SESSION['username']; ?> </h3>
			</div>
		</div>
	</div>
	</div>
	
	<div id="myModal20" class="modal fade">
	<div class="modal-dialog center-block" style="width:300px; margin-top:65px;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" style="text-align:left;"> Sampaikan Pesan Anda disini <br> atau Hubungi Kami di <a href="#">088989899898</a></h4>
			</div>
				<form>
				<div class="modal-body">
					<div class="form-group"> 
						<label for="name">Judul Pesan</label> 
						<textarea class="form-control" rows="1"></textarea>
					</div>
					<div class="form-group"> 
						<label for="name">Pesan Anda</label> 
						<textarea class="form-control" rows="3"></textarea>
					</div>
				</div>
					
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<button class="btn" type="submit" style="background-color:blue; color:white;"> <b> Submit Pesan </b></button>
				</div>
						
				</form>
		</div>
	</div>
	</div>
	
<div id="myModal10" class="modal fade">
	<div class="modal-dialog center-block" style="width:300px; margin-top:65px;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title" style="color:red; text-align:center;"><b>Tambah Stok</b></h3>
			</div>
			
				<form  action="../function/tambah_pembelian_header.php"  method='POST'>
			<div class="modal-body">	
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
									<?php echo $b['nama_barang'] ?> --( <?php echo $b['jumlah_barang'] ?>)--</option>
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
				
			</div>
				
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
						<button class="btn" type="submit" style="background-color:red; color:white;"> <b> Submit Pembelian </b></button>
					</div>
				</form>
		</div>
	</div>
</div>

<div id="myModal23" class="modal fade">
	<div class="modal-dialog center-block" style="width:300px; margin-top:65px;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title" style="color:#ff5500; text-align:center;"><b>Entry Penjualan</b></h3>
			</div>
			<form  action="../function/tambah_penjualan.php"  method='POST'>
				<div class="modal-body">
	
					<div class="form-group">
						<label>Tanggal Penjualan</label>
						<input name="date" type="date" class="form-control"  autocomplete="off" required >
						
					</div>
									
					<div class="form-group">
							<label>Nama Barang</label>		
							<select class="form-control" name="nama_barang">
							<option disabled selected> - Pilih Barang -</option>

								<?php 
								$brg=mysql_query("select * from data_barang where jumlah_barang >= 3");
								while($b=mysql_fetch_array($brg)){
									?>	
									<option value="<?php echo $b['nama_barang']; ?>"> 
									<?php echo $b['nama_barang'] ?> --( <?php echo $b['jumlah_barang'] ?> )-- </option>
									<?php 
								}
								?>
							</select>
							</div>
							
					<div class="form-group">
						<label>Harga Barang /Pcs</label>
						<select class="form-control" name="harga_barang" >
						<option disabled selected> - Harga Barang -</option>

								<?php 
								$brg=mysql_query("select * from data_barang where jumlah_barang != 0");
								while($b=mysql_fetch_array($brg)){
									?>	
									<option type="number" value="<?php echo $b['harga_jual']; ?>"> --( <?php echo $b['nama_barang'] ?> )--
									Rp.<?php echo $b['harga_jual']; ?>,-</option>
									
								<?php } ?>
									
									
							</select>
					</div>	
					
					<div class="form-group">
						<label>Nama Pembeli</label>
						  <input type="text" name="nama_pembeli" 
						  class="form-control" placeholder="Nama Pembeli .." required>
					</div>
					
					<div class="form-group">
						<label>Jumlah Barang Terjual</label>
						<input type="number" name="jumlah_barang" 
						class="form-control" 
						placeholder="Jumlah Barang Terjual..." required>
					</div>
				
				</div>

					<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<button class="btn btn-default" type="submit" style="background-color:#ff5500; color:white;"> <b> Submit Penjualan </b></button>
					</div>
			</form>
			
		</div>
		</div>
	</div>

<div id="myModal25" class="modal fade">
	<div class="modal-dialog center-block" style="width:300px; margin-top:65px;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" style="color:#ff5500; text-align:center;"><b>Tambah Data Barang</b></h4>
			</div>
				<form  action="../function/tambah_barang.php"  method='POST'>
				<div class="modal-body">
	
									
					<div class="form-group">
						<label>Nama Barang</label>								
						<input type="text" class="form-control" 
						name="nama_barang" placeholder="Barang Apa yang Anda Beli ?." required >
						</div>
					
					<div class="form-group">
						<label>Suplier</label>								
						<input type="text" class="form-control" 
						name="suplier" placeholder="Suplier tempat Anda membeli barang..." required >
						</div>
						
					<div class="form-group">
						<label>Barang</label>
						<select name="jumlah_barang" class="form-control">
							<option value="0" selected> 0 </option>
						</select>
						
						<select name="harga_beli_semua" class="form-control">
							<option value="0" selected> 0 </option>
						</select>
						
						<select name="harga_beli" class="form-control">
							<option value="0" selected> 0 </option>
						</select>
						</div>
	        
						
					<div class="form-group">
						<label>Presentase Keuntungan</label>
						<input type="number" name="lo" max="200"
						 class="form-control" 
							placeholder="Tentukan % laba Anda" required>
					</div>
					
			</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<button class="btn" type="submit" style="background-color:#ff5500; color:white;"> <b> Submit Data Barang </b></button>
				</div>
               
			</form>
</div>
</div>
</div>		

<div id="myModal27" class="modal fade">
	<div class="modal-dialog center-block" style="width:300px; margin-top:65px;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title" style="color:#ff5500; text-align:center;"><b>Entry Pembelian</b></h3>
			</div>
				<form  action="../function/tambah_pembelian.php"  method='POST'>
				<div class="modal-body">
	
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
									<?php echo $b['nama_barang'] ?> --(<?php echo $b['jumlah_barang'] ?>)--</option>
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
							<option disabled="disabled" selected> - Pilih Barang - </option>
								<?php 
								$brg=mysql_query("select * from data_barang");
								while($b=mysql_fetch_array($brg)){
									?>	
									 
									<option value="<?php echo $b['suplier']; ?>">
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
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<button class="btn" type="submit" style="background-color:blue; color:white;"> <b> Submit Pembelian </b></button>
				</div>
			</form>
		</div>
		</div>
		</div>


   <div id="myModal30" class="modal fade">
	<div class="modal-dialog center-block" style="width:300px; margin-top:65px;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" style="color:#ff5500; text-align:center;"><b>Data PeLanggan Baru</b></h4>
			</div>
			<form  action="../function/tambah_pelanggan.php"  method='POST'>
				<div class="modal-body" style="margin-bottom:-30px;">
					
					<div class="form-group">
						<label>Identitas</label>
						<select name="kartu_identitas" class="form-control">
							<option value="KTP"> KTP</option>
							<option value="SIM" required> SIM</option>
							<option value="SIM" required> Identitas Lain</option>
						</select>
							<input type="number" name="no_identitas" class="form-control"
							 required placeholder="Masukkan No KTP/SIM/Identitas Lain">
					</div>
									
					<div class="form-group">
						<label>Nama Pelanggan</label>								
						<input type="text" name="nama_pelanggan" class="form-control" 
						 placeholder="Nama Lengkap... " required >
					</div>
							
					<div class="form-group">
						<label>Barang Favorit </label>
						<select class="form-control" name="barang_favorit">
						<?php $brg=mysql_query("select * from data_barang");
							while($b=mysql_fetch_array($brg)){?>	
								<option value="<?php echo $b['nama_barang']; ?>">
								<?php echo $b['nama_barang'] ?></option>
								<?php } ?>
						</select>
					</div>	
					
					<div class="form-group">
						<label>No Handphone / WA </label>
						 <input type="text" name="no_handphone"
						  class="form-control" 
						  placeholder="Masukkan No Handphone / WA" required>
					</div>
					
					<div class="form-group">
						<label>Ulang Tahun</label>
						<input name="ultah" type="date" class="form-control" 
							autocomplete="off"required>
					</div>
					
					<div class="form-group">
						<label>Status Pernikahan </label>
						<select name="status" class="form-control">
							<option value="Sudah Menikah"> Sudah Menikah</option>
							<option value="Belum Menikah" required> Belum Menikah </option>
							<option value="Janda / Duda" required> Janda / Duda </option>
						</select>
					</div>
					
				</div>
				
					<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<button class="btn" type="submit" style="background-color:#ff5500; color:white;"> <b> Submit Pelanggan </b></button>
               		</div>
		

			</form>
		</div>
		</div>
		</div>
		
	<div id="myModal88" class="modal fade">
	<div class="modal-dialog center-block" style="width:450px; margin-top:65px;">
		<div class="modal-content">
				<div class="modal-body">
					<table class="table">
					<h2> Rincian Barang </h2>
					
					<tr>
					<th style="font-size:1.4em; color:#ff5500"> Total Keuangan </th>
					<td> - </td>
					</tr> 
					
					<tr>
					<th>Total Modal </th>	
					<td> <?php $x=mysql_query("select sum(harga_beli_semua) as total from pembelian");	
						$xx=mysql_fetch_array($x); echo "<a href='#'>Rp.". number_format($xx['total']).",-";?></a></td>
					</tr>
					
					<tr>
					<th>Total Penjualan </th>
					<td><?php $x=mysql_query("select sum(total_penjualan) as total from penjualan");	
						$xx=mysql_fetch_array($x); echo "<a href='#'>Rp.". number_format($xx['total']).",-";?></a></td>
					</tr>
						
					<tr>
					<th>Total Keuntungan </th>
					<td><?php $x=mysql_query("select sum(keuntungan) as total from penjualan");	
						$xx=mysql_fetch_array($x); echo "<a href='#'>Rp.". number_format($xx['total']).",-";?></a></td>
					</tr>

					<tr>
					<th style="font-size:1.4em; color:#ff5500"> Total Barang </th>
					<td> - </td>
					</tr>
					
					<tr>
					<th>Barang Masuk</th>
					<td> <?php $x=mysql_query("select sum(jumlah_barang) as total from pembelian");	
						$xx=mysql_fetch_array($x); echo "<a href='#'>". number_format($xx['total'])." Unit";?></a></td>
					</tr>
					
					<tr>
					<th>Barang Terjual</th>
					<td><?php $x=mysql_query("select sum(jumlah_barang) as total from penjualan");	
						$xx=mysql_fetch_array($x); echo "<a href='#'>". number_format($xx['total'])." Unit";?></a></td>
					</tr>
					
					<tr>
					<th>Barang Tersedia</th>
					<td><?php $x=mysql_query("select sum(jumlah_barang) as total from data_barang");	
						$xx=mysql_fetch_array($x); echo "<a href='#'>". number_format($xx['total'])." Unit";?></a></td>
					</th>

					</table>
					
				</div>
		</div>
	</div>
	</div>
		
		
</div>
</div>
</div>
</div>
</div>

<script type='text/javascript'>

      $(document).ready(function() {

        var stickyNavTop = $('#f').offset().top;

        var stickyNav = function(){

          var scrollTop = $(window).scrollTop();

          if (scrollTop > stickyNavTop) {

            $('#f').css({ 'position': 'fixed', 'top':0, 'z-index':9999});

          } else {

            $('#f').css({ 'position':'relative', 'top':10 });

          }

        };

        stickyNav();

        $(window).scroll(function() {

          stickyNav();

        });

      });

    </script>

	
