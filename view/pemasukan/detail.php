<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/pemasukkan_function.php';
  $data = new pemasukkan(); 
  $id = $_GET['id'];
  $pemasukkan = $data->edit($id);
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail pemasukkan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Data pemasukkan</a></li>
              <li class="breadcrumb-item active">Detail pemasukkan</li>
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
                <input type="text" name="id" class="form-control" id="exampleInputEmail1" value="<?= $pemasukkan->id ?>" placeholder="Masukkan Nik" readonly>
                    <label for="exampleInputEmail1">Tanggal</label>
                    <input type="date" name="tgl" class="form-control" id="exampleInputEmail1" value="<?= $pemasukkan->tgl ?>" placeholder="Masukkan Nik" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pembayaran</label>
                    <select name="bayar" id="bayar" class="form-control" readonly>
                      <option value="<?= $pemasukkan->bayar ?>" selected hidden><?= $pemasukkan->bayar ?></option>
                      <option value="cash">CASH</option>
                      <option value="transfer">Transfer</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah</label>
                    <input type="text" name="jumlah" class="form-control" id="exampleInputPassword1" value="<?= $pemasukkan->jumlah ?>" placeholder="Masukkan Jumlah" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Keterangan</label>
                    <input type="text" name="ket" class="form-control" id="exampleInputPassword1" value="<?= $pemasukkan->ket ?>" placeholder="Masukkan keterangan" readonly>
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