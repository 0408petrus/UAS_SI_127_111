<!DOCTYPE html>
<head>
	<title>Login</title>
    <link href="<?php echo base_url().'css/login.css'?>" rel="stylesheet" />
</head>
<body>
	<div class="jarak"></div>
	<center><h2>Login</h2></center>
	<div class="login">
		<form action="<?php echo base_url('login/login_action'); ?>" method="post" onSubmit="validasi()">
			<div>
				<br/>
				<label>Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>

			<div><br/>
				<input type="submit" value="Login" class="tombol">
			</div><br/>
			<div>
				<a href="<?php echo base_url('register'); ?>" id="signup">Don't have account yet?</a>
			</div>
			
		</form>
	</div>
</body>
<script type="text/javascript">
	function validasi() {
		var nama = document.getElementById("nama").value;
		var email = document.getElementById("password").value;
		if (nama != "" && password!="") {
			return true;
		}else{
			alert('Anda harus mengisi data dengan lengkap !');
		}
	}
</script>
</html>