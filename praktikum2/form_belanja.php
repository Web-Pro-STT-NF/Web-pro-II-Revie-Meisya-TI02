<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="POST" action="form_belanja.php">
    <h2>Belanja Online</h2>
    <hr>
    <br>
    <br>
    <div class="container">
  <div class="form-group row">
    <label for="customer" class="col-2 col-form-label">Customer</label> 
    <div class="col-5">
      <input id="customer" name="customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-2">Pilih Produk</label> 
    <div class="col-5">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="pproduk" id="radio_0" type="radio" class="custom-control-input" value="tv"> 
        <label for="radio_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="pproduk" id="radio_1" type="radio" class="custom-control-input" value="kulkas"> 
        <label for="radio_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="pproduk" id="radio_2" type="radio" class="custom-control-input" value="mesinc"> 
        <label for="radio_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-2 col-form-label">Jumlah</label> 
    <div class="col-5">
      <input id="text" name="jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-2 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
    </div>
  </div>
</div>
</form>

<?php
error_reporting(0);
$customer = $_POST['customer'];
$pproduk = $_POST['pproduk'];
$jumlah = $_POST['jumlah'];


echo '<br/>Customer : '.$customer;
echo '<br/>Pilih Produk : '.$pproduk;
echo '<br/>Jumlah : '.$jumlah;

?>
