<?php
include "../../function/config.php";
$koneksi = new koneksi();
$conn =  $koneksi->get_connection();
$id = $_GET['id'];
$query = mysqli_query($conn,"SELECT * FROM barang WHERE id='$id'");
$user = mysqli_fetch_array($query);
$data = array('berat' => $user['berat'],'harga' => $user['harga'],'ket' => $user['ket']);
      echo json_encode($data);
 ?>




