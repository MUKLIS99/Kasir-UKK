<?= $this->extend('layout/main') ?>
<?= $this->Section('menu') ?>


<li class="nav-item">
  <a href="<?= site_url('dashboard') ?>" class="nav-link ">
    <i class="fas fa-home nav-icon"></i>
    <p>
      Home
    </p>
  </a>
</li>


<?php if(session()->get('Level') == 'admin') :?>
<li class="nav-item">
  <a href="#" class="nav-link">
    <i class="fas fa-list"></i>
    <p>
      Data Master
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="list-kategori" class="nav-link">
        <i class="fas fa-wallet nav-icon"></i>
        <p>Kategori</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="list-satuan" class="nav-link">
        <i class="fas fa-stream nav-icon"></i>
        <p>Satuan</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="list-produk" class="nav-link">
        <i class="fas fa-briefcase nav-icon"></i>
        <p>Produk</p>
      </a>
    </li>

    <li class="nav-item">
  <a href="list-pengguna" class="nav-link ">
    <i class="fas fa-users nav-icon"></i>
    <p>
      Pengguna
    </p>
  </a>
</li>
  </ul>
</li>
<?php endif;?>

<li class="nav-item">
  <a href="#" class="nav-link">
    <i class="fas fa-donate nav-icon"></i>
    <p>
     Transaksi
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="list-penjualan" class="nav-link">
        <i class="fas fa-cart-plus nav-icon"></i>
        <p>Penjualan</p>
      </a>
    </li>

  </ul>
</li>


<li class="nav-item">
  <a href="list-laporan" class="nav-link ">
    <i class="fas fa-file nav-icon"></i>
    <p>
      Laporan
    </p>
  </a>
</li>

<li class="nav-item">
  <a href="logout" class="nav-link ">
    <i class="fas fa-sign-out-alt nav-icon"></i>
    <p>
      logout
    </p>
  </a>
</li>





<?= $this->endSection(); ?>