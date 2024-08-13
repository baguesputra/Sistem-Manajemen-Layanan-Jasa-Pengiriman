<?php
include '../../function/pemasukkan_function.php';
if (isset($_POST['tambah'])) {
    // $id = $_POST['id'];
    $tgl = $_POST['tgl'];
    $jumlah = $_POST['jumlah'];
    $bayar = $_POST['bayar'];
    $ket = $_POST['ket'];
    $pemasukkan = new pemasukkan();
    $pemasukkan->tambah($tgl,$jumlah, $bayar, $ket);
    header('location:index.php');
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $tgl = $_POST['tgl'];
    $jumlah = $_POST['jumlah'];
    $bayar = $_POST['bayar'];
    $ket = $_POST['ket'];
    $pemasukkan = new pemasukkan();
    $pemasukkan->update($id,$tgl,$jumlah, $bayar, $ket);
    header('location:index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $pemasukkan = new pemasukkan();
    $pemasukkan->hapus($id);
    header('location:index.php');
}