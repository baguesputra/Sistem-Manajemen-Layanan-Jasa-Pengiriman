<?php
include '../../function/pengiriman_function.php';
if (isset($_POST['tambah'])) {
    // $id = $_POST['id'];
    $resi = $_POST['resi'];
    $tanggal = $_POST['tanggal'];
    $pengirim = $_POST['pengirim'];
    $penerima = $_POST['penerima'];
    $tujuan = $_POST['tujuan'];
    $berat = $_POST['berat'];
    $jarak = $_POST['jarak'];
    $total = $_POST['total'];
    $kurir = $_POST['kurir'];
    $pengiriman = new pengiriman();
    $pengiriman->tambah($resi, $tanggal, $pengirim, $penerima, $tujuan, $berat, $jarak, $total, $kurir);
    header('location:index.php');
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $resi = $_POST['resi'];
    $tanggal = $_POST['tanggal'];
    $pengirim = $_POST['pengirim'];
    $penerima = $_POST['penerima'];
    $tujuan = $_POST['tujuan'];
    $berat = $_POST['berat'];
    $jarak = $_POST['jarak'];
    $total = $_POST['total'];
    $tujuan = $_POST['tujuan'];
    $kurir = $_POST['kurir'];
    $pengiriman = new pengiriman();
    $pengiriman->update($id,$resi,$tanggal, $pengirim, $penerima, $tujuan, $berat, $jarak, $total, $kurir);
    header('location:index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $pengiriman = new pengiriman();
    $pengiriman->hapus($id);
    header('location:index.php');
}