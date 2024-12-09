<main id="main" class="main">
<h2>Tabel Barang Keluar</h2>
<table class="table table-striped">
   
    <div class="pagetitle">
        <h1>Table Barang Keluar</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Barang Keluar</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <!-- Table with stripped rows -->
                        <a href="<?= base_url('home/bk') ?>"><button class="btn btn-success">+Tambah</button></a>

                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col" width="3%">NO</th>
                                    <th scope="col">ID Barang Keluar</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Tanggal Keluar</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $ms = 1;
                                foreach ($kita as $key => $value) {
                                ?>
                                <tr>
                                    <th scope="row"><?= $ms++ ?></th>
                                    <td><?= $value->id_bk ?></td>
                                    <td><?= $value->jumlah ?></td>
                                    <td><?= $value->tanggal_keluar ?></td>
                                    <td>
                                        <a href="<?= base_url('Home/edit_bk/'.$value->id_bk)?>" class="btn btn-warning">Edit</a>
                                        <a href="<?= base_url('Home/hapus_bk/'.$value->id_bk)?>" class="btn btn-danger">Hapus</a>
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