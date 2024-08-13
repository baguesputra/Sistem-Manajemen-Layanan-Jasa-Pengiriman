<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/pengiriman_function.php';
  $data = new pengiriman(); 
  $id = $_GET['id'];
  $pengiriman = $data->edit($id);
?>

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Status pengiriman</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Data pengiriman</a></li>
              <li class="breadcrumb-item active">Status pengiriman</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
               
              </div>
              <form action="proses.php" method="post">
              <div class="card-body">
                <div class="row">
              <div class="col-sm-4">
              <div class="form-group">
                    <label for="exampleInputEmail1">Resi</label>
                    <?php 
$a = mt_rand(1000000000,9999999999); 
?>
                    <input type="text" name="" class="form-control" id="exampleInputEmail1" value="<?= $pengiriman->resi ?>" placeholder="Masukkan Nik" readonly>
                    <input type="text" name="resi" class="form-control" id="exampleInputEmail1" value="<?= $pengiriman->id ?>" placeholder="Masukkan Nik" hidden>
                  </div>
</div>
<div class="col-sm-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1" value="<?= $pengiriman->tanggal ?>" placeholder="Masukkan Nama Tanggal" readonly>
                  </div>
</div>
</div>

<h4>Tambah Status</h4>
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Lokasi</label>
                        <input type="text" name="lokasi" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Lokasi">
                        <input type="text" name="id_jadwal" class="form-control" id="exampleInputPassword1" value="<?= $absen->id ?>" placeholder="Masukkan No Agenda" hidden>
                      </div>
                    </div>
                    <div class="col-xs-2">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Status</label>
                        <input type="text" name="status" class="form-control" id="exampleInputEmail1"  placeholder="Masukkan Status">
                      </div>
                    </div>
                            </div>
                 
                 
                  <table id="example" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Lokasi</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <?php
                     $no=1;
                     foreach($data->detail() as $a){
                      if($pengiriman->id == $a['resi']){
                  ?>
                  <tr>
                        <td><?= $no++ ?></td>
                        
                        <td><?= $a['lokasi']; ?></td>
                        <td><?= $a['status']; ?></td>
                      
                  </tr>
                <?php }} ?>
                </table>
                 
                
                </div>
                <div class="card-footer">
                  <button type="submit" name="tambah_detail" class="btn btn-success">Tambah</button>
                </div
              </form>
            </div>
            </div>
          <div class="col-md-6">

          </div>
        </div>
      </div>
    </section>
  </div>