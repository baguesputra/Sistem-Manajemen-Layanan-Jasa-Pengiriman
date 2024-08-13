<?php 
include 'config.php';

class barang {

    public function index() 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $data=mysqli_query($conn,"SELECT * FROM barang"); 
        while($d = mysqli_fetch_array($data)){
            $view[] = $d;
        }
        return $view; 
    }

    function selectdatabyid($table,$id) 
    { 
        $select="SELECT * FROM $table where id= $id"; 
        $select1=mysqli_query($GLOBALS['connect'],$select); 
        return mysqli_fetch_array($select1); 
    } 

    public function tambah($berat, $harga, $ket) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "INSERT INTO barang (berat, harga, ket) VALUES ('$berat', '$harga', '$ket')";
        $conn->query($sql);
    } 


    function edit($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM barang WHERE id='$id'";
        $bind = $conn->query($sql);
        while ($obj = $bind->fetch_object()) {
        $baris = $obj;
        }
        return $baris;
    } 

    public function update($id, $berat, $harga, $ket)
    {
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "UPDATE barang SET berat='$berat', harga='$harga', ket='$ket' WHERE id='$id'";
        $conn->query($sql);
    }

    function detail($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM barang WHERE id='$id'";
        $bind = $conn->query($sql);
        while ($obj = $bind->fetch_object()){
        $baris = $obj;
        }
        return $baris;
    } 

    public function hapus($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "DELETE FROM barang WHERE id='$id'";
        $conn->query($sql);
    } 
}
?>
