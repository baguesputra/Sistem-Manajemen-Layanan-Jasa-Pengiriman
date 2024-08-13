<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../asset/img/logo_jp.webp" />
  <title>PT. Aneka Transindo Utama</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../asset/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="../asset/css/adminlte.min.css">
  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/carousel/">
  <nav class="navbar navbar-light bg-light navbar-expand-lg  fixed-top">
  <a class="navbar-brand" href="beranda.php">
  <img src="../asset/img/logo_jp.webp" width="30" height="30" class="d-inline-block align-top" alt="">
    PT. Aneka Transindo Utama
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="beranda.php">Beranda<span class="sr-only">(current)</span></a>
      </li>
     
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Masyarakat</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="kritik.php">Kritik dan Saran</a>
          <a class="dropdown-item" href="pengaduan.php">Pengaduan</a>
        </div>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="tentang.php">Tentang</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="cekresi.php">Cek No Resi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kontak.php">Kontak</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" href="login.php">
          Login
        </a>
      </li>
    </ul>
  </div>
</nav>

<style>
   .navbar{
      
      }
    body {
      padding-top: 3rem;
      color: #5a5a5a;
    }

    .carousel {
      margin-bottom: 4rem;
    }

    .carousel-caption {
      bottom: 3rem;
      z-index: 10;
    }

    .carousel-item {
      height: 32rem;
      background-color: #777;
    }

    .carousel-item > img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: 32rem;
    }

    .marketing .col-lg-4 {
      margin-bottom: 1.5rem;
      text-align: center;
    }

    .marketing h2 {
      font-weight: 400;
    }

    .marketing .col-lg-4 p {
      margin-right: .75rem;
      margin-left: .75rem;
    }

    .featurette-divider {
      margin: 5rem 0;
    }

    .featurette-heading {
      font-weight: 300;
      line-height: 1;
      letter-spacing: -.05rem;
    }

    @media (min-width: 40em) {
      .carousel-caption p {
        margin-bottom: 1.25rem;
        font-size: 1.25rem;
        line-height: 1.4;
      }

      .featurette-heading {
        font-size: 50px;
      }
    }

    @media (min-width: 62em) {
      .featurette-heading {
        margin-top: 7rem;
      }
    }
</style>
</head>
<?php include '../function/config.php'; ?>
<body>
<main role="main">
<br>
<br>

<div class="container">
	<div class="row-fluid">
    <form action="cekresi.php" method="get">
  <div class="form-group">
                    <label for="exampleInputEmail1">Resi</label>
                    <input type="text" name="cari" id="cari" class="form-control" placeholder="Masukkan No Resi">
                  </div>
                  <div >
                  <button type="submit" id="showit" class="btn btn-success">Cek</button>
                </div>
  </form>
  
  <?php 
  
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>

<table border="1">
	<tr>
		<th colspan="2">Lokasi</th>
    <th>Status</th>
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
    $koneksi = new koneksi();
  $conn =  $koneksi->get_connection();
		$data = mysqli_query($conn,"SELECT pengiriman.resi,detail_pengiriman.lokasi,detail_pengiriman.status FROM pengiriman join detail_pengiriman on pengiriman.id = detail_pengiriman.resi where pengiriman.resi=$cari order by detail_pengiriman.id DESC");
   
	}else{
		echo 'data tidak ada';	
	}
	$no = 1;
	foreach($data ?? [] as $d){
    
	?>
	<tr>
    
      <td><i class="fa fa-circle" aria-hidden="true"></i></td>
		<td><?php echo $d['lokasi']; ?></td>
    <td><?php echo $d['status']; ?></td>
  </tr>
	<?php }?>
</table>
  
<a href="cekresi.php"class="btn btn-danger">Reset</a>
  </div>
</div>
<footer class="container">
  <p>&copy; 2023 PT Aneka Transindo Utama<a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
</footer>
</main>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../asset/plugins/jquery/jquery.min.js"></script>
<script src="../asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../asset/js/adminlte.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>

