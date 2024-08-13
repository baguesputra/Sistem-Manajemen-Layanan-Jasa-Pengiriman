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
            <h1>Edit pengiriman</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Data pengiriman</a></li>
              <li class="breadcrumb-item active">Edit pengiriman</li>
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
              <div class="form-group">
                    <label for="exampleInputEmail1">Resi</label>
                    <?php 
$a = mt_rand(1000000000,9999999999); 
?>
                    <input type="text" name="resi" class="form-control" id="exampleInputEmail1" value="<?= $pengiriman->resi ?>" placeholder="Masukkan Nik">
                    <input type="text" name="id" class="form-control" id="exampleInputEmail1" value="<?= $pengiriman->id ?>" placeholder="Masukkan Nik" hidden>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1" value="<?= $pengiriman->tanggal ?>" placeholder="Masukkan Nama Tanggal">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Pengirim</label>
                    <select name="pengirim" id="pengirim" class="form-control">
                     
                      <?php
                        foreach($data->pelanggan() as $p):
                      ?>
                      <?php if($p['id'] == $pengiriman->penerima){ ?>
                      <option value="<?= $p['id'] ?>" selected hidden><?= $p['nama'] ?></option>
                      <?php } ?>
                      <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Pengirim</label>
                    <input type="text" name="no_pengirim" class="form-control" id="exampleInputEmail1" value="<?= $pengiriman->no_pengirim ?>" placeholder="Masukkan No pengirim">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Penerima</label>
                    <input type="text" name="penerima" class="form-control" id="exampleInputPassword1"  value="<?= $pengiriman->penerima ?>" placeholder="Masukkan Penerima">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Penerima</label>
                    <input type="text" name="no_penerima" class="form-control" id="exampleInputEmail1" value="<?= $pengiriman->no_penerima ?>" placeholder="Masukkan No penerima">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat Tujuan</label>
                    <input type="text" name="tujuan" class="form-control" id="exampleInputPassword1"  value="<?= $pengiriman->tujuan ?>" placeholder="Masukkan Tujuan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Berat</label>
                    <select name="select_berat" id="select_berat" class="form-control" onchange="autofill()">
                      <option value="<?= $pengiriman->berat ?>" selected hidden><?= $pengiriman->berat ?></option>
                      <?php
                        foreach($data->barang() as $b):
                      ?>
                      <option value="<?= $b['id'] ?>"><?= $b['berat'] ?></option>
                      <?php endforeach ?>
                    </select>
                    <input type="text" name="berat" id="berat" value="<?= $pengiriman->berat ?>" class="form-control" hidden>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Total</label>
                    <input type="text" name="total" id="total" class="form-control" onclick="sum()" value="<?= $pengiriman->total ?>" placeholder="Masukkan Total">
                    <input type="text" name="harga_berat" id="harga_berat" class="form-control" onkeyup="sum();" value="0"  placeholder="Masukkan Total" hidden>
                    <input type="text" name="harga_jarak" id="harga_jarak" class="form-control" onkeyup="sum();" value="0"  placeholder="Masukkan Total" hidden>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kurir</label>
                    <select name="kurir" id="kurir" class="form-control">
                      
                      <?php
                        foreach($data->pegawai() as $p):
                      ?>
                      <?php if($p['id'] == $pengiriman->kurir){ ?>
                      <option value="<?= $p['id'] ?>" selected hidden><?= $p['nama'] ?></option>
                      <?php } ?>
                      <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                      <?php endforeach ?>
                    </select>
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