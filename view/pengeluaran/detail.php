<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/pengeluaran_function.php';
  $data = new pengeluaran(); 
  $id = $_GET['id'];
  $pengeluaran = $data->edit($id);
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail pengeluaran</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Data pengeluaran</a></li>
              <li class="breadcrumb-item active">Detail pengeluaran</li>
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
                <input type="text" name="id" class="form-control" id="exampleInputEmail1" value="<?= $pengeluaran->id ?>" placeholder="Masukkan Nik" readonly>
                    <label for="exampleInputEmail1">Tanggal</label>
                    <input type="date" name="tgl" class="form-control" id="exampleInputEmail1" value="<?= $pengeluaran->tgl ?>" placeholder="Masukkan Nik" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pembayaran</label>
                    <select name="bayar" id="bayar" class="form-control" readonly>
                      <option value="<?= $pengeluaran->bayar ?>" selected hidden><?= $pengeluaran->bayar ?></option>
                      <option value="cash">CASH</option>
                      <option value="transfer">Transfer</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah</label>
                    <input type="text" name="jumlah" class="form-control" id="exampleInputPassword1" value="<?= $pengeluaran->jumlah ?>" placeholder="Masukkan Jumlah" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Keterangan</label>
                    <input type="text" name="ket" class="form-control" id="exampleInputPassword1" value="<?= $pengeluaran->ket ?>" placeholder="Masukkan keterangan" readonly>
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