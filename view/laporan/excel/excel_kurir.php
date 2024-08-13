<?php 
  include '../../../function/pengiriman_function.php';
  $data = new pengiriman(); 
?>
<?php 
        $bulan1 =date('F', strtotime($tglawal));
        $bulan2 =date('F', strtotime($tglakhir));
        header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        header("Content-Disposition: attachment; filename=Laporan-Target Kurir-$bulan1.xls");
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
                          <?php $jumlah_target = mysqli_num_rows($data2); ?>
                          
                          <?php $jumlah += $p['total'] ?>
                        
                       
                        <?php  }?>
                        <td><?= $p['total'] ?></td>
                        <td><?= $p['jumlah'] ?></td>
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