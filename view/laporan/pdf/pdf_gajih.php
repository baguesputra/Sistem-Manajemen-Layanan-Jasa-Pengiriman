<?php 
  include '../../../function/gajih_function.php';
  $data = new gajih(); 
  $tglawal = $_GET['tgl1'];
  $tglakhir = $_GET['tgl2'];
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
   <h3>Laporan Gajih</h3>
   <br>

   <table class="static" rules="all" border="1px" align="center">
                  <thead>
                    <tr>
                      <th width="215px" align="center">No</th>
                      <th width="215px" align="center">Nama</th>
                      <th width="215px" align="center">Gaji</th>
                      <th width="215px" align="center">Tunjangan</th>
                      <th width="215px" align="center">Bonus</th>
                      <th width="215px" align="center">Alpha</th>
                      <th width="215px" align="center">Telat</th>
                      <th width="215px" align="center">Total</th>
                      <th width="215px" align="center">Keterangan</th>
                    </tr>
                  </thead>
                  <?php
                    $no = 1;
                    $koneksi = new koneksi();
                    $conn =  $koneksi->get_connection();
                    $data=mysqli_query($conn,"SELECT gajih.gaji, gajih.tunjangan, gajih.bonus ,gajih.total, gajih.ket, pegawai.id, pegawai.nama FROM gajih join pegawai on gajih.pegawai = pegawai.id"); 
                    while($d = mysqli_fetch_array($data)){
                    $id_pegawai = $d['id'];
                  ?>
                    <tr>
                          <td><?= $no++; ?></td>
                          <td><?= $d['nama']; ?></td>
                          <td>Rp. <?= number_format($d['gaji'], 0, ',', '.') ?></td>
                          <td>Rp. <?= number_format($d['tunjangan'], 0, ',', '.') ?></td>
                          <td>Rp. <?= number_format($d['bonus'], 0, ',', '.') ?></td>
                          <?php 
                         $jumlah_alpha=mysqli_query($conn,"SELECT * FROM absen WHERE absen.ket='ALPHA' and id_pegawai=$id_pegawai  and absen.tgl BETWEEN '".$tglawal."' AND '".$tglakhir."' ");
                         $alpha = mysqli_num_rows($jumlah_alpha) ;
                         ?>
                         
                        <td><?= $alpha ?></td> 

                        <?php
                         $jumlah_telat=mysqli_query($conn,"SELECT * FROM absen WHERE absen.ket='TELAT' and id_pegawai=$id_pegawai  and absen.tgl BETWEEN '".$tglawal."' AND '".$tglakhir."' ");
                         $telat = mysqli_num_rows($jumlah_telat);
                         ?>
                         
                        
                        <td><?= $telat ?></td> 

                        <?php $total = $d['total'] - ($alpha * 100000) - ($telat * 10000); ?>
                          <td>Rp. <?= number_format($total, 0, ',', '.') ?></td>
                          <td><?= $d['ket']; ?></td>
                    </tr>
                  <?php } ?>
                </table>
<br>

                <table width="30%" align="right" border="0">
		<tr>
			<td width="10%"></td>
			<td align="center"><p> PIMPINAN<br><br><br><br><br><u>H.HARRY WIJAYA</u></p></td>		</tr>
		</tr>
	</table>


</div>

</body>


</html>



               
<script>
  window.print()
</script>