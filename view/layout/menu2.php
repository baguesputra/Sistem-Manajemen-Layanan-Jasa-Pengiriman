<div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <?php if($_SESSION['level']=='admin' || $_SESSION['level']=='atasan'){ ?>
          <li class="nav-item">
            <a href="../index.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cube"></i>
              <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../user/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../pegawai/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../pelanggan/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pelanggan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../jarak/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Harga Jarak</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../barang/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Harga Barang</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-archive"></i>
              <p>
                Jasa
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../pengiriman/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengiriman</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-university"></i>
              <p>
                Keuangan
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../gaji/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gaji</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../pemasukan/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pemasukan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../pengeluaran/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengeluaran</p>
                </a>
              </li>       
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Pegawai
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../absen/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Absen</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Laporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="../laporan/laporan_gaji.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gaji Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_absen_bulan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Absen Perbulan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_absen_pegawai.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Absen Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_pengiriman.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengiriman</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_tracking.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tracking Pengiriman</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_pemasukan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pemasukan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_pengeluaran.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengeluaran</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="../laporan/laporan_pelanggan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pelanggan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_barang.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Harga Berat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_jarak.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Harga Jarak</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="../laporan/laporan_kurir.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Target Kurir</p>
                </a>
              </li>
            </ul>
          </li>
          <?php } ?>


          <!-- User Pegawai -->
          <?php if($_SESSION['level']=='pegawai'){ ?>
          <li class="nav-item">
            <a href="../index.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-archive"></i>
              <p>
                Jasa
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../pengiriman/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengiriman</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-university"></i>
              <p>
                Keuangan
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../gaji/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gaji</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../pemasukan/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pemasukan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../pengeluaran/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengeluaran</p>
                </a>
              </li>       
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Pegawai
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../absen/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Absen</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Laporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="../laporan/laporan_gaji.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gaji Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_absen_bulan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Absen Perbulan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_absen_pegawai.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Absen Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_pengiriman.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengiriman</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_tracking.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tracking Pengiriman</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_pemasukan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pemasukan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_pengeluaran.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengeluaran</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="../laporan/laporan_pelanggan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pelanggan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_barang.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Harga Berat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_jarak.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Harga Jarak</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="../laporan/laporan_kurir.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Target Kurir</p>
                </a>
              </li>
            </ul>
          </li>
          <?php } ?>

          <!-- User Kurir -->
          <?php if($_SESSION['level']=='kurir'){ ?>
          <li class="nav-item">
            <a href="../index.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-archive"></i>
              <p>
                Jasa
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../pengiriman/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengiriman</p>
                </a>
              </li>
            </ul>
          </li>
         
            </ul>
          </li>
          <?php } ?>
         
        </ul>
      </nav>
    </div>
  </aside>