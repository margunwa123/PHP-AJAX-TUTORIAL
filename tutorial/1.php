<?php
/*
 $ APA ITU PHP?
  --> server side language
    >> server biasanya berhubungan sama database, get data, masukin data dan lain lain
    >> kadang berhubungan juga dengan operasi yang rumit, misal google ngeproses datanya tuh di server dia biar pas ngasih responsnya ke kita, misal search reccomendation, bakal bagus
  --> Bisa di "masukin" ke HTML
    >> PHP bisa dimasukin ke HTML secara langsung ke HTML

  ! echo (x) -> fungsi PHP yang digunakan buat nempelin x ke layar
  ! variabel di PHP diawali dengan $
  contoh: $nama = "biggus dikus"
          echo($nama)
  */
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../bootstrap.css">
  <title>Document</title>
</head>

<body>
  <?
  $hello_world = "hello world";
  ?>
  <!-- tuliskan variabel hello world di bawah ini -->
  <h1 id="hello_word"></h1>

  <!-- tuliskan hello world di bawah ini dengan tag h2 di php -->
  <div class="d-flex align-items-center flex-column">
    <?php
    $x = 5;

    echo ('<p>buat fungsi dibawah jadi tambah variabel x tiap iterasi di php</p>');
    echo 'Nilai variabel x = ' .  $x;
    ?>
  </div>
  <div class="bg-primary d-flex justify-content-center">
    <h1 id="number">0</h1>
  </div>

  <div class="d-flex justify-content-center mt-3">
    <!-- buat fungsi dibawah jadi tambah variabel x di php -->
    <button onclick="add(1)" class="btn btn-warning">Tambah 1</button>

    <a class="btn btn-primary" href="/tutorial/2.php">Next</a>
  </div>
</body>

<footer>
  <script>
    function add(x) {
      let intval = parseInt(document.getElementById("number").innerHTML)
      document.getElementById("number").innerHTML = intval + x
    }
  </script>
</footer>

</html>