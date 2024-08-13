<?php 
  include '../../function/pengiriman_function.php';
  include "../../asset/lib/phpqrcode/qrlib.php"; 
  $data = new pengiriman(); 
  $id = $_GET['id'];
  $pengiriman = $data->edit($id);
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
   <h3>Tanda Terima</h3>
   <br>
  
   <table style="margin-left: 100px;">
 
    <tr >
      <td style="font-size: 12pt;">No Resi</td>
      <td style="font-size: 12pt;">: <?= $pengiriman->resi ?></td>
    </tr>
    <tr>
      <td style="font-size: 12pt;">Nama</td>
      <td style="font-size: 12pt;">: <?= $pengiriman->pengirim ?></td>
    </tr>
    <tr>
      <td style="font-size: 12pt;">Tanggal</td>
      <td style="font-size: 12pt;">: <?= $pengiriman->tanggal ?></td>
    </tr>
    <tr>
      <td style="font-size: 12pt;">Penerima</td>
      <td style="font-size: 12pt;">: <?= $pengiriman->penerima ?></td>
    </tr>
    <tr>
      <td style="font-size: 12pt;">No Penerima</td>
      <td style="font-size: 12pt;">: <?= $pengiriman->no_penerima ?></td>
    </tr>
    <tr>
      <td style="font-size: 12pt;">Alamat Tujuan</td>
      <td style="font-size: 12pt;">: <?= $pengiriman->tujuan ?></td>
    </tr>
    <tr>
      <td style="font-size: 12pt;">Kota</td>
      <td style="font-size: 12pt;">: <?= $pengiriman->jarak ?></td>
    </tr>
    <tr>
      <td style="font-size: 12pt;">Total</td>
      <td style="font-size: 12pt;">: Rp. <?= number_format($pengiriman->total, 0, ',', '.') ?></td>
    </tr>
   
   
   </table>
        <?php
      
      
      //KODE MEMBUAT QRCODE
      Qrcode::png($pengiriman->resi,"image.png","L",7,8); 
     
      ?>
      <div style="position: absolute; margin-left:500px; margin-top: -230px;">
      <img src="image.png" alt="">
      </div>

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