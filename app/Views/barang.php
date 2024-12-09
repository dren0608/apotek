<main id="main" class="main">
<h2>Tabel Barang</h2>
<table class="table table-striped">
   
    <div class="pagetitle">
        <h1>Table Barang</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Barang</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <!-- Table with stripped rows -->
                        <a href="<?= base_url('home/tbr') ?>"><button class="btn btn-success">+Tambah</button></a>

                        <table class="table datatable">
                            <thead>
                                <tr>
                    <th width='3%'>No</th>
                    <th>Nama Barang</th>
                    <th>Kode Barang</th>
                    <th>Jenis Barang</th>
                    <th>Harga Barang</th>
                    <th>Stok</th>
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
                    <td><?= $value->nama_barang ?></td>
                    <td><?= $value->kode_barang ?></td>
                    <td><?= $value->jenis_barang ?></td>
                    <td><?= $value->harga_barang ?></td>
                    <td><?= $value->stok ?></td>
                    <td>
                                        <a href="<?= base_url('Home/edit_barang/'.$value->id_barang)?>" class="btn btn-warning">Edit</a>
                                        <a href="<?= base_url('Home/hapus_barang/'.$value->id_barang)?>" class="btn btn-danger">Hapus</a>
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