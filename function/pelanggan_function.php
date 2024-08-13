<?php 
include 'config.php';

class pelanggan {

    public function index() 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $data=mysqli_query($conn,"SELECT * FROM pelanggan"); 
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

    public function tambah($nik,$nama, $alamat, $kota, $no) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "INSERT INTO pelanggan (nik,nama, alamat, kota, no) VALUES ('$nik','$nama', '$alamat','$kota', '$no')";
        $conn->query($sql);
    } 


    function edit($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM pelanggan WHERE id='$id'";
        $bind = $conn->query($sql);
        while ($obj = $bind->fetch_object()) {
        $baris = $obj;
        }
        return $baris;
    } 

    public function update($id,$nik,$nama, $alamat, $kota, $no)
    {
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "UPDATE pelanggan SET nik='$nik', nama='$nama', alamat='$alamat', kota='$kota', no='$no' WHERE id='$id'";
        $conn->query($sql);
    }

    function detail($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM pelanggan WHERE id='$id'";
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
        $sql = "DELETE FROM pelanggan WHERE id='$id'";
        $conn->query($sql);
    } 
}
?>
