<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/pelanggan_function.php';
  $data = new pelanggan(); 
?>

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah pelanggan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Data pelanggan</a></li>
              <li class="breadcrumb-item active">Tambah pelanggan</li>
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
              <form id="quickForm" action="proses.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nik</label>
                    <input type="text" name="nik" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nik">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="nama" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Lengkap">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Alamat">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kota</label>
                    <input type="text" name="kota" class="form-control" id="exampleInputPassword1" placeholder="Masukkan kota">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No</label>
                    <input type="text" name="no" class="form-control" id="exampleInputPassword1" placeholder="Masukkan No">
                  </div>
            
                </div>
                <div class="card-footer">
                  <button type="submit" name="tambah" class="btn btn-success">Tambah</button>
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