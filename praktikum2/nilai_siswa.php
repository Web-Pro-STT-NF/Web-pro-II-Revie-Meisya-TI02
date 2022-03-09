<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="GET" action="nilai_siswa.php">
    <br>
    <br>
    <div class="container">
    <h3>Form Nilai Siswa</h3>
    <hr>
  <div class="form-group row">
    <label for="text" class="col-2 col-form-label ">Nama Lengkap </label> 
    <div class="col-8">
      <input id="text" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-2 col-form-label">Mata kuliah </label> 
    <div class="col-8">
      <select id="select" name="matkul" class="custom-select">
        <option value="DDP">Dasar-Dasar Pemrograman</option>
        <option value="BD1">Basis Data 1</option>
        <option value="WEB1">Pemrograman Web</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-2 col-form-label " >Nilai UTS </label> 
    <div class="col-4">
      <input id="text1" name="nilai_uts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-2 col-form-label">Nilai UAS </label> 
    <div class="col-4">
      <input id="text2" name="nilai_uas" type="text" class="form-control" >
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-2 col-form-label">Nilai Tugas/Praktikum </label> 
    <div class="col-4">
      <input id="text3" name="nilai_tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-2 col-8">
      <button name="simpan" type="simpan" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</div>
</form>

<?php
error_reporting(0);
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];


echo '<br/>Nama Lengkap : '.$nama_siswa;
echo '<br/>Mata Kuliah : '.$mata_kuliah;
echo '<br/>Nilai UTS : '.$nilai_uts;
echo '<br/>Nilai UAS : '.$nilai_uas;
echo '<br/>Nilai Tugas : '.$nilai_tugas;

$hasil_uts = intval($nilai_uts) * 0.3;
            $hasil_uas = intval($nilai_uas) * 0.35;
            $hasil_tugas = intval($nilai_tugas) * 0.35;
            $nilai_akhir = $hasil_uts + $hasil_tugas + $hasil_uas;
            
            echo "<br> <p>Nilai Anda : $nilai_akhir</p>";
            if( $nilai_akhir > 55){
                echo "<h3>LULUS</h3>";
            }else{
                echo "<h3>TIDAK LULUS</h3>";
            }
        

            $nilai_A = $nilai_akhir >= 85;
            $nilai_B = $nilai_akhir >= 70;
            $nilai_C = $nilai_akhir >= 56;
            $nilai_D = $nilai_akhir >= 36;
            $nilai_E = $nilai_akhir >= 0;
            if($nilai_A){
                echo "Grade : A";
            }elseif($nilai_B){
                echo "Grade : B";
            }elseif($nilai_C){
                echo "Grade : C";
            }elseif($nilai_D){
                echo "Grade : D";
            }elseif($nilai_E){
                echo "Grade : E";
            }else{
                echo "Grade : I";
            }
            

            switch(true){
                case ($nilai_A):
                    echo "<br/>Predikat : Sangat Memuaskan";
                    break;
                case ($nilai_B):
                    echo "<br/>Predikat : Memuaskan";
                    break;
                case ($nilai_C):
                    echo "<br/>Predikat : Cukup";
                    break;
                case ($nilai_D):
                    echo "<br/>Predikat : Kurang";
                    break;
                case ($nilai_E):
                    echo "<br/>Predikat : Sangat Kurang";
                    break;
                default:
                    echo "<br/>Tidak Ada";
            }
        }

?>
