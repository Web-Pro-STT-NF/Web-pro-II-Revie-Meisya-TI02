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
                <li class="breadcrumb-item"><a href="<?php echo base_url('index.php')?>/dashboard"><?= $home ?></a></li>
                <li class="breadcrumb-item"><?= $alamat1 ?></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url('index.php')?>/Public/Data_mobil"><?= $alamat2 ?></a></li>
                <li class="breadcrumb-item active"><?= $alamat3 ?></li>

                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card p-2">
                            <div class="card-body table-responsive">
                                <h5 class="card-title"><?= $cardTitle ?></h5>
                                <div class="col-8">
                                    <table class="table table-striped text-nowrap">
                                        <tbody>
                                            <tr>
                                                <td>ID</td>
                                                <td>:</td>
                                                <td><?= $data_mobil->id ?></td>
                                            </tr>
                                            <tr>
                                                <td>No. Polisi</td>
                                                <td>:</td>
                                                <td><?= $data_mobil->nopol ?></td>
                                            </tr>
                                            <tr>
                                                <td>Merk</td>
                                                <td>:</td>
                                                <td>     
                                                <?php
                                                    foreach($merk as $objmerk) {
                                                        if($data_mobil->merk_id == $objmerk->id) {
                                                            echo $objmerk->nama.' '.$objmerk->produk;
                                                            break;
                                                        }
                                                    }
                                                ?>    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Warna</td>
                                                <td>:</td>
                                                <td><?= ucwords($data_mobil->warna) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Biaya Sewa</td>
                                                <td>:</td>
                                                <td><?= number_format($data_mobil->biaya_sewa,2,',','.') ?> Perhari</td>
                                            </tr>
                                            <tr>
                                                <td>CC</td>
                                                <td>:</td>
                                                <td>
                                                <?php
                                                    if(empty($data_mobil->cc)) {
                                                        $cc = '-';
                                                        echo $cc;
                                                    } else {
                                                        echo $data_mobil->cc;
                                                    }
                                                ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tahun Keluar</td>
                                                <td>:</td>
                                                <td>
                                                <?php
                                                    if(empty($data_mobil->tahun)) {
                                                        $tahun = '-';
                                                        echo $tahun;
                                                    } else {
                                                        echo $data_mobil->tahun;
                                                    }
                                                ?>   
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Deskripsi</td>
                                                <td>:</td>
                                                <td>
                                                <?php
                                                    $deskripsi = explode(',', $data_mobil->deskripsi);
                                                    $no = 0;
                                                    foreach($deskripsi as $desc) {
                                                        if($deskripsi[$no] !== '') {
                                                            echo '- '. $deskripsi[$no]. '<br>';
                                                        } else {
                                                            echo '-';
                                                        }
                                                        $no++;
                                                    }
                                                ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-4">
                                    
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
