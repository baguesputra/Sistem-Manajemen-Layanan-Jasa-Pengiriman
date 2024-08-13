<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/pengiriman_function.php';
  $data = new pengiriman(); 
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
      function autofill(){
        var id = $("#select_berat").val(); 
        $.ajax({
          url : 'autocomplete_barang.php',
          data : "id="+id,
        }).success(function(data){
          var json = data,
          obj = JSON.parse(json);
          $('#harga_berat').val(obj.harga); 
          $('#berat').val(obj.berat); 
        })
      }

      function autofill2(){
        var id = $("#select_jarak").val(); 
        $.ajax({
          url : 'autocomplete_jarak.php',
          data : "id="+id,
        }).success(function(data){
          var json = data,
          obj = JSON.parse(json);
          $('#harga_jarak').val(obj.harga); 
          $('#jarak').val(obj.asal +' - '+ obj.tujuan); 
 
        })
      }

      function sum() {
			var harga_berat = document.getElementById('berat').value;
      var harga_jarak = document.getElementById('harga_jarak').value;
			var sum = parseInt(harga_berat) * parseInt(harga_jarak);
			
				if (!isNaN(sum)) {
					document.getElementById('total').value = sum;
			
				}
					}

     
</script>

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah pengiriman</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Data pengiriman</a></li>
              <li class="breadcrumb-item active">Tambah pengiriman</li>
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
                    <label for="exampleInputEmail1">Resi</label>
                    <?php 
$a = mt_rand(1000000000,9999999999); 
?>
                    <input type="text" name="resi" class="form-control" id="exampleInputEmail1" value="<?= $a ?>" placeholder="Masukkan Nik">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Tanggal">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Pengirim</label>
                    <select name="pengirim" id="pengirim" class="form-control">
                      <option value="" selected hidden>--Pilih--</option>
                      <?php
                        foreach($data->pelanggan() as $p):
                      ?>
                      <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Pengirim</label>
                    <input type="text" name="no_pengirim" class="form-control" id="exampleInputEmail1" placeholder="Masukkan No pengirim">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Penerima</label>
                    <input type="text" name="penerima" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Penerima">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Penerima</label>
                    <input type="text" name="no_penerima" class="form-control" id="exampleInputEmail1" placeholder="Masukkan No penerima">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat Tujuan</label>
                    <input type="text" name="tujuan" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Tujuan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jarak</label>
                    <select name="select_jarak" id="select_jarak" class="form-control" onchange="autofill2()">
                      <option value="" selected hidden>--Pilih--</option>
                      <?php
                        foreach($data->jarak() as $j):
                      ?>
                      <option value="<?= $j['id'] ?>"><?= $j['asal'] ?> - <?= $j['tujuan'] ?></option>
                      <?php endforeach ?>
                    </select>
                    <input type="text" name="jarak" id="jarak" class="form-control" hidden>
                  </div>
                  <div class="form-group">
                  <input type="text" name="harga_jarak" id="harga_jarak" class="form-control" onkeyup="sum();" value="0"  placeholder="Masukkan Total" readonly>
                  
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Berat</label>
                    <input type="text" name="berat" id="berat" class="form-control" onkeyup="sum();" value="0"  placeholder="Masukkan Total">
                   
                  </div>
                 
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Total</label>
                    <input type="text" name="total" id="total" class="form-control" onclick="sum()" placeholder="Masukkan Total">
                    
                    
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kurir</label>
                    <select name="kurir" id="kurir" class="form-control">
                      <option value="" selected hidden>--Pilih--</option>
                      <?php
                        foreach($data->pegawai() as $p):
                          if($p['jabatan'] == 'kurir'){
                      ?>
                      <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                      <?php } endforeach ?>
                    </select>
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