<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Operasi Aritmetika</title>
  </head>
  <body>

<section>
  <div class="container col-md-6 justify-content-center">
    <h1 class="text-center pb-3">OPERASI ARITMETIKA</h1>
    <P class="text-center pb-3">20192205138 - Nur Aini Awad</P>
    <p>
   <?php
    $hari = date('l');
    $bulan = date('m');
    $tanggal = date('d');
    $tahun = date('Y');
    
    switch($hari)
    {
        case"Sunday":$hari="Minggu";break;
        case"Monday":$hari="Senin";break;
        case"Tuesday":$hari="Selasa";break;
        case"Wednesday":$hari="Rabu";break;
        case"Thursday":$hari="Kamis";break;
        case"Friday":$hari="Jum'at";break;
        case"Saturday":$hari="Sabtu";break;
    }
    switch ($bulan)
    {
        case"1":$bulan="Januari";break;
        case"2":$bulan="Februari";break;
        case"3":$bulan="Maret";break;
        case"4":$bulan="April";break;
        case"5":$bulan="Mei";break;
        case"6":$bulan="Juni";break;
        case"7":$bulan="Juli";break;
        case"8":$bulan="Agustus";break;
        case"9":$bulan="September";break;
        case"10":$bulan="Oktober";break;
        case"11":$bulan="November";break;
        case"12":$bulan="Desember";break;   
    }
    echo "<center><br/>$hari, $tanggal $bulan $tahun "; echo date("G:i:s");
    ?></p>
    <form action="" method="post">
      <div class="form-group row pb-3">
        <label class="col-sm-3 col-form-label ">Angka Pertama</label>
        <div class="col-sm-7">
          <input type="number" class="form-control" name="angka1" placeholder="Masukkan Angka" >
        </div>
      </div>
      <div class="form-group row pb-3">
        <label class="col-sm-3 col-form-label ">Angka Kedua</label>
        <div class="col-sm-7">
          <input type="number" class="form-control" name="angka2" placeholder="Masukkan Angka" >
        </div>
      </div>
      <button type="submit" value="hitung" class="btn btn-primary" name="hitung">Hitung</button>
      <hr>
      <table class="table table-striped table-danger text-center">
      <?php
      $angka1 = isset($_POST["angka1"]) ? $_POST["angka1"] : "";
      $angka2 = isset($_POST["angka2"]) ? $_POST["angka2"] : "";

        if($angka1 == "")
        {
          echo "
          <tr>
          <td>Angka Pertama Tidak Boleh Dikosongkan</td></tr>";
        }
        else if ($angka2 == "")
        {
          echo "
          <tr>
          <td>Angka Kedua Tidak Boleh Dikosongkam</td></tr>";
        }
        else if($angka1<$angka2)
        {
          echo "
          <tr>
          <td>Angka Pertama harus lebih besar dari Angka Kedua</td>
          </tr>";
        }
        else
        {
          echo "";
        }
        ?>
      </table>
      <p><h3>Hasil Operasi Aritmatika</h3></p>
      <?php
      if($angka1 && $angka2)
      {
        if ($angka1<$angka2)
        {
          echo "";
        }
        else
        {
          echo "1. Hasil Pejumlahan = ".($angka1 + $angka2)."</br>";
          echo "2. Hasil Pengurangan = ".($angka1 - $angka2)."</br>";
          echo "3. Hasil Perkalian = ".($angka1 * $angka2)."</br>";
          echo "4. Hasil Pembagian = ".($angka1 / $angka2)."</br>";
          echo "5. Sisa Hasil Bagi = ".($angka1 % $angka2)."</br>";
        }
      }
      else
      {
        echo "";
      }
      ?>
    </form>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>