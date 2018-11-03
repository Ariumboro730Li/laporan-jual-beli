<?php
include "koneksi.php";
session_start();
if (!isset($_SESSION['username'])){
header ("location:login.php");
}
?>


<head>
<title>LOGIN</title>

<link rel="stylesheet" type = "text/css"
	href="assets/css/bootstrap.css"
    >
	
<link rel = "stylesheet" type = "text/css"
	href = "assets/js/jquery-ui/jquery-ui.css">

<script type="text/javascript"
 src="assets/js/jquery.js"></script>

<script type = "text/javascript" 
	src = "assets/js/bootstrap.js"></script>

<script type = "text/javascript" 
	src = "assets/js/jquery-ui/jquery-ui.js"></script>

<script type="text/javascript" src="jquery.js"></script>

<style>

body {font-family:nyala;
		margin-top:50px;}
.judul {background-color:#fff;}

.umb {color:#ff5500;}

.lope {
	color:#ff5500;
	margin-top:0px;}
		
h1 {font-size:5em;
margin-right:3px;
}

.b {color:black;
font-size:3em;}

.w 
{padding-right:30px;
padding-bottom:30px;
padding-left:20px; 
border-color:red;
border-top:none;
border-left:none;
border-bottom-style:solid;
border-bottom-right-radius:90px;
border-bottom-left-radius:30px;
}

.a {
padding-top:30px;
padding-bottom:60px;
border:none;
}
	
.lodo 
	{ font-size:1.2em;}

.deko
	{margin-top:-20px;}

.loko {border-radius:0px;}


.oke {font-size:3em}
</style>





</head>
<body class="body">

<div class="container">
<div class="row">

	
		<div class="col-md-12"> 
		<div class="jumbotron judul"> 
		<h1 class="text-center">Welcome to <b class="umb">Um</b><span style="color:black">.com </span> !!! </h1>
		<p class="text-center" style="font-size:1.9em;">Your Attitude & Your Imagination are Everything</p> 
			<p class="text-center" > 
			<button type="button" class="btn btn-lg active" 
				data-toggle="modal" data-target="#myModal2" style="color:white; background:#ff5500;">
					<b>You Are Logged In</b> </button> 
								
								
								
		<p><?php 
		if(isset($_GET['pesan']))
		{
			if($_GET['pesan'] == "gagal")
			{
				echo "
				<div  
				style = 'position:relative; 
				margin-bottom :0px; margin-top:0px;
				padding:5px; color:red;
				font-family:times new roman;'
				class='alert alert col-md-12 text-center'  role='alert'>
				<b>Login Gagal !! Username / Password Salah !!</b> </div>";
				
			}
		}
		?>	
		</p>
		
		</div> </div>
	

	
	
	 
	
	<div id="myModal2" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="color:black; text-align:center;">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title" style="color:black; background-color:#fff; text-align:center;"><b>You're Logged In as </b></h3>
				<h2 class="modal-title" >
						<a  href="#" data-toggle="modal" data-target="#myModal15" style="color:#ff5500; background-color:#fff; text-align:center; margin-bottom:10px;"  > 
					<?php  echo $_SESSION['username']; ?> </a></h2><br>
				<ul class="list-inline">
					<li> <a href="aset/content/penjualan.php"> Penjualan </a> </li>
					<li> <a href="aset/content/pembelian.php"> Pembelian </a> </li>
					<li> <a href="aset/content/data_barang.php"> Data Barang</a> </li>
					<li class="dropdown"> <a href="#" data-toggle="dropdown"> Menu <b class="caret"></b></a> 
				<ul class="dropdown-menu" > 
					<li><a href="#" style="color:blue;" >Pengaturan</a></li> 
							<li class="divider"></li> 
					<li><a href="#"  data-toggle="modal" data-target="#myModal20" style="color:blue;"> Call Service</a></li> 
							<li class="divider"></li> 
					<li><a  href="#" data-toggle="modal" data-target="#myModal13" style="color:blue;">Log Out</a></li>			
				</ul></li> 
					
			
				</ul>

			</div>
			</div>
	</div>
	</div>
		
	<div id="myModal13" class="modal fade">
	<div class="modal-dialog" style="margin-top:190px;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title" style="text-align:center;">klik Untuk <a href="logout.php" style="color:blue;" >Log Out </a></h3>
			</div>
		</div>
	</div>
	</div>
	
	<div id="myModal15" class="modal fade">
	<div class="modal-dialog" style="margin-top:190px;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title" style="text-align:center;">Profile <?php echo $_SESSION['username']; ?> </a></h3>
			</div>
		</div>
	</div>
	</div>
	
	<div id="myModal20" class="modal fade">
	<div class="modal-dialog" style="margin-top:190px;">
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
					


		</div>
	</div>
	</div>

</body>
<script type="text/javascript">
	$(document).ready(function(){		
		$('.form-checkbox').click(function(){
			if($(this).is(':checked')){
				$('.form-password').attr('type','text');
			}else{
				$('.form-password').attr('type','password');
			}
		});
	});
</script>
</html>

