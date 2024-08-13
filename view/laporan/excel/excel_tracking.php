<?php 
  include '../../../function/pengiriman_function.php';
  $data = new pengiriman(); 
  $id_resi = $_GET['resi'];
?>
<?php 
        $bulan1 =date('F', strtotime($tglawal));
        $bulan2 =date('F', strtotime($tglakhir));
        header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        header("Content-Disposition: attachment; filename=Laporan-Tracking-Pengiriman-$bulan1.xls");
        header("Pragma: no-cache");
        header("Expires: 0");
        header("Cache-Control: max-age=0");
        header("Cache-Control: private",false); 
?> 
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              </div>
              <div class="card-body">
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
                    $data=mysqli_query($conn,"SELECT * FROM pengiriman join pelanggan on pengiriman.pengirim = pelanggan.id WHERE pengiriman.id = '".$id_resi."'"); 
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

                <h3>Hasil Tracking</h3>
                <table class="static" rules="all" border="1px" align="center">
                  <thead>
                  <tr>
                    <th width="215px" align="center">No</th>
                    <th width="215px" align="center">Lokasi</th>
                    <th width="215px" align="center">Status</th>
                    <th width="215px" align="center">Waktu</th>
                  </tr>
                  </thead>
                  <?php
                    $no = 1;
                    $koneksi = new koneksi();
                    $conn =  $koneksi->get_connection();
                    $data=mysqli_query($conn,"SELECT * FROM detail_pengiriman WHERE resi = '".$id_resi."'"); 
                    while($d = mysqli_fetch_array($data)){
                    
                  ?>
                  <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $d['lokasi']; ?></td>
                        <td><?= $d['status']; ?></td>
                        <td><?= $d['waktu']; ?></td>
                     
                      
                  </tr>
                  <?php } ?>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>