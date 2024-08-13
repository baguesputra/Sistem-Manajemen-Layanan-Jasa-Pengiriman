<?php 
  include '../../../function/pengiriman_function.php';
  $data = new pengiriman(); 
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
   <h3>Laporan Target Kurir</h3>
   <br>

   <table class="static" rules="all" border="1px" align="center">
                  <thead>
                  <tr>
                    <th width="215px" align="center">No</th>
                    <th width="215px" align="center">Kurir</th>
                    <th width="215px" align="center">Jumlah Pengiriman</th>
                    <th width="215px" align="center">Total</th>
                  </tr>
                  </thead>
                  <?php
                    $no = 1;
                    $jumlah = 0;
                    $koneksi = new koneksi();
                    $conn =  $koneksi->get_connection();
                   
                    $data=mysqli_query($conn,"SELECT * FROM pegawai where pegawai.jabatan='kurir' "); 
                    
                    foreach ($data as $d){
                      $id_pegawai = $d['id'];
                      $data2=mysqli_query($conn,"SELECT COUNT(id)as total, SUM(total) as jumlah FROM pengiriman where kurir='$id_pegawai'"); 
                     
                  ?>
                  <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $d['nama']; ?></td>
                        
                        <?php 
                          foreach ($data2 as $p){
                        
                        ?>
                       
                        
                        <td><?= $p['total'] ?></td>
                        <td>Rp. <?= number_format($p['jumlah'], 0, ',', '.') ?></td>
                  </tr>
                  <?php }} ?>
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