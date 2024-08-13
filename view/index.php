<?php include 'layout/header.php'; ?>
<?php 
  include '../function/pegawai_function.php';
?>
<?php

?>
<?php
  $koneksi = new koneksi();
  $conn =  $koneksi->get_connection();
  $pegawai=mysqli_query($conn,"SELECT * FROM pegawai"); 
  $pengiriman=mysqli_query($conn,"SELECT * FROM pengiriman"); 
  $pengiriman_kurir=mysqli_query($conn,"SELECT * FROM pengiriman where kurir=".$_SESSION['id_pegawai'].""); 
  $pelanggan=mysqli_query($conn,"SELECT * FROM pelanggan");
  $user=mysqli_query($conn,"SELECT * FROM user");
  $jumlah_pegawai = mysqli_num_rows($pegawai);
  $jumlah_pengiriman = mysqli_num_rows($pengiriman);
  $jumlah_pengiriman_kurir = mysqli_num_rows($pengiriman_kurir);
  $jumlah_pelanggan = mysqli_num_rows($pelanggan);
  $jumlah_user = mysqli_num_rows($user);
?>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
      
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
      <?php if($_SESSION['level']=='admin' || $_SESSION['level']=='pegawai'){ ?>
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
              <h3><?= $jumlah_pegawai ?></h3>

                <p>Pegawai</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="../view/pegawai/index.php" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $jumlah_pengiriman ?></h3>

                <p>Pengiriman</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-mail"></i>
              </div>
              <a href="../view/pengiriman/index.php" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $jumlah_pelanggan ?></h3>

                <p>Customer</p>
              </div>
              <div class="icon">
                <i class="ion ion-email-unread"></i>
              </div>
              <a href="../view/pelanggan/index.php" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $jumlah_pegawai ?></h3>

                <p>User</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-bookmark"></i>
              </div>
              <a href="../view/user/index.php" class="small-box-footer">Lihat<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>

<?php } ?>





        <?php if($_SESSION['level']=='kurir'){ ?>
          <div class="row">
          
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $jumlah_pengiriman_kurir ?></h3>

                <p>Pengiriman</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-mail"></i>
              </div>
              <a href="../view/pengiriman/index.php" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
         
         
        </div>
        <?php } ?>
    </section>
   
  </div>