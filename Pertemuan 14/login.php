<?php 

session_start();
 
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
 

$login = mysqli_query($conn,"select * from user where username='$username' and password='$password'");

$cek = mysqli_num_rows($login);
 
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
	$_SESSION['nama'] = $data['nama'];
	if($data['level']=="admin"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:admin.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['level']=="pegawai"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pegawai";
		// alihkan ke halaman dashboard pegawai
		header("location:pegawai.php");
 
	// cek jika user login sebagai pengurus
	}else if($data['level']=="editor"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "editor";
		// alihkan ke halaman dashboard pengurus
		header("location:editor.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
 
?>