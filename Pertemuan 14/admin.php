<?php 
session_start();
if($_SESSION['level']!="admin"){
	header("location:index.php?pesan=gagal");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

		.container {
			background: white;
			padding: 50px;
			border-radius: 20px;
			box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
			text-align: center;
			max-width: 500px;
			width: 100%;
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

		.user-icon {
			width: 100px;
			height: 100px;
			background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
			border-radius: 50%;
			display: flex;
			align-items: center;
			justify-content: center;
			margin: 0 auto 25px;
			font-size: 45px;
			color: white;
			font-weight: bold;
		}

		.badge {
			display: inline-block;
			padding: 8px 20px;
			background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
			color: white;
			border-radius: 20px;
			font-size: 14px;
			font-weight: 600;
			margin-bottom: 20px;
		}

		h1 {
			color: #333;
			font-size: 32px;
			margin-bottom: 10px;
		}

		.welcome-text {
			color: #666;
			font-size: 18px;
			margin-bottom: 30px;
		}

		.info-box {
			background: #f5f7fa;
			padding: 20px;
			border-radius: 12px;
			margin-bottom: 25px;
			text-align: left;
		}

		.info-item {
			display: flex;
			justify-content: space-between;
			padding: 10px 0;
			border-bottom: 1px solid #e0e0e0;
		}

		.info-item:last-child {
			border-bottom: none;
		}

		.info-label {
			color: #999;
			font-weight: 600;
		}

		.info-value {
			color: #333;
			font-weight: 600;
		}

		.logout-btn {
			width: 100%;
			padding: 14px;
			background: #ff4757;
			color: white;
			border: none;
			border-radius: 10px;
			font-size: 16px;
			font-weight: 600;
			cursor: pointer;
			transition: all 0.3s ease;
			text-decoration: none;
			display: inline-block;
		}

		.logout-btn:hover {
			background: #ee5a6f;
			transform: translateY(-2px);
			box-shadow: 0 5px 15px rgba(255, 71, 87, 0.3);
		}

		@media (max-width: 480px) {
			.container {
				padding: 30px 20px;
			}

			h1 {
				font-size: 26px;
			}

			.welcome-text {
				font-size: 16px;
			}
		}
	</style>
</head>
<body>

	<div class="container">
		<div class="user-icon">
			<?php echo strtoupper(substr($_SESSION['nama'], 0, 1)); ?>
		</div>
		
		<span class="badge">ADMINISTRATOR</span>
		
		<h1>Selamat Datang!</h1>
		<p class="welcome-text"><?php echo $_SESSION['nama']; ?></p>
		
		<div class="info-box">
			<div class="info-item">
				<span class="info-label">Status Login:</span>
				<span class="info-value" style="color: #43e97b;">✓ Berhasil</span>
			</div>
			<div class="info-item">
				<span class="info-label">Username:</span>
				<span class="info-value"><?php echo $_SESSION['username']; ?></span>
			</div>
			<div class="info-item">
				<span class="info-label">Level Akses:</span>
				<span class="info-value">Admin</span>
			</div>
		</div>
		
		<a href="logout.php" class="logout-btn">
			LOGOUT
		</a>
	</div>

</body>
</html>