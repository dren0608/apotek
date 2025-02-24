<main id="main" class="main">
<h2>Tabel Nota</h2>
<table class="table table-striped">
   
    <div class="pagetitle">
        <h1>Table Nota</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Nota</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <!-- Table with stripped rows -->
                        <a href="<?= base_url('home/tnota') ?>"><button class="btn btn-success">+Tambah</button></a>

                        <table class="table datatable">
                            <thead>
                                <tr>
                    <th width='3%'>No</th>
                    <th>Tanggal</th>
                    <th>Username</th>
                    <th>Total Bayar</th>
                    <th>Metode Pembayaran</th>
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
                    <td><?= $value->tanggal ?></td>
                    <td><?= $value->id_user ?></td>
                    <td><?= $value->total_bayar?></td>
                    <td><?= $value->metode_pembayaran ?></td>
                    <td>
                                        <a href="<?= base_url('Home/edit_nota/'.$value->id_nota)?>" class="btn btn-warning">Edit</a>
                                        <a href="<?= base_url('Home/hapus_nota/'.$value->id_nota)?>" class="btn btn-danger">Hapus</a>
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