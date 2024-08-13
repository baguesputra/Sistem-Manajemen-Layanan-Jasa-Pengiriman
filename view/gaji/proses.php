<?php
include '../../function/gajih_function.php';
if (isset($_POST['tambah'])) {
    // $id = $_POST['id'];
    $pegawai = $_POST['pegawai'];
    $gaji = $_POST['gaji'];
    $tunjangan = $_POST['tunjangan'];
    $bonus = $_POST['bonus'];
    $total = $_POST['total'];
    $ket = $_POST['ket'];
    $gajih = new gajih();
    $gajih->tambah($pegawai, $gaji, $tunjangan, $bonus, $total, $ket);
    header('location:index.php');
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $pegawai = $_POST['pegawai'];
    $gaji = $_POST['gaji'];
    $tunjangan = $_POST['tunjangan'];
    $bonus = $_POST['bonus'];
    $total = $_POST['total'];
    $ket = $_POST['ket'];
    $gajih = new gajih();
    $gajih->update($id,$pegawai, $gaji, $tunjangan, $bonus, $total, $ket);
    header('location:index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $gajih = new gaji();
    $gajih->hapus($id);
    header('location:index.php');
}