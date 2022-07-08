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
                <li class="breadcrumb-item"><a href="<?php echo base_url('index.php') ?>/Admin/Kelola_merk"><?= $alamat2 ?></a></li>
                <li class="breadcrumb-item active"><?= $alamat3 ?></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">

        <div class="row">
            <div class="col-lg-12">
                <div class="card p-2">
                    <div class="card-body">
                        <h5 class="card-title"><?= $title ?></h5>
                        <div class="row table-responsive">
                            <div class="col">
                                <table class="table table-striped text-nowrap">
                                    <tbody>
                                        <tr>
                                            <td>ID</td>
                                            <td>:</td>
                                            <td><?= $data_merk->id ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nama Merk</td>
                                            <td>:</td>
                                            <td><?= ucwords($data_merk->nama) ?></td>
                                        </tr>
                                        <tr>
                                            <td>Warna</td>
                                            <td>:</td>
                                            <td><?= ucwords($data_merk->produk) ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col">
                                <?php
                                $hidden = array('idupdate' => $data_merk->id);
                                echo form_open("Admin/Kelola_merk/save", '', $hidden);
                                ?>
                                <!-- Nama Merk -->
                                <div class="row mb-3">
                                    <label for="nama" class="col-sm-4 col-form-label">Nama Merk</label>
                                    <div class="col-sm-8">
                                        <input id="nama" name="nama" type="text" value="<?= $data_merk->nama ?>" class="form-control" required>
                                    </div>
                                </div>

                                <!-- Type / Model -->
                                <div class="row mb-3">
                                    <label for="produk" class="col-sm-4 col-form-label">Type / Model</label>
                                    <div class="col-sm-8">
                                        <input id="produk" name="produk" type="text" value="<?= $data_merk->produk ?>" class="form-control" required>
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