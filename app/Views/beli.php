<main id="main" class="main">
<h2>Tabel Beli</h2>
<table class="table table-striped">
   
    <div class="pagetitle">
        <h1>Table Beli</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Beli</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <!-- Table with stripped rows -->
                        <a href="<?= base_url('home/tbli') ?>"><button class="btn btn-success">+Tambah</button></a>

                        <table class="table datatable">
                            <thead>
                                <tr>
                    <th width='3%'>No</th>
                    <th>Jenis Barang</th>
                    <th>Nama Barang</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($kita as $key => $value) {
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value->jenis_barang ?></td>
                    <td><?= $value->nama_barang ?></td>
                    <td>
                                        <a href="<?= base_url('Home/beli_barang/'.$value->id_barang)?>" class="btn btn-warning">Beli</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->