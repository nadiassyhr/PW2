<?= $this->extend('template') ?>

<?= $this->section('main') ?>


<div class="container p-5 bg-danger-subtle rounded-bottom-4">
  <h1>Selamat Datang di toko buku online</h1>
  <h5>kami menyediakan berbagai jenis buku dari penerbit terpercaya.</h5>
  <a href="<?= base_url() ?>" class="btn btn-primary">lihat produk</a>
</div>

<div class="container">

  <h2 class="mt-5">Buku Best Seller</h2>
  <div class="row gy-5">
    <div class="col-3">
    <div class="card">
        <img src="<?= base_url('images/444.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Dunia Sophie</h5>
          <p class="card-text">Rp 80.000</p>
          <a href="#" class="btn btn-primary">Add to cart</a>
        </div>

      </div>
    </div>
    <div class="col-3">
    <div class="card">
        <img src="<?= base_url('images/555.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Bulan - TERELIYE</h5>
          <p class="card-text">Rp 95.000</p>
          <a href="#" class="btn btn-primary">Add to cart</a>
        </div>

        </div>
    </div>
    <div class="col-3">
      <div class="card">
        <img src="<?= base_url('images/333.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Segala yang di isap langit</h5>
          <p class="card-text">Rp 65.000</p>
          <a href="#" class="btn btn-primary">Add to cart</a>
        </div>

      </div>
    </div>
    <div class="col-3">
      <div class="card">
        <img src="<?= base_url('images/666.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Nebula - TERELIYE</h5>
          <p class="card-text">Rp 95.000</p>
          <a href="#" class="btn btn-primary">Add to cart</a>
        </div>


        </div>
    </div>
    <div class="col-3">
      <div class="card">
        <img src="<?= base_url('images/777.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Bumi - TERELIYE</h5>
          <p class="card-text">Rp 95.000</p>
          <a href="#" class="btn btn-primary">Add to cart</a>
        </div>

        </div>
    </div>
    <div class="col-3">
      <div class="card">
        <img src="<?= base_url('images/888.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">The Book Of Alice</h5>
          <p class="card-text">Rp 75.000</p>
          <a href="#" class="btn btn-primary">Add to cart</a>
        </div>

        </div>
    </div>
    <div class="col-3">
      <div class="card">
        <img src="<?= base_url('images/999.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Cantik Itu Luka</h5>
          <p class="card-text">Rp 75.000</p>
          <a href="#" class="btn btn-primary">Add to cart</a>
        </div>

        </div>
    </div>
    <div class="col-3">
      <div class="card">
        <img src="<?= base_url('images/222.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Akademi Ouranos</h5>
          <p class="card-text">Rp 95.000</p>
          <a href="#" class="btn btn-primary">Add to cart</a>
        </div>

      </div>
    </div>
  </div>
</div>

  </div>
  <?= $this->endSection() ?>