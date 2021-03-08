<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    
               
        <div class="container-fluid bg-light p-5  shadow-sm">
            <div class="row">
              <div class="col-8">
                <form method="POST" action="belanja.php" class="form-horizontal ">
                  <h1 class="text-secondary">Cupang Balle</h1>
                  <hr>
                  <div class="form-group row">
                    <label for="nama__customer" class="col-sm-4 col-form-label"><b>Nama Pembeli</b></label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="namacustomer">
                    </div>
                  </div>
                <!------------------------>

                  <fieldset class="form-group">
                    <div class="row">
                      <legend class="col-form-label col-sm-4 pt-0"><b>Pilih Cupang</b></legend>
                      <div class="col-sm-8">

                        <div class="form-check">
                          <input class="form-check-input" type="radio" id="Bluerim" name="produk" value="Bluerim" required>
                          <label class="form-check-label" for="Bluerim">
                          Bluerim
                          </label>
                        </div>
                        <!--------------------------->
                        <div class="form-check">
                          <input class="form-check-input" type="radio" id="Hellboy" name="produk" value="Hellboy" required>
                          <label class="form-check-label" for="Hellboy">
                            Hellboy 
                          </label>
                        </div>
                        <!--------------------------->
                        <div class="form-check">
                          <input class="form-check-input" type="radio" id="Halfmoon" name="produk" value="Halfmoon" required>
                          <label class="form-check-label" for="Halfmoon">
                          Halfmoon
                          </label>
                        </div>

                      </div>  <!---col-->
                    </div> <!---row-->
                  </fieldset> 
                  <div class="form-group row">
                 
                    <label for="jumlah__" class="col-sm-4 col-form-label"><b>Jumlah</b></label>
                    <div class="col-sm-5">
                      <input type="number" for="produk__" class="form-control" name="jumlah" value="" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="tanggal"><b>Tanggal Pesan</b></label>
                    <input type="date" name="tanggal" value="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="kurir">Jenis Kurir</label>
                    <input type="text" name="kurir" value="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" name="alamat" id="" cols="30" rows="5"></textarea>
                </div>

                <div class="form-group">
                    <label for="biaya_kurir">Biaya Kurir</label>
                    <input type="text" name="biaya_kurir" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="garansi">Garansi</label>
                    <input type="text" name="garansi" value="" class="form-control">
                </div>
<br>
                  <button href="" type="submit" class="btn btn-secondary pl-5 pr-5" name="proses">Kirim</button>

                </form>

              </div> <!-----col-6-->
              <div class="col-4 " >
                  <ul class="p-1 bg-white" style="list-style-type:none;border:1px solid #c4c4c4;">
                    <li class="bg-secondary p-2 text-white">Daftar Harga</li>
                    <li class="p-2">Bluerim : Rp. 100.000,-</li>
                    <li class="p-2 bg-light">Hellboy : Rp. 150.000</li>
                    <li class="p-2">Halfmoon : Rp. 90.000,-</li>
                    <li class="bg-secondary p-2 text-white">Noted : Harga bisa berubah dalam hitungan waktu</li>
                  </ul>
              </div>

              
            
            </div> <!---row-->
        </div> <!---containe-fluid-->

        <div class="container-fluid bg-light mt-5 mb-5 p-5 shadow-sm">
          <h1 class="animate__animated animate__bounce animate__infinite	infinite animate__delay-4s	4s">Total Belanjaan Anda!</h1>
          <br>
          <?php
          $proses= $_POST['proses']; 
          $nama_customer = $_POST['namacustomer'];
          $produk = $_POST['produk'];
          $jumlah = $_POST['jumlah'];
          $tanggal = $_POST['tanggal'];
          $kurir = $_POST['kurir'];
          $alamat = $_POST['alamat'];
          $biaya_kurir = $_POST['biaya_kurir'];
          $garansi = $_POST['garansi'];

          echo '<br/>Nama Customer: '.$nama_customer;
          echo '<br/>Pilihan Produk : '.$produk;
          echo '<br/>Tanggal Pesan : '.$tanggal;
          echo '<br/>Jenis Kurir : '.$kurir;
          echo '<br/>Alamat : '.$alamat;
          echo '<br/>Biaya Kurir : '.$biaya_kurir;
          echo '<br/>Garansi : '.$garansi;
          echo '<br/>Jumlah Beli : '.$jumlah;
          if($produk == "Bluerim") {
            echo "<br>Total : " . 100000 * $jumlah;
          }
          else if ($produk == "Hellboy") {
            echo "<br>Total : " . 150000 * $jumlah;
          }
          else {
            echo "<br>Total : " . 90000 * $jumlah;
          }
          ?>
        </div>
        


</body>
</html>