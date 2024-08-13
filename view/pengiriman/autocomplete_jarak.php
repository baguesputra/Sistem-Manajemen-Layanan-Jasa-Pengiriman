<?php
include "../../function/config.php";
$koneksi = new koneksi();
$conn =  $koneksi->get_connection();
$id = $_GET['id'];
$query = mysqli_query($conn,"SELECT * FROM jarak WHERE id='$id'");
$user = mysqli_fetch_array($query);
$data = array('asal' => $user['asal'],'tujuan' => $user['tujuan'],'harga' => $user['harga'],'ket' => $user['ket']);
      echo json_encode($data);
 ?>




