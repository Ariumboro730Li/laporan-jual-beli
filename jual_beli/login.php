<?php
include "koneksi.php";
?>


<head>
<title>LOGIN</title>

<link rel="stylesheet" type = "text/css" href="assets/css/bootstrap.css">
<link rel = "stylesheet" type = "text/css" href = "assets/js/jquery-ui/jquery-ui.css">
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type = "text/javascript" src = "assets/js/bootstrap.js"></script>
<script type = "text/javascript"  src = "assets/js/jquery-ui/jquery-ui.js"></script>
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
					<b>Log In</b> </button> 
						<button type="button" class="btn btn-lg danger"
							data-toggle="modal" data-target="#myModal1" style="color:#ff5500;">
								Register </button></p>	
								
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
		?>	</p>
		
		</div> </div>
	

	
	
	 
	
	<div id="myModal2" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content center-block" style="width:300px; margin-top:100px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title" style="text-align:center; color:#ff5500;"><b>Welcome, Please Log in</b></h3>
			</div>
	
				<div class="modal-body">
				<form method="post"  action="cek_login.php">
		
				<div class="form-group" >
				
				<label for="firstname" class="lodo">Username</label> 
				<input type="text" class="form-control loko"
				name="username"
				placeholder="Input Your Username, not Email or Name" 
				required oninvalid="this.setCustomValidity
				('Please Input Your Username')" oninput="setCustomValidity('')"> 						
				</div>		
						
						
				<div class="form-group" >
				<label for="lastname" class="lodo">Password</label> 
				<input type="password" class="form-password loko" 
				name="password"
				id="password" placeholder="Enter Password" 
				required oninvalid="this.setCustomValidity
				('Please Input Your Password')" oninput="setCustomValidity('')"> 
				
				<input type="checkbox" name="checkbox" class="form-checkbox">
				Show Password </input>
				</div> 
		
				<div class="form-group"> 
				<button type="submit" class="btn btn-success">Sign in
				</button>
				<button type="button" class="btn" data-toggle="modal" data-target="#myModal1" style="color:green;">
				 Register </button>
				</div>
	

	</form>
	
	</div>
	</div>
	</div>
	</div>

	 <div id="myModal1" class="modal fade">
	<div class="modal-dialog center-block" style="width:300px; margin-top:100px;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h2 class="modal-title" style="color:#ff5500; text-align:center;"><b>Please Register</b></h2>
			</div>
			<div class="modal-body">
			
		<form method="POST" name="pendaftaran" action="proses_daftar.php">
					
		<div class="form-group" >
		<label for="firstname" class="lodo">Nama Lengkap</label> 
        <input type="text" class="form-control loko"
        name="nama"
		placeholder="Masukan Nama Lengkap Anda" 
        required oninvalid="this.setCustomValidity
        ('Please Input Your Full Name')" oninput="setCustomValidity('')"> 						
        </div> 			
					
		<div class="form-group" >
		<label for="firstname" class="lodo">Username</label> 
        <input type="text" class="form-control loko"
        name="username"
		placeholder="Masukan Username Anda" 
        required oninvalid="this.setCustomValidity
        ('Please Input Your Username')" oninput="setCustomValidity('')"> 						
        </div> 
        
		<div class="form-group" >
		<label for="firstname" class="lodo">Email</label> 
        <input type="text" class="form-control loko"
        name="email"
		placeholder="Masukan Email Anda" 
        required oninvalid="this.setCustomValidity
        ('Please Input Your Email')" oninput="setCustomValidity('')"> 						
        </div> 
		
		<div class="form-group"> 
		<label for="lastname" class="lodo">Password</label> 
		<input type="password" class="form-password" 
        name="password"
		id="password" placeholder="Enter Password" 
        required oninvalid="this.setCustomValidity
        ('Please Input Your Password')" oninput="setCustomValidity('')"> 
        
        <input type="checkbox" name="checkbox" class="form-checkbox"> 
     	Show Password 
		</div> 
		
    <div class="form-group">
			<button type="submit" class="btn btn-success">Register
    </button>
		
		</form>	
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

