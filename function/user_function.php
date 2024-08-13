<?php 
include 'config.php';

class user {

    public function index() 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $data=mysqli_query($conn,"SELECT * FROM user"); 
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

    public function tambah($username, $password, $id_pegawai, $level) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "INSERT INTO user (username, password, id_pegawai, level) VALUES ('$username',
                '$password', '$id_pegawai','$level')";
        $conn->query($sql);
    } 


    function edit($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM user WHERE id='$id'";
        $bind = $conn->query($sql);
        while ($obj = $bind->fetch_object()) {
        $baris = $obj;
        }
        return $baris;
    } 

    public function update($id,$username, $password, $id_pegawai, $level)
    {
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "UPDATE user SET username='$username', password='$password', 
        id_pegawai='$id_pegawai', level='$level' WHERE id='$id'";
        $conn->query($sql);
    }

    function detail($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM user WHERE id='$id'";
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
        $sql = "DELETE FROM user WHERE id='$id'";
        $conn->query($sql);
    } 
}
?>
