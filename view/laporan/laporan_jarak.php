<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/jarak_function.php';
  $data = new jarak(); 
?>

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Laporan List Harga Jarak</h1>
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
              
                <div class="card-footer">
                  <a href="pdf/pdf_jarak.php" class="btn btn-danger">Pdf</a>
                  <a href="excel/excel_jarak.php" class="btn btn-success">Excel</a>
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