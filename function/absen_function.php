<?php 
include 'config.php';

class absen {

   

    public function index() 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $data=mysqli_query($conn,"SELECT pegawai.id as id_pegawai, absen.id, absen.tgl, absen.ket, pegawai.nama FROM absen join pegawai on absen.id_pegawai = pegawai.id"); 
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

    public function tambah($tgl, $id_pegawai ,$ket) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "INSERT INTO absen (tgl, id_pegawai, ket) VALUES ('$tgl', '$id_pegawai','$ket')";
        $conn->query($sql);
    } 


    function edit($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM absen WHERE id='$id'";
        $bind = $conn->query($sql);
        while ($obj = $bind->fetch_object()) {
        $baris = $obj;
        }
        return $baris;
    } 

    public function update($id,$tgl, $id_pegawai ,$ket)
    {
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "UPDATE jadwal SET tgl='$tgl', id_pegawai='$id_pegawai', ket='$ket' WHERE id='$id'";
        $conn->query($sql);
    }

    function detail($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM jadwal WHERE id='$id'";
        $bind = $conn->query($sql);
        while ($obj = $bind->fetch_object()){
        $baris = $obj;
        }
        return $baris;
    } 

    public function approve($id, $ver) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "UPDATE jadwal SET ver='$ver' WHERE id='$id'";
        $conn->query($sql);
    } 

    public function hapus($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "DELETE FROM jadwal WHERE id='$id'";
        $conn->query($sql);
    } 
}
?>
