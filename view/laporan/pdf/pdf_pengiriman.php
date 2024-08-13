<?php 
  include '../../../function/pengiriman_function.php';
  $data = new pengiriman(); 
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
   <h3>Laporan Pengiriman</h3>
   <br>

   <table class="static" rules="all" border="1px" align="center">
                  <thead>
                  <tr>
                    <th width="215px" align="center">No</th>
                    <th width="215px" align="center">No Resi</th>
                    <th width="215px" align="center">Tanggal</th>
                    <th width="215px" align="center">Pengirim</th>
                    <th width="215px" align="center">No Pengirim</th>
                    <th width="215px" align="center">Penerima</th>
                    <th width="215px" align="center">No Penerima</th>
                    <th width="215px" align="center">Alamat Tujuan</th>
                    <th width="215px" align="center">Kota</th>
                    <th width="215px" align="center">Total</th>
                  </tr>
                  </thead>
                  <?php
                    $no = 1;
                    $koneksi = new koneksi();
                    $conn =  $koneksi->get_connection();
                    $data=mysqli_query($conn,"SELECT * FROM pengiriman join pelanggan on pengiriman.pengirim = pelanggan.id WHERE tanggal BETWEEN '".$tglawal."' AND '".$tglakhir."' "); 
                    while($d = mysqli_fetch_array($data)){
                    
                  ?>
                  <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $d['resi']; ?></td>
                        <td><?= $d['tanggal']; ?></td>
                        <td><?= $d['nama']; ?></td>
                        <td><?= $d['no_pengirim']; ?></td>
                        <td><?= $d['penerima']; ?></td>
                        <td><?= $d['no_penerima']; ?></td>
                        <td><?= $d['tujuan']; ?></td>
                        <td><?= $d['jarak']; ?></td>
                        <td>Rp. <?= number_format($d['total'], 0, ',', '.') ?></td>
                     
                      
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