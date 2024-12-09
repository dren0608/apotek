<main id="main" class="main">
<h2>Keranjang</h2>
<table class="table table-striped">
   
    <div class="pagetitle">
        <h1>Table Keranjang</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Keranjang</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <!-- Table with stripped rows -->

                        <table class="table datatable">
                            <thead>
                                <tr>
                    <th width='3%'>No</th>
                    <th>Nama Barang</th>
                    <th>Kode Barang</th>
                    <th>Jenis Barang</th>
                    <th>Harga Barang</th>
                    <th>Quantity</th>
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
                    <td><?= $value->quantity ?></td>
                    <td>
                                        
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