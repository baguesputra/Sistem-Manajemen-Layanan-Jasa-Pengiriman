<?php 
include 'config.php';

class gajih {

    public function index() 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $data=mysqli_query($conn,"SELECT gajih.id, gajih.total, gajih.ket, pegawai.nama FROM gajih join pegawai on gajih.pegawai = pegawai.id"); 
        while($d = mysqli_fetch_array($data)){
            $view[] = $d;
        }
        return $view; 
    }

    public function pegawai() 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $data=mysqli_query($conn,"SELECT * FROM pegawai"); 
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

    public function tambah($pegawai, $gaji, $tunjangan, $bonus, $total, $ket) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "INSERT INTO gajih (pegawai, gaji, tunjangan, bonus, total, ket) VALUES ('$pegawai', '$gaji', '$tunjangan', '$bonus', '$total', '$ket')";
        $conn->query($sql);
    } 


    function edit($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM gajih WHERE id='$id'";
        $bind = $conn->query($sql);
        while ($obj = $bind->fetch_object()) {
        $baris = $obj;
        }
        return $baris;
    } 

    public function update($id, $pegawai, $gaji, $tunjangan, $bonus, $total, $ket)
    {
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "UPDATE gajih SET pegawai='$pegawai', gaji='$gaji', tunjangan='$tunjangan', 
        bonus='$bonus', total='$total', ket='$ket' WHERE id='$id'";
        $conn->query($sql);
    }

    function detail($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM gajih WHERE id='$id'";
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
        $sql = "DELETE FROM gajih WHERE id='$id'";
        $conn->query($sql);
    } 
}
?>
