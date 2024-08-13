<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/user_function.php';
  $data = new user(); 
?>

  <div class="content-wrapper">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Tambah User</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index.php">Data User</a></li>
                <li class="breadcrumb-item active">Tambah User</li>
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
                      <label for="exampleInputEmail1">Pegawai</label>
                      <div class="form-group">
                        <select name="id_pegawai" id="id_pegawai" class="form-control">
                          <option value="" selected hidden>--Pilih Pegawai--</option>
                          <?php foreach ($data->pegawai() as $pegawai): {?>
                          <option value="<?= $pegawai['id']; ?>"><?= $pegawai['nama']; ?></option>
                          <?php } endforeach ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Username</label>
                      <input type="text" name="username" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="text" name="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Level</label>
                      <div class="form-group">
                        <select name="level" id="level" class="form-control">
                          <option value="" selected hidden>--Pilih Level--</option>
                          <option value="admin">Administrator</option>
                          <option value="kurir">Kurir</option>
                          <option value="pegawai">Pegawai / Staff</option>
                        </select>
                      </div>
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