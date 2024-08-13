<?php 
session_start();

include 'config.php';
$koneksi = new koneksi();
$conn =  $koneksi->get_connection();

$username = $_POST['username'];
$password = $_POST['password'];


$login = mysqli_query($conn,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);


if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	if($data['level']=="admin"){

		$_SESSION['username'] = $username;
		$_SESSION['id_pegawai'] = $data['id_pegawai'];
		$_SESSION['level'] = "admin";
		header("location:../view/index.php");

	}else if($data['level']=="pegawai"){
		$_SESSION['username'] = $username;
		$_SESSION['id_pegawai'] = $data['id_pegawai'];
		$_SESSION['level'] = "pegawai";
		header("location:../view/index.php");

	}else if($data['level']=="kurir"){
		$_SESSION['username'] = $username;
		$_SESSION['id_pegawai'] = $data['id_pegawai'];
		$_SESSION['level'] = "kurir";
		header("location:../view/index.php");

	}else{
		header("location:login.php?pesan=gagal");
	}	
}else{
	header("location:login.php?pesan=gagal");
}

?>