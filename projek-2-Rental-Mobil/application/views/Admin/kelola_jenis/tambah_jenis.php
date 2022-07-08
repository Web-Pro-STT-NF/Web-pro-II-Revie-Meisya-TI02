<?php
if ($this->session->userdata('bagian') !== 'administrator') {
    redirect("dashboard");
}
?>
<!-- Meta -->
<?php $this->load->view('dashboard/layout/meta.php') ?>

<!-- Header -->
<?php $this->load->view('dashboard/layout/navbar.php') ?>

<!-- Sidebar -->
<?php $this->load->view('dashboard/layout/sidebar.php') ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1 class="mb-3 mt-1"><?= $alamat1 ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('index.php') ?>/dashboard"><?= $home ?></a></li>
                <li class="breadcrumb-item"><?= $alamat1 ?></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url('index.php') ?>/Admin/Kelola_jenis"><?= $alamat2 ?></a></li>
                <li class="breadcrumb-item active"><?= $alamat3 ?></li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card p-2">
                        <div class="card-body">
                            <h5 class="card-title">Form <?= $alamat1 ?></h5>
                            <div class="col-12 m-auto">
                                <form action="<?php echo base_url("index.php") ?>/Admin/Kelola_jenis/save" method="post" accept-charset="utf-8">

                                    <!-- Nama Jenis  -->
                                    <div class="row mb-3">
                                        <label for="nama" class="col-sm-4 col-form-label">Nama Jenis</label>
                                        <div class="col-sm-8">
                                            <input id="nama" name="nama" type="text" class="form-control" required>
                                        </div>
                                    </div>

                                    <!-- Biaya Perawatan -->
                                    <div class="row mb-3">
                                        <label for="biaya_perawatan" class="col-sm-4 col-form-label">Biaya Perawatan</label>
                                        <div class="col-sm-8">
                                            <input id="biaya_perawatan" name="biaya_perawatan" type="number" class="form-control" required>
                                        </div>
                                    </div>

                                    <!-- Submit -->
                                    <div class="row mb-3">
                                        <label class="col-sm-4 col-form-label"></label>
                                        <div class="col-sm-8">
                                            <button name="submit" id="submit" onclick="if(!confirm('Anda Yakin Data yang anda masukkan sudah benar?')) {return false}" type="submit" class="btn btn-primary">Kirim</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->

<!-- Footer & JS -->
<?php $this->load->view('dashboard/layout/footer.php') ?>
<?php $this->load->view('dashboard/layout/script.php') ?>