<?php
include '../../function/pelanggan_function.php';
if (isset($_POST['tambah'])) {
    // $id = $_POST['id'];
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $no = $_POST['no'];
    $pelanggan = new pelanggan();
    $pelanggan->tambah($nik,$nama, $alamat, $kota, $no);
    header('location:index.php');
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $no = $_POST['no'];
    $pelanggan = new pelanggan();
    $pelanggan->update($id,$nik,$nama, $alamat, $kota, $no);
    header('location:index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $pelanggan = new pelanggan();
    $pelanggan->hapus($id);
    header('location:index.php');
}