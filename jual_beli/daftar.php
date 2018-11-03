<?php
include "koneksi.php";
?>


<html>
<head>
<title>Pendaftaran</title>
<script type="text/javascript" src="jquery.js"></script>

</head>
<body>
<style> 

body {background-image:url(image/image4.jpg);}

.container{ 
width:50%;
position:static;
color:red;
margin:0 auto;
margin-left:20px;
}

table {
	width:500px;
	color:white;
	background-image:url(image/image6.jpg);
	margin-top:100px;
	margin-right:0px;
	padding-top:30px;
	padding-bottom:30px;
	padding-left:30px;
	position:relative;
	border-radius:30px;
}
input.a
{width:200px;
margin-right:0px;
margin-bottom:10px;
}

input {height:30px;}

	
</style>

<form method="post" name="pendaftaran" action="proses_daftar.php">
<div class="container">

<table border=0 align="right" cellpadding=5 cellspacing=0>


<tr>
<td colspan=3><center><font size=10>REGISTER </font></center></td>
</tr>
<tr>
<td>Nama</td><td>:</td><td><input class="a" type="text" name="nama" required></td>
</tr>
<tr>
<td>Email</td><td>:</td><td><input class="a"  type="text" name="email" required></td>
</tr>
<tr>
<td>Username</td><td>:</td><td><input class="a" type="text" name="username" required style="margin-bottom:-5px;"></td>
</tr>
<td>Password</td>
<td>:</td>
<td><input type="password" name="password"  class="form-password" required>
<style="font-size:0.6em";>
<input type="checkbox" class="form-checkbox"> Show Password </style></td>

</tr>
<tr>
<td colspan=2>&nbsp;</td>
<td><input type="submit" name="submit" value="DAFTAR" style="background:green; color:white";>
<colspan=3><a href="login.php" style="color:white">LOGIN</a> </colspan></td>
</tr>
</table>
</form>

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