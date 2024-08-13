<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/barang_function.php';
  $data = new barang(); 
  $id = $_GET['id'];
  $barang = $data->edit($id);
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
              <input type="text" name="id" class="form-control" id="exampleInputEmail1" value="<?= $barang->id ?>" placeholder="Masukkan Kota berat" hidden>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Berat</label>
                    <input type="text" name="berat" class="form-control" id="exampleInputEmail1" value="<?= $barang->berat ?>" placeholder="Masukkan Kota berat">
                  </div>
               
                  <div class="form-group">
                    <label for="exampleInputPassword1">Harga</label>
                    <input type="text" name="harga" class="form-control" id="exampleInputPassword1" value="<?= $barang->harga ?>" placeholder="Masukkan Harga">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Keterangan</label>
                    <input type="text" name="ket" class="form-control" id="exampleInputPassword1" value="<?= $barang->ket ?>" placeholder="Masukkan Keterangan">
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