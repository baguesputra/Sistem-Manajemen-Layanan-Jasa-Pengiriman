<?php $page = "pegawai";?>
<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/pengiriman_function.php';
  $data = new pengiriman(); 
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
    $('table').DataTable({
    "order": [[0,'desc']],
    lengthMenu: [[10, 50, 100], [10, 50, 100]]
});
} );
</script> 

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data pengiriman</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data pengiriman</li>
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
                <h3 class="card-title">
                    <a href="tambah.php" class="btn btn-success">Tambah</a>
                </h3>
                <!-- <?php
  $koneksi = new koneksi();
  $conn =  $koneksi->get_connection();
  $total=0;
  $pengiriman=mysqli_query($conn,"SELECT * FROM pengiriman"); 
  $jumlah_pengiriman = mysqli_num_rows($pengiriman);
  foreach($data->index() as $pengiriman){
      $total += $pengiriman['total'];
    };
  ?>
                <h2 align="right">Total Pemasukan Pengiriman :Rp. <?= number_format($total, 0, ',', '.') ?></h2>
                <h2 align="right">Total Pengiriman :<?= $jumlah_pengiriman ?></h2> -->
              </div>
              <div class="card-body">
                <table id="example" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>No Resi</th>
                    <th>Pengirim</th>
                    <th>Penerima</th>
                    <th>Tujuan</th>
                    <th>Total</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <?php
                     $no=1;
                     foreach($data->index() as $pengiriman){
                      if($_SESSION['level']== 'admin' || $_SESSION['level']=='pegawai'){
                  ?>
                  <tr>
                   
                        <td><?= $no++ ?></td>
                        <td><?= $pengiriman['resi']; ?></td>
                        <td><?= $pengiriman['nama']; ?></td>
                        <td><?= $pengiriman['penerima']; ?></td>
                        <td><?= $pengiriman['tujuan']; ?></td>
                        <td>Rp. <?= number_format($pengiriman['total'], 0, ',', '.') ?></td>
                        <td>
                          <a href="edit.php?id=<?=$pengiriman['id'] ?>" class="btn btn-warning fa fa-edit"></a>
                          <a href="status.php?id=<?=$pengiriman['id'] ?>" class="btn btn-secondary fa fa-address-card"></a>
                          <a href="tanda_terima.php?id=<?=$pengiriman['id'] ?>" class="btn btn-primary ion ion-android-bookmark">
                          <?php if($_SESSION['level']=='admin') { ?>
                          <a href="proses.php?id=<?=$pengiriman['id'] ?>" onclick="confirm('Apakah yakin data akan dihapus?')" class="btn btn-danger fa fa-window-close"></a>
                          <?php } ?>
                        </td>
                            
                  </tr>
                <?php } elseif($_SESSION['id_pegawai'] == $pengiriman['kurir']){ ?>
                  <tr>
                   
                   <td><?= $no++ ?></td>
                   <td><?= $pengiriman['resi']; ?></td>
                   <td><?= $pengiriman['nama']; ?></td>
                   <td><?= $pengiriman['penerima']; ?></td>
                   <td><?= $pengiriman['tujuan']; ?></td>
                   <td><?= $pengiriman['total']; ?></td>
                   <td>
                     <!-- <a href="edit.php?id=<?=$pengiriman['id'] ?>" class="btn btn-warning fa fa-edit"></a> -->
                     <a href="status.php?id=<?=$pengiriman['id'] ?>" class="btn btn-secondary fa fa-address-card"></a>
                     <?php if($_SESSION['level']=='admin') { ?>
                     <a href="proses.php?id=<?=$pengiriman['id'] ?>" onclick="confirm('Apakah yakin data akan dihapus?')" class="btn btn-danger fa fa-window-close"></a>
                     <?php } ?>
                   </td>
                 
             </tr>
             <?php }} ?>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>