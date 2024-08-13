<?php
include '../../function/barang_function.php';
if (isset($_POST['tambah'])) {
    // $id = $_POST['id'];
    $berat = $_POST['berat'];
    $harga = $_POST['harga'];
    $ket = $_POST['ket'];
    $barang = new barang();
    $barang->tambah($berat, $harga, $ket);
    header('location:index.php');
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $berat = $_POST['berat'];
    $harga = $_POST['harga'];
    $ket = $_POST['ket'];
    $barang = new barang();
    $barang->update($id, $berat, $harga, $ket);
    header('location:index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $barang = new barang();
    $barang->hapus($id);
    header('location:index.php');
}