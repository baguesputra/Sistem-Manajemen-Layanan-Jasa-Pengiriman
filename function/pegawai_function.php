<?php 
include 'config.php';

class pegawai {

    public function index() 
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

    public function tambah($nama,$tgl_lahir,$agama,$jk,$alamat,$email,$jabatan,$no,$gaji) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "INSERT INTO pegawai (nama, tgl_lahir, jk, agama, alamat, email, jabatan,no,gaji) VALUES ('$nama',
                '$tgl_lahir', '$jk','$agama', '$alamat', '$email', '$jabatan','$no','$gaji')";
        $conn->query($sql);
    } 


    function edit($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM pegawai WHERE id='$id'";
        $bind = $conn->query($sql);
        while ($obj = $bind->fetch_object()) {
        $baris = $obj;
        }
        return $baris;
    } 

    public function update($id,$nama,$tgl_lahir,$agama,$jk,$alamat,$email,$jabatan,$no,$gaji)
    {
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "UPDATE pegawai SET nama='$nama', tgl_lahir='$tgl_lahir', jk='$jk', agama='$agama', 
        alamat='$alamat',email='$email',jabatan='$jabatan',no='$no', gaji='$gaji' WHERE id='$id'";
        $conn->query($sql);
    }

    function detail($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM pegawai WHERE id='$id'";
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
        $sql = "DELETE FROM pegawai WHERE id='$id'";
        $conn->query($sql);
    } 
}
?>
