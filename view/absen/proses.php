<?php
include '../../function/absen_function.php';
if (isset($_POST['tambah'])) {
    // $id = $_POST['id'];
    $tgl = $_POST['tgl'];
    $id_pegawai = $_POST['id_pegawai'];
    $ket = $_POST['ket'];
    $absen = new absen();
    $absen->tambah($tgl, $id_pegawai ,$ket);
    header('location:index.php');
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $tgl = $_POST['tgl'];
    $id_pegawai = $_POST['id_pegawai'];
    $ket = $_POST['ket'];
    $jadwal = new jadwal();
    $jadwal->update($tgl, $id_pegawai ,$ket);
    header('location:index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $ver = '1';
    $jadwal = new jadwal();
    $jadwal->approve($id, $ver);
    header('location:index.php');
}