<?php $page = "pegawai";?>
<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/pemasukkan_function.php';
  $data = new pemasukkan(); 
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
            <h1>Data pemasukkan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data pemasukkan</li>
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
                <?php
  $koneksi = new koneksi();
  $conn =  $koneksi->get_connection();
  $total=0;
  $pegawai=mysqli_query($conn,"SELECT * FROM pemasukkan"); 
  foreach($data->index() as $pemasukkan){
      $total += $pemasukkan['jumlah'];
    };
  ?>
                <h2 align="right">Total Pemasukan :Rp. <?= number_format($total, 0, ',', '.') ?></h2>
              
              </div>
              <div class="card-body">
                <table id="example" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Pembayaran</th>
                    <th>Jumlah</th>
                    <th>Ket</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <?php
                     $no=1;
                   
                     foreach($data->index() as $pemasukkan){
              
                  ?>
                  <tr>
                   
                        <td><?= $no++ ?></td>
                        <td><?= $pemasukkan['tgl']; ?></td>
                        <td><?= $pemasukkan['bayar']; ?></td>
                        <td>Rp. <?= number_format($pemasukkan['jumlah'], 0, ',', '.') ?></td>
                        <td><?= $pemasukkan['ket']; ?></td>
                        <td>
                          <a href="edit.php?id=<?=$pemasukkan['id'] ?>" class="btn btn-warning fa fa-edit"></a>
                          <?php if($_SESSION['level']=='admin') { ?>
                          <a href="proses.php?id=<?=$pemasukkan['id'] ?>" onclick="confirm('Apakah yakin data akan dihapus?')" class="btn btn-danger fa fa-window-close"></a>
                          <?php } ?>
                        </td>
                      
                  </tr>
                <?php } ?>
                </table>
                
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>