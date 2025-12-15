<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login Multi User Level Dengan PHP dan MySQLi</title>
	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
		}

		body {
			background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
			min-height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
			padding: 20px;
		}

		.kotak_login {
			background: white;
			padding: 40px;
			border-radius: 15px;
			box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
			width: 100%;
			max-width: 400px;
			animation: slideDown 0.5s ease;
		}

		@keyframes slideDown {
			from {
				opacity: 0;
				transform: translateY(-30px);
			}
			to {
				opacity: 1;
				transform: translateY(0);
			}
		}

		.tulisan_login {
			text-align: center;
			font-size: 28px;
			font-weight: 700;
			color: #333;
			margin-bottom: 30px;
			padding-bottom: 15px;
			border-bottom: 3px solid #667eea;
		}

		form {
			display: flex;
			flex-direction: column;
		}

		label {
			font-size: 14px;
			font-weight: 600;
			color: #555;
			margin-bottom: 8px;
			margin-top: 15px;
		}

		label:first-of-type {
			margin-top: 0;
		}

		.form_login {
			width: 100%;
			padding: 12px 15px;
			border: 2px solid #e0e0e0;
			border-radius: 8px;
			font-size: 15px;
			transition: all 0.3s ease;
			outline: none;
		}

		.form_login:focus {
			border-color: #667eea;
			box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
		}

		.form_login::placeholder {
			color: #999;
		}

		.tombol_login {
			width: 100%;
			padding: 14px;
			background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
			color: white;
			border: none;
			border-radius: 8px;
			font-size: 16px;
			font-weight: 600;
			cursor: pointer;
			margin-top: 25px;
			transition: all 0.3s ease;
			text-transform: uppercase;
			letter-spacing: 1px;
		}

		.tombol_login:hover {
			transform: translateY(-2px);
			box-shadow: 0 5px 20px rgba(102, 126, 234, 0.4);
		}

		.tombol_login:active {
			transform: translateY(0);
		}

		.alert {
			background: #ff4757;
			color: white;
			padding: 15px 20px;
			border-radius: 8px;
			text-align: center;
			margin-bottom: 20px;
			font-size: 14px;
			animation: shake 0.5s ease;
			box-shadow: 0 4px 15px rgba(255, 71, 87, 0.3);
		}

		@keyframes shake {
			0%, 100% { transform: translateX(0); }
			25% { transform: translateX(-10px); }
			75% { transform: translateX(10px); }
		}

		/* Responsive Design */
		@media (max-width: 480px) {
			.kotak_login {
				padding: 30px 25px;
			}
			
			.tulisan_login {
				font-size: 24px;
			}
			
			.form_login {
				padding: 10px 12px;
			}
			
			.tombol_login {
				padding: 12px;
				font-size: 15px;
			}
		}
	</style>
</head>
<body>
 
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Manajemen User</p>
 
		<form action="login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username" required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password" required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
		</form>
	</div>
 
 
</body>
</html>
