<div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper">
        <div class="logo">
          </a>
          <a href="javascript:void(0)" class="simple-text logo-normal">
           SISTEM PEMINJAMAN BARANG SMA MARDISISWA SEMARANG
          </a>
        </div>
        <ul class="nav">
          <li class="active ">
            <a href="<?php echo base_url('user/Dashboard') ?>">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Dashboard</p>
            </a>
          </li> 
          
          <li>
            <a href="<?php echo base_url('user/pinjam/tambah_pinjaman') ?>">
            <i class="fas fa-plus fa-sm"></i>
            <p>Tambahkan Pinjaman</p>
            </a>
          </li>

          <li>
            <a href="<?php echo base_url('user/pinjam') ?>">
              <i class="fas fa-exchange-alt"></i>
              <p>Daftar Peminjaman Sarana</p>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fas fa-exchange-alt"></i>
              <p>Pengembalian Sarana</p>
            </a>
          </li>
        </ul>
      </div>
    </div>