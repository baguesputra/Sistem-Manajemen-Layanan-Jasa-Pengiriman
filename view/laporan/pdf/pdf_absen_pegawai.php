<?php 
  include '../../../function/absen_function.php';
  $data = new absen(); 
  $pegawai = $_GET['id_pegawai'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=Data, initial-scale=1.0">
  <style>
    table tr td,table tr th{
      font-size: 8pt;
    }

    .line-title{
        border: 0;
        border-style: inset;
        border-top: 1px solid #000;
      }
  </style>
</head>
<body>
<!-- <img src="../../../asset/img/logo_laporan.jpg" style="position: absolute; width: 150px; height: auto;">  -->
    <table style="width: 105%;">
			<tr>
        <td align="center">
        <h2>PT ANEKA TRANSINDO UTAMA</h2>
            Alamat : Jl. A Yani No.Km 8,8,
Tatah Belayung Baru, Kec. Kertak Hanyar, Kabupaten Banjar, Kalimantan Selatan
70654<br> Telp. (0511)-3366351 – 3366352 Fax. (0511)-3366353</p>
			</tr>	
		</table><br>
    <hr class="line-title">
    <div class="teks">
    <?php
                    $no = 1;
                    $koneksi = new koneksi();
                    $conn =  $koneksi->get_connection();
                    $data=mysqli_query($conn,"SELECT * FROM  pegawai  WHERE id = '".$pegawai."'  "); 
                    while($d = mysqli_fetch_array($data)){
                    
                  ?>
   <h3>Laporan Absen <?= $d['nama'] ?></h3>
   <?php } ?>
   <br>

   <table class="static" rules="all" border="1px" align="center">
                  <thead>
                  <tr>
                    <th width="215px" align="center">No</th>
                    <th width="215px" align="center">Tanggal</th>
                    <th width="215px" align="center">Nama</th>
                    <th width="215px" align="center">Jabatan</th>
                    <th width="215px" align="center">Keterangan</th>
                  </tr>
                  </thead>
                  <?php
                    $no = 1;
                    $koneksi = new koneksi();
                    $conn =  $koneksi->get_connection();
                    $data=mysqli_query($conn,"SELECT * FROM absen join pegawai on absen.id_pegawai = pegawai.id WHERE absen.id_pegawai = '".$pegawai."'  "); 
                    while($d = mysqli_fetch_array($data)){
                    
                  ?>
                  <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $d['tgl']; ?></td>
                        <td><?= $d['nama']; ?></td>
                        <td><?= $d['jabatan']; ?></td> 
                        <td><?= $d['ket']; ?></td>
                     
                      
                  </tr>
                  <?php } ?>
                </table>
<br>

                <table width="30%" align="right" border="0">
		<tr>
			<td width="10%"></td>
			<td align="center"><p> PIMPINAN <br><br><br><br><br><u>H.HARRY WIJAYA</u></p></td>		</tr>
		</tr>
	</table>


</div>

</body>


</html>



               
<script>
  window.print()
</script>