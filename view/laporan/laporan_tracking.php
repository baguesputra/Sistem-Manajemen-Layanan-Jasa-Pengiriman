<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/pengiriman_function.php';
  $data = new pengiriman(); 
?>

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Laporan Tracking Pengiriman</h1>
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
              <form id="quickForm" name="form" action="pdf/pdf_tracking.php" method="GET">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputPassword1">Pilih Resi</label>
                    <select name="resi" id="resi" class="form-control">
                      <option value="" hidden selected>-- Pilih --</option>
                    <?php foreach($data->index() as $pengiriman){?>
                        <option value="<?= $pengiriman['id'] ?>"><?= $pengiriman['resi'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                <div class="card-footer">
                  <input type='submit' class="btn btn-danger" value='Pdf' onclick="this.form.target='_blank'; return true;">
                  <input type='submit' class="btn btn-success" value='Excel' onclick="form.action='excel/excel_tracking.php';  return true;">
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