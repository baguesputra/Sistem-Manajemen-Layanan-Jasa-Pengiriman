<?php
include '../../function/jarak_function.php';
if (isset($_POST['tambah'])) {
    // $id = $_POST['id'];
    $asal = $_POST['asal'];
    $tujuan = $_POST['tujuan'];
    $harga = $_POST['harga'];
    $ket = $_POST['ket'];
    $jarak = new jarak();
    $jarak->tambah($asal,$tujuan, $harga, $ket);
    header('location:index.php');
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $asal = $_POST['asal'];
    $tujuan = $_POST['tujuan'];
    $harga = $_POST['harga'];
    $ket = $_POST['ket'];
    $jarak = new jarak();
    $jarak->update($id,$asal,$tujuan, $harga, $ket);
    header('location:index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $jarak = new jarak();
    $jarak->hapus($id);
    header('location:index.php');
}