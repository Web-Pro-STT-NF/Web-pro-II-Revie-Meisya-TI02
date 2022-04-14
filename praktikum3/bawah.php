
        <div class="card">
            <div class="card-header">
                <h6>Sistem Penilaian</h6>
            </div>
            <div class="card-body">
                <h1>Form Nilai Siswa</h1>
                <form class="mt-3" method="POST" action="home.php">
                    <div class="form-group row mb-3">
                        <label class="col-4 col-form-label" for="nama">Nama Lengkap</label> 
                        <div class="col-8">
                        <input name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-4 col-form-label" for="matkul">Mata Kuliah</label> 
                        <div class="col-8">
                        <select name="matkul" class="form-select">
                            <option value="ddp">Dasar Dasar Pemrograman</option>
                            <option value="dbs">Basis Data</option>
                            <option value="pw2">Pemrograman Web</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
                        <div class="col-3">
                        <input name="nilai_uts" placeholder="Nilai UTS" type="number" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
                        <div class="col-3">
                        <input name="nilai_uas" placeholder="Nilai UAS" type="number" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="tgs" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                        <div class="col-3">
                        <input name="nilai_tugas" placeholder="Nilai Tugas/Praktikum" type="number" class="form-control">
                        </div>
                    </div> 
                    <div class="form-group row mb-3">
                        <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
                <?php
                error_reporting(0);
                include_once 'libfungsi.php';
                $proses = $_POST['submit'];
                $nama = $_POST['nama'];
                $mata_kuliah = $_POST['matkul'];
                $nilai_uts = $_POST['nilai_uts'];
                $nilai_uas = $_POST['nilai_uas'];
                $nilai_tugas = $_POST['nilai_tugas'];
                //var baru
                $total = ((int)$_POST['nilai_uts']*0.3)+((int)$_POST['nilai_uas']*0.35)+((int)$_POST['nilai_tugas']*0.35);
                //if & switch
                if ($nilai_uts>=0 && $nilai_uts<=35 || $nilai_uas>=0 && $nilai_uas<=35 || $nilai_tugas>=0 && $nilai_tugas<=35){
                    //echo '<br>Nilai UTS : '.$nilai_uts.' '.'Grade : E';
                    //echo '<br>Nilai UAS : '.$nilai_uas.' '.'Grade : E';
                    //echo '<br>Nilai Tugas Praktikum : '.$nilai_tugas.' '.'Grade : E';
                }
                elseif ($nilai_uts>=36 && $nilai_uts<=55 || $nilai_uas>=36 && $nilai_uas<=55 || $nilai_tugas>=36 && $nilai_tugas<=55){
                    //echo '<br>Nilai UTS : '.$nilai_uts.' 'Grade : D';
                    //echo '<br>Nilai UAS : '.$nilai_uas.' '.'Grade : D';
                    //echo '<br>Nilai Tugas Praktikum : '.$nilai_tugas.' '.'Grade : D';
                }
                elseif ($nilai_uts>=56 && $nilai_uts<=69 || $nilai_uas>=56 && $nilai_uas<=69 || $nilai_tugas>=56 && $nilai_tugas<=69){
                    //echo '<br>Nilai UTS : '.$nilai_uts.' '.'Grade : C';
                    //echo '<br>Nilai UAS : '.$nilai_uas.' '.'Grade : C';
                    //echo '<br>Nilai Tugas Praktikum : '.$nilai_tugas.' '.'Grade : C';
                }
                elseif ($nilai_uts>=70 && $nilai_uts<=84 || $nilai_uas>=70 && $nilai_uas<=84 || $nilai_tugas>=70 && $nilai_tugas<=84){
                    /*echo '<br>Nilai UTS : '.$nilai_uts.' '.'Grade : B';
                    echo '<br>Nilai UAS : '.$nilai_uas.' '.'Grade : B';
                    echo '<br>Nilai Tugas Praktikum : '.$nilai_tugas.' '.'Grade : B';*/
                }
                elseif ($nilai_uts>=85 && $nilai_uts<=100 || $nilai_uas>=85 && $nilai_uas<=100 || $nilai_tugas>=85 && $nilai_tugas<=100){
                    /*echo '<br>Nilai UTS : '.$nilai_uts.' '.'Grade : A';
                    echo '<br>Nilai UAS : '.$nilai_uas.' '.'Grade : A';
                    echo '<br>Nilai Tugas Praktikum : '.$nilai_tugas.' '.'Grade : A';*/
                }
                elseif ($nilai_uts>=100 && $nilai_uts<=0 || $nilai_uas>=100 && $nilai_uas<=0 || $nilai_tugas>=100 && $nilai_tugas<=0){
                    /*echo '<br>Nilai UTS : '.$nilai_uts.' '.'Grade : I';
                    echo '<br>Nilai UAS : '.$nilai_uas.' '.'Grade : I';
                    echo '<br>Nilai Tugas Praktikum : '.$nilai_tugas.' '.'Grade : I';*/
                }
                if (isset($proses)){
                echo 'Proses : '.$proses;
                echo '<br>Nama Siswa : '.$nama;
                echo '<br>Mata Kuliah : '.$mata_kuliah;
                echo '<br>Nilai UTS : '.$nilai_uts.' '.$grade;
                echo '<br>Nilai UAS : '.$nilai_uas.' '.$grade;
                echo '<br>Nilai Tugas Praktikum : '.$nilai_tugas.' '.$grade;

                $result = persentase($nilai_uts, $nilai_uas, $nilai_tugas);
                $grade_nilai = grade_nilai($result);
                echo '<br>Nilai Akhir : ', $result;
                echo '<br>Status : ', kelulusan($result);
                echo '<br>Grade Nilai : ', $grade_nilai;
                echo '<br>Predikat Nilai : ', predikat_nilai($grade_nilai);
               
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>