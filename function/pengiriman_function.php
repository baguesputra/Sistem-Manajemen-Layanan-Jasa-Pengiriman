<?php 
include 'config.php';

class pengiriman {

    public function index() 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $data=mysqli_query($conn,"SELECT pengiriman.id, pengiriman.resi,pelanggan.nama, pengiriman.penerima, pengiriman.tujuan, pengiriman.total, pengiriman.kurir FROM pengiriman join pelanggan on pengiriman.pengirim = pelanggan.id"); 
        while($d = mysqli_fetch_array($data)){
            $view[] = $d;
        }
        return $view; 
    }

    public function detail() 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $data=mysqli_query($conn,"SELECT * FROM detail_pengiriman"); 
        while($d = mysqli_fetch_array($data)){
            $view[] = $d;
        }
        return $view; 
    }

    public function pelanggan() 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $data=mysqli_query($conn,"SELECT * FROM pelanggan"); 
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

    public function barang() 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $data=mysqli_query($conn,"SELECT * FROM barang"); 
        while($d = mysqli_fetch_array($data)){
            $view[] = $d;
        }
        return $view; 
    }

    public function jarak() 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $data=mysqli_query($conn,"SELECT * FROM jarak"); 
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

    public function tambah($resi, $tanggal, $pengirim, $no_pengirim,$penerima, $no_penerima, $tujuan, $berat, $jarak, $total, $kurir) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "INSERT INTO pengiriman (resi, tanggal, pengirim, no_pengirim, penerima, no_penerima, tujuan, berat, jarak, total, kurir) 
        VALUES ('$resi', '$tanggal', '$pengirim', '$no_pengirim', '$penerima', '$no_penerima', '$tujuan', '$berat', '$jarak', '$total', '$kurir')";
        $conn->query($sql);
    } 


    function edit($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM pengiriman WHERE id='$id'";
        $bind = $conn->query($sql);
        while ($obj = $bind->fetch_object()) {
        $baris = $obj;
        }
        return $baris;
    } 

    public function update($id,$resi, $tanggal, $pengirim, $no_pengirim,$penerima, $no_penerima, $tujuan, $berat, $jarak, $total, $kurir)
    {
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "UPDATE pengiriman SET resi='$resi', tanggal='$tanggal', pengirim='$pengirim', no_pengirim='$no_pengirim', 
        penerima='$penerima', no_penerima='$no_penerima' ,tujuan='$tujuan', berat='$berat', jarak='$jarak', total='$total', kurir='$kurir' 
        WHERE id='$id'";
        $conn->query($sql);
    }

    

    public function hapus($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "DELETE FROM pengiriman WHERE id='$id'";
        $conn->query($sql);
    } 


    public function tambah_detail($resi, $lokasi, $status) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "INSERT INTO detail_pengiriman (resi, lokasi, status) 
        VALUES ('$resi', '$lokasi', '$status')";
        $conn->query($sql);
    } 
}
?>
