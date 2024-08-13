<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/jarak_function.php';
  $data = new jarak(); 
  $id = $_GET['id'];
  $jarak = $data->edit($id);
?>

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit List Harga</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Data List Harga</a></li>
              <li class="breadcrumb-item active">Edit List Harga</li>
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
              <input type="text" name="id" class="form-control" id="exampleInputEmail1" value="<?= $jarak->id ?>" placeholder="Masukkan Kota Asal" hidden>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kota Asal</label>
                    <input type="text" name="asal" class="form-control" id="exampleInputEmail1" value="<?= $jarak->asal ?>" placeholder="Masukkan Kota Asal">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kota Tujuan</label>
                    <input type="text" name="tujuan" class="form-control" id="exampleInputEmail1" value="<?= $jarak->tujuan ?>" placeholder="Masukkan Kota Tujuan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Harga</label>
                    <input type="text" name="harga" class="form-control" id="exampleInputPassword1" value="<?= $jarak->harga ?>" placeholder="Masukkan Harga">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Keterangan</label>
                    <input type="text" name="ket" class="form-control" id="exampleInputPassword1" value="<?= $jarak->ket ?>" placeholder="Masukkan Keterangan">
                  </div>
            
                </div>
                <div class="card-footer">
                  <button type="submit" name="edit" class="btn btn-success">Ubah</button>
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