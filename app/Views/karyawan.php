<main id="main" class="main">
<h2>Tabel Karyawan</h2><table class="table table-striped">
   
    <div class="pagetitle">
        <h1>Table Karyawan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Karyawan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <!-- Table with stripped rows -->
                        <a href="<?= base_url('home/tkaryawan') ?>"><button class="btn btn-success">+Tambah</button></a>
                        <table class="table datatable">
                            <thead>
                                <th width='3%'>No</th>
                    <th>Nama Karyawan</th>
                    <th>NIK</th>
                    <th>NO HP</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
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
                    <td><?= $value->nama ?></td>
                    <td><?= $value->NIK ?></td>
                    <td><?= $value->no_hp ?></td>
                    <td><?= $value->jenis_kelamin ?></td>
                    <td><?= $value->tempat_lahir ?></td>
                    <td><?= $value->tanggal_lahir ?></td>
                    <td><?= $value->alamat ?></td>

                                    <td>
                                        <a href="<?= base_url('Home/edit_karyawan/'.$value->id_karyawan)?>" class="btn btn-warning">Edit</a>
                                        <a href="<?= base_url('Home/hapus_karyawan/'.$value->id_karyawan)?>" class="btn btn-danger">Hapus</a>
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