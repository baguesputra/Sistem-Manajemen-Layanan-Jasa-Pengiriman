<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/jarak_function.php';
  $data = new jarak(); 
  $id = $_GET['id'];
  $pegawai = $data->edit($id);
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail List Harga</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Data List Harga</a></li>
              <li class="breadcrumb-item active">Detail List Harga</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
               
              </div>
              <form action="proses.php" method="post">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Kota Asal</label>
                    <input type="text" name="asal" class="form-control" id="exampleInputEmail1" value="<?= $jarak->asal ?>" placeholder="Masukkan Kota Asal" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kota Tujuan</label>
                    <input type="text" name="tujuan" class="form-control" id="exampleInputEmail1" value="<?= $jarak->tujuan ?>" placeholder="Masukkan Kota Tujuan" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Harga</label>
                    <input type="text" name="harga" class="form-control" id="exampleInputPassword1" value="<?= $jarak->harga ?>" placeholder="Masukkan Harga" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Keterangan</label>
                    <input type="text" name="ket" class="form-control" id="exampleInputPassword1" value="<?= $jarak->ket ?>" placeholder="Masukkan Keterangan" readonly>
                  </div>
                 
                </div>
              </form>
            </div>
            </div>
          <div class="col-md-6">

          </div>
        </div>
      </div>
    </section>
  </div>