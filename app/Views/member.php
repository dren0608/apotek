<main id="main" class="main">
<h2>Tabel Member</h2>
<table class="table table-striped">
   
    <div class="pagetitle">
        <h1>Table Member</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Member</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <!-- Table with stripped rows -->
                        <a href="<?= base_url('home/tmember') ?>"><button class="btn btn-success">+Tambah</button></a>

                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col" width="3%">NO</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">NO HP</th>
                                    <th scope="col">Poin Member</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $ms = 1;
                                foreach ($kita as $key => $value) {
                                ?>
                                <tr>
                                    <th scope="row"><?= $ms++ ?></th>
                                    <td><?= $value->id_user ?></td>
                                    <td><?= $value->no_hp ?></td>
                                    <td><?= $value->poin_member ?></td>
                                    <td>
                                        <a href="<?= base_url('Home/edit_member/'.$value->id_member)?>" class="btn btn-warning">Edit</a>
                                        <a href="<?= base_url('Home/hapus_member/'.$value->id_member)?>" class="btn btn-danger">Hapus</a>
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