<!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="/home/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <?php
        if(session()->get('level')==1) {
         ?>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Data Master</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/home/barang">
              <i class="bi bi-bag"></i><span>Barang</span>
            </a>
          </li>
          <li>
            <a href="/home/karyawan">
              <i class="bi bi-people-fill"></i><span>Karyawan</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->
       <?php } ?>
      <?php
        if(session()->get('level')==1 || session()->get('level')==3){
         ?>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-coin"></i><span>Transaksi</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/home/barang_masuk">
              <i class="bi bi-bag-plus"></i><span>Barang Masuk</span>
            </a>
          </li>
          <li>
            <a href="/home/barang_keluar">
              <i class="bi bi-bag-dash"></i><span>Barang Keluar</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->
      <?php } ?>
         <?php
         if (session()->get('level')==1 || session()->get('level')==4 || session()->get('level')==2){
          ?>

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="bi bi-clipboard"></i><span>Barang</span>
            </a>
          </li>
          <li>
            <a href="/home/lbrg">
              <i class="bi bi-clipboard-plus"></i><span>Barang Masuk</span>
            </a>
          </li>
          <li>
            <a href="tables-general.html">
              <i class="bi bi-clipboard-minus"></i><span>Barang Keluar</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->
<?php } ?>
  <?php
        if(session()->get('level')==1 || session()->get('level')==3){
         ?>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-coin"></i><span>Penjualan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/home/nota">
              <i class="bi bi-bag-plus"></i><span>Nota</span>
            </a>
          </li>
          <li>
            <a href="/home/Transaksi">
              <i class="bi bi-bag-dash"></i><span>Transaksi</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Forms Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="/home/logout">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Log Out</span>
        </a>
      </li>
      <?php
         if (session()->get('level')==1 || session()->get('level')==5 || session()->get('level')==2){
          ?>

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Market</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="/home/lrg">
              <i class="bi bi-clipboard"></i><span>List Barang</span>
            </a>
          </li>
          <li>
            <a href="/home/keranjang">
              <i class="bi bi-clipboard-plus"></i><span>Keranjang</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->
<?php } ?>
      
      <?php } ?>

      

      
  </aside><!-- End Sidebar-->