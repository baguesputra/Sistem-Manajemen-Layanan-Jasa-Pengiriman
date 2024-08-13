<?php
include '../../function/pegawai_function.php';
if (isset($_POST['tambah'])) {
    // $id = $_POST['id'];
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $agama = $_POST['agama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $jabatan = $_POST['jabatan'];
    $no = $_POST['no'];
    $gaji = $_POST['gaji'];
    $pegawai = new pegawai();
    $pegawai->tambah($nama, $tgl_lahir, $jk, $agama, $alamat, $email,$jabatan, $no,$gaji);
    header('location:index.php');
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $agama = $_POST['agama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $jabatan = $_POST['jabatan'];
    $no = $_POST['no'];
    $gaji = $_POST['gaji'];
    $pegawai = new pegawai();
    $pegawai->update($id,$nama, $tgl_lahir, $jk, $agama, $alamat, $email,$jabatan, $no, $gaji);
    header('location:index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $pegawai = new pegawai();
    $pegawai->hapus($id);
    header('location:index.php');
}